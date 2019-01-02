@extends('layouts.pharlayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="{{asset('phar/')}}">Sales</a>
            </li>
            <li class="breadcrumb-item active">Today</li>
          </ol>

          <!-- Icon Cards-->
          <div class="row">
            <div class="col-xl-3 col-sm-6 mb-3">
              <div class="card text-white bg-success o-hidden h-100">
                <div class="card-body">
                  <div class="card-body-icon">
                    <i class="fas fa-fw fa-shopping-cart"></i>
                  </div>
                  <div class="mr-5">{{$count}} New Orders!</div>
                </div>
                <a class="card-footer text-white clearfix small z-1" href="/phar/vieworder">
                  <span class="float-left">View Details</span>
                  <span class="float-right">
                    <i class="fas fa-angle-right"></i>
                  </span>
                </a>
              </div>
            </div>
          </div>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             </div>
            <div class="card-body">
             <div class="row">
     
        <div class="col-lg-6">
        <form action="{{ action('PharControl@sale') }}" method="POST">
          {{csrf_field()}}
          <h3>Sales</h3>
            <div class="form-group">
              <label>Medicine Name</label>
              <input type="varchar" name="mediname" class="form-control"  placeholder="Enter ID">
          </div>
            <div class="form-group">
              <label>Batch Number</label>
              <input type="number" name="bnum" class="form-control" placeholder="Enter batch number">
            </div>
            <div class="form-group">
                <label>Amount</label>
              <input type="number" name="amount" class="form-control" placeholder="Enter Tablet Amount">
          </div>
 
          <button type="submit" class="btn btn-primary">Sold</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
        </form>
        <br>
        </div>
  </div>
</div>
</div>
            </div>
 @endsection