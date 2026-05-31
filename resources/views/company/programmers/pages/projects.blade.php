@extends('company.programmers.main')

@section('title', 'Projects')

@section('page')
  <div class="projects-page">
    <x-components::company.popupShow header="commands" description="Add promotions within the company to encourage employees to be more productive" dataFollowButton="commands" pathPostForm="#">
      <div class="commands" id="commandConsole" data-current-path="C:\Projects\Nova">
        <div class="commands-top">
          <div class="commands-window-controls">
            <span></span>
            <span></span>
            <span></span>
          </div>
          <div class="commands-title">Windows PowerShell</div>
        </div>
        <textarea name="" id="command"></textarea>
      </div>
    </x-components::company.popupShow>
    <x-components::company.fillterBar :pills="['All', 'present', 'completed']" />
    <div class="projects-wrapper">
      <h1>Completed projects</h1>
      <div class="projects-grid">
        <article class="card-inner completed" data-status="completed">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Nova</h3>
                <span class="tag">Development</span>
              </div>
            </div>
            <div class="pulse-circle access"></div>
          </div>
          <div class="stats info">
            <div class="stat">
              <span>Client</span>
              <strong>Ahmed El-Sayed</strong>
            </div>
            <div class="stat">
              <span>Phone</span>
              <strong>01014567890</strong>
            </div>
            <div class="stat">
              <span>Due on</span>
              <strong>14 Mar, 2025</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Address</span>
              <strong>Damietta</strong>
            </div>
            <div class="stat">
              <span>project manager</span>
              <strong>Kareem Abogabal</strong>
            </div>
            <div class="stat">
              <span>Reason for the ban</span>
              <strong>Completed successfully</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Number of visitors</span>
              <strong>84,200 year</strong>
            </div>
            <div class="stat">
              <span>User's stay</span>
              <strong>47 minutes</strong>
            </div>
            <div class="stat">
              <span>Operations rate</span>
              <strong>920 operation</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Usage rate</span>
                <span>72%</span>
              </div>
              <div class="progress"><span style="width: 72%"></span></div>
            </div>
            <div class="actions">
              <button class="action commands button-form" data-follow="commands" type="button">commands</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--upload">access</button>
            </div>
          </div>
        </article>
        <article class="card-inner completed" data-status="blocked">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Astra</h3>
                <span class="tag">Design</span>
              </div>
            </div>
            <div class="pulse-circle block"></div>
          </div>
          <div class="stats info">
            <div class="stat">
              <span>Client</span>
              <strong>Omar Khaled</strong>
            </div>
            <div class="stat">
              <span>Phone</span>
              <strong>01124567891</strong>
            </div>
            <div class="stat">
              <span>Due on</span>
              <strong>27 Apr, 2025</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Address</span>
              <strong>Cairo</strong>
            </div>
            <div class="stat">
              <span>project manager</span>
              <strong>Yousef Adel</strong>
            </div>
            <div class="stat">
              <span>Reason for the ban</span>
              <strong>On hold</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Number of visitors</span>
              <strong>124,900 year</strong>
            </div>
            <div class="stat">
              <span>User's stay</span>
              <strong>1 hour 12 minutes</strong>
            </div>
            <div class="stat">
              <span>Operations rate</span>
              <strong>1,140 operation</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=14" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=24" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=44" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Usage rate</span>
                <span>68%</span>
              </div>
              <div class="progress"><span style="width: 68%"></span></div>
            </div>
            <div class="actions">
              <button class="action commands button-form" data-follow="commands" type="button">commands</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--archive">block</button>
            </div>
          </div>
        </article>
        <article class="card-inner completed" data-status="completed">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Pixel</h3>
                <span class="tag">Branding</span>
              </div>
            </div>
            <div class="pulse-circle access"></div>
          </div>
          <div class="stats info">
            <div class="stat">
              <span>Client</span>
              <strong>Hassan Mostafa</strong>
            </div>
            <div class="stat">
              <span>Phone</span>
              <strong>01200654321</strong>
            </div>
            <div class="stat">
              <span>Due on</span>
              <strong>03 May, 2025</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Address</span>
              <strong>Mansoura</strong>
            </div>
            <div class="stat">
              <span>project manager</span>
              <strong>Kareem Abogabal</strong>
            </div>
            <div class="stat">
              <span>Reason for the ban</span>
              <strong>Completed successfully</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Number of visitors</span>
              <strong>97,600 year</strong>
            </div>
            <div class="stat">
              <span>User's stay</span>
              <strong>39 minutes</strong>
            </div>
            <div class="stat">
              <span>Operations rate</span>
              <strong>860 operation</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=17" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=37" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=57" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Usage rate</span>
                <span>81%</span>
              </div>
              <div class="progress"><span style="width: 81%"></span></div>
            </div>
            <div class="actions">
              <button class="action commands button-form" data-follow="commands" type="button">commands</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--upload">access</button>
            </div>
          </div>
        </article>
        <article class="card-inner completed" data-status="blocked">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Luna</h3>
                <span class="tag">Website</span>
              </div>
            </div>
            <div class="pulse-circle block"></div>
          </div>
          <div class="stats info">
            <div class="stat">
              <span>Client</span>
              <strong>Mohamed Fathy</strong>
            </div>
            <div class="stat">
              <span>Phone</span>
              <strong>01088997766</strong>
            </div>
            <div class="stat">
              <span>Due on</span>
              <strong>19 Jun, 2025</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Address</span>
              <strong>Alexandria</strong>
            </div>
            <div class="stat">
              <span>project manager</span>
              <strong>Youssef Khalil</strong>
            </div>
            <div class="stat">
              <span>Reason for the ban</span>
              <strong>Pending review</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="stats info">
            <div class="stat">
              <span>Number of visitors</span>
              <strong>112,300 year</strong>
            </div>
            <div class="stat">
              <span>User's stay</span>
              <strong>52 minutes</strong>
            </div>
            <div class="stat">
              <span>Operations rate</span>
              <strong>1,080 operation</strong>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=28" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=58" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Usage rate</span>
                <span>74%</span>
              </div>
              <div class="progress"><span style="width: 74%"></span></div>
            </div>
            <div class="actions">
              <button class="action commands button-form" data-follow="commands" type="button">commands</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--archive">block</button>
            </div>
          </div>
        </article>
      </div>
    </div>
    <div class="projects-wrapper">
      <h1>Current projects</h1>
      <div class="projects-grid">
        <article class="card-inner" data-status="present">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Zen</h3>
                <span class="tag">App</span>
              </div>
            </div>
            <a class="download" href="#" aria-label="Download">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
          <div class="stats">
            <div class="stat"><span>Tasks</span><strong>18/24</strong></div>
            <div class="stat"><span>Budget</span><strong>$24,800</strong></div>
            <div class="stat"><span>Due on</span><strong>02 Oct, 2025</strong></div>
          </div>
          <div class="divider"></div>
          <div class="files-box">
            <div class="files-head">Files</div>
            <div class="files-list">
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>ui-mockup.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>prototype.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>components.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=33" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=53" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Complete</span>
                <span>58%</span>
              </div>
              <div class="progress"><span style="width: 58%"></span></div>
            </div>
            <div class="actions">
              <button class="action action--archive" type="button">block</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--upload">
                <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                  <g transform="rotate(-90 10 12)">
                    <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    <g transform="translate(27, 24) rotate(-180)">
                      <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    </g>
                  </g>
                </svg>
                download
              </button>
            </div>
          </div>
        </article>
        <article class="card-inner" data-status="present">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Mira</h3>
                <span class="tag">Admin</span>
              </div>
            </div>
            <a class="download" href="#" aria-label="Download">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
          <div class="stats">
            <div class="stat"><span>Tasks</span><strong>14/20</strong></div>
            <div class="stat"><span>Budget</span><strong>$19,500</strong></div>
            <div class="stat"><span>Due on</span><strong>18 Oct, 2025</strong></div>
          </div>
          <div class="divider"></div>
          <div class="files-box">
            <div class="files-head">Files</div>
            <div class="files-list">
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>admin-flow.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>screens.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>logic.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=15" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=35" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=55" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Complete</span>
                <span>46%</span>
              </div>
              <div class="progress"><span style="width: 46%"></span></div>
            </div>
            <div class="actions">
              <button class="action action--archive" type="button">block</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--upload">
                <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                  <g transform="rotate(-90 10 12)">
                    <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    <g transform="translate(27, 24) rotate(-180)">
                      <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    </g>
                  </g>
                </svg>
                download
              </button>
            </div>
          </div>
        </article>
        <article class="card-inner" data-status="present">
          <div class="top">
            <div class="brand">
              <div class="icon icon--custom">
                <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                  <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                  <path d="M7 20h10" stroke="var(--colorSVG1)"/>
                </svg>
              </div>
              <div class="titlebox">
                <h3 class="title search">Echo</h3>
                <span class="tag">System</span>
              </div>
            </div>
            <a class="download" href="#" aria-label="Download">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
            </a>
          </div>
          <div class="stats">
            <div class="stat"><span>Tasks</span><strong>21/28</strong></div>
            <div class="stat"><span>Budget</span><strong>$31,400</strong></div>
            <div class="stat"><span>Due on</span><strong>21 Nov, 2025</strong></div>
          </div>
          <div class="divider"></div>
          <div class="files-box">
            <div class="files-head">Files</div>
            <div class="files-list">
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>system-map.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>monitoring.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
              <div class="file-item">
                <a href="files/dribbble-wireframe.fig" download>logs.fig</a>
                <form action="">
                  <button aria-label="Delete item" class="delete-button">
                    <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                      <g id="trash-can">
                        <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                        <g transform-origin="12 18" id="lid-group">
                          <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b"></rect>
                          <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b"></rect>
                        </g>
                      </g>
                    </svg>
                  </button>
                </form>
              </div>
            </div>
          </div>
          <div class="divider"></div>
          <div class="bottom">
            <div class="avatars">
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=16" loading="lazy" alt="User 1"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=36" loading="lazy" alt="User 2"></a>
              <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=56" loading="lazy" alt="User 3"></a>
            </div>
            <div class="main-progress">
              <div class="progress-head">
                <span>Complete</span>
                <span>77%</span>
              </div>
              <div class="progress"><span style="width: 77%"></span></div>
            </div>
            <div class="actions">
              <button class="action action--archive" type="button">block</button>
              <a href="/company/project-details" class="action">View</a>
              <button class="action action--upload">
                <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                  <g transform="rotate(-90 10 12)">
                    <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    <g transform="translate(27, 24) rotate(-180)">
                      <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                      <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                    </g>
                  </g>
                </svg>
                download
              </button>
            </div>
          </div>
        </article>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/projects.js') }}"></script>
@endsection