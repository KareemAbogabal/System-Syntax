@extends("website.dashbord.main")

@section("title", "Settings")

@section("page")
  <div class="setting">
    <div class="topbar">
      <div class="brand">
        <h1>Settings</h1>
        <p>Adjust your account in a cleaner, more distinctive layout with the upload action attached directly to the image.</p>
      </div>
      <div class="badge"><span class="dot"></span> Secure Profile Center</div>
    </div>
    <section class="surface">
      <div class="hero-band">
        <div class="intro">
          <h2>Account Studio</h2>
          <p>
            Edit your identity, contact details, and privacy options from one elegant view.
            The layout is intentionally different: the profile image becomes the focus, and the upload button sits on top of it.
          </p>
          <div class="mini-grid">
            <div class="mini">
              <span>Account</span>
              <strong>Premium</strong>
            </div>
            <div class="mini">
              <span>Security</span>
              <strong>Enabled</strong>
            </div>
            <div class="mini">
              <span>QR Sharing</span>
              <strong>Active</strong>
            </div>
          </div>
        </div>
        <div class="profile-stage">
          <div class="avatar-shell">
            <div class="avatar">
              <img src="https://images.unsplash.com/photo-1500648767791-00dcc994a43e?w=400&q=80&auto=format&fit=crop" loading="lazy" alt="Profile picture">
              <label class="upload-float" for="photoUpload">
                <svg viewBox="0 0 24 24">
                  <path d="M12 16V6" />
                  <path d="M8 10l4-4 4 4" />
                </svg>
                Upload
                <input id="photoUpload" type="file" accept="image/*">
              </label>
            </div>
          </div>
          <div class="avatar-caption">
            <strong>Kareem Abogabal</strong>
            <span>Profile picture and identity</span>
          </div>
        </d>
      </div>
      <div class="form-grid">
        <section class="form-card">
          <h3>Personal Information</h3>
          <p>Update your name, email, password, and phone number.</p>
          <form class="fields">
            <div class="field">
              <label for="name">Full Name</label>
              <input id="name" type="text" value="Kareem Abogabal" placeholder="Enter your full name">
            </div>
            <div class="field">
              <label for="email">Email Address</label>
              <input id="email" type="email" value="kareemaboga@gmail.com" placeholder="Enter your email">
            </div>
            <div class="field">
              <label for="password">Password</label>
              <input id="password" type="password" value="************" placeholder="Enter a new password">
            </div>
            <div class="field">
              <label for="phone">Phone Number</label>
              <input id="phone" type="tel" value="+20 100 000 0000" placeholder="Enter your phone number">
            </div>
            <div class="actions">
              <a class="btn btn-secondary" href="#">Cancel</a>
              <a class="btn btn-primary" href="#">Save Changes</a>
            </div>
          </form>
        </section>
        <section class="form-card privacy-card">
          <h3>Privacy</h3>
          <p>Control whether the QR code can be shared with clients.</p>
          <div class="privacy-item">
            <h4>Disable QR Code Sharing</h4>
            <p>Turn this switch on to block QR code sharing from your profile.</p>
            <label class="switch" aria-label="Disable QR code sharing">
              <input type="checkbox">
              <span class="slider"></span>
            </label>
          </div>
          <div class="privacy-item">
            <h4>Profile Visibility</h4>
            <p>Keep your account presentation minimal, clean, and secure.</p>
          </div>
        </section>
      </div>
    </section>
  </div>
  <script src="{{ asset("js/website/dashbord/pages/setting.js") }}"></script>
@endsection