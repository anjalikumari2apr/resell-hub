<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;

use Illuminate\Support\Facades\Mail;
use Illuminate\Support\Facades\Auth;
use App\Mail\OrderMail;
use App\sellmodel;
use App\OrderModel;
use App\User;

class OrderCotroller extends Controller
{
    public function order(Request $request,$id){
        // dd($id);
        if($user = Auth::id()){
            $product = sellmodel::find($id);
                $P_id = $product->id;
                $usrId = $product->user_id;
                $orderNo = rand(10,999999999999999);

                $data =[
                    'order_no' => $orderNo,
                    'product_id'=>$P_id,
                    'user_id'=>Auth::id()
                ];

                // dd($data); 
                OrderModel::insert($data);
                Mail::to(\auth()->user()->email)->send(new OrderMail($orderNo, $product));
                return redirect()->route('User.dashboard');           
        }else{
            return redirect()->route('login.page');
        }
    }

    public function index(){
        $id = session()->get('id');   
        $data= OrderModel::where('user_id',$id)->get(); 
        // dd($data);
        return view('backend.User.User_Order.UserOrder',compact('data'));
    }
}
