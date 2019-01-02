@extends('layouts.pharlayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Medicines</a>
            </li>
            <li class="breadcrumb-item active">14 days to expire</li>
          </ol>

<div class="table">

	@if($result>0)
            <table class="table">

            <tr>
                <th>Name</th>
                <th>Brand name</th>
                <th>Batch Number</th>
                <th>Amount</th>
                <th>Exp. Date</th>
            </tr>

            @foreach($result as $results)
            <tr>
            	<td>{{$results->mediname}}</td>
                <td>{{$results->bname}}</td>
                <td>{{$results->bnum}}</td>
                <td>{{$results->amount}}</td>
                <td>{{$results->expdate}}</td>
            </tr>
            @endforeach

     </table>
    @else
        <p>Medicines are up to date</p>

     @endif
 </div>
 @endsection




                