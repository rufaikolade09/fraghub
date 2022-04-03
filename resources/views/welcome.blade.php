@extends('layouts.page')

@section('content')


<section class="w3l-main-slider" id="home">
    <div class="companies20-content">
      <div class="owl-one owl-carousel owl-theme">
        <div class="item">
          <li>
            <div class="slider-info banner-view bg bg2">
              <div class="banner-info">
                <div class="container">

                  <div class="banner-info-bg">
                    <h6>Rentage made easy.</h6>
                    <h5>We are experienced and expert industry company. </h5>
                    <p class="mt-md-4 mt-3">
                        
                    </p>
                    <a class="btn btn-style btn-outline-light mt-sm-5 mt-4" href="#features">
                      Get Started <span class="fa fa-arrow-right  ml-3" aria-hidden="true"></span></a>
                  </div>
                </div>
              </div>
            </div>
          </li>
        </div>
        
       
      </div>
      <!--/w3l-industry-address-->
      <div class="w3l-industry-address">
        <div class="one-address">
          <div class="left">
            <div class="ad-icon">
              <span class="fa fa-phone"></span>
            </div>
          </div>
          <div class="content">
            <p>Call Us:</p>
            <h5>+00 823 468 739</h5>
          </div>
        </div>
        <div class="one-address">
          <div class="left">
            <div class="ad-icon">
              <span class="fa fa-envelope-o"></span>
            </div>
          </div>
          <div class="content">
            <p>Email Us:</p>
            <h5><a href="mailto:info@fraghub.co.uk" class="mail"> info@fraghub.co.uk </a></h5>
          </div>
        </div>
      </div>
      <!--//w3l-industry-address-->
    </div>
  </section>
  <!-- /main-slider -->
  
  <!-- home page block1 -->
  <section id="features" class="home-services py-5">
    <div class="container py-md-5 py-2">
      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Our properties</h6>
        <h3 class="title-w3l mt-2">High quality property </h3>
      </div>
      <div class="row">

        @if( count($items) > 0 )
        
        @foreach($items as $item)

        <div class="col-lg-4 col-md-6 col-sm-12 mb-5">
          <div class="box-wrap">

            <div class="box-wrap-grid">
              
              <div class="pro-item-img">
                
                	<img src="{{ asset('assets/item/'.$item->slug.'/'.$item->img.'') }}">

              </div>

              <div class="info">
                <h4><a href="/item-page?slug={{ $item->slug }}">
                    {{ $item->name }}</a></h4>
              </div>
            
            </div>

            <p class="mt-2 mb-2"> {{ \Illuminate\Support\Str::limit($item->description, 90, $end='...') }} </p>

            <a href="/item-page?slug={{ $item->slug }}">
            	<button class="btn btn-sm btn-primary"> Learn More</button>
        	</a>

          </div>
        </div>

        @endforeach

        @else

          <h1> No record found </h1>

        @endif        
        
      </div>
    </div>
  </section>
  
  
 

@endsection
