@extends('dash.layout')
@section('section')
<table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr class="text-capitalize">
        <th>icon</th>
        <th>title</th>
        <th>caption</th>
        <th>launch date</th>
        <th></th>
      </tr>
    </thead>


    <tbody>
      @foreach ($projects as $project)
        <tr>
          <td><img src="{{$project->featured_image??''}}" alt="" style="width: 2.3rem; height: 2.3rem; border-radius: 0.3rem;"></td>
          <td>{{$project->title}}</td>
          <td>{{$project->caption}}</td>
          <td>{{$project->launch_date}}</td>
          <td>
            <a href="{{route('reserved.projects', $project->id)}}" class="btn btn-sm btn-info"><i class="fa fa-eye"></i> show</a>
            <a href="{{route('reserved.projects.create', $project->id)}}" class="btn btn-sm btn-primary"><i class="fa fa-edit"></i> edit</a>
            <a href="{{route('reserved.projects.events', $project->id)}}" class="btn btn-sm btn-warning"><i class="fa fa-list"></i> events</a>
            <a href="{{route('reserved.projects.delete', $project->id)}}" class="btn btn-sm btn-danger"><i class="fa fa-trash"></i> delete</a>
          </td>
        </tr>
      @endforeach
    </tbody>
</table>
@endsection