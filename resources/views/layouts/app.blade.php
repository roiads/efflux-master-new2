<!DOCTYPE html>
<html lang="en">
<head>
  <title>{{ config('app.name') }}</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <meta name="keywords" content="">
  <meta name="description" content="">
  <meta name="copyright" content="">
  <meta name="robots" content="noindex,nofollow">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <script src="https://cdn.ckeditor.com/ckeditor5/18.0.0/classic/ckeditor.js"></script>
  <link rel="stylesheet" href="/css/app.css">
</head>
<body class="layout-fixed">
  <div id="app" class="wrapper">
    @yield('content')
  </div>

  <script src="/js/app.js" defer></script>
</body>
</html>
