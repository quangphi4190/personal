<?php

namespace App\Http\Controllers\Api;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;
use Illuminate\Support\Facades\Auth;
use Carbon\Carbon;
use App\User;
use App\Otp;
use App\Wallet;
use Validator;
use Illuminate\Validation\Rule;
use Illuminate\Support\Facades\Storage;
use Illuminate\Support\Str;
use Illuminate\Support\Facades\Session;
class AuthController extends Controller
{
    use \App\Traits\Otp;

    public function signup(Request $request)
    {
        try {
            $data = $request->all();

            $validator = Validator::make($request->all(), [
                'name' => 'required|string',
                'email' => 'string|email|unique:users',
                'phone' => 'required|unique:users|digits:10',
                'password' => 'required|string'
            ], [
                'name.required' => 'the_name_field_is_required',
                'email.email' => 'the_email_must_be_a_valid_email_address',
                'email.unique' => 'the_email_has_already_been_taken',
                'email.string' => 'the_email_must_be_a_string',
                'phone.required' => 'the_phone_field_is_required',
                'phone.digits' => 'the_phone_must_be_10_digits',
                'phone.unique' => 'the_phone_has_already_been_taken',
                'password.required' => 'the_password_field_is_required'
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                foreach ($messages->all() as $error) {
                    return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
                }
            }

            $data['email_verified_at'] = date('Y-m-d H:i:s');
            $data['password'] = bcrypt($data['password']);
            $data['referral_code'] = referralCode($data['name'], $data['phone']);

            $user = User::create($data);

            return responseJson(0, 'success', $user);
        } catch (Exception $e) {
            return responseJson(config('errorcode.exception'), 'error exception', $e->getMessage());
        }
    }

    public function login(Request $request)
    {
        $data = $request->all();

        $validator = Validator::make($data, [
            'phone' => 'required',
            'password' => 'required|string',
            'remember_me' => 'boolean',
            'device_id' => 'required',
        ], [
            'phone.required' => 'the_phone_field_is_required',
            'password.required' => 'the_password_field_is_required',
            'device_id.required' => 'the_device_id_field_is_required',
        ]);

        if ($validator->fails()) {
            $messages = $validator->messages();
            foreach ($messages->all() as $error) {
                return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
            }
        }

        $credentials = ['phone' => $data['phone'], 'password' => $data['password']];

        if (!Auth::attempt($credentials)) {
            return response()->json([
                'error' => 401,
                'message' => 'Unauthorized'
            ], 401);
        }

        $user = $request->user();
        if (isset($data['type']) && $data['type'] == 2 || !$user->device_id) {

            $user->update(['device_id' => $data['device_id']]);

        }elseif ($data['device_id'] != $user->device_id) {
            return responseJson(config('errorcode.the_account_is_logged_on_another_device'), str_replace('_', ' ', 'the account is logged on another device'), null);
        }

        $tokenResult = $user->createToken('Personal Access Token');
        $token = $tokenResult->token;

        if ($request->remember_me) {
            $token->expires_at = Carbon::now()->addMonths(6);
        }

        $token->save();

        return response()->json([
            'error' => 0,
            'message' => 'success',
            'access_token' => $tokenResult->accessToken,
            'token_type' => 'Bearer',
            'expires_at' => Carbon::parse(
                $tokenResult->token->expires_at
            )->toDateTimeString()
        ]);
    }

    public function logout(Request $request)
    {
        $request->user()->token()->revoke();
        return responseJson(0, 'success');
    }

    public function user(Request $request)
    {
        $user = $request->user();
        $avatar_path = config('common.path_avatar').date('Y', strtotime($user->created_at))."/".date('m', strtotime($user->created_at));
        $user->avatar = $user->avatar ? url($avatar_path.'/'.$user->avatar) : url('img/avatar-default.png');

        return responseJson(0, 'success', $user);
    }

    public function update(Request $request)
    {
        try {

            $data = $request->only('name', 'email', 'address', 'city', 'identity_card', 'identity_card_date', 'identity_card_place', 'passport', 'passport_date', 'passport_place', 'bank_account');

            $user = $request->user();

            $validator = Validator::make($data, [
                'name' => 'required|string',
                'email' => [
                    'string',
                    'email',
                    Rule::unique('users')->ignore($user->id)
                ]
            ], [
                'name.required' => 'the_name_field_is_required',
                'email.email' => 'the_email_must_be_a_valid_email_address',
                'email.unique' => 'the_email_has_already_been_taken',
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                foreach ($messages->all() as $error) {
                    return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
                }
            }

            $data['identity_card_date'] = isset($data['identity_card_date']) && $data['identity_card_date']
                ? formatDateVNToEN($data['identity_card_date']) : null;

            $data['passport_date'] = isset($data['passport_date']) && $data['passport_date']
                ? formatDateVNToEN($data['passport_date']) : null;

            $user->update($data);
            $avatar_path = config('common.path_avatar').date('Y', strtotime($user->created_at))."/".date('m', strtotime($user->created_at));
            $user->avatar = $user->avatar ? url($avatar_path.'/'.$user->avatar) : url('img/avatar-default.png');

            return responseJson(0, 'success', $user);

        } catch (Exception $e) {

            return responseJson(config('errorcode.exception'), 'error exception', $e->getMessage());
        }
    }

    public function avatar(Request $request)
    {
        try {

            $file = $request->image;

            $validator = Validator::make(['image' => $file], [
                'image' => 'required|mimes:jpeg,jpg,png,gif|max:10000',
            ], [
                'image.required' => 'the_image_field_is_required',
                'image.mimes' => 'the_image_must_be_a_file_of_type:_jpeg,_jpg,_png,_gif',
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                foreach ($messages->all() as $error) {
                    return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
                }
            }

            $user = $request->user();

            $path = config('common.path_avatar').date('Y', strtotime($user->created_at))."/".date('m', strtotime($user->created_at));

            if($user->avatar) Storage::delete($path."/$user->avatar");
            $avatar_saved = Storage::putFile($path, $file, 'public');

            $user->update(['avatar' => basename($avatar_saved)]);

            return responseJson(0, 'success', url($avatar_saved));
        } catch (Exception $e) {

            return responseJson(config('errorcode.exception'), 'error exception', $e->getMessage());
        }
    }

    public function verify(Request $request)
    {
        try {

            $data = $request->only('phone', 'otp');

            $res = $this->checkOtp($data);

            if($res === true) return responseJson(0, 'success');

            return $res;

        } catch (Exception $e) {

            return responseJson(config('errorcode.exception'), 'error exception', $e->getMessage());
        }
    }

    public function forgot(Request $request)
    {
        try {
            $data = $request->only('phone', 'otp', 'password');

            $validator = Validator::make($data, [
                'phone' => 'required',
                'otp' => 'required',
                'password' => 'required|string'
            ], [
                'phone.required' => 'the_phone_field_is_required',
                'otp.required' => 'the_otp_field_is_required',
                'password.required' => 'the_password_field_is_required',
            ]);

            if ($validator->fails()) {
                $messages = $validator->messages();
                foreach ($messages->all() as $error) {
                    return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
                }
            }

            $res = $this->checkOtp($data);

            if($res === true){
                $user = User::wherePhone($data['phone'])->first(['id', 'email_verified_at']);

                if(!$user) return responseJson(config('errorcode.phone_number_does_not_exist_in_the_system'), 'phone number does not exist in the system');

                $user->update(['password' => bcrypt($data['password'])]);

                return responseJson(0, 'success');
            }

            return $res;

        } catch (Exception $e) {

            return responseJson(config('errorcode.exception'), 'error exception', $e->getMessage());
        }
    }

    public function isUseOmikey(Request $request)
    {
        $phone_numbers = $request->phone_numbers;
        $users = User::whereIn('phone', $phone_numbers)->get(['phone', 'name', 'avatar']);

        $arr = [];
        foreach ($users as $user) {
            $avatar_path = config('common.path_avatar').date('Y', strtotime($user->created_at))."/".date('m', strtotime($user->created_at));
            array_push($arr, [
                'phone' => $user->phone,
                'using' => true,
                'name' => $user->name,
                'avatar' => $user->avatar ? url($avatar_path.'/'.$user->avatar) : url('img/avatar-default.png')
            ]);

            $key = array_search($user->phone, $phone_numbers);
            unset($phone_numbers[$key]);
        }

        foreach ($phone_numbers as $phone) {
            array_push($arr, [
                'phone' => $phone,
                'using' => false,
                'name' => null,
                'avatar' => null
            ]);
        }

        return responseJson(0, '', $arr);
    }
}
