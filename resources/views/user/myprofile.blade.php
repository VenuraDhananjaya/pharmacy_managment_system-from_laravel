@extends('layouts.userlayout')

@section('content')
<!DOCTYPE html>
<html>
<head>
<title>My Profile</title>
<h1>My profile</h1>
<h2> Hi {{ Auth::user()->name }} !</h2>

</head>
<body>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<p> Name :- {{ Auth::user()->name}} <br>
    E_mail Address :- {{ Auth::user()->email}}<br>
    NIC :- {{ Auth::user()->nic}}<br>
    Telephone Number :- {{ Auth::user()->mobile}}<br>
    Address :- {{ Auth::user()->address}}


  <div>
  
  <a href="online" ><button type="submit" name="online" class="btn btn-primary mb-2" style="height:40px;width:120px">Online Order</button></a>
  <a href="upload"><button type="submit" class="btn btn-primary mb-2" style="height:40px;width:180px">Prescription Upload</button></a>
  <button type="submit" class="btn btn-primary mb-2" style="height:40px;width:120px">History</button>
  </div>
</body>

@endsection