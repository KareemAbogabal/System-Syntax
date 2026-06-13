@extends("website.dashbord.main")

@section("title", "Invoices")

@section("page")
  <div class="invoice">
    <div class="topbar">
      <div class="brand">
        <h1>Due Invoices</h1>
        <p>A luxury invoice page for uploading the contract and tracking project operations in one refined view.</p>
      </div>
      <div class="badge"><span class="dot"></span> Secure Billing Center</div>
    </div>
    <section class="card upload-card">
      <div class="upload-grid">
        <div class="upload-copy">
          <h2>Upload the contract and keep billing organized</h2>
          <p>
            This card is built for a premium client dashboard. It gives you a clean space to upload the contract,
            review the invoice status, and keep every financial action aligned with the project workflow.
          </p>
          <div class="meta-row">
            <span class="chip"><strong>Due:</strong> $4,200</span>
            <span class="chip"><strong>Status:</strong> Pending</span>
            <span class="chip"><strong>Next Check:</strong> 12 Apr 2026</span>
          </div>
        </div>
        <div class="dropzone">
          <div class="dropzone-inner">
            <div class="upload-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 4V15" />
                <path d="M8 11l4 4 4-4" />
                <path d="M5 20h14" />
              </svg>
            </div>
            <div>
              <h3>Download File</h3>
              <p>PDF</p>
            </div>
            <div class="btn-row">
              <a class="btn btn-primary" href="#">Download Invoice</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="card table-card">
      <div class="section-title">
        <div>
          <h3>Project Operations Log</h3>
          <p>Track who worked on the project, what was done, and how much was paid.</p>
        </div>
        <div class="badge" style="box-shadow:none;">Recent Activity</div>
      </div>
      <x-components::table :header="['Name', 'Role', 'Operation', 'Amount', 'Status', 'Date']">
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
      </x-components::table>
      <div class="footer-note">
        This page is intentionally simple and elegant, so it can fit directly into a luxury client dashboard without visual clutter.
      </div>
    </section>
    <section class="card satisfaction-card">
      <div class="satisfaction-head">
        <div>
          <span class="eyebrow">CLIENT EXPERIENCE</span>
          <h3>Service Satisfaction & Public Visibility</h3>
          <p>
            Your experience matters. This section allows you to evaluate the current workflow
            and confirm visibility preferences related to project presentation.
          </p>
        </div>
        <div class="live-status">
          <span class="pulse"></span>
          Secure Review Active
        </div>
      </div>
      <div class="satisfaction-body">
        <div class="rating-panel">
          <h4>Current Satisfaction Level</h4>
          <div class="luxury-rating">
            <button data-rate="1">01</button>
            <button data-rate="2">02</button>
            <button data-rate="3">03</button>
            <button data-rate="4">04</button>
            <button data-rate="5">05</button>
          </div>
          <div class="rating-output">
            <span class="rating-label">No selection</span>
            <strong class="rating-state">Waiting for feedback</strong>
          </div>
          <div class="main-check">
            <label class="checkBox">
              <input id="visibilityCheck" type="checkbox">
              <div class="transition"></div>
            </label>
            <label for="visibilityCheck">I acknowledge and approve the controlled public visibility policy</label>
          </div>
          <div class="approval-status">
            Visibility approval pending
          </div>
        </div>
        <div class="visibility-panel">
          <div class="notice-icon">
            <svg viewBox="0 0 64 64" width="64" height="64" fill="none" aria-hidden="true">
              <defs>
                <radialGradient id="faceGlow" cx="50%" cy="35%" r="70%">
                  <stop offset="0%" stop-color="#ffffff" stop-opacity="0.16"/>
                  <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.05"/>
                </radialGradient>
              </defs>
              <g class="face">
                <g class="head">
                  <!-- Face -->
                  <circle cx="32" cy="32" r="21" fill="url(#faceGlow)" stroke="rgba(255,255,255,0.18)" stroke-width="1.5"/>
                  <!-- Eye right -->
                  <circle cx="24" cy="27" r="2.1" fill="#f7f3ff"/>
                  <!-- Right eye (winks) -->
                  <g class="wink-eye">
                    <circle cx="40" cy="27" r="2.1" fill="#f7f3ff"/>
                  </g>
                  <!-- The smile -->
                  <path class="smile" d="M23 38c3.5 4.2 14.5 4.2 18 0" stroke="#f7f3ff" stroke-width="2.6" stroke-linecap="round" stroke-linejoin="round" fill="none" />
                </g>
              </g>
            </svg>
          </div>
          <div class="visibility-content">
            <h4>Public Visibility Notice</h4>
            <p>
              Approved project details, visual previews, operational milestones,
              and selected brand assets may appear within the public website portfolio
              as part of the official presentation experience.
            </p>
            <div class="discount-box">
              <span class="discount-label">Current Visibility Discount</span>

              <div class="discount-value">
                <span id="discountNumber">0</span>
                <small>%</small>
              </div>

              <p class="discount-note">
                Your public visibility approval increases the exclusive client discount level.
              </p>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="{{ asset("js/website/dashbord/pages/invoices.js") }}"></script>
@endsection