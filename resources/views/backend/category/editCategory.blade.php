@extends('layouts.master')
@section('title','Home')

@section('container')
<div class="card mt-4">
    <div class="card-header">
        <a href="{{route('category')}}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <form action="{{route('categoryEdit',['category'=>$category->id])}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{$category->name}}">
            </div>
            <div class="form-group d-flex justify-content-end">
                <input type="submit" value="submit" class="btn btn-success">
            </div>
        </form>
    </div>
</div>


@endsection
