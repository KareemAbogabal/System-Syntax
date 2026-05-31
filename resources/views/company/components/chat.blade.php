<div class="chat">
  <div class="glow"></div>
  <section class="chat-card">
    <div class="header">
      <div class="info">
        {{-- <header class="topbar">
          <div class="brand">
            <div class="brand-badge" aria-hidden="true">
              <img src="{{ asset("images/content/logo/logo-company.png") }}" alt="Contact Avatar">
            </div>
            <div class="brand-title">
              <h1>Ask your AI Agents</h1>
              <p>Beta</p>
            </div>
          </div>
        </header> --}}
      </div>
      <div class="controls">
        {{-- <div class="buttons">
          <button class="list" id="">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <rect x="3" y="6" width="13" height="12" rx="3" fill="var(--bg-color)"/>
              <path d="M16 10L21 7.5V16.5L16 14V10Z" fill="var(--bg-color)"/>
            </svg>
          </button>
          <button class="list" id="">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <path d="M6.6 10.8C8.2 14.1 9.9 15.8 13.2 17.4L15.4 15.2C15.7 14.9 16.1 14.8 16.5 14.9C17.7 15.3 19 15.5 20.3 15.5C20.8 15.5 21.2 15.9 21.2 16.4V20C21.2 20.6 20.8 21 20.2 21C10.7 21 3 13.3 3 3.8C3 3.2 3.4 2.8 4 2.8H7.6C8.1 2.8 8.5 3.2 8.5 3.7C8.5 5 8.7 6.3 9.1 7.5C9.2 7.9 9.1 8.3 8.8 8.6L6.6 10.8Z" fill="var(--bg-color)"/>
            </svg>
          </button>
          <button class="list" id="menuTrigger">
            <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
              <circle cx="12" cy="5" r="2" fill="var(--bg-color)"/>
              <circle cx="12" cy="12" r="2" fill="var(--bg-color)"/>
              <circle cx="12" cy="19" r="2" fill="var(--bg-color)"/>
            </svg>
          </button>
        </div>
        <div class="menu-wrap" id="menuWrap">
          <div class="fancy-menu" id="fancyMenu">
            <button type="button" class="fancy-item active" id="btnVideo" role="menuitem">
              <span class="icon">
                <svg width="20" height="20px" viewBox="0 0 24 24" fill="none">
                  <path d="M12 3L14.8 8.2L20.5 9L16.2 13.1L17.2 19L12 16.2L6.8 19L7.8 13.1L3.5 9L9.2 8.2L12 3Z" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                </svg>
              </span>
              <span>Pin chat</span>
            </button>
            <button type="button" class="fancy-item" id="btnVoice" role="menuitem">
              <span class="icon">
                <svg width="20" height="20" viewBox="1 -1 20 20" fill="none">
                  <path d="M12 3C9.79 3 8 4.79 8 7V9.5C8 10.33 7.68 11.12 7.12 11.71L6 13H18L16.88 11.71C16.32 11.12 16 10.33 16 9.5V7C16 4.79 14.21 3 12 3Z" stroke="var(--bg-color)" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"/>
                  <circle cx="12" cy="15.8" r="1" fill="var(--bg-color)"/>
                  <path d="M6 4L18 16" stroke="var(--bg-color)" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
              </span>
              <span>Mute notifications</span>
            </button>
            <button type="button" class="fancy-item danger" role="menuitem">
              <span class="icon">
                <svg width="20" height="20px" viewBox="0 0 24 24" fill="none">
                  <path d="M4 7H20" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                  <path d="M9 7V5C9 4.4 9.4 4 10 4H14C14.6 4 15 4.4 15 5V7" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                  <path d="M7 7L8 19C8.1 20 8.6 20 9.5 20H14.5C15.4 20 15.9 20 16 19L17 7" stroke="currentColor" stroke-width="1.8" stroke-linejoin="round"/>
                  <path d="M10 11V16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                  <path d="M14 11V16" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
                </svg>
              </span>
              <span>Delete conversation</span>
            </button>
          </div>
        </div> --}}
      </div>
    </div>
    <section class="messages" aria-label="conversation">
      {{-- <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble">
          <strong>Influx AI</strong><br />
          <p>Hey Mahmoud,</p>
          <span class="muted">We love your fitness content—especially your recent Reels on home workouts. We’re launching a new fitness brand and would love to collaborate with you. Let me know if you’re open, and I’ll share details 💪</span>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Yes, automate it and add follow-ups.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="message-row user file">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble">
          <a href="#" class="main-file-box" download>
            <div class="icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h11A2.5 2.5 0 0 1 20 7.5v9A2.5 2.5 0 0 1 17.5 19h-11A2.5 2.5 0 0 1 4 16.5v-9Z" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 9h10" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 12h6" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 15h8" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
              </svg>
            </div>
            <p>campaign_report.pdf</p>
          </a>
        </div>
      </div>
      <div class="message-row assistant file">
        <div class="bubble">
          <a href="#" class="main-file-box" download>
            <div class="icon">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7.5A2.5 2.5 0 0 1 6.5 5h11A2.5 2.5 0 0 1 20 7.5v9A2.5 2.5 0 0 1 17.5 19h-11A2.5 2.5 0 0 1 4 16.5v-9Z" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 9h10" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 12h6" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
                <path d="M7 15h8" stroke="var(--bg-color)"  stroke-width="1.5"  stroke-linecap="round"  stroke-linejoin="round"/>
              </svg>
            </div>
            <p>campaign_report.pdf</p>
          </a>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div>
      <div class="time-divider">Today, 15:32</div>
      <div class="message-row user">
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
        <div class="bubble stats-card">
          <div class="stats-title">
            <svg viewBox="0 0 24 24">
              <path d="M4 19V5" />
              <path d="M4 19h16" />
              <path d="M8 14v-3" />
              <path d="M12 16V8" />
              <path d="M16 13v-5" />
            </svg>
            Here’s a quick snapshot 📊
          </div>
          <ul class="stats-list">
            <li>Replies received: 62%</li>
            <li>Collaborations confirmed: 14</li>
            <li>Avg engagement so far: 4.9%</li>
            <li>Estimated ROI: 2.8x</li>
          </ul>
        </div>
      </div>
      <div class="message-row assistant">
        <div class="bubble">
          <a href="#" class="replay-button" aria-label="Replay">
            <div class="reply-bar-line"></div>
            <div class="reply-bar-content">
              <div class="reply-bar-label">Replying to</div>
              <div class="reply-bar-name" id="replyBarName">User</div>
              <div class="reply-bar-text" id="replyBarText">Campaign optimized. I’ll continue</div>
            </div>
          </a>
          <p>Campaign optimized. I’ll continue monitoring and update you in real time.</p>
        </div>
        <div class="seen-meta no-seen">
          <span class="seen-time">15:32</span>
          <span class="seen-icon" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M1 12.5 6 17l7-8"></path>
              <path d="M10 12.5 15 17l8-9"></path>
            </svg>
          </span>
        </div>
        <div class="avatar" aria-hidden="true">
          <img src="{{ asset("images/content/sections/img-dashbord.png") }}" alt="">
        </div>
      </div> --}}
      <div class="no-masseges">
        <p>Select a conversation to start chatting</p>
      </div>
    </section>
    <section class="composer hidden" aria-label="message composer">
      <div class="reply-bar hidden" id="replyBar">
        <div class="reply-bar-line"></div>
        <div class="reply-bar-content">
          <div class="reply-bar-label">Replying to</div>
          <div class="reply-bar-name" id="replyBarName">Message</div>
          <div class="reply-bar-text" id="replyBarText">Preview...</div>
        </div>
        <button type="button" class="reply-cancel" id="replyCancel" aria-label="cancel reply">
          <svg viewBox="0 0 24 24">
            <path d="M6 6l12 12" />
            <path d="M18 6 6 18" />
          </svg>
        </button>
      </div>
      <div class="attachments-preview" id="attachmentsPreview"></div>
      <div class="voice-recording hidden" id="voiceRecordingBar">
        <span class="voice-dot" aria-hidden="true"></span>
        <span class="voice-label">Recording</span>
        <span class="voice-timer" id="voiceTimer">00:00</span>
        <button type="button" class="voice-cancel" id="voiceCancel" aria-label="Cancel recording">
          <svg viewBox="0 0 24 24">
            <path d="M6 6l12 12" />
            <path d="M18 6 6 18" />
          </svg>
        </button>
      </div>
      <div class="composer-inner">
        <form action="" method="post">
          <div class="main-input-box">
            <div class="input-box">
              <textarea name="" id="" placeholder="Type your message here" data-no-style aria-label="Message input"></textarea>
            </div>
            <div class="input-wrap">
              <input type="checkbox" id="attach-toggle" class="attach-toggle" />
              <input type="file" id="attach-image" accept="image/*" hidden />
              <input type="file" id="attach-file" hidden />
              <input type="file" id="attach-doc" accept=".pdf,.doc,.docx,.txt" hidden />
              <div class="attach-menu">
                <label class="attach-item" for="attach-image">
                  <span class="attach-item-icon">
                    <svg viewBox="0 0 24 24">
                      <path d="M4 19V5h16v14H4Z"/>
                      <path d="m7 15 3-3 3 3 2-2 2 2"/>
                      <circle cx="9" cy="9" r="1.5"/>
                    </svg>
                  </span>
                  <span>Attach a photo</span>
                </label>
                <label class="attach-item" for="attach-file">
                  <span class="attach-item-icon">
                    <svg viewBox="0 0 24 24">
                      <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-5-5Z"/>
                      <path d="M14 2v5h5"/>
                    </svg>
                  </span>
                  <span>Attach a folder</span>
                </label>
                <label class="attach-item" for="attach-doc">
                  <span class="attach-item-icon">
                    <svg viewBox="0 0 24 24">
                      <path d="M14 2H7a2 2 0 0 0-2 2v16a2 2 0 0 0 2 2h10a2 2 0 0 0 2-2V7l-5-5Z"/>
                      <path d="M14 2v5h5"/>
                      <path d="M8 13h8"/>
                      <path d="M8 17h8"/>
                    </svg>
                  </span>
                  <span>Attach a document</span>
                </label>
              </div>
              <div class="tool-row">
                <label class="tool-icon attach-trigger" for="attach-toggle" aria-label="attach">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M12 5V19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    <path d="M5 12H19" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                  </svg>
                </label>
                <label class="tool-icon" aria-hidden="true">
                  <svg width="24" height="24" viewBox="0 0 24 24" fill="none" xmlns="http://www.w3.org/2000/svg">
                    <path d="M4 7H11" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                    <circle cx="18" cy="7" r="2.5" stroke="currentColor" stroke-width="2.5"/>
                    <circle cx="10" cy="17" r="2.5" stroke="currentColor" stroke-width="2.5"/>
                    <path d="M13 17H20" stroke="currentColor" stroke-width="2.5" stroke-linecap="round"/>
                  </svg>
                </label>
              </div>
              <button type="button" class="send-btn is-record" id="sendOrRecordBtn" aria-label="Record voice message">
                <svg class="icon-send" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M5 12h12" />
                  <path d="M13 6l6 6-6 6" />
                </svg>
                <svg class="icon-mic" viewBox="0 0 24 24" aria-hidden="true">
                  <path d="M12 14a3 3 0 0 0 3-3V7a3 3 0 0 0-6 0v4a3 3 0 0 0 3 3Z" />
                  <path d="M19 11a7 7 0 0 1-14 0" />
                  <path d="M12 18v3" />
                  <path d="M8 21h8" />
                </svg>
              </button>
            </div>
          </div>
        </form>
      </div>
    </section>
  </section>
</div>