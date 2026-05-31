<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset('images/content/logo/logo-company.png') }}">
  <link rel="stylesheet" href="{{ asset('css/company/calls/app.css') }}">
  <title>System Syntax | Calls</title>
</head>
<body>
  <div class="container-fluid company-calls-room">
    <header class="info">
      <div class="room-info">
        <span class="room-id" data-room-id="{{ $roomId }}">
          Room number: {{ $roomId }}
        </span>
        <button type="button" class="copy-link" id="copy-link">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M16 1H6a2 2 0 0 0-2 2v12h2V3h10V1zm3 4H10a2 2 0 0 0-2 2v14a2 2 0 0 0 2 2h9a2 2 0 0 0 2-2V7a2 2 0 0 0-2-2zm0 16H10V7h9v14z"/>
          </svg>
          <span>Copy link</span>
        </button>
      </div>
      <button type="button" class="zoom-in-or-out control-btn" id="zoom-in-or-out" aria-label="Resize">
        <svg class="icon-expand" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M4 9V4h5v2H6v3H4zm10-5h6v6h-2V6h-4V4zM6 18h3v2H4v-5h2v3zm12-3h2v5h-5v-2h3v-3z"/>
        </svg>
        <svg class="icon-shrink" viewBox="0 0 24 24" aria-hidden="true">
          <path d="M9 4v5H4V7h3V4h2zm6 0h2v3h3v2h-5V4zM7 17v3h3v2H4v-5h3zm10 0h3v5h-5v-2h2v-3z"/>
        </svg>
      </button>
    </header>
    <div class="video-container">
      <div class="video-wrapper my-video"></div>

      <div class="videos-them">
        <div class="video-wrapper he-video"></div>
      </div>
    </div>
    <div class="main-controls">
      <div class="list">
        <button type="button" id="startBtnVideoScreen">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M3 6h18a2 2 0 0 1 2 2v8a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm2 2v8h14V8H5zm4 10h6v2H9v-2z"/>
          </svg>
          <span>Record Video</span>
        </button>
        <button type="button" id="startBtnVoice">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 15a3 3 0 0 0 3-3V6a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.93V21h2v-2.07A7 7 0 0 0 19 12h-2z"/>
          </svg>
          <span>Record Voice</span>
        </button>
      </div>
      <div class="controls">
        <button type="button" class="control-btn" id="more" aria-label="More">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M4 6h16v2H4V6zm0 5h10v2H4v-2zm0 5h16v2H4v-2z"/>
          </svg>
        </button>
        <button type="button" class="control-btn" id="toggle-video" aria-label="Toggle video">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M4 6h11a2 2 0 0 1 2 2v2.2l3.4-2.2a1 1 0 0 1 1.6.8v7.4a1 1 0 0 1-1.6.8L17 15.8V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2zm0 2v10h11V8H4zm15.2 1.9-2.2 1.4v2.4l2.2 1.4V9.9z"/>
          </svg>
        </button>
        <button type="button" class="control-btn" id="toggle-mic" aria-label="Toggle mic">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M12 15a3 3 0 0 0 3-3V6a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.93V21h2v-2.07A7 7 0 0 0 19 12h-2z"/>
          </svg>
        </button>
        <button type="button" class="control-btn" id="share-screen" aria-label="Share screen">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M3 5h18a2 2 0 0 1 2 2v10a2 2 0 0 1-2 2H3a2 2 0 0 1-2-2V7a2 2 0 0 1 2-2zm0 2v10h18V7H3zm7 11h4v2h-4v-2z"/>
          </svg>
        </button>
        <button type="button" class="control-btn end-call" id="end-call" aria-label="End call">
          <svg viewBox="0 0 24 24" aria-hidden="true">
            <path d="M21.5 15.5c-1.7 0-3.3-.3-4.8-.9-.5-.2-1.1-.1-1.5.2l-2.3 1.7c-2.3-1.2-4.3-3.2-5.5-5.5l1.7-2.3c.3-.4.4-1 .2-1.5-.6-1.5-.9-3.1-.9-4.8A1.5 1.5 0 0 0 7 1H3.5A1.5 1.5 0 0 0 2 2.5C2 13.3 10.7 22 21.5 22A1.5 1.5 0 0 0 23 20.5V17a1.5 1.5 0 0 0-1.5-1.5z"/>
          </svg>
        </button>
      </div>
    </div>
    <section class="words-apeech">
      <div class="words"></div>
      <button type="button" id="download">
        <span class="text">Download</span>
      </button>
    </section>
  </div>
  <script>
    window.APP_BASE_URL = "{{ url('/') }}";
  </script>
  <script src="https://unpkg.com/peerjs@1.4.7/dist/peerjs.min.js"></script>
  <script src="{{ asset('js/company/calls/app.js') }}"></script>
  <script src="{{ asset('js/company/calls/records.js') }}"></script>
</body>
</html>