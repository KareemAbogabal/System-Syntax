@extends('company.programmers.main')

@section('title', 'Authentication')

@section('page')
  <div class="authentication-page">
    <div class="hero">
      <div class="hero-top">
        <div class="info">
          <h1 class="title">Authentication</h1>
          <p class="subtitle">This page aims to identify new employees by allowing them to access the system after their fingerprints have been taken.</p>
        </div>
        <form action="" method="post">
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
        </form>
      </div>
    </div>
    <div class="auth-card dashboard-card">
      <div class="auth-card-head">
        <div class="auth-icon">
          <svg viewBox="0 0 24 24" fill="none">
            <path d="M12 2a5 5 0 0 0-5 5v3H6a2 2 0 0 0-2 2v8a2 2 0 0 0 2 2h12a2 2 0 0 0 2-2v-8a2 2 0 0 0-2-2h-1V7a5 5 0 0 0-5-5Z" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            <path d="M9 12h6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          </svg>
        </div>
        <div class="auth-head-copy">
          <span class="auth-kicker">Authentication</span>
          <h1 class="auth-title">Secure Access Setup</h1>
          <p class="auth-subtitle">
            Generate a strong password automatically, then reset it anytime with one click.
          </p>
        </div>
      </div>
      <form class="auth-form" action="" method="post" autocomplete="off">
        <div class="row">
          <div class="perant-input">
            <label for="password-one" data-no-active>Generated Password</label>
            <input type="text" id="password-one" name="password_one" readonly>
          </div>
          <div class="perant-input">
            <label for="password-two" data-no-active>Confirm Password</label>
            <input type="text" id="password-two" name="password_two" readonly>
          </div>
        </div>
        <div class="password-rules">
          <div class="rule" data-rule="length">8+ characters</div>
          <div class="rule" data-rule="upper">Uppercase</div>
          <div class="rule" data-rule="lower">Lowercase</div>
          <div class="rule" data-rule="number">Number</div>
          <div class="rule" data-rule="symbol">Symbol</div>
        </div>
        <button type="button" class="btn-send" id="resetPasswordBtn">
          Reset
        </button>
      </form>
    </div>
    <div class="main-table">
      <h1>Site visits</h1>
      <x-components::table :header="['Name', 'Device', 'Status', 'Date', 'Details']">
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">Omar El-Sherif</p>
            <p class="search">laptop</p>
            <p data-state="request">request</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Mac Address</span><strong>00:1A:2B:3C:4D:5E</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div><span>Screen length</span><strong>17.4 CM</strong></div>
                <div><span>Screen display</span><strong>25.4 CM</strong></div>
                <div><span>mouse movement</span><strong>natural</strong></div>
                <div><span>Serial number</span><strong>AB34534-AC23405-B23933-C344444</strong></div>
                <div><span>Screen resolution</span><strong>1080p</strong></div>
                <div><span>Number of processor cores</span><strong>Multi-core Processor</strong></div>
                <div><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
      </x-components::table>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/authentication.js') }}"></script>
@endsection