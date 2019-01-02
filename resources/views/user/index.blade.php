@extends('layouts.userlayout')

@section('content')
    <header class="masthead">
      <div class="container">
        <div class="intro-text">
          <div class="intro-lead-in" style="color:black; font-weight: bold;">Welcome To Jeewaka Pharmacy!</div>
          <div class="intro-heading text-uppercase" style="color: black">We always care for your health</div>
          <a class="btn btn-primary btn-xl text-uppercase js-scroll-trigger" href="#services">Shop Now</a>
        </div>
      </div>
    </header><br><br>

    <div class="row">
      <div class="col-md-2">
      </div>

      <div class="col-md-8">
        <h3>Find Us Here</h3>
    <div class="mapouter"><div class="gmap_canvas"><iframe width="1000px" height="500" id="gmap_canvas" src="https://maps.google.com/maps?q=jeewaka%20pharmacy%20ruhunupura&t=&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://www.embedgooglemap.net">embedgooglemap.net</a></div><style>.mapouter{text-align:right;height:500px;width:600px;}.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1000px;}</style></div>
    </div>
    <div class="col-md-2">
      </div>
    </div>
   
    <section class="bg-light" id="team">
      <div class="container">
        <div class="row">
          <div class="col-lg-12 text-center">
            <h2 class="section-heading text-uppercase">Founders Of Our Pharmacy</h2>
          </div>
        </div>
        <div class="row">
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{asset('img/1.jpg')}}" alt="">
              <h4>Wijesiri Wickramasingha</h4>
              <p class="text-muted">Owner</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/sanka.munasinghe">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
<!--                 <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="team-member">
              <img class="mx-auto rounded-circle" src="{{asset('img/1.jpg')}}" alt="">
              <h4>Kusal Wickramasingha</h4>
              <p class="text-muted">Owner</p>
              <ul class="list-inline social-buttons">
                <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-twitter"></i>
                  </a>
                </li>
                <li class="list-inline-item">
                  <a href="https://www.facebook.com/sanka.munasinghe">
                    <i class="fab fa-facebook-f"></i>
                  </a>
                </li>
<!--                 <li class="list-inline-item">
                  <a href="#">
                    <i class="fab fa-linkedin-in"></i>
                  </a>
                </li> -->
              </ul>
            </div>
          </div>
          </div>
        
    </section>

@endsection