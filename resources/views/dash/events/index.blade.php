@extends('dash.layout')
@section('section')
<table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>Title</th>
        <th>Schedule</th>
        <th>Caption</th>
        <th>Project</th>
        <th></th>
      </tr>
    </thead>


    <tbody>
      @foreach ($events as $event)
        <tr>
          <td>{{$event->title}}</td>
          <td>{{now()->parse($event->set_time)->format('l dS M Y @ H:i')}}</td>
          <td>{{$event->caption}}</td>
          <td>{{$event->project->title??''}}</td>
          <td>
            <a href="{{route('reserved.events', $event->id)}}" class="btn btn-sm btn-primary"><b class="fa fa-eye"></b>show</a>
            <a href="{{route('reserved.events.create', $event->id)}}" class="btn btn-sm btn-info"><b class="fa fa-edit"></b>edit</a>
            <a href="{{route('reserved.events.delete', $event->id)}}" class="btn btn-sm btn-danger"><b class="fa fa-trash"></b>delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection