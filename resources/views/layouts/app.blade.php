<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="Description" content="Efflux - Media Manager">
  <meta name="theme-color" content="Efflux - Media Manager">
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="manifest" href="/manifest.json">
</head>
<body class="sidebar-mini layout-fixed text-sm sidebar-collapse">
  <div class="wrapper" id="app">
    @yield('content')
  </div>
  <script src="{{ asset('js/app.js') }}" defer></script>
  <script>
		window.addEventListener("load", function(event) {
  		store.commit('setUser', {
	      data: {!! Auth::user() !!}
	    });
		});
  </script>
</body>
</html>
