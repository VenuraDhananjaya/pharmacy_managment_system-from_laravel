@extends('layouts.pharlayout')

@section('content')
          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Orders</a>
            </li>
            <li class="breadcrumb-item active">All</li>
          </ol>

         
          <!-- DataTables Example -->
        <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             </div>
            <div class="card-body">
              <div class="row">
        <div class="col-lg-12">
          @if(count($order)>0)

                  <div class="table">
                    <table class="table table-striped">

            <tr>
                <th>Name</th>
                <th>Email</th>
                <th>Mobile Number</th>
                <th>Payment Method</th>
                <th>Order type</th>
            </tr>

            @foreach($order as $orders)
            <tr>
                <td><a href="vieworder/{{$orders->order_id}}"> {{$orders->name}}</a></td>
                <td>{{$orders->email}}</td>
                <td>{{$orders->mobile}}</td>
                <td>{{$orders->payment}}</td>
                <td>{{$orders->type}}</td>
            </tr>

                @endforeach
              @else
                <p>No Orders</p>

              @endif


        <br>
      </div>
      
      </div>  
</div>
            </div>
        

        </div>


@endsection