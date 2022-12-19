<?php  

namespace App\Traits;
use Validator;
use App\Otp as OtpModel;

trait Otp
{
  public function checkOtp( $data = [] )
  {
    $validator = Validator::make($data, [
      'phone' => 'required',
      'otp' => 'required',
    ], [
      'phone.required' => 'the_phone_field_is_required',
      'otp.required' => 'the_otp_field_is_required',
    ]);

    if ($validator->fails()) {
      $messages = $validator->messages();
      foreach ($messages->all() as $error) {
        return responseJson(config('errorcode.' . $error), str_replace('_', ' ', $error));
      }
    }

    $otp = OtpModel::wherePhone($data['phone'])->first(['id', 'number_incorrect_attempts', 'phone', 'code', 'created_at']);

    if(!$otp || $data['otp'] != $otp->code) {
      if($otp) $otp->increment('number_incorrect_attempts');
      return responseJson(config('errorcode.incorrect_otp_code'), 'incorrect otp code', $otp);
    }

    $otp_expired = strtotime($otp->created_at) + config('common.otp_expired');

    if($otp_expired < time()) return responseJson(config('errorcode.otp_code_has_expired'), 'otp code has expired');

    $otp->delete();

    return true;
  }
}

?>