@extends('company.programmers.main')

@section('title', 'Permissions')

@section('page')
  <div class="permissions-page">
    <section class="permissions-page__hero card-inner">
      <p class="permissions-page__eyebrow">Access Control</p>
      <h1 class="permissions-page__title">Permissions Architecture</h1>
      <p class="permissions-page__subtitle">
        A premium control layer for managing access, roles, and operational authority across the company.
      </p>
      <div class="permissions-page__hero-row">
        <span class="permissions-page__hero-chip">Live Access Layer</span>
        <span class="permissions-page__hero-chip">Role Based Control</span>
        <span class="permissions-page__hero-chip">Secure Workflow</span>
      </div>
    </section>
    <section class="permissions-page__stats">
      <article class="permissions-page__stat card-inner">
        <span class="permissions-page__stat-label">Total Users</span>
        <strong class="permissions-page__stat-value">128</strong>
      </article>
      <article class="permissions-page__stat card-inner">
        <span class="permissions-page__stat-label">Admins</span>
        <strong class="permissions-page__stat-value">6</strong>
      </article>
      <article class="permissions-page__stat card-inner">
        <span class="permissions-page__stat-label">Managers</span>
        <strong class="permissions-page__stat-value">21</strong>
      </article>
      <article class="permissions-page__stat card-inner">
        <span class="permissions-page__stat-label">Restricted</span>
        <strong class="permissions-page__stat-value">14</strong>
      </article>
      <article class="permissions-page__stat card-inner">
        <span class="permissions-page__stat-label">Pending Changes</span>
        <strong class="permissions-page__stat-value">9</strong>
      </article>
    </section>
    <section class="permissions-page__grid">
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Ahmed Khaled</h3>
                <div class="permissions-page__role">Frontend Engineer · Product Team</div>
              </div>
            </div>
            <div class="permissions-page__badge">Admin</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch-card" data-style data-no-active>
              <input type="checkbox" checked name="permissions[]" value="dashboard">
              <span class="switch-slider"></span>
            </label>
          </div>
        </div>
        <div class="permissions-scroll">
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
            <div class="permissions-title">Promotions</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Approve</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Create</span>
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
            <div class="permissions-title">Settings</div>
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
        <div class="permissions-page__footer">
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
      </article>
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=24" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Sara Mohamed</h3>
                <div class="permissions-page__role">Backend Engineer · Platform Team</div>
              </div>
            </div>
            <div class="permissions-page__badge">Manager</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch">
              <input type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
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
        <div class="permissions-page__footer">
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
      </article>
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=33" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Omar Hassan</h3>
                <div class="permissions-page__role">UI Designer · Creative Team</div>
              </div>
            </div>
            <div class="permissions-page__badge">Editor</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch">
              <input type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <div class="permissions-scroll">
          <div class="permissions-group">
            <div class="permissions-title">Design System</div>
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
            <div class="permissions-title">Assets</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Upload</span>
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
                  <input type="checkbox" name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="permissions-page__footer">
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
      </article>
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=44" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Yousef Adel</h3>
                <div class="permissions-page__role">DevOps Engineer · Infrastructure</div>
              </div>
            </div>
            <div class="permissions-page__badge">Admin</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch-card" data-style data-no-active>
              <input type="checkbox" checked name="permissions[]" value="dashboard">
              <span class="switch-slider"></span>
            </label>
          </div>
        </div>
        <div class="permissions-scroll">
          <div class="permissions-group">
            <div class="permissions-title">Infrastructure</div>
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
            <div class="permissions-title">Deployments</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Approve</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Rollback</span><label class="switch"><input type="checkbox"></label></div>
            </div>
          </div>
          <div class="permissions-group">
            <div class="permissions-title">Security</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View Logs</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Manage Access</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="permissions-page__footer">
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
      </article>
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=52" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Nour Samir</h3>
                <div class="permissions-page__role">Data Analyst · Business Intelligence</div>
              </div>
            </div>
            <div class="permissions-page__badge">Analyst</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch">
              <input type="checkbox">
              <span></span>
            </label>
          </div>
        </div>
        <div class="permissions-scroll">
          <div class="permissions-group">
            <div class="permissions-title">Analytics</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Export</span>
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
              <div class="permissions-row"><span>Create</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Publish</span><label class="switch"><input type="checkbox"></label></div>
              <div class="permissions-row"><span>Archive</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
            </div>
          </div>
        </div>
        <div class="permissions-page__footer">
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
      </article>
      <article class="permissions-card card-inner">
        <div class="permissions-card-head">
          <div class="permissions-card-top">
            <div class="permissions-page__user">
              <div class="permissions-page__avatar-wrap">
                <img src="https://i.pravatar.cc/120?img=61" loading="lazy" alt="User avatar">
              </div>
              <div>
                <h3 class="permissions-page__name">Mina Fathy</h3>
                <div class="permissions-page__role">Product Manager · Strategy</div>
              </div>
            </div>
            <div class="permissions-page__badge">Lead</div>
          </div>
          <div class="permissions-page__main-switch">
            <span class="permissions-page__main-label">All Access</span>
            <label class="switch-card" data-style data-no-active>
              <input type="checkbox" checked name="permissions[]" value="dashboard">
              <span class="switch-slider"></span>
            </label>
          </div>
        </div>
        <div class="permissions-scroll">
          <div class="permissions-group">
            <div class="permissions-title">Products</div>
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
              <div class="permissions-row"><span>Release</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
            </div>
          </div>
          <div class="permissions-group">
            <div class="permissions-title">Roadmap</div>
            <div class="permissions-rows">
              <div class="permissions-row"><span>View</span>
                <label class="switch-card" data-style data-no-active>
                  <input type="checkbox" checked name="permissions[]" value="dashboard">
                  <span class="switch-slider"></span>
                </label>
              </div>
              <div class="permissions-row"><span>Prioritize</span>
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
        </div>
        <div class="permissions-page__footer">
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
      </article>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/users/permissions.js') }}"></script>
@endsection
