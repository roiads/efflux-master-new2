<!doctype html>
<html lang="en">
<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <title>{{ config('app.name') }}</title>
  <link href="{{ asset('css/app.css') }}" rel="stylesheet">
  <link rel="manifest" href="/manifest.json">
</head>
<body class="">
  <div class="wrapper" id="app">
    <top-navbar></top-navbar>
    <side-navbar></side-navbar>
    <div class="content-wrapper pt-3">
        <router-view></router-view>
    </div>
    <side-controlbar username="TEST"></side-controlbar>
    <main-footer></main-footer>
  </div>
  <script src="{{ asset('js/app.js') }}" defer></script>
</body>
</html>
