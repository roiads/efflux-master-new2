@extends('layouts.web')

@section('content')
<body class="login-page bg-gradient-gray">
<div class="flex-center position-ref full-height">
    <div class="login-box">
        <div class="login-logo">
            <a href="/" class="brand-link text-white">
                <span class="brand-text">EFFLUX</span>
            </a>
        </div>
        <div class="card">
            <div class="card-body">
                @if (session('resent'))
                    <div class="alert alert-success" role="alert">
                        {{ __('A fresh verification link has been sent to your email address.') }}
                    </div>
                @endif
                {{ __('Before proceeding, please check your email for a verification link.') }}
                {{ __('If you did not receive the email') }},
                <form class="d-inline" method="POST" action="{{ route('verification.resend') }}">
                    @csrf
                    <button type="submit" class="btn btn-link p-0 m-0 align-baseline">{{ __('click here to request another') }}</button>.
                </form>
            </div>
        </div>
    </div>
</div>
@endsection
