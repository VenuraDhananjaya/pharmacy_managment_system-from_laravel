@extends('layouts.userlayout')

@section('content')
    <script type="text/javascript">
      function activate(){
        document.getElementById("address").disabled = false;
      }
    </script>
    <div class="container">
      <div class="row">
      <div class="col-lg-6">
          
  
        <form action="/upload/store" style="padding-top: 100px;" method="POST" name="upload" enctype="multipart/form-data">
          {{csrf_field()}}
       
          <h2>Upload Prescription Here</h2>
           
          <br><br>
          <div class="form-group">
            <label for="usr">Name:</label>
              <input type="text" class="form-control" id="usr" name="name" value="{{ Auth::user()->name}}">
          </div>
          <div class="form-group">
            <label for="usr">NIC:</label>
              <input type="text" class="form-control" id="usr" name="nic" value="{{ Auth::user()->nic}} " readonly>
          </div>
          <div class="form-group">
              <label for="usr">Mobile:</label>
              <input type="text" class="form-control" name="mobile" value="{{ Auth::user()->mobile}}">
          </div>
          <div class="form-group">
            <label for="exampleFormControlInput1" >Email address</label>
            <input type="email" class="form-control" id="email" name="email" value="{{ Auth::user()->email}}" readonly>
          </div>
          <div class="form-group">
            <label>Payment Method</label>
            <select name="payment" class="form-control">
              <option value="Cash">Cash</option>
              <option value="Creditcard">Credit or Debit card</option>
            </select>
          </div>
          <div class="form-group">
            <label>Type</label>
            <select name="type" class="form-control">
              <option value="Pickup" onclick="activate()">PickUp</option>
              <option value="Delivary">Use Delivary Service</option>
            </select>
          </div>
          <div class="form-group">
            <label>Address</label>
            <input type="textarea" class="form-control" id="address" name="address" value="{{ Auth::user()->address}}" disabled>
          </div>
          <div class="form-group">
            <input type="file" name="image" class="form-control">
          </div>
          <div class="form-group">
            <button class="btn btn-primary" type="submit" name="upload">Upload</button>
            
          </div>         
      </form>
  </div>
  </div>
</div>
@endsection