@extends('company.programmers.main')

@section('title', 'Clients')

@section('page')
  <div class="client-dashboard">
    <x-components::company.popupForm header="Add client"
      description="Add promotions within the company to encourage employees to be more productive"
      dataFollowButton="add-client" pathPostForm="#">
      <div class="row">
        <div class="perant-input">
          <label for="name-client">Name client</label>
          <input type="text" id="name-client" placeholder="Name client">
        </div>
        <div class="perant-input">
          <label for="name-project">Name Project</label>
          <input type="text" id="name-project" placeholder="Name Project">
        </div>
        <div class="perant-input">
          <label for="name-price">Price</label>
          <input type="text" id="name-price" placeholder="Price">
        </div>
        <div class="perant-input">
          <label for="start">start</label>
          <input type="date" id="start" placeholder="Start">
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="phone">Phone</label>
          <input type="text" id="phone" placeholder="Phone">
        </div>
        <div class="perant-input">
          <label for="email">email</label>
          <input type="text" id="email" placeholder="Email">
        </div>
        <div class="perant-input">
          <label for="address">Address</label>
          <input type="text" id="address" placeholder="Address">
        </div>
        <div class="perant-input">
          <label for="end">end</label>
          <input type="date" id="end" placeholder="End">
        </div>
      </div>
      <div class="perant-input employees-picker">
        <div class="employees-picker-top">
          <label for="employee-search">Account Owners</label>
          <span class="selected-count" data-selected-count>0 selected</span>
        </div>
        <input type="text" id="employee-search" class="employee-search" placeholder="Search account owners">
        <div class="employee-options" data-employee-options>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="1">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Kareem">
              <div class="employee-info">
                <strong>Kareem Ali</strong>
                <span>Front End Developer</span>
              </div>
            </div>
          </label>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="2">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=18" loading="lazy" alt="Sara">
              <div class="employee-info">
                <strong>Sara Adel</strong>
                <span>UI Designer</span>
              </div>
            </div>
          </label>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="3">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=24" loading="lazy" alt="Ahmed">
              <div class="employee-info">
                <strong>Ahmed Nasser</strong>
                <span>Backend Developer</span>
              </div>
            </div>
          </label>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="4">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Mona">
              <div class="employee-info">
                <strong>Mona Hassan</strong>
                <span>Team Leader</span>
              </div>
            </div>
          </label>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="5">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=41" loading="lazy" alt="Youssef">
              <div class="employee-info">
                <strong>Youssef Hamed</strong>
                <span>Security Specialist</span>
              </div>
            </div>
          </label>
          <label class="employee-card">
            <input type="radio" name="employees[]" value="6">
            <div class="employee-card-inner">
              <img src="https://i.pravatar.cc/100?img=45" loading="lazy" alt="Lina">
              <div class="employee-info">
                <strong>Lina Tarek</strong>
                <span>Project Manager</span>
              </div>
            </div>
          </label>
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="password">Password</label>
          <input type="text" id="password" placeholder="Password">
        </div>
        <div class="perant-input">
          <label for="confirm-password">Confirm password</label>
          <input type="text" id="confirm-password" placeholder="Confirm password">
        </div>
      </div>
    </x-components::company.popupForm>
    <x-components::company.popupForm header="Creating a customer order"
      description="Add promotions within the company to encourage employees to be more productive"
      dataFollowButton="creating-a-customer-order" pathPostForm="#">
      <div class="row">
        <x-components::company.entityPicker name="Clients" />
        <x-components::company.entityPicker name="Account owner" />
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="name-project">Name Project</label>
          <input type="text" id="name-project" placeholder="Name Project">
        </div>
        <div class="perant-input">
          <label for="name-price">Price</label>
          <input type="text" id="name-price" placeholder="Price">
        </div>
      </div>
      <div class="row">
        <div class="perant-input">
          <label for="start">start</label>
          <input type="date" id="start" placeholder="Start">
        </div>
        <div class="perant-input">
          <label for="end">end</label>
          <input type="date" id="end" placeholder="End">
        </div>
      </div>
    </x-components::company.popupForm>
    <section class="client-dashboard__hero">
      <div class="client-dashboard__hero-top">
        <div>
          <p class="client-dashboard__eyebrow">Client Operations</p>
          <h1 class="client-dashboard__title">Client Portfolio</h1>
          <p class="client-dashboard__subtitle">
            A project-centric view for tracking client delivery, review status, and account health with a layout distinct
            from employee management.
          </p>
        </div>
        <div class="client-dashboard__hero-actions">
          <button class="client-dashboard__btn button-form" data-follow="add-client">Add New Client</button>
          <button class="client-dashboard__btn button-form" data-follow="creating-a-customer-order">Creating a customer
            order</button>
        </div>
      </div>
      <div class="client-dashboard__hero-metrics">
        <article class="client-dashboard__metric">
          <span class="client-dashboard__metric-label">Total Clients</span>
          <strong class="client-dashboard__metric-value">248</strong>
        </article>
        <article class="client-dashboard__metric">
          <span class="client-dashboard__metric-label">Delivered Projects</span>
          <strong class="client-dashboard__metric-value">164</strong>
        </article>
        <article class="client-dashboard__metric">
          <span class="client-dashboard__metric-label">Pending Review</span>
          <strong class="client-dashboard__metric-value">31</strong>
        </article>
        <article class="client-dashboard__metric">
          <span class="client-dashboard__metric-label">Rejected</span>
          <strong class="client-dashboard__metric-value">11</strong>
        </article>
      </div>
    </section>
    <section class="client-dashboard__layout">
      <x-components::company.fillterBar :pills="['All', 'Delivered', 'Pending', 'Rejected', 'Premium']" />
      <main class="client-dashboard__main">
        <div class="client-dashboard__board-head">
          <div>
            <h2 class="client-dashboard__board-title">Project Boards</h2>
            <p class="client-dashboard__board-subtitle">
              Each card focuses on the project itself, its delivery state, and its operational health.
            </p>
          </div>
          <div class="client-dashboard__board-chip">Active Since March 2024</div>
        </div>
        <section class="client-dashboard__projects">
          <article class="client-dashboard__project" data-filter="Delivered">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">Enterprise Project</div>
                <div class="client-dashboard__project-badge">01</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Nova Core Platform</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--delivered">
                    Active since March 2024 · Delivered
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Nova Core Platform</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Sarah Ahmed</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$48,200</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>Low</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="client-dashboard__project" data-status="pending">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">In Review</div>
                <div class="client-dashboard__project-badge">02</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=22" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Pulse UI System</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--pending">
                    Active since March 2024 · Pending
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Pulse UI System</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Omar Hassan</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$21,700</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>Medium</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="client-dashboard__project" data-status="rejected">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">Closed / Rejected</div>
                <div class="client-dashboard__project-badge">03</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=33" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Merchant Flow App</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--rejected">
                    Active since March 2024 · Rejected
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Merchant Flow App</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Mina Fathy</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$16,400</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>High</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="client-dashboard__project" data-filter="Delivered">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">Enterprise Project</div>
                <div class="client-dashboard__project-badge">01</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=11" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Nova Core Platform</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--delivered">
                    Active since March 2024 · Delivered
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Nova Core Platform</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Sarah Ahmed</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$48,200</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>Low</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="client-dashboard__project" data-status="pending">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">In Review</div>
                <div class="client-dashboard__project-badge">02</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=22" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Pulse UI System</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--pending">
                    Active since March 2024 · Pending
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Pulse UI System</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Omar Hassan</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$21,700</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>Medium</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="client-dashboard__project" data-status="rejected">
            <div class="client-dashboard__project-inner">
              <div class="client-dashboard__project-visual">
                <div class="client-dashboard__project-ribbon">Closed / Rejected</div>
                <div class="client-dashboard__project-badge">03</div>
                <div class="client-dashboard__client-mini">
                  <img src="https://i.pravatar.cc/120?img=33" loading="lazy" alt="Client image">
                  <h3 class="client-dashboard__client-name search">Merchant Flow App</h3>
                </div>
              </div>
              <div class="client-dashboard__project-meta">
                <div>
                  <div class="client-dashboard__project-status client-dashboard__project-status--rejected">
                    Active since March 2024 · Rejected
                  </div>
                  <div class="client-dashboard__project-grid" style="margin-top: 14px;">
                    <div class="client-dashboard__info-box">
                      <span>Project Name</span>
                      <strong>Merchant Flow App</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Account Owner</span>
                      <strong>Mina Fathy</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Monthly Value</span>
                      <strong>$16,400</strong>
                    </div>
                    <div class="client-dashboard__info-box">
                      <span>Delivery Risk</span>
                      <strong>High</strong>
                    </div>
                  </div>
                </div>
                <div>
                  <div class="main-progress">
                    <div class="progress-head">
                      <span>Progress</span>
                      <span>72%</span>
                    </div>
                    <div class="progress"><span style="width: 48%"></span></div>
                  </div>
                  <div class="client-dashboard__actions" style="margin-top: 12px;">
                    <a href="/company/client-details" class="state-btn">View Profile</a>
                    <a href="/company/project-details" class="state-btn access">View project</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
      </main>
    </section>
  </div>
  <script src="{{ asset('js/company/programmers/clients/clients.js') }}"></script>
@endsection
