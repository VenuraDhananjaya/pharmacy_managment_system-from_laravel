<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Support\Facades\Mail;

class GuestControl extends Controller{
	public function index(){
    	return view('user/index');
    }

    public function login(){
    	return view('user/login');
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
