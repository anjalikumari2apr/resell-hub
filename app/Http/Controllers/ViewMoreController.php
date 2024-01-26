<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\sellmodel;

class ViewMoreController extends Controller
{
    public function index($id){
        if(!$id){
            return redirect()->back();
        }

        $products = sellmodel::find($id);
        // dd($products);

        if($products){
            return view('frontend.ProductDetail', compact('products'));
        }

        if(!$id){
            session()->flash('error', 'Product NOt found !!');
            return redirect()->back();
        }
    }
}
