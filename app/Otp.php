<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Otp extends Model
{

	protected $fillable = ['code', 'phone', 'number_incorrect_attempts', 'otpable_type'];

    public function otpable()
    {
        return $this->morphTo();
    }
}
