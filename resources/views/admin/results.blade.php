@extends('layouts.alayout')

@section('content')


          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Inventory</a>
            </li>
            <li class="breadcrumb-item active">Update</li>
          </ol>
          <a href="/admin/mgtinven" class="btn btn-primary">Go Back</a>
          
             @if(count($result)>0)

                  <div class="table">
                    <table class="table table-striped">
                      <thead>
            <tr>
                <th>Name</th>
                <th>Type</th>
            </tr>
        </thead>
        <tbody>
            @foreach($result as $results)
            <tr>
                <td>{{$results->mediname}}</td>
                <td>{{$results->type}}</td>
            </tr><table class="table table-striped">

                @endforeach
              @else
                <p>No Medicines</p>

              @endif
<a href="/admin/mgtinven" class="btn btn-primary">Go Back</a>

@endsection