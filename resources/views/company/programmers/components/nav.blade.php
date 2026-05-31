<nav>
  <a href="/company/dashbord" class="brand-link">
    <img src="{{ asset('images/content/logo/System-Syntax.png') }}" alt="System Syntax Logo" loading="lazy"/>
  </a>
  <form action="" method="post" class="nav-search">
    @csrf
    <div class="input-box">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
        <path fill="var(--bg-color)" d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
      </svg>
      <input type="text" placeholder="Search for any thing..." />
      <button type="submit" aria-label="Search">
        <svg width="28" height="28" viewBox="10 5 28 28" fill="var(--bg-color)">
          <g>
            <path d="M24 11.5 C24.5 11.5 24.9 11.8 25.2 12.2 L31.4 22.3 C31.9 23.1 31.3 24 30.4 24 H17.6 C16.7 24 16.1 23.1 16.6 22.3 L22.8 12.2 C23.1 11.8 23.5 11.5 24 11.5Z" fill="var(--bg-color)"/>
            <rect x="18" y="25" width="12" height="4" rx="2" fill="var(--bg-color)"/>
          </g>
        </svg>
      </button>
    </div>
  </form>
  <div class="account">
    <div class="dropdown-wrap">
      <div class="row">
        <button class="icon-button btn-screen" type="button" id="btnScreen" aria-label="Toggle fullscreen">
          <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
            <path d="M8 3H5a2 2 0 0 0-2 2v3" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M16 3h3a2 2 0 0 1 2 2v3" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M8 21H5a2 2 0 0 1-2-2v-3" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
            <path d="M16 21h3a2 2 0 0 0 2-2v-3" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </button>
        <button class="icon-button" type="button" id="notificationBtn" aria-label="Notifications">
          <span class="badge">3</span>
          <svg width="24" height="24" viewBox="1 -1 20 20" fill="none">
            <path d="M12 3C9.79 3 8 4.79 8 7V9.5C8 10.33 7.68 11.12 7.12 11.71L6 13H18L16.88 11.71C16.32 11.12 16 10.33 16 9.5V7C16 4.79 14.21 3 12 3Z" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
            <circle cx="12" cy="15.8" r="1" fill="var(--bg-color)"/>
          </svg>
        </button>
      </div>
      <div class="dropdown-panel notification-panel" id="notificationMenu">
        <div class="dropdown-panel__header">
          <h4>Notifications</h4>
          <span>Latest updates</span>
        </div>
        <div class="notification-list">
          <div class="notification-item">
            <span class="notification-dot"></span>
            <div>
              <strong>New employee added</strong>
              <p>Ahmed joined the design team.</p>
            </div>
          </div>
          <div class="notification-item">
            <span class="notification-dot"></span>
            <div>
              <strong>Project updated</strong>
              <p>Dashboard UI was successfully deployed.</p>
            </div>
          </div>
          <div class="notification-item">
            <span class="notification-dot"></span>
            <div>
              <strong>Security alert</strong>
              <p>New login detected from a trusted device.</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <div class="dropdown-wrap">
      <button class="account-trigger" type="button" id="accountBtn" aria-label="Account menu">
        <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Current account" />
        <div class="account-trigger__meta">
          <strong id="currentAccountName">Ahmed</strong>
          <small id="currentAccountRole">admin</small>
        </div>
        <span class="chev">
          <svg width="12" height="12" viewBox="0 0 10 6">
            <path d="M1 1L5 5L9 1" stroke="currentColor" stroke-width="1.5" fill="none" stroke-linecap="round"/>
          </svg>
        </span>
      </button>
      <div class="dropdown-panel account-panel" id="accountMenu">
        <div class="dropdown-panel__header">
          <h4>Switch Account</h4>
          <span>Choose another profile</span>
        </div>
        <div class="account-list">
          <button class="account-item active" type="button" data-name="Ahmed" data-role="Admin" data-avatar="https://i.pravatar.cc/100?img=12">
            <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Ahmed" />
            <div>
              <strong>Ahmed</strong>
              <p>Admin account</p>
            </div>
          </button>
          <button class="account-item" type="button" data-name="Mariam" data-role="Manager" data-avatar="https://i.pravatar.cc/100?img=47">
            <img src="https://i.pravatar.cc/100?img=47" loading="lazy" alt="Mariam" />
            <div>
              <strong>Mariam</strong>
              <p>Project manager</p>
            </div>
          </button>
          <button class="account-item" type="button" data-name="Omar" data-role="Support" data-avatar="https://i.pravatar.cc/100?img=32">
            <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Omar" />
            <div>
              <strong>Omar</strong>
              <p>Support account</p>
            </div>
          </button>
        </div>
      </div>
    </div>
  </div>
</nav>