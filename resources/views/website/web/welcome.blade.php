<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <link rel="stylesheet" href="{{ asset('css/website/web/pages/app.css') }}">
  <title>System Syntax</title>
</head>
<body>
  <div class="custom-cursor" id="customCursor"></div>
  <x-components::systemSyntaxAnimation />
  <x-components::website.web.form-requsts />
  <x-components::website.web.form-login />
  <x-components::website.web.nav 
    :ul="[
      ['name' => 'Home', 'url' => '#', 'active' => true],
      ['name' => 'About Us', 'url' => '#'],
      ['name' => 'Creativity', 'url' => '#'],
      ['name' => 'Services', 'url' => '#'],
    ]"
  />
  @include("website.web.sections.welcome.section_1")
  @include("website.web.sections.welcome.section_2")
  @include("website.web.sections.welcome.section_3")
  @include("website.web.sections.welcome.section_4")
  @include("website.web.sections.welcome.section_5")
  @include("website.web.sections.welcome.section_6")
  @include("website.web.sections.footer")
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="{{ asset('js/animationLogo.js') }}"></script>
  <script src="{{ asset('js/website/web/public.js') }}"></script>
  <script src="{{ asset('js/website/web/pages/app.js') }}"></script>
</body>
</html>