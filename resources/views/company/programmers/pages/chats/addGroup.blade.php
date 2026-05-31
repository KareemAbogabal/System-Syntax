@extends('company.programmers.main')

@section('title', 'Add Group')

@section('page')
  <div class="add-group-page">
    <x-components::company.popupForm header="Add person in group" description="A true leader is one who facilitates communication between employees to develop the organization they belong to" dataFollowButton="add-preson-group" pathPostForm="#">
      <input type="hidden" id="group-id">
      <x-components::company.entityPicker size="3" choose="50" name="Employees" show="branch" />
    </x-components::company.popupForm>
    <div class="container">
      <section class="hero card-inner">
        <div class="top">
          <div class="logo">✦</div>
          <div class="text">
            <div class="eyebrow">Premium Company Chat</div>
            <div class="title">Luxury Group Management</div>
            <div class="subtitle">
              A refined static page for creating chat groups and preparing member management.
              This version uses only HTML and CSS, with no JavaScript.
            </div>
          </div>
        </div>
        <div class="stats">
          <div class="stat">
            <span class="label">Groups</span>
            <div class="value">03</div>
          </div>
          <div class="stat">
            <span class="label">Members</span>
            <div class="value">64</div>
          </div>
          <div class="stat">
            <span class="label">Security</span>
            <div class="value">High</div>
          </div>
          <div class="stat">
            <span class="label">Style</span>
            <div class="value">Luxury</div>
          </div>
        </div>
      </section>
      <div class="section card-inner">
        <div class="section-head">
          <div class="section-title">Create Group</div>
          <div class="section-note">
            This form is ready for backend connection later. Without JavaScript, it will not add cards dynamically.
          </div>
        </div>
        <form class="create-form" action="#" method="post">
          <input type="text" name="group_name" placeholder="Enter group name..." />
          <textarea name="group_description" placeholder="Enter group description..."></textarea>
          <div class="row">
            <select name="group_type">
              <option value="Normal">Normal</option>
              <option value="Featured">Featured</option>
            </select>
            <button type="submit">Add Group</button>
          </div>
        </form>
      </div>
      <div class="section card-inner">
        <div class="section-head">
          <div class="section-title">Group Features</div>
          <div class="section-note">
            Choose the security level for the group. This card is separate from the main group creation form.
          </div>
        </div>
        <form class="create-form" action="#" method="post">
          <div class="row">
            <select name="security_level">
              <option value="Basic">Basic Security</option>
              <option value="Strong">Strong Security</option>
              <option value="Maximum">Maximum Security</option>
            </select>
            <button type="submit">Add Feature</button>
          </div>
        </form>
      </div>
      <div class="groups card-inner">
        <div class="group-card">
          <div class="group-top">
            <div>
              <div class="name">Executive Command</div>
              <div class="desc">
                Private leadership group for strategic decisions, approvals, and company-wide direction.
              </div>
            </div>
          </div>
          <div class="chips">
            <div class="chip">Restricted</div>
            <div class="chip">18 Members</div>
            <div class="chip">Active</div>
          </div>
          <input type="text" name="member_email" placeholder="Search member " />
          <div class="members-list">
            <div class="member">
              <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Amir Hassan" />
              <div class="content">
                <div class="info">
                  <span>Amir Hassan</span>
                  <span class="tag">Admin</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>

            <div class="member">
              <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Lina Khaled" />
              <div class="content">
                <div class="info">
                  <span>Lina Khaled</span>
                  <span class="tag">Security</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>

            <div class="member">
              <img src="https://i.pravatar.cc/100?img=45" loading="lazy" alt="Omar Ali" />
              <div class="content">
                <div class="info">
                  <span>Omar Ali</span>
                  <span class="tag">Manager</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="card-actions">
            <button type="button" class="state-btn block">Block</button>
            <button type="button" class="state-btn access button-form" data-id="89089"
              data-follow="add-preson-group">Add Members</button>
          </div>
        </div>

        <div class="group-card">
          <div class="group-top">
            <div>
              <div class="name">Product Excellence</div>
              <div class="desc">
                Internal group for product, design, and engineering collaboration in a secure environment.
              </div>
            </div>
          </div>

          <div class="chips">
            <div class="chip">Internal</div>
            <div class="chip">34 Members</div>
            <div class="chip">Active</div>
          </div>

          <input type="text" name="member_email" placeholder="Search member " />

          <div class="members-list">
            <div class="member">
              <img src="https://i.pravatar.cc/100?img=15" loading="lazy" alt="Sara Ahmed" />
              <div class="content">
                <div class="info">
                  <span>Sara Ahmed</span>
                  <span class="tag">Design</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>

            <div class="member">
              <img src="https://i.pravatar.cc/100?img=22" loading="lazy" alt="Noah Carter" />
              <div class="content">
                <div class="info">
                  <span>Noah Carter</span>
                  <span class="tag">Engineering</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>

          <div class="card-actions">
            <button type="button" class="state-btn block">Block</button>
            <button type="button" class="state-btn access button-form" data-id="89089"
              data-follow="add-preson-group">Add Members</button>
          </div>
        </div>
        <div class="group-card">
          <div class="group-top">
            <div>
              <div class="name">Client Concierge</div>
              <div class="desc">
                VIP support group for premium clients, managed with strict access control.
              </div>
            </div>
          </div>
          <div class="chips">
            <div class="chip">Privileged</div>
            <div class="chip">12 Members</div>
            <div class="chip">Locked</div>
          </div>
          <input type="text" name="member_email" placeholder="Search member " />
          <div class="members-list">
            <div class="member">
              <img src="https://i.pravatar.cc/100?img=40" loading="lazy" alt="Huda Salem" />
              <div class="content">
                <div class="info">
                  <span>Huda Salem</span>
                  <span class="tag">Concierge</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
            <div class="member">
              <img src="https://i.pravatar.cc/100?img=18" loading="lazy" alt="Mariam Youssef" />
              <div class="content">
                <div class="info">
                  <span>Mariam Youssef</span>
                  <span class="tag">VIP Support</span>
                </div>
                <div class="controls">
                  <form action="" method="post">
                    <button type="submit">
                      <svg width="30" height="30" viewBox="0 0 50 50" fill="none"
                        xmlns="http://www.w3.org/2000/svg">
                        <circle cx="25" cy="25" r="14" stroke="#c0392b" stroke-width="3"
                          fill="transparent" />
                        <path d="M16 34L34 16" stroke="#c0392b" stroke-width="3" stroke-linecap="round" />
                      </svg>
                    </button>
                  </form>
                  <form action="" method="post">
                    <button aria-label="Delete item" class="delete-button" type="submit">
                      <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                        <g id="trash-can">
                          <rect x="16" y="24" width="32" height="30" rx="3" ry="3"
                            fill="#e74c3c"></rect>
                          <g transform-origin="12 18" id="lid-group">
                            <rect x="12" y="12" width="40" height="6" rx="2" ry="2"
                              fill="#c0392b"></rect>
                            <rect x="26" y="8" width="12" height="4" rx="2" ry="2"
                              fill="#c0392b"></rect>
                          </g>
                        </g>
                      </svg>
                    </button>
                  </form>
                </div>
              </div>
            </div>
          </div>
          <div class="card-actions">
            <button type="button" class="state-btn block">Block</button>
            <button type="button" class="state-btn access button-form" data-id="89089"
              data-follow="add-preson-group">Add Members</button>
          </div>
        </div>
      </div>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/chats/add-group.js') }}"></script>
@endsection
