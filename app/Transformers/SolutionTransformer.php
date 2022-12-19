<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\Solution;

/**
 * Class SolutionTransformer.
 *
 * @package namespace App\Transformers\;
 */
class SolutionTransformer extends TransformerAbstract
{
    /**
     * Transform the Solution entity.
     *
     * @param \App\\Solution $model
     *
     * @return array
     */
    public function transform(Solution $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
