<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="stylesheet" href="{{ mix('css/app.css') }}">
    <link rel="stylesheet" href="{{ mix('css/blog.css') }}">
    @yield('style')
    <script src="{{ mix('js/app.js') }}"></script>
    <title>@yield('title')</title>
</head>
<body>

    <div class="container">
    <nav class="navbar navbar-expand-lg navbar-dark bg-secondary">

            <a class="navbar-brand" href="{{ route('home') }}">Blogs</a>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarText" aria-controls="navbarText" aria-expanded="false" aria-label="Toggle navigation">
                <span class="navbar-toggler-icon"></span>
            </button>
            <div class="collapse navbar-collapse" id="navbarText">
                <ul class="navbar-nav mr-auto">
                    <li class="nav-item active">
                        <a class="nav-link" href="{{ route('home') }}">Home <span class="sr-only">(current)</span></a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="">Features</a>
                    </li>
                    <li class="nav-item">
                        <a class="nav-link" href="#">Pricing</a>
                    </li>
                </ul>
                @guest()
                <a href="{{ route('login') }}" class="navbar-text px-1">Login</a>
                <a href="{{ route('register') }}" class="navbar-text px-1">Register</a>
                @endguest
                @auth()
                <a href="{{route('profile',auth()->id())}}" class="navbar-text px-1">Profile</a>
                <a href="{{route('logout')}}" class="navbar-text px-1">Logout</a>
                @endauth
            </div>
        </nav>
    </div>

<div class="container">
    @include('backend.alart.alarts')
    @includeWhen(Request::is('/'),'assets.jumbotron')
    @yield('container')
</div>

</body>
</html>
