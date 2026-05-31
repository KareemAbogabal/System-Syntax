<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <link rel="stylesheet" href="{{ asset('css/website/dashbord/pages/main.css') }}">
  <title>System Syntax | @yield("title")</title>
</head>
<body>
  <div class="custom-cursor" id="customCursor"></div>
  <x-components::website.dashbord.nav />
  <main>
    <x-components::website.dashbord.sideBar />
    <div class="main-page">
      @yield("page")
    </div>
  </main>
  <script src="{{ asset('js/website/dashbord/public.js') }}"></script>
  <script src="{{ asset('js/website/dashbord/pages/main.js') }}"></script>
</body>
</html>