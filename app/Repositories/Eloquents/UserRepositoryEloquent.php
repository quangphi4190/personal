<?php

namespace App\Repositories\Eloquents;

use App\DangKyThi;
use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\UserRepository;
use App\User;
use App\Validators\UserValidator;

/**
 * Class UserRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class UserRepositoryEloquent extends BaseRepository implements UserRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return User::class;
    }
    public function dangkyModal()
    {
        return DangKyThi::class;
    }

    public function userList($deleted_at = 1)
    {
        $users = ($deleted_at == 1)  ? $this->model()::select('users.*') : $this->model()::onlyTrashed()->select('users.*');
        $https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
        $_SERVER['REQUEST_SCHEME'] = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : $https;
        $url =$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/photos/shares';
        return \DataTables::eloquent($users)
//            ->editColumn('avatar', '<img class="avatar-sm" src="/upload/shares/{{ $avatar }}">')
            ->editColumn('email_verified_at', '{!! statusUser($email_verified_at) !!}')
            ->addColumn('action', function ($users) {
                $token = csrf_token();
                $is_status = $users->email_verified_at == null ? 'on' : 'off';
                $title = $users->email_verified_at == null ? 'Vô hiệu hóa người dùng' : 'Kích hoạt người dùng';
                if($users->deleted_at != null){
                    return '
                <div class="btn-action" data-status="'.$is_status.'">   
                     <a class="pd-r10 cursor" onclick="revertUser(this)" title="Khôi phục người dùng" ><i class="fa fa-repeat"></i>
                        <form method="POST" action="' . route('users.revertUser', $users->id) . '">
                         <input type="hidden" name="_method" value="PUT">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                     </a>                     
                </div>';
                }else{
                    return '
                <div class="btn-action" data-status="'.$is_status.'">   
                    <a class="pd-r10" title="Chỉnh sửa người dùng" href="' . route('users.edit', $users->id) . '"><i class="fa fa-edit"></i></a>                   
                     <a class="pd-r10 cursor" onclick="changeStatusUser(this)" title="'.$title.'" ><i class="fa fa-toggle-'.$is_status.'"></i>
                        <form method="POST" action="' . route('users.changeStatus', $users->id) . '">
                         <input type="hidden" name="_method" value="PUT">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                     </a>
                    <a class="pd-r10" title="Đặt lại mật khẩu" href="' . route('users.reset-password', $users->id) . '"><i class="fa fa-key"></i></a>   
                    <a class="cursor" onclick="deleteUser(this)" title="Xóa người dùng"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('users.destroy', $users->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';
                }
            })
            ->rawColumns(['action','email_verified_at'])
            ->toJson();
    }
    public function regis_exam()
    {
        $userRegis = $this->dangkyModal()::select('dangkythis.*')->where('status','<>',3)->orderBy('created_at','desc');
        $https = isset($_SERVER['HTTPS']) && $_SERVER['HTTPS'] == 'on' ? 'https' : 'http';
        $_SERVER['REQUEST_SCHEME'] = isset($_SERVER['REQUEST_SCHEME']) ? $_SERVER['REQUEST_SCHEME'] : $https;
        $url =$_SERVER['REQUEST_SCHEME'] . '://' . $_SERVER['HTTP_HOST'].'/photos/shares';
        return \DataTables::eloquent($userRegis)
            ->editColumn('sex', '{!! sex($sex) !!}')
            ->editColumn('birthday', '{!! formatDateENToVN($birthday) !!}')
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->editColumn('status', '{!! statusRegisExam($status) !!}')
            ->addColumn('action', function ($userRegis) {
                $token = csrf_token();
                $is_status = $userRegis->status == 2 ? 'on' : 'off';
                $title = $userRegis->status == 1 ? 'Chưa liên hệ ' : 'Đã liên hệ';

                    return '
                <div class="btn-action" data-status="'.$is_status.'">   
                     <a class="pd-r10 cursor" onclick="changeStatusUserRegis(this)" title="'.$title.'" ><i class="fa fa-toggle-'.$is_status.'"></i>
                        <form method="POST" action="' . route('users.changeStatusRegis', $userRegis->id) . '">
                         <input type="hidden" name="_method" value="PUT">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                     </a>
                    <a class="cursor" onclick="deleteUserRegis(this)" title="Xóa người dùng đăng ký"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('users.deleteUserRegis', $userRegis->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';

            })
            ->rawColumns(['action','status','created_at','birthday','sex'])
            ->toJson();
    }
    public function getRoleUser($id){
        $role = $this->model()::with('roles:id,name')->where('id',$id)->first();

        return $role;
    }
    /**
     * Specify Validator class name
     *
     * @return mixed
     */
    public function validator()
    {

        return UserValidator::class;
    }

    public function checkPermission($id){

    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
