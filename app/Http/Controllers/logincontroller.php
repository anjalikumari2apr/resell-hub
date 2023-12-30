<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\User;
class logincontroller extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email'=>'required | email',
            'password'=>'required | min:5'
        ]);
        $data = User::where('email',$request->email)->first();
        dd($data);
    }

    }

