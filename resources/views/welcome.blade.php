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
            #home{
                padding:200px 0px;
            }
        </style>
    </head>
    <body>
        <div class="flex-center position-ref bg-gradient-dark" id="home">
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
                    <a href="#contact">Contact Us</a>
                </div>
            </div>
        </div>




        <div class="container bg-light my-5 py-3" id="about">
            <h5 class="header">About</h5>
            <div class="row">
                <div class="col-8">
                    <p>Some Content Here...</p>
                </div>
                <div class="col-4 bg-gradient-dark">
                    &nbsp;
                </div>
            </div>
        </div>
        <div class="container-fluid bg-secondary p-3">
            <div class="row">&nbsp;</div>
        </div>
        <div class="container bg-light my-5 py-3" id="services">
            <h5 class="header">Services</h5>
            <div class="row">
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
                <div class="col-4">
                    <div class="card">
                        <div class="card-header bg-gradient-primary">
                            Header
                        </div>
                        <div class="card-body">
                            Body
                        </div>
                        <div class="card-footer bg-gradient-light">
                            Footer
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="container-fluid bg-gradient-secondary p-3">
            <div class="row">&nbsp;</div>
        </div>
        <div class="container bg-light my-5 py-3" id="contact">
            <h5 class="header">Contact Us</h5>
            <div class="row">
                <div class="col-8 offset-2">
                    <form class="form-control">
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="name" placeholder="Name" />
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-user"></span></div></div>
                        </div>
                        <div class="input-group mb-3">
                            <input class="form-control" type="text" name="email" placeholder="Email" />
                            <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </body>
</html>
