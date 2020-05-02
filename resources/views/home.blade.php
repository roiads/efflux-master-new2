@extends('layouts.app')
@section('content')
  <site-header></site-header>
  <sidebar-left></sidebar-left>
  <div class="content-wrapper p-3">
    <router-view></router-view>
  </div>
  <sidebar-right></sidebar-right>
  <site-footer></site-footer>
  
@endsection