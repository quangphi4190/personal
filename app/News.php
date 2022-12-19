<?php

namespace App;

use Illuminate\Database\Eloquent\Model;
use Prettus\Repository\Contracts\Transformable;
use Prettus\Repository\Traits\TransformableTrait;

class News extends Model implements Transformable
{
    use TransformableTrait;
    protected $table='news';
     protected $fillable = ['slug','name','content','description','category_id','image','feature','status','created_at','updated_at','thuonghieu','xuatxuthuonghieu','sanxuattai','quycachdonggoi','mau','cautao','gia'];

    public function category()
    {
        return $this->belongsTo(Category::class);
    }
    public function images(){
        return $this->hasMany(NewImage::class);
    }
}
