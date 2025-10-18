@extends('dash.layout')
@section('section')
    <div class="well">
        <div class="row">
            <div class="col-lg-7">
                <img src="{{$post->featured_image??''}}" alt="" class="img img-fluid" style="height: auto; width: 100%;">
            </div>
            <div class="col-lg-5">
                <h3 class="text-primary">{{$post->title}}</h3>
                <small class="text-secondary"><i>category: <b class="text-info">{!! $post->category->title??'' !!}</b> <br> created on: <b class="text-info">{!! $post->created_at??'' !!}</b> <br> <b class="{{$post->published == 1 ? 'text-success' : 'text-warning'}}">{{$post->published == 1 ? 'published' : 'unpublished'}}</b></i></small>
                <hr>
                <p class="text-secondary">{{$post->caption??''}}</p>
            </div>
            <div class="col-lg-12">
                <hr>
                {!! $post->description !!}
            </div>
        </div>
    </div>
@endsection