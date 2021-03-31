@extends('layouts.master')
@section('title','Home')

@section('container')




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
                    <td class="d-flex justify-content-around">
                        <a href="{{ route('categoryEdit', ['category'=>$category->id]) }}" class="btn btn-primary">Edit</a>
                        <form action="{{ route('categoryDelete', ['category'=>$category->id]) }}" method="post">
                            @csrf
                            @method('delete')
                            <input type="submit" name="submit" class="btn btn-danger" value="Delete">
                        </form>
                    </td>
                </tr>
            @endforeach
            </table>
        </div>
        <div class="card-footer">
            {{$categories->links()}}
        </div>
    </div>

@endsection
