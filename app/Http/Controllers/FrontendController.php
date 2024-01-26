<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sellmodel;

class FrontendController extends Controller
{
    public function data(){
        $data['products'] = sellmodel::all();
        // dd($data);
        return view('frontend.index',$data);
    }
}
