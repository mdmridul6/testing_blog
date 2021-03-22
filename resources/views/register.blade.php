@extends('layouts.master')

@section('container')
<div class="contsiner mt-5">

    <form action="{{route('register')}}" method="post">
        @csrf
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFristName">Full Name</label>
                <input type="text" class="form-control" id="inputFristName" name="name">
            </div>
            <div class="form-group col-md-6">
                <label for="inputAddress">Address</label>
                <input type="text" class="form-control" id="inputAddress" name="address" placeholder="1234 Main St">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4" name="email">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4" name="password">
            </div>
        </div>


        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</div>
@endsection
