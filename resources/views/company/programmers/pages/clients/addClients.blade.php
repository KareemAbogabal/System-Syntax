@extends('company.programmers.main')

@section('title', 'Add Clients')

@section('page')
  <div class="add-users">
    <form class="employee-card card-inner" method="POST" action="" enctype="multipart/form-data">
      @csrf
      <div class="employee-header">
        <div>
          <h2>Add New Clients</h2>
          <p>Register a new team member with secure permissions and clean profile data.</p>
        </div>
      </div>
      <div class="employee-grid">
        <div class="perant-input employee-avatar-field">
          <label data-no-active>Profile Image</label>
          <label class="avatar-upload" for="photo" data-no-active>
            <input type="file" id="photo" name="photo" accept="image/*">
            <span class="avatar-preview">
              <img id="photoPreview" src="" loading="lazy" alt="Profile Preview" style="display:none;">
              <span class="avatar-placeholder" id="avatarPlaceholder">
                <span>+</span>
              </span>
            </span>
            <span class="avatar-hint">Click to upload image</span>
          </label>
        </div>
        <div class="perant-input">
          <label for="name" data-no-active>Client Name</label>
          <input type="text" id="name" name="name" placeholder="Enter client name">
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
          <label for="password" data-no-active>Password</label>
          <div class="password-box">
            <input type="password" id="password" name="password" placeholder="Create a secure password">
            <button type="button" class="toggle-password" data-target="password" aria-label="Show password">
              <svg class="eye-icon eye-open" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
              </svg>
              <svg class="eye-icon eye-close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M2 12s3.5-7 10-7c2.3 0 4.2.7 5.7 1.7M22 12s-3.5 7-10 7c-2.3 0-4.2-.7-5.7-1.7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M9.5 9.5A3 3 0 0 0 12 15a3 3 0 0 0 2.5-4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </button>
          </div>
        </div>
        <div class="perant-input">
          <label for="confirm-password" data-no-active>Confirm Password</label>
          <div class="password-box">
            <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password">
            <button type="button" class="toggle-password" data-target="confirm-password" aria-label="Show password">
              <svg class="eye-icon eye-open" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z" stroke="currentColor" stroke-width="1.8"/>
                <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
              </svg>
              <svg class="eye-icon eye-close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
                <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M2 12s3.5-7 10-7c2.3 0 4.2.7 5.7 1.7M22 12s-3.5 7-10 7c-2.3 0-4.2-.7-5.7-1.7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                <path d="M9.5 9.5A3 3 0 0 0 12 15a3 3 0 0 0 2.5-4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              </svg>
            </button>
          </div>
        </div>
      </div>
      <div class="permissions-box">
        <div class="permissions-head">
          <h3>Permissions</h3>
          <p>Choose access rights for the employee account.</p>
        </div>
        <div class="switch-grid">
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
        </div>
      </div>
      <div class="employee-actions">
        <button type="reset" class="btn-secondary">Reset</button>
        <button type="submit" class="btn-primary">Save Employee</button>
      </div>
    </form>
  </div>
  <script src="{{ asset('js/company/programmers/clients/add-clients.js') }}"></script>
@endsection
