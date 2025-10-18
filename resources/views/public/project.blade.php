@extends('public.layout')
@section('section')
  <div class="hero-wrap" style="background-image: url({{$project->featured_image}}); background-color: rgba(0, 0, 0, 0.9); background-blend-mode: overlay;" data-stellar-background-ratio="0.5">
    <div class="overlay"></div>
    <div class="container">
      <div class="row no-gutters slider-text align-items-center justify-content-center" data-scrollax-parent="true">
        <div class="col-md-7 ftco-animate text-center" data-scrollax=" properties: { translateY: '70%' }">
          <p class="breadcrumbs" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }"><span class="mr-2"><a href="{{route('projects')}}">Our Causes</a></span> &rangle; <span>{{$project->title}}</span></p>
          <h1 class="mb-3 bread" data-scrollax="properties: { translateY: '30%', opacity: 1.6 }">{{$project->title}}</h1>
          <hr>
          <p class="text-justify">{{$project->caption}}</p>
        </div>
      </div>
    </div>
  </div>

  
  <section class="ftco-section">
    <div class="container">
      <div class="row d-flex">
        <div class="col-md-6 d-flex ftco-animate">
          <div class="img img-about align-self-stretch" style="background-image: url({{$project->featured_image}}); width: 100%;"></div>
        </div>
        <div class="col-md-6 pl-md-5 ftco-animate">
          <h2 class="mb-4">{{$project->title}}</h2>
          <p>{{$project->description}}</p>
          <p class="text-danger"><span class="text-success">events run &ctdot; </span>{{$project->events->count()}}</p>
        </div>
      </div>
    </div>
  </section>

  <section class="ftco-section">
    <div class="container">
        <div class="row justify-content-center mb-5 pb-3">
            <div class="col-md-5 heading-section ftco-animate text-center">
                <h2 class="mb-4">Events Held</h2>
                <p>Clearing off every barrier to ensure a healthy environment and the success of the Cameroonian youths </p>
            </div>
        </div>
      <div class="row">
        @foreach ($project->events as $event)
            <div class="col-md-4 d-flex ftco-animate">
              <div class="blog-entry align-self-stretch bg-secondary">
                  <a href="{{route('events', $event->id)}}" class="block-20" style="background-image: url('{{$event->featured_image}}');">
                  </a>
                  <div class="text p-4 d-block">
                    <div class="meta mb-3">
                        <div><a href="#">{{now()->parse($event->set_time)->format('M. dS, Y')}}</a></div>
                        <div><a href="#">Cyiamaef</a></div>
                    </div>
                    <h3 class="heading mb-4"><a href="#">{{$event->title??''}}</a></h3>
                    <p class="time-loc"><span class="mr-2"><i class="icon-clock-o"></i> {{now()->parse($event->set_time)->format('h:i')}}</span> <span><i class="icon-map-o"></i> {{$event->address??''}}</span></p>
                    <p>{{$event->caption}}</p>
                    <p><a href="{{route('events', $event->id)}}">Details <i class="ion-ios-arrow-forward"></i></a></p>
                  </div>
              </div>
            </div>
        @endforeach
      </div>
      <div class="row mt-5">
        <div class="col text-center">
          <div class="block-27">
            <ul>
              <li><a href="#">&lt;</a></li>
              <li class="active"><span>1</span></li>
              <li><a href="#">&gt;</a></li>
            </ul>
          </div>
        </div>
      </div>
    </div>
  </section>

@endsection