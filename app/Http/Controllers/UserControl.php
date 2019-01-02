<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use App\orders;
use App\User;
use App\Http\Controllers\Auth;

class UserControl extends Controller
{

    public function myprofile(){
        return view('user/myprofile');
    }

    public function __construct(){
        $this->middleware('auth');
    }

    public function online(){
        return view('user/online_order');
        
    }

    public function upload(){
        return view('user/pupload');    

    }

    public function store(Request $request)
    {
        $this->validate($request,[
            'name'=>'required',
            'nic'=>'required|max:10',
            'mobile'=>'required',
            'email'=>'required|email',
            'payment'=>'required',
            'type'=>'required',
            'image'=>'required|image|mimes:jpeg,png,jpg,gif|max:2048',
            
        ]);
        
        $image =$request->file("image");
        $new_name = rand().'.'.$image->getClientOriginalExtension();
        $image->move(public_path('./prescription'),$new_name);

        $order =  new Orders;
        
        $order->user_id =Auth()->user()->id;
        $order->name = $request->input('name');
        $order->nic = $request->input('nic');
        $order->mobile = $request->input('mobile');
        $order->email = $request->input('email');
        $order->payment = $request->input('payment');
        $order->type = $request->input('type');
        $order->image = $new_name;
        
        $order->save();
        
        return redirect("/user/myprofile")->with('success','Prescription uploaded successfully');
        
    }

}
