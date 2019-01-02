<?php

namespace App\Http\Controllers;

use Illuminate\Http\Request;
use Illuminate\Http\Response;
use Illuminate\Support\Facades\Mail;
use App\Admin;
use App\Medicine;
use App\Meditype;
use App\pharmacist;
use App\Orders;
use DB;
use Carbon\Carbon;

class PharControl extends Controller
{
    public function __construct(){
        $this->middleware('auth');
    }
    
    public function index(){
        $count = orders::where('status', 0)->count();
        // return $count;
    	return view('phar/sales')->with('count',$count);
    }

    public function vieworder(){
    	return view('phar/vieworder');
    }

    public function select() { 
        $dataset1 = DB::table('meditypes')->pluck('mediname'); 

        return view('phar/mgtinven')
                    ->with([
                        'dataset1' => $dataset1,
                        ]); 
    }

    public function addmedi(Request $req){
    	    $this->validate($req,[
    		'name' => 'required',
    		'bname' => 'required',
    		'bnum' => 'required',
    		'amount' => 'required',
    		'expdate' => 'required'
    	]);

    	$medicine = new medicine;
    	$name = $req->input('name');
    	$bname = $req->input('bname');
    	$bnum = $req->input('bnum');
    	$amount = $req->input('amount');
    	$expdate = $req->input('expdate');


    	$data = array('mediname' =>$name , 'bname' =>$bname, 'bnum' =>$bnum, 'amount' =>$amount, 'expdate' =>$expdate);

    	DB::table('medicines')->insert($data);

    	return redirect('phar/mgtinven')->with('success', 'Medicine type added succesfully');
    }

    public function browse(){
    	return view('phar/browse');
    }

    public function browsemedi(Request $req){

    	if(isset($_POST['search'])){
    	$word= $req->input('word');

        $result =Medicine::where(function($result) use($word){
            $result->where('mediname','LIKE','%'.$word.'%');
        })->get();


        return view('phar/browse')->with('result',$result);}

        else{
        	return view('phar/');
        }
    }


    public function orders(){
    	$order = Orders::orderBy('order_id','desc')->get();
        return view('phar/vieworder')->with('order', $order);
    }

    public function show($order_id){
    	$order = Orders::find($order_id);
        orders::where('order_id', $order_id)->update(array('status' => 1));
        global $order_id;
    	return view('phar/show')->with('order',$order);
    }

    public function searchinven(Request $req,$order_id){
        // dd($req);
    	if(isset($_POST['word'])){
    	$word= $req->input('word');

        $result =Medicine::where(function($result) use($word){
            $result->where('mediname','LIKE','%'.$word.'%');
        })->get();

        $order = orders::find($order_id);
        // dd($result);
        return view('phar/show')->with('order',$order)->with('result',$result);}

        else{
        	return view('phar/');
        }

    }

    public function sale(){

    }

    public function update(Request $req){
    	$this->validate($req,[
    		'name' => 'required',
    		'bnum' => 'required',
    		'amount' => 'required',
    		'expdate' => 'required'
    	]);

    	$bnum = $req->input('bnum');
    	$name = $req->input('name');
    	$amount = $req->input('amount');
    	$expdate = $req->input('expdate');


		Medicine::where('bnum', $bnum)->update(array('mediname' => $name, 'amount' => $amount, 'expdate' => $expdate ));

    	return redirect('phar/mgtinven')->with('success', 'Medicine updated succesfully');

    }

    public function delete(Request $req){
    	$this->validate($req,[
    		'name' => 'required',
    		'bnum' => 'required'
    	]);
    	$bnum = $req->input('bnum');
    	$name = $req->input('name');

    	Medicine::where('bnum', $bnum)->delete();

    	return redirect('phar/mgtinven')->with('success', 'Medicine deleted succesfully');

    }

    public function exp(){
        $date1 = Carbon::today()->addDays(14)->toDateString();
        $expdate =DB::table('Medicines')->pluck('expdate');

        $result= DB::select("SELECT * FROM medicines WHERE expdate<'$date1'");


        return view('phar/exp')->with('result', $result);
    }

    public function configmail($order_id){
        $email = DB::table('orders')->where('order_id', $order_id)->value('email');
        $username = DB::table('orders')->where('order_id', $order_id)->value('name');
        $mobile = DB::table('orders')->where('order_id', $order_id)->value('mobile');


        Mail::send('emails.confirm',['name'=>$username,'mobile'=>$mobile], function($msg) use ($email,$username,$mobile){
            $msg->to($email, $username)->subject('Order confirmed');
        });

        $order = Orders::find($order_id);
        orders::where('order_id', $order_id)->update(array('status' => 1));
        return view('phar/show')->with('order',$order);
    }

    public function rijectmail($order_id){
        $email = DB::table('orders')->where('order_id', $order_id)->value('email');
        $username = DB::table('orders')->where('order_id', $order_id)->value('name');


        
        Mail::send('emails.reject',['name'=>$username], function($msg) use ($email,$username){
            $msg->to($email, $username)->subject('Order Rejected');
        });

        $order = Orders::find($order_id);
        orders::where('order_id', $order_id)->update(array('status' => 1));
        return view('phar/show')->with('order',$order);
    }

    public function custom($order_id){
        $email = DB::table('orders')->where('order_id', $order_id)->value('email');
        $name = DB::table('orders')->where('order_id', $order_id)->value('name');
 
        return view('emails/custom')->with('name', $name)->with('order_id', $order_id);
    }

    public function custom_mail(Request $req,$order_id){
        $content = $req->input('emailmsg');
        $email = DB::table('orders')->where('order_id', $order_id)->value('email');
        $name = DB::table('orders')->where('order_id', $order_id)->value('name');
        $received = DB::table('orders')->where('order_id', $order_id)->value('created_at');
        $split = explode(' ', $received, 2);
        $onlydate = $split[0];


        Mail::send('emails.cust_mail',['name'=>$name, 'content' =>$content,'order_id' =>$order_id,'received' =>$onlydate], function($msg) use ($email,$name,$content,$onlydate,$order_id){
            $msg->to($email, $name)->subject('Please refere the content');
        });

        $order = Orders::find($order_id);
        orders::where('order_id', $order_id)->update(array('status' => 1));
        return view('phar/show')->with('order',$order)->with('success', 'Email has sent succesfully');
    }

    public function bills(){
        return view('phar/bills');
    }


}
