<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class PantsController extends Controller
{
    public function lowerbody(){
        return view('pants.pants');
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
