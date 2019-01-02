@extends('layouts.pharlayout')

@section('content')

          <!-- Breadcrumbs-->
          <ol class="breadcrumb">
            <li class="breadcrumb-item">
              <a href="viewinven.php">Inventory</a>
            </li>
            <li class="breadcrumb-item active">Update</li>
          </ol>

          <!-- Area Chart Example-->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             </div>
            <div class="card-body">
              <div class="row">
        <div class="col-lg-6">
          <form action="{{ action('PharControl@addmedi') }}" method="POST">
            {{csrf_field()}}
                <h3>Add Medicine</h3>
                <div class="form-group">

                <select class="form-control" name="name" id="school" data-parsley-required="true">
                <option value disabled selected>--Select Medicine Name--</option>
                  @foreach ($dataset1 as $medicine) 
                  {
                    <option value="{{ $medicine }}">{{ $medicine }}</option>
                  }
                  @endforeach
                </select>
              </div>
              <div class="form-group">
              <label>Brand Name</label>
              <input type="text" name="bname" class="form-control" placeholder="Enter brand name">
            </div>
            <div class="form-group">
              <label>Batch Number</label>
              <input type="text" name="bnum" class="form-control" placeholder="Enter batch number">
            </div>
            <div class="form-group">
                <label>Amount</label>
              <input type="number" name="amount" class="form-control" placeholder="Enter Tablet Amount">
          </div>
            <div class="form-group">
                <label >Expiary Date</label>
              <input type="date" name="expdate" class="form-control" placeholder="Enter Expiary Date">
            </div>
 
          <button type="submit" class="btn btn-primary">Add Medicine</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
        </form>
        <br>
      </div>
      
      </div>  
</div>
            </div>
          

          <!-- DataTables Example -->
          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-table"></i>
              Data Table Example</div>
            <div class="card-body">
              <div class="row">
              <div class="col-lg-6">
            <form action="{{ action('PharControl@update') }}" method="POST">
            {{csrf_field()}}
                <h3>Update</h3>
                <div class="form-group">

                <select class="form-control" name="name" data-parsley-required="true">
                <option value disabled selected>--Select Medicine Name--</option>
                  @foreach ($dataset1 as $medicine) 
                  {
                    <option value="{{ $medicine }}">{{ $medicine }}</option>
                  }
                  @endforeach
                </select>
              </div>
            <div class="form-group">
              <label>Batch Number</label>
              <input type="text" name="bnum" class="form-control" placeholder="Enter batch number">
            </div>
            <div class="form-group">
                <label>Amount</label>
              <input type="number" name="amount" class="form-control" placeholder="Enter Tablet Amount">
          </div>
            <div class="form-group">
                <label >Expiary Date</label>
              <input type="date" name="expdate" class="form-control" placeholder="Enter Expiary Date">
            </div>
 
          <button type="submit" class="btn btn-primary">Update</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
        </form>
        </div>

        <div class="col-lg-6">
            <form action="{{ action('PharControl@delete') }}" method="POST">
            {{csrf_field()}}
                <h3>Delete</h3>
                <div class="form-group">

                <select class="form-control" name="name" data-parsley-required="true">
                <option value disabled selected>--Select Medicine Name--</option>
                  @foreach ($dataset1 as $medicine) 
                  {
                    <option value="{{ $medicine }}">{{ $medicine }}</option>
                  }
                  @endforeach
                </select>
              </div>
            <div class="form-group">
              <label>Batch Number</label>
              <input type="text" name="bnum" class="form-control" placeholder="Enter batch number">
            </div>

 
          <button type="submit" class="btn btn-primary">Delete</button>
          <button type="reset" class="btn btn-danger">Cancel</button>
        </form>
        </div>
      </div>
              </div>
            </div>
            <div class="card-footer small text-muted">Updated yesterday at 11:59 PM</div>

@endsection