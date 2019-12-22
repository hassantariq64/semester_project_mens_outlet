<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\Product;

class AdminController extends Controller
{
 
    public function login(){
    	return view('panel.login');
    }
}
