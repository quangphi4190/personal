<?php

namespace App\Http\Controllers;

use App\User;
use App\Role;
use App\News;
use Illuminate\Http\Request;
use Prettus\Validator\Contracts\ValidatorInterface;
use Prettus\Validator\Exceptions\ValidatorException;
use App\Repositories\Contracts\UserRepository;
use App\Validators\UserValidator;
use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\DB;
use Illuminate\Support\Facades\Session;
/**
 * Class UsersController.
 *
 * @package namespace App\Http\Controllers;
 */
class UsersController extends Controller
{
    /**
     * @var UserRepository
     */
    protected $repository;
    /**
     * @var UserValidator
     */
    protected $validator;

    /**
     * UsersController constructor.
     *
     * @param UserRepository $repository
     * @param UserValidator $validator
     */

    public function __construct(UserRepository $repository, UserValidator $validator)
    {
        $this->middleware('auth');
        $this->repository = $repository;
        $this->validator  = $validator;
    }

    /**
     * Display a listing of the resource.
     *
     * @return \Illuminate\Http\Response
     */
    public function index()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        if (request()->wantsJson()) {

            return $this->repository->userList(1);
        }

        $loggedUser = (object) Session::get('user');

        $user = $this->repository->find($loggedUser->id);
        $arrIdRole = array();
        foreach ($user->roles as $role) {
            $arrIdRole[] = $role->id;
        }

        Session::put('roleId', $arrIdRole);
        $pageTitle = 'Danh sách người dùng';
        $breadcrumb = 'Danh sách';
        $createUser = 'Thêm mới người dùng';
        return view('users.index', compact('pageTitle','breadcrumb','createUser'));
    }

    /**
     * Store a newly created resource in storage.
     *
     * @param  UserCreateRequest $request
     *
     * @return \Illuminate\Http\Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function create(){

        $breadcrumb = 'Thêm mới';
        $pageTitle = 'Danh sách người dùng';
        $roles = Role::where('active',1)->get();
        return view('users.create',compact('pageTitle','roles','breadcrumb'));
    }


    public function store(Request $request)
    {
        try {
            $data = $request->all();
            $data['role'][0] = 7;
            $filepath  = $data['avatar'];
            $avatar = strstr($filepath, 'shares/');
            $avatar = str_replace("shares/","",$avatar);
            $data['avatar'] = trim($avatar);
            $this->validator->with($data)->passesOrFail(ValidatorInterface::RULE_CREATE);
            $data['password'] = bcrypt($data['password']);
            $user = $this->repository->create($data);
            $dataWallet['user_id'] = $user->id;
            $dataWallet['name'] = $user->phone;
            $dataWallet['point'] = 0;
            $dataWallet['active'] = 1;//active
            if(isset($data['role']) && $user){
                for ($i=0;$i < sizeof($data['role']); $i++) {
                    $user = User::find($user->id);
                    $user->roles()->attach($data['role'][$i]);
                }

            }
            $response = [
                'message' => 'Tạo người dùng thành công!',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }
            $request->session()->flash('status', $response['message']);
            return redirect('users');
        } catch (ValidatorException $e) {
            if ($request->wantsJson()) {
                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }

    /**
     * Display the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function show($id)
    {
        $user = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }

        return view('users.show', compact('user'));
    }

    /**
     * Show the form for editing the specified resource.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function edit($id)
    {
        $roles = Role::where('active',1)->get();
        $user = $this->repository->find($id);
        $arrIdRole = array();
        foreach ($user->roles as $role) {
            $arrIdRole[] = $role->id;
        }

        $https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
        $_SERVER['REQUEST_SCHEME'] = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : $https;
        $url =$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/photos/shares/';
        $pageTitle = 'Danh sách người dùng';
        $breadcrumb = 'Cập nhật thông tin người dùng';
        return view('users.edit', compact('user','pageTitle','url','roles','arrIdRole','breadcrumb'));
    }

    /**
     * Update the specified resource in storage.
     *
     * @param  UserUpdateRequest $request
     * @param  string            $id
     *
     * @return Response
     *
     * @throws \Prettus\Validator\Exceptions\ValidatorException
     */
    public function update(Request $request, $id)
    {
        try {
            $request->validate([
                'name' => 'required',
                'username' => 'required|unique:users,username,'.$id,
                'email' => 'required|email|unique:users,email,'.$id,
                "phone" => 'required|regex:/^([0-9\s\-\+\(\)]*)$/|min:10|unique:users,phone,'.$id,
            ]);

            $data = $request->all();

            $filepath  = $data['avatar'];
            $avatar = strstr($filepath, 'shares/');
            $avatar = str_replace("shares/","",$avatar);
            $data['avatar'] = trim($avatar);

            $this->repository->update($data, $id);

            $user = $this->repository->find($id);

            if(isset($data['role'])) $user->roles()->sync($data['role']);

            $response = [
                'message' => 'Cập nhật thông tin người dùng thành công!',
                'data'    => $user->toArray(),
            ];

            if ($request->wantsJson()) {

                return response()->json($response);
            }

            $request->session()->flash('status', $response['message']);

            return redirect('users');
        } catch (ValidatorException $e) {

            if ($request->wantsJson()) {

                return response()->json([
                    'error'   => true,
                    'message' => $e->getMessageBag()
                ]);
            }

            return redirect()->back()->withErrors($e->getMessageBag())->withInput();
        }
    }


    /**
     * Remove the specified resource from storage.
     *
     * @param  int $id
     *
     * @return \Illuminate\Http\Response
     */
    public function destroy($id)
    {
        $deleted = $this->repository->delete($id);

        if (request()->wantsJson()) {

            return response()->json([
                'message' => 'User deleted.',
                'deleted' => $deleted,
            ]);
        }

        return redirect()->back()->with('message', 'Xóa người dùng thành công!');
    }
    /**
     * Deactive User.
     */
    public function changeStatus ($id){
        $user = $this->repository->find($id);
        $email_verified_at = $user->email_verified_at == null ? date('Y-m-d H:i:s') : null;
        $message = $user->email_verified_at == null ? 'Ngưng kích hoạt người dùng '.$user->name.' thành công!' : 'Kích hoạt người dùng '.$user->name. ' thành công!';
        User::where('id', $id)->update(array('email_verified_at' =>$email_verified_at ));

        return redirect()->back()->with('message', $message);
    }

    public function modal_resetpassword(Request $request){
        $id = $request->id;
        $user = $this->repository->find($id);
        return view('users.modal_resetpassword',compact('user'));
    }
    public function reset($id){
        $pageTitle = 'Đặt lại mật khẩu';
        $user = $this->repository->find($id);
        return view('users.reset-password',compact('user','pageTitle'));

    }
    public function update_password(Request $request){
        $data = $request->all();
        $id = $data['id'];
        $token = $data['_token'];
        $user = $this->repository->find($id);
        $data = $request->only(['password']);
        $url = url(config('app.url'));
        $data['password'] = $request->password;
        $data['url'] =$url;
        $newpass =  bcrypt($data['password']);
        User::where('id', $id)->update(array('password' =>$newpass ));

       /* Mail::send('emails.reset', $data, function ($m) use ($user) {
            $m->from(config('mail.from.address'), "Subtitle");

            $m->to($user->email, $user->name)->subject('Đặt lại mật khẩu!');
        });*/

        return redirect('users')->with('message', 'Đặt lại mật khẩu cho '.$user->name.' thành công!');
    }
    public function usersDestroy()
    {
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));

        if (request()->wantsJson()) {

            return $this->repository->userList(2);
        }

        $pageTitle = 'Danh sách người dùng';
        $breadcrumb = 'đã xóa';
        return view('users.list-destroy', compact('pageTitle','breadcrumb'));
    }
    public function revertUser ($id){
        $message = 'Khôi phục tài khoản thành công!';
        $deleted_at = null;
        User::onlyTrashed()->where('id', $id)->update(array('deleted_at' => $deleted_at ));
        return redirect('users/users-destroy')->with('message', $message);
    }
    public function profile($id)
    {
        $user = $this->repository->find($id);

        if (request()->wantsJson()) {

            return response()->json([
                'data' => $user,
            ]);
        }
        $pageTitle = 'Thông tin người dùng';
        return view('users.profile', compact('user','pageTitle'));
    }

    public function list_data_regis_exam (){
        $this->repository->pushCriteria(app('Prettus\Repository\Criteria\RequestCriteria'));
        $from_date = date('01/m/Y');
        $to_date = date('d/m/Y');
        if (request()->wantsJson()) {

            return $this->repository->regis_exam();
        }


        $pageTitle = 'Danh sách đăng ký trực tuyến';
        $breadcrumb = 'Danh sách';
        return view('users.regis_exam', compact('pageTitle','breadcrumb','from_date','to_date'));
    }

    public function quan_ly(){
        $pageTitle = 'Quản lý';
        $countU = User::where('deleted_at', null)->count();

        $countBaiViet = News::count();

        return view('users.quan_ly', compact('pageTitle','countU','countBaiViet'));
    }
}
