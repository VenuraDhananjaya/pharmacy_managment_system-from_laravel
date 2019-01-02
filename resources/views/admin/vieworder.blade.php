@extends('layouts.alayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Orders</a>
            </li>
            <li class="breadcrumb-item active">Overview</li>
          </ol>

         
          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              All orders</div>
            <div class="card-body">


              @if(count($order)>0)

                  <div class="table">
                    <table class="table table-striped">

            <tr>
                <th>Name</th>
                <th>Brand name</th>
                <th>Batch Number</th>
                <th>Amount</th>
                <th>Exp. Date</th>
            </tr>


            @foreach($order as $orders)
            <tr>
                <td><a href="vieworder/{{$orders->order_id}}"> {{$orders->name}}</a></td>
                <td>{{$orders->email}}</td>
                <td>{{$orders->mobile}}</td>
            </tr>

            @endforeach
            @else
                <p>No Orders</p>

            @endif
            </table>


              </div>

              



@endsection