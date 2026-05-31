<div class="linr">
  <div class="icon-section">
    <div class="line"></div>
    <div class="text">
      @if (empty($iconText))
        <div class="main-img">
          <img src="{{ asset("images/content/logo/logo-company.png") }}" alt="System Syntax" loading="lazy" />
        </div>
      @else
        <p>{{ $iconText }}</p>
      @endif
    </div>
    <div class="line"></div>
  </div>
</div>