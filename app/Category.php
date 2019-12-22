<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Category extends Model
{
    protected $fillable = ['cname'];

    public function posts()
    {
        return $this->hasMany('App\Product');
    }
    
}
