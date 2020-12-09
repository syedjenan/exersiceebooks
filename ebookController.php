<?php

namespace App\Http\Controllers;

use app\Http\Controllers\ebookController;

class ebookController extends Controller
{
    public function about(){
        
        return view('subviews.about');
    }

    public function list(){
        return view('subviews.list');
    }

}