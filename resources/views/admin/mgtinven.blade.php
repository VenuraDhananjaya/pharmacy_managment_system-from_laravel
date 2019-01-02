@extends('layouts.alayout')

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
          <form action="{{ action('AdminControl@addmedi') }}" method="POST" name="medicine" onsubmit="return medcheck()">
            {{csrf_field()}}
                <h3>Add Medicine</h3>
                
            <div class="form-group">
              <label>Medicine Name</label>
              <input type="text" name="name" class="form-control"  placeholder="Enter Name">
            </div>
            <div class="form-group">
                <label >Type</label>
              <input type="text" name="type" class="form-control" placeholder="Enter Expiary Date">
            </div>
 
          <button type="submit" name="add" class="btn btn-primary">Add Medicine</button>
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
              <form action="{{ action('AdminControl@searchmedi') }}" method="POST">
                {{csrf_field()}}
                <div class="form-group">
                  <label>Medicine id</label>
                  <input type="varchar" name="word" class="form-control"  placeholder="Enter ID">
                </div>
                <button type="submit" name="search" class="btn btn-primary">Search</button>
              </form><br><br>
              </div>
            </div>


@endsection