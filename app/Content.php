<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

/**
 * Class Content.
 *
 * @package namespace App;
 */
class Content extends Model implements Transformable
{
    use TransformableTrait;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $table='content';
    protected $fillable = ['name','description','image_1','image_2','image_3','phone','text_contact','email','address','facebook','youtube'];

}
