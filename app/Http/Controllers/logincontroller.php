<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class logincontroller extends Controller
{
    public function login(Request $request){
        // dd($request->all());

        // $request->validate([
        //     'email' => 'required | email',
        //     'password' => 'required | min:6'
        // ]);

        $email = $request->email;
        $password = $request->password;
        $user = user::where('email' ,$email)->first();           
        if($user){
           
            if($user->password){
                if (Hash::check($password,$user->password)){
                    Auth::login($user);
                    return redirect()->route('adminhome');

                               }   
                $request->session()->flash('error','please check password');
                return redirect()->back(); 
                       }
         $request->session()->flash('error','user not found');
        return redirect()->back(); 
        }}


        //Logout Code

    public function logout(){
        if(Auth::check()){
            Auth::logout();
            return redirect()->route('adminhome');
        }
        return redirect()->route('adminlogin');
    }
    }

