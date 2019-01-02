<!DOCTYPE html>
<html lang="en">

  <head>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">

    <title>Jeewaka Pharmacy</title>

      <link rel="stylesheet" type="text/css" href="{{asset('excss/style.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/css.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/bootstrap.min.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/sb-admin.css')}}">
      <link rel="stylesheet" type="text/css" href="{{asset('excss/fontawesome-free/css/all.min.css')}}">
      <script type="text/javascript" src="{{asset('excss/bootsrap.bundle.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('excss/java.js')}}"></script>
      <script type="text/javascript" src="{{asset('excss/jquery.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('excss/sb-admin.js')}}"></script>
      <script type="text/javascript" src="{{asset('excss/jquery.easing.min.js')}}"></script>
      <script type="text/javascript" src="{{asset('excss/agency.min.js')}}"></script>
      <link href="{{ asset('css/app.css') }}" rel="stylesheet">
      <script src="{{ asset('js/app.js') }}" defer></script>

  </head>

  <body id="page-top">

    <nav class="navbar navbar-expand navbar-dark bg-dark static-top">

      <a class="navbar-brand mr-1" href="{{asset('phar/')}}">Jeewaka Pharmacy</a>

      <button class="btn btn-link btn-sm text-white order-1 order-sm-0" id="sidebarToggle" href="#">
        <i class="fas fa-bars"></i>
      </button>

      <!-- Navbar -->
      <ul class="navbar-nav ml-auto ml-md-0">
        <li class="nav-item dropdown no-arrow">
          <a class="nav-link dropdown-toggle" href="#" id="userDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
            <i class="fas fa-user-circle fa-fw"></i>
          </a>
          <div class="dropdown-menu dropdown-menu-right" aria-labelledby="userDropdown">
            <a class="dropdown-item" href="{{ route('logout') }}" onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();" data-toggle="modal" data-target="#logoutModal">Logout</a>
            <form id="logout-form" action="{{ route('logout') }}" method="POST" style="display: none;">
                @csrf
            </form>
          </div>
        </li>
      </ul>

    </nav>

    <div id="wrapper">

      <!-- Sidebar -->
      <ul class="sidebar navbar-nav">
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('phar/')}}">
            <i class="fas fa-user-circle fa-fw"></i>
            <span>Sales</span>
          </a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('phar/mgtinven')}}">
            <i class="fas fa-fw fa-folder"></i>
            <span>Manage Inventory</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('phar/vieworder')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Manage Orders</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('phar/browse')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>Browse Medicines</span></a>
        </li>
        <li class="nav-item active">
          <a class="nav-link" href="{{asset('phar/exp')}}">
            <i class="fas fa-fw fa-table"></i>
            <span>View Expiary Dates</span></a>
        </li>
      </ul>

      <div id="content-wrapper">

        <div class="container-fluid">
          @include('inc.msg')

@yield('content')

        </div>
        <!-- /.container-fluid -->

        <!-- Sticky Footer -->
        <footer class="sticky-footer" style="position: fixed;">
          <div class="container my-auto">
            <div class="copyright text-center my-auto">
              <span>Copyright © Your Website 2018</span>
            </div>
          </div>
        </footer>

      </div>
      <!-- /.content-wrapper -->

    </div>
    <!-- /#wrapper -->

    <!-- Scroll to Top Button-->
    <a class="scroll-to-top rounded" href="#page-top">
      <i class="fas fa-angle-up"></i>
    </a>

    <!-- Logout Modal-->
    <div class="modal fade" id="logoutModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
      <div class="modal-dialog" role="document">
        <div class="modal-content">
          <div class="modal-header">
            <h5 class="modal-title" id="exampleModalLabel">Ready to Leave?</h5>
            <button class="close" type="button" data-dismiss="modal" aria-label="Close">
              <span aria-hidden="true">×</span>
            </button>
          </div>
          <div class="modal-body">Select "Logout" below if you are ready to end your current session.</div>
          <div class="modal-footer">
            <button class="btn btn-secondary" type="button" data-dismiss="modal">Cancel</button>
            <a class="btn btn-primary" href="login.html">Logout</a>
          </div>
        </div>
      </div>
    </div>

    <!-- Bootstrap core JavaScript-->
<!--     <script src="vendor/jquery/jquery.min.js"></script>
    <script src="vendor/bootstrap/js/bootstrap.bundle.min.js"></script> -->

    <!-- Core plugin JavaScript-->
<!--     <script src="vendor/jquery-easing/jquery.easing.min.js"></script> -->

    <!-- Page level plugin JavaScript-->
<!--     <script src="vendor/chart.js/Chart.min.js"></script>
    <script src="vendor/datatables/jquery.dataTables.js"></script>
    <script src="vendor/datatables/dataTables.bootstrap4.js"></script> -->

    <!-- Custom scripts for all pages-->
<!--     <script src="js/sb-admin.min.js"></script> -->

    <!-- Demo scripts for this page-->
<!--     <script src="js/demo/datatables-demo.js"></script>
    <script src="js/demo/chart-area-demo.js"></script> -->

  </body>

</html>
