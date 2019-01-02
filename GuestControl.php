<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;
use App\orders;

class GuestControl extends Controller{
	public function index(){
    	return view('user/index');
    }

    public function login(){
    	return view('user/login');
        

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
        

        $order->username = $request->input('name');
        $order->nic = $request->input('nic');
        $order->mobile = $request->input('mobile');
        $order->email = $request->input('email');
        $order->payment = $request->input('payment');
        $order->type = $request->input('type');
        $order->prescription = $new_name;
        
        $order->save();

        
        
        return redirect("/")->with('success','Product added successfully');
        
    }

    public function aboutus(){
    	return view('user/aboutus');
    }

    public function contact(){
    	return view('user/contact');
    }

    public function privacy(){
    	return view('user/privacy');
        
    }

    public function terms(){
    	return view('user/terms');
    }

    public function page(){
        return view('page');
    }

    public function mail(){
        $tosend = 'harshani.ur@gmail.com';
        Mail::send('emails.welcome',['name'=>'Harshani'], function($msg) use ($tosend){
            $msg->to($tosend, 'Venura')->subject('Hey there');
        });
    }
}
