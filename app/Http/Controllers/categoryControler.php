<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\sellmodel;

class categoryControler extends Controller
{
    public function categorycreate(Request $request){
    
        $data = [
            'category_name'=>$request->category_name,
            'status'=> $request->status,   
       ];
       category::insert($data);
       return redirect()->back();
    }
    //Delete Record
    public function delete($id){
        if(!$id){
            return redirect()->back();
        }

       $cat_data= category::find($id);
       if($cat_data){
        $cat_data->delete();
       }
       return redirect()->back();
       }

   //Edit Data
   public function edit($id)
   {
    if(!$id){
        return redirect()->back();
    }
    $cat_data= category::find($id);
   if($cat_data){
    return view('backend.category.edit',compact('cat_data'));
   }
   return redirect()->back();
   }

   //Update Data
   public function update(Request $request,$id)
   {
    if(!$id){
        return redirect()->back();
    }
    $cat_data= category::find($id);
   if($cat_data){
    $data=[
        'category_name'=>$request->category_name,
        'status'=> $request->status,   
    ];
   $cat_data->update($data);
  return redirect()->route('dispalycate');
    
   }
   return redirect()->back();
}



    //Display Data
    public function display(){
        $data= category::all();
         return view('backend.category.display',compact('data'));
 
}

     //Display Data
     public function dispcate(){
        $data['categories']= category::all();
         return view('backend.User.Products.Sell',$data);
 
}

// search products
public function search(Request $request){
    // dd($request->all());
    $searchTerm=$request->search;
    $query= sellmodel::query();
    if($searchTerm){
        $query->where('Name','LIKE','%'.$searchTerm.'%')
        ->orwhere('Price','LIKE','%'.$searchTerm.'%')
        ->orwhere('description','LIKE','%'.$searchTerm.'%')
        ->orwhere('Address','LIKE','%'.$searchTerm.'%');
        $data['categories']=$query->get();
        //  dd($data); 
        return view('frontend.result',$data);
}else{
return redirect()->back();
}
}
}