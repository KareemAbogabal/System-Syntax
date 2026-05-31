<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
  <meta charset="UTF-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <meta name="csrf-token" content="{{ csrf_token() }}" />
  <link rel="icon" href="{{ asset('images/content/logo/logo-company.png') }}" />
  <link rel="stylesheet" href="{{ asset('css/company/calls/app.css') }}">
  <title>System Syntax | Company Calls</title>
</head>
<body>
  <main class="company-calls">
    <section class="panel left-panel">
      <div class="accent-line"></div>
      <div class="hero-box">
        <div class="hero-kicker">
          <span class="status-dot"></span>
          Internal communications / secure handoff
        </div>
        <h1 class="hero-title">One tap. One room. Clean flow.</h1>
        <p class="hero-text">
          Choose a teammate and jump straight into either a voice room or a video room.
          The interface stays sharp, unusual, and disciplined.
        </p>
        <div class="signal-strip">
          <div class="signal">
            <small>Coverage</small>
            <strong>Team-wide</strong>
          </div>
          <div class="signal">
            <small>Mode</small>
            <strong>Voice / Video</strong>
          </div>
          <div class="signal">
            <small>Room</small>
            <strong>UUID</strong>
          </div>
        </div>
        <div class="hero-cta">
          <a class="btn btn-primary" href="#roster">
            Open roster
            <svg viewBox="0 0 24 24" width="18" height="18" aria-hidden="true"><path d="M13 5l7 7-7 7-1.4-1.4 4.6-4.6H4v-2h12.2l-4.6-4.6L13 5z"/></svg>
          </a>
        </div>
      </div>
      <div class="dial">
        <div class="dial-head">
          <h2>Priority contacts</h2>
          <span>Two call routes per person</span>
        </div>
        <div class="line-grid">
          @php
            $priorityEmployees = $priorityEmployees ?? [
              ['name' => 'Amina Hassan', 'role' => 'Creative Director', 'team' => 'Brand Studio', 'status' => 'Available'],
              ['name' => 'Mina Adel', 'role' => 'Backend Systems', 'team' => 'Infra', 'status' => 'Available'],
            ];
          @endphp
          @foreach ($priorityEmployees as $employee)
            @php $initial = mb_strtoupper(mb_substr($employee['name'], 0, 1)); @endphp
            <article class="employee">
              <div class="employee-top">
                <div class="avatar">{{ $initial }}</div>
                <div>
                  <h1 class="employee-name">{{ $employee['name'] }}</h1>
                  <p class="employee-role">{{ $employee['role'] }}</p>
                </div>
              </div>
              <div class="chips">
                <span class="chip">{{ $employee['status'] }}</span>
                <span class="chip">{{ $employee['team'] }}</span>
              </div>
              <div class="mini-meta">
                <div><strong>Team:</strong> {{ $employee['team'] }}</div>
                <div><strong>Status:</strong> {{ $employee['status'] }}</div>
              </div>
              <div class="call-actions">
                <a class="call-link voice" href="{{ route('video-call.room', ['roomId' => Str::uuid()]) }}">
                  <svg width="30" height="30" fill="var(--text-color)" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15a3 3 0 0 0 3-3V6a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.93V21h2v-2.07A7 7 0 0 0 19 12h-2z"/></svg>
                  Voice
                </a>
                <a class="call-link video" href="{{ route('video-call.room', ['roomId' => Str::uuid()]) }}">
                  <svg width="30" height="30" fill="var(--text-color)" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h11a2 2 0 0 1 2 2v2.2l3.4-2.2a1 1 0 0 1 1.6.8v7.4a1 1 0 0 1-1.6.8L17 15.8V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/></svg>
                  Video
                </a>
              </div>
            </article>
          @endforeach
        </div>
      </div>
    </section>
    <section class="panel right-panel" id="roster">
      <div class="input-box">
        <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
          <path fill="var(--bg-color)" d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
        </svg>
        <input type="text" id="searchInput" placeholder="Search for any employee" data-no-style />
      </div>
      <div class="roster" id="rosterGrid">
        @php
          $employees = $employees ?? [
            ['name' => 'Amina Hassan', 'role' => 'Creative Director', 'team' => 'Brand Studio', 'status' => 'Available'],
            ['name' => 'Omar Saad', 'role' => 'Security Engineer', 'team' => 'Infra', 'status' => 'In meeting'],
            ['name' => 'Laila Mostafa', 'role' => 'UX Architect', 'team' => 'Experience', 'status' => 'Available'],
            ['name' => 'Youssef Adel', 'role' => 'Operations Lead', 'team' => 'HQ Ops', 'status' => 'Away'],
            ['name' => 'Nour Sherif', 'role' => 'Product Analyst', 'team' => 'Insights', 'status' => 'Available'],
            ['name' => 'Hassan Emad', 'role' => 'Full Stack Engineer', 'team' => 'Core Apps', 'status' => 'Busy'],
          ];
        @endphp
        @foreach ($employees as $employee)
          @php $initial = mb_strtoupper(mb_substr($employee['name'], 0, 1)); @endphp
          <article class="roster-card employee-item" data-name="{{ $employee['name'] }}" data-role="{{ $employee['role'] }}" data-team="{{ $employee['team'] }}">
            <span class="flag"><span class="status-dot"></span>{{ $employee['status'] }}</span>
            <div class="roster-top">
              <div>
                <h1>{{ $employee['name'] }}</h1>
                <p>{{ $employee['role'] }}</p>
              </div>
              <div class="avatar" aria-hidden="true">{{ $initial }}</div>
            </div>
            <div class="chips">
              <span class="chip">{{ $employee['team'] }}</span>
              <span class="chip">{{ $employee['status'] }}</span>
            </div>
            <div class="mini-meta">
              <div><strong>Role:</strong> {{ $employee['role'] }}</div>
              <div><strong>Team:</strong> {{ $employee['team'] }}</div>
            </div>
            <div class="actions">
              <a class="call-link voice" href="{{ route('video-call.room', ['roomId' => Str::uuid()]) }}">
                <svg width="30" height="30" fill="var(--text-color)" viewBox="0 0 24 24" aria-hidden="true"><path d="M12 15a3 3 0 0 0 3-3V6a3 3 0 1 0-6 0v6a3 3 0 0 0 3 3zm5-3a5 5 0 0 1-10 0H5a7 7 0 0 0 6 6.93V21h2v-2.07A7 7 0 0 0 19 12h-2z"/></svg>
                Voice Call
              </a>
              <a class="call-link video" href="{{ route('video-call.room', ['roomId' => Str::uuid()]) }}">
                <svg width="30" height="30" fill="var(--text-color)" viewBox="0 0 24 24" aria-hidden="true"><path d="M4 6h11a2 2 0 0 1 2 2v2.2l3.4-2.2a1 1 0 0 1 1.6.8v7.4a1 1 0 0 1-1.6.8L17 15.8V18a2 2 0 0 1-2 2H4a2 2 0 0 1-2-2V8a2 2 0 0 1 2-2z"/></svg>
                Video Call
              </a>
            </div>
          </article>
        @endforeach
      </div>
      <div class="ghost-panel">
        The layout is intentionally restrained. The two-button system keeps the flow direct: voice or video, nothing else.
      </div>
    </section>
  </main>
  <script>
    const searchInput = document.getElementById('searchInput');
    const items = document.querySelectorAll('.employee-item');
    searchInput?.addEventListener('input', function () {
      const term = this.value.trim().toLowerCase();
      items.forEach(item => {
        const haystack = [item.dataset.name, item.dataset.role, item.dataset.team].join(' ').toLowerCase();
        item.style.display = haystack.includes(term) ? '' : 'none';
      });
    });
  </script>
</body>
</html>
