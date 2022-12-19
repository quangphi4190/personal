<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\NewsRepository;
use App\News;
use App\Validators\NewsValidator;

/**
 * Class NewsRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class NewsRepositoryEloquent extends BaseRepository implements NewsRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return News::class;
    }
    public function newsList()
    {
        $news = $this->model()::with('category:id,name')->select('news.*');// : //$this->model()::with('category:id,name')->select('news.*')->whereIn('category_id',$category_id);
        return \DataTables::eloquent($news)
            ->editColumn('description', '{!!convert($description) !!}')
            ->editColumn('feature', function($news) {
                return $news->feature == 1 ? '<i class="fa fa-check" aria-hidden="true"></i>' : '';
            })
            ->addColumn('action', function($news) {
                $route = route('news.destroy', $news->id);
                $token = csrf_token();
                $check = $news->category_id == 1 ? 'd-none' : '';
                return '
            <div class="btn-action ">
                <a href="'.route('news.edit', $news->id).'"><i class="fa fa-pencil"></i></a>
                <a class="'.$check.'" onclick="destroy(this)" href="javascript:;">
                    <i class="fa fa-trash-o"></i>
                    <form action="'.$route.'" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="'.$token.'">
                    </form>
                </a>
            </div>';
            })
            ->rawColumns(['action','feature'])
            ->toJson();
    }

    public function qlynoidung()
    {
        $news = $this->model()::with('category:id,name')->select('news.*')->whereIn('category_id',[1,2,3,5]);
        return \DataTables::eloquent($news)
            ->editColumn('description', '{!!convert($description) !!}')
            ->editColumn('feature', function($news) {
                return $news->feature == 1 ? '<i class="fa fa-check" aria-hidden="true"></i>' : '';
            })
            ->addColumn('action', function($news) {
                $route = route('news.destroy', $news->id);
                $token = csrf_token();
                $check = $news->category_id == 1 ? 'd-none' : '';
                return '
            <div class="btn-action ">
                <a href="'.route('news.edit', $news->id).'"><i class="fa fa-pencil"></i></a>
               
            </div>';
            })
            ->rawColumns(['action','feature'])
            ->toJson();
    }
    public function newsListCate($category_id)
    {
        $news = $this->model()::with('category:id,name')->select('news.*')->whereIn('category_id',$category_id);
        return \DataTables::eloquent($news)
            ->editColumn('description', '{!!convert($description) !!}')
            ->editColumn('feature', function($news) {
                return $news->feature == 1 ? '<i class="fa fa-check" aria-hidden="true"></i>' : '';
            })
            ->addColumn('action', function($news) {
                $route = route('news.destroy', $news->id);
                $token = csrf_token();
                return '
            <div class="btn-action">
                <a href="'.route('news.edit', $news->id).'"><i class="fa fa-pencil"></i></a>
                <a onclick="destroy(this)" href="javascript:;">
                    <i class="fa fa-trash-o"></i>
                    <form action="'.$route.'" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="'.$token.'">
                    </form>
                </a>
            </div>';
            })
            ->rawColumns(['action','feature'])
            ->toJson();
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return NewsValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
