<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;

class categoryControler extends Controller
{
    public function categorycreate(Request $request){
        $data = [
            'category_name'=>$request->category_name,
            'status'=> $request->status,   
       ];
       category::insert($data);
    }

    public function display(){
        $data['categories']= category::where('status')->get();
         return view('backend.category',$data);
 
}
}
