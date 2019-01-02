<?php

namespace App\Http\Controllers;


use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Collection;
use Illuminate\Support\Facades\Hash;
use App\Admin;
use App\Medicine;
use App\Meditype;
use App\Orders;
use App\pharmacist;
use DB;
use Carbon\Carbon;


class AdminControl extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }

    public function index(){
    	return view('admin/adminindex');
    }



    public function notification(){
        $count = orders::where('status', 0)->count();
        // dd($count);
        // return $count;
        return view('layouts/alayout')->with('count',$count);
    }

    public function mgtinven(){
    	return view('admin/mgtinven');
    }

    public function adduser(){
    	return view('admin/adduser');
    }

    public function add(Request $req){
    	$this->validate($req,[
    		'name' => 'required|min:3',
    		'email' => 'required|email|max:255|unique:admin',
    		'password' => 'required|min:6|max:10|confirmed'
    	]);

        $type = $req->input('type');

        if($type==1){
    	$admin = new admin;
    	$name = $req->input('name');
    	$email = $req->input('email');
    	$password = Hash::make($req->input('password'));
        $type = $req->input('type');

    	$data = array('name' =>$name , 'email' =>$email,'password' =>$password, 'type' =>$type );

    	DB::table('users')->insert($data);}

        else{
        $phar = new pharmacist;
        $name = $req->input('name');
        $email = $req->input('email');
        $password = Hash::make($req->input('password'));
        $type = $req->input('type');

        $data = array('name' =>$name , 'email' =>$email,'password' =>$password, 'type' =>$type  );

        DB::table('users')->insert($data);
        }

    	return redirect('admin/adduser')->with('success', 'User added succesfully'); 
    }

    public function orders(){
    	$order = orders::orderBy('order_id','desc')->get();
        return view('admin/vieworder')->with('order', $order);
    }

    public function show($order_id){

    	$order = orders::find($order_id);
    	return view('admin/show')->with('order',$order);
    }

    public function addmedi(Request $req){
    	$this->validate($req,[
    		'name' => 'required',
    		'type' => 'required'
    	]);

    	$mtype = new meditype;
    	$name = $req->input('name');
    	$type = $req->input('type');


    	$data = array('mediname' =>$name , 'type' =>$type);

    	DB::table('meditypes')->insert($data);

    	return redirect('admin/mgtinven')->with('success', 'Medicine type added succesfully'); 

    }

    public function searchmedi(Request $req){
    	$word= $req->input('word');

        $result =Meditype::where(function($result) use($word){
            $result->where('mediname','LIKE','%'.$word.'%')->orWhere('type','LIKE','%'.$word.'%');
        })->get();

        return view('admin/results')->with('result',$result);
    }

    public function deleteuser(){
        return view('admin/deleteuser');
    }

    public function delete(Request $req){
        $this->validate($req,[
            'name' => 'required',
            'email' => 'required',
            'type' => 'required'
        ]);
        $type = $req->input('type');
        $name = $req->input('name');
        $email = $req->input('email');

        if($type==2){

        pharmacist::where('email', $email)->delete();
        return redirect('admin/deleteuser')->with('success', 'User deleted succesfully');}

        else{
            return view('admin/deleteuser')->with('error', 'User details do not matched');
        }

    }

    // $ordercount = Medicine::count();

    public function expdate(){
        $date1 = Carbon::today()->addDays(14)->toDateString();
        $expdate =DB::table('Medicines')->pluck('expdate');

        $result= DB::select("SELECT * FROM medicines WHERE expdate<'$date1'");
        // $result = DB::table('medicines')->whereDate('expdate', '<', $this->$date1)->get();


        return view('admin/exp')->with('result', $result);


    }

}
