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
              <li class="breadcrumb-item active">Social Media</li>
            </ol>
            <h2 class="inner-banner-title">Social Media</h2>
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
                        <img src="images/Services/Social Media/social_media.png" alt="">
                        
                    </div>
                   
                 </div>
              </div>
              <div class="col-md-7">
                <p class='text-justify'>Social media channels have become a major source of news and information in today’s internet-driven world. But that’s not all. Social media presence is also a vital factor in search rankings and digital marketing.</p>
<p class='text-justify'>As social media usage continues to grow exponentially, knowing how to market on social media is becoming more crucial in reaching your target demographics and creating brand awareness. Many marketers, however, enter the digital and social media marketing realm without fully understanding what is social media marketing and its demands. Don’t make the same mistake.</p>
<p class='text-justify'>Our social media marketing specialists explain the different aspects of business-to-consumer (B2C) and business-to-business (B2B) social media marketing to help you get started with your campaign. Read on and learn what is social media marketing and how to market on social media straight from Thrive’s social media marketing experts.</p>
<p class='text-justify'>Social media digital marketing allows you to showcase your brand to potential customers at exactly the moment they are ready to convert. More importantly, combined digital and social media marketing efforts enable you to maximize available customer touchpoints and conversion opportunities.</p>


              </div>
            </div>
          </div>
          
        </div>
        <div class="row">
          <a href="{{ route("admin.add-new-orders.create") }}" class="mt-5 btn btn-primary btn-lg  btn-block">Order Now Get Quotaion</a>
        </div>
        </div>

     
    </section>
   <section class="pricing-section-title bg-overlay-black-60 bg-holder" style="background-image: url(images/main/3.jpg);">
      <div class="container">
        <div class="row justify-content-center">
          <div class="col-lg-8 col-md-12">
            <div class="section-title text-center">
              <h2 class="title text-white"></h2>
              <p class="text-white" style="font-size: 15px;">Socio Tech came in and brought a scattered vision of a company wide client management database into a focused reality. Irene spent the time to get to know our business model and how our business runs in order to give us a client management database that would precisely meet our needs. Irene was able to communicate to all of our people without the usual technical barrier getting in the way. We have enjoyed working with Socio Tech and will continue to do so in the future.” -L. Bradley, The Rains Group</p>
            </div>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    Related products -->

    @include('partials.contact_us')

    <!--=================================
    Related products -->

@endsection