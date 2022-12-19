<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\BannerRepository;
use App\Banner;
use App\Validators\BannerValidator;

/**
 * Class BannerRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents;
 */
class BannerRepositoryEloquent extends BaseRepository implements BannerRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Banner::class;
    }
    public function bannersList()
    {
        $banners = $this->model()::select('*');
        return \DataTables::eloquent($banners)
            ->editColumn('image', '<img class="avatar-sm" src="./upload/shares/{{ $image }}">')
            ->editColumn('description', '{!!convert($description) !!}')
            ->addColumn('action', function($banners) {
                $route = route('banners.destroy', $banners->id);
                $token = csrf_token();
                return '
            <div class="btn-action">
                <a href="'.route('banners.edit', $banners->id).'"><i class="fa fa-pencil"></i></a>
                <a onclick="destroy(this)" href="javascript:;">
                    <i class="fa fa-trash-o"></i>
                    <form action="'.$route.'" method="POST">
                        <input type="hidden" name="_method" value="DELETE">
                        <input type="hidden" name="_token" value="'.$token.'">
                    </form>
                </a>
            </div>';
            })
            ->rawColumns(['action','image'])
            ->toJson();
    }
    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return BannerValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
