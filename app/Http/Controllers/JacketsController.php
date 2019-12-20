<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class JacketsController extends Controller
{
    public function uppers(){
        return view('jackets.jackets');
    }
    public function leatherjacketsuppers(){
        return view('jackets.category.leatherjackets');
    }
    public function hoodiesuppers(){
        return view('jackets.category.hoodies');
    }
    public function blazersuppers(){
        return view('jackets.category.blazers');
    }
    public function woolenjacketsuppers(){
        return view('jackets.category.woolenjackets');
    }
}
