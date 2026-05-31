<div class="perant-input employees-picker" data-choose="{{ $choose }}">
  <div class="employees-picker-top">
    <label for="employee-search">{{ $name }}</label>
    <span class="selected-count" data-selected-count>0 selected</span>
  </div>
  <input type="text" id="employee-search" class="employee-search" placeholder="Search {{ $name }}">
  <div class="employee-options {{ $size ? 'big-' . $size : '' }}" data-employee-options>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="1">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=12" loading="lazy" alt="Kareem">
        <div class="info">
          <div class="employee-info">
            <strong>Kareem Ali</strong>
            <span>Front End Developer</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="2">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=18" loading="lazy" alt="Sara">
        <div class="info">
          <div class="employee-info">
            <strong>Sara Adel</strong>
            <span>UI Designer</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="3">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=24" loading="lazy" alt="Ahmed">
        <div class="info">
            <div class="employee-info">
            <strong>Ahmed Nasser</strong>
            <span>Backend Developer</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="4">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=32" loading="lazy" alt="Mona">
        <div class="info">
          <div class="employee-info">
            <strong>Mona Hassan</strong>
            <span>Team Leader</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="5">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=41" loading="lazy" alt="Youssef">
        <div class="info">
          <div class="employee-info">
            <strong>Youssef Hamed</strong>
            <span>Security Specialist</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
    <label class="employee-card">
      <input type="checkbox" name="employees[]" value="6">
      <div class="employee-card-inner">
        <img src="https://i.pravatar.cc/100?img=45" loading="lazy" alt="Lina">
        <div class="info">
          <div class="employee-info">
            <strong>Lina Tarek</strong>
            <span>Project Manager</span>
            @if ($show == 'promotion')
              <div class="employee-promotion">
                <span class="promotion-mini-icon">
                  <svg viewBox="0 0 64 64" aria-hidden="true">
                    <path d="M11 29L21 16H43L53 29L32 53L11 29Z"></path>
                    <path d="M21 16L32 29L43 16"></path>
                    <path d="M19 29H45"></path>
                    <path d="M32 29V40"></path>
                  </svg>
                </span>
                <small>Executive Level</small>
              </div>
            @elseif ($show == 'branch')
              <small class="employee-branch">Cairo Branch</small>
            @elseif ($show == 'team')
              <small class="employee-branch">UI UX Team</small>
            @endif
          </div>
        </div>
        @if ($buttonDelete)
          <form action="">
            <button aria-label="Delete item" class="delete-button">
              <svg class="trash-svg" viewBox="0 -10 64 74" xmlns="http://www.w3.org/2000/svg">
                <g id="trash-can">
                  <rect x="16" y="24" width="32" height="30" rx="3" ry="3" fill="#e74c3c"></rect>
                  <g transform-origin="12 18" id="lid-group">
                    <rect x="12" y="12" width="40" height="6" rx="2" ry="2" fill="#c0392b" ></rect>
                    <rect x="26" y="8" width="12" height="4" rx="2" ry="2" fill="#c0392b" ></rect>
                  </g>
                </g>
              </svg>
            </button>
          </form>
        @endif
      </div>
    </label>
  </div>
</div>