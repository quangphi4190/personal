<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\Supports;

/**
 * Class SupportsTransformer.
 *
 * @package namespace App\Transformers\;
 */
class SupportsTransformer extends TransformerAbstract
{
    /**
     * Transform the Supports entity.
     *
     * @param \App\\Supports $model
     *
     * @return array
     */
    public function transform(Supports $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
