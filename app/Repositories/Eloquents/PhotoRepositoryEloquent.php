<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\PhotoRepository;
use App\Photo;
use App\Validators\PhotoValidator;

/**
 * Class PhotoRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class PhotoRepositoryEloquent extends BaseRepository implements PhotoRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Photo::class;
    }
    public function photosList()
    {
        $photos = $this->model()::select('*');
        return \DataTables::eloquent($photos)
            ->editColumn('description', '{!!convert($description) !!}')
            ->editColumn('feature', function($photos) {
                return $photos->feature == 1 ? '<i class="fa fa-check" aria-hidden="true"></i>' : '';
            })
            ->addColumn('action', function($photos) {
                $route = route('photo.destroy', $photos->id);
                $token = csrf_token();
                return '
            <div class="btn-action">
                <a href="'.route('photo.edit', $photos->id).'"><i class="fa fa-pencil"></i></a>
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

        return PhotoValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
