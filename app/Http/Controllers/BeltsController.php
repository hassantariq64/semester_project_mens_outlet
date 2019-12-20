<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class BeltsController extends Controller
{
    public function strip(){
        return view('belts.belts');
    }
}
