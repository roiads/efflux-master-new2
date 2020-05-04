@extends('layouts.app')
@section('content')
  <b-container fluid> 
    <b-row align-v="center" align-h="center" class="h-75">
      <b-col cols="10" md="6" lg="4" xl="3">
          <b-link href="/" class="big-logo">EFFLUX</b-link>
          <div class="links">
            @auth
              <a href="/dashboard">Admin</a>
            @else
              <a href="/login">Login</a>
              <a href="/register">Register</a>
            @endauth
          </div>
      </b-col>
    </b-row>
  </b-container>
@endsection
