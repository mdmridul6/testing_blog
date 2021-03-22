@extends('layouts.master')

@section('container')
<div class="contsiner mt-5">

    <form>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputFristName">Frist Name</label>
                <input type="text" class="form-control" id="inputFristName">
            </div>
            <div class="form-group col-md-6">
                <label for="inputLastName">Last Name</label>
                <input type="text" class="form-control" id="inputLastName">
            </div>
        </div>
        <div class="form-row">
            <div class="form-group col-md-6">
                <label for="inputEmail4">Email</label>
                <input type="email" class="form-control" id="inputEmail4">
            </div>
            <div class="form-group col-md-6">
                <label for="inputPassword4">Password</label>
                <input type="password" class="form-control" id="inputPassword4">
            </div>
        </div>
        <div class="form-group">
            <label for="inputAddress">Address</label>
            <input type="text" class="form-control" id="inputAddress" placeholder="1234 Main St">
        </div>

        <button type="submit" class="btn btn-primary">Sign up</button>
    </form>
</div>
@endsection
