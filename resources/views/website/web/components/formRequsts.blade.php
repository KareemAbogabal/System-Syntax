<main class="main-form">
  <button class="close">
    <svg width="30" height="30" viewBox="0 0 30 30">
      <path d="M8 8L11 11" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <path d="M16 16L21 21" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
      <line x1="22" y1="8" x2="8" y2="22" stroke="var(--bg-color)" stroke-width="2.8" stroke-linecap="round"/>
    </svg>
  </button>
  <div class="card">
    <h1>Define What’s Next</h1>
    <p>Tell us what matters we’ll handle the rest with uncompromising precision.</p>
    <form action="" method="post">
      <div class="radio-container">
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
      </div>
      <button type="submit" class="submit-btn">
        <svg xmlns="http://www.w3.org/2000/svg" fill="none" viewBox="0 0 24 24" stroke-width="1.5" stroke="currentColor" class="w-6 h-6">
          <path stroke-linecap="round" stroke-linejoin="round" d="M4.5 12h15m0 0l-6.75-6.75M19.5 12l-6.75 6.75"></path>
        </svg>
        <div class="text">
          Send
        </div>
      </button>
    </form>
  </div>
</main>