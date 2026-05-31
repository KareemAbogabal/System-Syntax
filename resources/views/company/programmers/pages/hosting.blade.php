@extends('company.programmers.main')

@section('title', 'Hosting')

@section('page')
  <x-components::company.popupShow dataFollowButton="show-hosting-data">
    <div class="card-show hosting-detail-card">
      <div class="warnings-detail-head">
        <div class="warnings-detail-copy">
          <span class="warnings-detail-kicker" id="hostingViewBadge">Hosting Alert</span>
          <h2 id="hostingViewTitle">Select a hosting record</h2>
          <p id="hostingViewSub">
            Press “View details” on any hosting card to inspect the record here.
          </p>
        </div>
        <span class="warnings-detail-badge" id="hostingViewStatus">No status</span>
      </div>
      <div class="warnings-detail-topline">
        <div class="topline-box">
          <span>Site</span>
          <strong id="hostingViewSite">—</strong>
        </div>
        <div class="topline-box">
          <span>Client</span>
          <strong id="hostingViewClientLink"></strong>
        </div>
        <div class="topline-box">
          <span>Renewal date</span>
          <strong id="hostingViewRenewal">—</strong>
        </div>
      </div>
      <div class="warnings-detail-grid">
        <div class="warnings-detail-box">
          <span>Remaining time</span>
          <strong id="hostingViewRemaining">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Status</span>
          <strong id="hostingViewStatusText">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Type</span>
          <strong id="hostingViewType">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Days left</span>
          <strong id="hostingViewDays">—</strong>
        </div>
      </div>
      <div class="warnings-detail-body">
        <div class="warnings-detail-section-title">Description</div>
        <p id="hostingViewDescription">
          The selected hosting record will appear here with renewal information, client data, and status details.
        </p>
      </div>
      <div class="warnings-detail-stats">
        <div class="warnings-stat">
          <span>Package</span>
          <strong id="hostingViewPackage">—</strong>
        </div>
        <div class="warnings-stat">
          <span>Project</span>
          <strong id="hostingViewProject">—</strong>
        </div>
        <div class="warnings-stat">
          <span>Alert ID</span>
          <strong id="hostingViewId">—</strong>
        </div>
      </div>
      <div class="warnings-detail-footer">
        <div class="warnings-detail-note">
          Hosting review
        </div>
        <div class="warnings-detail-actions">
          <button type="button" class="warnings-mini-btn">Renew now</button>
          <button type="button" class="warnings-mini-btn">Send notice</button>
          <button type="button" class="warnings-mini-btn danger">Suspend</button>
        </div>
      </div>
    </div>
  </x-components::company.popupShow>
  <div class="hosting-page">
    <x-components::company.fillterBar :pills="['All']" />
    <div class="hosting-page__grid">
      <section data-status class="hosting-page__card card-inner hosting-page__card--warning">
        <div class="hosting-page__glow"></div>
        <div class="hosting-page__header">
          <div class="hosting-page__badge">Hosting Alert</div>
          <div class="hosting-page__title-wrap">
            <h1 class="search">Your client site needs renewal</h1>
            <p>Renew before expiration to keep the website online and secure.</p>
          </div>
        </div>
        <div class="hosting-page__body">
          <div class="hosting-page__stats">
            <div class="stat">
              <span class="label">Expiration date</span>
              <div class="value">31 May 2026</div>
            </div>
            <div class="stat">
              <span class="label">Current status</span>
              <div class="value">Renew soon</div>
            </div>
            <div class="stat">
              <span class="label">Remaining time</span>
              <div class="value">3 days</div>
            </div>
          </div>
          <div class="hosting-page__meta">
            <div class="hosting-page__meta-item">
              <span>Client</span>
              <strong>Ahmed Abogabal</strong>
            </div>
            <div class="hosting-page__meta-item">
              <span>Project</span>
              <strong>development</strong>
            </div>
          </div>
        </div>
        <div class="hosting-page__footer">
          <button class="hosting-page__button hosting-page__button--primary js-hosting-details button-form" type="button" data-id="1" data-icon="Hosting Alert" data-status-badge="Renew soon" data-type="Hosting Alert" data-title="Your client site needs renewal" data-site="development" data-client="Ahmed Abogabal" data-client-url="#" data-renewal-date="31 May 2026" data-remaining-time="3 days" data-status-text="Renew soon" data-description="Renew before expiration to keep the website online and secure." data-package="Premium Hosting" data-project="development" data-days="3" data-follow="show-hosting-data">View details</button>
          <button class="hosting-page__button hosting-page__button--secondary">Send notice</button>
        </div>
      </section>
      <section data-status class="hosting-page__card card-inner hosting-page__card--neutral">
        <div class="hosting-page__glow"></div>
        <div class="hosting-page__header">
          <div class="hosting-page__badge">Client Website</div>
          <div class="hosting-page__title-wrap">
            <h1 class="search">Corporate site overview</h1>
            <p>Another hosting record with the same premium structure.</p>
          </div>
        </div>
        <div class="hosting-page__body">
          <div class="hosting-page__stats">
            <div class="stat">
              <span class="label">Expiration date</span>
              <div class="value">08 June 2026</div>
            </div>
            <div class="stat">
              <span class="label">Current status</span>
              <div class="value">Active</div>
            </div>
            <div class="stat">
              <span class="label">Remaining time</span>
              <div class="value">12 days</div>
            </div>
          </div>
          <div class="hosting-page__meta">
            <div class="hosting-page__meta-item">
              <span>Client</span>
              <strong>Mohamed Said</strong>
            </div>
            <div class="hosting-page__meta-item">
              <span>Project</span>
              <strong>company portal</strong>
            </div>
          </div>
        </div>
        <div class="hosting-page__footer">
          <button class="hosting-page__button hosting-page__button--primary js-hosting-details button-form" type="button" data-id="2" data-icon="Client Website" data-status-badge="Active" data-type="Client Website" data-title="Corporate site overview" data-site="company portal" data-client="Mohamed Said" data-client-url="#" data-renewal-date="08 June 2026" data-remaining-time="12 days" data-status-text="Active" data-description="Another hosting record with the same premium structure." data-package="Business Hosting" data-project="company portal" data-days="12" data-follow="show-hosting-data">View details</button>
          <button class="hosting-page__button hosting-page__button--secondary">Send notice</button>
        </div>
      </section>
      <section data-status class="hosting-page__card card-inner hosting-page__card--success">
        <div class="hosting-page__glow"></div>
        <div class="hosting-page__header">
          <div class="hosting-page__badge">Healthy Status</div>
          <div class="hosting-page__title-wrap">
            <h1 class="search">Hosting is still valid</h1>
            <p>This card keeps the same data structure but with a calm status style.</p>
          </div>
        </div>
        <div class="hosting-page__body">
          <div class="hosting-page__stats">
            <div class="stat">
              <span class="label">Expiration date</span>
              <div class="value">19 July 2026</div>
            </div>
            <div class="stat">
              <span class="label">Current status</span>
              <div class="value">Safe</div>
            </div>
            <div class="stat">
              <span class="label">Remaining time</span>
              <div class="value">44 days</div>
            </div>
          </div>
          <div class="hosting-page__meta">
            <div class="hosting-page__meta-item">
              <span>Client</span>
              <strong>Youssef Adel</strong>
            </div>
            <div class="hosting-page__meta-item">
              <span>Project</span>
              <strong>landing page</strong>
            </div>
          </div>
        </div>
        <div class="hosting-page__footer">
          <button class="hosting-page__button hosting-page__button--primary js-hosting-details button-form" type="button" data-id="3" data-icon="Client Website" data-status-badge="Safe" data-type="Client Website" data-title="Hosting is still valid" data-site="landing page" data-client="Youssef Adel" data-client-url="#" data-renewal-date="19 July 2026" data-remaining-time="44 days" data-status-text="Safe" data-description="This card keeps the same data structure but with a calm status style." data-package="Standard Hosting" data-project="landing page" data-days="44" data-follow="show-hosting-data">View details</button>
          <button class="hosting-page__button hosting-page__button--secondary">Send notice</button>
        </div>
      </section>
      <section data-status class="hosting-page__card card-inner hosting-page__card--warning">
        <div class="hosting-page__glow"></div>
        <div class="hosting-page__header">
          <div class="hosting-page__badge">Renewal Needed</div>
          <div class="hosting-page__title-wrap">
            <h1 class="search">Small business hosting</h1>
            <p>Another separated record for another client and project.</p>
          </div>
        </div>
        <div class="hosting-page__body">
          <div class="hosting-page__stats">
            <div class="stat">
              <span class="label">Expiration date</span>
              <div class="value">31 May 2026</div>
            </div>
            <div class="stat">
              <span class="label">Current status</span>
              <div class="value">Renew soon</div>
            </div>
            <div class="stat">
              <span class="label">Remaining time</span>
              <div class="value">3 days</div>
            </div>
          </div>
          <div class="hosting-page__meta">
            <div class="hosting-page__meta-item">
              <span>Client</span>
              <strong>Mona Salem</strong>
            </div>
            <div class="hosting-page__meta-item">
              <span>Project</span>
              <strong>ecommerce</strong>
            </div>
          </div>
        </div>
        <div class="hosting-page__footer">
          <button class="hosting-page__button hosting-page__button--primary js-hosting-details button-form" type="button" data-id="4" data-icon="Hosting Alert" data-status-badge="Renew soon" data-type="Hosting Alert" data-title="Small business hosting" data-site="ecommerce" data-client="Mona Salem" data-client-url="#" data-renewal-date="31 May 2026" data-remaining-time="3 days" data-status-text="Renew soon" data-description="Another separated record for another client and project." data-package="Premium Hosting" data-project="ecommerce" data-days="3" data-follow="show-hosting-data">View details</button>
          <button class="hosting-page__button hosting-page__button--secondary">Send notice</button>
        </div>
      </section>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/hosting.js') }}"></script>
@endsection