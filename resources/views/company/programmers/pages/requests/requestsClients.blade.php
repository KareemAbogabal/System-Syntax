@extends('company.programmers.main')

@section('title', 'Requests Clients')

@section('page')
  <x-components::company.popupForm header="Project acceptance" description="Accepting a project means that the entity you belong to grows and takes you with it" dataFollowButton="project-acceptance" pathPostForm="#">
    <div class="row">
      <div class="perant-input">
        <label for="vacation-start">Start Date</label>
        <input type="date" id="vacation-start" name="vacation_start" placeholder="Select start date">
      </div>
      <div class="perant-input">
        <label for="vacation-end">End Date</label>
        <input type="date" id="vacation-end" name="vacation_end" placeholder="Select End date">
      </div>
      <div class="perant-input custom-select">
        <label for="task-status">Project type</label>
        <select id="task-status">
          <option value="programming" class="programming">programming</option>
          <option value="wordPress" class="wordPress">wordPress</option>
          <option value="amendment" class="amendment">amendment</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="select-state-project select-owners">
        <x-components::company.entityPicker size="1" name="project owner" show="promotion" />
      </div>
      <div class="select-state-project select-projects hidden">
        <x-components::company.entityPicker size="1" name="projects" />
      </div>
    </div>
    <div class="perant-input">
      <label for="reason-for-acceptance">Reason for acceptance</label>
      <textarea id="reason-for-acceptance" placeholder="Reason for acceptance"></textarea>
    </div>
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Project rejected" description="This project might not be up to our company's standards. Don't despair, have a good day." dataFollowButton="project-rejection" pathPostForm="#">
    <div class="perant-input">
      <label for="reason-for-rejection">Reason for rejection</label>
      <textarea id="reason-for-rejection" placeholder="Reason for rejection"></textarea>
    </div>
  </x-components::company.popupForm>
  <div class="requests-page">
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
    <x-components::company.fillterBar :pills="['All', 'request', 'reviewing', 'accepted', 'completed', 'blocked', 'pending']" />
    <x-components::table :header="['#', 'Name', 'Name Project', 'Status', 'Date', 'Details']">
      <div class="row" data-row data-status="requested">
        <div class="content">
          <p>1</p>
          <p class="search">Kareem Abogabal</p>
          <p>Front End</p>
          <p data-state="request">request</p>
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
              <div class="full-row">
                <span>Description</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="reviewing">
        <div class="content">
          <p>2</p>
          <p class="search">Mona Ahmed</p>
          <p>UI/UX</p>
          <p data-state="reviewing">reviewing</p>
          <p>02 Apr 2026</p>
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
              <div><span>ID</span><strong>#OP-1002</strong></div>
              <div><span>Device</span><strong>iPhone 15 Pro</strong></div>
              <div><span>Location</span><strong>Cairo, EG</strong></div>
              <div><span>IP</span><strong>192.168.1.33</strong></div>
              <div><span>Browser</span><strong>Safari 17</strong></div>
              <div><span>Type</span><strong>Design</strong></div>
              <div class="full-row">
                <span>Description</span>
                <p>This request is under review and waiting for final decision.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="accepted">
        <div class="content">
          <p>3</p>
          <p class="search">Ahmed Mostafa</p>
          <p>Backend</p>
          <p data-state="accepted">accepted</p>
          <p>03 Apr 2026</p>
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
              <div><span>ID</span><strong>#OP-1003</strong></div>
              <div><span>Device</span><strong>Dell XPS</strong></div>
              <div><span>Location</span><strong>Alexandria, EG</strong></div>
              <div><span>IP</span><strong>192.168.1.44</strong></div>
              <div><span>Browser</span><strong>Edge 146</strong></div>
              <div><span>Type</span><strong>Access</strong></div>
              <div class="full-row">
                <span>Description</span>
                <p>The request has been accepted and approved successfully.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="rejected">
        <div class="content">
          <p>4</p>
          <p class="search">Sarah Ali</p>
          <p>Marketing</p>
          <p data-state="rejected">rejected</p>
          <p>04 Apr 2026</p>
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
              <div><span>ID</span><strong>#OP-1004</strong></div>
              <div><span>Device</span><strong>MacBook Air</strong></div>
              <div><span>Location</span><strong>Giza, EG</strong></div>
              <div><span>IP</span><strong>192.168.1.55</strong></div>
              <div><span>Browser</span><strong>Chrome 147</strong></div>
              <div><span>Type</span><strong>Request</strong></div>
              <div class="full-row">
                <span>Description</span>
                <p>The request was rejected after validation checks.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="completed">
        <div class="content">
          <p>5</p>
          <p class="search">Omar Khaled</p>
          <p>Operations</p>
          <p data-state="completed">completed</p>
          <p>05 Apr 2026</p>
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
              <div><span>ID</span><strong>#OP-1005</strong></div>
              <div><span>Device</span><strong>Lenovo ThinkPad</strong></div>
              <div><span>Location</span><strong>Port Said, EG</strong></div>
              <div><span>IP</span><strong>192.168.1.66</strong></div>
              <div><span>Browser</span><strong>Firefox 126</strong></div>
              <div><span>Type</span><strong>Task</strong></div>
              <div class="full-row">
                <span>Description</span>
                <p>The request has been completed successfully.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>

      <div class="row" data-row data-status="blocked">
        <div class="content">
          <p>6</p>
          <p class="search">Nour Hany</p>
          <p>Support</p>
          <p data-state="blocked">blocked</p>
          <p>06 Apr 2026</p>
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
              <div><span>ID</span><strong>#OP-1006</strong></div>
              <div><span>Device</span><strong>Surface Laptop</strong></div>
              <div><span>Location</span><strong>Port Said, EG</strong></div>
              <div><span>IP</span><strong>192.168.1.77</strong></div>
              <div><span>Browser</span><strong>Chrome 147</strong></div>
              <div><span>Type</span><strong>Security</strong></div>
              <div class="full-row">
                <span>Description</span>
                <p>This request is blocked by system policy.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access button-form" data-follow="project-acceptance">Accept</button>
              <button type="button" class="block button-form" data-follow="project-rejection">Reject</button>
            </div>
          </div>
        </div>
      </div>
    </x-components::table>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/requests/requests-clients.js') }}"></script>
@endsection
