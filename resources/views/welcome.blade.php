<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="vZMAeflmdtEUrSh8OsRwUvrnwH32uarIWsO3DqcE">
  <title>Efflux</title>
  <link href="{{ url('/css/app.css') }}" rel="stylesheet">
</head>
<body class="www">
  <div class="flex-center full-height position-ref bg-gradient-dark" id="home">
    @if (Route::has('login'))
      <div class="top-right links">
        @auth
          <a href="/admin/dashboard">Admin</a>
        @else
          <a href="/login">Login</a>
          @if (Route::has('register'))
            <a href="/register">Register</a>
          @endif
        @endauth
      </div>
    @endif
    <div class="content py-5">
      <div class="title m-b-md">
        <a href="/" class="brand-link text-white pt-5">
          <i class="fab fa-erlang"></i> <span class="brand-text">fflux</span>
        </a>
      </div>
      <div class="links">
        <a href="#">Home</a>
        <a href="#about">About</a>
        <a href="#services">Services</a>
        <a href="#features">Features</a>
        <a href="#contact">Contact Us</a>
      </div>
    </div>
  </div>
</body>
</html>
