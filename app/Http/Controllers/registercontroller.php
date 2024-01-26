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

    $request->validate([
            'name'=>'required',
            'email' => 'required | email | unique:users',
            'password' => 'required | min:6'
        ]);

    $data = [
        'name'=>$request->name,
        'email'=> $request->email,
        'password'=>bcrypt($request->password),
        'roles'=> 'User'
       
   ];

//    dd($data);
   user::insert($data);
  
   return redirect()->route('login.page');
    }


    //to add admins in admin pannel//
    public function create(Request $request){
       
        //dd($request);
        $request->validate([
            'username' => 'required',
            'email' => 'email|required',
            'password' => 'required',
            

            
        ]);

        $data = [
            'name'=>$request->username,
            'email'=> $request->email,
            'password'=>bcrypt($request->password),
            'roles'=> 'Admin'
               
       ];
       //dd($data);
    User::insert($data);
   
    return redirect()->back();
 }

 
//Display testimonial  Data in backend admin//
    public function dd(){
    $data= testimonialmodel::all();
     return view('backend.admin.testimonialview',compact('data'));
}

    
}




