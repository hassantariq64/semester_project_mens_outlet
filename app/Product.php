<?php

namespace App;

use Illuminate\Database\Eloquent\Model;

class Product extends Model
{
    protected $fillable = ['pname', 'description', 'category', 'image', 'price'];

    public function category()
    {
        return $this->belongsTo('App\Category');
    }
    
}
