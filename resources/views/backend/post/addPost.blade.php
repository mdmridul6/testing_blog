@extends('layouts.master')
@section('title','Home')

@section('container')

<div class="card mt-4">
    <div class="card-header">
        <a href="{{route('post')}}" class="btn btn-success">Back</a>
    </div>
    <div class="card-body">
        <form action="{{route('postAdd')}}" method="post">
            @csrf
            <div class="form-group">
                <label for="title">Title</label>
                <input type="text" name="title" class="form-control" value="{{old('title')}}">
            </div>
            <div class="form-group">
                <label for="description">Desctription</label>
                <textarea name="description" id="" cols="30" rows="10" class="form-control" value="">{{old('description')}}</textarea>
            </div>
            <div class="form-group">
                <label for="category">Category</label>
                <select name="category" id="" class="custom-select">
                    <option value="null" selected disabled>Select Category</option>
                    @foreach ($categories as $category)
                    <option   @if ($category->id == old('category')) selected @endif value="{{$category->id}}">{{$category->name}}</option>

                    @endforeach
                </select>
            </div>
            <div class="form-group">
                <label for="ststus">Status</label>
                <select name="ststus" id="" class="custom-select">
                    <option value="null" selected disabled>Select Status</option>
                    <option @if (old('status')  == "0") selected @endif value="0">Active</option>
                    <option @if (old('status')  == "1") selected @endif value="1">Deactive</option>
                </select>
            </div>

            <div class="form-group d-flex justify-content-end">
                <input type="submit" value="Save" class="btn btn-success">
            </div>
        </form>
    </div>
</div>



@endsection
