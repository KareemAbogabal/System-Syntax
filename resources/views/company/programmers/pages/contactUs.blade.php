@extends('company.programmers.main')

@section('title', 'Contact Us')

@section('page')
  <div class="contacts-page">
    <div class="page-shell">
      <section class="hero-card card-inner">
        <div class="hero-badge">Incoming Requests</div>
        <h1>Contact Inbox</h1>
        <p>Review incoming external requests, reply to them, archive completed ones, and send new requests from the same page when needed.</p>
        <div class="hero-tags">
          <span>Business inquiry</span>
          <span>Support request</span>
          <span>Partnership</span>
          <span>Custom project</span>
        </div>
      </section>
      <section class="requests-card card-inner">
        <div class="section-head">
          <div>
            <h2>Latest requests</h2>
            <p>All incoming requests appear here in a full-width layout for quick review.</p>
          </div>
          <div class="count-chip">12 new</div>
        </div>
        <div class="request-list">
          <article class="request-item card-inner request-item--new">
            <div class="request-top">
              <div class="avatar">AH</div>
              <div class="request-info">
                <strong>Ahmed Hassan</strong>
                <span>ahmed@example.com</span>
              </div>
              <div class="status status--new">New</div>
            </div>
            <p class="subject">Need a quote for a custom dashboard</p>
            <p class="summary">We are looking for a premium dashboard for our company with reporting and client management.</p>
            <div class="request-meta">
              <span>Business inquiry</span>
              <span>Today, 08:40 AM</span>
            </div>
            <div class="request-actions">
              <button type="button" class="action-btn action-btn--reply">Reply</button>
              <button type="button" class="action-btn action-btn--archive">Archive</button>
            </div>
          </article>
          <article class="request-item card-inner request-item--open">
            <div class="request-top">
              <div class="avatar">MS</div>
              <div class="request-info">
                <strong>Mona Salem</strong>
                <span>mona@studio.com</span>
              </div>
              <div class="status status--open">Open</div>
            </div>
            <p class="subject">Website support issue</p>
            <p class="summary">The contact form is not sending messages on mobile devices.</p>
            <div class="request-meta">
              <span>Support request</span>
              <span>Yesterday, 02:15 PM</span>
            </div>
            <div class="request-actions">
              <button type="button" class="action-btn action-btn--reply">Reply</button>
              <button type="button" class="action-btn action-btn--archive">Archive</button>
            </div>
          </article>
          <article class="request-item card-inner request-item--done">
            <div class="request-top">
              <div class="avatar">YO</div>
              <div class="request-info">
                <strong>Youssef Omar</strong>
                <span>you@example.net</span>
              </div>
              <div class="status status--done">Done</div>
            </div>
            <p class="subject">Partnership proposal</p>
            <p class="summary">We would like to discuss a long-term collaboration for multiple websites.</p>
            <div class="request-meta">
              <span>Partnership</span>
              <span>10 Apr 2026</span>
            </div>
            <div class="request-actions">
              <button type="button" class="action-btn action-btn--reply">Reply</button>
              <button type="button" class="action-btn action-btn--archive">Archive</button>
            </div>
          </article>
          <article class="request-item card-inner request-item--new">
            <div class="request-top">
              <div class="avatar">RA</div>
              <div class="request-info">
                <strong>Rana Adel</strong>
                <span>rana@brand.com</span>
              </div>
              <div class="status status--new">New</div>
            </div>
            <p class="subject">Custom development request</p>
            <p class="summary">We need a secure and elegant client portal with notifications and archived requests.</p>
            <div class="request-meta">
              <span>Custom project</span>
              <span>10 Apr 2026, 11:30 PM</span>
            </div>
            <div class="request-actions">
              <button type="button" class="action-btn action-btn--reply">Reply</button>
              <button type="button" class="action-btn action-btn--archive">Archive</button>
            </div>
          </article>
        </div>
      </section>
      <section class="send-card card-inner">
        <div class="section-head">
          <div>
            <h2>Send request</h2>
            <p>Create a new request manually and schedule interviews for job applicants.</p>
          </div>
        </div>
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
          <div class="form-grid two">
            <div class="field">
              <label for="interview_date">Interview Date</label>
              <input
                id="interview_date"
                name="interview_date"
                type="datetime-local"
                class="disabled-input"
                disabled
              />
            </div>
            <div class="field">
              <label for="interview_type">Interview Type</label>
              <select
                id="interview_type"
                name="interview_type"
                class="disabled-input"
                disabled
              >
                <option value="">Select interview type</option>
                <option value="online">Online interview</option>
                <option value="office">Office interview</option>
                <option value="call">Phone call</option>
              </select>
            </div>
          </div>
          <div class="field">
            <label for="subject">Subject</label>
            <input
              id="subject"
              name="subject"
              type="text"
              placeholder="Write a short subject"
            />
          </div>
          <div class="field">
            <label for="message">Message</label>
            <textarea
              id="message"
              name="message"
              rows="6"
              placeholder="Describe your request in detail..."
            ></textarea>
          </div>
          <div class="form-actions">
            <button type="submit" class="btn btn-primary">
              Send Request
            </button>
            <button type="reset" class="btn btn-secondary">
              Clear Form
            </button>
          </div>
        </form>
      </section>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/contactUs.js') }}"></script>
@endsection