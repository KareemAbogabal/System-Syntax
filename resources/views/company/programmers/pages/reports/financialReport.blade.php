@extends('company.programmers.main')

@section('title', 'Financial Report')

@section('page')
  <div class="financial-page">
    <header class="topbar">
      <div class="brand">
        <div class="logo" aria-hidden="true">
          <svg viewBox="0 0 24 24">
            <path d="M12 2l2.7 5.5L20 8.2l-4 3.9.9 5.5L12 15.9 7.1 17.6 8 12.1 4 8.2l5.3-.7L12 2z"/>
          </svg>
        </div>
        <div>
          <h1>Financial Command Center</h1>
          <p>Luxury analytics for annual revenue, returns, conversion, profit, and loss.</p>
        </div>
      </div>
      <div class="top-actions">
        <span class="pill">Annual View</span>
        <button class="btn" id="refreshBtn">Refresh Data</button>
      </div>
    </header>
    <section class="grid">
      <article class="card-inner card span-4">
        <div class="card-head">
          <div>
            <h2 class="card-title">Annual Company Income</h2>
            <p class="card-subtitle">Total income across the year from operations, products, and services.</p>
          </div>
          <span class="badge">FY 2026</span>
        </div>
        <div class="metric">
          <div class="value" id="annualIncome">$48.6M</div>
          <div class="delta up">▲ 18.4% from last year</div>
          <div class="small-note">Core indicator for performance, growth, and strategic planning.</div>
        </div>
      </article>
      <article class="card-inner card span-4">
        <div class="card-head">
          <div>
            <h2 class="card-title">Annual Returns</h2>
            <p class="card-subtitle">A quick view of annual return rate and financial efficiency.</p>
          </div>
          <span class="badge">Net Yield</span>
        </div>
        <div class="metric">
          <div class="value" id="annualReturn">24.8%</div>
          <div class="delta up">▲ Strong yearly performance</div>
          <div class="small-note">Useful for leadership dashboards and investor summaries.</div>
        </div>
      </article>
      <article class="card-inner card span-4">
        <div class="card-head">
          <div>
            <h2 class="card-title">Net Result</h2>
            <p class="card-subtitle">Profit after expenses, losses, taxes, and operational costs.</p>
          </div>
          <span class="badge">Yearly Close</span>
        </div>
        <div class="metric">
          <div class="value" id="netResult">$12.9M</div>
          <div class="delta up">▲ Healthy margin</div>
          <div class="small-note">Keeps the design sharp and executive-friendly.</div>
        </div>
      </article>
      <article class="card-inner card span-8 chart-card">
        <div class="card-head">
          <div>
            <h2 class="card-title">Revenue Trend</h2>
            <p class="card-subtitle">Monthly growth and progression across the year.</p>
          </div>
          <span class="badge">Chart.js</span>
        </div>
        <div class="chart-body"><canvas id="revenueChart"></canvas></div>
      </article>
      <article class="card-inner card span-4 chart-card">
        <div class="card-head">
          <div>
            <h2 class="card-title">Revenue Mix</h2>
            <p class="card-subtitle">Business contribution by department.</p>
          </div>
          <span class="badge">Portfolio</span>
        </div>
        <div class="chart-body"><canvas id="mixChart"></canvas></div>
      </article>
      <article class="card-inner card span-6 mini">
        <div class="card-head">
          <div>
            <h2 class="card-title">Profit vs Loss</h2>
            <p class="card-subtitle">A clearer comparison of gains and drawdowns.</p>
          </div>
          <span class="badge">Weekly</span>
        </div>
        <div class="chart-body"><canvas id="cashFlowChart"></canvas></div>
      </article>
      <article class="card-inner card span-6 mini">
        <div class="card-head">
          <div>
            <h2 class="card-title">Performance Pulse</h2>
            <p class="card-subtitle">A compact directional indicator for internal reporting.</p>
          </div>
          <span class="badge">Trend</span>
        </div>
        <div class="chart-body"><canvas id="pulseChart" data-points='[18,22,28,35,42,50,58,63,69,74,81,87]'></canvas></div>
      </article>
      <article class="card-inner card span-12">
        <div class="card-head">
          <div>
            <h2 class="card-title">Key Financial Stats</h2>
            <p class="card-subtitle">Executive snapshot for income, expenses, and operational health.</p>
          </div>
          <span class="badge">Snapshot</span>
        </div>
        <div class="stats-row">
          <div class="stat-item">
            <div class="k">Monthly Revenue</div>
            <div class="v" id="monthlyRevenue">$4.05M</div>
            <div class="t">Average across the year</div>
          </div>
          <div class="stat-item">
            <div class="k">Monthly Expense</div>
            <div class="v" id="monthlyExpense">$2.98M</div>
            <div class="t">Operations, payroll, and tools</div>
          </div>
          <div class="stat-item">
            <div class="k">Profit Margin</div>
            <div class="v" id="profitMargin">26.4%</div>
            <div class="t">Net income efficiency</div>
          </div>
          <div class="stat-item">
            <div class="k">Loss Rate</div>
            <div class="v" id="lossRate">7.1%</div>
            <div class="t">Controlled downside exposure</div>
          </div>
        </div>
      </article>
      <article class="card-inner card span-12">
        <div class="card-head">
          <div>
            <h2 class="card-title">Currency Converter</h2>
            <p class="card-subtitle">Convert values quickly for multi-market financial reporting.</p>
          </div>
          <span class="badge">FX Tool</span>
        </div>
        <div class="converter">
          <div class="field">
            <label for="amount">Amount</label>
            <input id="amount" type="text" value="1000" min="0" step="0.01" />
          </div>
          <button class="btn swap" id="swapBtn" title="Swap currencies">⇄</button>
          <div class="field">
            <label for="currencyTo">Convert To</label>
            <select id="currencyTo">
              <option value="USD">USD — US Dollar</option>
              <option value="EUR">EUR — Euro</option>
              <option value="GBP">GBP — Pound</option>
              <option value="EGP" selected>EGP — Egyptian Pound</option>
              <option value="SAR">SAR — Saudi Riyal</option>
              <option value="AED">AED — UAE Dirham</option>
            </select>
          </div>
        </div>
        <div class="result-box" id="convertResult">1,000 USD = 49,000 EGP</div>
      </article>
      <article class="card-inner card span-12 table-card">
        <div class="card-head">
          <div>
            <h2 class="card-title">Annual Revenue / Loss Table</h2>
            <p class="card-subtitle">Use this table for reporting, board reviews, and performance analysis.</p>
          </div>
          <span class="badge">Finance Table</span>
        </div>
        <div class="table-wrap">
          <table>
            <thead>
              <tr>
                <th>Month</th>
                <th>Revenue</th>
                <th>Cost</th>
                <th>Profit</th>
                <th>Loss</th>
                <th>Status</th>
              </tr>
            </thead>
            <tbody>
              <tr>
                <td>Jan</td>
                <td>$3,200,000</td>
                <td>$2,100,000</td>
                <td class="pos">$980,000</td>
                <td class="neg">$120,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Feb</td>
                <td>$3,600,000</td>
                <td>$2,200,000</td>
                <td class="pos">$1,220,000</td>
                <td class="neg">$180,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Mar</td>
                <td>$3,900,000</td>
                <td>$2,350,000</td>
                <td class="pos">$1,440,000</td>
                <td class="neg">$110,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Apr</td>
                <td>$4,100,000</td>
                <td>$2,400,000</td>
                <td class="pos">$1,480,000</td>
                <td class="neg">$220,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>May</td>
                <td>$4,300,000</td>
                <td>$2,500,000</td>
                <td class="pos">$1,650,000</td>
                <td class="neg">$150,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Jun</td>
                <td>$4,500,000</td>
                <td>$2,550,000</td>
                <td class="pos">$1,760,000</td>
                <td class="neg">$190,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Jul</td>
                <td>$4,700,000</td>
                <td>$2,600,000</td>
                <td class="pos">$1,930,000</td>
                <td class="neg">$170,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Aug</td>
                <td>$4,900,000</td>
                <td>$2,680,000</td>
                <td class="pos">$2,080,000</td>
                <td class="neg">$140,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Sep</td>
                <td>$5,200,000</td>
                <td>$2,750,000</td>
                <td class="pos">$2,240,000</td>
                <td class="neg">$210,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Oct</td>
                <td>$5,400,000</td>
                <td>$2,820,000</td>
                <td class="pos">$2,420,000</td>
                <td class="neg">$160,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Nov</td>
                <td>$5,600,000</td>
                <td>$2,900,000</td>
                <td class="pos">$2,470,000</td>
                <td class="neg">$230,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
              <tr>
                <td>Dec</td>
                <td>$5,900,000</td>
                <td>$3,050,000</td>
                <td class="pos">$2,670,000</td>
                <td class="neg">$180,000</td>
                <td><span class="pos">Profit</span></td>
              </tr>
            </tbody>
          </table>
        </div>
      </article>
    </section>
    <p class="footer-note">
      This layout is intentionally bold and restrained: dark glass surfaces, violet accents, clear hierarchy, and executive-level clarity.
      Replace the sample numbers with live backend data when you connect the dashboard to your database or API.
    </p>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/reports/financial-report.js') }}"></script>
@endsection
