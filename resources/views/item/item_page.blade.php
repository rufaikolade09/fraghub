@extends('layouts.page')

@section('content')

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/items">Items</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> {{ $item->name }}</li>
      </ul>
    </div>
  </section>

  <section id="features" class="home-services py-5">
    <div class="container clearfix">
      
      <div class="col-lg-6 mb-3 ffl">
         
         <img class="img-responsive" src="{{ asset('assets/item/'.$item->slug.'/'.$item->img.'') }}">

      </div>

      <div class="col-lg-6 ffl">
          
          <h1 class="mb-3"> {{ $item->name }} </h1>

          <p class="mb-4">
             {!! $item->description !!}
          </p>

          <h5 class="mb-3">
            £{{ $item->rate }} per day
          </h5>

          <a href="/payment?slug={{ $item->slug }}">
            <button class="btn btn-primary"> Rent Now </button>
          </a>

      </div>
      
    </div>
  </section>

@endsection
