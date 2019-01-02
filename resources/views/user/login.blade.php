@extends('layouts.userlayout')

@section('content')
    <div class="container">
    	<div class="row">
			<div class="col-lg-6">
  				
  
  			<form action="login.php" style="padding-top: 100px;" method="POST" name="signup" onsubmit="return signupcheck()">
  				<h2>Register Here</h2>
    			<div class="form-group">
     				<label for="usr">Name:</label>
      				<input type="text" class="form-control" id="usr" name="username">
    			</div>
          <div class="form-group">
            <label for="usr">NIC:</label>
              <input type="text" class="form-control" id="usr" name="nic">
          </div>
    			<div class="form-group">
      				<label for="usr">Mobile:</label>
      				<input type="text" class="form-control" name="mobile">
    			</div>
    			<div class="form-group">
    				<label for="exampleFormControlInput1">Email address</label>
    				<input type="email" class="form-control" name="email">
  				</div>
          <label>Gender</label><br>
          <div class="form-check" style="display: inline-block;">
            <input class="form-check-input" name="gender" type="radio" value="male">
            <label class="form-check-label" for="defaultCheck1"> Male </label>
          </div>
          <div class="form-check" style="display: inline-block;">
            <input class="form-check-input" name="gender" type="radio" value="female">
            <label class="form-check-label" for="defaultCheck1"> Female </label>
          </div>
          <div class="form-group">
              <label for="pwd">Password:</label>
              <input type="password" class="form-control" id="pwd" name="password1">
          </div>
          <div class="form-group">
              <label for="pwd">Retype password:</label>
              <input type="password" class="form-control" id="confirmPassword" name="password2">
          </div>
    			<button type="submit" name="reg" class="btn btn-primary">Register</button>
  			</form>
  			<br>
		</div>
	

	<div class="col-lg-6">
		<form style="padding-top: 100px;" action="login.php" method="POST" name="login" onsubmit="return logincheck()">
			<h3>Login Here</h3>
			<small>Login to your account after the Registration</small><br><br>
  			<div class="form-group">
    			<label for="uname">NIC:</label>
    			<input type="text" class="form-control" name="nic">
    		</div>
    		<div>
   				 <label for="psw">Password:</label>
    			<input type="password" class="form-control"  name="password">
    		</div>
<!--     		<label>
      			<input type="checkbox" checked="checked" name="remember"> Remember me
    		</label> -->
    		<br>

    		<button type="submit" name="login" class="btn btn-primary">Login</button>
    		<button type="button" class="btn btn-danger">Cancel</button>
    		<br>
    		
<!--  			<span class="psw"> Forgot <a href="#">password?</a></span> -->
  
		</form>
	</div>
	</div>
</div>

@endsection