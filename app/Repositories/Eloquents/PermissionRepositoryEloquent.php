<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\PermissionRepository;
use App\Permission;
use App\Validators\PermissionValidator;

/**
 * Class PermissionRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class PermissionRepositoryEloquent extends BaseRepository implements PermissionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Permission::class;
    }
    public function permissionList()
    {
        $permissions = $this->model()::select('permissions.*');
        return \DataTables::eloquent($permissions)
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->editColumn('path', function($permissions){
                $methods = json_decode($permissions->method);
                $html_mt = '';
                $rs = '';

                foreach ($methods as $key => $method) {
                    $html_mt .= "<span class='label label-primary'>$method</span> ";
                }

                $paths = explode("\n", str_replace("\r", "", $permissions->path));
                $html_path = '';

                if(sizeof($methods) > 1){
                    foreach ($paths as $key => $path) {
                        $html_path .= "<code>$path</code> ";
                    }

                    $rs = $html_mt.$html_path;
                }else{

                    if(sizeof($methods) == 0) $html_mt = "<span class='label label-primary'>ANY</span> ";

                    foreach ($paths as $key => $path) {
                        $rs .= $html_mt."<code>$path</code> </br>";
                    }
                }

                return $rs;
            })
            ->addColumn('action', function ($permissions) {
                $token = csrf_token();
                    return '
                <div class="btn-action">   
                    <a title="Chỉnh sửa quyền" href="' . route('permissions.edit', $permissions->id) . '"><i class="fa fa-edit"></i></a>                   
                    <a title="Xem quyền" href="' . route('permissions.show', $permissions->id) . '"><i class="fa fa-eye"></i></a>                       
                    <a class="cursor" title="Xóa quyền" onclick="deleteQuyen(this)"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('permissions.destroy', $permissions->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';
            })
            ->rawColumns(['action', 'path'])
            ->toJson();
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return PermissionValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
