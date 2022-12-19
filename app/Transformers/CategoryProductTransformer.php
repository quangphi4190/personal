<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\CategoryProduct;

/**
 * Class CategoryProductTransformer.
 *
 * @package namespace App\Transformers\;
 */
class CategoryProductTransformer extends TransformerAbstract
{
    /**
     * Transform the CategoryProduct entity.
     *
     * @param \App\\CategoryProduct $model
     *
     * @return array
     */
    public function transform(CategoryProduct $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
