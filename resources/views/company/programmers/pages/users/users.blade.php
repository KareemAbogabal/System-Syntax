@extends('company.programmers.main')

@section('title', 'Users')

@section('page')
  <div class="users">
    <section class="hero card-inner">
      <div class="hero-inner">
        <div class="chips">
          <span class="chip">Luxury Team Directory</span>
          <span class="chip">Executive Control</span>
          <span class="chip">Premium View</span>
        </div>
        <h1 class="title">Employees</h1>
        <p class="subtitle">
          Explore your company's workforce with our comprehensive employee directory. Easily search, filter, and manage employee information across all branches. Get insights into team structures, roles, and contact details at a glance. Our directory is designed to help you stay connected and informed about your organization's talent pool.
        </p>
      </div>
    </section>
    <div class="top-grid">
      <x-components::company.fillterBar :pills="['All', 'Front-end', 'Back-end', 'Analysis', 'Accountant']" />
      <div class="panel card-inner">
        <h2 class="panel-title">Overview</h2>
        <div class="stats-grid">
          <div class="stat card-inner">
            <div class="label">Total</div>
            <p class="value" id="totalCount">0</p>
            <div class="note">Employees</div>
          </div>
          <div class="stat card-inner">
            <div class="label">Managers</div>
            <p class="value" id="managersCount">0</p>
            <div class="note">Leadership</div>
          </div>
          <div class="stat card-inner">
            <div class="label">Branches</div>
            <p class="value" id="branchesCount">0</p>
            <div class="note">Locations</div>
          </div>
          <div class="stat card-inner">
            <div class="label">Active</div>
            <p class="value" id="activeCount">0</p>
            <div class="note">Working now</div>
          </div>
        </div>
      </div>
    </div>
    <section class="employees-grid" id="employeesGrid">
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Front-end">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Back-end">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Analysis">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Accountant">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Front-end">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Back-end">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Analysis">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
      <a href="/company/user-details" class="employee-card card-inner" data-branch="Branch A" data-status="Accountant">
        <div class="avatar-wrap">
          <img class="avatar" src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?auto=format&fit=crop&w=800&q=80" loading="lazy" alt="">
        </div>
        <h3 class="name">Omar El-Sherif</h3>
        <p class="role">Senior Creative Director</p>
      </a>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/users/users.js') }}"></script>
@endsection
