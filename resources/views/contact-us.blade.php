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
              <li class="breadcrumb-item active">Contact US</li>
            </ol>
            <h2 class="inner-banner-title">Contact US</h2>
          </div>
        </div>
      </div>
    </section>
    <!--=================================
    banner -->

    <!--=================================
    Related products -->
    @include('partials.contact_us')
    <!--=================================
    Related products -->

@endsection