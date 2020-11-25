<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">

  <title>Laravel</title>
  <meta content="" name="descriptison">
  <meta content="" name="keywords">

  <link href="welcome/assets/img/apple-touch-icon.png" rel="apple-touch-icon">

  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Open+Sans:300,300i,400,400i,700,700i|Poppins:300,400,500,700" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="welcome/assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/font-awesome/css/font-awesome.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/boxicons/css/boxicons.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/owl.carousel/assets/owl.carousel.min.css" rel="stylesheet">
  <link href="welcome/assets/vendor/venobox/venobox.css" rel="stylesheet">
  <link href="welcome/assets/vendor/aos/aos.css" rel="stylesheet">

  <!-- Template Main CSS File -->
  <link href="welcome/assets/css/style.css" rel="stylesheet">
</head>

<body>

  <!-- ======= Header ======= -->
  <header id="header" class="header-transparent">
    <div class="container">

      <div id="logo" class="pull-left">
        <a href="{{ url('/') }}" style="color: white">System Sales</a>
        <!-- Uncomment below if you prefer to use a text logo -->
        <!--<h1><a href="#hero">Regna</a></h1>-->
      </div>

      <nav id="nav-menu-container">
      @if (Route::has('login'))
        <ul class="nav-menu">
        @auth
          <li class="menu-active"><a href="{{ url('/') }}">Home</a></li>
        @else
          <li><a href="{{route('login') }}">Login</a></li>
          @if (Route::has('register'))
            <li><a href="{{route('register')}}">Register</a></li>
          @endif
        @endauth
        </ul>
      @endif
      </nav><!-- #nav-menu-container -->
    </div>
  </header><!-- End Header -->

  <!-- ======= Hero Section ======= -->
  <section id="hero">
    <div class="hero-container" data-aos="zoom-in" data-aos-delay="100">
      <h1>Welcome to System Sales</h1>
      <!-- <h2>We are team of talanted designers making websites with Bootstrap</h2> -->
      <a href="{{ url('home') }}" class="btn-get-started">Administration</a>
    </div>
  </section><!-- End Hero Section -->

  
  <!-- #main -->

  <!-- End #main -->

  <!-- ======= Footer ======= -->
  <!-- <footer id="footer">
    <div class="footer-top">
      <div class="container">

      </div>
    </div>

    <div class="container">
      <div class="copyright">
        &copy; Copyright <strong>Regna</strong>. All Rights Reserved
      </div>
    </div>
  </footer>End Footer -->

  <a href="#" class="back-to-top"><i class="fa fa-chevron-up"></i></a>

  <!-- Vendor JS Files -->
  <script src="welcome/assets/vendor/jquery/jquery.min.js"></script>
  <script src="welcome/assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
  <script src="welcome/assets/vendor/jquery.easing/jquery.easing.min.js"></script>
  <script src="welcome/assets/vendor/php-email-form/validate.js"></script>
  <script src="welcome/assets/vendor/counterup/counterup.min.js"></script>
  <script src="welcome/assets/vendor/waypoints/jquery.waypoints.min.js"></script>
  <script src="welcome/assets/vendor/isotope-layout/isotope.pkgd.min.js"></script>
  <script src="welcome/assets/vendor/superfish/superfish.min.js"></script>
  <script src="welcome/assets/vendor/hoverIntent/hoverIntent.js"></script>
  <script src="welcome/assets/vendor/owl.carousel/owl.carousel.min.js"></script>
  <script src="welcome/assets/vendor/venobox/venobox.min.js"></script>
  <script src="welcome/assets/vendor/aos/aos.js"></script>

  <!-- Template Main JS File -->
  <script src="welcome/assets/js/main.js"></script>

</body>

</html>