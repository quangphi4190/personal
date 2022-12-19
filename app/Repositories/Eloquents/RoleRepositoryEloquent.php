<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\RoleRepository;
use App\Role;
use App\Validators\RoleValidator;

/**
 * Class RoleRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class RoleRepositoryEloquent extends BaseRepository implements RoleRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Role::class;
    }
    public function roleList()
    {
        $roles = $this->model()::with('permissions:id,name')->select('roles.*');
        return \DataTables::eloquent($roles)
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->addColumn('action', function ($roles) {
                $token = csrf_token();
                $is_status = $roles->active == 1 ? 'on' : 'off';
                $title = $roles->active == 1 ? 'Vô hiệu hóa vai trò' : 'Kích hoạt vai trò';
                    return '
                <div class="btn-action" data-status="'.$is_status.'">   
                    <a title="Chỉnh sửa vai trò" href="' . route('roles.edit', $roles->id) . '"><i class="fa fa-edit"></i></a>                   
                    <!--<a class="cursor" onclick="changeStatus(this)" title="'.$title.'" ><i class="fa fa-toggle-'.$is_status.'"></i>
                        <form method="POST" action="' . route('roles.changeStatus', $roles->id) . '">                       
                            <input type="hidden" name="_method" value="PUT">
                            <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                     </a>
                    <a class="cursor" title="Xóa vai trò" onclick="deleteRole(this)"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('roles.destroy', $roles->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';
            })
            ->addColumn('permissions', function ($roles) {
                $permissions = '';

                foreach ($roles->permissions as $permission){
                    $permissions .= '<span class="label label-primary">'.$permission->name.'</span> ';
                }

                return $permissions;
            })
            ->rawColumns(['action','permissions'])
            ->toJson();
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return RoleValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
