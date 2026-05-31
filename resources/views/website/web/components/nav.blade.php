<header>
  <nav>
    <a href="/" class="btn-logo">
      <img src="{{ asset("images/content/logo/System-Syntax.png") }}" alt="System Syntax Logo" loading="lazy" />
    </a>
    <ul>
      @foreach($ul as $item)
        <li>
          <a href="{{ $item['url'] }}" class="{{ $item['active'] ?? false ? 'active' : '' }}">
            {{ $item['name'] }}
          </a>
        </li>
      @endforeach
    </ul>
    <button class="btn-avatar">
      <img src="{{ asset("images/content/avatar/male.png") }}" alt="User Avatar" loading="lazy" />
    </button>
    {{-- <button class="animated-button login-btn">
      <span>Get started</span>
      <span></span>
    </button> --}}
  </nav>
  <div class="main-avatar">
    <div class="profile">
      <div class="avatar-wrap">
        <img class="avatar" src="{{ asset("images/content/avatar/male.png") }}" alt="Profile" loading="lazy"/>
        <span class="status"></span>
      </div>
      <div class="profile-info">
        <div class="profile-top">
          <div class="profile-name">Kareem abogabal</div>
          <svg class="chevron" viewBox="0 0 24 24" fill="none" aria-hidden="true">
            <path d="M6 9L12 15L18 9" stroke="var(--text-color)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
          </svg>
        </div>
        <div class="plan">Pro plan</div>
      </div>
    </div>
    <div class="divider"></div>
    <div class="menu">
      <a href="/dashbord" class="item">
        <div class="item-left">
          <div class="icon-box">
            <svg width="40" height="90%" viewBox="25 5 44 44">
              <rect x="8" y="8" width="18" height="18" rx="4" fill="var(--colorSVG2)"/>
              <rect x="30" y="8" width="18" height="18" rx="4" fill="var(--colorSVG1)"/>
              <rect x="8" y="30" width="18" height="18" rx="4" fill="var(--colorSVG1)"/>
              <rect x="30" y="30" width="18" height="18" rx="4" fill="var(--colorSVG2)"/>
            </svg>
          </div>
          <span class="label">Dashboard</span>
        </div>
      </a>
      <a href="/project" class="item">
        <div class="item-left">
          <div class="icon-box">
            <svg width="40" height="90%" viewBox="11 0 22 22">
              <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)" />
              <path d="M7 20h10" stroke="var(--colorSVG1)"/>
            </svg>
          </div>
          <span class="label">my project</span>
        </div>
      </a>
      <a href="/setting" class="item">
        <div class="item-left">
          <div class="icon-box">
            <svg width="40" height="40" viewBox="5 13 94 94" fill="none">
              <g fill="var(--colorSVG1)">
                <path d="M32 20c1.1 0 2 .9 2 2v2a15 15 0 0 1 4.2 1.6l1.4-1.4a2 2 0 0 1 2.8 0l2.5 2.5a2 2 0 0 1 0 2.8l-1.4 1.4a15 15 0 0 1 1.6 4.2h2a2 2 0 0 1 2 2v3.5a2 2 0 0 1-2 2h-2a15 15 0 0 1-1.6 4.2l1.4 1.4a2 2 0 0 1 0 2.8l-2.5 2.5a2 2 0 0 1-2.8 0l-1.4-1.4a15 15 0 0 1-4.2 1.6v2a2 2 0 0 1-2 2h-3.5a2 2 0 0 1-2-2v-2a15 15 0 0 1-4.2-1.6l-1.4 1.4a2 2 0 0 1-2.8 0l-2.5-2.5a2 2 0 0 1 0-2.8l1.4-1.4a15 15 0 0 1-1.6-4.2h-2a2 2 0 0 1-2-2v-3.5a2 2 0 0 1 2-2h2a15 15 0 0 1 1.6-4.2l-1.4-1.4a2 2 0 0 1 0-2.8l2.5-2.5a2 2 0 0 1 2.8 0l1.4 1.4a15 15 0 0 1 4.2-1.6v-2c0-1.1.9-2 2-2h3.5z"/>
              </g>
              <circle cx="30.5" cy="38.5" r="6" fill="var(--colorSVG2)"/>
            </svg>
          </div>
          <span class="label">Settings</span>
        </div>
      </a>
      <div class="divider"></div>
      <a href="#" class="item">
        <div class="item-left">
          <div class="icon-box">
            <svg viewBox="0 0 24 24" fill="none" width="22" height="22">
              <circle cx="12" cy="12" r="8.5" stroke="var(--colorSVG2)" stroke-width="1.8"/>
              <path d="M12 16.4V16.5" stroke="var(--colorSVG1)" stroke-width="2.4" stroke-linecap="round"/>
              <path d="M9.8 9.4C10.1 8.2 11 7.5 12.3 7.5C13.6 7.5 14.6 8.3 14.6 9.5C14.6 10.6 13.8 11.1 13.1 11.6C12.5 12 12 12.4 12 13.2V13.5" stroke="var(--colorSVG1)" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </div>
          <span class="label">Help</span>
        </div>
        <svg class="right-icon" viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M9 6L15 12L9 18" stroke="var(--colorSVG2)" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      </a>
      <a href="#" class="item">
        <div class="item-left">
          <div class="icon-box">
            <svg viewBox="0 0 24 24" fill="none" width="22" height="22">
              <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M14 8L18 12L14 16" stroke="var(--colorSVG1)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M18 12H10.5" stroke="var(--colorSVG1)" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </div>
          <span class="label">Log out</span>
        </div>
      </a>
    </div>
  </div>
</header>