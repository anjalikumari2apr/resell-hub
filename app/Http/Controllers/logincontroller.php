<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Session ;
use Illuminate\Support\Facades\Cookie;
use App\User;
class logincontroller extends Controller
{
    public function login(Request $request){
        // dd($request->all());

        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);

        $email = $request->email;
        $password = $request->password;
        $user = User::where('email',$request->email)->first(); //finding user    
        
        // dd($user);
        if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);
                      $userRoles = Auth::user()->roles;        
                      $userid = Auth::user()->id;
                      $request = session()->put('id',Auth::user()->id);
              
                    switch ($userRoles) {
                        case ($userRoles == 'Admin' ):
                            return redirect()->route('admin.dashboard');
                            break;

                        case ($userRoles == 'User'):
                            return redirect()->route('User.dashboard');
                            break;

                        default:
                            return redirect()->back();
                    }
                }
                $request->session()->flash('error','Incorrect Password');
                return redirect()->back();
            }
        }
        $request->session()->flash('error','User Not Found');
        return redirect()->back();
    }

        //Logout Code

    public function logout(){
        Auth::logout();
        Session::flush();
        $cookie = \Cookie::forget('myCookie');
        return redirect()->route('login.page');
    }

    
    }

