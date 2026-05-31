@extends('company.programmers.main')

@section('title', 'Archive')

@section('page')
  <x-components::company.popupShow dataFollowButton="show-archive-data">
    <div class="card-show archive-view-card">
      <div class="archive-view-top">
        <div class="archive-view-icon" id="archiveViewIcon"></div>
        <div class="archive-view-copy">
          <span class="archive-view-kicker">Archive data</span>
          <h2 id="archiveViewTitle">Select an item</h2>
          <p id="archiveViewSub">Press “View Data” from any card to inspect details here.</p>
        </div>
        <span class="archive-view-badge" id="archiveViewStatus">No status</span>
      </div>
      <div class="archive-view-grid">
        <div class="archive-view-box">
          <span>Handled by</span>
          <strong id="archiveViewHandledBy">—</strong>
        </div>
        <div class="archive-view-box">
          <span>Status</span>
          <strong id="archiveViewStatusText">—</strong>
        </div>
      </div>
      <div class="archive-view-body">
        <div class="archive-view-section-title">Description</div>
        <p id="archiveViewBodyText">
          The selected record will appear here with its icon, name, handler, and archive type.
        </p>
      </div>
      <div class="archive-view-footer">
        <div class="archive-view-footnote">Protected archive preview</div>
        <div class="archive-view-mini-actions">
          <button type="button" class="mini-action">Restore</button>
          <button type="button" class="mini-action">Delete</button>
        </div>
      </div>
    </div>
  </x-components::company.popupShow>
  <div class="archive">
    <section class="hero">
      <div class="hero-top">
        <div class="brand">
          <div class="brand-badge" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M12 2C6.48 2 2 5.92 2 10.75c0 2.86 1.52 5.4 3.9 7.02V22l3.63-1.93c.8.19 1.63.28 2.47.28 5.52 0 10-3.92 10-8.75S17.52 2 12 2Z"/>
              <path d="M8 10h8M8 13h5"/>
            </svg>
          </div>
          <div>
            <h1>Archive Vault</h1>
            <p>
              A premium archive page for soft deleted items, archived records, and protected entries.
              Designed as a clean, luxurious card-based interface.
            </p>
          </div>
        </div>
        <div class="hero-meta">
          <div class="meta-pill"><strong>128</strong><span>Total Items</span></div>
          <div class="meta-pill"><strong>42</strong><span>Soft Delete</span></div>
          <div class="meta-pill"><strong>58</strong><span>Archived</span></div>
          <div class="meta-pill"><strong>28</strong><span>Protected</span></div>
        </div>
      </div>
    </section>
    <div class="shell">
      <div class="main">
        <section class="stats">
          <div class="stat card-inner">
            <div class="stat-label">Total Archive</div>
            <div class="stat-value">128</div>
            <div class="stat-note">All archived records in the system</div>
          </div>
          <div class="stat card-inner">
            <div class="stat-label">Soft Deleted</div>
            <div class="stat-value">42</div>
            <div class="stat-note">Items available for recovery</div>
          </div>
          <div class="stat card-inner">
            <div class="stat-label">Archived Items</div>
            <div class="stat-value">58</div>
            <div class="stat-note">Moved into the archive vault</div>
          </div>
          <div class="stat card-inner">
            <div class="stat-label">Protected Records</div>
            <div class="stat-value">28</div>
            <div class="stat-note">Locked for review or retention</div>
          </div>
        </section>
        <section class="toolbar">
          <div class="input-box">
            <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 24 24" width="22" height="22" aria-hidden="true">
              <path fill="var(--bg-color)" d="M10 4a7 7 0 1 0 4.95 11.95l4.5 4.5a1 1 0 0 0 1.42-1.42l-4.5-4.5A7 7 0 0 0 10 4zm0 2a5 5 0 1 1 0 10 5 5 0 0 1 0-10z"/>
            </svg>
            <input type="text" placeholder="Search for any thing..." data-no-style />
          </div>
          <label class="field">
            <svg viewBox="0 0 24 24">
              <path d="M4 6h16M7 12h10M10 18h4"></path>
            </svg>
            <select>
              <option>Latest First</option>
              <option>Oldest First</option>
              <option>Name</option>
              <option>Type</option>
            </select>
          </label>
          <button class="action-btn">Export Log</button>
        </section>
        <section class="cards">
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M7 3h7l5 5v13H7z"></path>
                    <path d="M14 3v5h5"></path>
                    <path d="M9 13h6M9 16h6"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Client Contract #2041</p>
                  <div class="item-sub">Document • 2026-05-17 10:42</div>
                  <div class="user-line">Handled by: <strong>Admin</strong></div>
                </div>
              </div>
              <span class="badge soft">
                <span class="dot"></span>
                Soft Delete
              </span>
            </div>
            <div class="card-body">
              Automatically moved to soft delete after expiration.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M3 7h6l2 2h10v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Archived Campaign 12</p>
                  <div class="item-sub">Marketing • 2026-05-16 19:10</div>
                  <div class="user-line">Handled by: <strong>M. Ahmed</strong></div>
                </div>
              </div>
              <span class="badge archived">
                <span class="dot"></span>
                Archived
              </span>
            </div>
            <div class="card-body">
              Completed campaign stored in the vault for future reference.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 7h16"></path>
                    <path d="M10 11v6M14 11v6"></path>
                    <path d="M6 7l1 13h10l1-13"></path>
                    <path d="M9 7V4h6v3"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Deleted Invoice 8841</p>
                  <div class="item-sub">Finance • 2026-05-16 15:09</div>
                  <div class="user-line">Handled by: <strong>System</strong></div>
                </div>
              </div>
              <span class="badge deleted">
                <span class="dot"></span>
                Deleted
              </span>
            </div>
            <div class="card-body">
              Permanently removed after cleanup request.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 3l7 3v5c0 4.9-3 8.7-7 10-4-1.3-7-5.1-7-10V6z"></path>
                    <path d="M9.5 12l1.7 1.7L15 10"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Blocked User - Kareem</p>
                  <div class="item-sub">Security • 2026-05-15 21:26</div>
                  <div class="user-line">Handled by: <strong>Security Bot</strong></div>
                </div>
              </div>
              <span class="badge safe">
                <span class="dot"></span>
                Protected
              </span>
            </div>
            <div class="card-body">
              Protected record kept for internal review and compliance.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 4l8 4-8 4-8-4 8-4z"></path>
                    <path d="M4 12l8 4 8-4"></path>
                    <path d="M4 16l8 4 8-4"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Soft Deleted Project</p>
                  <div class="item-sub">Projects • 2026-05-15 08:44</div>
                  <div class="user-line">Handled by: <strong>Omar</strong></div>
                </div>
              </div>
              <span class="badge soft">
                <span class="dot"></span>
                Soft Delete
              </span>
            </div>
            <div class="card-body">
              Moved into the recycle vault after project closure.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 5h16v10H8l-4 4z"></path>
                    <path d="M8 9h8M8 12h6"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Archived Chat Room 7</p>
                  <div class="item-sub">Messages • 2026-05-14 13:30</div>
                  <div class="user-line">Handled by: <strong>System</strong></div>
                </div>
              </div>
              <span class="badge archived">
                <span class="dot"></span>
                Archived
              </span>
            </div>
            <div class="card-body">
              Conversation archived and hidden from active views.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 7h16"></path>
                    <path d="M10 11v6M14 11v6"></path>
                    <path d="M6 7l1 13h10l1-13"></path>
                    <path d="M9 7V4h6v3"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Deleted Media File</p>
                  <div class="item-sub">Media • 2026-05-13 18:52</div>
                  <div class="user-line">Handled by: <strong>A. Salah</strong></div>
                </div>
              </div>
              <span class="badge deleted">
                <span class="dot"></span>
                Deleted
              </span>
            </div>
            <div class="card-body">
              Hard deleted from storage and removed permanently.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 3l7 3v5c0 4.9-3 8.7-7 10-4-1.3-7-5.1-7-10V6z"></path>
                    <path d="M9.5 12l1.7 1.7L15 10"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Protected Log Set</p>
                  <div class="item-sub">Logs • 2026-05-12 09:15</div>
                  <div class="user-line">Handled by: <strong>Audit</strong></div>
                </div>
              </div>
              <span class="badge safe">
                <span class="dot"></span>
                Protected
              </span>
            </div>
            <div class="card-body">
              Retention policy enabled and record locked safely.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M3 7h6l2 2h10v8a2 2 0 0 1-2 2H5a2 2 0 0 1-2-2z"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Archived Lead Bundle</p>
                  <div class="item-sub">CRM • 2026-05-11 22:05</div>
                  <div class="user-line">Handled by: <strong>Sales Ops</strong></div>
                </div>
              </div>
              <span class="badge archived">
                <span class="dot"></span>
                Archived
              </span>
            </div>
            <div class="card-body">
              Qualified lead bundle archived after processing.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M7 3h7l5 5v13H7z"></path>
                    <path d="M14 3v5h5"></path>
                    <path d="M9 13h6M9 16h6"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Soft Deleted Session</p>
                  <div class="item-sub">Auth • 2026-05-10 11:20</div>
                  <div class="user-line">Handled by: <strong>System</strong></div>
                </div>
              </div>
              <span class="badge soft">
                <span class="dot"></span>
                Soft Delete
              </span>
            </div>
            <div class="card-body">
              Expired session removed and stored as soft deleted.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M4 7h16"></path>
                    <path d="M10 11v6M14 11v6"></path>
                    <path d="M6 7l1 13h10l1-13"></path>
                    <path d="M9 7V4h6v3"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Deleted Draft Article</p>
                  <div class="item-sub">Content • 2026-05-09 16:14</div>
                  <div class="user-line">Handled by: <strong>Editor</strong></div>
                </div>
              </div>
              <span class="badge deleted">
                <span class="dot"></span>
                Deleted
              </span>
            </div>
            <div class="card-body">
              Empty draft was purged from the system.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
          <article class="card card-inner">
            <div class="card-head">
              <div class="card-left">
                <div class="item-icon">
                  <svg viewBox="0 0 24 24">
                    <path d="M12 3l7 3v5c0 4.9-3 8.7-7 10-4-1.3-7-5.1-7-10V6z"></path>
                    <path d="M9.5 12l1.7 1.7L15 10"></path>
                  </svg>
                </div>
                <div class="item-text">
                  <p class="item-title">Protected Backup Copy</p>
                  <div class="item-sub">Backup • 2026-05-08 07:30</div>
                  <div class="user-line">Handled by: <strong>Backup Bot</strong></div>
                </div>
              </div>
              <span class="badge safe">
                <span class="dot"></span>
                Protected
              </span>
            </div>
            <div class="card-body">
              Locked backup snapshot kept for recovery.
            </div>
            <div class="card-actions">
              <button class="btn restore">Restore</button>
              <button
                class="btn view-data-btn button-form"
                type="button"
                data-title="Client Contract #2041"
                data-handled-by="Admin"
                data-status="Soft Delete"
                data-sub="Document • 2026-05-17 10:42"
                data-body="Automatically moved to soft delete after expiration."
                data-follow="show-archive-data"
              >
                View Data
              </button>
              <button class="btn destroy">Delete</button>
            </div>
          </article>
        </section>
        <div class="empty">
          <svg viewBox="0 0 24 24">
            <path d="M4 7h16v10H4z"></path>
            <path d="M7 7V5a2 2 0 0 1 2-2h6a2 2 0 0 1 2 2v2"></path>
            <path d="M9 12h6"></path>
          </svg>
          <h3>No Results Found</h3>
          <div>Try a different search term or filter.</div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/archive.js') }}"></script>
@endsection