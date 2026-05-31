@extends('company.programmers.main')

@section('title', 'Employee Analysis')

@section('page')
  <div class="employee-analysis">
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
    <div class="main-card">
      <div class="card">
        <img src="{{ asset("images/content/sections/person.jpg") }}" alt="No img" loading="lazy">
        <div class="content">
          <div>
            <h1>Kareem Abogabal</h1>
            <p>Software engineer</p>
          </div>
          <button class="show-det-employee">Show</button>
        </div>
      </div>
      <div class="top card-inner progress">
        <h1>progress</h1>
        <canvas class="chart-bar"></canvas>
      </div>
      <div class="top card-inner chart-card">
        <div class="card-header">
          <h3 class="card-title">Performance Circle</h3>
        </div>
        <div class="charts-circle">
          <canvas class="chart-circle"></canvas>
          <div class="chart-center">
            <div class="big">02:35</div>
            <div class="small">Work Time</div>
          </div>
        </div>
      </div>
      <div class="projects-card card-inner">
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
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge design">Design</span>
            </div>
            <h4>Premium Dashboard Redesign</h4>
            <p>Improving the executive experience with a cleaner visual hierarchy.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 72%"></span></div>
              <div class="mony">
                <small>72% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge system">System</span>
            </div>
            <h4>Branch Performance Engine</h4>
            <p>Tracking tasks, KPIs, and internal productivity in real time.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 48%"></span></div>
              <div class="mony">
                <small>48% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
          <div class="project-card">
            <div class="project-top">
              <span class="project-badge security">Security</span>
            </div>
            <h4>Access Monitoring Layer</h4>
            <p>Protecting branch data with stronger audit and login tracking.</p>
            <div class="project-footer">
              <div class="project-progress"><span style="width: 91%"></span></div>
              <div class="mony">
                <small>91% done</small>
                <span class="system">EGP 21,000</span>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="card-inner device-card">
        <div class="device-card__header">
          <div class="device-card__title">
            <span class="device-card__badge">
              <svg viewBox="0 0 24 24" aria-hidden="true">
                <path d="M7 6.5h10A2.5 2.5 0 0 1 19.5 9v6A2.5 2.5 0 0 1 17 17.5H7A2.5 2.5 0 0 1 4.5 15V9A2.5 2.5 0 0 1 7 6.5Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                <path d="M9 19.5h6" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
              </svg>
            </span>
            <div>
              <h3>Devices</h3>
            </div>
          </div>
        </div>
        <div class="device-card__list">
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="3" y="6" width="18" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 20h8" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>Device Name</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>MacBook Air</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <circle cx="12" cy="12" r="10" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M12 12l8.5 0A10 10 0 0 1 7 21Z" fill="var(--colorSVG2)" opacity=".92"/>
                    <path d="M12 12L7 21A10 10 0 0 1 3 7Z" fill="var(--colorSVG1)" opacity=".92"/>
                    <circle cx="12" cy="12" r="4.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Chrome Version</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>Google Chrome · 129.0.0</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <rect x="4" y="7" width="16" height="10" rx="2" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <path d="M8 11h8M8 14h5" stroke="var(--colorSVG2)" stroke-width="1.6" stroke-linecap="round"/>
                  </svg>
                </span>
                <strong>IP / MAC</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>192.168.1.24 · 9A:BC:31:EF:22:10</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M6 3h12v18H6z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="17" r="1" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Phone / Email</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>+20 100 123 4567 · user@company.com</p>
            </div>
          </div>
          <div class="device-item">
            <button class="device-item__toggle" type="button" aria-expanded="false">
              <span class="device-item__left">
                <span class="device-item__icon">
                  <svg viewBox="0 0 24 24" aria-hidden="true">
                    <path d="M12 21s7-4.5 7-11a7 7 0 1 0-14 0c0 6.5 7 11 7 11Z" fill="none" stroke="var(--colorSVG1)" stroke-width="1.6"/>
                    <circle cx="12" cy="10" r="2.5" fill="var(--colorSVG2)"/>
                  </svg>
                </span>
                <strong>Location</strong>
              </span>
              <span class="device-item__arrow">
                <svg viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M9 6l6 6-6 6" fill="none" stroke="var(--colorSVG2)" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                </svg>
              </span>
            </button>
            <div class="device-item__panel">
              <p>New Cairo · Main Branch</p>
            </div>
          </div>
        </div>
      </div>
      <x-components::company.activtyRate />
    </div>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/analytics/employee-analysis.js') }}"></script>
@endsection
