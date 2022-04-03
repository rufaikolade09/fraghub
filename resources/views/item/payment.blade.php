@extends('layouts.page')

@section('content')

  <div class="inner-banner">
  </div>
  <section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/items">Items</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Payment </li>
      </ul>
    </div>
  </section>

  <section id="features" class="home-services py-5">
    
    <div class="container">
     
      <div class="contact-grids d-grid">
        
        <div class="contact-left-img">
          <img src="{{ asset('assets/item/'.$item->slug.'/'.$item->img.'') }}" class="img-fluid radius-image" alt="">
        </div>

        <div class="contact-right">
          
          {!! Form::open(['method'=>'POST','url'=>'post-booking', 'enctype' => 'multipart/form-data' ])  !!}

            <div class="input-grids">

              <label> Your Name </label>
              <input type="text" name="name" class="contact-input"
                required="" />

              <label> Email </label>
              <input type="email" name="email"  class="contact-input"
                required="" />

              <label> How many days you want to rent this items? </label>  
              <input type="number" name="days" id="days"  class="contact-input"
                required="" />

              <small>Notes: Rate per day for this item is £{{ $item->rate }}</small>

              <div class="clearfix mb-4"></div>

              <label> Your Address </label>  
              <input type="text" name="address" id="address"  class="contact-input mb-5"
                required="" />

              <input type="hidden" name="item_ref_id" value="{{ $item->ref_id }}">

            
            </div>


            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Make Payment</button>
            </div>

          {!! Form::close() !!}

        </div>
      </div>
      
    </div>

  </section>

@endsection
