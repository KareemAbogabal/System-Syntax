@extends("website.dashbord.main")

@section("title", "My Project")

@section("page")
  <section class="project">
    <div class="topbar">
      <div class="brand">
        <h1>My Project</h1>
        <p>A luxury project dashboard that presents identity, contract, performance, and operations in one place.</p>
      </div>
      <div class="badge"><span class="dot"></span> Live Project Overview</div>
    </div>
    <section class="hero">
      <article class="card project-card">
        <div class="project-head">
          <div class="project-title-wrap">
            <div class="project-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h11A2.5 2.5 0 0 1 20 7.5v9A2.5 2.5 0 0 1 17.5 19h-11A2.5 2.5 0 0 1 4 16.5v-9Z" />
                <path d="M7 9h10" />
                <path d="M7 12h6" />
                <path d="M7 15h8" />
              </svg>
            </div>
            <div class="project-meta">
              <h2>Orion Secure Suite</h2>
              <p class="desc">An elite enterprise platform built with precision, combining security, performance, and a refined client-facing presentation.</p>
              <div class="status-row">
                <span class="chip"><strong>Status:</strong> Active</span>
                <span class="chip"><strong>Project Type:</strong> Web Platform</span>
                <span class="chip"><strong>Last Update:</strong> 05 Apr 2026</span>
              </div>
            </div>
          </div>
          <div class="hero-actions">
            <a class="btn btn-primary" href="#download">
              <span>Download Project</span>
              <span aria-hidden="true">⬇</span>
            </a>
            <a class="btn btn-secondary" href="#contract">View Contract</a>
          </div>
        </div>
        <div class="stats-grid">
          <div class="mini-stat">
            <span>Contract Value</span>
            <strong>$18,500</strong>
            <small>Includes development, design, and testing</small>
          </div>
          <div class="mini-stat">
            <span>Completion Rate</span>
            <strong>87%</strong>
            <small>Daily executive progress tracking</small>
          </div>
          <div class="mini-stat">
            <span>Operation Count</span>
            <strong>42</strong>
            <small>Tasks, revisions, and deliveries</small>
          </div>
        </div>
      </article>
      <div class="side-panel">
        <article class="card contract-card" id="contract">
          <div class="section-title">
            <div>
              <h3>Project Contract</h3>
              <p>Compact legal and operational summary.</p>
            </div>
            <div class="badge" style="box-shadow:none;">Contract #PRJ-2048</div>
          </div>
          <div class="contract-grid">
            <div class="info-box">
              <span>Start Date</span>
              <strong>12 Feb 2026</strong>
            </div>
            <div class="info-box">
              <span>Delivery Date</span>
              <strong>30 May 2026</strong>
            </div>
            <div class="info-box">
              <span>Payment Model</span>
              <strong>Milestone Based</strong>
            </div>
            <div class="info-box">
              <span>Financial Status</span>
              <strong>70% Paid</strong>
            </div>
          </div>
        </article>
        <article class="card contract-card" id="download">
          <div class="section-title">
            <div>
              <h3>Project Files</h3>
              <p>Secure storage and download.</p>
            </div>
          </div>
          <div class="contract-grid">
            <div class="info-box">
              <span>Graphics</span>
              <strong>UI / UX Files</strong>
            </div>
            <div class="info-box">
              <span>Documents</span>
              <strong>Contract & Specs</strong>
            </div>
            <div class="info-box">
              <span>Version</span>
              <strong>v3.4.1</strong>
            </div>
            <div class="info-box">
              <span>Protection</span>
              <strong>Encrypted</strong>
            </div>
          </div>
        </article>
      </div>
    </section>
    <section class="card chart-wrap">
      <div class="section-title">
        <div>
          <h3>Project Performance Overview</h3>
          <p>Line-based project progress visualization with a luxury visual tone.</p>
        </div>
        <div class="badge" style="box-shadow:none;">Chart.js Line</div>
      </div>
      <div class="chart-box">
        <canvas id="projectChart"></canvas>
      </div>
    </section>
    <section class="card table-card">
      <div class="section-title">
        <div>
          <h3>Project Operations Log</h3>
          <p>Who worked on the project, what they did, and how much they received.</p>
        </div>
        <div class="badge" style="box-shadow:none;">Last 10 Activities</div>
      </div>
      <x-components::table :header="['Name', 'Role', 'Operation', 'Status', 'Date']">
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
      </x-components::table>
      <div class="footer-note">
        This layout is suitable for a luxury client dashboard and can later be connected directly to your database in Laravel or any other backend.
      </div>
    </section>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset("js/website/dashbord/pages/project.js") }}"></script>
@endsection