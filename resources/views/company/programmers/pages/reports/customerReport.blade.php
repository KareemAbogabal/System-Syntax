@extends('company.programmers.main')

@section('title', 'Customer Report')

@section('page')
  <div class="customer-report-page">
    <section class="hero">
      <div class="hero-top">
        <div>
          <p class="eyebrow">customer Operations</p>
          <h1 class="title">customer Report</h1>
          <p class="subtitle">
            A compact luxury dashboard for tracking customer performance, employee productivity, and yearly operational
            health.
          </p>
        </div>
        <div class="hero-actions">
          <button class="btn">Export Report</button>
        </div>
      </div>
      <div class="hero-metrics">
        <article class="metric">
          <span class="metric-label">Total Customers</span>
          <strong class="metric-value">24</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Active Customers</span>
          <strong class="metric-value">19</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Requested Customers</span>
          <strong class="metric-value">20,0000</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Blocked Customers</span>
          <strong class="metric-value">30</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Visited Customers</span>
          <strong class="metric-value">21,000</strong>
        </article>
      </div>
    </section>
    <section class="customer-preferences">
      <div class="card-preferences-sections">
        <div class="card card-inner">
          <div class="header">
            <h3>Customer Sections</h3>
          </div>
          <div class="list">
            <div class="item">
              <div class="head">
                <div class="left">
                  <div class="icon">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                      <rect x="3" y="3" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="7" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="11" width="10" height="1.5" rx="1" fill="#8f5bff" />
                    </svg>
                  </div>
                  <div class="text">
                    <h4>Homepage</h4>
                    <p>Last visit: Today</p>
                  </div>
                </div>
                <div class="right">
                  <strong>2m 18s</strong>
                  <div class="badge high">High</div>
                </div>
              </div>
              <div class="details">
                <div class="details__devices">
                  <h4 class="details__devices-title">Devices visiting this section</h4>
                  <div class="devices-list">
                    <div class="device" data-share="62">
                      <div class="device__icon" aria-hidden>
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" y="1" width="17" height="10" rx="1.5" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Desktop</div>
                        <div class="device__time">1m 20s · 62%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="30">
                      <div class="device__icon" aria-hidden>
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="12" height="16" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Mobile</div>
                        <div class="device__time">45s · 30%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="8">
                      <div class="device__icon" aria-hidden>
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="14" height="12" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Tablet</div>
                        <div class="device__time">10s · 8%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="head">
                <div class="left">
                  <div class="icon">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                      <rect x="3" y="3" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="7" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="11" width="10" height="1.5" rx="1" fill="#8f5bff" />
                    </svg>
                  </div>
                  <div class="text">
                    <h4>Pricing</h4>
                    <p>Last visit: Yesterday</p>
                  </div>
                </div>
                <div class="right">
                  <strong>1m 12s</strong>
                  <div class="badge mid">Mid</div>
                </div>
              </div>
              <div class="details">
                <div class="details__devices">
                  <h4 class="details__devices-title">Devices visiting this section</h4>
                  <div class="devices-list">
                    <div class="device" data-share="50">
                      <div class="device__icon" aria-hidden>
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" y="1" width="17" height="10" rx="1.5" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Desktop</div>
                        <div class="device__time">45s · 50%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="40">
                      <div class="device__icon" aria-hidden>
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="12" height="16" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Mobile</div>
                        <div class="device__time">20s · 40%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="10">
                      <div class="device__icon" aria-hidden>
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="14" height="12" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Tablet</div>
                        <div class="device__time">7s · 10%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="item">
              <div class="head">
                <div class="left">
                  <div class="icon">
                    <svg width="16" height="16" viewBox="0 0 16 16">
                      <rect x="3" y="3" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="7" width="10" height="1.5" rx="1" fill="#8f5bff" />
                      <rect x="3" y="11" width="10" height="1.5" rx="1" fill="#8f5bff" />
                    </svg>
                  </div>
                  <div class="text">
                    <h4>Contact</h4>
                    <p>Last visit: 5 days ago</p>
                  </div>
                </div>
                <div class="right">
                  <strong>22s</strong>
                  <div class="badge low">Low</div>
                </div>
              </div>
              <div class="details">
                <div class="details__devices">
                  <h4 class="details__devices-title">Devices visiting this section</h4>
                  <div class="devices-list">
                    <div class="device" data-share="20">
                      <div class="device__icon" aria-hidden>
                        <svg width="18" height="14" viewBox="0 0 18 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="0.5" y="1" width="17" height="10" rx="1.5" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Desktop</div>
                        <div class="device__time">12s · 20%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="65">
                      <div class="device__icon" aria-hidden>
                        <svg width="14" height="18" viewBox="0 0 14 18" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="12" height="16" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Mobile</div>
                        <div class="device__time">7s · 65%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                    <div class="device" data-share="15">
                      <div class="device__icon" aria-hidden>
                        <svg width="16" height="14" viewBox="0 0 16 14" fill="none"
                          xmlns="http://www.w3.org/2000/svg">
                          <rect x="1" y="1" width="14" height="12" rx="2" stroke="currentColor"
                            stroke-opacity="0.12" />
                        </svg>
                      </div>
                      <div class="device__meta">
                        <div class="device__name">Tablet</div>
                        <div class="device__time">3s · 15%</div>
                      </div>
                      <div class="device__share"><span style="width:0%"></span></div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <article class="chart-card card-inner">
        <div class="section-head">
          <h2>Financial Balance</h2>
          <span>Current period</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyFlowChart"></canvas>
        </div>
      </article>
    </section>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/reports/customer-report.js') }}"></script>
@endsection
