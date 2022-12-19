<?php

namespace App\Transformers\;

use League\Fractal\TransformerAbstract;
use App\\Community;

/**
 * Class CommunityTransformer.
 *
 * @package namespace App\Transformers\;
 */
class CommunityTransformer extends TransformerAbstract
{
    /**
     * Transform the Community entity.
     *
     * @param \App\\Community $model
     *
     * @return array
     */
    public function transform(Community $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
