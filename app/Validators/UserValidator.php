<?php

namespace App\Validators;

use \Prettus\Validator\Contracts\ValidatorInterface;
use \Prettus\Validator\LaravelValidator;
/**
 * Class UserValidator.
 *
 * @package namespace App\Validators;
 */
class UserValidator extends LaravelValidator
{
    /**
     * Validation Rules
     *
     * @var array
     */

    protected $rules = [
        ValidatorInterface::RULE_CREATE => [
            'name' => 'required',
            'username' => 'required|unique:users,username',
            'email'  => 'required|email|unique:users,email',
            'password' => 'required|min:8',
            'phone'=> 'required|unique:users|regex:/^([0-9\s\-\+\(\)]*)$/|min:10'
        ],
        ValidatorInterface::RULE_UPDATE => [
            'name' => 'required',
            'email' => 'required|email',
            "phone" => "required",
        ]
    ];
}
