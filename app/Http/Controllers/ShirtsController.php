<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShirtsController extends Controller
{
    public function upperbody(){
        return view('shirts.shirts');
    }
    public function dressbody(){
        return view('shirts.category.dressshirts');
    }
    public function casualbody(){
        return view('shirts.category.casualshirts');
    }
    public function tshirtsbody(){
        return view('shirts.category.tshirts');
    }
    public function tuxedobody(){
        return view('shirts.category.tshirts');
    }
    
}
