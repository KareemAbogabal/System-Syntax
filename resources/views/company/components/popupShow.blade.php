<main class="main-form" data-follow="{{ $dataFollowButton }}">
  <button class="close">
    <svg width="30" height="30" viewBox="0 0 30 30">
      <path d="M8 8L11 11" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <path d="M16 16L21 21" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <line x1="22" y1="8" x2="8" y2="22" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
    </svg>
  </button>
  <div class="card-show">
    @if(trim($slot) !== '')
      {!! $slot !!}
    @endif
  </div>
</main>