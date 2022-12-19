<?php

namespace App\Repositories\Eloquents;

use Prettus\Repository\Eloquent\BaseRepository;
use Prettus\Repository\Criteria\RequestCriteria;
use App\Repositories\Contracts\AffiliateRepository;
use App\Affiliate;
use App\Validators\AffiliateValidator;

/**
 * Class AffiliateRepositoryEloquent.
 *
 * @package namespace App\Repositories\Eloquents\;
 */
class AffiliateRepositoryEloquent extends BaseRepository implements AffiliateRepository
{
    /**
     * Specify Model class name
     *
     * @return string
     */
    public function model()
    {
        return Affiliate::class;
    }

    /**
    * Specify Validator class name
    *
    * @return mixed
    */
    public function validator()
    {

        return AffiliateValidator::class;
    }


    /**
     * Boot up the repository, pushing criteria
     */
    public function boot()
    {
        $this->pushCriteria(app(RequestCriteria::class));
    }

}
