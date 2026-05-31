@extends("website.web.pages.authentication")

@section("title", "Authentication")

@section("content")
  <x-components::website.web.nav 
    :ul="[
      ['name' => 'Home', 'url' => '#', 'active' => true],
    ]"
  />
  <section class="section-1">
    <div class="password-card">
      <div class="card-header">
        <span class="badge">Secure Access</span>
        <h1>Verify Your Identity</h1>
        <p>Enter your Main Credential and the Secondary Credential.</p>
      </div>
      <form class="password-form">
        <div class="perant-input">
          <input type="password" placeholder=" ">
          <label>Main Credential</label>
        </div>
        <div class="perant-input">
          <input type="password" placeholder=" ">
          <label>Secondary Credential</label>
        </div>
        <button type="submit">
          Send
        </button>
      </form>
    </div>
  </section>
@endsection