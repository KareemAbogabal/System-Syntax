@extends('company.programmers.main')

@section('title', 'Projects')

@section('page')
  <div class="project-details-page">
    <div class="project-hero card-inner">
      <div class="hero-left">
        <div class="project-badge">
          <span class="dot"></span>
          <span>Project Details</span>
        </div>
        <h1 class="project-title">Vox Design System</h1>
        <p class="project-subtitle">
          Complete overview of the project, team lead, schedule, status, and discount history.
        </p>
        <div class="hero-meta">
          <div class="meta-item">
            <span>Project Status</span>
            <strong class="status status--working">Working</strong>
          </div>
          <div class="meta-item">
            <span>Delivery State</span>
            <strong class="status status--delivered">Not Delivered</strong>
          </div>
        </div>
      </div>
      <div class="hero-right">
        <div class="hero-card">
          <span>Progress</span>
          <strong>68%</strong>
          <div class="progress-bar">
            <div class="progress-fill" style="width: 68%"></div>
          </div>
        </div>
        <div class="hero-card">
          <span>Update hosting</span>
          <strong>24 / 6 / 2029</strong>
        </div>
        <div class="hero-card">
          <span>Budget</span>
          <strong>$22,200</strong>
        </div>
      </div>
    </div>
    <div class="project-details-grid">
      <section class="detail-card card-inner">
        <div class="card-head">
          <h3>Project Information</h3>
          <span>Main data</span>
        </div>
        <div class="info-list">
          <div class="info-row">
            <span class="label">Project Name</span>
            <strong class="value">Vox</strong>
          </div>
          <div class="info-row">
            <span class="label">Team Leader</span>
            <strong class="value">
              <a href="/company/user-details" class="leader-link">
                Ahmed Mohamed
              </a>
            </strong>
          </div>
          <div class="info-row">
            <span class="label">Start Date</span>
            <strong class="value">01 Feb, 2025</strong>
          </div>
          <div class="info-row">
            <span class="label">Delivery Date</span>
            <strong class="value">12 Feb, 2025</strong>
          </div>
          <div class="info-row">
            <span class="label">Project Status</span>
            <strong class="value">
              <span class="status-pill status-pill--working">Working On It</span>
            </strong>
          </div>
          <div class="info-row">
            <span class="label">Delivery State</span>
            <strong class="value">
              <span class="status-pill status-pill--pending">Pending</span>
            </strong>
          </div>
        </div>
      </section>
      <section class="detail-card card-inner">
        <div class="card-head">
          <h3>Discount Details</h3>
          <span>Special offer</span>
        </div>
        <div class="discount-box">
          <div class="discount-top">
            <div class="discount-rate">
              <span>Discount</span>
              <strong>15%</strong>
            </div>
            <div class="discount-code">
              <span>Code</span>
              <strong>VOX-15-ALPHA</strong>
            </div>
          </div>
          <div class="discount-reason">
            <span>Reason for Discount</span>
            <p>
              The client received a discount because the project was referred by a trusted partner,
              and the price was adjusted as a loyalty incentive for a long-term collaboration.
            </p>
          </div>
          <div class="discount-source">
            <div class="source-avatar">
              <img src="https://i.pravatar.cc/90?img=22" alt="Discount source person" loading="lazy">
            </div>
            <div class="source-info">
              <span>Code brought by</span>
              <strong>Omar El-Sayed</strong>
              <p>He delivered the discount code and confirmed the approval source.</p>
            </div>
          </div>
        </div>
      </section>
      <section class="detail-card card-inner full-width">
        <div class="card-head">
          <h3>Team Members</h3>
          <span>Assigned users</span>
        </div>
        <div class="members-grid">
          <a href="/company/user-details" class="member-card">
            <img src="https://i.pravatar.cc/120?img=12" alt="Member 1" loading="lazy">
            <strong>Ahmed</strong>
            <span>UI Designer</span>
          </a>
          <a href="/company/user-details" class="member-card">
            <img src="https://i.pravatar.cc/120?img=18" alt="Member 2" loading="lazy">
            <strong>Sara</strong>
            <span>Frontend Dev</span>
          </a>
          <a href="/company/user-details" class="member-card">
            <img src="https://i.pravatar.cc/120?img=28" alt="Member 3" loading="lazy">
            <strong>Hassan</strong>
            <span>Backend Dev</span>
          </a>
          <a href="/company/user-details" class="member-card">
            <img src="https://i.pravatar.cc/120?img=32" alt="Member 4" loading="lazy">
            <strong>Mona</strong>
            <span>Project Coordinator</span>
          </a>
        </div>
      </section>
      <section class="detail-card card-inner">
        <div class="card-head">
          <h3>Project Notes</h3>
          <span>Summary</span>
        </div>
        <div class="notes-box">
          <p>
            This project is currently active. The team is working on final design refinements,
            implementation review, and delivery preparation.
          </p>
          <div class="note-item">
            <span class="note-dot note-dot--success"></span>
            <p>Design phase completed.</p>
          </div>
          <div class="note-item">
            <span class="note-dot note-dot--warning"></span>
            <p>Final review still in progress.</p>
          </div>
          <div class="note-item">
            <span class="note-dot note-dot--danger"></span>
            <p>No blocking issues reported yet.</p>
          </div>
        </div>
      </section>
      <section class="detail-card card-inner">
        <div class="card-head">
          <h3>Quick Actions</h3>
          <span>Control panel</span>
        </div>
        <div class="actions-stack">
          <button class="state-btn" type="button">
            <svg viewBox="0 0 24 24" fill="none" width="22" height="22">
              <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
              <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
            </svg>
            Archive
          </button>
          <button class="state-btn block">
            <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
              <g transform="rotate(-90 10 12)">
                <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
              </g>
            </svg>
            Upload
          </button>
          <button class="state-btn access">
            <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
              <g transform="rotate(-90 10 12)">
                <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
              </g>
            </svg>
            Publich
          </button>
        </div>
      </section>
    </div>
  </div>
@endsection