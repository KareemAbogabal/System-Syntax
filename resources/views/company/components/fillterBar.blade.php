<div class="fillter-bar">
  <div class="content">
    <h2 class="title">Quick Filters</h2>
    <div class="list">
      @foreach($pills as $item)
        @if ($item == "All")
          <button class="pill active" data-filter="{{ $item }}">{{ $item }}</button>
        @else
          <button class="pill" data-filter="{{ $item }}">{{ $item }}</button>
        @endif
      @endforeach
    </div>
  </div>
  <div class="input-box">
    <input type="text" data-filter placeholder="Search for any thing..." />
  </div>
</div>