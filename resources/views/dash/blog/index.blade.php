@extends('dash.layout')
@section('section')
<table id="datatable" class="table table-striped table-bordered">
    <thead>
      <tr>
        <th>SN</th>
        <th>Title</th>
        <th>Caption</th>
        <th>Published</th>
        <th></th>
      </tr>
    </thead>


    <tbody>
        @php
            $counter = 1;
        @endphp
        @foreach ($posts as $post)
            <tr>
                <td>{{$counter++}}</td>
                <td>{{$post->title??''}}</td>
                <td>{{$post->caption??''}}</td>
                <td class="{{$post->published == 0 ? 'text-warning alert-warning' : 'text-success alert-success'}}">{{$post->published == 0 ? 'NO' : 'YES'}}</td>
                <td>
                    <a href="{{route('reserved.blog.publish', $post->id)}}" class="btn {{ $post->published == 0 ? 'btn-success' : 'btn-warning' }} btn-sm"><span class="fa fa-edit"></span>{{ $post->published == 0 ? 'publish' : 'unpublish' }}</a>|
                    <a href="{{route('reserved.blog', $post->id)}}" class="btn btn-info btn-sm"><span class="fa fa-eye"></span>show</a>|
                    <a href="{{route('reserved.blog.create', $post->id)}}" class="btn btn-primary btn-sm"><span class="fa fa-edit"></span>edit</a>|
                    <a href="{{route('reserved.blog.delete', $post->id)}}" class="btn btn-danger btn-sm"><span class="fa fa-trash"></span>delete</a>
                </td>
            </tr>
        @endforeach
      
    </tbody>
</table>
@endsection