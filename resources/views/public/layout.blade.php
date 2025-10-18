<!DOCTYPE html>
<html lang="en">
  <head>
    <title>CYIAMAEF - Cameroon Youths In Action Medical And Agro Excellence Fuondation</title>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    
    <!-- <link href="https://fonts.googleapis.com/css?family=Dosis:200,300,400,500,700" rel="stylesheet">
    <link href="https://fonts.googleapis.com/css?family=Overpass:300,400,400i,600,700" rel="stylesheet"> -->

    <link rel="stylesheet" href="{{asset('assets')}}/css/open-iconic-bootstrap.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/animate.css">
    
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.carousel.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/owl.theme.default.min.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/magnific-popup.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/aos.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/ionicons.min.css">

    <link rel="stylesheet" href="{{asset('assets')}}/css/bootstrap-datepicker.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/jquery.timepicker.css">

    <link href="{{ asset('assets/css/select2.min.css') }}" rel="stylesheet" />
    
    <link rel="stylesheet" href="{{asset('assets')}}/css/flaticon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/icomoon.css">
    <link rel="stylesheet" href="{{asset('assets')}}/css/style.css">
    <link rel="stylesheet" href="{{ asset('assets/css/bootstrap.min.css') }}">
  </head>
  <body>
    
    <nav class="navbar navbar-expand-lg navbar-dark ftco_navbar bg-dark ftco-navbar-dark" id="ftco-navbar">
      <div class="container">
        <a class="navbar-brand btn rounded-circle bg-white text-success border border-success border-3" href="{{ route('home') }}">CYIAMAEF</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#ftco-nav" aria-controls="ftco-nav" aria-expanded="false" aria-label="Toggle navigation">
          <span class="oi oi-menu"></span> Menu
        </button>

        <div class="collapse navbar-collapse" id="ftco-nav">
          <ul class="navbar-nav ml-auto">
            <li class="nav-item active"><a href="{{route('home')}}" class="nav-link">Home</a></li>
            <li class="nav-item"><a href="{{route('about')}}" class="nav-link">About</a></li>
            <li class="nav-item"><a href="{{route('projects')}}" class="nav-link">Projects</a></li>
            <li class="nav-item"><a href="{{route('blog')}}" class="nav-link">Blog</a></li>
            <li class="nav-item"><a href="{{route('gallery')}}" class="nav-link">Gallery</a></li>
            <li class="nav-item"><a href="{{route('events')}}" class="nav-link">Events</a></li>
            <li class="nav-item"><a href="{{route('contact')}}" class="nav-link">Contact</a></li>
          </ul>
        </div>
      </div>
    </nav>
    <!-- END nav -->
   
    @yield('section')

    <footer class="ftco-footer ftco-section img">
    	<div class="overlay"></div>
      <div class="container">
        <div class="row mb-5">
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">About Us</h2>
              <p>Is an empowerment foundation that sets out to empower youth through its sensitization programs. We exist to guarantee a bright future for our youth and community</p>
              <ul class="ftco-footer-social list-unstyled float-md-left float-lft mt-5">
                <li class="ftco-animate"><a href="#"><span class="icon-twitter"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-facebook"></span></a></li>
                <li class="ftco-animate"><a href="#"><span class="icon-instagram"></span></a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-4">
            <div class="ftco-footer-widget mb-4">
              <h2 class="ftco-heading-2">Recent Blog</h2>
              @foreach (\App\Models\Post::orderBy('id', 'DESC')->where('published', 1)->take(2)->get() as $post)
                <div class="block-21 mb-4 d-flex">
                  <a class="blog-img mr-4" style="background-image: url({{$post->featured_image??''}});"></a>
                  <div class="text">
                    <h3 class="heading"><a href="{{route('blog', $post->id)}}">{{$post->title}}</a></h3>
                    <div class="meta">
                      <div><a href="#"><span class="icon-calendar"></span> {{$post->created_at->format('M lS, Y')}}</a></div>
                      <div><a href="#"><span class="icon-person"></span> CYIAMAEF</a></div>
                    </div>
                  </div>
                </div>
              @endforeach
            </div>
          </div>
          <div class="col-md-2">
             <div class="ftco-footer-widget mb-4 ml-md-4">
              <h2 class="ftco-heading-2">Site Links</h2>
              <ul class="list-unstyled">
                <li><a href="{{route('home')}}" class="py-2 d-block">Home</a></li>
                <li><a href="{{route('about')}}" class="py-2 d-block">About</a></li>
                <li><a href="{{route('donate')}}" class="py-2 d-block">Donate</a></li>
                <li><a href="{{route('projects')}}" class="py-2 d-block">Causes</a></li>
                <li><a href="{{route('blog')}}" class="py-2 d-block">Blog</a></li>
              </ul>
            </div>
          </div>
          <div class="col-md-3">
            <div class="ftco-footer-widget mb-4">
            	<h2 class="ftco-heading-2">Have a Questions?</h2>
            	<div class="block-23 mb-3">
	              <ul>
	                <li><span class="icon icon-map-marker"></span><span class="text">Buea, SWR, Cameroon</span></li>
	                <li><a href="#"><span class="icon icon-phone"></span><span class="text">+ 237 652 574 550</span></a></li>
	                <li><a href="#"><span class="icon icon-envelope"></span><span class="text">cyiamaeffoundation@gmail.com</span></a></li>
	              </ul>
	            </div>
            </div>
          </div>
        </div>
        <div class="row">
          <div class="col-md-12 text-center">

            <p><!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
              Copyright &copy;<script>document.write(new Date().getFullYear());</script> All rights reserved. By CYIAMAEF
              <!-- Link back to Colorlib can't be removed. Template is licensed under CC BY 3.0. -->
            </p>
          </div>
        </div>
      </div>
    </footer>
    

  <!-- loader -->
  <div id="ftco-loader" class="show fullscreen"><svg class="circular" width="48px" height="48px"><circle class="path-bg" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke="#eeeeee"/><circle class="path" cx="24" cy="24" r="22" fill="none" stroke-width="4" stroke-miterlimit="10" stroke="#F96D00"/></svg></div>


  <script src="{{asset('assets')}}/js/jquery.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery-migrate-3.0.1.min.js"></script>
  <script src="{{asset('assets')}}/js/popper.min.js"></script>
  <script src="{{asset('assets')}}/js/bootstrap.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.easing.1.3.js"></script>
  <script src="{{asset('assets')}}/js/jquery.waypoints.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.stellar.min.js"></script>
  <script src="{{asset('assets')}}/js/owl.carousel.min.js"></script>
  <script src="{{asset('assets')}}/js/jquery.magnific-popup.min.js"></script>
  <script src="{{asset('assets')}}/js/aos.js"></script>
  <script src="{{asset('assets')}}/js/jquery.animateNumber.min.js"></script>
  <script src="{{asset('assets')}}/js/bootstrap-datepicker.js"></script>
  <script src="{{asset('assets')}}/js/jquery.timepicker.min.js"></script>
  <script src="{{asset('assets')}}/js/scrollax.min.js"></script>
  <script src="https://maps.googleapis.com/maps/api/js?key=AIzaSyBVWaKrjvy3MaE7SQ74_uJiULgl1JY0H2s&sensor=false"></script>
  <script src="{{asset('assets')}}/js/google-map.js"></script>
  <script src="{{asset('assets')}}/js/main.js"></script>
  <script src="https://code.jquery.com/jquery-3.7.1.min.js"></script>
  <script src="{{ asset('assets/js/select2.min.js') }}"></script>

  @yield('script')
  <script>
    $(function(){
      $(".filter-select").select2();
    }); 
  </script>
  </body>
</html>