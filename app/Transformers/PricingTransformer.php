<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\Pricing;

/**
 * Class PricingTransformer.
 *
 * @package namespace App\Transformers\;
 */
class PricingTransformer extends TransformerAbstract
{
    /**
     * Transform the Pricing entity.
     *
     * @param \App\\Pricing $model
     *
     * @return array
     */
    public function transform(Pricing $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
