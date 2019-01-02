@extends('layouts.alayout')

@section('content')


          <div class="card mb-3">
            <div class="card-header">
              <i class="fas fa-chart-area"></i>
             </div>
            <div class="card-body">
             <div class="row">
      <div class="col-lg-6" >
        <form action="{{ action('AdminControl@add') }}" method="POST" name="adminform1">
          {{csrf_field()}}

          <h3>Register User</h3>
          
     <div class="form-group">
    <label>Name</label>
    <input type="text" name="name" class="form-control"  placeholder="Enter Your Full Name">
  </div>
     <div class="form-group">
    <label>Email</label>
    <input type="text" name="email" class="form-control "  placeholder="Enter Your Email">
  </div>
  <div class="form-group">
    <label>Type</label>
    <select name="type" class="form-control">
      <option value="1">Admin</option>
      <option value="2">Pharmacist</option>
    </select>
  </div>
  <div class="form-group">
    <label>Password</label>
    <input type="password" name="password" class="form-control"  placeholder="Password">
  </div>
  <div class="form-group">
    <label>Confirm Password</label>
    <input type="password" name="password_confirmation" class="form-control"  placeholder="Confirm the Password">
  </div>
 
  <button type="submit" name="reg" class="btn btn-primary">Register</button>
   <button type="reset" class="btn btn-danger">Cancel</button>
</form>
<br>

        
      </div>

</div>
 </div>          
  </div>
          

         



@endsection 