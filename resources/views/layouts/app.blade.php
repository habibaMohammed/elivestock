<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'ELivestock') }}</title>
   
    <!-- Fonts -->
    <link rel="dns-prefetch" href="//fonts.gstatic.com">
    <link href="https://fonts.googleapis.com/css?family=Nunito" rel="stylesheet">
    
    <!-- Styles -->
    <link rel="stylesheet" href="{{ asset('frontend/css/bootstrap.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/style.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/classy-nav.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/animate.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/font-awesome.min.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/magnific-popup.css') }}">
    <link rel="stylesheet" href="{{ asset('frontend/css/owl.carousel.min.css') }}">
    <link href="{{ asset('css/app.css') }}" rel="stylesheet">
    
    
</head>
<body>
    <div id="app1">
        <!-- <nav class="navbar navbar-expand-md navbar-light bg-white shadow-sm">
            <div class="container">
                <a class="navbar-brand" href="{{ url('/') }}">
                    ELivestock
                </a>
                <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="{{ __('Toggle navigation') }}">
                    <span class="navbar-toggler-icon"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarSupportedContent">
                  
                    <ul class="navbar-nav mr-auto">

                    </ul>

              
                    <ul class="navbar-nav ml-auto">
                       
                        @guest
                            @if (Route::has('login'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('login') }}">{{ __('Login') }}</a>
                                </li>
                            @endif
                            
                            @if (Route::has('register'))
                                <li class="nav-item">
                                    <a class="nav-link" href="{{ route('register') }}">{{ __('Register') }}</a>
                                </li>
                            @endif
                        @else
                            <li class="nav-item dropdown">
                                <a id="navbarDropdown" class="nav-link dropdown-toggle" href="#" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false" v-pre>
                                    {{ Auth::user()->name }}
                                </a>

                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="navbarDropdown">
                                    <a class="dropdown-item" href="{{ route('logout') }}"
                                       onclick="event.preventDefault();
                                                     document.getElementById('logout-form').submit();">
                                        {{ __('Logout') }}
                                    </a>

                                    <form id="logout-form" action="{{ route('logout') }}" method="POST" class="d-none">
                                        @csrf
                                    </form>
                                </div>
                            </li>
                        @endguest
                    </ul>
                </div>
            </div>
        </nav> -->
        <header class="header-area">
    <!-- Top Header Area -->
    <div class="top-header-area">
      <div class="container">
        <div class="row">
          <div class="col-12">
            <div class="top-header-content d-flex align-items-center justify-content-between">
              <!-- Top Header Content -->
              <!-- <div class="top-header-meta">
                <p>Welcome to <span>Farmie</span>, we hope you will enjoy our products and have good experience</p>
              </div> -->
              <!-- Top Header Content -->
              <div class="top-header-meta text-right">
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="infodeercreative@gmail.com"><i class="fa fa-envelope-o" aria-hidden="true"></i> <span>Email: infodeercreative@gmail.com</span></a>
                <a href="#" data-toggle="tooltip" data-placement="bottom" title="+1 234 122 122"><i class="fa fa-phone" aria-hidden="true"></i> <span>Call Us: +84 223 9000</span></a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>

    <!-- Navbar Area -->
    <div class="famie-main-menu">
      <div class="classy-nav-container breakpoint-off">
        <div class="container">
          <!-- Menu -->
          <nav class="classy-navbar justify-content-between" id="famieNav">
            <!-- Nav Brand -->
            <a href="index.html" class="nav-brand">
            Elivestock
            <!-- <img src="img/core-img/logo.png" alt=""> -->
            </a>
            <!-- Navbar Toggler -->
            <div class="classy-navbar-toggler">
              <span class="navbarToggler"><span></span><span></span><span></span></span>
            </div>
            <!-- Menu -->
            <div class="classy-menu">
              <!-- Close Button -->
              <div class="classycloseIcon">
                <div class="cross-wrap"><span class="top"></span><span class="bottom"></span></div>
              </div>
              <!-- Navbar Start -->
              <div class="classynav">
                <ul>
                  <li class="active"><a href="index.html">Home</a></li>
                  <li><a href="about.html">About</a></li>
                  <li><a href="farming-practice.html">Market Prices</a></li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="contact.html">Contact</a></li>
                  <!-- <li><a href="#">Pages</a>
                    <ul class="dropdown">
                      <li><a href="index.html">Home</a></li>
                      <li><a href="about.html">About Us</a></li>
                      <li><a href="farming-practice.html">Farming Practice</a></li>
                      <li><a href="shop.html">Shop</a>
                        <ul class="dropdown">
                          <li><a href="our-product.html">Our Products</a></li>
                          <li><a href="shop.html">Shop</a></li>
                        </ul>
                      </li>
                      <li><a href="news.html">News</a>
                        <ul class="dropdown">
                          <li><a href="news.html">News</a></li>
                          <li><a href="news-details.html">News Details</a></li>
                        </ul>
                      </li>
                      <li><a href="contact.html">Contact</a></li>
                    </ul>
                  </li>
                  <li><a href="our-product.html">Our Product</a></li>
                  <li><a href="farming-practice.html">Farming Practice</a></li>
                  <li><a href="news.html">News</a></li>
                  <li><a href="contact.html">Contact</a></li> -->
                </ul>
                <!-- Search Icon -->
                <div id="searchIcon">
                  <i class="icon_search" aria-hidden="true"></i>
                </div>
                <!-- Cart Icon -->
                <div id="cartIcon">
                  <a href="#">
                    <i class="icon_cart_alt" aria-hidden="true"></i>
                    <span class="cart-quantity">2</span>
                  </a>
                </div>
              </div>
              <!-- Navbar End -->
            </div>
          </nav>

          <!-- Search Form -->
          <div class="search-form">
            <form action="#" method="get">
              <input type="search" name="search" id="search" placeholder="Type keywords &amp; press enter...">
              <button type="submit" class="d-none"></button>
            </form>
            <!-- Close Icon -->
            <div class="closeIcon"><i class="fa fa-times" aria-hidden="true"></i></div>
          </div>
        </div>
      </div>
    </div>
  </header>
  <!-- ##### Header Area End ##### -->
        <main class="py-4">
            @yield('content')
        </main>
    </div>
     <!-- jquery 2.2.4  -->
 <script src="{{ asset('frontend/js/jquery.min.js') }}"></script>
    <!-- Scripts -->
    <script src="{{ asset('frontend/js/app.js') }}" defer></script>
 
  <!-- Popper js -->
  <script src="{{ asset('frontend/js/popper.min.js') }}"></script>
  <!-- Bootstrap js -->
  <script src="{{ asset('frontend/js/bootstrap.min.js') }}"></script>
  <!-- Owl Carousel js -->
  <script src="{{ asset('frontend/js/owl.carousel.min.js') }}"></script>
  <!-- Classynav -->
  <script src="{{ asset('frontend/js/classynav.js') }}"></script>
  <!-- Wow js -->
  <script src="{{ asset('frontend/js/wow.min.js') }}"></script>
  <!-- Sticky js -->
  <script src="{{ asset('frontend/js/jquery.sticky.js') }}"></script>
  <!-- Magnific Popup js -->
  <script src="{{ asset('frontend/js/jquery.magnific-popup.min.js') }}"></script>
  <!-- Scrollup js -->
  <script src="{{ asset('frontend/js/jquery.scrollup.min.js') }}"></script>
  <!-- Jarallax js -->
  <script src="{{ asset('frontend/js/jarallax.min.js') }}"></script>
  <!-- Jarallax Video js -->
  <script src="{{ asset('frontend/js/jarallax-video.min.js') }}"></script>
  <!-- Active js -->
  <script src="{{ asset('frontend/js/active.js') }}"></script>
</body>
</html>
