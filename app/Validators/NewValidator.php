<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class CategoryValidator.
 *
 * @package namespace App\Validators;
 */
class NewValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
        	'title' => 'required',
        	'category_id' => 'required',
        ],
        ValidatorInterface::RULE_UPDATE => [
        	'title' => 'required',
        	'category_id' => 'required',
        ],
    ];
}
