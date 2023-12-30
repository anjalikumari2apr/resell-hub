<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\sellmodel;
class sellcontroller extends Controller
{

    public function sellcreate(Request $request){
        $data = [
            'Name'=>$request->name,
            'Price'=> $request->price,
            'description'=>$request->description,
           
            'image'=>$request->image,
            'category_id'=>$request->category_id
       ];
       sellmodel::insert($data);
    }

    public function displayData(){
        $data['categories']= category::where('status',1)->get();
         return view('frontend.sell',$data);
 
}
}