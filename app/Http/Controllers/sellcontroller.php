<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\category;
use App\sellmodel;
use App\productviewmodel;
class sellcontroller extends Controller
{

    public function sellcreate(Request $request){
        // dd($request);

        $request->validate([
            'category_id'=>'required',
            'name' => 'required',
            'price' =>'required',
            'email' => 'required | email ',
            'contact' => 'required',
            'address' => 'required',
            'description' => 'required',
            'image' => 'required',
        ]);


        $images = array();

        if($files = $request->file('image') && is_array($request->file('image'))){
            
            for ($i = 0; $i <= 2; $i++) {
                $imageKey = 'image' . $i;
                if ($request->file('image')[$i]) {
                    $file =  $request->file('image')[$i];
                    $newName = time().'_'. rand(10,9999999999999).'_'.$file->getClientOriginalName();
                    $newPath = public_path()."/Product_Images/";
                    $file->move($newPath, $newName);
                    $images[$imageKey] = $newName;
                }
            }

            // dd($images);
    
            $data = [
                'category_id'=>$request->category_id,
                'Name'=>$request->name,
                'Price'=>$request->price,
                'Email'=>$request->email,
                'Contact'=>$request->contact,
                'Address'=>$request->address,
                'description'=>$request->description,
                'user_id'=>$request->session()->get('id'),
                'image' =>$images['image0'] ?? "",
                'image2'=>$images['image1'] ?? "",
                'image3'=>$images['image2'] ?? "",
            ];

    //    dd($data);
            sellmodel::insert($data);      
            return redirect()->back();
    }
}

    public function displayData(){
        $data['categories']= category::where('status',1)->get();
         return view('backend.User.Products.Sell',$data);
 
}

    //Display table  Data in UI card//
    public function displayproduct(){
        $data= sellmodel::all();
        return view('backend.User.Products.ManageProduct',compact('data'));
    }
}