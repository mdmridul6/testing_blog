@extends('layouts.master')
@section('title','Home')

@section('container')

    @if(session()->has('success'))
        <div class="alert alert-success mt-4" role="alert">
            {{session('success')}}
        </div>
    @endif


    <div class="card  mt-4">
        <div class="card-header d-flex justify-content-between">
            <h4>Categories</h4>
            <a href="{{route('categoryAdd')}}" class="btn btn-secondary">Add</a>
        </div>
        <div class="card-body">
            <table class="table table-bordered">
                <thead>
                    <tr>
                        <th>Sl</th>
                        <th>Title</th>
                        <th>action</th>
                    </tr>
                </thead>
            @foreach($categories as $category)
                <tr>
                    <td>{{$category->id}}</td>
                    <td>{{$category->name}}</td>
                </tr>
            @endforeach
            </table>
        </div>
        <div class="card-footer">
            {{$categories->links()}}
        </div>
    </div>

@endsection
