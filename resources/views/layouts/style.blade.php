<!doctype html>
<html lang="{{ app()->getLocale() }}">
<head>
    <meta name="description" content="Glitter">
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- CSRF Token -->
    <meta name="csrf-token" content="{{ csrf_token() }}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}"/>
</head>
<body>

<div class="header">
    <div class="logo"><a href="{{ route('index')}}">glitter</a></div>
    @auth
    <div class="menu"><a href="{{ route('home')}}">Log out</a></div>
    @else
    <div class="menu"><a href="{{ route('register')}}">Register</a></div>
    @endauth
</div>
    @yield('form')
<div class="content wrapper">
    <div class="content wrapper">
    @yield('content')
</div>
</div>
    @yield('paginate')
</body>
</html>