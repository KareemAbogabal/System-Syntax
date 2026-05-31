@extends('company.programmers.main')

@section('title', 'Requests Posts')

@section('page')
  <div class="requests-page">
    <x-components::company.fillterBar :pills="['All', 'requested', 'reviewing', 'accepted', 'completed', 'blocked', 'pending']" />
    <x-components::table :header="['#', 'Name', 'Rank', 'Subject', 'Status', 'Date', 'Details']">
      <div class="row" data-row data-status="requested">
        <div class="content">
          <p>1</p>
          <p class="search">Kareem Abogabal</p>
          <p>creativity</p>
          <p>Publish project</p>
          <p data-state="post">post</p>
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
              <div><span>Name</span><strong>System Syntax</strong></div>
              <div>
                <img src="https://images.unsplash.com/photo-1504384308090-c894fdcc538d" loading="lazy" alt="">
              </div>
              <div class="full-row">
                <img src="https://cdn.dribbble.com/userupload/7480351/file/original-265c33670213c7952c3048215d37d15d.png?resize=752x&vertical=center" loading="lazy" alt="">
              </div>
            </div>
            <div class="details-actions">
              <button type="button" class="access">Accept</button>
              <button type="button" class="block">Reject</button>
            </div>
          </div>
        </div>
      </div>
    </x-components::table>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/requests/requests-posts.js') }}"></script>
@endsection
