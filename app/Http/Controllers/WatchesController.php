<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class WatchesController extends Controller
{
    public function wrist(){
        return view('watches.watches');
    }
    public function quartzwatcheswrist(){
        return view('watches.category.quartzwatches');
    }
    public function mechanicalwatcheswrist(){
        return view('watches.category.mechanicalwatches');
    }
    public function sportswatcheswrist(){
        return view('watches.category.sportswatches');
    }
    public function digitalwatcheswrist(){
        return view('watches.category.digitalwatches');
    }
}
