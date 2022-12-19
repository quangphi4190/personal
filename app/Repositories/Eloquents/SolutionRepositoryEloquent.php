<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\SolutionRepository;
use App\Solution;
use App\Validators\SolutionValidator;

/**
 * Class SolutionRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents\;
 */
class SolutionRepositoryEloquent extends BaseRepository implements SolutionRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Solution::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return SolutionValidator::class;
    }

    public function list()
    {
        $data = $this->model()::orderBy('order','asc');
        return \DataTables::eloquent($data)
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->editColumn('description', '{!!convert($description) !!}')
            ->addColumn('action', function ($data) {
                $token = csrf_token();
                return '
                <div class="btn-action"> 
                    <a href="'.route('solutions.edit', $data->id).'"><i class="fa fa-pencil"></i></a>

                    <a class="cursor" onclick="destroy(this)" title="Xóa"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('solutions.destroy', $data->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';

            })
            ->rawColumns(['action','created_at','description'])
            ->toJson();
    }
    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
