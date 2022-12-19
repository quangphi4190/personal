<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\CategoryRepository;
use App\Category;
use App\Validators\CategoryValidator;

/**
 * Class CategoryRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class CategoryRepositoryEloquent extends BaseRepository implements CategoryRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Category::class;
    }

    public function categoryList()
    {
        $categories = $this->model()::select('*')->orderBy('created_at','desc');

        return \DataTables::eloquent($categories)
        ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
        ->editColumn('status', '{!! statusCategory($status) !!}')
        ->addColumn('action', function($categories) {
            $route = route('categories.destroy', $categories->id);
            $is_status = $categories->status == 1 ? 'on' : 'off';
            $token = csrf_token();
            $title = $categories->status == 1 ? 'Ngừng hoạt động' : 'Hoạt động';
            return '
            <div class="btn-action">
                <a href="'.route('categories.edit', $categories->id).'"><i class="fa fa-pencil"></i></a>
                <!--<a onclick="destroy(this)" href="javascript:;">
                    <i class="fa fa-trash-o"></i>
                    <form action="'.$route.'" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="'.$token.'">
                    </form>
                </a>!-->
                 <a class="pd-r10 cursor" onclick="changeStatusUser(this)" title="'.$title.'" ><i class="fa fa-toggle-'.$is_status.'"></i>
                        <form method="POST" action="' . route('categories.changeStatus', $categories->id) . '">
                         <input type="hidden" name="_method" value="PUT">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>                        
                  </a>
            </div>';
        })
        ->rawColumns(['action','status'])
        ->toJson();
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CategoryValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
