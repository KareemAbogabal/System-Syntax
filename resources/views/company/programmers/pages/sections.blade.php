@extends('company.programmers.main')

@section('title', 'Sections')

@section('page')
  <div class="sections-page">
    <x-components::company.popupForm header="Permissions Branch" description="Prioritize those who deserve to control the branch" dataFollowButton="permissions-branch" pathPostForm="#">
      <div class="permissions-scroll">
        <div class="permissions-group">
          <div class="permissions-title">Projects</div>
          <div class="permissions-rows">
            <div class="permissions-row"><span>View</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Edit</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Delete</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="permissions-group">
          <div class="permissions-title">Reports</div>
          <div class="permissions-rows">
            <div class="permissions-row"><span>View</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Export</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Delete</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="permissions-group">
          <div class="permissions-title">Teams</div>
          <div class="permissions-rows">
            <div class="permissions-row"><span>View</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Edit</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
          </div>
        </div>
        <div class="permissions-group">
          <div class="permissions-title">Employees</div>
          <div class="permissions-rows">
            <div class="permissions-row"><span>View</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" checked name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
            <div class="permissions-row"><span>Edit</span>
              <label class="switch-card" data-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </div>
          </div>
        </div>
      </div>
    </x-components::company.popupForm>
    <x-components::company.popupForm header="Add Branch" description="Adding a new branch to the company demonstrates its prestige and productivity" dataFollowButton="add-branch" pathPostForm="#">
      <div class="row">
        <div class="perant-input">
          <label for="branch-name">Branch name</label>
          <input type="text" id="branch-name" placeholder="Branch name">
        </div>
        <div class="perant-input">
          <label for="branch-job-title">Branch Job Title</label>
          <input type="text" id="branch-job-title" placeholder="Branch Job Title">
        </div>
      </div>
      <div class="perant-input">
        <label for="name-task">description</label>
        <textarea id="name-task" placeholder="Description"></textarea>
      </div>
      <x-components::company.entityPicker size="1" choose="50" name="Employees" />
    </x-components::company.popupForm>
    <x-components::company.popupForm header="Add person in branch"
      description="Save your tasks, progress towards development" dataFollowButton="add-preson-branch" pathPostForm="#">
      <input type="hidden" id="branch-id">
      <x-components::company.entityPicker size="3" choose="50" name="Employees" show="branch" />
    </x-components::company.popupForm>
    <div class="company-add-card card-inner">
      <div class="left">
        <h3>Company Management</h3>
        <span class="sub">Assign and control Company</span>
      </div>
      <div class="right">
        <button class="add-company button-form" data-follow="add-branch">Add branch</button>
      </div>
    </div>
    <x-components::company.fillterBar :pills="['All', 'block', 'access']" />
    <div class="companies-grid">
      <div class="company-card card-inner" data-status="access">
        <div class="company-card-top">
          <div class="company-header">
            <div class="company-icon">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="4" width="14" height="16" rx="2" fill="var(--colorSVG2)" />
                <rect x="7" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="10" y="17" width="4" height="3" fill="var(--colorSVG1)" />
              </svg>
            </div>
            <div class="company-title">
              <h3>VKontakte</h3>
              <p>IT Technology</p>
            </div>
            <button class="state-btn access button-form" data-id="9089989" data-follow="add-preson-branch" type="button">
              Add Person
            </button>
            <button class="button-top button-form" data-id="9089989" data-follow="permissions-branch" type="button">
              <svg width="30" height="30" viewBox="-15 -15 130 130" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path d="M50 10  L85 25  V50  C85 72 70 88 50 95  C30 88 15 72 15 50  V25  Z" fill="none" stroke="white" stroke-width="6" stroke-linejoin="round" stroke-linecap="round"/>
                <path d="M35 55 L45 65 L68 42" stroke="white" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
          </div>
        </div>
        <div class="company-card-body">
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 7H20V17H4V7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 13H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Company Size:
            </span>
            <strong>150 Members</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 7H18C19.1 7 20 7.9 20 9V17C20 18.1 19.1 19 18 19H6C4.9 19 4 18.1 4 17V9C4 7.9 4.9 7 6 7Z"
                  stroke="currentColor" stroke-width="2" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 15H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Revenue:
            </span>
            <strong>$5M / year</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H10L12 8H20V18C20 19.1 19.1 20 18 20H6C4.9 20 4 19.1 4 18V6Z" stroke="currentColor"
                  stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Open projects:
            </span>
            <strong>10 Projects</strong>
          </div>
        </div>
        <div class="company-card-footer">
          <a href="#" class="btn-send" type="submit">
            <svg class="cube-svg" width="30" height="30" viewBox="0 0 500 500"
              xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="top-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="left-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="right-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
              </defs>
              <polygon class="cube-top" points="250,60 420,160 250,260 80,160" fill="url(#top-1)" />
              <polygon class="cube-left" points="80,160 250,260 250,440 80,340" fill="url(#left-1)" />
              <polygon class="cube-right" points="420,160 250,260 250,440 420,340" fill="url(#right-1)" />
            </svg>
            <p>Visit</p>
          </a>
          <button class="state-btn block" type="button">
            <svg width="16" height="16" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="12" r="9" stroke="currentColor" stroke-width="2"></circle>
              <path d="M8.5 8.5L15.5 15.5" stroke="currentColor" stroke-width="2" stroke-linecap="round"></path>
            </svg>
            Block
          </button>
        </div>
      </div>
      <div class="company-card card-inner" data-status="block">
        <div class="company-card-top">
          <div class="company-header">
            <div class="company-icon">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="4" width="14" height="16" rx="2" fill="var(--colorSVG2)" />
                <rect x="7" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="10" y="17" width="4" height="3" fill="var(--colorSVG1)" />
              </svg>
            </div>
            <div class="company-title">
              <h3>VKontakte</h3>
              <p>IT Technology</p>
            </div>
            <button class="state-btn access button-form" data-id="9089989" data-follow="add-preson-branch"
              type="button">
              Add Person
            </button>
            <button class="button-top button-form" data-id="9089989" data-follow="permissions-branch" type="button">
              <svg width="30" height="30" viewBox="-15 -15 130 130" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path d="M50 10  L85 25  V50  C85 72 70 88 50 95  C30 88 15 72 15 50  V25  Z" fill="none" stroke="white" stroke-width="6" stroke-linejoin="round" stroke-linecap="round"/>
                <path d="M35 55 L45 65 L68 42" stroke="white" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
          </div>
        </div>
        <div class="company-card-body">
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 7H20V17H4V7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 13H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Company Size:
            </span>
            <strong>150 Members</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 7H18C19.1 7 20 7.9 20 9V17C20 18.1 19.1 19 18 19H6C4.9 19 4 18.1 4 17V9C4 7.9 4.9 7 6 7Z"
                  stroke="currentColor" stroke-width="2" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 15H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Revenue:
            </span>
            <strong>$5M / year</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H10L12 8H20V18C20 19.1 19.1 20 18 20H6C4.9 20 4 19.1 4 18V6Z" stroke="currentColor"
                  stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Open projects:
            </span>
            <strong>10 Projects</strong>
          </div>
        </div>
        <div class="company-card-footer">
          <a href="#" class="btn-send" type="submit">
            <svg class="cube-svg" width="30" height="30" viewBox="0 0 500 500"
              xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="top-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="left-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="right-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
              </defs>
              <polygon class="cube-top" points="250,60 420,160 250,260 80,160" fill="url(#top-1)" />
              <polygon class="cube-left" points="80,160 250,260 250,440 80,340" fill="url(#left-1)" />
              <polygon class="cube-right" points="420,160 250,260 250,440 420,340" fill="url(#right-1)" />
            </svg>
            <p>Visit</p>
          </a>
          <button class="state-btn access" type="button">
            access
          </button>
        </div>
      </div>
      <div class="company-card card-inner" data-status="access">
        <div class="company-card-top">
          <div class="company-header">
            <div class="company-icon">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="5" y="4" width="14" height="16" rx="2" fill="var(--colorSVG2)" />
                <rect x="7" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="6" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="10" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="7" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="11" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="15" y="14" width="2" height="2" fill="var(--colorSVG1)" />
                <rect x="10" y="17" width="4" height="3" fill="var(--colorSVG1)" />
              </svg>
            </div>
            <div class="company-title">
              <h3>VKontakte</h3>
              <p>IT Technology</p>
            </div>
            <button class="state-btn access button-form" data-id="9089989" data-follow="add-preson-branch"
              type="button">
              Add Person
            </button>
            <button class="button-top button-form" data-id="9089989" data-follow="permissions-branch" type="button">
              <svg width="30" height="30" viewBox="-15 -15 130 130" xmlns="http://www.w3.org/2000/svg" fill="none">
                <path d="M50 10  L85 25  V50  C85 72 70 88 50 95  C30 88 15 72 15 50  V25  Z" fill="none" stroke="white" stroke-width="6" stroke-linejoin="round" stroke-linecap="round"/>
                <path d="M35 55 L45 65 L68 42" stroke="white" stroke-width="9" fill="none" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2">
            </a>
            <a href="/company/user-details" class="avatar-link">
              <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3">
            </a>
          </div>
        </div>
        <div class="company-card-body">
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 7H20V17H4V7Z" stroke="currentColor" stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 13H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Company Size:
            </span>
            <strong>150 Members</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M6 7H18C19.1 7 20 7.9 20 9V17C20 18.1 19.1 19 18 19H6C4.9 19 4 18.1 4 17V9C4 7.9 4.9 7 6 7Z"
                  stroke="currentColor" stroke-width="2" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
                <path d="M8 15H12" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Revenue:
            </span>
            <strong>$5M / year</strong>
          </div>
          <div class="company-meta">
            <span class="meta-left">
              <svg width="16" height="16" viewBox="0 0 24 24" fill="none"
                xmlns="http://www.w3.org/2000/svg">
                <path d="M4 6H10L12 8H20V18C20 19.1 19.1 20 18 20H6C4.9 20 4 19.1 4 18V6Z" stroke="currentColor"
                  stroke-width="2" stroke-linejoin="round" />
                <path d="M4 10H20" stroke="currentColor" stroke-width="2" stroke-linecap="round" />
              </svg>
              Open projects:
            </span>
            <strong>10 Projects</strong>
          </div>
        </div>
        <div class="company-card-footer">
          <a href="#" class="btn-send" type="submit">
            <svg class="cube-svg" width="30" height="30" viewBox="0 0 500 500"
              xmlns="http://www.w3.org/2000/svg">
              <defs>
                <linearGradient id="top-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="left-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
                <linearGradient id="right-1">
                  <stop offset="0%" stop-color="{{ $color ?? 'currentColor' }}" />
                  <stop offset="100%" stop-color="{{ $color ?? 'currentColor' }}" />
                </linearGradient>
              </defs>
              <polygon class="cube-top" points="250,60 420,160 250,260 80,160" fill="url(#top-1)" />
              <polygon class="cube-left" points="80,160 250,260 250,440 80,340" fill="url(#left-1)" />
              <polygon class="cube-right" points="420,160 250,260 250,440 420,340" fill="url(#right-1)" />
            </svg>
            <p>Visit</p>
          </a>
          <button class="state-btn block" type="button">
            Block
          </button>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/sections.js') }}"></script>
@endsection
