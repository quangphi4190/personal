<?php

namespace App\Transformers;

use League\Fractal\TransformerAbstract;
use App\\Contact;

/**
 * Class ContactTransformer.
 *
 * @package namespace App\Transformers;
 */
class ContactTransformer extends TransformerAbstract
{
    /**
     * Transform the Contact entity.
     *
     * @param \App\\Contact $model
     *
     * @return array
     */
    public function transform(Contact $model)
    {
        return [
            'id'         => (int) $model->id,

            /* place your other model properties here */

            'created_at' => $model->created_at,
            'updated_at' => $model->updated_at
        ];
    }
}
