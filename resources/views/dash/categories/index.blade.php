@extends('dash.layout')
@section('section')
    <div class="pt-5 container-fluid">
        <div class="well card shadow rounded my-5">
            <div class="card-body py-2">
                <form method="post">
                    @csrf
                    <div class="">
                        <div class="d-flex justify-content-end py-2">
                            <a href="{{route('reserved.categories')}}" class="btn btn-sm btn-primary text-capitalize">clear</a>
                        </div>
                        <hr>
                        <div class="col-12">
                            <small class="text-capitalize text-info"><b><i>name</i></b></small>
                            <input type="text" name="title" value="{{old('title', optional($category??null)->title??'')}}" id="" class="form-control rounded border-left-0 border-right-0">
                        </div>
                        <div class="col-12">
                            <small class="text-capitalize text-info"><b><i>description</i></b></small>
                            <textarea name="description" id="" rows="3" class="form-control border-left-0 border-right-0">{{old('description', optional($category??null)->description??'')}}</textarea>
                        </div>
                        <hr>
                        <div class="my-3 col-12">
                            <button type="submit" class="rounded btn btn-md btn-primary form-control text-capitalize">save</button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
        <table id="datatable" class="table table-striped table-bordered">
            <thead>
            <tr>
                <th>SN</th>
                <th>Name</th>
                <th>Description</th>
                <th></th>
            </tr>
            </thead>
    
    
            <tbody>
                @php
                    $counter = 1;
                @endphp
                @foreach ($categories as $cat)
                    <tr>
                        <td>{{$counter++}}</td>
                        <td>{{$cat->title??''}}</td>
                        <td>{{$cat->description??''}}</td>
                        <td>
                            <a href="{{route('reserved.categories', $cat->id)}}" class="btn btn-primary btn-xs">edit</a>|
                            <a href="{{route('reserved.category.posts', $cat->id)}}" class="btn btn-xs btn-warning">posts</a>|
                            <a href="{{route('reserved.categories.delete', $cat->id)}}" class="btn btn-danger btn-xs">delete</a>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
        
@endsection