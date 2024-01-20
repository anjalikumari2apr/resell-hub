<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\testimonialmodel;

class testimonial extends Controller
{
    public function create(Request $request){
       

        $request->validate([
            'username' => 'required',
            'email' => 'email|required',
            'review' => 'required',

            
        ]);

        $data = [
            'username'=>$request->username,
            'email'=> $request->email,
            'review'=> $request->review,
           
       ];
    testimonialmodel::insert($data);
   
    return redirect()->route('testimonial');
 }

 
//Display testimonial  Data in backend admin//
public function display(){
    $data= testimonialmodel::all();
     return view('backend.admin.testimonialview',compact('data'));
}

//Display testimonial  Data in frontend//

public function displaydata(){
    $data= testimonialmodel::all();
     return view('frontend.testimonial',compact('data'));
}
}