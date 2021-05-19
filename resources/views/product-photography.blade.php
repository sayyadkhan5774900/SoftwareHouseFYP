@extends('layouts.app')
@section('content')
      <!--=================================
    banner -->
    <section class="header-inner bg-dark text-center" >
      <div class="container">
        <div class="row">
          <div class="col-sm-12 ">
            <ol class="breadcrumb mt-5 mb-0 p-0 text-right">
              <li class="breadcrumb-item"><a href="{{url('index')}}"> Home </a></li>
              <li class="breadcrumb-item active">Product Photography</li>
            </ol>
            <h2 class="inner-banner-title">Product Photography</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

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
                    <img src="images/Services/Product Photography/product.png"alt="">
                        
                    </div>
                   
                 </div>
              </div>
              <div class="col-md-7">
                <p class='text-justify'>The perceived value of your products and the trustworthiness of your brand is often judged based on the quality of your visual presentation. That means having high-quality, beautiful product photography can go a long way.</p>
               <p class='text-justify'>However, not every store owner can afford to invest in a professional photography studio, especially when they’re just starting out. DIY product photography provides a great alternative, and as long as you know the proper tools and techniques, taking compelling product photos is well within your grasp.</p>
               <p class='text-justify'>The perceived value of your products is directly impacted by the quality of your product photography.</p>
                <p class='text-justify'>There are lots of techniques for shooting successful product photos, but the one I’m going to show you is commonly known as The Window Light Technique. From someone who photographs products every day, this tutorial has been specifically crafted for business owners on a budget. It’s designed to be simple while producing excellent, high-quality results for most product types.</p>
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
              <p class="text-white" style="font-size: 15px;">The perceived value of your products is directly impacted by the quality of your product photography.</p>
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
              <div class="form-dark contact-form">
              
                 <form class="mt-4">
                  <div class="form-row">
                    <div class="form-group col-6">
                      <input type="text" class="form-control" id="Username" placeholder="First Name">
                    </div>
                    <div class="form-group col-6">
                      <input type="text" class="form-control" id="lastname" placeholder="Last Name">
                    </div>
                    <div class="form-group col-12">
                      <input type="email" class="form-control" id="email" placeholder="Email">
                    </div>
                    <div class="form-group col-12">
                      <input type="text" class="form-control" id="phone" placeholder="Website">
                    </div>
                    <div class="form-group col-12">
                      <input type="text" class="form-control" id="subject" placeholder="Subject">
                    </div>
                    <div class="form-group col-12 mb-0">
                      <textarea rows="4" class="form-control" id="sector" placeholder="Message"></textarea>
                    </div>
                    <div class="col-12 mt-4">
                      <a class="btn btn-primary btn-block" href="#">Submit</a>
                    </div>
                  </div>
                </form>
            </div>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Related products -->
@endsection