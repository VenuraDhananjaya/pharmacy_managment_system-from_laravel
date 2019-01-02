@extends('layouts.alayout')

@section('content')

<table class="table">
    <th>Details</th>
    <th>Prescription</th>

    <tr><td>
    <ul>
      <li>Order Number : {{$order->order_id}}</li>
      <li>User Name : {{$order->name}}</li>
      <li>Contact Number : {{$order->mobile}}</li>
      <li>Email : {{$order->email}}</li>
      <li>NIC : {{$order->nic}}</li>
    </ul>
    <small>Received on : {{$order->created_at}}</small><br>
    <a href="/admin/vieworder" class="btn btn-primary">Go Back</a>
  </td>
  <td>
    <img style="width: 500px; height: 500px;" src="{{asset('prescription/'.$order->image)}}">
  </td>
  </tr>
</table>


        <footer class="sticky-footer" style="position: fixed;">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

@endsection