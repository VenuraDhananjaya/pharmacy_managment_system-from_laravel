@extends('layouts.pharlayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Inventory</a>
            </li>
            <li class="breadcrumb-item active">Search Results</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             </div>
            <div class="card-body">
              <div class="row">
                <form action="{{ action('PharControl@browsemedi') }}" method="POST">
                  {{csrf_field()}}
                <div class="form-group">
                  <label>Medicine id</label>
                  <input type="varchar" name="word" class="form-control"  placeholder="Enter Name">
                </div>
                <button type="submit" name="search" class="btn btn-primary">Search</button>
              </form><br><br>
              </div>
            </div>
          @if(isset($_POST['search']))
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
              @else
                <p>No Medicines</p>

              @endif
            @endif

          <!-- DataTables Example -->

          </div>

@endsection