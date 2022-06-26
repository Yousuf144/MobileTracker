

<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>MobiTracker - @yield('title')</title>
  <meta content="" name="description">
  <meta content="" name="keywords">
  <link rel="stylesheet" href="{{ asset('assets/css/toaster.min.css') }}"> 

  <!-- Favicons -->
  <link href="{{ asset('assets/front/img/favicon.png')}}" rel="icon">
  <link href="{{ asset('assets/front/img/apple-touch-icon.png')}}" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Roboto:300,300i,400,400i,500,500i,600,600i,700,700i|Poppins:300,300i,400,400i,500,500i,600,600i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="{{ asset('assets/front/vendor/aos/aos.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/front/vendor/bootstrap/css/bootstrap.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/front/vendor/bootstrap-icons/bootstrap-icons.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/front/vendor/boxicons/css/boxicons.min.css')}}" rel="stylesheet">
  <link href="{{ asset('assets/front/vendor/swiper/swiper-bundle.min.css')}}" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="{{ asset('assets/front/css/style.css')}}" rel="stylesheet">


</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="fixed-top d-flex align-items-center">
    <div class="container d-flex justify-content-between align-items-center">

      <div class="logo">
        <h1><a href="{{ route('home') }}">MobiTracker</a></h1>
      
      </div>



    </div>
  </header><!-- End Header -->
  @yield('content')
 
 <!-- ======= Footer ======= -->
  <footer class="sticky-footer bg-white">
    <div class="container my-auto">
        <div class="copyright text-center my-auto">
            <span>Copyright &copy; MobiTracker 2022</span>
        </div>
    </div>
</footer>

  <a href="#" class="back-to-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <!-- Vendor JS Files -->
  <script src="{{ asset('assets/front/vendor/aos/aos.js')}}"></script>
  <script src="{{ asset('assets/front/vendor/bootstrap/js/bootstrap.bundle.min.js')}}"></script>
  <script src="{{ asset('assets/front/vendor/swiper/swiper-bundle.min.js')}}"></script>
  <script src="{{ asset('assets/front/vendor/php-email-form/validate.js')}}"></script>
  <script src="http://cdn.bootcss.com/toastr.js/latest/js/toastr.min.js"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('assets/front/js/main.js')}}"></script>
  {!! Toastr::message() !!}
</body>

</html>