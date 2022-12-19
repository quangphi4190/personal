<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\\Photo;

/**
 * Class PhotoTransformer.
 *
 * @package namespace App\Transformers;
 */
class PhotoTransformer extends TransformerAbstract
{
    /**
     * Transform the Photo entity.
     *
     * @param \App\\Photo $model
     *
     * @return array
     */
    public function transform(Photo $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
