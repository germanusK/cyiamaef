@extends('dash.layout')
@section('section')
<div class="">
    <div class="row top_tiles">
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-list-alt"></i></div>
          <div class="count">{{$categories??0}}</div>
          <h3>Project Categories</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-cog"></i></div>
          <div class="count">{{$projects??0}}</div>
          <h3>Projects Executed</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-book"></i></div>
          <div class="count">{{$posts??0}}</div>
          <h3>Posts Written</h3>
        </div>
      </div>
      <div class="animated flipInY col-lg-3 col-md-3 col-sm-6 col-xs-12">
        <div class="tile-stats">
          <div class="icon"><i class="fa fa-globe"></i></div>
          <div class="count">{{$events??0}}</div>
          <h3>Events Recorded</h3>
        </div>
      </div>
    </div>

    <div class="row">
      <div class="col-md-12">
        <div class="x_panel">
          <div class="x_title">
            <div class="filter">
              <div id="" class="pull-right" style="background: #fff; cursor: pointer; padding: 5px 10px; border: 1px solid #ccc">
                <i class="glyphicon glyphicon-calendar fa fa-calendar"></i>
                <span>{{now()->format('l dS M Y')}}</span>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
@endsection