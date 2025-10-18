@extends('dash.layout')
@section('section')
    <div class="well">
        <div class="row">
            <div class="col-lg-7">
                <img src="{{$project->featured_image??''}}" alt="" class="img img-fluid" style="height: auto; width: 100%;">
            </div>
            <div class="col-lg-5">
                <h3 class="text-primary">{{$project->title}}</h3>
                <small class="text-secondary"><i>category: <b class="text-info">{!! $project->category->title??'' !!}</b> <br> created on: <b class="text-info">{!! $project->created_at??'' !!}</b> <br> <b class="{{$project->published == 1 ? 'text-success' : 'text-warning'}}">{{$project->published == 1 ? 'published' : 'unpublished'}}</b></i></small>
                <hr>
                <h5 class="text-warning">Launch Date: {{$project->launch_date}}</h5>
                <hr>
                <p class="text-secondary">{{$project->caption??''}}</p>
            </div>
            <div class="col-lg-12">
                <hr>
                {!! $project->description !!}
            </div>
        </div>
    </div>
@endsection