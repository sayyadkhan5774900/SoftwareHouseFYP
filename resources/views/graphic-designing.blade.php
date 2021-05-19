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
              <li class="breadcrumb-item active">Graphic designing</li>
            </ol>
            <h2 class="inner-banner-title">Graphic designing</h2>
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
                        <img src="images/Services/Graphic designing/graphic_designing.png" alt="">
                        
                    </div>
                   
                 </div>
              </div>
              <div class="col-md-7">
                <p class='text-justify'>Graphic design is an international language composed of signs and symbols, marks and logos, banners and billboards, pictures and words. As visual communicators, graphic designers maintain a delicate balance between clarity and innovation: if too much of the former is a snooze, too much of the latter yields chaos. In between lies a complex series of negotiations which lead, in turn, to a host of applications — the same logo engraved on an envelope one day, emblazoned on a truck the next — and therein lies the designer’s peculiar, if paradoxical challenge. Succeed, and the world works a little better as a result. Fail, and — well, you’ve got the butterfly ballot.</p>
<p class='text-justify'>In addition to their role in the visual engineering of most printed matter, graphic designers today lend their expertise to a host of related disciplines including, but not limited to, strategy and consulting, information and experience design, branding and broadcast design, and signage and wayfinding systems.</p>
<p class='text-justify'>They are groomed to acquire a certain classic set of skills (which today demand a facility with software) including drawing, photography, composition and typography — the design and structural characteristics of letterforms, arguably graphic design’s lingua franca.</p>
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
              <p class="text-white" style="font-size: 15px;">graphic designers (sometimes referred to as “communication designers”) are the visual ambassadors of ideas: their role is to translate, communicate — and occasionally even agitate — by rendering thinking as form, process and 
                experience.</p>
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