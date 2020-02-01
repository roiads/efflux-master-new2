@extends('core.web')
@section('content')
<body class="login-page bg-gradient-dark">
<div class="flex-center position-ref full-height">
    <div class="login-box">
        <div class="login-logo">
            <a href="/" class="brand-link text-white">
                <i class="fab fa-erlang"></i> <span class="brand-text">fflux</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body login-card-body pb-1">
                <p class="login-box-msg">Sign in to start your session</p>

                <form method="POST" action="{{ route('login') }}">
                    @csrf
                    <div class="input-group mb-3">
                        <input id="email" type="email" class="form-control @error('email') is-invalid @enderror" name="email" value="{{ old('email') }}" required autocomplete="email" autofocus placeholder="Email Address">
                        <div class="input-group-append"><div class="input-group-text"><span class="fas fa-envelope"></span></div></div>
                        @error('email') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                    </div>
                    <div class="input-group mb-3">
                        <input id="password" type="password" class="form-control @error('password') is-invalid @enderror" name="password" required autocomplete="current-password" placeholder="Password">
                       <div class="input-group-append"><div class="input-group-text"><span class="fas fa-lock"></span></div></div>
                        @error('password') <span class="invalid-feedback" role="alert"><strong>{{ $message }}</strong></span> @enderror
                    </div>
                    <div class="row">
                        <div class="col-8">
                            <div class="icheck-primary">
                                <input type="checkbox" id="remember">
                                <label for="remember">Remember Me</label>
                            </div>
                        </div>
                        <div class="col-4">
                            <button type="submit" class="btn btn-primary btn-block">Sign In</button>
                        </div>
                    </div>
                </form>
                <p class="text-center mt-2 mb-1 p-0">
                    <a href="{{ route('password.request') }}">I forgot my password</a>
                </p>
            </div>
        </div>
        <p class="text-center mt-5 mb-3">- OR -</p>
        <div class="social-auth-links text-center m-0 p-0">
            <div class="row">
                <div class="col-6 p-1">
                    <a href="#" class="btn btn-block btn-dark social-auth" style="background:#4267b2;">
                        <i class="fab fa-facebook mr-2"></i> Facebook
                    </a>
                </div>
                <div class="col-6 p-1">
                    <a href="#" class="btn btn-block btn-dark social-auth" style="background:#d14538;">
                        <i class="fab fa-google-plus mr-2"></i> Google+
                    </a>
                </div>
                <div class="col-8 offset-2 p-1">
                    <a href="{{ route('register') }}" class="btn btn-block btn-success text-center">
                        <i class="fas fa-plus mr-2"></i> Register a New Account
                    </a>
                </div>
            </div>
        </div>
    </div>

</div>
@endsection
