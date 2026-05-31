<main class="main-form" data-follow="{{ $dataFollowButton }}" @if($dataFollowStateProject) data-follow-state-project="{{ $dataFollowStateProject ?? '' }}" @endif>
  <button class="close">
    <svg width="30" height="30" viewBox="0 0 30 30">
      <path d="M8 8L11 11" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <path d="M16 16L21 21" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <line x1="22" y1="8" x2="8" y2="22" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
    </svg>
  </button>
  <div class="card-form">
    <h1 class="title">{{ $header }}</h1>
    <p class="description">{{ $description }}</p>
    <form action="{{ $pathPostForm }}" method="post">
      @csrf
      @if(trim($slot) !== '')
        {!! $slot !!}
      @endif
      {{-- <div class="radio-container">
        <input checked id="radio-company" name="radio" type="radio" />
        <label for="radio-company">Company</label>
        <input id="radio-person" name="radio" type="radio" />
        <label for="radio-person">Person</label>
        <div class="glider-container">
          <div class="glider"></div>
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <input type="text" placeholder="Full name">
          <label for="">Full name</label>
        </div>
        <div class="perant-input company">
          <input type="text" placeholder="Name company">
          <label for="">Name company</label>
        </div>
      </div>
      <div class="perant-input">
        <input type="text"  placeholder="email">
        <label for="">email</label>
      </div>
      <div class="perant-input">
        <input type="text"  placeholder="phone">
        <label for="">phone</label>
      </div>
      <div class="perant-input">
        <input type="text"  placeholder="code discount">
        <label for="">code discount</label>
      </div>
      <div class="main-check">
        <label class="checkBox">
          <input id="ch1" type="checkbox">
          <div class="transition"></div>
        </label>
        <label for="ch1">Send me a copy</label>
      </div> --}}
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
    </form>
  </div>
</main>