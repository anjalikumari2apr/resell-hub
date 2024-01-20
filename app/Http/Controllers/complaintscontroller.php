<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\complaintmodel;

class complaintscontroller extends Controller
{
    public function create(Request $request){
        $request->validate([
            'username' => 'required',
            'email' => 'email|required',
            'role' => 'required',
            'review' => 'required',
        ]);
    
        $data = [
            'username'=>$request->username,
            'email'=> $request->email,
            'role'=> $request->role,
            'review'=> $request->review,
       ];
       complaintmodel::insert($data);
      
       return redirect()->route('complaint');
    }



    //Display complaint  Data in admin.dashboard//

public function display(){
    $data= complaintmodel::all();
    return view('backend.admin.complaintview',compact('data'));
}
}
