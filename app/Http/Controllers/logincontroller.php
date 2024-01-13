<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\User;
class logincontroller extends Controller
{
    public function login(Request $request){
        $request->validate([
            'email' => 'required | email',
            'password' => 'required | min:6'
        ]);

        $user = User::where('email',$request->email)->first(); //finding user
              
        if($user){
            if($user->password){
                if(Hash::check($request->password, $user->password)){
                    Auth::login($user);

                    $role = Auth::user()->roles;
                    // dd($role);
                    if($role == 'Admin'){
                        return redirect()->route('admindashboard');
                    }
                    elseif($role == 'Buyer'){
                        return redirect()->route('buyerdashboard');
                    }
                    elseif($role == 'Seller'){
                        return redirect()->route('sellerdashboard');
                    }
                    echo'faoiled to log';
                    die;
                   }
                return redirect()->back(); 
            }         
            return redirect()->back(); 
        }
        return redirect()->back(); 
    }

    }

