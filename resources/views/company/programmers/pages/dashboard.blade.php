@extends("company.programmers.main")

@section("title", "Dashboard")

@section("page")
  <div class="dashboard">
    <x-components::company.popupForm header="Add task" description="Save your tasks, progress towards development" dataFollowButton="task" pathPostForm="#">
      <div class="row">
        <div class="perant-input">
          <label for="name-task">Name Task</label>
          <input type="text" id="name-task" placeholder="Name Task">
        </div>
        <div class="perant-input custom-select">
          <label for="task-status">work team</label>
          <select id="task-status">
            <option value="">Choose team</option>
            <option value="pending">Pending</option>
            <option value="progress">In Progress</option>
            <option value="completed">Completed</option>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="start">start</label>
          <input type="date" id="start" placeholder="Start">
        </div>
        <div class="perant-input">
          <label for="end">end</label>
          <input type="date" id="end" placeholder="End">
        </div>
      </div>
      <div class="perant-input">
        <label for="name-task">description</label>
        <textarea id="name-task" placeholder="Description"></textarea>
      </div>
      <div class="row">
        <div class="perant-input task-range">
          <label for="task-progress">Completion percentage</label>
          <input type="range" id="task-progress" min="0" max="100" value="50">
        </div>
        <div class="perant-input task-tags-input">
          <label for="task-tags">Task Tags</label>
          <input type="text" id="task-tags" placeholder="UI, Frontend, Dashboard" >
        </div>
      </div>
    </x-components::company.popupForm>
    <x-components::company.popupShow dataFollowButton="show-task">
      <div class="card-show">
        <div class="task-head">
          <div class="task-head-left">
            <div class="task-icon">FE</div>
            <div>
              <h2>Front End</h2>
              <p>Task Details</p>
            </div>
          </div>
          <div class="task-status-badge">In Progress</div>
        </div>
        <div class="task-meta">
          <div class="meta-box">
            <span>Start Date</span>
            <strong>4/8/2026</strong>
          </div>
          <div class="meta-box">
            <span>Due Date</span>
            <strong>4/20/2026</strong>
          </div>
          <div class="meta-box">
            <span>Priority</span>
            <strong>High</strong>
          </div>
          <div class="meta-box">
            <span>Assigned To</span>
            <strong>Ahmed Ali</strong>
          </div>
        </div>
        <div class="task-body">
          <div class="section-title">Description</div>
          <p>
            Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta,
            aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit
            sapiente, consectetur tempore temporibus debitis veniam eos odit optio
            repudiandae corrupti architecto.
          </p>
        </div>
        <div class="task-grid">
          <div class="task-box">
            <span>Progress</span>
            <strong>75%</strong>
            <div class="progress-bar">
              <div class="progress-fill" style="width: 75%"></div>
            </div>
          </div>
          <div class="task-box">
            <span>Team</span>
            <strong>3 Members</strong>
          </div>
        </div>
        <div class="task-tags">
          <span>UI</span>
          <span>Responsive</span>
          <span>Frontend</span>
        </div>
      </div>
    </x-components::company.popupShow>
    <section class="section-1">
      <div class="left-column">
        <div class="top-grid">
          <div class="card">
            <svg class="card-wave" viewBox="0 0 400 240" preserveAspectRatio="none" aria-hidden="true">
              <defs>
                <linearGradient id="waveG1" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#ffffff" stop-opacity="0.16"/>
                  <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.05"/>
                </linearGradient>
                <filter id="blur1"><feGaussianBlur stdDeviation="16"/></filter>
              </defs>
              <path d="M-20,175 C40,115 90,220 160,155 C220,100 250,50 335,80 C380,94 420,150 430,175 L430,260 L-20,260 Z" fill="url(#waveG1)" filter="url(#blur1)"/>
              <path d="M-20,95 C55,55 120,130 185,92 C245,58 295,10 365,44 C398,59 420,85 430,100 L430,-10 L-20,-10 Z" fill="#ffffff" opacity="0.08"/>
              <circle cx="330" cy="80" r="62" fill="#ffffff" opacity="0.05"/>
              <circle cx="70" cy="52" r="40" fill="#8f5bff" opacity="0.08"/>
            </svg>
            <div class="card-inner card-analytic">
              <div class="content">
                <div class="stat-head"><span class="stat-icon">↗</span> TOTAL REVENUE</div>
                <div class="stat-value">$8365.00</div>
                <div class="stat-sub">
                  <span class="trend-up">
                    <svg width="30" height="30" viewBox="0 0 70 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <marker id="arrow-1" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="4" markerHeight="4" orient="auto">
                          <path d="M0 0 L10 5 L0 10 Z" fill="var(--color-analysis)"/>
                        </marker>
                      </defs>
                      <path  d="M5 30 L30 10 L35 30 L65 5" stroke="var(--color-analysis)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" marker-end="url(#arrow-1)"/>
                    </svg>
                  </span> 
                  <p>100% Stable Groth</p>
                </div>
              </div>
              <canvas class="chart-line" data-points="[0, 20, 15, 30, 20, 50, 30, 40, 25, 35, 10, 50]"></canvas>
            </div>
          </div>
          <div class="card">
            <svg class="card-wave" viewBox="0 0 400 240" preserveAspectRatio="none" aria-hidden="true">
              <defs>
                <linearGradient id="waveG2" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#ffffff" stop-opacity="0.14"/>
                  <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.04"/>
                </linearGradient>
                <filter id="blur2"><feGaussianBlur stdDeviation="16"/></filter>
              </defs>
              <path d="M-10,185 C50,120 100,230 155,150 C205,80 255,70 320,110 C370,140 392,170 430,140 L430,260 L-10,260 Z" fill="url(#waveG2)" filter="url(#blur2)"/>
              <path d="M-20,80 C50,38 115,105 185,72 C245,44 305,10 360,55 C389,78 410,100 430,112 L430,-10 L-20,-10 Z" fill="#ffffff" opacity="0.06"/>
              <circle cx="300" cy="78" r="54" fill="#ffffff" opacity="0.04"/>
              <circle cx="95" cy="155" r="48" fill="#8f5bff" opacity="0.07"/>
            </svg>
            <div class="card-inner card-analytic">
              <div class="content">
                <div class="stat-head"><span class="stat-icon">🛒</span> NEW ORDER</div>
                <div class="stat-value">722</div>
                <div class="stat-sub">
                  <span class="trend-up">
                    <svg width="30" height="30" viewBox="0 0 70 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <marker id="arrow-2" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="4" markerHeight="4" orient="auto">
                          <path d="M0 0 L10 5 L0 10 Z" fill="var(--color-analysis)"/>
                        </marker>
                      </defs>
                      <path  d="M5 30 L30 10 L35 30 L65 5" stroke="var(--color-analysis)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" marker-end="url(#arrow-2)"/>
                    </svg>
                  </span> 
                  <p>84% Stable Groth</p>
                </div>
              </div>
              <canvas class="chart-line" data-points="[0, 20, 15, 30, 20, 50, 30, 40, 25, 35, 10, 50]"></canvas>
            </div>
          </div>
          <div class="card">
            <svg class="card-wave" viewBox="0 0 400 240" preserveAspectRatio="none" aria-hidden="true">
              <defs>
                <linearGradient id="waveG3" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#ffffff" stop-opacity="0.14"/>
                  <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.04"/>
                </linearGradient>
                <filter id="blur3"><feGaussianBlur stdDeviation="16"/></filter>
              </defs>
              <path d="M-20,170 C35,120 88,210 150,162 C210,116 258,70 330,100 C375,120 404,162 430,170 L430,260 L-20,260 Z" fill="url(#waveG3)" filter="url(#blur3)"/>
              <path d="M-20,78 C45,40 115,90 185,58 C240,34 305,0 364,48 C392,71 412,90 430,106 L430,-10 L-20,-10 Z" fill="#ffffff" opacity="0.07"/>
              <circle cx="280" cy="86" r="56" fill="#ffffff" opacity="0.04"/>
              <circle cx="94" cy="60" r="42" fill="#8f5bff" opacity="0.08"/>
            </svg>
            <div class="card-inner card-analytic">
              <div class="content">
                <div class="stat-head"><span class="stat-icon">◎</span> SESSIONS</div>
                <div class="stat-value">$8365.00</div>
                <div class="stat-sub">
                  <span class="trend-up">
                    <svg width="30" height="30" style="--color-analysis: #ff6d6d;" viewBox="0 0 70 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <marker id="arrow-3" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="4" markerHeight="4" orient="auto">
                          <path d="M0 0 L10 5 L0 10 Z" fill="var(--color-analysis)"/>
                        </marker>
                      </defs>
                      <path d="M5 10 L30 30 L35 10 L65 35" stroke="var(--color-analysis)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" marker-end="url(#arrow-3)"/>
                    </svg>
                  </span> 
                  <p>4.5% Stable Groth</p>
                </div>
              </div>
              <canvas class="chart-line" data-points="[0, 20, 15, 30, 20, 50, 30, 40, 25, 35, 10, 50]"></canvas>
            </div>
          </div>
          <div class="card">
            <svg class="card-wave" viewBox="0 0 400 240" preserveAspectRatio="none" aria-hidden="true">
              <defs>
                <linearGradient id="waveG4" x1="0" y1="0" x2="1" y2="1">
                  <stop offset="0%" stop-color="#ffffff" stop-opacity="0.14"/>
                  <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.04"/>
                </linearGradient>
                <filter id="blur4"><feGaussianBlur stdDeviation="16"/></filter>
              </defs>
              <path d="M-20,178 C40,114 88,225 162,154 C220,99 260,54 338,76 C385,90 408,150 430,175 L430,260 L-20,260 Z" fill="url(#waveG4)" filter="url(#blur4)"/>
              <path d="M-20,96 C50,58 125,124 190,88 C247,58 302,18 364,46 C395,60 414,86 430,100 L430,-10 L-20,-10 Z" fill="#ffffff" opacity="0.06"/>
              <circle cx="320" cy="84" r="52" fill="#ffffff" opacity="0.04"/>
              <circle cx="72" cy="148" r="38" fill="#8f5bff" opacity="0.08"/>
            </svg>
            <div class="card-inner card-analytic">
              <div class="content">
                <div class="stat-head"><span class="stat-icon">⟠</span> AVG. ORDER VALUE</div>
                <div class="stat-value">$1025.50</div>
                <div class="stat-sub">
                  <span class="trend-up">
                    <svg width="30" height="30" style="--color-analysis: #ff6d6d;" viewBox="0 0 70 40" fill="none" xmlns="http://www.w3.org/2000/svg">
                      <defs>
                        <marker id="arrow-4" viewBox="0 0 10 10" refX="6" refY="5" markerWidth="4" markerHeight="4" orient="auto">
                          <path d="M0 0 L10 5 L0 10 Z" fill="var(--color-analysis)"/>
                        </marker>
                      </defs>
                      <path d="M5 10 L30 30 L35 10 L65 35" stroke="var(--color-analysis)" stroke-width="3" fill="none" stroke-linecap="round" stroke-linejoin="round" marker-end="url(#arrow-4)"/>
                    </svg>
                  </span> 
                  <p>80% Stable Groth</p>
                </div>
              </div>
              <canvas class="chart-line" data-points="[0, 20, 15, 30, 20, 50, 30, 40, 25, 35, 10, 50]"></canvas>
            </div>
          </div>
        </div>
      </div>
      <div class="right-column">
        <div class="card-inner card-tasks">
          <div class="balance-top">
            <div class="balance-title">
              <p>tasks</p>
            </div>
            <div class="tasks-actions">
              <div class="balance-badge">30</div>
              <button class="tasks-btn button-form" data-follow="task">
                <span>+</span>
                Add Task
              </button>
            </div>
          </div>
          <div class="tasks-list">
            <div class="task-item">
              <div class="task-left">
                <div class="task-dot"></div>
                <div class="task-info">
                  <strong>Front End</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit sapiente, consectetur tempore temporibus debitis veniam eos odit optio repudiandae corrupti architecto.</p>
                  <div class="date">
                    <div class="task-status start">4/8/2026</div>
                    <div class="task-status end">4/20/2026</div>
                  </div>
                </div>
              </div>
              <div class="task-right">
                <button class="task-menu-btn button-form" data-follow="show-task" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item">
              <div class="task-left">
                <div class="task-dot"></div>
                <div class="task-info">
                  <strong>Front End</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit sapiente, consectetur tempore temporibus debitis veniam eos odit optio repudiandae corrupti architecto.</p>
                  <div class="date">
                    <div class="task-status start">4/8/2026</div>
                    <div class="task-status end">4/20/2026</div>
                  </div>
                </div>
              </div>
              <div class="task-right">
                <button class="task-menu-btn button-form" data-follow="show-task" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item">
              <div class="task-left">
                <div class="task-dot"></div>
                <div class="task-info">
                  <strong>Front End</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit sapiente, consectetur tempore temporibus debitis veniam eos odit optio repudiandae corrupti architecto.</p>
                  <div class="date">
                    <div class="task-status start">4/8/2026</div>
                    <div class="task-status end">4/20/2026</div>
                  </div>
                </div>
              </div>
              <div class="task-right">
                <button class="task-menu-btn button-form" data-follow="show-task" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item">
              <div class="task-left">
                <div class="task-dot"></div>
                <div class="task-info">
                  <strong>Front End</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit sapiente, consectetur tempore temporibus debitis veniam eos odit optio repudiandae corrupti architecto.</p>
                  <div class="date">
                    <div class="task-status start">4/8/2026</div>
                    <div class="task-status end">4/20/2026</div>
                  </div>
                </div>
              </div>
              <div class="task-right">
                <button class="task-menu-btn button-form" data-follow="show-task" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item">
              <div class="task-left">
                <div class="task-dot"></div>
                <div class="task-info">
                  <strong>Front End</strong>
                  <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit. Dicta, aspernatur suscipit. Est, nesciunt dolorum voluptatibus vitae unde fugit sapiente, consectetur tempore temporibus debitis veniam eos odit optio repudiandae corrupti architecto.</p>
                  <div class="date">
                    <div class="task-status start">4/8/2026</div>
                    <div class="task-status end">4/20/2026</div>
                  </div>
                </div>
              </div>
              <div class="task-right">
                <button class="task-menu-btn button-form" data-follow="show-task" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card report-card">
        <svg class="card-wave" viewBox="0 0 700 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveG5" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blur5"><feGaussianBlur stdDeviation="24"/></filter>
          </defs>
          <path d="M-30,215 C60,125 120,260 210,190 C290,128 335,75 430,126 C510,168 545,237 650,200 C690,185 720,150 750,138 L750,320 L-30,320 Z" fill="url(#waveG5)" filter="url(#blur5)"/>
          <circle cx="560" cy="70" r="70" fill="#ffffff" opacity="0.03"/>
          <circle cx="120" cy="72" r="52" fill="#8f5bff" opacity="0.05"/>
        </svg>
        <div class="card-inner">
          <div class="report-head">
            <div class="report-title">Report</div>
            <div class="report-filter">▣ This Month</div>
          </div>
          <div class="report-chart-wrap">
            <canvas id="reportChart"></canvas>
          </div>
        </div>
      </div>
      <div class="card details-card">
        <svg class="card-wave" viewBox="0 0 520 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveG6" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blur6"><feGaussianBlur stdDeviation="22"/></filter>
          </defs>
          <path d="M-20,220 C48,150 110,255 190,194 C260,138 314,70 392,108 C460,142 488,210 540,182 L540,320 L-20,320 Z" fill="url(#waveG6)" filter="url(#blur6)"/>
          <circle cx="405" cy="78" r="62" fill="#ffffff" opacity="0.03"/>
          <circle cx="96" cy="160" r="52" fill="#8f5bff" opacity="0.05"/>
        </svg>
        <div class="card-inner">
          <div class="details-title">Balance Details</div>
          <div class="donut-wrap">
            <canvas id="donutChart"></canvas>
            <div class="donut-center">
              <strong>$82365.00</strong>
              <span>Available</span>
            </div>
          </div>
          {{-- <div class="legend-row">
            <div class="legend-item"><span class="legend-dot" style="background:#4b5cff"></span> USD</div>
            <div class="legend-item"><span class="legend-dot" style="background:#ff8a5b"></span> Euro</div>
            <div class="legend-item"><span class="legend-dot" style="background:#ffd34f"></span> Pounds</div>
            <div class="legend-item"><span class="legend-dot" style="background:#5fd18a"></span> Dinor</div>
          </div>
          <div class="date-line">
            <span class="small-pill">📅 01 January 2024 to 31 December 2024</span>
          </div> --}}
        </div>
      </div>
    </section>
    <section class="section-2">
      <div class="card cash-flow-card">
        <svg class="card-wave" viewBox="0 0 700 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveCash" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blurCash"><feGaussianBlur stdDeviation="24"/></filter>
          </defs>
          <path d="M-30,215 C60,125 120,260 210,190 C290,128 335,75 430,126 C510,168 545,237 650,200 C690,185 720,150 750,138 L750,320 L-30,320 Z" fill="url(#waveCash)" filter="url(#blurCash)"/>
        </svg>
        <div class="card-inner">
          <div class="section-head">
            <div class="section-title">Cash Flow</div>
            <div class="section-filter">Weekly</div>
          </div>
          <div class="chart-wrap">
            <canvas id="cashFlowChart"></canvas>
          </div>
        </div>
      </div>
      <div class="card send-money-card">
        <svg class="card-wave" viewBox="0 0 520 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveSend" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blurSend"><feGaussianBlur stdDeviation="22"/></filter>
          </defs>
          <path d="M-20,220 C48,150 110,255 190,194 C260,138 314,70 392,108 C460,142 488,210 540,182 L540,320 L-20,320 Z" fill="url(#waveSend)" filter="url(#blurSend)"/>
        </svg>
        <div class="card-inner">
          <div class="section-head">
            <div class="section-title">Employees</div>
            <input type="text" placeholder="Search for employee">
          </div>
          <div class="employees-list">
            <a href="#" class="employee-item">
              <div class="employee-info">
                <img src="https://i.pravatar.cc/80?img=11" loading="lazy" alt="employee">
                <div>
                  <strong>Scott Holland</strong>
                  <span>Sales Manager</span>
                </div>
              </div>
              <button class="employee-action">A</button>
            </a>
            <a href="#" class="employee-item">
              <div class="employee-info">
                <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="employee">
                <div>
                  <strong>Karen Savage</strong>
                  <span>HR Specialist</span>
                </div>
              </div>
              <button class="employee-action">A</button>
            </a>
            <a href="#" class="employee-item">
              <div class="employee-info">
                <img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="employee">
                <div>
                  <strong>Steven Sharp</strong>
                  <span>Developer</span>
                </div>
              </div>
              <button class="employee-action">A</button>
            </a>
            <a href="#" class="employee-item">
              <div class="employee-info">
                <img src="https://i.pravatar.cc/80?img=14" loading="lazy" alt="employee">
                <div>
                  <strong>Teresa Himes</strong>
                  <span>Accountant</span>
                </div>
              </div>
              <button class="employee-action">A</button>
            </a>
            <a href="#" class="employee-item">
              <div class="employee-info">
                <img src="https://i.pravatar.cc/80?img=15" loading="lazy" alt="employee">
                <div>
                  <strong>Ralph Denton</strong>
                  <span>Project Lead</span>
                </div>
              </div>
              <button class="employee-action">A</button>
            </a>
          </div>
        </div>
      </div>
      <div class="card transaction-card">
        <svg class="card-wave" viewBox="0 0 700 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveTrx" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blurTrx"><feGaussianBlur stdDeviation="24"/></filter>
          </defs>
          <path d="M-30,215 C60,125 120,260 210,190 C290,128 335,75 430,126 C510,168 545,237 650,200 C690,185 720,150 750,138 L750,320 L-30,320 Z" fill="url(#waveTrx)" filter="url(#blurTrx)"/>
        </svg>
        <div class="card-inner">
          <div class="section-head">
            <div class="section-title">Transaction History</div>
            <div class="section-filter">This Month</div>
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
        </div>
      </div>
      <div class="card exchange-card">
        <svg class="card-wave" viewBox="0 0 520 300" preserveAspectRatio="none" aria-hidden="true">
          <defs>
            <linearGradient id="waveEx" x1="0" y1="0" x2="1" y2="1">
              <stop offset="0%" stop-color="#ffffff" stop-opacity="0.10"/>
              <stop offset="100%" stop-color="#8f5bff" stop-opacity="0.03"/>
            </linearGradient>
            <filter id="blurEx"><feGaussianBlur stdDeviation="22"/></filter>
          </defs>
          <path d="M-20,220 C48,150 110,255 190,194 C260,138 314,70 392,108 C460,142 488,210 540,182 L540,320 L-20,320 Z" fill="url(#waveEx)" filter="url(#blurEx)"/>
        </svg>
        <div class="card-inner">
          <div class="section-head">
            <div class="section-title">Exchange Rate</div>
          </div>
          <div class="exchange-list">
            <div class="exchange-item income">
              <div class="exchange-left">
                <div class="currency-icon">🇺🇸</div>
                <div class="exchange-info">
                  <strong>USA</strong>
                  <span>Incoming money</span>
                </div>
              </div>
              <div class="exchange-right">
                <div class="money-value">+$12,450</div>
              </div>
            </div>
            <div class="exchange-item expense">
              <div class="exchange-left">
                <div class="currency-icon">🇪🇸</div>
                <div class="exchange-info">
                  <strong>Spain</strong>
                  <span>Outgoing money</span>
                </div>
              </div>
              <div class="exchange-right">
                <div class="money-value">-$8,320</div>
              </div>
            </div>
            <div class="exchange-item income">
              <div class="exchange-left">
                <div class="currency-icon">🇫🇷</div>
                <div class="exchange-info">
                  <strong>French</strong>
                  <span>Incoming money</span>
                </div>
              </div>
              <div class="exchange-right">
                <div class="money-value">+$6,980</div>
              </div>
            </div>
            <div class="exchange-item expense">
              <div class="exchange-left">
                <div class="currency-icon">🇩🇪</div>
                <div class="exchange-info">
                  <strong>Germany</strong>
                  <span>Outgoing money</span>
                </div>
              </div>
              <div class="exchange-right">
                <div class="money-value">-$4,150</div>
              </div>
            </div>
            <div class="exchange-item income">
              <div class="exchange-left">
                <div class="currency-icon">🇧🇸</div>
                <div class="exchange-info">
                  <strong>Bahamas</strong>
                  <span>Incoming money</span>
                </div>
              </div>
              <div class="exchange-right">
                <div class="money-value">+$3,760</div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script type="module" src="{{ asset("js/company/programmers/dashboard.js") }}"></script>
@endsection