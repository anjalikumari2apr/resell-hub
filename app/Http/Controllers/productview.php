<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\productviewmodel;
use App\sellmodel;

class productview extends Controller
{
    //Display Data
    public function display(){
        $data= sellmodel::all();
         return view('backend.admin.product',compact('data'));
}

public function index(){
    $data['selltable'] = sellmodel:: latest()->paginate(15);
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

   //Display Data in shop form
   public function displaypro(){
    $data['categories'] = productviewmodel::with('products')->get();
    // dd($data);
     return view('frontend.Productview',$data);
    }

}