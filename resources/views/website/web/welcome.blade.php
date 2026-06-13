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
      ['name' => 'About Us', 'url' => '#'],
      ['name' => 'Creativity', 'url' => '#'],
      ['name' => 'Services', 'url' => '#'],
    ]"
  />
  <div id="luxContextMenu" class="lux-context-menu">
    <div class="lux-context-header">
      <span>System Syntax</span>
      <small>Private Access</small>
    </div>
    <button class="lux-item" data-action="home">Home</button>
    <button class="lux-item" data-action="services">Services</button>
    <button class="lux-item" data-action="request">Request Project</button>
    <button class="lux-item" data-action="login">Client Access</button>
    <button class="lux-item" data-action="translate">Translate Page</button>
    <button class="lux-item" data-action="print">Print</button>
    <button class="lux-item" data-action="copy-link">Copy Link</button>
    <button class="lux-item" data-action="save">Save As</button>
  </div>
  @include("website.web.sections.welcome.section_1")
  @include("website.web.sections.welcome.section_2")
  @include("website.web.sections.welcome.section_3")
  @include("website.web.sections.welcome.section_4")
  @include("website.web.sections.welcome.section_5")
  @include("website.web.sections.welcome.section_6")
  @include("website.web.sections.footer")
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset('js/animationLogo.js') }}"></script>
  <script src="{{ asset('js/website/web/public.js') }}"></script>
  <script src="{{ asset('js/website/web/pages/app.js') }}"></script>
</body>
</html>