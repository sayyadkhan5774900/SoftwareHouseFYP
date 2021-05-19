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
              <li class="breadcrumb-item active">website development</li>
            </ol>
            <h2 class="inner-banner-title">website development</h2>
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
                        <img src="images/Services/Website development/website.png" alt="">
                        
                    </div>
                   
                 </div>
              </div>
              <div class="col-md-7">
                <p class='text-justify'>Creating a digital presence doesn’t mean simply building a website and waiting for customers to approach your brand. Your website is your company’s online foundation. It serves as your primary customer touchpoint and conversion machine. As such, you must ensure it ranks high in search engines, stands out from the competition and relates to your visitors' intentions.</p><br>
                <p class='text-justify'>Statistics reveal that website design and navigation influence 94 percent of first impressions. Search engines also favor websites with responsive web design and well-structured web content. What’s more, 75 percent of site credibility comes from web page design.</p>
                <p>Don’t let this be the case for your business. Ensure your target customers can find and navigate your website with ease. Invest in a responsive, well-designed and informative website to improve your brand’s profitability and success.</p>
                <p>Your website is a powerful communication platform that allows you to market your brand 24/7 and connect with clients from across locations. However, not all sites guarantee your desired return on investment (ROI). The primary consideration is choosing between a website template and a custom design website.</p>            
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
              <p class="text-white" style="font-size: 15px;">For all of your kindness, I cannot thank you enough. Where I used to do 60 invoices a day, I can do 150+ now. This gives me more time to focus my attention on my selection contacts and other specifications that have been paused for some time now. Again, I can't thank you enough for all your support and how quickly things shift around you. Thank you, oh! -Brownell Kimberly, ACE Forwarding Company</p>
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