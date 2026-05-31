@extends('company.programmers.main')

@section('title', 'Recovery Log')

@section('page')
  <div class="recovery-log-page">
    <x-components::company.fillterBar :pills="['All', '3 times', 'reset']" />
    <div class="main-table">
      <h1>Recovery Log</h1>
      <x-components::table :header="['Name', 'Process Name', 'Reset Count', 'Status', 'Date', 'Details']">
        <div class="row" data-status="reset" data-tier="3 times" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=32" alt="No Img" loading="lazy">
              Nada Hassan
            </p>
            <p>Client Portal</p>
            <p>4 times</p>
            <p data-state="reset">reset</p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Reset Activity Details</strong>
                <span class="tag">Security Log</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#RST-2048</strong></div>
                <div><span>Device</span><strong>iPhone 15 Pro</strong></div>
                <div><span>Location</span><strong>Damietta, EG</strong></div>
                <div><span>IP Address</span><strong>197.45.18.221</strong></div>
                <div><span>Browser</span><strong>Safari 17</strong></div>
                <div><span>Reset Count</span><strong>4 times</strong></div>
                <div><span>Last Attempt</span><strong>11 Apr 2026 - 08:42 PM</strong></div>
                <div><span>Reason</span><strong>Forgot password after session timeout</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Damietta%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Monitoring" data-tier="3 times" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=12" alt="No Img" loading="lazy">
              Ahmed Samir
            </p>
            <p>Ecommerce Dashboard</p>
            <p>2 times</p>
            <p data-state="finished">safe</p>
            <p>09 Apr 2026</p>
            <button type="button" class="expand-btn">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Reset Activity Details</strong>
                <span class="tag">Monitoring</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#RST-1181</strong></div>
                <div><span>Device</span><strong>Windows PC</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP Address</span><strong>102.54.88.100</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Reset Count</span><strong>2 times</strong></div>
                <div><span>Last Attempt</span><strong>09 Apr 2026 - 01:14 PM</strong></div>
                <div><span>Reason</span><strong>Password expired</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="reset" data-tier="Blocked" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=54" alt="No Img" loading="lazy">
              Mahmoud Adel
            </p>
            <p>Admin System</p>
            <p>9 times</p>
            <p data-state="rejected">blocked</p>
            <p>06 Apr 2026</p>
            <button type="button" class="expand-btn">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Reset Activity Details</strong>
                <span class="tag">Blocked</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#RST-9910</strong></div>
                <div><span>Device</span><strong>Linux Machine</strong></div>
                <div><span>Location</span><strong>Alexandria, EG</strong></div>
                <div><span>IP Address</span><strong>81.201.33.21</strong></div>
                <div><span>Browser</span><strong>Firefox 145</strong></div>
                <div><span>Reset Count</span><strong>9 times</strong></div>
                <div><span>Last Attempt</span><strong>06 Apr 2026 - 03:22 AM</strong></div>
                <div><span>Reason</span><strong>Repeated suspicious requests</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Alexandria%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block">unblock</button>
              </div>
            </div>
          </div>
        </div>
      </x-components::table>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/recoveryLog.js') }}"></script>
@endsection