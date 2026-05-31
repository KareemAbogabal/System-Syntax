@extends('company.programmers.main')

@section('title', 'Requests Company')

@section('page')
  <div class="requests-page">
    <x-components::company.popupForm header="Add Request" description="You are completely free to send requests to the company and you are welcome to listen." dataFollowButton="add-request" pathPostForm="#">
      <div class="radio-container">
        <input checked id="official-request" name="radio" type="radio" />
        <label for="official-request">Official</label>
        <input id="personal-request" name="radio" type="radio" />
        <label for="personal-request">Personal</label>
        <div class="glider-container">
          <div class="glider"></div>
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="personal-subject">Personal subject</label>
          <input type="text" id="personal-subject" placeholder="Personal subject">
        </div>
        <div class="perant-input custom-select">
          <label for="task-status">Official subject</label>
          <select id="task-status">
            <optgroup label="Human Resources">
              <option value="transfer-from-team" class="transfer-from-team">Transfer from team</option>
              <option value="transfer-from-branch" class="transfer-from-branch">Transfer from branch</option>
              <option value="salary-review" class="salary-review">Salary review</option>
              <option value="vacation-request" class="vacation-request">Vacation request</option>
              <option value="remote-work-request" class="remote-work-request">Remote work request</option>
              <option value="role-change" class="role-change">Role change</option>
            </optgroup>
            <optgroup label="Projects">
              <option value="job-application-for-project" class="job-application-for-project">Job application for project</option>
              <option value="join-project-team" class="join-project-team">Join project team</option>
              <option value="leave-project-team" class="leave-project-team">Leave project team</option>
              <option value="project-extension" class="project-extension">Project extension request</option>
              <option value="deadline-change" class="deadline-change">Deadline change request</option>
            </optgroup>
            <optgroup label="Administrative">
              <option value="equipment-request" class="equipment-request">Equipment request</option>
            </optgroup>
          </select>
        </div>
      </div>
      <div class="row">
        <div class="box-request request-team">
          <x-components::company.entityPicker name="Teams" />
        </div>
        <div class="box-request request-branches hidden">
          <x-components::company.entityPicker name="Branches" />
        </div>
        <div class="box-request request-projects hidden">
          <x-components::company.entityPicker name="projects" />
        </div>
        <div class="box-request request-extra-fields hidden">
        </div>
        <div class="perant-input">
          <label for="name-task">description</label>
          <textarea id="name-task" placeholder="Description"></textarea>
        </div>
      </div>
    </x-components::company.popupForm>
    <div class="company-add-card card-inner">
      <div class="left">
        <h3>Company Requests</h3>
        <span class="sub">Assign and control Company</span>
      </div>
      <div class="right">
        <button class="add-company button-form" data-follow="add-request">Send Request</button>
      </div>
    </div>
    <x-components::company.fillterBar :pills="['All', 'requested', 'reviewing', 'accepted', 'completed', 'blocked', 'pending']" />
    <x-components::table :header="['#', 'Name', 'Rank', 'Subject', 'Status', 'Date', 'Details']">
      <div class="row" data-row data-status="requested">
        <div class="content">
          <p>1</p>
          <p class="search">Kareem Abogabal</p>
          <p>creativity</p>
          <p>Moving from Team</p>
          <p data-state="requested">requested</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="reviewing">
        <div class="content">
          <p>2</p>
          <p class="search">Mona Ahmed</p>
          <p>creativity</p>
          <p>Moving from Team</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>This request is under review and waiting for final decision.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="accepted">
        <div class="content">
          <p>3</p>
          <p class="search">Ahmed Mostafa</p>
          <p>creativity</p>
          <p>Moving from Team</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>The request has been accepted and approved successfully.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="rejected">
        <div class="content">
          <p>4</p>
          <p class="search">Sarah Ali</p>
          <p>creativity</p>
          <p>Moving from Team</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>The request was rejected after validation checks.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="completed">
        <div class="content">
          <p>5</p>
          <p class="search">Omar Khaled</p>
          <p>creativity</p>
          <p>Moving from Team</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>The request has been completed successfully.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row data-status="blocked">
        <div class="content">
          <p>6</p>
          <p class="search">Nour Hany</p>
          <p>creativity</p>
          <p>Moving from Team</p>
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
              <div><span>Team</span><strong>Front-end</strong></div>
              <div><span>Team Manger</span><strong>Ahmed Aboabal</strong></div>
              <div class="full-row">
                <span>Subject Details</span>
                <p>Client has sent a new request and it is waiting for review.</p>
              </div>
              <div class="full-row">
                <span>Description</span>
                <p>This request is blocked by system policy.</p>
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
    </x-components::table>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/requests/requests-company.js') }}"></script>
@endsection
