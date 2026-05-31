<div class="schedule-shell card-inner">
  <div class="schedule-topbar">
    <div class="month-box">
      <h3>January, 2025</h3>
      <button type="button" class="today-btn">Today</button>
    </div>
    <div class="view-switcher">
      <button type="button" class="view-btn active" data-view="daily">Daily</button>
      <button type="button" class="view-btn" data-view="weekly">Weekly</button>
      <button type="button" class="view-btn" data-view="monthly">Monthly</button>
    </div>
    <div class="date-range">
      <button type="button" class="range-btn">📅 2025</button>
      <button type="button" class="range-btn month-btn">📆 Month</button>
      <div class="fillter-year card-inner">
        <button type="button" class="year-option">2022</button>
        <button type="button" class="year-option">2023</button>
        <button type="button" class="year-option">2024</button>
        <button type="button" class="year-option">2025</button>
        <button type="button" class="year-option">2026</button>
      </div>
      <div class="fillter-month card-inner">
        <button type="button" data-month="0">Jan</button>
        <button type="button" data-month="1">Feb</button>
        <button type="button" data-month="2">Mar</button>
        <button type="button" data-month="3">Apr</button>
        <button type="button" data-month="4">May</button>
        <button type="button" data-month="5">Jun</button>
        <button type="button" data-month="6">Jul</button>
        <button type="button" data-month="7">Aug</button>
        <button type="button" data-month="8">Sep</button>
        <button type="button" data-month="9">Oct</button>
        <button type="button" data-month="10">Nov</button>
        <button type="button" data-month="11">Dec</button>
      </div>
    </div>
  </div>
  <div class="row">
    <div class="schedule-filters">
      @php
        $types = [];
        if (!empty($events) && is_array($events)) {
          foreach ($events as $ev) {
            $t = $ev['type'] ?? null;
            if ($t && !in_array($t, $types)) $types[] = $t;
          }
        }
      @endphp
      @if (!empty($types))
        <button type="button" class="filter-btn active" data-filter="all">All</button>
        @foreach ($types as $type)
          <button type="button" class="filter-btn" data-filter="{{ $type }}">{{ ucfirst($type) }}</button>
        @endforeach
      @else
        <div class="no-filters">No events defined. Pass an `events` array when calling the component.</div>
      @endif
    </div>
    <div class="input-box">
      <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
        <path fill="var(--bg-color)" d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
      </svg>
      <input type="text" data-no-style id="searchDate" placeholder="Research on Task throughout history" />
    </div>
  </div>
  <div class="calendar-board" id="calendarBoard" data-period="am" data-filter="all">
    <div class="calendar-head">
      <div class="time-col-head">
        <button type="button" class="period-toggle" data-period-toggle aria-label="Toggle morning and evening">
          <span class="period-toggle-icon">⇆</span>
          <span class="period-toggle-text">AM</span>
        </button>
      </div>
      <div class="day-heads" id="calendarHeads">
        <div class="day-head">Mon 01</div>
        <div class="day-head">Tue 02</div>
        <div class="day-head active">Wed 03</div>
        <div class="day-head">Thu 04</div>
        <div class="day-head">Fri 05</div>
        <div class="day-head">Sat 06</div>
        <div class="day-head">Sun 07</div>
      </div>
    </div>
    <div class="calendar-body">
      <div class="time-col" id="timeLabels">
        <span>1 AM</span>
        <span>2 AM</span>
        <span>3 AM</span>
        <span>4 AM</span>
        <span>5 AM</span>
        <span>6 AM</span>
        <span>7 AM</span>
        <span>8 AM</span>
        <span>9 AM</span>
        <span>10 AM</span>
        <span>11 AM</span>
        <span>12 AM</span>
      </div>
      <div class="week-grid" id="weekGrid">
        @if (!empty($events) && is_array($events))
          @foreach ($events as $event)
            <div
              class="event button-form {{ $event['class'] ?? 'event-green' }}"
              data-follow="show-task"
              data-event
              data-title="{{ $event['title'] ?? '' }}"
              data-description="{{ $event['description'] ?? '' }}"
              data-date="{{ $event['date'] ?? '' }}"
              data-period="{{ $event['period'] ?? '' }}"
              data-type="{{ $event['type'] ?? '' }}"
              data-progress="{{ $event['progress'] ?? 0 }}"
              data-team="{{ $event['team'] ?? '' }}"
              data-leader="{{ $event['leader'] ?? '' }}"
              data-assignee="{{ $event['assignee'] ?? '' }}"
              data-files='@json($event["files"] ?? [])'
            >
              <h4>{{ $event['title'] ?? '' }}</h4>
              <p class="event-time">{{ $event['time'] ?? '' }}</p>
              <div class="event-desc">
                {{ $event['description'] ?? '' }}
              </div>
              <div class="event-progress">
                <div class="progress-meta">
                  <span>Progress</span>
                  <strong>{{ $event['progress'] ?? 0 }}%</strong>
                </div>
                <div class="progress-track">
                  <span class="progress-bar"></span>
                </div>
              </div>
              <div class="avatars">
                @if (!empty($event['avatars']) && is_array($event['avatars']))
                  @foreach ($event['avatars'] as $avatar)
                    <img src="{{ $avatar }}" alt="avatar">
                  @endforeach
                @endif
              </div>
            </div>
          @endforeach
        @else
          <div class="empty-events">No events defined. Pass an `events` array when calling the component.</div>
        @endif
      </div>
    </div>
  </div>
</div>

<script src="{{ asset('js/company/programmers/tasksShell.js') }}"></script>