<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class NewsValidator.
 *
 * @package namespace App\Validators;
 */
class NewsValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'description' => 'required',
            'image' => 'required',
            'content' => 'required',
            'category_id' => 'required|numeric',
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'description' => 'required',
           /* 'image' => 'required',*/
            'content' => 'required',
            'category_id' => 'required|numeric',
        ],
    ];
}
