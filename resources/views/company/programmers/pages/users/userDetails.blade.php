@extends('company.programmers.main')

@section('title', 'Users')

@section('page')
  <div class="user-deitels">
    <section class="hero card-inner">
      <div class="hero-grid">
        <div class="main-profile">
          <div class="profile">
            <img id="empImage" class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="Employee Photo">
            <div class="title-wrap">
              <h1 id="empName" class="name">Omar El-Sherif</h1>
              <p id="empRole" class="role">Senior Creative Director • Full Time<br>omar.sherif@company.com</p>
              <div class="chips">
                <span id="empBranch" class="chip">Head Office</span>
                <span id="empStatus" class="chip">Active</span>
                <span id="empId" class="chip">Employee ID: 1</span>
              </div>
            </div>
          </div>
          <div class="promotion">
            <svg width="70" height="70" viewBox="0 0 65 65" fill="var(--colorSVG1)" aria-hidden="true">
              <path d="M11 29L21 16H43L53 29L32 53L11 29Z" stroke="var(--colorSVG2)"></path>
              <path d="M21 16L32 29L43 16" stroke="var(--colorSVG2)"></path>
              <path d="M19 29H45" stroke="var(--colorSVG2)"></path>
              <path d="M32 29V40" stroke="var(--colorSVG2)"></path>
            </svg>
            <h1>Creativity</h1>
          </div>
        </div>
        <div class="actions">
          <div class="row">
            <div class="manager-box card-inner" style="margin-top:0;">
              <div class="manager-icon">
                <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                  <path d="M12 12.75C14.0711 12.75 15.75 11.0711 15.75 9C15.75 6.92893 14.0711 5.25 12 5.25C9.92893 5.25 8.25 6.92893 8.25 9C8.25 11.0711 9.92893 12.75 12 12.75Z" stroke="var(--text-color)" stroke-width="1.7"/>
                  <path d="M4.5 19.5C5.999 16.875 8.736 15.375 12 15.375C15.264 15.375 18.001 16.875 19.5 19.5" stroke="var(--text-color)" stroke-width="1.7" stroke-linecap="round"/>
                </svg>
              </div>
              <a href="#" class="manager-text">
                <span class="small">Team Manager</span>
                <span id="empManager" class="big">Aly Hassan</span>
              </a>
            </div>
            <div class="manager-box card-inner" style="margin-top:0;">
              <div class="manager-icon">
                <svg width="30" height="30" viewBox="-20 0 160 130" xmlns="http://www.w3.org/2000/svg" fill="none">
                  <!-- Left -->
                  <g opacity="0.5">
                    <circle cx="30" cy="45" r="16" fill="var(--colorSVG2)" />
                    <path d="M5 95 Q5 70 22 70 L42 70 Q60 70 60 95 Z" fill="var(--colorSVG2)" />
                  </g>
                  <!-- Right -->
                  <g opacity="0.5">
                    <circle cx="95" cy="45" r="16" fill="var(--colorSVG2)" />
                    <path d="M70 95 Q70 70 88 70 L108 70 Q125 70 125 95 Z" fill="var(--colorSVG2)" />
                  </g>
                  <!-- Mid -->
                  <g>
                    <circle cx="60" cy="40" r="20" fill="var(--colorSVG2)" />
                    <path d="M25 95 Q25 65 45 65 L75 65 Q95 65 95 95 Z" fill="var(--colorSVG2)" />
                    <line x1="70" y1="80" x2="82" y2="80" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" />
                  </g>
                </svg>
              </div>
              <div class="manager-text">
                <span class="small">Team Name</span>
                <span id="empTeam" class="big">Creative Team</span>
              </div>
            </div>
          </div>
          <div class="action-row">
            <a href="employees.html" class="btn btn-soft">Back</a>
            <button class="btn btn-primary" onclick="downloadFile('contract')">Download Contract</button>
            <button class="btn btn-soft" onclick="downloadFile('cv')">Download CV</button>
            <form action="">
              <button aria-label="Delete item" class="delete-button">
                <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                  <g id="trash-can">
                    <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                    <g transform-origin="12 18" id="lid-group">
                      <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                      <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                    </g>
                  </g>
                </svg>
              </button>
            </form>
          </div>
        </div>
      </div>
    </section>
    <form class="grid-2 card-inner">
      <section class="panel">
        <h2 class="section-title">Personal & Work Information</h2>
        <div class="info-grid">
          <div class="perant-input">
            <label for="name" data-no-active>Employee Name</label>
            <input type="text" id="name" name="name" placeholder="Enter employee name">
          </div>
          <div class="perant-input">
            <label for="job" data-no-active>Job Title</label>
            <input type="text" id="job" name="job" placeholder="Enter job title">
          </div>
          <div class="perant-input">
            <label for="job-role" data-no-active>Job role</label>
            <input type="text" id="job-role" name="job-role" placeholder="Job role">
          </div>
          <div class="perant-input">
            <label for="phone" data-no-active>Phone Number</label>
            <input type="tel" id="phone" name="phone" placeholder="+20 100 000 0000">
          </div>
          <div class="perant-input">
            <label for="email" data-no-active>Email</label>
            <input type="email" id="email" name="email" placeholder="employee@gmail.com">
          </div>
          <div class="perant-input">
            <label for="email-company" data-no-active>Email company</label>
            <input type="email" id="email-company" name="email-company" placeholder="employee@company.com">
          </div>
          <div class="perant-input full-row">
            <label for="salary" data-no-active>Salary</label>
            <input type="text" id="salary" name="salary" placeholder="Enter salary">
          </div>
          <div class="info-box card-inner map-box">
            <div class="map-frame">
              <iframe
                src="https://www.google.com/maps?q=New%20Cairo%2C%20Egypt&z=13&output=embed"
                loading="lazy"
                referrerpolicy="no-referrer-when-downgrade"
                allowfullscreen>
              </iframe>
            </div>
          </div>
        </div>
      </section>
      <section class="panel">
        <h2 class="section-title">Permissions</h2>
        <div class="switches">
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="dashboard">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Dashboard Access</strong>
              <small>View analytics and summaries</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="projects">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Projects Access</strong>
              <small>Create and manage projects</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="history">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>History Access</strong>
              <small>See logs and activity history</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="employees">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Employees Access</strong>
              <small>Manage staff records</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="finance">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Finance Access</strong>
              <small>View salaries and costs</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
          <label class="switch-card" data-style data-no-active>
            <input type="checkbox" name="permissions[]" value="security">
            <span class="switch-slider"></span>
            <span class="switch-label">
              <strong>Security Access</strong>
              <small>Control sensitive actions</small>
            </span>
          </label>
        </div>
      </section>
      <button class="btn-send" type="submit">
        <svg class="cube-svg" width="30" height="30" viewBox="0 0 500 500" xmlns="http://www.w3.org/2000/svg">
          <defs>
            <linearGradient id="top-1">
              <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
              <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
            </linearGradient>
            <linearGradient id="left-1">
              <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
              <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
            </linearGradient>
            <linearGradient id="right-1">
              <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}"/>
              <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}"/>
            </linearGradient>
          </defs>
          <polygon class="cube-top" points="250,60 420,160 250,260 80,160" fill="url(#top-1)" />
          <polygon class="cube-left" points="80,160 250,260 250,440 80,340" fill="url(#left-1)" />
          <polygon class="cube-right" points="420,160 250,260 250,440 420,340" fill="url(#right-1)" />
        </svg>
        <p>Send</p>
      </button>
    </form>
    <div class="grid-2">
      <section class="panel card-inner">
        <h2 class="section-title">Team Share</h2>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </section>
      <section class="panel card-inner">
        <h2 class="section-title">Yearly Performance</h2>
        <div class="chart-box">
          <div class="chart-label">
            <span>Performance across the year</span>
            <span>12 Months</span>
          </div>
          <canvas class="chart-bar"></canvas>
        </div>
      </section>
    </div>
    <div class="grid-2">
      <section class="panel card-inner">
        <h2 class="section-title">Promotions</h2>
        <div id="promotionsList" class="promotions-list">
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Promoted to Creative Director</div>
                <div class="promotion-date">March 2025</div>
              </div>
            </div>
            <p class="promotion-desc">Led the visual identity upgrade for premium brand systems.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Senior Strategy Role</div>
                <div class="promotion-date">June 2024</div>
              </div>
            </div>
            <p class="promotion-desc">Expanded responsibilities in client direction and team leadership.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Promoted to Creative Director</div>
                <div class="promotion-date">March 2025</div>
              </div>
            </div>
            <p class="promotion-desc">Led the visual identity upgrade for premium brand systems.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Senior Strategy Role</div>
                <div class="promotion-date">June 2024</div>
              </div>
            </div>
            <p class="promotion-desc">Expanded responsibilities in client direction and team leadership.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Promoted to Creative Director</div>
                <div class="promotion-date">March 2025</div>
              </div>
            </div>
            <p class="promotion-desc">Led the visual identity upgrade for premium brand systems.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Senior Strategy Role</div>
                <div class="promotion-date">June 2024</div>
              </div>
            </div>
            <p class="promotion-desc">Expanded responsibilities in client direction and team leadership.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Promoted to Creative Director</div>
                <div class="promotion-date">March 2025</div>
              </div>
            </div>
            <p class="promotion-desc">Led the visual identity upgrade for premium brand systems.</p>
          </div>
          <div class="promotion-item card-inner">
            <div class="promotion-top">
              <div class="promotion-icon">
                <svg width="22" height="22" viewBox="0 0 24 24" fill="none">
                  <path d="M12 15.5C16 15.5 19 12.8 19 9.3C19 6.1 16.3 4 12 4C7.7 4 5 6.1 5 9.3C5 12.8 8 15.5 12 15.5Z" stroke="var(--text-color)" stroke-width="1.6"/>
                  <path d="M12 15.5V20" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                  <path d="M9.5 20H14.5" stroke="var(--text-color)" stroke-width="1.6" stroke-linecap="round"/>
                </svg>
              </div>
              <div class="promotion-text">
                <div class="promotion-name">Senior Strategy Role</div>
                <div class="promotion-date">June 2024</div>
              </div>
            </div>
            <p class="promotion-desc">Expanded responsibilities in client direction and team leadership.</p>
          </div>
        </div>
      </section>
      <section class="panel card-inner">
        <h2 class="section-title">Projects</h2>
        <div id="tasksList" class="tasks">
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Brand system redesign</div>
              <div class="sub">January 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Campaign supervision</div>
              <div class="sub">February 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">VIP client presentation</div>
              <div class="sub">March 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Annual team review</div>
              <div class="sub">April 2026</div>
            </div>
            <div class="task-status">In progress</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Brand system redesign</div>
              <div class="sub">January 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Campaign supervision</div>
              <div class="sub">February 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">VIP client presentation</div>
              <div class="sub">March 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Annual team review</div>
              <div class="sub">April 2026</div>
            </div>
            <div class="task-status">In progress</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Brand system redesign</div>
              <div class="sub">January 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Campaign supervision</div>
              <div class="sub">February 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">VIP client presentation</div>
              <div class="sub">March 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Annual team review</div>
              <div class="sub">April 2026</div>
            </div>
            <div class="task-status">In progress</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Brand system redesign</div>
              <div class="sub">January 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Campaign supervision</div>
              <div class="sub">February 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">VIP client presentation</div>
              <div class="sub">March 2026</div>
            </div>
            <div class="task-status">Completed</div>
          </div>
          <div class="task-row card-inner">
            <div class="task-left">
              <div class="title">Annual team review</div>
              <div class="sub">April 2026</div>
            </div>
            <div class="task-status">In progress</div>
          </div>
        </div>
      </section>
    </div>
    <div class="main-tables">
      <div class="row">
        <div class="main-table">
          <div class="head">
            <h1>Salary</h1>
            <span>21,000 EGP</span>
          </div>
          <x-components::table :header="['Monys', 'Discounts', 'Date', 'Details']">
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>21,000 EGP</p>
                <p>--</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Accountant</span><strong>Ahmed Abogabal</strong></div>
                    <div><span>Accountant phone</span><strong>01092320210</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </x-components::table>
        </div>
        <div class="main-table">
          <div class="head">
            <h1>Logins</h1>
            <span>1000 operations</span>
          </div>
          <x-components::table :header="['Name', 'Status', 'Date', 'Details']">
            <div class="row" data-row>
              <div class="content">
                <p>Kareem Abogabal</p>
                <p data-state="login">login</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Device</span><strong>MacBook Pro</strong></div>
                    <div><span>Location</span><strong>Damietta, EG</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                    <div><span>Browser</span><strong>Chrome 147</strong></div>
                    <div><span>Type</span><strong>Security</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>Kareem Abogabal</p>
                <p data-state="login">login</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Device</span><strong>MacBook Pro</strong></div>
                    <div><span>Location</span><strong>Damietta, EG</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                    <div><span>Browser</span><strong>Chrome 147</strong></div>
                    <div><span>Type</span><strong>Security</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>Kareem Abogabal</p>
                <p data-state="login">login</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Device</span><strong>MacBook Pro</strong></div>
                    <div><span>Location</span><strong>Damietta, EG</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                    <div><span>Browser</span><strong>Chrome 147</strong></div>
                    <div><span>Type</span><strong>Security</strong></div>
                  </div>
                </div>
              </div>
            </div>
            <div class="row" data-row>
              <div class="content">
                <p>Kareem Abogabal</p>
                <p data-state="login">login</p>
                <p>01 Apr 2026</p>
                <button type="button" class="expand-btn" aria-label="Expand row">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="row-details">
                <div class="details-card card-inner">
                  <div class="details-head">
                    <strong>Operation Details</strong>
                    <span class="tag">Premium</span>
                  </div>
                  <div class="details-grid">
                    <div><span>ID</span><strong>#OP-1001</strong></div>
                    <div><span>Device</span><strong>MacBook Pro</strong></div>
                    <div><span>Location</span><strong>Damietta, EG</strong></div>
                    <div><span>IP</span><strong>192.168.1.22</strong></div>
                    <div><span>Browser</span><strong>Chrome 147</strong></div>
                    <div><span>Type</span><strong>Security</strong></div>
                  </div>
                </div>
              </div>
            </div>
          </x-components::table>
        </div>
      </div>
    </div>
    <section class="panel card-inner">
      <h2 class="section-title">Documents</h2>
      <div class="download-grid">
        <div class="download-box card-inner">
          <div class="name">Employment Contract</div>
          <p class="desc">Download the employee contract file from this page.</p>
          <button class="btn btn-primary" onclick="downloadFile('contract')">Download Contract</button>
        </div>
        <div class="download-box card-inner">
          <div class="name">CV File</div>
          <p class="desc">Download the employee CV in a clean premium layout.</p>
          <button class="btn btn-soft" onclick="downloadFile('cv')">Download CV</button>
        </div>
      </div>
    </section>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/users/user-details.js') }}"></script>
@endsection
