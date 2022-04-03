@extends('layouts.page')

@section('content')

<div class="inner-banner">
</div>

<section class="w3l-breadcrumb">
    <div class="container">
      <ul class="breadcrumbs-custom-path">
        <li><a href="/">Home</a></li>
        <li class="active"><span class="fa fa-arrow-right mx-2" aria-hidden="true"></span> Contact Us </li>
      </ul>
    </div>
</section>

<section class="w3l-contact-2 py-5" id="contact">
    <div class="container py-lg-5 py-md-4 py-2">
      <div class="header-section text-center mx-0 mb-md-5 mb-4">
        <h6 class="title-subhny">Contact Us</h6>
        <h3 class="title-w3l mt-2">Send a Message</h3>
      </div>
      <div class="contact-grids d-grid">
        <div class="contact-left-img">
          <img src="assets/images/ab1.jpg" class="img-fluid radius-image" alt="">
        </div>
        <div class="contact-right">
          
          <form action="" method="post" class="signin-form">
            <div class="input-grids">

              <input type="text" name="w3lName" id="w3lName" placeholder="Your Name*" class="contact-input"
                required="" />
              <input type="email" name="w3lSender" id="w3lSender" placeholder="Your Email*" class="contact-input"
                required="" />
              <input type="text" name="w3lSubect" id="w3lSubect" placeholder="Subject*" class="contact-input"
                required="" />
              <input type="text" name="w3lWebsite" id="w3lWebsite" placeholder="Website URL*" class="contact-input"
                required="" />
            </div>
            <div class="form-input">
              <textarea name="w3lMessage" id="w3lMessage" placeholder="Type your message here*" required=""></textarea>
            </div>
            <div class="form-buttonhny text-lg-right">
              <button class="btn btn-style btn-primary">Send Message</button>
            </div>
          </form>
          
        </div>
      </div>
      <div class="map-iframe mt-5 mb-lg-5 pb-lg-4">
        <iframe
          src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d317718.69319292053!2d-0.3817765050863085!3d51.528307984912544!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C+UK!5e0!3m2!1sen!2spl!4v1562654563739!5m2!1sen!2spl"
          width="100%" height="400" frameborder="0" style="border: 0px;" allowfullscreen=""></iframe>
      </div>
    </div>
  </section>
 

@endsection
