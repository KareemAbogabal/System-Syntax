@extends('company.programmers.main')

@section('title', 'Branch Analysis')

@section('page')
  <section class="company-branch-analytics">
    <div class="analytics-grid">
      <div class="analytics-left">
        <div class="card summary-card card-inner">
          <div class="card-header">
            <h3>Overall Summary</h3>
          </div>
          <div class="summary-boxes">
            <div class="summary-box">
              <div>
                <span>Balance</span>
                <h4>$312k</h4>
              </div>
              <small>+16.8%</small>
            </div>
            <div class="summary-box">
              <div>
                <span>Achievement Rate</span>
                <h4>20%</h4>
              </div>
              <small>+4.3%</small>
            </div>
            <div class="summary-box">
              <div>
                <span>Customers</span>
                <h4>1,520</h4>
              </div>
              <small>+9.1%</small>
            </div>
          </div>
        </div>
        <div class="card sales-card card-inner">
          <div class="card-header">
            <h3>Sales Overview</h3>
          </div>
          <div class="sales-top">
            <p class="sales-value">$90.6m</p>
            <div class="sales-badge">+36.8% from last month</div>
          </div>
          <div class="sales-chart-wrap">
            <canvas id="salesBarChart"></canvas>
          </div>
        </div>
      </div>
      <div class="analytics-right">
        <!-- Recent Activity -->
        <div class="card recent-activity-card card-inner">
          <div class="card-header">
            <h3>Recent Activity</h3>
            <div class="header-tools">
              <div class="search-box">
                <input type="text" id="activitySearch" placeholder="Search activity..." />
              </div>
            </div>
          </div>
          <div class="activity-list" id="activityList">
            <div class="activity-item">
              <div class="activity-main">
                <img src="https://i.pravatar.cc/80?img=11" alt="" loading="lazy">
                <div class="activity-text">
                  <h4>Mohamed Ali</h4>
                  <p>Approved branch budget request</p>
                  <span>12 min ago</span>
                </div>
              </div>
              <div class="activity-actions-wrap">
                <button class="dots-btn" type="button">⋯</button>
                <div class="activity-menu">
                  <button type="button">show</button>
                  <button type="button" class="danger">Remove</button>
                </div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-main">
                <img src="https://i.pravatar.cc/80?img=18" alt="" loading="lazy">
                <div class="activity-text">
                  <h4>Sara Ahmed</h4>
                  <p>Updated branch KPI data</p>
                  <span>28 min ago</span>
                </div>
              </div>
              <div class="activity-actions-wrap">
                <button class="dots-btn" type="button">⋯</button>
                <div class="activity-menu">
                  <button type="button">show</button>
                  <button type="button" class="danger">Remove</button>
                </div>
              </div>
            </div>
            <div class="activity-item">
              <div class="activity-main">
                <img src="https://i.pravatar.cc/80?img=32" alt="" loading="lazy">
                <div class="activity-text">
                  <h4>Youssef Tarek</h4>
                  <p>Closed pending client ticket</p>
                  <span>1 hour ago</span>
                </div>
              </div>
              <div class="activity-actions-wrap">
                <button class="dots-btn" type="button">⋯</button>
                <div class="activity-menu">
                  <button type="button">show</button>
                  <button type="button" class="danger">Remove</button>
                </div>
              </div>
            </div>
          </div>
        </div>
        <!-- Employees -->
        <div class="card employees-card card-inner">
          <div class="card-header">
            <h3>Branch Employees</h3>
          </div>
          <div class="employee-list">
            <div class="employee-item">
              <img src="https://i.pravatar.cc/100?img=12" alt="" loading="lazy">
              <div class="employee-info">
                <h4>Ahmed Nasser</h4>
                <p>Branch Manager</p>
              </div>
              <span class="status online">Online</span>
            </div>
            <div class="employee-item">
              <img src="https://i.pravatar.cc/100?img=25" alt="" loading="lazy">
              <div class="employee-info">
                <h4>Hana Mostafa</h4>
                <p>Operations Officer</p>
              </div>
              <span class="status online">Online</span>
            </div>
            <div class="employee-item">
              <img src="https://i.pravatar.cc/100?img=36" alt="" loading="lazy">
              <div class="employee-info">
                <h4>Omar Adel</h4>
                <p>Sales Executive</p>
              </div>
              <span class="status offline">Offline</span>
            </div>
          </div>
        </div>
      </div>
      <!-- Projects -->
      <div class="card projects-card card-inner">
        <div class="card-header">
          <div>
            <h3>Branch Projects</h3>
            <p>Ongoing work handled by this branch</p>
          </div>
        </div>
        <div class="project-grid">
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
              <span class="project-date">2 days ago</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
              <span class="project-date">5 days ago</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
              <span class="project-date">1 week ago</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
              <span class="project-date">2 days ago</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
              <span class="project-date">5 days ago</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
              <span class="project-date">1 week ago</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
              <span class="project-date">2 days ago</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
              <span class="project-date">5 days ago</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
              <span class="project-date">1 week ago</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Doughnut Chart -->
      <div class="card chart-card card-inner">
        <div class="card-header">
          <div>
            <h3>Branch Overview</h3>
            <p>Activity distribution</p>
          </div>
        </div>
        <div class="chart-wrap">
          <canvas id="branchDoughnutChart"></canvas>
        </div>
      </div>
    </div>
  </section>
  <script type="module" src="{{ asset('js/company/programmers/analytics/branch-analytics.js') }}"></script>
@endsection
