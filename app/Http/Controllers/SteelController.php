<?php

namespace App\Http\Controllers;

use App\Http\Controllers\Controller;
use Illuminate\Http\Request;

class SteelController extends Controller
{
    //
    public function about(){
        return view('about');
    }
    public function products(){
        return view('products');
    }
    public function projects(){
        return view('projects');
    }
    public function contact(){
        return view('contact');
    }
    public function fixed(){
        return view('fixed-tilt-solar-structures');
    }
}
