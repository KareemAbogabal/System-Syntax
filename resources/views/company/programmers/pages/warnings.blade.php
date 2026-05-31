@extends('company.programmers.main')

@section('title', 'Warnings')

@section('page')
  <x-components::company.popupShow dataFollowButton="show-warning-data">
    <div class="card-show warnings-detail-card">
      <div class="warnings-detail-head">
        <div class="warnings-detail-copy">
          <span class="warnings-detail-kicker">Alert details</span>
          <h2 id="warningViewTitle">Select an alert</h2>
          <p id="warningViewSub">
            Press “Details” on any alert card to inspect the record here.
          </p>
        </div>
        <span class="warnings-detail-badge" id="warningViewSeverity">No severity</span>
      </div>
      <div class="warnings-detail-topline">
        <div class="topline-box">
          <span>Type</span>
          <strong id="warningViewType">—</strong>
        </div>
        <div class="topline-box">
          <span>Status</span>
          <strong id="warningViewStatus">—</strong>
        </div>
        <div class="topline-box">
          <span>Handled by</span>
          <strong id="warningViewHandledBy">—</strong>
        </div>
      </div>
      <div class="warnings-detail-grid">
        <div class="warnings-detail-box">
          <span>Source</span>
          <strong id="warningViewSource">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Time</span>
          <strong id="warningViewTime">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Severity</span>
          <strong id="warningViewSeverityText">—</strong>
        </div>
        <div class="warnings-detail-box">
          <span>Progress</span>
          <strong id="warningViewProgress">—</strong>
        </div>
      </div>
      <div class="warnings-detail-body">
        <div class="warnings-detail-section-title">Description</div>
        <p id="warningViewDescription">
          The selected alert will appear here with full details, status, and severity information.
        </p>
      </div>
      <div class="warnings-detail-stats">
        <div class="warnings-stat">
          <span>Risk</span>
          <strong id="warningViewRisk">—</strong>
        </div>
        <div class="warnings-stat">
          <span>Priority</span>
          <strong id="warningViewPriority">—</strong>
        </div>
        <div class="warnings-stat">
          <span>Alert ID</span>
          <strong id="warningViewId">—</strong>
        </div>
      </div>
      <div class="warnings-detail-footer">
        <div class="warnings-detail-note">
          Live security review
        </div>
        <div class="warnings-detail-actions">
          <button type="button" class="warnings-mini-btn">Block</button>
          <button type="button" class="warnings-mini-btn">Archive</button>
          <button type="button" class="warnings-mini-btn danger">Resolve</button>
        </div>
      </div>
    </div>
  </x-components::company.popupShow>
  <div class="warnings-page">
    <div class="ambient"></div>
    <section class="hero">
      <div class="brand">
        <div class="left">
          <div class="logo" aria-hidden="true">
            <svg viewBox="0 0 24 24">
              <path d="M12 2l8 4.5v11L12 22l-8-4.5v-11L12 2z"></path>
              <path d="M12 7v5"></path>
              <path d="M12 16h.01"></path>
            </svg>
          </div>
          <div class="text">
            <div class="eyebrow">Security Control Center</div>
            <h1>Company & Client Alerts</h1>
            <p>Two clean zones only: internal company risks and customer-site alerts. No fixed header. No clutter. Just action.</p>
          </div>
        </div>
        <div class="status">
          <span class="dot"></span>
          Live monitoring enabled
        </div>
      </div>
      <div class="controls">
        <input class="field" id="searchInput" type="search" placeholder="Search alerts..." />
        <select class="select" id="severityFilter">
          <option value="all">All severities</option>
          <option value="critical">Critical</option>
          <option value="high">High</option>
          <option value="medium">Medium</option>
          <option value="low">Low</option>
        </select>
        <button class="button" id="simulateBtn" type="button">Simulate Alert</button>
      </div>
    </section>
    <section class="sections">
      <article class="section-card">
        <div class="head">
          <div class="title">
            <h2>Company Alerts</h2>
            <span>Internal threats, policy violations, suspicious activity</span>
          </div>
          <div class="badge" id="companyBadge">0 items</div>
        </div>
        <div class="body">
          <div class="summary">
            <div class="box">
              <div class="label">Critical</div>
              <div class="value danger" id="companyCritical">0</div>
            </div>
            <div class="box">
              <div class="label">Blocked</div>
              <div class="value safe" id="companyBlocked">0</div>
            </div>
            <div class="box">
              <div class="label">Open</div>
              <div class="value warn" id="companyOpen">0</div>
            </div>
          </div>
          <div class="list" id="companyList">
            <article class="item critical" data-id="1" data-type="company" data-severity="critical" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Suspicious IP burst detected</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">CRITICAL</span>
                      <span class="ip-tag">IP 185.91.44.21</span>
                    </div>
                    <div>
                      <span>Multiple routes in 18 seconds</span>
                      <span>2 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">The same source hit many routes too quickly. The pattern matches automated scraping or probing.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>96%</span>
                </div>
                <div class="progress"><span style="width: 96%"></span></div>
              </div>
              <div class="details" id="details-company-1">
                <div class="cell">
                  <span>Requests</span>
                  <strong>482</strong>
                </div>
                <div class="cell">
                  <span>Routes</span>
                  <strong>31</strong>
                </div>
                <div class="cell">
                  <span>Risk</span>
                  <strong>96%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="1" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="1" data-title="Suspicious IP burst detected" data-description="The same source hit many routes too quickly. The pattern matches automated scraping or probing." data-severity="critical" data-status="open" data-handled-by="Security Ops" data-source="IP 185.91.44.21" data-time="2 minutes ago" data-progress="96%" data-risk="96%" data-priority="critical" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="1" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item high" data-id="2" data-type="company" data-severity="high" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Sensitive data transmission blocked</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">HIGH</span>
                      <span class="ip-tag">Internal chat session</span>
                    </div>
                    <div>
                      <span>Policy engine intervention</span>
                      <span>9 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">An employee tried to send restricted data. The message was intercepted before leaving the workspace.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>78%</span>
                </div>
                <div class="progress"><span style="width: 78%"></span></div>
              </div>
              <div class="details" id="details-company-2">
                <div class="cell">
                  <span>Rule</span>
                  <strong>Chat Guard</strong>
                </div>
                <div class="cell">
                  <span>Action</span>
                  <strong>Blocked</strong>
                </div>
                <div class="cell">
                  <span>Confidence</span>
                  <strong>91%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="2" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="2" data-title="Sensitive data transmission blocked" data-description="An employee tried to send restricted data. The message was intercepted before leaving the workspace." data-severity="high" data-status="open" data-handled-by="Chat Guard" data-source="Internal chat session" data-time="9 minutes ago" data-progress="78%" data-risk="91%" data-priority="high" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="2" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item critical" data-id="1" data-type="company" data-severity="critical" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Suspicious IP burst detected</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">CRITICAL</span>
                      <span class="ip-tag">IP 185.91.44.21</span>
                    </div>
                    <div>
                      <span>Multiple routes in 18 seconds</span>
                      <span>2 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">The same source hit many routes too quickly. The pattern matches automated scraping or probing.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>96%</span>
                </div>
                <div class="progress"><span style="width: 96%"></span></div>
              </div>
              <div class="details" id="details-company-1">
                <div class="cell">
                  <span>Requests</span>
                  <strong>482</strong>
                </div>
                <div class="cell">
                  <span>Routes</span>
                  <strong>31</strong>
                </div>
                <div class="cell">
                  <span>Risk</span>
                  <strong>96%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="1" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="1" data-title="Suspicious IP burst detected" data-description="The same source hit many routes too quickly. The pattern matches automated scraping or probing." data-severity="critical" data-status="open" data-handled-by="Security Ops" data-source="IP 185.91.44.21" data-time="2 minutes ago" data-progress="96%" data-risk="96%" data-priority="critical" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="1" type="button">Ban IP</button>
                </div>
                <button class="archives" class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item high" data-id="2" data-type="company" data-severity="high" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Sensitive data transmission blocked</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">HIGH</span>
                      <span class="ip-tag">Internal chat session</span>
                    </div>
                    <div>
                      <span>Policy engine intervention</span>
                      <span>9 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">An employee tried to send restricted data. The message was intercepted before leaving the workspace.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>78%</span>
                </div>
                <div class="progress"><span style="width: 78%"></span></div>
              </div>
              <div class="details" id="details-company-2">
                <div class="cell">
                  <span>Rule</span>
                  <strong>Chat Guard</strong>
                </div>
                <div class="cell">
                  <span>Action</span>
                  <strong>Blocked</strong>
                </div>
                <div class="cell">
                  <span>Confidence</span>
                  <strong>91%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="2" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="2" data-title="Sensitive data transmission blocked" data-description="An employee tried to send restricted data. The message was intercepted before leaving the workspace." data-severity="high" data-status="open" data-handled-by="Chat Guard" data-source="Internal chat session" data-time="9 minutes ago" data-progress="78%" data-risk="91%" data-priority="high" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="2" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item critical" data-id="1" data-type="company" data-severity="critical" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Suspicious IP burst detected</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">CRITICAL</span>
                      <span class="ip-tag">IP 185.91.44.21</span>
                    </div>
                    <div>
                      <span>Multiple routes in 18 seconds</span>
                      <span>2 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">The same source hit many routes too quickly. The pattern matches automated scraping or probing.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>96%</span>
                </div>
                <div class="progress"><span style="width: 96%"></span></div>
              </div>
              <div class="details" id="details-company-1">
                <div class="cell">
                  <span>Requests</span>
                  <strong>482</strong>
                </div>
                <div class="cell">
                  <span>Routes</span>
                  <strong>31</strong>
                </div>
                <div class="cell">
                  <span>Risk</span>
                  <strong>96%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="1" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="1" data-title="Suspicious IP burst detected" data-description="The same source hit many routes too quickly. The pattern matches automated scraping or probing." data-severity="critical" data-status="open" data-handled-by="Security Ops" data-source="IP 185.91.44.21" data-time="2 minutes ago" data-progress="96%" data-risk="96%" data-priority="critical" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="1" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item high" data-id="2" data-type="company" data-severity="high" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Sensitive data transmission blocked</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">HIGH</span>
                      <span class="ip-tag">Internal chat session</span>
                    </div>
                    <div>
                      <span>Policy engine intervention</span>
                      <span>9 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">An employee tried to send restricted data. The message was intercepted before leaving the workspace.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>78%</span>
                </div>
                <div class="progress"><span style="width: 78%"></span></div>
              </div>
              <div class="details" id="details-company-2">
                <div class="cell">
                  <span>Rule</span>
                  <strong>Chat Guard</strong>
                </div>
                <div class="cell">
                  <span>Action</span>
                  <strong>Blocked</strong>
                </div>
                <div class="cell">
                  <span>Confidence</span>
                  <strong>91%</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="company" data-id="2" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="company" data-id="2" data-title="Sensitive data transmission blocked" data-description="An employee tried to send restricted data. The message was intercepted before leaving the workspace." data-severity="high" data-status="open" data-handled-by="Chat Guard" data-source="Internal chat session" data-time="9 minutes ago" data-progress="78%" data-risk="91%" data-priority="high" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="company" data-id="2" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <div class="empty" id="companyEmpty" style="display:none">
              No alerts match the current filters. That is a good sign, but it should be treated carefully rather than assumed safe.
            </div>
          </div>
        </div>
      </article>
      <article class="section-card">
        <div class="head">
          <div class="title">
            <h2>Client Alerts</h2>
            <span>Customer website incidents and service warnings</span>
          </div>
          <div class="badge" id="clientBadge">0 items</div>
        </div>
        <div class="body">
          <div class="summary">
            <div class="box">
              <div class="label">Critical</div>
              <div class="value danger" id="clientCritical">0</div>
            </div>
            <div class="box">
              <div class="label">Blocked</div>
              <div class="value safe" id="clientBlocked">0</div>
            </div>
            <div class="box">
              <div class="label">Open</div>
              <div class="value warn" id="clientOpen">0</div>
            </div>
          </div>
          <div class="list" id="clientList">
            <article class="item high" data-id="101" data-type="client" data-severity="high" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">Client website anomaly</p>
                  <div class="meta">
                    <div>
                      <span class="chip danger">HIGH</span>
                      <span class="ip-tag">Northwind Luxury</span>
                    </div>
                    <div>
                      <span>Checkout flow errors</span>
                      <span>5 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">The client site is returning unusual error spikes. Session drop rate is higher than normal.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>74%</span>
                </div>
                <div class="progress"><span style="width: 74%"></span></div>
              </div>
              <div class="details" id="details-client-101">
                <div class="cell">
                  <span>Error Rate</span>
                  <strong>17%</strong>
                </div>
                <div class="cell">
                  <span>Sessions</span>
                  <strong>-28%</strong>
                </div>
                <div class="cell">
                  <span>Priority</span>
                  <strong>High</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="client" data-id="101" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="client" data-id="101" data-title="Client website anomaly" data-description="The client site is returning unusual error spikes. Session drop rate is higher than normal." data-severity="high" data-status="open" data-handled-by="Client Support" data-source="Northwind Luxury" data-time="5 minutes ago" data-progress="74%" data-risk="17%" data-priority="high" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="client" data-id="101" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <article class="item medium" data-id="102" data-type="client" data-severity="medium" data-status="open">
              <div class="top">
                <div class="main">
                  <p class="name">File upload warning</p>
                  <div class="meta">
                    <div>
                      <span class="chip warn">MEDIUM</span>
                      <span class="ip-tag">Aurora Studio</span>
                    </div>
                    <div>
                      <span>Validation and upload failures</span>
                      <span>32 minutes ago</span>
                    </div>
                  </div>
                </div>
                <span class="chip warn">Open</span>
              </div>
              <p class="desc">Repeated validation errors appeared on uploads. The endpoint may need hardening.</p>
              <div class="main-progress">
                <div class="progress-head">
                  <span>Complete</span>
                  <span>58%</span>
                </div>
                <div class="progress"><span style="width: 58%"></span></div>
              </div>
              <div class="details" id="details-client-102">
                <div class="cell">
                  <span>Endpoint</span>
                  <strong>Upload</strong>
                </div>
                <div class="cell">
                  <span>Risk</span>
                  <strong>Moderate</strong>
                </div>
                <div class="cell">
                  <span>Action</span>
                  <strong>Inspect</strong>
                </div>
              </div>
              <div class="actions">
                <div class="main-buttons">
                  <button class="block-btn" data-action="block" data-type="client" data-id="102" type="button">Block</button>
                  <button class="details-btn button-form" data-action="details" data-type="client" data-id="102" data-title="File upload warning" data-description="Repeated validation errors appeared on uploads. The endpoint may need hardening." data-severity="medium" data-status="open" data-handled-by="Client Support" data-source="Aurora Studio" data-time="32 minutes ago" data-progress="58%" data-risk="moderate" data-priority="medium" type="button" data-follow="show-warning-data">Details</button>
                  <button class="ban-btn" data-action="ban" data-type="client" data-id="102" type="button">Ban IP</button>
                </div>
                <button class="archives">
                  <svg viewBox="3 3 24 24" fill="none">
                    <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                    <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                    <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                  </svg>
                </button>
              </div>
            </article>
            <div class="empty" id="clientEmpty" style="display:none">
              No alerts match the current filters. That is a good sign, but it should be treated carefully rather than assumed safe.
            </div>
          </div>
        </div>
      </article>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/warnings.js') }}"></script>
@endsection