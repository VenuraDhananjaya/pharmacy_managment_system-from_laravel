<!DOCTYPE html>
<html>
<head>
	<title>Jeewaka Pharmacy</title>
	<link href="bootstrap.min.css" rel="stylesheet">
    <link href="fa/css/all.min.css" rel="stylesheet" type="text/css">
    <link href="css.css" rel="stylesheet">
</head>
<body id="page-top" style="height: 100%">
	<nav class="navbar navbar-expand-lg navbar-dark fixed-top" id="mainNav">
      <div class="container">
        <a class="navbar-brand" href="{{asset('/')}}">Jeewaka Pharmacy</a>
        <button class="navbar-toggler navbar-toggler-right" type="button" data-toggle="collapse" data-target="#navbarResponsive" aria-controls="navbarResponsive" aria-expanded="false" aria-label="Toggle navigation">
          Menu
          <i class="fas fa-bars"></i>
        </button>
        <div class="collapse navbar-collapse" id="navbarResponsive">
          <ul class="navbar-nav text-uppercase ml-auto">
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{asset('user/aboutus')}}">About Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{asset('user/contact')}}">Contact Us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link js-scroll-trigger" href="{{asset('user/logout')}}">Logout</a>
            </li>
          </ul>
        </div>
      </div>
    </nav>
    <header>	
      <div class="container">
        <div class="intro-text" style="padding-top: 30%; padding-left: 5%">
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">User Guide</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">Order History</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">Shop Now</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">Prescription Orders</a>
          <a class="btn btn-primary btn-xl text-uppercase" href="#services">Rate Us</a>
        </div>
      </div>
    </header>


    <footer style=" bottom: 0; position: absolute; width: 100%">
        <div class="row" >
          <div class="col-md-4">
            <span class="copyright">Copyright &copy; Your Website 2018</span>
          </div>
          <div class="col-md-4">
            <ul class="list-inline social-buttons">
              <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-twitter"></i>
                </a>
              </li>
              <li class="list-inline-item">
                <a href="https://www.facebook.com/jeewakapharmacy/">
                  <i class="fab fa-facebook-f"></i>
                </a>
              </li>
<!--               <li class="list-inline-item">
                <a href="#">
                  <i class="fab fa-linkedin-in"></i>
                </a>
              </li> -->
            </ul>
          </div>
          <div class="col-md-4">
            <ul class="list-inline quicklinks">
              <li class="list-inline-item">
                <a href="{{asset('user/privacy')}}" style="color: black">Privacy Policy</a>
              </li>
              <li class="list-inline-item">
                <a href="{{asset('user/terms')}}" style="color: black">Terms of Use</a>
              </li>
            </ul>
          </div>
        </div>
     
    </footer>


</body>
</html>