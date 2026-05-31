<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <link rel="stylesheet" href="{{ asset('css/company/programmers/main.css') }}">
  <title>System Syntax | @yield("title")</title>
</head>
<body>
  <div class="lux-notify-stack">
{{-- 
    <div class="lux-notify lux-notify--onyx lux-notify--error">
      <button class="lux-notify__close" type="button" aria-label="Close notification">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M7 7L17 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
          <path d="M17 7L7 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="lux-notify__accent"></div>
      <div class="lux-notify__icon">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M12 7v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 16.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="lux-notify__body">
        <div class="lux-notify__top">
          <h4>Critical Error</h4>
          <span>System</span>
        </div>
        <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Expedita quas cupiditate corrupti ratione perspiciatis illo cum nemo quod obcaecati inventore itaque vel doloremque delectus odio, rerum voluptatum totam amet quidem.</p>
      </div>
      <div class="lux-notify__sheen"></div>
    </div>

    <div class="lux-notify lux-notify--crest lux-notify--warning">
      <button class="lux-notify__close" type="button" aria-label="Close notification">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M7 7L17 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
          <path d="M17 7L7 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="lux-notify__accent"></div>
      <div class="lux-notify__icon">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 3L22 20H2L12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
          <path d="M12 9v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 16.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="lux-notify__body">
        <div class="lux-notify__top">
          <h4>Attention Required</h4>
          <span>Security</span>
        </div>
        <p>بعض الحقول تحتاج مراجعة قبل المتابعة.</p>
      </div>
      <div class="lux-notify__sheen"></div>
    </div>

    <div class="lux-notify lux-notify--prism lux-notify--success">
      <button class="lux-notify__close" type="button" aria-label="Close notification">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M7 7L17 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
          <path d="M17 7L7 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="lux-notify__accent"></div>
      <div class="lux-notify__icon">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M7.5 12.5L10.5 15.5L16.5 9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </div>
      <div class="lux-notify__body">
        <div class="lux-notify__top">
          <h4>Verified</h4>
          <span>Success</span>
        </div>
        <p>تم حفظ التغييرات بنجاح وبشكل آمن.</p>
      </div>
      <div class="lux-notify__sheen"></div>
    </div>

    <div class="lux-notify lux-notify--seal lux-notify--info">
      <button class="lux-notify__close" type="button" aria-label="Close notification">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M7 7L17 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
          <path d="M17 7L7 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="lux-notify__accent"></div>
      <div class="lux-notify__icon">
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M12 10.5V17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 7.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      </div>
      <div class="lux-notify__body">
        <div class="lux-notify__top">
          <h4>Premium Notice</h4>
          <span>Info</span>
        </div>
        <p>يوجد تحديث جديد في اللوحة الرئيسية.</p>
      </div>
      <div class="lux-notify__sheen"></div>
    </div> --}}

  </div>
  <x-components::company.programmers.sideBar />
  <main>
    <x-components::company.programmers.nav />
    <div class="main-page">
      @yield("page")
    </div>
  </main>
  <script src="{{ asset('js/company/public.js') }}"></script>
  <script src="{{ asset('js/company/programmers/main.js') }}"></script>
</body>
</html>