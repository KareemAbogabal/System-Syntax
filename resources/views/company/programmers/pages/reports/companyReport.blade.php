@extends('company.programmers.main')

@section('title', 'Company Report')

@section('page')
  <div class="reports-page company-report-page" id="reportsRoot">
    <section class="hero">
      <div class="hero-top">
        <div>
          <p class="eyebrow">Company Report</p>
          <h1 class="title">Company Report</h1>
        </div>
        <div class="hero-actions">
          <button class="btn">Export Report</button>
        </div>
      </div>
      <div class="hero-metrics">
        <article class="metric">
          <span class="metric-label">Company Status</span>
          <strong class="metric-value">Stable</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Overall Health</span>
          <strong class="metric-value">92%</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Risk Level</span>
          <strong class="metric-value">Low</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Growth Trend</span>
          <strong class="metric-value">Positive</strong>
        </article>
      </div>
    </section>
    <section class="charts-grid">
      <article class="chart-card card-inner">
        <div class="section-head">
          <h2>Company Trend</h2>
          <span>Revenue vs expenses</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyTrendChart"></canvas>
        </div>
      </article>
      <article class="chart-card card-inner">
        <div class="section-head">
          <h2>Internal Distribution</h2>
          <span>Employees, branches, customers</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyDistributionChart"></canvas>
        </div>
      </article>
      <article class="chart-card card-inner card-full-row">
        <div class="section-head">
          <h2>Financial Balance</h2>
          <span>Current period</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyBalanceChart"></canvas>
        </div>
      </article>
    </section>
    <section class="dashboard-grid">
      <article class="card-inner summary-card">
        <div class="section-head">
          <h2>Company Snapshot</h2>
          <span>Overview</span>
        </div>
        <div class="summary-list">
          <div class="summary-row">
            <span>Total Employees</span>
            <strong>128</strong>
          </div>
          <div class="summary-row">
            <span>Total Branches</span>
            <strong>12</strong>
          </div>
          <div class="summary-row">
            <span>Total Customers</span>
            <strong>1,840</strong>
          </div>
          <div class="summary-row">
            <span>Financial Activity</span>
            <strong>Active</strong>
          </div>
          <div class="summary-row">
            <span>Financial Activity</span>
            <strong>Active</strong>
          </div>
          <div class="summary-row">
            <span>Financial Activity</span>
            <strong>Active</strong>
          </div>
        </div>
      </article>
      <article class="card-inner summary-card">
        <div class="section-head">
          <h2>Operations</h2>
          <span>Internal flow</span>
        </div>
        <div class="summary-list">
          <div class="summary-row">
            <span>Workload</span>
            <strong>Balanced</strong>
          </div>
          <div class="summary-row">
            <span>Pending Tasks</span>
            <strong>7</strong>
          </div>
          <div class="summary-row">
            <span>Completed Today</span>
            <strong>34</strong>
          </div>
          <div class="summary-row">
            <span>Communication</span>
            <strong>Healthy</strong>
          </div>
        </div>
      </article>
      <article class="card-inner summary-card">
        <div class="section-head">
          <h2>Financial Summary</h2>
          <span>Cash flow</span>
        </div>
        <div class="summary-list">
          <div class="summary-row">
            <span>Income</span>
            <strong>+ 24.6K</strong>
          </div>
          <div class="summary-row">
            <span>Expenses</span>
            <strong>- 8.9K</strong>
          </div>
          <div class="summary-row">
            <span>Net Result</span>
            <strong>+ 15.7K</strong>
          </div>
          <div class="summary-row">
            <span>Trend</span>
            <strong>Upward</strong>
          </div>
        </div>
      </article>
      <article class="card-inner summary-card">
        <div class="section-head">
          <h2>Quality Signals</h2>
          <span>Risk & control</span>
        </div>
        <div class="summary-list">
          <div class="summary-row">
            <span>Access Control</span>
            <strong>Secure</strong>
          </div>
          <div class="summary-row">
            <span>Critical Issues</span>
            <strong>0</strong>
          </div>
          <div class="summary-row">
            <span>Warnings</span>
            <strong>2</strong>
          </div>
          <div class="summary-row">
            <span>Audit Readiness</span>
            <strong>Ready</strong>
          </div>
        </div>
      </article>
    </section>
    <section class="bottom-grid">
      <article class="card-inner wide-card">
        <div class="section-head">
          <h2>Executive Notes</h2>
          <span>Short conclusion</span>
        </div>
        <div class="notes-box">
          <p>
            The company is operating in a stable state with healthy internal activity, controlled financial movement,
            and low operational risk. Employee, customer, and branch details are available in their dedicated reports,
            while this page focuses on the company-wide picture only.
          </p>
        </div>
      </article>
      <article class="card-inner wide-card">
        <div class="section-head">
          <h2>Recommended Actions</h2>
          <span>Next steps</span>
        </div>
        <div class="action-list">
          <div class="action-item">
            <strong>Monitor financial flow</strong>
            <span>Keep tracking income versus expenses weekly.</span>
          </div>
          <div class="action-item">
            <strong>Review warnings</strong>
            <span>Resolve the two minor alerts before they grow.</span>
          </div>
          <div class="action-item">
            <strong>Maintain branch balance</strong>
            <span>Compare branch activity to keep operations even.</span>
          </div>
        </div>
      </article>
    </section>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/reports/company-report.js') }}"></script>
@endsection
