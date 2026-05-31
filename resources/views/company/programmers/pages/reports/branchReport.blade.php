@extends('company.programmers.main')

@section('title', 'Branch Report')

@section('page')
  <div class="branch-page">
    <section class="hero">
      <div class="hero-top">
        <div>
          <p class="eyebrow">Branch Operations</p>
          <h1 class="title">Branch Report</h1>
          <p class="subtitle">
            A compact dashboard for tracking branch performance, employee productivity, and yearly operational health.
          </p>
        </div>
        <div class="hero-actions">
          <button class="btn">Export Report</button>
        </div>
      </div>
      <div class="hero-metrics">
        <article class="metric">
          <span class="metric-label">Total Branches</span>
          <strong class="metric-value">24</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Active Branches</span>
          <strong class="metric-value">19</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Total Employees</span>
          <strong class="metric-value">386</strong>
        </article>
        <article class="metric">
          <span class="metric-label">Avg Productivity</span>
          <strong class="metric-value">87%</strong>
        </article>
      </div>
    </section>
    <section class="branch-page__layout">
      <x-components::company.fillterBar :pills="['All', 'High', 'Medium', 'Low', 'Active']" />
      <main class="branch-page__main">
        <div class="branch-page__board-head">
          <div>
            <h2 class="branch-page__board-title">Branch Boards</h2>
            <p class="branch-page__board-subtitle">
              Each card highlights branch productivity, employee distribution, and performance progress.
            </p>
          </div>
          <div class="branch-page__board-chip">Updated Today</div>
        </div>
        <section class="branch-page__projects">
          <article class="branch-page__project" data-status="active">
            <div class="branch-page__project-inner">
              <div class="branch-page__project-visual">
                <div class="branch-page__project-ribbon">North Branch</div>
                <div class="branch-page__project-badge">01</div>
                <div class="branch-page__client-mini">
                  <img src="https://i.pravatar.cc/120?img=12" loading="lazy" alt="Branch manager">
                  <h3 class="branch-page__client-name search">Alexandria Prime</h3>
                </div>
              </div>
              <div class="branch-page__project-meta">
                <div class="main-content-branch">
                  <div class="branch-page__project-status branch-page__project-status--active">
                    Active since March 2024 · High Productivity
                  </div>
                  <div class="branch-page__project-grid">
                    <div class="branch-page__info-box">
                      <span>Branch Name</span>
                      <strong>Alexandria</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Branch Manager</span>
                      <strong>Sarah Ahmed</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Employees</span>
                      <strong>48</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Annual Productivity</span>
                      <strong>91%</strong>
                    </div>
                  </div>
                  <div class="branch-page__employees">
                    <div class="branch-page__employees-head">
                      <span>Employees</span>
                      <span>Progress</span>
                    </div>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=21" loading="lazy" alt="Employee">
                        <div>
                          <strong>Omar Hassan</strong>
                          <span>Sales Executive</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>94%</span>
                        <div class="branch-page__bar"><span style="width:94%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=21" loading="lazy" alt="Employee">
                        <div>
                          <strong>Omar Hassan</strong>
                          <span>Sales Executive</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>94%</span>
                        <div class="branch-page__bar"><span style="width:94%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=21" loading="lazy" alt="Employee">
                        <div>
                          <strong>Omar Hassan</strong>
                          <span>Sales Executive</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>94%</span>
                        <div class="branch-page__bar"><span style="width:94%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=21" loading="lazy" alt="Employee">
                        <div>
                          <strong>Omar Hassan</strong>
                          <span>Sales Executive</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>94%</span>
                        <div class="branch-page__bar"><span style="width:94%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="Employee">
                        <div>
                          <strong>Mina Fathy</strong>
                          <span>Operations Lead</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>88%</span>
                        <div class="branch-page__bar"><span style="width:88%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="Employee">
                        <div>
                          <strong>Nour Ali</strong>
                          <span>Support Specialist</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>79%</span>
                        <div class="branch-page__bar"><span style="width:79%"></span></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div>
                  <div class="branch-page__progress">
                    <div class="branch-page__progress-head">
                      <span>Yearly Productivity</span>
                      <span>91%</span>
                    </div>
                    <div class="branch-page__bar"><span style="width:91%"></span></div>
                  </div>
                  <div class="branch-page__actions">
                    <a href="/company/branch-details" class="branch-page__ghost-btn">View Branch</a>
                    <a href="/company/user-details" class="branch-page__ghost-btn branch-page__ghost-btn--primary">View Staff</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="branch-page__project" data-status="active">
            <div class="branch-page__project-inner">
              <div class="branch-page__project-visual">
                <div class="branch-page__project-ribbon">Central Branch</div>
                <div class="branch-page__project-badge">02</div>
                <div class="branch-page__client-mini">
                  <img src="https://i.pravatar.cc/120?img=26" loading="lazy" alt="Branch manager">
                  <h3 class="branch-page__client-name search">Cairo Central</h3>
                </div>
              </div>
              <div class="branch-page__project-meta">
                <div class="main-content-branch">
                  <div class="branch-page__project-status branch-page__project-status--pending">
                    Active since March 2024 · Medium Productivity
                  </div>
                  <div class="branch-page__project-grid">
                    <div class="branch-page__info-box">
                      <span>Branch Name</span>
                      <strong>Cairo Central</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Branch Manager</span>
                      <strong>Ahmed Nabil</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Employees</span>
                      <strong>61</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Annual Productivity</span>
                      <strong>78%</strong>
                    </div>
                  </div>
                  <div class="branch-page__employees">
                    <div class="branch-page__employees-head">
                      <span>Employees</span>
                      <span>Progress</span>
                    </div>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=42" loading="lazy" alt="Employee">
                        <div>
                          <strong>Huda Samir</strong>
                          <span>Account Manager</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>84%</span>
                        <div class="branch-page__bar"><span style="width:84%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=45" loading="lazy" alt="Employee">
                        <div>
                          <strong>Hassan Adel</strong>
                          <span>Field Supervisor</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>76%</span>
                        <div class="branch-page__bar"><span style="width:76%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=15" loading="lazy" alt="Employee">
                        <div>
                          <strong>Rana Tarek</strong>
                          <span>Customer Care</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>71%</span>
                        <div class="branch-page__bar"><span style="width:71%"></span></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div>
                  <div class="branch-page__progress">
                    <div class="branch-page__progress-head">
                      <span>Yearly Productivity</span>
                      <span>78%</span>
                    </div>
                    <div class="branch-page__bar"><span style="width:78%"></span></div>
                  </div>
                  <div class="branch-page__actions">
                    <a href="/company/branch-details" class="branch-page__ghost-btn">View Branch</a>
                    <a href="/company/user-details" class="branch-page__ghost-btn branch-page__ghost-btn--primary">View Staff</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
          <article class="branch-page__project" data-status="low">
            <div class="branch-page__project-inner">
              <div class="branch-page__project-visual">
                <div class="branch-page__project-ribbon">South Branch</div>
                <div class="branch-page__project-badge">03</div>
                <div class="branch-page__client-mini">
                  <img src="https://i.pravatar.cc/120?img=9" loading="lazy" alt="Branch manager">
                  <h3 class="branch-page__client-name search">Giza South</h3>
                </div>
              </div>
              <div class="branch-page__project-meta">
                <div class="main-content-branch">
                  <div class="branch-page__project-status branch-page__project-status--rejected">
                    Active since March 2024 · Low Productivity
                  </div>
                  <div class="branch-page__project-grid">
                    <div class="branch-page__info-box">
                      <span>Branch Name</span>
                      <strong>Giza South</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Branch Manager</span>
                      <strong>Mina Fathy</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Employees</span>
                      <strong>39</strong>
                    </div>
                    <div class="branch-page__info-box">
                      <span>Annual Productivity</span>
                      <strong>59%</strong>
                    </div>
                  </div>
                  <div class="branch-page__employees">
                    <div class="branch-page__employees-head">
                      <span>Employees</span>
                      <span>Progress</span>
                    </div>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=29" loading="lazy" alt="Employee">
                        <div>
                          <strong>Youssef Adel</strong>
                          <span>Sales Coordinator</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>66%</span>
                        <div class="branch-page__bar"><span style="width:66%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=35" loading="lazy" alt="Employee">
                        <div>
                          <strong>Reem Sherif</strong>
                          <span>Support Agent</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>58%</span>
                        <div class="branch-page__bar"><span style="width:58%"></span></div>
                      </div>
                    </a>
                    <a href="/company/user-details" class="branch-page__employee">
                      <div class="branch-page__employee-main">
                        <img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="Employee">
                        <div>
                          <strong>Ahmed Said</strong>
                          <span>Operations Staff</span>
                        </div>
                      </div>
                      <div class="branch-page__employee-progress">
                        <span>49%</span>
                        <div class="branch-page__bar"><span style="width:49%"></span></div>
                      </div>
                    </a>
                  </div>
                </div>
                <div>
                  <div class="branch-page__progress">
                    <div class="branch-page__progress-head">
                      <span>Yearly Productivity</span>
                      <span>59%</span>
                    </div>
                    <div class="branch-page__bar"><span style="width:59%"></span></div>
                  </div>
                  <div class="branch-page__actions">
                    <a href="/company/branch-details" class="branch-page__ghost-btn">View Branch</a>
                    <a href="/company/user-details" class="branch-page__ghost-btn branch-page__ghost-btn--primary">View Staff</a>
                  </div>
                </div>
              </div>
            </div>
          </article>
        </section>
      </main>
    </section>
  </div>
  <script type="module" src="{{ asset('js/company/programmers/reports/branch-report.js') }}"></script>
@endsection
