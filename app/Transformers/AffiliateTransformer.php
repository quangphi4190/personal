<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\Affiliate;

/**
 * Class AffiliateTransformer.
 *
 * @package namespace App\Transformers\;
 */
class AffiliateTransformer extends TransformerAbstract
{
    /**
     * Transform the Affiliate entity.
     *
     * @param \App\\Affiliate $model
     *
     * @return array
     */
    public function transform(Affiliate $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
