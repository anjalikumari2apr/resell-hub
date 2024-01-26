<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;

class ProfileController extends Controller
{
    //Display admin Profile 
   public function displayAdmin(){
    $data= User::all();
     return view('backend.admin.profile',compact('data'));
}
}
