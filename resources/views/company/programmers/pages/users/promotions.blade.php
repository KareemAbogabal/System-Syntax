@extends('company.programmers.main')

@section('title', 'Promotions')

@section('page')
  <div class="promotions-page">
    <x-components::company.popupForm header="Add promotion"
      description="Add promotions within the company to encourage employees to be more productive"
      dataFollowButton="add-promotion" pathPostForm="#">
      <div class="perant-input">
        <label for="promotion-name">promotion name</label>
        <input type="text" id="promotion-name" placeholder="Promotion name">
      </div>
      <div class="perant-input">
        <label for="sub-title">sub title</label>
        <input type="text" id="sub-title" placeholder="Sub title">
      </div>
      <div class="perant-input">
        <label for="promotion-icon">promotion icon SVG</label>
        <textarea id="promotion-icon" placeholder="Promotion icon SVG"></textarea>
      </div>
    </x-components::company.popupForm>
    <x-components::company.popupForm header="Add person in promotion" description="Add promotions within the company to encourage employees to be more productive" dataFollowButton="add-person-in-promotion" pathPostForm="#">
      <input type="hidden" id="promotion-id">
      <x-components::company.entityPicker size="3" choose="5" name="Employees" show="promotion" />
    </x-components::company.popupForm>
    <x-components::company.popupShow dataFollowButton="show-promotion">
      <div class="card-show">
        <div class="promotion-show-head">
          <div class="promotion-show-title-wrap">
            <div class="promotion-show-icon">
            </div>
            <div>
              <span class="promotion-show-kicker">Promotion</span>
              <h2></h2>
              <p></p>
            </div>
          </div>
          <div class="promotion-show-badge">
          </div>
        </div>
        <div class="promotion-show-employees">
        </div>
      </div>
    </x-components::company.popupShow>
    <section class="promotions-page__hero card-inner">
      <div class="promotions-page__hero-content">
        <p class="promotions-page__eyebrow">Company Promotions</p>
        <h1 class="promotions-page__title">Promotion Management</h1>
        <p class="promotions-page__subtitle">
          Premium promotion dashboard for tracking levels, eligible employees, and yearly advancement.
        </p>
      </div>
      <button class="promotions-page__add-btn button-form" data-follow="add-promotion">
        <span class="promotions-page__add-btn-icon">+</span>
        Add New Promotion
      </button>
    </section>
    <section class="promotions-page__stats">
      <article class="promotions-page__stat-card card-inner">
        <div class="promotions-page__stat-icon promotions-page__stat-icon--gold">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
            <path d="M21 16L32 29L43 16"></path>
            <path d="M19 29H45"></path>
            <path d="M32 29V40"></path>
          </svg>
        </div>
        <div class="promotions-page__stat-info">
          <span class="promotions-page__stat-label">Executive Promotion</span>
          <strong class="promotions-page__stat-value">18 Employees</strong>
        </div>
      </article>
      <article class="promotions-page__stat-card card-inner">
        <div class="promotions-page__stat-icon promotions-page__stat-icon--purple">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M18 38L26 28L32 14L38 28L46 38"></path>
            <path d="M26 28L32 34L38 28"></path>
            <path d="M22 44H42"></path>
            <path d="M32 14V48"></path>
          </svg>
        </div>
        <div class="promotions-page__stat-info">
          <span class="promotions-page__stat-label">Senior Promotion</span>
          <strong class="promotions-page__stat-value">36 Employees</strong>
        </div>
      </article>
      <article class="promotions-page__stat-card card-inner">
        <div class="promotions-page__stat-icon promotions-page__stat-icon--blue">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M32 10L45 22L39 24L47 34L32 54L17 34L25 24L19 22L32 10Z"></path>
            <path d="M24 29L32 21L40 29"></path>
            <path d="M20 34H44"></path>
          </svg>
        </div>
        <div class="promotions-page__stat-info">
          <span class="promotions-page__stat-label">Leadership Promotion</span>
          <strong class="promotions-page__stat-value">12 Employees</strong>
        </div>
      </article>
      <article class="promotions-page__stat-card card-inner">
        <div class="promotions-page__stat-icon promotions-page__stat-icon--green">
          <svg viewBox="0 0 64 64" aria-hidden="true">
            <path d="M32 10L39 24L54 28L43 39L46 54L32 46L18 54L21 39L10 28L25 24L32 10Z"></path>
          </svg>
        </div>
        <div class="promotions-page__stat-info">
          <span class="promotions-page__stat-label">Eligible Now</span>
          <strong class="promotions-page__stat-value">27 Employees</strong>
        </div>
      </article>
    </section>
    <section class="promotions-page__grid">
      <article class="promotions-page__card card-inner">
        <div class="promotions-page__card-header">
          <div class="promotions-page__card-icon promotions-page__card-icon--gold">
            <svg viewBox="0 0 64 64" aria-hidden="true">
              <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
              <path d="M21 16L32 29L43 16"></path>
              <path d="M19 29H45"></path>
              <path d="M32 29V40"></path>
            </svg>
          </div>
          <div class="promotions-page__card-title-wrap">
            <h2 class="promotions-page__card-title">Executive Level</h2>
            <p class="promotions-page__card-subtitle">Top management promotion track</p>
          </div>
          <span class="promotions-page__card-badge">18</span>
        </div>
        <div class="promotions-page__card-metrics">
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Employees</span>
            <strong class="promotions-page__metric-value">18</strong>
          </div>
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Eligible</span>
            <strong class="promotions-page__metric-value">6</strong>
          </div>
        </div>
        <div class="promotions-page__avatars">
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=11" loading="lazy" alt="Employee 1" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Employee 2" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=13" loading="lazy" alt="Employee 3" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=14" loading="lazy" alt="Employee 4" />
          </a>
        </div>
        <div class="promotions-page__card-footer">
          <button class="promotions-page__card-btn button-form" data-follow="show-promotion">View Details</button>
          <button class="promotions-page__employee-btn button-form" data-follow="add-person-in-promotion"
            data-id="890">+ Add Employees</button>
        </div>
      </article>
      <article class="promotions-page__card card-inner">
        <div class="promotions-page__card-header">
          <div class="promotions-page__card-icon promotions-page__card-icon--purple">
            <svg viewBox="0 0 64 64" aria-hidden="true">
              <path d="M18 38L26 28L32 14L38 28L46 38"></path>
              <path d="M26 28L32 34L38 28"></path>
              <path d="M22 44H42"></path>
              <path d="M32 14V48"></path>
            </svg>
          </div>
          <div class="promotions-page__card-title-wrap">
            <h2 class="promotions-page__card-title">Senior Level</h2>
            <p class="promotions-page__card-subtitle">Skilled growth and yearly elevation</p>
          </div>
          <span class="promotions-page__card-badge">36</span>
        </div>
        <div class="promotions-page__card-metrics">
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Employees</span>
            <strong class="promotions-page__metric-value">36</strong>
          </div>
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Eligible</span>
            <strong class="promotions-page__metric-value">11</strong>
          </div>
        </div>
        <div class="promotions-page__avatars">
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=21" loading="lazy" alt="Employee 1" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=22" loading="lazy" alt="Employee 2" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=23" loading="lazy" alt="Employee 3" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=24" loading="lazy" alt="Employee 4" />
          </a>
        </div>
        <div class="promotions-page__card-footer">
          <button class="promotions-page__card-btn button-form" data-follow="show-promotion">View Details</button>
          <button class="promotions-page__employee-btn button-form" data-follow="add-person-in-promotion"
            data-id="890">+ Add Employees</button>
        </div>
      </article>
      <article class="promotions-page__card card-inner">
        <div class="promotions-page__card-header">
          <div class="promotions-page__card-icon promotions-page__card-icon--blue">
            <svg viewBox="0 0 64 64" aria-hidden="true">
              <path d="M32 10L45 22L39 24L47 34L32 54L17 34L25 24L19 22L32 10Z"></path>
              <path d="M24 29L32 21L40 29"></path>
              <path d="M20 34H44"></path>
            </svg>
          </div>
          <div class="promotions-page__card-title-wrap">
            <h2 class="promotions-page__card-title">Leadership Track</h2>
            <p class="promotions-page__card-subtitle">Future team leads and managers</p>
          </div>
          <span class="promotions-page__card-badge">12</span>
        </div>
        <div class="promotions-page__card-metrics">
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Employees</span>
            <strong class="promotions-page__metric-value">12</strong>
          </div>
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Eligible</span>
            <strong class="promotions-page__metric-value">4</strong>
          </div>
        </div>
        <div class="promotions-page__avatars">
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=31" loading="lazy" alt="Employee 1" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Employee 2" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=33" loading="lazy" alt="Employee 3" />
          </a>
        </div>
        <div class="promotions-page__card-footer">
          <button class="promotions-page__card-btn button-form" data-follow="show-promotion">View Details</button>
          <button class="promotions-page__employee-btn button-form" data-follow="add-person-in-promotion"
            data-id="890">+ Add Employees</button>
        </div>
      </article>
      <article class="promotions-page__card card-inner">
        <div class="promotions-page__card-header">
          <div class="promotions-page__card-icon promotions-page__card-icon--green">
            <svg viewBox="0 0 64 64" aria-hidden="true">
              <path d="M32 10L39 24L54 28L43 39L46 54L32 46L18 54L21 39L10 28L25 24L32 10Z"></path>
            </svg>
          </div>
          <div class="promotions-page__card-title-wrap">
            <h2 class="promotions-page__card-title">Performance Boost</h2>
            <p class="promotions-page__card-subtitle">High-achievers ready to rise</p>
          </div>
          <span class="promotions-page__card-badge">27</span>
        </div>
        <div class="promotions-page__card-metrics">
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Employees</span>
            <strong class="promotions-page__metric-value">27</strong>
          </div>
          <div class="promotions-page__metric">
            <span class="promotions-page__metric-label">Eligible</span>
            <strong class="promotions-page__metric-value">15</strong>
          </div>
        </div>
        <div class="promotions-page__avatars">
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=41" loading="lazy" alt="Employee 1" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=42" loading="lazy" alt="Employee 2" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=43" loading="lazy" alt="Employee 3" />
          </a>
          <a class="promotions-page__avatar-button" href="/company/user-details" aria-label="Open employee profile">
            <img src="https://i.pravatar.cc/100?img=44" loading="lazy" alt="Employee 4" />
          </a>
        </div>
        <div class="promotions-page__card-footer">
          <button class="promotions-page__card-btn button-form" data-follow="show-promotion">View Details</button>
          <button class="promotions-page__employee-btn button-form" data-follow="add-person-in-promotion"
            data-id="890">+ Add Employees</button>
        </div>
      </article>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/users/promotions.js') }}"></script>
@endsection
