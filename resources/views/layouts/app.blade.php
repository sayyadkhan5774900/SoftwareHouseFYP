<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta name="keywords" content="" />
    <meta name="description" content="" />
    <meta name="author" content="" />
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <title>Socio Tech</title>

    <!-- Favicon -->
    <link rel="shortcut icon" href="images/main/icon.png" />

    <!-- Google Font -->
    <link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Quicksand:300,400,500,600,700&display=swap" >

    <!-- CSS Global Compulsory (Do not remove)-->
    <link rel="stylesheet" href="css1/font-awesome/all.min.css" />
    <link rel="stylesheet" href="css1/flaticon/flaticon.css" />
    <link rel="stylesheet" href="css1/bootstrap/bootstrap.min.css" />

    <!-- Page CSS Implementing Plugins (Remove the plugin CSS here if site does not use that feature)-->
    <link rel="stylesheet" href="css1/select2/select2.css" />
    <link rel="stylesheet" href="css1/range-slider/ion.rangeSlider.css" />
    <link rel="stylesheet" href="css1/owl-carousel/owl.carousel.min.css" />
    <link rel="stylesheet" href="css1/slick/slick-theme.css" />
    <link rel="stylesheet" href="css1/magnific-popup/magnific-popup.css" />

    <!-- Template Style -->
    <link rel="stylesheet" href="css1/style.css" />
  </head>

  <body>

    <!--=================================
    preloader -->
    <div id="pre-loader">
      <img src="images/main/icon.png" alt="">
    </div>
    <!--=================================
    preloader -->

    @include('partials.header')

    @yield('content')
  

    @include('partials.footer')
    
    <form id="logoutform" action="{{ route('logout') }}" method="POST" style="display: none;">
      {{ csrf_field() }}
    </form>
    <!--=================================
    Javascript -->

    <!-- JS Global Compulsory (Do not remove)-->
    <script src="js/jquery-3.4.1.min.js"></script>
    <script src="js/popper/popper.min.js"></script>
    <script src="js/bootstrap/bootstrap.min.js"></script>

    <!-- Page JS Implementing Plugins (Remove the plugin script here if site does not use that feature)-->
    <script src="js/jquery.appear.js"></script>
    <script src="js/counter/jquery.countTo.js"></script>
    <script src="js/owl-carousel/owl.carousel.min.js"></script>
    <script src="js/swiper/swiper.min.js"></script>
    <script src="js/swiperanimation/SwiperAnimation.min.js"></script>

    <!-- Template Scripts (Do not remove)-->
    <script src="js/custom.js"></script>
   
  </body>
</html>
