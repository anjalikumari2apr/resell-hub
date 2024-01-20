<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Hash;
use Illuminate\Support\Facades\Auth;
use App\register;
use App\User;

class registercontroller extends Controller
{
    //Display Data
    public function display(){
        $data= register::all();
         return view('backend.admin.registerview',compact('data'));
}



// start registeration of user//
public function register(Request $request){
    $data = [
        'name'=>$request->name,
        'email'=> $request->email,
        'password'=>bcrypt($request->password),
        'roles'=> $request->roles,
       
   ];
   user::insert($data);
  
   return redirect()->route('loginview');
}
//end user register//


// start user login // 

public function login(Request $request){

   
   
    $email = $request->email;
    $password = $request->password;
    $user = user::where('email' ,$email)->first();       
    if($user){
        if($user->password){
            if (Hash::check($password,$user->password)){
                Auth::login($user);
                return redirect()->route('userdashboard');

                           }   
            $request->session()->flash('error','please check password');
            return redirect()->back(); 
                   }
     $request->session()->flash('error','user not found');
    return redirect()->back(); 
    }}
    //end user login//


    //check user login/
    
}




