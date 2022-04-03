@extends('layouts.page')

@section('content')

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Search Results </li>
      </ul>
    </div>
  </section>

  <section id="features" class="home-services py-5">
    <div class="container clearfix">

      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Search resulr for: {{ $search }}</h6>
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

            <p class="mt-2 mb-2">
                {{ \Illuminate\Support\Str::limit($item->description, 90, $end='...') }}
            </p>

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

      {{ $items->links() }}
      
    </div>
  </section>

@endsection
