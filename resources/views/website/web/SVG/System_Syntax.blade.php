@php
  $uid = uniqid();
@endphp

<svg width="{{ $size }}" height="{{ $size }}" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
  <defs>
    <linearGradient id="top-{{ $uid }}">
      <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
      <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
    </linearGradient>
    <linearGradient id="left-{{ $uid }}">
      <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
      <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
    </linearGradient>
    <linearGradient id="right-{{ $uid }}">
      <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
      <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
    </linearGradient>
  </defs>
  <!-- top -->
  <polygon points="250,60 420,160 250,260 80,160" fill="url(#top-{{ $uid }})" transform="scale(0.92) translate(0,-20)" />
  <!-- left -->
  <polygon points="80,160 250,260 250,440 80,340" fill="url(#left-{{ $uid }})" transform="scale(0.92) translate(-20,10)" />
  <!-- right -->
  <polygon points="420,160 250,260 250,440 420,340" fill="url(#right-{{ $uid }})" transform="scale(0.92) translate(20,10)" />
</svg>