<?php

namespace App\Http\Controllers;
use App\Product;

use Illuminate\Http\Request;

class PantsController extends Controller
{
    public function lowerbody(){
        $products = Product::all();
        return view('pants.pants')->with('products', $products);
    }
    public function casualpantsbody(){
        return view('pants.category.casualpants');
    }
    public function sweatpantsbody(){
        return view('pants.category.sweatpants');
    }
    public function skinnypantsbody(){
        return view('pants.category.skinnypants');
    }
}
