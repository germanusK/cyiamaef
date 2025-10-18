@extends('public.layout')
@section('section')
  <div class="hero-wrap" style="background-image: url({{asset('assets')}}.'/images/dld/glowing-contact-us.jpg');" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{ route('home') }}">Home</a></span> <span>Contact</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">Contact Us</h1>
        </div>
      </div>
    </div>
  </div>

  <section class="ftco-section contact-section ftco-degree-bg">
    <div class="container">
      <div class="row d-flex mb-5 contact-info">
        <div class="col-md-12 mb-4">
          <h2 class="h4">Contact Information</h2>
        </div>
        <div class="w-100"></div>
        <div class="col-md-4 col-lg-3">
          <p><span>Address:</span> Buea, SWR, Cameroon</p>
        </div>
        <div class="col-md-4 col-lg-3">
          <p><span>Phone:</span> <a href="tel://1234567920">+ 237 652 574 550</a></p>
        </div>
        <div class="col-md-4 col-4">
          <p><span>Email:</span> <a href="mailto:info@yoursite.com">cyiamaeffoundation@gmail.com</a></p>
        </div>
        <div class="col-md-3 col-lg-2">
          <p><span>Website</span> <a href="#">cyiamaef.org</a></p>
        </div>
      </div>
      <div class="row block-9">
        <div class="col-md-6 pr-md-5">
          <h4 class="mb-4">Do you have any questions?</h4>
          <form action="#">
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Name">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Your Email">
            </div>
            <div class="form-group">
              <input type="text" class="form-control" placeholder="Subject">
            </div>
            <div class="form-group">
              <textarea name="" id="" cols="30" rows="7" class="form-control" placeholder="Message"></textarea>
            </div>
            <div class="form-group">
              <input type="submit" value="Send Message" class="btn btn-primary py-3 px-5">
            </div>
          </form>
        </div>

        <div class="col-md-6">
          <iframe src="https://www.google.com/maps/embed?pb=!1m21!1m12!1m3!1d63669.31071207875!2d9.225327122317037!3d4.154985037868891!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!4m6!3e6!4m0!4m3!3m2!1d4.161576602920874!2d9.289356817480334!5e0!3m2!1sen!2sde!4v1734986176177!5m2!1sen!2sde" width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
        </div>
      </div>
    </div>
  </section>
  
@endsection
