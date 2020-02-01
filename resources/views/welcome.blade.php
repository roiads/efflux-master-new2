<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="csrf-token" content="vZMAeflmdtEUrSh8OsRwUvrnwH32uarIWsO3DqcE">
    <title>Efflux</title>
    <link href="{{ url('/css/app.css') }}" rel="stylesheet">
        <style>
            html, body {
                color: #636b6f;
                font-family: 'Nunito', sans-serif;
                font-weight: 200;
                height: 100vh;
                margin: 0;
            }
            .full-height {
                height: 100vh;
            }
            .flex-center {
                align-items: center;
                display: flex;
                justify-content: center;
            }
            .position-ref {
                position: relative;
            }
            .top-right {
                position: absolute;
                right: 10px;
                top: 18px;
            }
            .content {
                text-align: center;
            }
            .title {
                font-size: 84px;
            }

            .links > a {
                color: #fff5;
                padding: 0 25px;
                font-size: 13px;
                font-weight: 600;
                letter-spacing: .1rem;
                text-decoration: none;
                text-transform: uppercase;
            }
            .links > a:hover {
                color: #fff;
            }
            .m-b-md {
                margin-bottom: 30px;
            }
            a.brand-link i{
                font-size:96px;
            }
            a.brand-link span.brand-text{
                font-size:66px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref full-height bg-gradient-dark">
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
            <div class="content">
                <div class="title m-b-md">
                    <a href="/admin/dashboard" class="brand-link text-white">
                        <i class="fab fa-erlang"></i> <span class="brand-text">fflux</span>
                    </a>
                </div>
                <div class="links">
                    <a href="#">Home</a>
                    <a href="#">About</a>
                    <a href="#">Services</a>
                    <a href="#">Contact Us</a>
                </div>
            </div>
        </div>
    </body>
</html>
