<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}" data-theme="light">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">

    <title>{{ config('app.name', 'Laravel') }}</title>

    <!-- Scripts -->
    <!-- <script src="{{ asset('js/app.js') }}" defer></script> -->

    <!-- Fonts -->
    
    <link href="//fonts.googleapis.com/css2?family=Rubik:wght@300;400;500;600&display=swap" rel="stylesheet">

    <link rel="stylesheet" href="{{ asset('assets/css/style-starter.css') }}">

</head>
<body>
    
        <header id="site-header" class="w3lhny-head fixed-top">
            <div class="container">
              <nav class="navbar navbar-expand-lg stroke px-0">
                <!--<h1> <a class="navbar-brand" href="/">-->
                <!--    <span class="sublog"><span class="fa fa-cog w3llog-icon" aria-hidden="true"></span>Fraghub</span>-->
                <!--  </a></h1>-->
                
                 
                  <a class="navbar-brand" href="/">
                      <img src="{{ asset('assets/images/logo.png') }}" alt="Your logo" title="Your logo" style="height:60px;" />
                  </a>
          
                <button class="navbar-toggler  collapsed bg-gradient" type="button" data-toggle="collapse"
                  data-target="#navbarTogglerDemo02" aria-controls="navbarTogglerDemo02" aria-expanded="false"
                  aria-label="Toggle navigation">
                  <span class="navbar-toggler-icon fa icon-expand fa-bars"></span>
                  <span class="navbar-toggler-icon fa icon-close fa-times"></span>
                </button>

                <div class="collapse navbar-collapse" id="navbarTogglerDemo02">
                  <ul class="navbar-nav mx-lg-auto">
                    
                    <li class="nav-item">
                      <a class="nav-link" href="/">Home <span class="sr-only">(current)</span></a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="/about">About</a>
                    </li>
                    
                    <li class="nav-item">
                      <a class="nav-link" href="/items"> Items </a>
                    </li>

                    <li class="nav-item">
                      <a class="nav-link" href="/login"> My account </a>
                    </li>
                   
                    <li class="nav-item">
                      <a class="nav-link" href="/contact"> Contact </a>
                    </li>

                    <!--/search-right-->
                    <nav class="ml-lg-5">
                      <div class="search-bar">
                        
                        
                        {!! Form::open(['method'=>'GET','url'=>'search-item','class'=>'search' ])  !!}

                          <input type="search" class="search__input" name="search" placeholder="Search for item.."
                            onload="equalWidth()" required>
                          <span class="fa fa-search search__icon"></span>
                        
                        {!! Form::close() !!}

                      </div>
                    </nav>
                    <!--//search-right-->
                  </ul>
                </div>
                
              </nav>
            </div>
        </header>

        <main class="">
            @yield('content')
        </main>

    <footer class="footer-28 position-relative py-5">
    <div class="container py-lg-3">
      
      <div class="row footer-top-28 mt-4">
        <div class="col-lg-5 footer-list-28 pr-lg-5 mt-5">
          <h6 class="footer-title-28">Quick Contact</h6>
          

          <div class="main-social-footer-28 mt-4">
            <ul class="social-icons">
              <li class="facebook">
                <a href="#link" title="Facebook">
                  <span class="fa fa-facebook" aria-hidden="true"></span>
                </a>
              </li>
              <li class="twitter">
                <a href="#link" title="Twitter">
                  <span class="fa fa-twitter" aria-hidden="true"></span>
                </a>
              </li>
              <li class="dribbble">
                <a href="#link" title="Dribbble">
                  <span class="fa fa-dribbble" aria-hidden="true"></span>
                </a>
              </li>
              <li class="google">
                <a href="#link" title="Google">
                  <span class="fa fa-google" aria-hidden="true"></span>
                </a>
              </li>
            </ul>
          </div>
        </div>
        <div class="col-lg-7">
          <div class="row">

            <div class="col-md-6 col-sm-6 footer-list-28 mt-5">
              <h6 class="footer-title-28">Quick Links</h6>
              <ul>
                <li><a href="/"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Home</a></li>

                <li><a href="/items"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Items </a></li>

                <li><a href="/about"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> About us</a></li>
            

                <li><a href="/contact"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Contact</a></li>

              </ul>
            </div>

            <div class="col-md-6 col-sm-6 footer-list-28 mt-5">
              <h6 class="footer-title-28">Account</h6>
              <ul>
                
                <li><a href="/register"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Register </a></li>

                <li><a href="/login"><span class="fa fa-arrow-right mr-2" aria-hidden="true"></span> Login </a></li>
               
              </ul>
            </div>

          </div>
        </div>
      </div>
      <div class="midd-footer-28 align-center py-4 mt-5">
        <p class="copy-footer-28 text-center"> &copy; 2022 Fraghub. All Rights Reserved. </p>
      </div>
    </div>

    <script>
      // When the user scrolls down 20px from the top of the document, show the button
      window.onscroll = function () {
        scrollFunction()
      };

      function scrollFunction() {
        if (document.body.scrollTop > 20 || document.documentElement.scrollTop > 20) {
          document.getElementById("movetop").style.display = "block";
        } else {
          document.getElementById("movetop").style.display = "none";
        }
      }

      // When the user clicks on the button, scroll to the top of the document
      function topFunction() {
        document.body.scrollTop = 0;
        document.documentElement.scrollTop = 0;
      }
    </script>
    <!-- /move top -->
    <!-- //footer-28 block -->
  </footer>

  <!-- Template JavaScript -->
  <script src="{{ asset('assets/js/jquery-3.3.1.min.js') }}"></script>
  <script src="{{ asset('assets/js/theme-change.js') }}"></script>
  <!-- owlcarousel -->
  <!-- owl carousel -->
  <script src="assets/js/owl.carousel.js"></script>
  <!-- script for banner slider-->
  <script>
    $(document).ready(function () {
      $('.owl-one').owlCarousel({
        loop: true,
        margin: 0,
        nav: true,
        responsiveClass: true,
        autoplay: true,
        autoplayTimeout: 5000,
        autoplaySpeed: 1000,
        autoplayHoverPause: true,
        responsive: {
          0: {
            items: 1
          },
          480: {
            items: 1
          },
          667: {
            items: 1
          },
          1000: {
            items: 1
          }
        }
      })
    })
  </script>
  <!-- //script -->
  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo2").owlCarousel({
        loop: true,
        nav: false,
        margin: 50,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          736: {
            items: 1,
            nav: false
          },
          991: {
            items: 2,
            margin: 30,
            nav: false
          },
          1080: {
            items:3,
            nav: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- owl carousel -->

  <!-- script for tesimonials carousel slider -->
  <script>
    $(document).ready(function () {
      $("#owl-demo2").owlCarousel({
        loop: true,
        margin: 20,
        nav: false,
        responsiveClass: true,
        responsive: {
          0: {
            items: 1,
            nav: false
          },
          1000: {
            items: 1,
            nav: false,
            loop: false
          }
        }
      })
    })
  </script>
  <!-- //script for tesimonials carousel slider -->
  <!-- stats number counter-->
  <script src="{{ asset('assets/js/jquery.waypoints.min.js') }}"></script>
  <script src="{{ asset('assets/js/jquery.countup.js') }}"></script>
  <script>
    $('.counter').countUp();
  </script>
  <!-- //stats number counter -->
  <!--/MENU-JS-->
  <script>
    $(window).on("scroll", function () {
      var scroll = $(window).scrollTop();

      if (scroll >= 80) {
        $("#site-header").addClass("nav-fixed");
      } else {
        $("#site-header").removeClass("nav-fixed");
      }
    });

    //Main navigation Active Class Add Remove
    $(".navbar-toggler").on("click", function () {
      $("header").toggleClass("active");
    });
    $(document).on("ready", function () {
      if ($(window).width() > 991) {
        $("header").removeClass("active");
      }
      $(window).on("resize", function () {
        if ($(window).width() > 991) {
          $("header").removeClass("active");
        }
      });
    });
  </script>
  <!--//MENU-JS-->

  <script src="{{ asset('assets/js/bootstrap.min.js') }}"></script>

</body>
</html>
