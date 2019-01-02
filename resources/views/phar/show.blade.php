@extends('layouts.pharlayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="/phar/vieworder">Orders</a>
            </li>
            <li class="breadcrumb-item active">{{$order->order_id}}</li>
          </ol>

         
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Order Number {{$order->order_id}}</div>
            <div class="card-body">
              <div class="row">
                <div class="col-lg-6">

<table class="table">
    <th>Details</th>

    <tr><td>
      <img style="width: 500px; height: 500px;" src="{{asset('prescription/'.$order->image)}}">
    <ul>
      <li>Order Number : {{$order->order_id}}</li>
      <li>User Name : {{$order->name}}</li>
      <li>Contact Number : {{$order->mobile}}</li>
      <li>Email : {{$order->email}}</li>
      <li>NIC : {{$order->nic}}</li>
    </ul>
    <small>Received on : {{$order->created_at}}</small>
  </td>
  </tr>
  <tr>
    <td><form action="/{{$order->order_id}}/confirm" method="POST" style="display: inline-block;">
        {{csrf_field()}}
          <button class="btn btn-primary" >Confirm Order</button>
        </form>
        <form action="/{{$order->order_id}}/custom" method="POST" style="display: inline-block;">
          {{csrf_field()}}
          <button class="btn btn-success">Custom Mail</button>
        </form>
        <form action="/{{$order->order_id}}/reject" method="POST" style="display: inline-block;">
          {{csrf_field()}}
          <button class="btn btn-danger">Reject Order</button>
        </form>
    </td>

  </tr>

</table>
<a href="/phar/vieworder" class="btn btn-primary">Go Back</a>
</div>
<div class="col-lg-6">
  <form action="/phar/getData/{{$order->order_id}}" method="POST" name="form1">
                  {{csrf_field()}}
                <div class="form-group">
                  <label>Medicine name</label>
                  <input type="varchar" name="word" class="form-control">
                </div>
                <button type="submit" name="search" class="btn btn-primary">Search</button>
              </form><br><br>
             
            
          {{-- {{dd($result)}} --}}
          @if(isset($_POST['word']))
          @if(count($result)>0)

                  <div class="table">
                    <table class="table table-striped">
            <tr>
                <th>Name</th>
                <th>Brand Name</th>
                <th>Amount</th>
            </tr>
            @foreach($result as $results)
            <tr>
                <td>{{$results->mediname}}</td>
                <td>{{$results->bname}}</td>
                <td>{{$results->amount}}</td>
            </tr>
            @endforeach
            </table>
              @else
                <p>No Medicines</p>

              @endif
            @endif

</div>
              </div>
            </div>
          </div>




@endsection