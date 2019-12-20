<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class ShoesController extends Controller
{
    public function shoeslowerbody(){
        return view('shoes.shoes');
    }
    public function casualshoesbody(){
        return view('shoes.category.casualshoes');
    }
    public function bootslowerbody(){
        return view('shoes.category.boots');
    }
    public function loaferslowerbody(){
        return view('shoes.category.loafers');
    }
    public function formalshoeslowerbody(){
        return view('shoes.category.formalshoes');
    }
    public function oxfordsshoeslowerbody(){
        return view('shoes.category.oxfords');
    }
}
