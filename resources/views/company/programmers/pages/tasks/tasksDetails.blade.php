@extends('company.programmers.main')

@section('title', 'Tasks details')

@section('page')
  @php
    $taskCards = [
      [
        'title' => 'Landing page review',
        'assigned_to' => 'Mona Salah',
        'due_date' => '2024-08-02',
        'priority' => 'Medium',
        'status_key' => null,
        'status_label' => null,
        'reason_short' => null,
        'reason' => null,
        'file_label' => 'Upload attachment',
        'file_hint' => 'PDF, DOC, DOCX',
        'file_id' => 'contract-2',
        'description' => 'Prepare the landing page assets and send the final version for review.',
      ],
      [
        'title' => 'Landing page review',
        'assigned_to' => 'Mona Salah',
        'due_date' => '2024-08-02',
        'priority' => 'Medium',
        'status_key' => 'pending',
        'status_label' => 'Pending',
        'reason_short' => 'Waiting for manager review.',
        'reason' => null,
        'file_label' => 'Upload attachment',
        'file_hint' => 'PDF, DOC, DOCX',
        'file_id' => 'contract-2',
        'description' => 'Prepare the landing page assets and send the final version for review.',
      ],
      [
        'title' => 'Design new dashboard UI',
        'assigned_to' => 'Ahmed Ali',
        'due_date' => '2024-07-15',
        'priority' => 'High',
        'status_key' => 'accepted',
        'status_label' => 'Accepted',
        'reason_short' => 'Manager approved the uploaded file.',
        'reason' => 'The file was accepted because it matches the requested layout, naming, and delivery requirements.',
        'file_label' => 'Upload contract',
        'file_hint' => 'PDF, DOC, DOCX',
        'file_id' => 'contract-1',
        'description' => "Create a new dashboard UI for the company's internal tools.",
      ],
      [
        'title' => 'Landing page review',
        'assigned_to' => 'Mona Salah',
        'due_date' => '2024-08-02',
        'priority' => 'Medium',
        'status_key' => 'rejected',
        'status_label' => 'Rejected',
        'reason_short' => 'Waiting for manager review.',
        'reason' => 'This task is still under review. After approval, the reason will appear here and the status will switch to Accepted.',
        'file_label' => 'Upload attachment',
        'file_hint' => 'PDF, DOC, DOCX',
        'file_id' => 'contract-2',
        'description' => 'Prepare the landing page assets and send the final version for review.',
      ],
    ];
  @endphp
  <div class="tasks-details-page">
    <div class="row head-tasks">
      <article class="chart-card card-inner">
        <div class="section-head">
          <h2>Financial Balance</h2>
          <span>Current period</span>
        </div>
        <div class="chart-wrap">
          <canvas id="companyBalanceChart"></canvas>
        </div>
      </article>
      <div class="tasks card-inner">
        <div class="tasks-head">
          <div class="tasks-head-title">
            <h2>Tasks</h2>
            <p>Assigned work, approvals, and file submissions</p>
          </div>
          <div class="tasks-head-badge">{{ count($taskCards) }}</div>
        </div>
        <div class="tasks-list">
          @foreach ($taskCards as $task)
            <article class="task task--{{ $task['status_key'] }}">
              <div class="task-top">
                <div class="task-title-row">
                  <span class="task-dot"></span>
                  <div class="task-title-wrap">
                    <h3>{{ $task['title'] }}</h3>
                    <div class="task-mini-meta">
                      <span class="task-chip">Assigned to: {{ $task['assigned_to'] }}</span>
                      <span class="task-chip">Deadline: {{ $task['due_date'] }}</span>
                      <span class="task-chip task-chip--accent">Priority: {{ $task['priority'] }}</span>
                    </div>
                  </div>
                </div>
                <button class="toggle-btn-tasks" type="button" aria-label="Toggle details">
                  <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                    <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="task-summary">
                <div class="task-meta-grid">
                  <div class="task-meta-item">
                    <span>Assigned to</span>
                    <strong>{{ $task['assigned_to'] }}</strong>
                  </div>
                  <div class="task-meta-item">
                    <span>Deadline</span>
                    <strong>{{ $task['due_date'] }}</strong>
                  </div>
                </div>
                <p class="task-description">
                  Description: {{ $task['description'] }}
                </p>
              </div>
              @if ($task['status_key'])
                <div class="state is-expanded">
                  <div class="content">
                    <div class="icon">
                      @if ($task['status_key'] === 'accepted')
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                          <circle cx="12" cy="12" r="10" fill="rgba(116,255,128,0.12)" stroke="rgba(133,255,133,0.47)" stroke-width="1.5"/>
                          <path d="M7.5 12.5L10.5 15.5L16.5 9.5" stroke="#11c98a" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      @elseif ($task['status_key'] === 'pending')
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                          <circle cx="12" cy="12" r="10" fill="rgba(255,193,7,0.12)" stroke="rgba(255,193,7,0.55)" stroke-width="1.5"/>
                          <path d="M12 7V13" stroke="#f5b301" stroke-width="2" stroke-linecap="round"/>
                          <circle cx="12" cy="16.5" r="1" fill="#f5b301"/>
                        </svg>
                      @elseif ($task['status_key'] === 'rejected')
                        <svg width="26" height="26" viewBox="0 0 24 24" fill="none">
                          <circle cx="12" cy="12" r="10" fill="rgba(255,116,116,0.12)" stroke="rgba(206,105,105,0.87)" stroke-width="1.5"/>
                          <path d="M9 9L15 15M15 9L9 15" stroke="#ff6a6a" stroke-width="2" stroke-linecap="round"/>
                        </svg>
                      @endif
                      <div class="state-copy">
                        <p>{{ $task['status_label'] }}</p>
                        <small>{{ $task['reason_short'] }}</small>
                      </div>
                    </div>
                    <span class="state-pill">{{ $task['status_label'] }}</span>
                  </div>
                  @if ($task['reason'])
                    <div class="description">
                      <p><strong>Reason:</strong> {{ $task['reason'] }}</p>
                    </div>
                  @endif
                </div>
              @endif
              <div class="table-task">
                <input type="text" placeholder="Add a comment..." />
                <div class="row">
                  <label class="custom-file" data-no-active>
                    <input type="file" id="{{ $task['file_id'] }}" name="contract[]" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>{{ $task['file_label'] }}</strong>
                        <small>{{ $task['file_hint'] }}</small>
                      </span>
                    </span>
                  </label>
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
                </div>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    </div>
    <div class="main-inbox card-inner">
      <div class="inbox-card">
        <div class="inbox-header">
          <button class="icon-btn back-btn" aria-label="Back">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M15 18L9 12L15 6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
            </svg>
          </button>
          <div class="title-wrap">
            <h2>Inboxes</h2>
            <span class="count-badge">16</span>
          </div>
          <button class="icon-btn action-btn" aria-label="Menu">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M6 7H18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M6 12H18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M6 17H18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
        <div class="input-box">
          <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
            <path fill="var(--bg-color)" d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
          </svg>
          <input type="text" data-no-style id="searchDate" placeholder="Research on Task throughout history" />
        </div>
        <div class="cards-messages">
          @for ($i = 0; $i < 10; $i++)
            <div class="message-card">
              <div class="message-head">
                <div class="sender">
                  <div class="avatar">
                    <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Alex Brown" />
                  </div>
                  <div class="sender-info">
                    <div class="name-row">
                      <h3>Alex Brown</h3>
                      <span class="status-dot"></span>
                    </div>
                    <p>Team • Product Design</p>
                  </div>
                </div>
                <span class="tag">Work</span>
              </div>
              <div class="message-body">
                <p class="message-text">
                  Hi Michael, I finished the project today. Looking forward to your feedback on the edits I made.
                </p>
              </div>
              <div class="message-footer">
                <div class="reply-box">
                  <input type="text" placeholder="Send letter" />
                </div>
                <button class="send-btn" aria-label="Send">
                  <svg viewBox="0 0 24 24" fill="none">
                    <path d="M22 2L11 13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                    <path d="M22 2L15 22L11 13L2 9L22 2Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                  </svg>
                </button>
              </div>
              <div class="reply-section">
                <div class="reply-section-head">
                  <span class="reply-section-title">Replies</span>
                  <span class="reply-section-count">1</span>
                </div>
                <div class="reply-item">
                  <div class="reply-avatar">
                    <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Michael" />
                  </div>
                  <div class="reply-content">
                    <div class="reply-top">
                      <div class="reply-name-row">
                        <h4>Michael</h4>
                        <span class="reply-time">2m ago</span>
                      </div>
                      <span class="reply-chip">Reply</span>
                    </div>
                    <div class="reply-file">
                      <div class="reply-file-icon">
                        <svg viewBox="0 0 24 24" fill="none">
                          <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-5-5Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                          <path d="M14 2v5h5" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                          <path d="M9 13H15" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                          <path d="M9 16H13" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                        </svg>
                      </div>
                      <div class="reply-file-info">
                        <div class="reply-file-name">Project-Feedback.pdf</div>
                        <div class="reply-file-meta">
                          <span>PDF Document</span>
                          <span>2.4 MB</span>
                        </div>
                      </div>
                      <button class="reply-file-action" type="button" aria-label="Open file">
                        <svg viewBox="0 0 24 24" fill="none">
                          <path d="M10 6H6a2 2 0 0 0-2 2v10a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2v-4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M14 3h7v7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                          <path d="M21 3L10 14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
                        </svg>
                      </button>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          @endfor
        </div>
      </div>
    </div>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/tasks/tasks-details.js') }}"></script>
@endsection