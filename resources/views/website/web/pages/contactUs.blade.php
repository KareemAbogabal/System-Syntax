<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <link rel="stylesheet" href="{{ asset('css/website/web/pages/contact-us.css') }}">
  <title>System Syntax | Contact us</title>
</head>
<body>
  <div class="custom-cursor" id="customCursor"></div>
  <div class="lux-notify-stack">
    @if (session()->has('notification'))
      @php
        $notification = session('notification');
      @endphp
      <x-components::notification type="{{ $notification['type'] }}" message="{{ $notification['message'] }}" />
    @endif
  </div>
  <x-components::website.web.form-requsts />
  <x-components::website.web.form-login />
  <x-components::website.web.nav 
    :ul="[
      ['name' => 'Home', 'url' => '#', 'active' => true],
      ['name' => 'Contact', 'url' => '#'],
    ]"
  />
  @include("website.web.sections.contact_us.section_1")
  @include("website.web.sections.contact_us.section_2")
  @include("website.web.sections.footer")
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="https://cdn.jsdelivr.net/particles.js/2.0.0/particles.min.js"></script>
  <script src="{{ asset('js/website/web/public.js') }}"></script>
  <script src="{{ asset('js/website/web/pages/contact-us.js') }}"></script>
</body>
</html>