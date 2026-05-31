<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <link rel="icon" href="{{ asset("images/content/logo/logo-company.png") }}">
  <link rel="stylesheet" href="{{ asset('css/company/programmers/login.css') }}">
  <title>System Syntax | Welcome to the company</title>
</head>
<body>
  <div class="main-img">
    <img src="{{ asset("images/content/sections/img-login-1.png") }}" loading="lazy" alt="no img company">
    <h1>Welcome Back</h1>
  </div>
  <div class="card">
    <h1>Built for the Few</h1>
    <p>You are the true heart of this success, and through your continuous efforts, ideas are transformed into achievements, and ambitions into a reality we are proud of every day.</p>
    <form action="" method="post">
      <div class="perant-input">
        <input type="text" placeholder="User name">
        <label data-active for="">User name</label>
      </div>
      <div class="perant-input">
        <input type="text"  placeholder="passwrord">
        <label data-active for="">passwrord</label>
      </div>
      <div class="main-check">
        <button type="button" class="forget">Forget password !</button>
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
  <div class="card hidden">
    <h1>No need to worry</h1>
    <p>We're here to help you recover your account easily and securely. Just enter your email address, and we'll send you a link to reset your password in a few simple steps.</p>
    <form action="" method="post">
      <div class="perant-input">
        <input type="text" placeholder="Email">
        <label data-active for="">Email</label>
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
  <div class="card hidden">
    <h1>No need to worry</h1>
    <p>We're here to help you recover your account easily and securely. Just enter your email address, and we'll send you a link to reset your password in a few simple steps.</p>
    <form action="" method="post">
      <div class="perant-input">
        <input type="text" placeholder="Code">
        <label data-active for="">Code</label>
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
  <div class="card hidden">
    <h1>Create a new password</h1>
    <p>Create a new password to protect your account and regain access securely and easily.</p>
    <form action="" method="post">
      <div class="perant-input">
        <div class="password-box">
          <input type="password" id="password" name="password" placeholder="Create a secure password">
          <label data-active for="password">Password</label>
          <button type="button" class="toggle-password" data-target="password" aria-label="Show password">
            <svg class="eye-icon eye-open" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z" stroke="currentColor" stroke-width="1.8"/>
              <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
            </svg>
            <svg class="eye-icon eye-close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M2 12s3.5-7 10-7c2.3 0 4.2.7 5.7 1.7M22 12s-3.5 7-10 7c-2.3 0-4.2-.7-5.7-1.7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M9.5 9.5A3 3 0 0 0 12 15a3 3 0 0 0 2.5-4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
      </div>
      <div class="perant-input">
        <div class="password-box">
          <input type="password" id="confirm-password" name="confirm-password" placeholder="Confirm password">
          <label data-active for="confirm-password">Confirm Password</label>
          <button type="button" class="toggle-password" data-target="confirm-password" aria-label="Show password">
            <svg class="eye-icon eye-open" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M2 12s3.5-7 10-7 10 7 10 7-3.5 7-10 7-10-7-10-7Z" stroke="currentColor" stroke-width="1.8"/>
              <circle cx="12" cy="12" r="3" stroke="currentColor" stroke-width="1.8"/>
            </svg>
            <svg class="eye-icon eye-close" viewBox="0 0 24 24" fill="none" aria-hidden="true">
              <path d="M3 3l18 18" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M2 12s3.5-7 10-7c2.3 0 4.2.7 5.7 1.7M22 12s-3.5 7-10 7c-2.3 0-4.2-.7-5.7-1.7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M9.5 9.5A3 3 0 0 0 12 15a3 3 0 0 0 2.5-4.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </button>
        </div>
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
  <script src="{{ asset('js/company/programmers/login.js') }}"></script>
</body>
</html>