<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="robots" content="noindex,nofollow">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="keywords" content="{{ $keywords ?? '' }}">
  <meta name="description" content="{{ $description ?? '' }}">
  <meta name="copyright" content="{{ $copyright ?? '' }}">
  
  @auth()
  <link rel="stylesheet" href="/css/app.css">
  @endauth
  @guest()
  <link rel="stylesheet" href="/css/web.css">
  @endguest
  
</head>
<body class="layout-fixed">
  <div id="app" class="wrapper">
    @yield('content')
  </div>
  <script src="/js/app.js" defer></script>
</body>
</html>
