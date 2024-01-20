<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productviewmodel;

class productview extends Controller
{
    //Display Data
    public function display(){
        $data= productviewmodel::all();
         return view('backend.admin.product',compact('data'));
}

public function index(){
    $data['selltable'] = Revision:: latest()->paginate(15);
    return view('product-view',$data);
  }


  //Delete Record
  public function delete($id){
    if(!$id){
        return redirect()->back();
    }

   $cat_data= productviewmodel::find($id);
   if($cat_data){
    $cat_data->delete();
   }
   return redirect()->back();
   }
}