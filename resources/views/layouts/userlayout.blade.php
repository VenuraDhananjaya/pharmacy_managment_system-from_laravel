<!DOCTYPE html>
<html lang="en">

  <head>

    <title>Jeewaka Pharmacy</title>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script type="text/javascript" src="{{asset('js/popper.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/jquery.easing.min.js')}}"></script>
      <link rel="stylesheet" type="text/css" href="{{asset('excss/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/css.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/sb-admin.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/fontawesome-free/css/all.min.css')}}">
      <script type="text/javascript" src="{{asset('js/bootsrap.bundle.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/java.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/sb-admin.js')}}"></script>
      <script type="text/javascript" src="{{asset('js/agency.min.js')}}"></script>
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>

  <body id="page-top">

   
    <nav class="navbar navbar-expand-md navbar-default" style="background-color: lightblue; color: black;">
          <div class="container">
              <a class="navbar-brand" href="{{asset('/')}}">
                  Jeewaka Pharmacy
              </a>
              <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                  <span class="navbar-toggler-icon"></span>
              </button>

              <div class="collapse navbar-collapse" id="navbarSupportedContent">
                    <!-- Left Side Of Navbar -->
                  <ul class="navbar-nav mr-auto">

                  </ul>

                    <!-- Right Side Of Navbar -->
                  <ul class="navbar-nav ml-auto">
                        <!-- Authentication Links -->
                    @guest
                      <li class="nav-item">
                        <a class="nav-link" href="{{asset('user/aboutus')}}">About Us</a>
                      </li>
                      <li class="nav-item">
                          <a class="nav-link" href="{{asset('user/contact')}}">Contact Us</a>
                      </li> 
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                            </li>
                            <li class="nav-item">
                                <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                            </li>
                        @else
                          <li class="nav-item">
                            <a class="nav-link" href="{{asset('user/aboutus')}}">About Us</a>
                          </li>
                          <li class="nav-item">
                           <a class="nav-link" href="{{asset('user/contact')}}">Contact Us</a>
                          </li> 
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="/user/myprofile" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }} <span class="caret"></span>
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                  <a class="dropdown-item" href="/user/myprofile">My Profile</a>
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav>
      @include('inc.msg')
      @yield('content')
    
  </body>

    <footer style="margin-top: 6%; ">
      <div class="container">
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
                </a> -->
              </li>
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
    </footer>


</html>
