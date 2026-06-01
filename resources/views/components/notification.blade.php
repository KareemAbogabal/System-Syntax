@if ($type === 'info')
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
      <p>{{ $message }}</p>
    </div>
    <div class="lux-notify__sheen"></div>
  </div>
@endif

@if ($type === 'error')
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
      <p>{{ $message }}</p>
    </div>
    <div class="lux-notify__sheen"></div>
  </div>
@endif

@if ($type === 'warning')
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
      <p>{{ $message }}</p>
    </div>
    <div class="lux-notify__sheen"></div>
  </div>
@endif

@if ($type === 'success')
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
      <p>{{ $message }}</p>
    </div>
    <div class="lux-notify__sheen"></div>
  </div>
@endif