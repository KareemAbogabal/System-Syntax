@extends('company.programmers.main')

@section('title', 'Company analytics')

@section('page')
  <div class="company-analytic">
    <div class="top-grid">
      <div class="card-inner dashboard-card annual-card">
        <div class="head">
          <div class="content">
            <p>Annual Transactions</p>
            <h1>EGP 21,000</h1>
          </div>

          <div class="buttons">
            <button class="tasks-btn">weekly</button>
            <button class="tasks-btn">monthly</button>
            <button class="tasks-btn">annual</button>
          </div>
        </div>

        <canvas id="chart-bar"></canvas>
      </div>

      <div class="right-stack">
        <div class="card-inner dashboard-card transfers-card">
          <div class="card-top">
            <div>
              <p class="eyebrow">Transfers</p>
              <h2>Recent activity</h2>
            </div>
            <span class="chip">Live</span>
          </div>

          <div class="transfer-list">
            <a href="#" class="transfer-row">
              <img src="https://i.pravatar.cc/100?img=12" alt="No Img" loading="lazy">
              <div class="transfer-info">
                <strong>Kareem</strong>
                <span>Front end · Today</span>
              </div>
              <div class="transfer-amount revenue">+ EGP 1000</div>
            </a>

            <a href="#" class="transfer-row">
              <img src="https://i.pravatar.cc/100?img=13" alt="No Img" loading="lazy">
              <div class="transfer-info">
                <strong>Sarah</strong>
                <span>Design · Yesterday</span>
              </div>
              <div class="transfer-amount expense">- EGP 1000</div>
            </a>

            <a href="#" class="transfer-row">
              <img src="https://i.pravatar.cc/100?img=14" alt="No Img" loading="lazy">
              <div class="transfer-info">
                <strong>Omar</strong>
                <span>Backend · 2 days ago</span>
              </div>
              <div class="transfer-amount revenue">+ EGP 1000</div>
            </a>
          </div>
        </div>

        <div class="stats-grid">
          <div class="card-inner dashboard-card mini-stat">
            <p>revenues</p>
            <h1>EGP 21,000</h1>
            <div class="bottom">
              <p>100% Stable Groth</p>
            </div>
          </div>

          <div class="card-inner dashboard-card mini-stat">
            <p>revenues</p>
            <h1>EGP 21,000</h1>
            <div class="bottom">
              <p>100% Stable Groth</p>
            </div>
          </div>

          <div class="card-inner dashboard-card mini-stat expense">
            <p>expenses</p>
            <h1>EGP 21,000</h1>
            <div class="bottom">
              <p>100% Stable Groth</p>
            </div>
          </div>

          <div class="card-inner dashboard-card mini-stat expense">
            <p>expenses</p>
            <h1>EGP 21,000</h1>
            <div class="bottom">
              <p>100% Stable Groth</p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <x-components::company.activtyRate />

    <div class="row">
      <div class="card-inner dashboard-card annual-card">
        <div class="head">
          <div class="content">
            <p>Customer Visit Rate</p>
            <h1>21,000</h1>
          </div>

          <div class="buttons">
            <button class="tasks-btn">annual</button>
          </div>
        </div>

        <canvas id="chart-bar-client"></canvas>
      </div>
      <div class="card-inner dashboard-card annual-card">
        <div class="head">
          <div class="content">
            <p>Customer visit rate without orders</p>
            <h1>100,000</h1>
          </div>

          <div class="buttons">
            <button class="tasks-btn">annual</button>
          </div>
        </div>
        <canvas id="chart-bar-client-without-req"></canvas>
      </div>
    </div>
    
    <div class="branchs">
      <h1>Branches</h1>
      <div class="main-branchs">
        <article class="dashboard-card branch-card">
          <div class="branch-head">
            <div>
              <span class="eyebrow">#vm</span>
              <h3>Cairo HQ</h3>
              <p>Ahmed</p>
            </div>
            <div class="share-chip">39%</div>
          </div>

          <div class="branch-body">
            <div class="branch-ring">
              <canvas class="branch-share-chart"></canvas>
              <div class="chart-center">
                <div class="big">39%</div>
                <div class="small">Income share</div>
              </div>
            </div>

            <div class="branch-stats">
              <div class="stat-box">
                <span>Year work rate</span>
                <strong>85%</strong>
                <div class="bar"><i style="width: 85%"></i></div>
              </div>
              <div class="stat-box">
                <span>Teams</span>
                <strong>5</strong>
              </div>
              <div class="stat-box">
                <span>Employees</span>
                <strong>25</strong>
              </div>
              <div class="stat-box">
                <span>Status</span>
                <strong>45</strong>
              </div>
            </div>
          </div>

          <div class="branch-footer">
            <span>Branch yearly performance</span>
            <div class="branch-mini-chart">
              <canvas class="branch-trend-chart"></canvas>
            </div>
          </div>
        </article>
        <article class="dashboard-card branch-card">
          <div class="branch-head">
            <div>
              <span class="eyebrow">#vm</span>
              <h3>Cairo HQ</h3>
              <p>Ahmed</p>
            </div>
            <div class="share-chip">39%</div>
          </div>

          <div class="branch-body">
            <div class="branch-ring">
              <canvas class="branch-share-chart"></canvas>
              <div class="chart-center">
                <div class="big">39%</div>
                <div class="small">Income share</div>
              </div>
            </div>

            <div class="branch-stats">
              <div class="stat-box">
                <span>Year work rate</span>
                <strong>85%</strong>
                <div class="bar"><i style="width: 85%"></i></div>
              </div>
              <div class="stat-box">
                <span>Teams</span>
                <strong>5</strong>
              </div>
              <div class="stat-box">
                <span>Employees</span>
                <strong>25</strong>
              </div>
              <div class="stat-box">
                <span>Status</span>
                <strong>45</strong>
              </div>
            </div>
          </div>

          <div class="branch-footer">
            <span>Branch yearly performance</span>
            <div class="branch-mini-chart">
              <canvas class="branch-trend-chart"></canvas>
            </div>
          </div>
        </article>
        <article class="dashboard-card branch-card">
          <div class="branch-head">
            <div>
              <span class="eyebrow">#vm</span>
              <h3>Cairo HQ</h3>
              <p>Ahmed</p>
            </div>
            <div class="share-chip">39%</div>
          </div>

          <div class="branch-body">
            <div class="branch-ring">
              <canvas class="branch-share-chart"></canvas>
              <div class="chart-center">
                <div class="big">39%</div>
                <div class="small">Income share</div>
              </div>
            </div>

            <div class="branch-stats">
              <div class="stat-box">
                <span>Year work rate</span>
                <strong>85%</strong>
                <div class="bar"><i style="width: 85%"></i></div>
              </div>
              <div class="stat-box">
                <span>Teams</span>
                <strong>5</strong>
              </div>
              <div class="stat-box">
                <span>Employees</span>
                <strong>25</strong>
              </div>
              <div class="stat-box">
                <span>Status</span>
                <strong>45</strong>
              </div>
            </div>
          </div>

          <div class="branch-footer">
            <span>Branch yearly performance</span>
            <div class="branch-mini-chart">
              <canvas class="branch-trend-chart"></canvas>
            </div>
          </div>
        </article>
      </div>
    </div>

    <div class="analytics-bottom">
      <div class="card-inner dashboard-card dual-line-card">
        <div class="card-head">
          <div class="title">
            <h2>revenues and expenses</h2>
          </div>
        </div>

        <div class="chart-box">
          <canvas id="ordersReturnsChart"></canvas>
        </div>

        <div class="legend-row">
          <span><i class="dot orders"></i> revenues</span>
          <span><i class="dot returns"></i> expenses</span>
        </div>
      </div>

      <div class="card-inner dashboard-card chart-circle-card">
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">EGP 21,000</div>
            <div class="small">Total Revenue</div>
          </div>
        </div>
      </div>
    </div>
  </div>

  <script type="module" src="{{ asset('js/company/programmers/analytics/company-analytics.js') }}"></script>
@endsection