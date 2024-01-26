<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

class Catviewcontroller extends Controller
{
    public function phones(){
        return view('frontend.categoryforms.phones&laptop');
    }

    public function homeappliences(){
        return view('frontend.categoryforms.homeappliences');
    }

    
    public function k(){
        return view('');
    }

    
    public function a(){
        return view('');
    }
}
