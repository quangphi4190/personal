<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\System;

/**
 * Class SystemTransformer.
 *
 * @package namespace App\Transformers\;
 */
class SystemTransformer extends TransformerAbstract
{
    /**
     * Transform the System entity.
     *
     * @param \App\\System $model
     *
     * @return array
     */
    public function transform(System $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
