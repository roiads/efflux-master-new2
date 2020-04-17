@extends('layouts.web')
@section('content')
<b-container fluid>
  <b-row align-v="center" align-h="center" class="h-75">
    <b-col cols="10" sm="8" md="6" lg="4" xl="3">
      <b-link href="/" class="big-logo">EFFLUX</b-link>
      <b-card class="elevation-3" no-body>
        <b-form action="{{ route('login') }}" method="POST">
          @csrf
          <b-card-body>
            <b-form-group id="email">
              <b-input name="email" type="email" required placeholder="Enter email" autofocus>
              </b-input>
            </b-form-group>
            <b-form-group id="password">
              <b-input name="password" type="password" required placeholder="password">
              </b-input>
            </b-form-group>
          </b-card-body>
          <b-card-footer>
            <b-row>
              <b-col cols="auto" class="mr-auto">
                <b-form-group id="remember">
                  <b-checkbox name="remember" class="text-muted mt-1 ml-3">
                    <small>Remember Me</small>
                  </b-checkbox>
                </b-form-group>
              </b-col>
              <b-col cols="auto" class="ml-auto">
                <b-btn type="submit" variant="success" class="px-3 btn-sm">Sign In</b-btn>
              </b-col>
            </b-row>
          </b-card-footer>
        </b-form>
      </b-card>
      <b-row>
        <b-col cols="auto" class="mx-auto">
          <b-btn href="{{ route('password.request') }}" variant="outline-primary" size="sm">Forgot Password</b-btn>
          <b-btn href="{{ route('register') }}" variant="outline-primary" size="sm">Registration</b-btn>
        </b-col>
      </b-row>
    </b-col>
  </b-row>
</b-container>
@endsection