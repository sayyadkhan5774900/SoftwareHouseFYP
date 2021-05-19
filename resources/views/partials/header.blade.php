    <!--=================================
    header -->
    <header class="header default">
        <div class="topbar">
          <div class="container">
            <div class="row">
              <div class="col-12">
                <div class="d-block d-md-flex align-items-center text-center">
                  <div class="mr-3 d-inline-block">
                    <a href="mailto:syedamir01214@gmail.com"><i class="far fa-envelope mr-2 fa-flip-horizontal"></i>web@sociotech.com</a>        
                  </div>
                  <div class="mr-auto d-inline-block">
                   <a href="tel:877-439-2539"><i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>+92 308 3361929</a>&nbsp &nbsp
  
                    <a href="tel:877-439-2539"><i class="fa fa-phone mr-2 fa fa-flip-horizontal"></i>+92 335 0550520</a></center>
                  </div>
                  <div class="d-inline-block mr-3">
                    <ul class="list-unstyled">
                    </ul>
                  </div>
                  <div class="social d-inline-block">
                    <ul class="list-unstyled">a
                      <li><a href="#"> <i class="fab fa-facebook-f"></i></a></li>
                      <li><a href="#"> <i class="fab fa-twitter"></i></a></li>
                      <li><a href="#"> <i class="fab fa-linkedin"></i></a></li>
                      <li><a href="#"> <i class="fab fa-pinterest"></i></a></li>
                      <li><a href="#"> <i class="fab fa-instagram"></i></a></li>
                    </ul>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
        <nav class="navbar navbar-static-top navbar-expand-lg header-sticky">
          <div class="container">
            <button type="button" class="navbar-toggler" data-toggle="collapse" data-target=".navbar-collapse"><i class="fas fa-align-left"></i></button>
            <a class="navbar-brand" href="{{url('index')}}">
              <img class="img-fluid logo" src="images/main/logo.png" alt="Main logo">
              <img class="img-fluid logo-sticky" src="images/main/logo.png" alt="Logo responsive and sticky">
            </a>
            <div class="navbar-collapse collapse justify-content-center">
              <ul class="nav navbar-nav">
                <li class="nav-item dropdown active">
                      <a class="nav-link dropdown-toggle" href="{{url('/')}}">Home</a>
                    </li>
                 <li class="nav-item dropdown  ">
                  <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Services<i class="fas fa-chevron-down fa-xs"></i></a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <!-- <li><a class="dropdown-item" href="{{url('Dashboard')}}">Website Development</a></li> -->
                    <li><a class="dropdown-item" href="{{url('website-development')}}">Website Development</a></li>
                    <li><a class="dropdown-item" href="{{url('product-photography')}}">Product Photography</a></li>
                    <li><a class="dropdown-item" href="{{url('graphic-designing')}}">Graphic Designing</a></li>
                    <li><a class="dropdown-item" href="{{url('event-management')}}">Event Management</a></li>
                    <li><a class="dropdown-item" href="{{url('social-media-marketing')}}">Social Media</a></li>     
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{url('case-studies')}}">Case Studies</a>
                </li>
        
                <li class="nav-item dropdown ">
                  <a class="nav-link" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">About Us<i class="fas fa-chevron-down fa-xs"></i></a>
                  <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    
                    <li><a class="dropdown-item" href="#">Socio Group News</a></li>
                    <li><a class="dropdown-item" href="#">Our Quality Assurance</a></li>
                    <li><a class="dropdown-item" href="#">Our Architecture Framework</a></li>
                    <li><a class="dropdown-item" href="#">Our Process Model</a></li>
                    
                   
                  </ul>
                </li>
                <li class="nav-item dropdown">
                  <a class="nav-link dropdown-toggle" href="{{url('contact-us')}}">Contact US</a>
                </li>
                
            
            
      
             <!--  <div class="add-listing">
                <a class="btn btn-primary btn-sm" href="">Book Sitter</a>
              </div> -->
  
  
              <div class="mt-2" style="padding-left: 40x; padding-right: 10px;">
                <li class="nav-item dropdown ">
                  <a class="btn btn-primary btn-sm" style="padding: 5px 15px; background-color: #ffc107a1" href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Register<i class="fas fa-chevron-down fa-xs"></i></a>
                   <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <li><a class="dropdown-item" href="{{ route('register.provider') }}">Register as a Provider</a></li>
                    <li><a class="dropdown-item" href="{{ route('register.client') }}">Register as a Client</a></li>
                  </ul>
                </li>
              </div>


              @auth
                <div class="mt-2" style="padding-left: 40x; padding-right: 10px;">
                  <li class="nav-item dropdown  ">
                      <a class="btn btn-primary btn-sm" style="padding: 5px 15px; background-color: rgba(0,123,255,.5);"   href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Profile<i class="fas fa-chevron-down fa-xs"></i></a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('admin')}}">Dashboard</a></li>     
                        <li><a class="dropdown-item" href="{{url('admin')}}" onclick="event.preventDefault(); document.getElementById('logoutform').submit();">
                          {{ trans('global.logout') }}
                        </a></li>     
                      </ul>
                  </li>
                </div>
              @else
                <div class="mt-2" style="padding-left: 40x; padding-right: 10px;">
                  <li class="nav-item dropdown  ">
                      <a class="btn btn-primary btn-sm" style="padding: 5px 15px; background-color: rgba(0,123,255,.5);"   href="javascript:void(0)" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Login<i class="fas fa-chevron-down fa-xs"></i></a>
                      <ul class="dropdown-menu" aria-labelledby="navbarDropdown">
                        <li><a class="dropdown-item" href="{{url('login')}}">Login</a></li>     
                      </ul>
                  </li>
                </div>
              @endauth  
            </ul>
            </div>
        </nav>
      </header>
      
      <!--=================================
       header -->  