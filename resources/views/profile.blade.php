@extends('layouts.master')
@section('title','Profile')
@section('container')


    <div class="card mt-3">

        <div class="card-body">
            <div class="col-md-12">
                <div class="row">
                    <div class="col-md-8">
                        <table class="table table-bordered">
                            <thead>
                            <tr>
                                <th>
                                    Name
                                </th>
                                <td>
                                    {{auth()->user()->name}}
                                </td>
                            </tr><tr>
                                <th>
                                    Address
                                </th>
                                <td>
                                    {{auth()->user()->address}}
                                </td>
                            </tr><tr>
                                <th>
                                    Email
                                </th>
                                <td>
                                    {{auth()->user()->email}}
                                </td>
                            </tr>
                            </thead>
                        </table>
                    </div>
                    <div class="col-md-4 my-auto">
                        <a href="#" class="btn btn-primary btn-block">Edit Profile</a>
                        <a href="{{route('category')}}" class="btn btn-primary btn-block">Category</a>
                        <a href="{{route('post')}}" class="btn btn-primary btn-block">Posts</a>
                    </div>
                </div>
            </div>

        </div>
    </div>

@endsection
