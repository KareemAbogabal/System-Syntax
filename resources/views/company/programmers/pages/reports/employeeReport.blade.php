@extends('company.programmers.main')

@section('title', 'Employee Report')

@section('page')
  <div class="employee-report-page">
    <x-components::company.popupShow dataFollowButton="show-chat">
      <div class="card-show chat-show">
        <div class="chat-popup-head">
          <div>
            <span class="chat-kicker">Conversation</span>
            <h2>Sarah ↔ Maryam</h2>
            <p>Brand Director and Customer Operations</p>
          </div>
          <div class="chat-badge">12 Messages</div>
        </div>
        <div class="chat-users-row">
          <div class="chat-user-card chat-user-card--top">
            <img src="https://i.pravatar.cc/150?img=32" alt="Sarah">
            <div class="chat-user-info">
              <strong>Sarah</strong>
              <span>Brand Director</span>
            </div>
          </div>
          <div class="chat-user-card chat-user-card--bottom">
            <img src="https://i.pravatar.cc/150?img=45" alt="Maryam">
            <div class="chat-user-info">
              <strong>Maryam</strong>
              <span>Customer Operations</span>
            </div>
          </div>
        </div>
        <div class="chat-messages">
          <div class="chat-message chat-message--left">
            <div class="chat-message-meta">
              <strong>Sarah</strong>
              <span>09:10 AM</span>
            </div>
            <p>Exclusive offer passed. Schedule approved.</p>
          </div>
          <div class="chat-message chat-message--right">
            <div class="chat-message-meta">
              <strong>Maryam</strong>
              <span>09:14 AM</span>
            </div>
            <p>Great, I will follow up after the meeting.</p>
          </div>
          <div class="chat-message chat-message--left">
            <div class="chat-message-meta">
              <strong>Sarah</strong>
              <span>09:18 AM</span>
            </div>
            <p>Final confirmation is needed before closing.</p>
          </div>
          <div class="chat-message chat-message--right">
            <div class="chat-message-meta">
              <strong>Maryam</strong>
              <span>09:22 AM</span>
            </div>
            <p>Understood, I will send the details now.</p>
          </div>
        </div>
      </div>
    </x-components::company.popupShow>
    <x-components::company.popupShow dataFollowButton="show-task">
      <div class="card-show task-show">
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
          <div class="meta-box task-owner-box">
            <span>Assigned To</span>
            <div class="task-owner">
              <img src="https://i.pravatar.cc/100?img=15" alt="Ahmed Ali">
              <div class="task-owner-info">
                <strong>Ahmed Ali</strong>
                <small>Senior Frontend Developer</small>
              </div>
            </div>
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
    <section class="hero">
      <div class="hero-top">
        <div>
          <p class="eyebrow">Employees Report</p>
          <h1 class="title">Employee Report</h1>
        </div>
        <div class="hero-actions">
          <button class="btn">Export Report</button>
        </div>
      </div>
      <div class="hero-metrics">
        <article class="metric">
          <span class="metric-label">Number of employees</span>
          <strong class="metric-value">1000</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Number of employees deleted</span>
          <strong class="metric-value">200</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Number of banned employees</span>
          <strong class="metric-value">50</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Number of entry-level employees</span>
          <strong class="metric-value">100</strong>
        </article>
      </div>
    </section>
    <section class="charts-grid">
      <article class="chart-card card-inner">
        <div class="section-head">
          <h2>Financial Balance</h2>
          <span>Current period</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyBalanceChart"></canvas>
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
    </section>
    <section class="promotions">
      <article class="card card-inner">
        <div class="icon icon--gold">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
            <path d="M21 16L32 29L43 16"></path>
            <path d="M19 29H45"></path>
            <path d="M32 29V40"></path>
          </svg>
        </div>
        <div class="info">
          <div class="content">
            <span class="label">Executive Promotion</span>
            <strong class="value">18 Employees</strong>
          </div>
          <div class="employees">
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=11" loading="lazy" alt="Employee 1" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Employee 2" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=13" loading="lazy" alt="Employee 3" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=14" loading="lazy" alt="Employee 4" />
            </a>
          </div>
        </div>
      </article>
      <article class="card card-inner">
        <div class="icon icon--purple">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M18 38L26 28L32 14L38 28L46 38"></path>
            <path d="M26 28L32 34L38 28"></path>
            <path d="M22 44H42"></path>
            <path d="M32 14V48"></path>
          </svg>
        </div>
        <div class="info">
          <div class="content">
            <span class="label">Senior Promotion</span>
            <strong class="value">36 Employees</strong>
          </div>
          <div class="employees">
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=11" loading="lazy" alt="Employee 1" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Employee 2" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=13" loading="lazy" alt="Employee 3" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=14" loading="lazy" alt="Employee 4" />
            </a>
          </div>
        </div>
      </article>
      <article class="card card-inner">
        <div class="icon icon--blue">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M32 10L45 22L39 24L47 34L32 54L17 34L25 24L19 22L32 10Z"></path>
            <path d="M24 29L32 21L40 29"></path>
            <path d="M20 34H44"></path>
          </svg>
        </div>
        <div class="info">
          <div class="content">
            <span class="label">Leadership Promotion</span>
            <strong class="value">12 Employees</strong>
          </div>
          <div class="employees">
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=11" loading="lazy" alt="Employee 1" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Employee 2" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=13" loading="lazy" alt="Employee 3" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=14" loading="lazy" alt="Employee 4" />
            </a>
          </div>
        </div>
      </article>
      <article class="card card-inner">
        <div class="icon icon--green">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M32 10L39 24L54 28L43 39L46 54L32 46L18 54L21 39L10 28L25 24L32 10Z"></path>
          </svg>
        </div>
        <div class="info">
          <div class="content">
            <span class="label">Eligible Now</span>
            <strong class="value">27 Employees</strong>
          </div>
          <div class="employees">
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=11" loading="lazy" alt="Employee 1" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Employee 2" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=13" loading="lazy" alt="Employee 3" />
            </a>
            <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
              <img src="https://i.pravatar.cc/100?img=14" loading="lazy" alt="Employee 4" />
            </a>
          </div>
        </div>
      </article>
    </section>
    <section class="connections-employee">
      <div class="card card-inner conversations-card">
        <div class="input-box" id="searchBox">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
            <path fill="var(--bg-color)"
              d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z" />
          </svg>
          <input type="text" id="searchInput" placeholder="Search employee..." data-no-style />
        </div>

        <div class="conversation-list">

          <div
            class="conversation-item button-form"
            data-follow="show-chat"
            data-chat-title="Sarah ↔ Maryam"
            data-chat-subtitle="Brand Director and Customer Operations"
            data-chat-count="12 Messages"
            data-left-name="Sarah"
            data-left-role="Brand Director"
            data-left-avatar="https://i.pravatar.cc/150?img=32"
            data-right-name="Maryam"
            data-right-role="Customer Operations"
            data-right-avatar="https://i.pravatar.cc/150?img=45"
            data-messages='[
              {"side":"left","name":"Sarah","time":"09:10 AM","text":"Exclusive offer passed. Schedule approved."},
              {"side":"right","name":"Maryam","time":"09:14 AM","text":"Great, I will follow up after the meeting."},
              {"side":"left","name":"Sarah","time":"09:18 AM","text":"Final confirmation is needed before closing."},
              {"side":"right","name":"Maryam","time":"09:22 AM","text":"Understood, I will send the details now."}
            ]'
            data-search="Sarah Maryam"
          >
            <div class="conversation-users">
              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=32" alt="Sarah">
                <div class="user-info">
                  <strong>Sarah</strong>
                  <span>Brand Director</span>
                </div>
              </div>

              <div class="conversation-center">
                <span class="conversation-label">View</span>
                <div class="conversation-line"></div>
              </div>

              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=45" alt="Maryam">
                <div class="user-info">
                  <strong>Maryam</strong>
                  <span>Customer Operations</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="conversation-item button-form"
            data-follow="show-chat"
            data-chat-title="Omar ↔ Khaled"
            data-chat-subtitle="VIP Consultant and Premium Sales"
            data-chat-count="8 Messages"
            data-left-name="Omar"
            data-left-role="VIP Consultant"
            data-left-avatar="https://i.pravatar.cc/150?img=12"
            data-right-name="Khaled"
            data-right-role="Premium Sales"
            data-right-avatar="https://i.pravatar.cc/150?img=18"
            data-messages='[
              {"side":"left","name":"Omar","time":"10:05 AM","text":"Client status update requested."},
              {"side":"right","name":"Khaled","time":"10:08 AM","text":"Details sent and awaiting confirmation."},
              {"side":"left","name":"Omar","time":"10:15 AM","text":"Please follow up before noon."}
            ]'
            data-search="Omar Khaled"
          >
            <div class="conversation-users">
              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=12" alt="Omar">
                <div class="user-info">
                  <strong>Omar</strong>
                  <span>VIP Consultant</span>
                </div>
              </div>

              <div class="conversation-center">
                <span class="conversation-label">View</span>
                <div class="conversation-line"></div>
              </div>

              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=18" alt="Khaled">
                <div class="user-info">
                  <strong>Khaled</strong>
                  <span>Premium Sales</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="conversation-item button-form"
            data-follow="show-chat"
            data-chat-title="Layla ↔ Jood"
            data-chat-subtitle="Experience Coordinator and Digital Experience"
            data-chat-count="15 Messages"
            data-left-name="Layla"
            data-left-role="Experience Coordinator"
            data-left-avatar="https://i.pravatar.cc/150?img=47"
            data-right-name="Jood"
            data-right-role="Digital Experience"
            data-right-avatar="https://i.pravatar.cc/150?img=24"
            data-messages='[
              {"side":"left","name":"Layla","time":"11:00 AM","text":"Design beta version is ready."},
              {"side":"right","name":"Jood","time":"11:06 AM","text":"Review changes and send notes."},
              {"side":"left","name":"Layla","time":"11:12 AM","text":"Approved the final interface."}
            ]'
            data-search="Layla Jood"
          >
            <div class="conversation-users">
              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=47" alt="Layla">
                <div class="user-info">
                  <strong>Layla</strong>
                  <span>Experience Coordinator</span>
                </div>
              </div>

              <div class="conversation-center">
                <span class="conversation-label">View</span>
                <div class="conversation-line"></div>
              </div>

              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=24" alt="Jood">
                <div class="user-info">
                  <strong>Jood</strong>
                  <span>Digital Experience</span>
                </div>
              </div>
            </div>
          </div>

          <div
            class="conversation-item button-form"
            data-follow="show-chat"
            data-chat-title="Nawaf ↔ Abdullah"
            data-chat-subtitle="Partnership Manager and Executive Relations"
            data-chat-count="9 Messages"
            data-left-name="Nawaf"
            data-left-role="Partnership Manager"
            data-left-avatar="https://i.pravatar.cc/150?img=9"
            data-right-name="Abdullah"
            data-right-role="Executive Relations"
            data-right-avatar="https://i.pravatar.cc/150?img=56"
            data-messages='[
              {"side":"left","name":"Nawaf","time":"12:20 PM","text":"Partnership update is ready."},
              {"side":"right","name":"Abdullah","time":"12:24 PM","text":"Legal term coordination is in progress."},
              {"side":"left","name":"Nawaf","time":"12:30 PM","text":"Close follow-up scheduled."}
            ]'
            data-search="Nawaf Abdullah"
          >
            <div class="conversation-users">
              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=9" alt="Nawaf">
                <div class="user-info">
                  <strong>Nawaf</strong>
                  <span>Partnership Manager</span>
                </div>
              </div>

              <div class="conversation-center">
                <span class="conversation-label">View</span>
                <div class="conversation-line"></div>
              </div>

              <div class="user-card">
                <img src="https://i.pravatar.cc/150?img=56" alt="Abdullah">
                <div class="user-info">
                  <strong>Abdullah</strong>
                  <span>Executive Relations</span>
                </div>
              </div>
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
            </div>
          </div>
          <div class="tasks-list">
            <div class="task-item button-form" data-follow="show-task">
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
                <button class="task-menu-btn" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item button-form" data-follow="show-task">
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
                <button class="task-menu-btn" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item button-form" data-follow="show-task">
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
                <button class="task-menu-btn" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item button-form" data-follow="show-task">
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
                <button class="task-menu-btn" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
            <div class="task-item button-form" data-follow="show-task">
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
                <button class="task-menu-btn" aria-label="More options">
                  <span></span>
                  <span></span>
                  <span></span>
                </button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/reports/employee-report.js') }}"></script>
@endsection
