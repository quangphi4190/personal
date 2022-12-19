<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\StatisticRepository;
use App\Statistic;
use App\Validators\StatisticValidator;

/**
 * Class StatisticRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents\;
 */
class StatisticRepositoryEloquent extends BaseRepository implements StatisticRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Statistic::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return StatisticValidator::class;
    }

    public function list()
    {
        $data = $this->model()::orderBy('order','asc');
        return \DataTables::eloquent($data)
            ->editColumn('created_at', '{!! formatDateENToVN($created_at) !!}')
            ->addColumn('action', function ($data) {
                $token = csrf_token();
                return '
                <div class="btn-action"> 
                    <a href="'.route('statistics.edit', $data->id).'"><i class="fa fa-pencil"></i></a>
                    <a class="cursor" onclick="destroy(this)" title="Xóa"><i class="fa fa-trash-o"></i>
                        <form method="POST" action="' . route('statistics.destroy', $data->id) . '">
                         <input type="hidden" name="_method" value="DELETE">
                         <input type="hidden" name="_token" value="'.$token.'">
                        </form>
                    </a>   
                </div>';

            })
            ->rawColumns(['action','created_at'])
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
