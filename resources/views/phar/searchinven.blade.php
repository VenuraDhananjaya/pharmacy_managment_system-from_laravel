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
              <div class="row">

<div class="col-lg-6">
  <form action="{{ action('PharControl@searchinven') }}" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label>Medicine id</label>
                  <input type="varchar" name="word" class="form-control"  placeholder="Enter ID">
                </div>
                <button type="submit" name="search" class="btn btn-primary">Search</button>
              </form><br><br>
              </div>
            </div>
          @if(isset($_POST['search']))
          @if(count($result)>0)

                  <div class="table">
                    <table class="table table-striped">
                      <thead>
            <tr>
                <th>Name</th>
                <th>Brand Name</th>
                <th>Amount</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $results)
            <tr>
                <td>{{$results->mediname}}</td>
                <td>{{$results->bname}}</td>
                <td>{{$results->amount}}</td>
            </tr><table class="table table-striped">

                @endforeach
              @else
                <p>No Medicines</p>

              @endif
            @endif

</div>
              </div>
            </div>
          </div>




@endsection