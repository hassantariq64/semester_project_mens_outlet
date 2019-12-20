<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShadesController extends Controller
{
    public function glasses(){
        return view('shades.shades');
    }
    public function readingshades(){
        return view('shades.category.readingglasses');
    }
    public function sunglassesshades(){
        return view('shades.category.sunglasses');
    }
}
