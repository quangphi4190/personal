<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;

/**
 * Class PermissionValidator.
 *
 * @package namespace App\Validators;
 */
class PermissionValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */
    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required|unique:permissions,name',
            'key' => 'required|unique:permissions,key'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'key' => 'required'
        ],
    ];
}
