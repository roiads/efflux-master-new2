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
                    <a href="#features">Features</a>
                    <a href="#contact">Contact Us</a>
                </div>
            </div>
        </div>
        <div class="container" id="about" style="margin-top:50px;">
            <div class="jumbotron border shadow-sm">
              <h1 class="display-4">About Us</h1>
              <p class="lead text-dark">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.</p>
              <hr class="my-4">
              <p class="text-muted">It uses utility classes for typography and spacing to space content out within the larger container.</p>
              <p class="lead">
                <a class="btn btn-primary btn-lg" href="#" role="button">Learn more</a>
              </p>
            </div>
        </div>
        <div class="container-fluid bg-secondary p-3">
            <div class="row">&nbsp;</div>
        </div>
        <div class="container bg-light my-5 py-3" id="services">
            <h5 class="header">Services</h5>
            <div class="row">
                @for($i=1;$i<=4;$i++)
                    <div class="col-12 col-md-6">
                        <div class="card">
                            <div class="card-header bg-gradient-secondary">
                                Header {{ $i }}
                            </div>
                            <div class="card-body">
                                Body
                            </div>
                            <div class="card-footer bg-gradient-light">
                                Footer
                            </div>
                        </div>
                    </div>
                @endfor
            </div>
        </div>
        <div class="container bg-light my-5 py-3" id="features">
            <h5 class="header">Features</h5>
            <div class="row">

<div class="card text-white bg-primary  col-sm-4 col-lg-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Primary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-secondary  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Secondary card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-success  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Success card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-danger  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Danger card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-warning  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Warning card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-info  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Info card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card bg-light mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Light card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>
<div class="card text-white bg-dark  col-sm-4 col-lg-3 mb-3 mb-3" style="max-width: 18rem;">
  <div class="card-header">Header</div>
  <div class="card-body">
    <h5 class="card-title">Dark card title</h5>
    <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
  </div>
</div>

            </div>
        </div>
        <div class="container bg-light my-5 py-3" id="testimonials">
            <h5 class="header">Testimonials</h5>
            <div class="row">
                <div class="col-12 col-sm-8 col-md-9">
                    <div class="row">
                        <div class="col-12">
                            @for($i=1;$i<=3;$i++)
                                <div class="card bg-light mb-3">
                                  <div class="card-header">Header</div>
                                  <div class="card-body">
                                    <h5 class="card-title">Light card title</h5>
                                    <p class="card-text">Some quick example text to build on the card title and make up the bulk oe quick example text to build on the card title and make up the bulk oe quick example text to build on the card title and make up the bulk oe quick example text to build on the card title and make up the bulk of the card's content.</p>
                                  </div>
                                </div>

                            @endfor
                        </div>
                    </div>
                </div>
                <div class="col-12 col-sm-4 col-md-3">
                    <div class="row">
                        <div class="col-6 col-sm-12 col-md-6">
                            @for($i=1;$i<=6;$i++)
                                <div class="card">
                                    <div class="card-body bg-gradient-secondary">
                                        Feature {{ $i }}
                                    </div>
                                </div>
                            @endfor
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
<form>
  <div class="form-group">
    <label for="exampleInputEmail1">Email address</label>
    <input type="email" class="form-control" id="exampleInputEmail1" aria-describedby="emailHelp">
    <small id="emailHelp" class="form-text text-muted">We'll never share your email with anyone else.</small>
  </div>
  <div class="form-group">
    <label for="exampleInputPassword1">Password</label>
    <input type="password" class="form-control" id="exampleInputPassword1">
  </div>
  <div class="form-group form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Check me out</label>
  </div>
  <button type="submit" class="btn btn-primary">Submit</button>
</form>
                </div>
            </div>
        </div>
    </body>
</html>
