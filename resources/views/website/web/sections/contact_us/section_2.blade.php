<section class="section-2">
  @include("website.web.SVG.icon_section", ["iconText" => "Our motto"])
  <section class="send-card card-inner">
    <div class="section-head">
      <div>
        <h2>Send request</h2>
        <p>Create a new request manually and schedule interviews for job applicants.</p>
      </div>
    </div>
    <div class="send-layout">
      <form class="send-form" method="POST" action="#">
        @csrf
        <div class="form-grid two">
          <div class="field">
            <label for="name">Full Name</label>
            <input id="name" name="name" type="text" placeholder="Your full name" />
          </div>
          <div class="field">
            <label for="company">Company / Organization</label>
            <input id="company" name="company" type="text" placeholder="Company name" />
          </div>
        </div>
        <div class="form-grid two">
          <div class="field">
            <label for="email">Email Address</label>
            <input id="email" name="email" type="email" placeholder="name@example.com" />
          </div>
          <div class="field">
            <label for="phone">Phone Number</label>
            <input id="phone" name="phone" type="tel" placeholder="+20 10 000 000 00" />
          </div>
        </div>
        <div class="form-grid two">
          <div class="field">
            <label for="type">Request Type</label>
            <select id="type" name="type">
              <option value="business">Business inquiry</option>
              <option value="support">Technical support</option>
              <option value="partnership">Partnership request</option>
              <option value="issue">Website issue</option>
              <option value="development">Custom development</option>
              <option value="job">Job application</option>
            </select>
          </div>
          <div class="field">
            <label for="priority">Priority</label>
            <select id="priority" name="priority">
              <option>Normal</option>
              <option>Medium</option>
              <option>High</option>
              <option>Urgent</option>
            </select>
          </div>
        </div>
        <div class="field">
          <label for="subject">Subject</label>
          <input id="subject" name="subject" type="text" placeholder="Write a short subject" />
        </div>
        <div class="field">
          <label for="message">Message</label>
          <textarea id="message" name="message" rows="6" placeholder="Describe your request in detail..."></textarea>
        </div>
        <div class="form-actions">
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
        </div>
      </form>
      <aside class="company-card">
        <div class="company-title">Company Profile</div>
        <div class="company-block">
          <span>Location</span>
          <p>Damietta, Egypt</p>
        </div>
        <div class="company-block">
          <span>Working Hours</span>
          <p>Mon – Fri | 9:00 AM – 6:00 PM</p>
        </div>
        <div class="company-block">
          <span>Phone</span>
          <p>+20 10 000 000 00</p>
        </div>
        <div class="company-block">
          <span>Email</span>
          <p>info@company.com</p>
        </div>
        <div class="map-box">
          <iframe
            src="https://www.google.com/maps/embed?pb="
            loading="lazy">
          </iframe>
        </div>
      </aside>
    </div>
  </section>
</section>