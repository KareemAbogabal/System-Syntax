@extends("company.programmers.main")

@section("title", "History")

@section("page")
  <div class="history-page">
    <x-components::company.popupShow dataFollowButton="show-task">
      <div class="card-show" data-task-popup>
        <div class="task-popup-head">
          <div class="task-popup-title">
            <span class="task-popup-kicker">Task Details</span>
            <h2 data-task-title>Task Name</h2>
            <p data-task-description-short>Task description appears here</p>
          </div>
          <div class="task-popup-badge" data-task-progress-text>0%</div>
        </div>
        <div class="task-popup-grid">
          <div class="task-popup-box">
            <span>Team</span>
            <strong data-task-team>Design Team</strong>
          </div>
          <div class="task-popup-box">
            <span>Team Leader</span>
            <strong data-task-leader>Ahmed Ali</strong>
          </div>
          <div class="task-popup-box">
            <span>Assigned To</span>
            <strong data-task-assignee>Kareem</strong>
          </div>
          <div class="task-popup-box">
            <span>Progress</span>
            <strong data-task-progress-number>0%</strong>
          </div>
        </div>
        <div class="task-popup-section">
          <div class="task-popup-label">Description</div>
          <p data-task-description>
            Task description will be shown here.
          </p>
        </div>
        <div class="task-popup-section">
          <div class="task-popup-label">Uploaded Files</div>
          <div class="task-files" data-task-files></div>
        </div>
        <div class="task-popup-section">
          <div class="task-popup-label">Progress</div>
          <div class="task-progress">
            <div class="task-progress-track">
              <div class="task-progress-fill" data-task-progress-bar></div>
            </div>
          </div>
        </div>
      </div>
    </x-components::company.popupShow>
    <div class="stats-grid">
      <div class="stat-card card-inner">
        <span class="label">Total Operations</span>
        <strong>1,248</strong>
        <small>+12% this month</small>
      </div>
      <div class="stat-card card-inner">
        <span class="label">Total Tasks</span>
        <strong>342</strong>
        <small>Active across all teams</small>
      </div>
      <div class="stat-card card-inner">
        <span class="label">Logged In</span>
        <strong>98</strong>
        <small>Live now</small>
      </div>
      <div class="stat-card card-inner">
        <span class="label">Not Logged In</span>
        <strong>14</strong>
        <small>Needs attention</small>
      </div>
    </div>
    @php
      $events = [
        [
          'class' => 'event-green',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Team Meeting',
          'description' => 'Daily coordination, blockers, and next actions.',
          'progress' => 72,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '1:00 AM - 3:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=12',
            'https://i.pravatar.cc/100?img=15',
          ],
        ],
        [
          'class' => 'event-green',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Team Meeting',
          'description' => 'Same slot for multiple overlapping attendees.',
          'progress' => 58,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '1:00 AM - 3:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=12',
            'https://i.pravatar.cc/100?img=15',
          ],
        ],
        [
          'class' => 'event-green',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Team Meeting',
          'description' => 'Parallel task block for operations team.',
          'progress' => 80,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '1:00 AM - 3:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=12',
            'https://i.pravatar.cc/100?img=15',
          ],
        ],
        [
          'class' => 'event-green',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Team Meeting',
          'description' => 'Overlap copy for stress-testing layout.',
          'progress' => 35,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '1:00 AM - 3:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=12',
            'https://i.pravatar.cc/100?img=15',
          ],
        ],
        [
          'class' => 'event-green',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Team Meeting',
          'description' => 'Five stacked events in the same time block.',
          'progress' => 90,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '1:00 AM - 3:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=12',
            'https://i.pravatar.cc/100?img=15',
          ],
        ],
        [
          'class' => 'event-purple',
          'date' => '2025-01-03',
          'period' => 'am',
          'type' => 'security',
          'title' => 'Update UI',
          'description' => 'Refresh interface states and check visibility rules.',
          'progress' => 45,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '2:00 AM - 4:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=20',
          ],
        ],
        [
          'class' => 'event-blue',
          'date' => '2025-01-05',
          'period' => 'am',
          'type' => 'tasks',
          'title' => 'Research Pricing',
          'description' => 'Compare packages and extract key differences.',
          'progress' => 63,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '3:00 AM - 5:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=24',
          ],
        ],
        [
          'class' => 'event-pink',
          'date' => '2025-01-02',
          'period' => 'am',
          'type' => 'login',
          'title' => 'Client Call',
          'description' => 'Discuss scope, feedback, and delivery timing.',
          'progress' => 28,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '4:00 AM - 6:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=32',
            'https://i.pravatar.cc/100?img=33',
          ],
        ],
        [
          'class' => 'event-yellow',
          'date' => '2025-01-07',
          'period' => 'am',
          'type' => 'security',
          'title' => 'Review Security',
          'description' => 'Audit access, permissions, and risk points.',
          'progress' => 85,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '6:00 AM - 8:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=37',
          ],
        ],
        [
          'class' => 'event-green',
          'date' => '2025-01-04',
          'period' => 'am',
          'type' => 'tasks',
          'title' => 'Design Sprint',
          'description' => 'Layout review and visual refinement cycle.',
          'progress' => 52,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '7:00 AM - 9:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=18',
            'https://i.pravatar.cc/100?img=19',
          ],
        ],
        [
          'class' => 'event-purple',
          'date' => '2025-01-06',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Daily Sync',
          'description' => 'Quick alignment before implementation starts.',
          'progress' => 40,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '8:00 AM - 10:00 AM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=22',
          ],
        ],
        [
          'class' => 'event-blue',
          'date' => '2025-01-01',
          'period' => 'am',
          'type' => 'login',
          'title' => 'System Login Check',
          'description' => 'Validate auth flow and session recovery.',
          'progress' => 91,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '10:00 AM - 12:00 PM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=41',
          ],
        ],
        [
          'class' => 'event-pink',
          'date' => '2025-01-05',
          'period' => 'am',
          'type' => 'operations',
          'title' => 'Export Reports',
          'description' => 'Generate delivery reports for stakeholders.',
          'progress' => 67,
          'team' => 'Operations Team',
          'leader' => 'Mona Hassan',
          'assignee' => 'Kareem Ali',
          'files' => [
            'agenda.pdf',
            'minutes.docx', 
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
            'actions.xlsx',
          ],
          'time' => '11:00 AM - 1:00 PM',
          'avatars' => [
            'https://i.pravatar.cc/100?img=45',
          ],
        ],
      ];
    @endphp
    <x-components::company.tasks :events="$events" />
    <x-components::table :header="['Name', 'Role', 'Amount', 'Status', 'Date', 'Details']">
      <div class="row" data-row>
        <div class="content">
          <p class="search"><img src="https://i.pravatar.cc/100?img=12" alt="No Img" loading="lazy">Kareem</p>
          <p>Front End</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
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
            <div class="details-actions">
              <button type="button">View Full Log</button>
              <button type="button">Export</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row>
        <div class="content">
          <p class="search">
            <img src="https://i.pravatar.cc/100?img=18" alt="No Img" loading="lazy">
            Sara
          </p>
          <p>UI Designer</p>
          <p>$450</p>
          <p data-state="pending">pending</p>
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
              <div><span>ID</span><strong>#OP-1002</strong></div>
              <div><span>Device</span><strong>iPad Pro</strong></div>
              <div><span>Location</span><strong>Cairo, EG</strong></div>
              <div><span>IP</span><strong>10.0.0.18</strong></div>
              <div><span>Browser</span><strong>Safari</strong></div>
              <div><span>Type</span><strong>Task</strong></div>
            </div>
            <div class="details-actions">
              <button type="button">View Full Log</button>
              <button type="button">Export</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row>
        <div class="content">
          <p class="search">
            <img src="https://i.pravatar.cc/100?img=24" alt="No Img" loading="lazy">
            Ahmed
          </p>
          <p>Backend Dev</p>
          <p>$620</p>
          <p data-state="overdue">overdue</p>
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
              <div><span>ID</span><strong>#OP-1003</strong></div>
              <div><span>Device</span><strong>Windows Laptop</strong></div>
              <div><span>Location</span><strong>Alexandria, EG</strong></div>
              <div><span>IP</span><strong>172.16.0.44</strong></div>
              <div><span>Browser</span><strong>Edge</strong></div>
              <div><span>Type</span><strong>Operation</strong></div>
            </div>
            <div class="details-actions">
              <button type="button">View Full Log</button>
              <button type="button">Export</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row>
        <div class="content">
          <p class="search">
            <img src="https://i.pravatar.cc/100?img=32" alt="No Img" loading="lazy">
            Mona
          </p>
          <p>Project Manager</p>
          <p>$980</p>
          <p data-state="finished">finished</p>
          <p>07 Apr 2026</p>
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
              <div><span>Location</span><strong>Port Said, EG</strong></div>
              <div><span>IP</span><strong>192.168.10.7</strong></div>
              <div><span>Browser</span><strong>Chrome</strong></div>
              <div><span>Type</span><strong>Login</strong></div>
            </div>
            <div class="details-actions">
              <button type="button">View Full Log</button>
              <button type="button">Export</button>
            </div>
          </div>
        </div>
      </div>
      <div class="row" data-row>
        <div class="content">
          <p class="search">
            <img src="https://i.pravatar.cc/100?img=41" alt="No Img" loading="lazy">
            Youssef
          </p>
          <p>Security</p>
          <p>$120</p>
          <p data-state="pending">pending</p>
          <p>09 Apr 2026</p>
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
              <div><span>Device</span><strong>Surface Pro</strong></div>
              <div><span>Location</span><strong>Tanta, EG</strong></div>
              <div><span>IP</span><strong>10.24.1.11</strong></div>
              <div><span>Browser</span><strong>Firefox</strong></div>
              <div><span>Type</span><strong>Security</strong></div>
            </div>
            <div class="details-actions">
              <button type="button">View Full Log</button>
              <button type="button">Export</button>
            </div>
          </div>
        </div>
      </div>
    </x-components::table>
  </div>
  <script src="{{ asset("js/company/programmers/history.js") }}"></script>
@endsection