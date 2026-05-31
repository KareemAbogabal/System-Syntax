@extends("website.dashbord.main")

@section("title", "Chat")

@section("page")
  <section class="chat-page">
    <aside>
      <button class="control-bar">
        <label class="hamburger">
          <input type="checkbox" class="input-hamburger"/>
          <svg viewBox="0 0 32 32">
            <path class="line line-top-bottom" d="M27 10 13 10C10.8 10 9 8.2 9 6 9 3.5 10.8 2 13 2 15.2 2 17 3.8 17 6L17 26C17 28.2 18.8 30 21 30 23.2 30 25 28.2 25 26 25 23.8 23.2 22 21 22L7 22"></path>
            <path class="line" d="M7 16 27 16"></path>
          </svg>
        </label>
      </button>
      <div class="contacts">
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
        <button class="contact">
          <img class="img" src="{{ asset("images/content/logo/logo-company.png") }}" loading="lazy" alt="Contact Avatar">
          <div class="contact-info">
            <h3>Kareem Aboga</h3>
            <p>Online</p>
          </div>
        </button>
      </div>
    </aside>
    <x-components::company.chat />
  </section>
  <script src="{{ asset('js/website/dashbord/pages/chat.js') }}"></script>
  <script src="{{ asset('js/chat.js') }}"></script>
@endsection