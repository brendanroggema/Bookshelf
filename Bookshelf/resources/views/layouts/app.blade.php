<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <title>Bookshelf</title>
    <link href="{{ asset('css/app.css') }}" rel="stylesheet" type="text/css" />
</head>
<body>

<nav class="navbar navbar-expand-md navbar-light navbar-laravel">
    <div class="container">
        <div id="navbarSupportedContent">
            <ul class="navbar-nav mr-auto">
                <li class="nav-item">
                    <a href="{{url('/')}}" class="nav-link">Home</a>
                </li>
                <li class="nav-item">
                    <a href="{{url('books')}}" class="nav-link">Books</a>
                </li>
            </ul>
        </div>
    </div>
</nav>

<div class="container">
    @yield('content')
</div>
</body>
</html>
