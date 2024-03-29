<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\SettingModel;
class SettingController extends Controller
{
    public function create(Request $request){
        // dd($request);

        $request->validate([
            'image' => 'required',
           
        ]);


        $images = array();

        if($files = $request->file('image') && is_array($request->file('image'))){
            
            for ($i = 0; $i <= 7; $i++) {
                $imageKey = 'image' . $i;
                if ($request->file('image')[$i]) {
                    $file =  $request->file('image')[$i];
                    $newName = time().'_'. rand(10,9999999999999).'_'.$file->getClientOriginalName();
                    $newPath = public_path()."/Product_Images/";
                    $file->move($newPath, $newName);
                    $images[$imageKey] = $newName;
                }
            }

            //  dd($images);
    
            $data = [
                'image1' =>$images['image0'] ?? "",
                'image2'=>$images['image1'] ?? "",
                'image3'=>$images['image2'] ?? "",
                'image4'=>$images['image3'] ?? "",
                'image5'=>$images['image4'] ?? "",
                'image6'=>$images['image5'] ?? "",
                'image7'=>$images['image6'] ?? "",
                'image8'=>$images['image7'] ?? "",
            ];

    //    dd($data);
    SettingModel::insert($data);      
            return redirect()->back();
    }
}

 //Display Slider Image
 public function display(){
    $data= SettingModel::all();
    return view('backend.admin.Setting.Slide.display',compact('data'));
}

//Edit Data
public function edit($id)
{
 if(!$id){
     return redirect()->back();
 }
 $image= SettingModel::find($id);
if($image){
 return view('backend.admin.Setting.slide.edit',compact('image'));
}
return redirect()->back();
}

//Update Data
public function update(Request $request,$id)
{
 if(!$id){
     return redirect()->back();
 }
 $image= SettingModel::find($id);
if($image){
 $data=[
     'image'=>$request->image1,
     'image'=>$request->image2,
     'image'=>$request->image3,
     'image'=>$request->image4,
     'image'=>$request->image5,
     'image'=>$request->image6,
     'image'=>$request->image7,
     'image'=>$request->image8,
     
 ];
$image->update($data);
return redirect()->route('backend.admin.Setting.Slide.display');
 
}
return redirect()->back();
}

}
