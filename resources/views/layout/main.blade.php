<!DOCTYPE html>
<html lang="en">
  <head>
    <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="description" content="viho admin is super flexible, powerful, clean &amp; modern responsive bootstrap 4 admin template with unlimited possibilities. laravel/framework: ^8.40">
    <meta name="keywords" content="admin template, viho admin template, dashboard template, flat admin template, responsive admin template, web app">
    <meta name="author" content="pixelstrap">
    <link rel="icon" href="{{asset('adminlte/assets/images/logo/logo.png')}}" type="image/x-icon">
    <link rel="shortcut icon" href="{{asset('adminlte/assets/images/logo/logo.png')}}" type="image/x-icon">
    <title>SMP Lukman Al-Hakim - Dasboard</title>
    <link rel="stylesheet" href="//cdn.datatables.net/1.12.1/css/jquery.dataTables.min.css">
    <!-- Google font-->
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css2?family=Montserrat:ital,wght@0,100;0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;1,100;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&amp;display=swap" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css2?family=Rubik:ital,wght@0,400;0,500;0,600;0,700;0,800;0,900;1,300;1,400;1,500;1,600;1,700;1,800;1,900&amp;display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <!-- Font Awesome-->
    <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/fontawesome.css">
<!-- ico-font-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/icofont.css">
<!-- Themify icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/themify.css">
<!-- Flag icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/flag-icon.css">
<!-- Feather icon-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/feather-icon.css">
<!-- Plugins css start-->
  <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/animate.css">
  <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/chartist.css">
  <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/date-picker.css">
  <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/prism.css">
  <link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/vector-map.css">
  <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/assets/css/datatables.css') }}">
  <link rel="stylesheet" type="text/css" href="{{ asset('adminlte/assets/css/datatable-extension.css') }}">

<!-- Plugins css Ends-->
<!-- Bootstrap css-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/bootstrap.css">
<!-- App css-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/style.css">
<link id="color" rel="stylesheet" href="https://laravel.pixelstrap.com/viho/assets/css/color-1.css" media="screen">
<!-- Responsive css-->
<link rel="stylesheet" type="text/css" href="https://laravel.pixelstrap.com/viho/assets/css/responsive.css">  </head>
  <body>
    <!-- Loader starts-->
    <div class="loader-wrapper">
      <div class="theme-loader"></div>
    </div>
    <!-- Loader ends-->
    <!-- page-wrapper Start-->
    <div class="page-wrapper compact-sidebar" id="pageWrapper">
      <!-- Page Header Start-->
      <div class="page-main-header">
        <!-- nav -->
        @include('layout.nav')
        <!-- end nav -->
</div>
      <!-- Page Header Ends -->
      <!-- Page Body Start-->
      <div class="page-body-wrapper sidebar-icon">
        <!-- Page Sidebar Start-->
        <header class="main-nav">
            @include('layout.sidebar')

        </header>
        <!-- Page Sidebar Ends-->
        <div class="page-body">
          <!-- Container-fluid starts-->
                      <!-- Container-fluid starts-->
     @yield('content')

      <!-- Container-fluid Ends-->
              <!-- Container-fluid Ends-->
        </div>
        <!-- footer start-->
        @include('layout.footer')

      </div>
    </div>
    <!-- latest jquery-->
    <script src="https://laravel.pixelstrap.com/viho/assets/js/jquery-3.5.1.min.js"></script>
<!-- feather icon js-->
<script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather.min.js"></script>
<script src="https://laravel.pixelstrap.com/viho/assets/js/icons/feather-icon/feather-icon.js"></script>
<!-- Sidebar jquery-->
<script src="https://laravel.pixelstrap.com/viho/assets/js/sidebar-menu.js"></script>
<script src="https://laravel.pixelstrap.com/viho/assets/js/config.js"></script>
<!-- Bootstrap js-->
<script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/popper.min.js"></script>
<script src="https://laravel.pixelstrap.com/viho/assets/js/bootstrap/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.12.1/js/jquery.dataTables.min.js"></script>
<!-- Plugins JS start-->

    <!-- Plugins JS Ends-->
<!-- Theme js-->
<script src="https://laravel.pixelstrap.com/viho/assets/js/script.js"></script>
@yield('javascript')
<!-- Plugin used-->  </body>
</html>
