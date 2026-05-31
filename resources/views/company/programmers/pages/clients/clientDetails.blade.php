@extends('company.programmers.main')

@section('title', 'Clients')

@section('page')
  <div class="client-deitels">
    <x-components::company.popupForm header="Add employees in project" description="Adding an employee to the team to make a difference with them" dataFollowButton="add-employees-in-projects" pathPostForm="#">
      <input type="hidden" id="promotion-id">
      <x-components::company.entityPicker size="3" choose="5" name="Employees" show="promotion" />
    </x-components::company.popupForm>
    <section class="hero card-inner">
      <div class="hero-grid">
        <div class="main-profile">
          <div class="profile">
            <img id="empImage" class="avatar"
              src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80"
              loading="lazy" alt="Client Photo" />
            <div class="title-wrap">
              <h1 id="empName" class="name">Apex Systems</h1>
              <p id="empRole" class="role">
                Enterprise SaaS Client • Premium Account<br>
                client@company.com
              </p>
              <div class="chips">
                <span id="empBranch" class="chip">Enterprise Tier</span>
                <span id="empStatus" class="chip">Active Client</span>
                <span id="empId" class="chip">Client ID: 1</span>
              </div>
            </div>
          </div>
          <div class="manager-box card-inner" style="margin-top:0;">
            <div class="manager-icon">
              <svg width="24" height="24" viewBox="0 0 24 24" fill="none">
                <path
                  d="M12 12.75C14.0711 12.75 15.75 11.0711 15.75 9C15.75 6.92893 14.0711 5.25 12 5.25C9.92893 5.25 8.25 6.92893 8.25 9C8.25 11.0711 9.92893 12.75 12 12.75Z"
                  stroke="var(--text-color)" stroke-width="1.7" />
                <path d="M4.5 19.5C5.999 16.875 8.736 15.375 12 15.375C15.264 15.375 18.001 16.875 19.5 19.5"
                  stroke="var(--text-color)" stroke-width="1.7" stroke-linecap="round" />
              </svg>
            </div>
            <a href="#" class="manager-text">
              <span class="small">Team Leader</span>
              <span id="empManager" class="big">Sarah Ahmed</span>
            </a>
          </div>
        </div>
        <div class="actions">
          <div class="discount-box card-inner" style="margin-top:0;">
            <div class="discount-top">
              <div>
                <span class="discount-label">Discount Usage</span>
                <div class="discount-number">35%</div>
              </div>
              <div class="chip">SAVE35</div>
            </div>
            <p class="discount-note">
              People who used the discount code and their usage rate are shown here for quick tracking.
            </p>
            <div class="discount-users">
              <a href="/company/user-details" aria-label="Open user details">
                <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="User 1">
              </a>
              <a href="/company/user-details" aria-label="Open user details">
                <img src="https://i.pravatar.cc/120?img=12" loading="lazy" alt="User 2">
              </a>
              <a href="/company/user-details" aria-label="Open user details">
                <img src="https://i.pravatar.cc/120?img=13" loading="lazy" alt="User 3">
              </a>
              <a href="/company/user-details" aria-label="Open user details">
                <img src="https://i.pravatar.cc/120?img=14" loading="lazy" alt="User 4">
              </a>
              <span class="more">+8</span>
            </div>
          </div>
          <div class="action-row">
            <a href="/company/clients" class="btn btn-soft">Back</a>
            <button aria-label="Delete item" class="delete-button" type="button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b">
                    </rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b">
                    </rect>
                  </g>
                </g>
              </svg>
            </button>
          </div>
        </div>
      </div>
    </section>
    <form class="grid-2">
      <section class="panel card-inner">
        <h2 class="section-title">Client Information</h2>
        <div class="info-grid">
          <div class="perant-input">
            <label for="name" data-no-active>Client Name</label>
            <input type="text" id="name" name="name" placeholder="Enter client name">
          </div>
          <div class="perant-input">
            <label for="job" data-no-active>Phone Number</label>
            <input type="tel" id="job" name="job" placeholder="+20 100 000 0000">
          </div>
          <div class="perant-input">
            <label for="job-role" data-no-active>Job role</label>
            <input type="text" id="job-role" name="job-role" placeholder="Job role">
          </div>
          <div class="perant-input">
            <label for="phone" data-no-active>Email</label>
            <input type="email" id="phone" name="phone" placeholder="client@company.com">
          </div>
          <div class="perant-input">
            <label for="email" data-no-active>Password</label>
            <input type="password" id="email" name="email" placeholder="••••••••••">
          </div>
          <div class="perant-input">
            <label for="email-company" data-no-active>Team Leader</label>
            <input type="text" id="email-company" name="email-company" placeholder="Sarah Ahmed">
          </div>
          <div class="perant-input full-row">
            <label for="salary" data-no-active>Project Status</label>
            <input type="text" id="salary" name="salary" placeholder="Active since March 2024 · Delivered">
          </div>
        </div>
        <button class="btn-send" type="submit">
          <svg class="cube-svg" width="30" height="30" viewBox="0 0 500 500"
            xmlns="http://www.w3.org/2000/svg">
            <defs>
              <linearGradient id="top-1">
                <stop offset="0%" stop-color="currentColor" />
                <stop offset="100%" stop-color="currentColor" />
              </linearGradient>
              <linearGradient id="left-1">
                <stop offset="0%" stop-color="currentColor" />
                <stop offset="100%" stop-color="currentColor" />
              </linearGradient>
              <linearGradient id="right-1">
                <stop offset="0%" stop-color="currentColor" />
                <stop offset="100%" stop-color="currentColor" />
              </linearGradient>
            </defs>
            <polygon class="cube-top" points="250,60 420,160 250,260 80,160" fill="url(#top-1)" />
            <polygon class="cube-left" points="80,160 250,260 250,440 80,340" fill="url(#left-1)" />
            <polygon class="cube-right" points="420,160 250,260 250,440 420,340" fill="url(#right-1)" />
          </svg>
          <p>Send</p>
        </button>
      </section>
      <section class="panel card-inner">
        <h2 class="section-title">Discount Users</h2>
        <div class="discount-users-grid">
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="User 1">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Ahmed Khaled</h3>
              <p class="discount-user-card__phone">+20 100 000 0001</p>
              <p class="discount-user-card__project">Nova Core Platform</p>
            </div>
          </a>
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=12" loading="lazy" alt="User 2">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Sara Mohamed</h3>
              <p class="discount-user-card__phone">+20 100 000 0002</p>
              <p class="discount-user-card__project">Pulse UI System</p>
            </div>
          </a>
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=13" loading="lazy" alt="User 3">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Omar Hassan</h3>
              <p class="discount-user-card__phone">+20 100 000 0003</p>
              <p class="discount-user-card__project">Board Suite Pro</p>
            </div>
          </a>
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=14" loading="lazy" alt="User 4">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Mina Fathy</h3>
              <p class="discount-user-card__phone">+20 100 000 0004</p>
              <p class="discount-user-card__project">Merchant Flow App</p>
            </div>
          </a>
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=15" loading="lazy" alt="User 5">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Yousef Adel</h3>
              <p class="discount-user-card__phone">+20 100 000 0005</p>
              <p class="discount-user-card__project">CareSync Core</p>
            </div>
          </a>
          <a href="/company/user-details" class="discount-user-card">
            <div class="discount-user-card__image">
              <img src="https://i.pravatar.cc/120?img=16" loading="lazy" alt="User 6">
            </div>
            <div class="discount-user-card__content">
              <h3 class="discount-user-card__name">Nour Samir</h3>
              <p class="discount-user-card__phone">+20 100 000 0006</p>
              <p class="discount-user-card__project">Visual Identity Hub</p>
            </div>
          </a>
        </div>
      </section>
    </form>
    <section class="panel">
      <div class="project-card">
        <div class="project-head">
          <div class="project-title-wrap">
            <div class="project-ribbon">Project Overview</div>
            <h2 class="project-name">Nova Core Platform</h2>
            <div class="project-status">Active since March 2024 · Delivered</div>
          </div>
          <div class="chip">Project ID: 01</div>
        </div>
        <div class="project-live">
          <div class="live-dot"></div>
          <div class="live-text">
            <strong>The website is live</strong>
            <small>Production environment is running normally and accessible right now.</small>
          </div>
        </div>
        <div class="project-grid">
          <div class="project-box">
            <span>Project Name</span>
            <strong>Nova Core Platform</strong>
          </div>
          <div class="project-box">
            <span>Team Leader</span>
            <strong>Sarah Ahmed</strong>
          </div>
          <div class="project-box">
            <span>Delivery Date</span>
            <strong>March 2024</strong>
          </div>
          <div class="project-box">
            <span>Status</span>
            <strong>Delivered</strong>
          </div>
        </div>
        <div class="project-people">
          <div class="project-people-head">
            <span>Team Members</span>
            <span>6 people</span>
          </div>
          <div class="team">
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="Team member 1">
            </a>
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=12" loading="lazy" alt="Team member 2">
            </a>
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=13" loading="lazy" alt="Team member 3">
            </a>
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=14" loading="lazy" alt="Team member 4">
            </a>
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=15" loading="lazy" alt="Team member 5">
            </a>
            <a href="/company/user-details" aria-label="Open user details">
              <img src="https://i.pravatar.cc/120?img=16" loading="lazy" alt="Team member 6">
            </a>
          </div>
          <div class="project-actions">
            <a class="ghost-btn ghost-btn--primary" href="/company/project-details">Open Project</a>
            <button class="ghost-btn button-form" data-follow="add-employees-in-projects" href="#">Add employee
              to team</button>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/clients/client-deitels.js') }}"></script>
@endsection
