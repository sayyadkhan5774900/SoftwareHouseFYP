@extends('layouts.admin')

@section('styles')
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
@endsection

@section('content')
    
 <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <!-- <ol class="breadcrumb mt-5 mb-0 p-0 text-right">
              <li class="breadcrumb-item"><a href="{{url('index')}}"> Home </a></li>
              <li class="breadcrumb-item active">Graphic designing</li>
            </ol> -->
          <h2 class="inner-banner-title">Event Management</h2>
         </div>
        </div>
      </div>
    </section>
    <!--=================================
    product -->
    <section class="space-ptb shop-single">
      <div class="container">
        <div class="row">
          <div class="col-lg-12">
            <div class="row">
              <div class="col-md-5 mb-4 mb-md-0">
                 <div class="slider-slick">
                  <div class="slider slider-for detail-big-car-gallery">
                    <img src="images/Services/Event Management/event_management.png" alt="">
                        
                    </div>
                   
                 </div>
              </div>
              <div class="col-md-7">
                <p class='text-justify'>Events are growing with the passage of time which are using for many purposes like promotion of business, culture, sports, tourism, political and charity. Events are very important part of society because event shows their culture and tradition. So event manager should be very careful regarding what he is presenting.</p>
<p class='text-justify'>As event manager I have to organize musical event for large company in entertainment business. Managing director asked me to help a group of interns in organizing the musical festival and explain them complexities and difficulties in planning, implementing and arranging of different stages of musical event. Show event manager’s different qualities and characteristic to interns which will help them in future life as event manager like leadership, planner, problem solver and team work etc.</p>
<p class='text-justify'>Event manager is person who plan and execute event. Event manger is creative, good leader and team builder.</p>
<p class='text-justify'>The successful completion of an event depends upon the knowledge and skills possessed by the event manager in handling the event. The ability of the event manager to perform the entire task in a most appropriate manner would lead to the success of the event.</p>

              </div>
            </div>
          </div>
        </div>

     
    </section>
   <section class="pricing-section-title bg-overlay-black-60 bg-holder" style="background-image: url(images/main/3.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div class="section-title text-center">
              <h2 class="title text-white"></h2>
              <p class="text-white" style="font-size: 15px;">Event manager is person who plan and execute event. Event manger is creative, good leader and team builder.</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Related products -->
    <section class="space-pb">
      <div class="container">
          <div class="row">
            <div  class="col-md-12">
              
               <div class="col-12 mt-4">
                   <center>  <a type="button" class="btn btn-success btn-rounded btn-fw" href="{{url('addneworder')}}">Order Now</a></center>
                       </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Related products -->

@endsection


@section('scripts')
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
@endsection