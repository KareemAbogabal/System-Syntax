@extends("website.dashbord.main")

@section("title", "Dashbord")

@section("page")
  <section class="dashbord">
    <div class="detils-1">
      <div class="col">
        <h1>System Syntax</h1>
        <canvas id="project-details"></canvas>
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
    </div>
    <div class="detils-2">
      <div class="wallet-card">
        <div class="wallet-head">
          <div class="wallet-title">Bill & Payment</div>
          <div class="wallet-period">Weekly</div>
        </div>
        <div class="chart-box">
          <div class="chart-wrap">
            <canvas id="chart"></canvas>
            <div class="chart-center">
              <strong>$24,310</strong>
              <span>Total Amount</span>
            </div>
          </div>
        </div>
        <div class="legend">
          <div class="legend-item">
            <div class="left">
              <span class="dot" style="background:#49f2c2"></span>
              Gas Fees
            </div>
            <strong>40%</strong>
          </div>
          <div class="legend-item">
            <div class="left">
              <span class="dot" style="background:#2f9f7a"></span>
              Staking Rewards
            </div>
            <strong>35%</strong>
          </div>
        </div>
      </div>
      <div class="wallet-stack">
        <div class="wallet-card wallet-top">
          <div class="wallet-head">
            <div class="wallet-icon egp">
              <span>£</span>
            </div>
            <div class="wallet-meta">
              <strong>EGP</strong>
              <span>Total Paid</span>
            </div>
            <p class="wallet-label">Project Budget</p>
          </div>
          <div class="wallet-body">
            <h2>18,950</h2>
            <div class="wallet-side">
              <span>Balance</span>
              <strong>12,450</strong>
            </div>
          </div>
        </div>
        <div class="wallet-bridge">%</div>
        <div class="wallet-card wallet-bottom">
          <div class="wallet-head">
            <div class="wallet-icon disc">
              <span>%</span>
            </div>
            <div class="wallet-meta">
              <strong>DISCOUNT</strong>
              <span>Rate Applied</span>
            </div>
            <p class="wallet-label">Savings</p>
          </div>
          <div class="wallet-body">
            <h2>27%</h2>
            <div class="wallet-side">
              <span>After Discount</span>
              <strong>13,812</strong>
            </div>
          </div>
        </div>
      </div>
    </div>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/chart.js"></script>
  <script src="{{ asset("js/website/dashbord/pages/dashbord.js") }}"></script>
@endsection