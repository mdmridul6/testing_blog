@extends('layouts.master')
@section('title','Home')

@section('container')
<div class="card  mt-4">
    <div class="card-header d-flex justify-content-between">
        <h4>Post</h4>
        <a href="{{route('postAdd')}}" class="btn btn-secondary">Add</a>
    </div>
    <div class="card-body">
        <table class="table table-bordered">
            <thead>
                <tr>
                    <th>Sl</th>
                    <th>Title</th>
                    <th>Category</th>
                    <th>Status</th>
                    <th>Action</th>
                </tr>
            </thead>
            <tbody>
                @foreach ($posts as $post)
                    <tr>
                        <td>{{$post->id}}</td>
                        <td>{{$post->title}}</td>
                        <td>{{$post->Category->name}}</td>
                        <td>@if ($post->status == 0)  Active  @else  Deactive  @endif</td>
                        <td class="d-flex justify-content-around">
                            <a href="{{ route('postEdit', ['posts'=>$post->id]) }}" class="btn btn-warning">Edit</a>
                            <form action="{{ route('postDelete', ['posts'=>$post->id]) }}" method="post">
                                @csrf
                                @method('delete')
                                <input type="submit" value="Delete" class="btn btn-danger">
                            </form>
                        </td>
                    </tr>
                @endforeach
            </tbody>
        </table>
    </div>
</div>


@endsection
