<?php

namespace App\Repositories\Eloquents\;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\CategoryProductRepository;
use App\\CategoryProduct;
use App\Validators\CategoryProductValidator;

/**
 * Class CategoryProductRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents\;
 */
class CategoryProductRepositoryEloquent extends BaseRepository implements CategoryProductRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return CategoryProduct::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return CategoryProductValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }
    
}
