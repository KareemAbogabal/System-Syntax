@extends('company.programmers.main')

@section('title', 'Project')

@section('page')
  <x-components::company.popupForm header="Add task" description="Add tasks to employees and distribute them equally so that no one is burdened with more than they can handle" dataFollowButton="add-task" pathPostForm="#">
    <div class="row">
      <div class="perant-input">
        <label for="name-task">Name task</label>
        <input type="text" id="name-task" name="name_task" placeholder="Enter task name">
      </div>
      <div class="perant-input">
        <label for="vacation-start">Start Date</label>
        <input type="date" id="vacation-start" name="vacation_start" placeholder="Select start date">
      </div>
      <div class="perant-input">
        <label for="vacation-end">End Date</label>
        <input type="date" id="vacation-end" name="vacation_end" placeholder="Select End date">
      </div>
    </div>
    <x-components::company.entityPicker size="1" choose="2" name="employees your team" show="branch" />
    <div class="perant-input">
      <label for="reason-for-acceptance">Reason for acceptance</label>
      <textarea id="reason-for-acceptance" placeholder="Reason for acceptance"></textarea>
    </div>
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Add team" description="Add a team to feel the spirit of cooperation" dataFollowButton="add-team" pathPostForm="#">
    <x-components::company.entityPicker size="3" choose="20" name="employees your team" show="branch" />
  </x-components::company.popupForm>
  <x-components::company.popupForm header="publish" description="When each site is uploaded, it means the company is advancing your profile" dataFollowButton="publish" pathPostForm="#">
    <div class="row">
      <div class="file-explorer">
        <svg aria-hidden="true" focusable="false" style="position:absolute;width:0;height:0;overflow:hidden">
          <symbol id="icon-arrow" viewBox="0 0 24 24">
            <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-folder-open" viewBox="0 0 24 24">
            <path d="M3.5 7.5H9l1.7 2H20.5C21.88 9.5 23 10.62 23 12v6.5c0 1.38-1.12 2.5-2.5 2.5h-17C2.12 21 1 19.88 1 18.5v-9C1 8.12 2.12 7 3.5 7.5Z" fill="currentColor"></path>
            <path d="M4 8.8h16.7" stroke="rgba(255,255,255,0.25)" stroke-width="1.2" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-folder-closed" viewBox="0 0 24 24">
            <path d="M3.5 7.5H9l1.7 2H20.5C21.88 9.5 23 10.62 23 12v6.5c0 1.38-1.12 2.5-2.5 2.5h-17C2.12 21 1 19.88 1 18.5v-9C1 8.12 2.12 7 3.5 7.5Z" fill="currentColor"></path>
          </symbol>
          <symbol id="icon-file-default" viewBox="0 0 24 24">
            <path d="M6.8 2.5h7.9L19.5 7v13.7c0 1.3-1.1 2.3-2.4 2.3H6.9c-1.3 0-2.4-1-2.4-2.3V4.9c0-1.3 1-2.4 2.3-2.4Z" fill="currentColor"></path>
            <path d="M14.7 2.5V7h4.8" fill="none" stroke="#fff" stroke-opacity="0.9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-html" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10.4h7.6M8.2 13.6h6.5M8.2 16.8h4.7" stroke="#fff" stroke-opacity="0.85" stroke-width="1.6" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-css" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.6 9.7l4.6 1-0.8 5.8-2 0.7-2.1-.7-.3-2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-js" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M10 14.6c0 1.2-.7 1.9-1.9 1.9-.7 0-1.4-.2-2-.7M13 12.5c.7-.7 1.7-1 2.8-1 1.1 0 1.8.4 1.8 1.1 0 1.8-4.5 1.2-4.5 3.6 0 1 .8 1.9 2.2 1.9 1 0 1.8-.3 2.5-.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-ts" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 9.8h7.6M8.2 12.8h4.8M10.2 14.5h2.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-json" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9.5 10.5c-.8.8-1.2 1.8-1.2 3s.4 2.2 1.2 3M14.5 10.5c.8.8 1.2 1.8 1.2 3s-.4 2.2-1.2 3" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-md" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 14.5V10l2 2 2-2v4.5" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-svg" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 14.5c1.2-4 4.8-4 6 0M9.5 10.7c1.1-1.2 3.9-1.2 5 0" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-png" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <circle cx="11" cy="12" r="1.5" fill="#fff" fill-opacity="0.9"></circle>
            <path d="M8.5 16l2.3-2.2 1.7 1.5 1.6-1.4 1.9 2.1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-jpg" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 16.2c.8-1.8 1.8-2.7 3-2.7 1 0 1.7.5 2.4 1.5.7 1 1.4 1.5 2.2 1.5" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-gif" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 11.8h2.7v2.8H9.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-pdf" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 16.2c.9-2.8 1.8-4 2.8-4 .8 0 1.3.7 1.9 2 .8 1.7 1.4 2.5 2.2 2.5 1 0 1.8-.9 2.4-2.6" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-zip" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M11.2 7.1h1.8M11.2 9.5h1.8M11.2 11.9h1.8M11.2 14.3h1.8M11.2 16.7h1.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.35" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-mp3" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 14.9v-4.7l6 1.7v4.7" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="8.5" cy="16.4" r="1.2" fill="#fff" fill-opacity="0.9"></circle>
            <circle cx="14.5" cy="18.1" r="1.2" fill="#fff" fill-opacity="0.9"></circle>
          </symbol>
          <symbol id="icon-file-mp4" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 11l6 3-6 3v-6Z" fill="#fff" fill-opacity="0.9"></path>
          </symbol>
          <symbol id="icon-file-py" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 9.4h3.2c1 0 1.7.7 1.7 1.6 0 1-.7 1.7-1.7 1.7h-1.4v2.3" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-php" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 11.5h1.9c1 0 1.6.6 1.6 1.4 0 .9-.6 1.5-1.6 1.5H8.4M15 11.5v3.4M15 13h2.1M17.1 11.5v3.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-jsx" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10.2h4.8M8.2 13h3.4M14.1 10.9l2.8 3.8M16.9 10.9l-2.8 3.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-tsx" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10h4.7M8.2 12.8h3.5M14.3 11l3.4 3.2M17.7 11l-3.4 3.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-go" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 12.3h3.8M12.1 12.3c0 1.7-1 3-2.8 3-1.5 0-2.7-1.2-2.7-2.8 0-1.7 1.2-2.8 2.7-2.8.9 0 1.7.3 2.2.9" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-java" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 15c.9.7 1.8 1 2.8 1 1.1 0 1.8-.4 1.8-1 0-1.5-4.5-.9-4.5-3.1 0-.9.8-1.7 2.1-1.7 1 0 1.8.2 2.5.7" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
            <path d="M10.5 9.4c.4-.8.8-1.4 1.5-2.2.6.8 1 1.4 1.4 2.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-c" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M15 10.3c-.5-.7-1.2-1-2.2-1-1.6 0-2.8 1.2-2.8 2.9s1.2 2.9 2.8 2.9c1 0 1.7-.3 2.2-1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-cpp" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 12.2h2.1M9.6 11.1v2.2M13.5 12.2h2.1M14.6 11.1v2.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-rs" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 10.2h2.5c1 0 1.6.6 1.6 1.4 0 .8-.6 1.4-1.6 1.4H8.5M10.4 13l2.1 2.9" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-sql" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.3 10.2c.6-.6 1.7-1 2.8-1 1.5 0 2.1.5 2.1 1.1 0 1.7-4.7.9-4.7 3.2 0 .8.8 1.5 2 1.5 1.2 0 2.1-.3 2.8-1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-yml" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 10l2 2.6V16M12.7 10l-2 2.6M15 10.2v4.8M15 15h2.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-txt" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8 10.2h8M8 13.4h8M8 16.6h5.5" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
        </svg>
        <div class="file-explorer-header">
          <div class="file-explorer-title">
            <span class="file-explorer-title-icon">
              <svg viewBox="0 0 64 64" aria-hidden="true">
                <defs>
                  <linearGradient id="folderGrad" x1="10" y1="8" x2="54" y2="56" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="var(--colorSVG2)"></stop>
                    <stop offset="55%" stop-color="var(--secondary-color)"></stop>
                    <stop offset="100%" stop-color="var(--btn-color)"></stop>
                  </linearGradient>
                  <linearGradient id="folderGlow" x1="14" y1="12" x2="50" y2="52" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.75"></stop>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0"></stop>
                  </linearGradient>
                  <filter id="folderShadow" x="-20%" y="-20%" width="140%" height="140%">
                    <feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#000000" flood-opacity="0.45"></feDropShadow>
                  </filter>
                </defs>
                <path filter="url(#folderShadow)" d="M10 18.5C10 15.46 12.46 13 15.5 13H26l5.2 5.2H48.5C51.54 18.2 54 20.66 54 23.7v20.8C54 47.54 51.54 50 48.5 50h-33C12.46 50 10 47.54 10 44.5V18.5Z" fill="url(#folderGrad)"></path>
                <path d="M10.8 24.3H53.2" stroke="url(#folderGlow)" stroke-width="2.2" stroke-linecap="round" opacity="0.55"></path>
                <path d="M15 19.8h9.7c1.1 0 2.1.5 2.7 1.4l1.2 1.7H48" stroke="#ffffff" stroke-opacity="0.30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M17.5 26h28" stroke="#ffffff" stroke-opacity="0.18" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </span>
            <span>Explorer</span>
          </div>
        </div>
        <div class="file-explorer-body" id="fileTree">
          <div class="tree-node tree-folder open">
            <button class="tree-row tree-folder-row" type="button" aria-expanded="true">
              <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
              <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-open"></use></svg></span>
              <span class="tree-name">PROJECT_DELTA</span>
            </button>
            <div class="tree-children">
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-html"></use></svg></span><span class="tree-name">index.html</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-js"></use></svg></span><span class="tree-name">app.js</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-css"></use></svg></span><span class="tree-name">style.css</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-ts"></use></svg></span><span class="tree-name">types.ts</span></div></div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">src</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">components</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-jsx"></use></svg></span><span class="tree-name">Sidebar.jsx</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-tsx"></use></svg></span><span class="tree-name">FileTree.tsx</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-md"></use></svg></span><span class="tree-name">Notes.md</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">services</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-json"></use></svg></span><span class="tree-name">api.json</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-py"></use></svg></span><span class="tree-name">worker.py</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-php"></use></svg></span><span class="tree-name">gateway.php</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">native</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-c"></use></svg></span><span class="tree-name">engine.c</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-cpp"></use></svg></span><span class="tree-name">render.cpp</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-rs"></use></svg></span><span class="tree-name">kernel.rs</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-go"></use></svg></span><span class="tree-name">server.go</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-java"></use></svg></span><span class="tree-name">Main.java</span></div></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">assets</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">images</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-png"></use></svg></span><span class="tree-name">logo.png</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-jpg"></use></svg></span><span class="tree-name">hero.jpg</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-svg"></use></svg></span><span class="tree-name">illustration.svg</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-gif"></use></svg></span><span class="tree-name">loader.gif</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">media</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp4"></use></svg></span><span class="tree-name">intro.mp4</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp3"></use></svg></span><span class="tree-name">ambient.mp3</span></div></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">public</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-pdf"></use></svg></span><span class="tree-name">report.pdf</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-zip"></use></svg></span><span class="tree-name">backup.zip</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-txt"></use></svg></span><span class="tree-name">changelog.txt</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">database</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-sql"></use></svg></span><span class="tree-name">schema.sql</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-json"></use></svg></span><span class="tree-name">seed.json</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-yml"></use></svg></span><span class="tree-name">config.yml</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">docs</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-md"></use></svg></span><span class="tree-name">README.md</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-pdf"></use></svg></span><span class="tree-name">Manual.pdf</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">media-kit</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp4"></use></svg></span><span class="tree-name">promo.mp4</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp3"></use></svg></span><span class="tree-name">teaser.mp3</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-png"></use></svg></span><span class="tree-name">cover.png</span></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="row">
          <div class="perant-input">
            <label for="vacation-start">Start Date Hosting</label>
            <input type="date" id="vacation-start" name="vacation_start" placeholder="Select start date hosting">
          </div>
          <div class="perant-input">
            <label for="vacation-end">End Date Hosting</label>
            <input type="date" id="vacation-end" name="vacation_end" placeholder="Select End date hosting">
          </div>
        </div>
        <div class="perant-input">
          <label for="website-link">Website link</label>
          <input type="text" id="website-link" name="website_link" placeholder="Enter website link">
        </div>
        <label class="custom-file" data-no-active>
          <input type="file" id="contract-image" name="contract[]" accept=".pdf,.doc,.docx">
          <span class="file-box">
            <span class="custom-file-icon">📄</span>
            <span class="custom-file-text">
              <strong>Contract image</strong>
              <small>PDF, DOC, DOCX</small>
            </span>
          </span>
        </label>
      </div>
    </div>
  </x-components::company.popupForm>
  <x-components::company.popupForm header="publish" description="When each site is uploaded, it means the company is advancing your profile" dataFollowButton="publish" dataFollowStateProject="wordPress" pathPostForm="#">
    <div class="row">
      <div class="perant-input">
        <label for="vacation-start">Start Date Hosting</label>
        <input type="date" id="vacation-start" name="vacation_start" placeholder="Select start date hosting">
      </div>
      <div class="perant-input">
        <label for="vacation-end">End Date Hosting</label>
        <input type="date" id="vacation-end" name="vacation_end" placeholder="Select End date hosting">
      </div>
    </div>
    <div class="perant-input">
      <label for="website-link">Website link</label>
      <input type="text" id="website-link" name="website_link" placeholder="Enter website link">
    </div>
    <label class="custom-file" data-no-active>
      <input type="file" id="contract-image" name="contract[]" accept=".pdf,.doc,.docx">
      <span class="file-box">
        <span class="custom-file-icon">📄</span>
        <span class="custom-file-text">
          <strong>Contract image</strong>
          <small>PDF, DOC, DOCX</small>
        </span>
      </span>
    </label>
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Upload" description="This is progress when uploading a project file" dataFollowButton="upload" pathPostForm="#">
    <div class="row">
      <div class="file-explorer">
        <svg aria-hidden="true" focusable="false" style="position:absolute;width:0;height:0;overflow:hidden">
          <symbol id="icon-arrow" viewBox="0 0 24 24">
            <path d="M9 6l6 6-6 6" fill="none" stroke="currentColor" stroke-width="2.2" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-folder-open" viewBox="0 0 24 24">
            <path d="M3.5 7.5H9l1.7 2H20.5C21.88 9.5 23 10.62 23 12v6.5c0 1.38-1.12 2.5-2.5 2.5h-17C2.12 21 1 19.88 1 18.5v-9C1 8.12 2.12 7 3.5 7.5Z" fill="currentColor"></path>
            <path d="M4 8.8h16.7" stroke="rgba(255,255,255,0.25)" stroke-width="1.2" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-folder-closed" viewBox="0 0 24 24">
            <path d="M3.5 7.5H9l1.7 2H20.5C21.88 9.5 23 10.62 23 12v6.5c0 1.38-1.12 2.5-2.5 2.5h-17C2.12 21 1 19.88 1 18.5v-9C1 8.12 2.12 7 3.5 7.5Z" fill="currentColor"></path>
          </symbol>
          <symbol id="icon-file-default" viewBox="0 0 24 24">
            <path d="M6.8 2.5h7.9L19.5 7v13.7c0 1.3-1.1 2.3-2.4 2.3H6.9c-1.3 0-2.4-1-2.4-2.3V4.9c0-1.3 1-2.4 2.3-2.4Z" fill="currentColor"></path>
            <path d="M14.7 2.5V7h4.8" fill="none" stroke="#fff" stroke-opacity="0.9" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-html" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10.4h7.6M8.2 13.6h6.5M8.2 16.8h4.7" stroke="#fff" stroke-opacity="0.85" stroke-width="1.6" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-css" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.6 9.7l4.6 1-0.8 5.8-2 0.7-2.1-.7-.3-2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-js" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M10 14.6c0 1.2-.7 1.9-1.9 1.9-.7 0-1.4-.2-2-.7M13 12.5c.7-.7 1.7-1 2.8-1 1.1 0 1.8.4 1.8 1.1 0 1.8-4.5 1.2-4.5 3.6 0 1 .8 1.9 2.2 1.9 1 0 1.8-.3 2.5-.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-ts" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 9.8h7.6M8.2 12.8h4.8M10.2 14.5h2.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-json" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9.5 10.5c-.8.8-1.2 1.8-1.2 3s.4 2.2 1.2 3M14.5 10.5c.8.8 1.2 1.8 1.2 3s-.4 2.2-1.2 3" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-md" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 14.5V10l2 2 2-2v4.5" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-svg" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 14.5c1.2-4 4.8-4 6 0M9.5 10.7c1.1-1.2 3.9-1.2 5 0" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-png" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <circle cx="11" cy="12" r="1.5" fill="#fff" fill-opacity="0.9"></circle>
            <path d="M8.5 16l2.3-2.2 1.7 1.5 1.6-1.4 1.9 2.1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-jpg" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 16.2c.8-1.8 1.8-2.7 3-2.7 1 0 1.7.5 2.4 1.5.7 1 1.4 1.5 2.2 1.5" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-gif" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 11.8h2.7v2.8H9.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-pdf" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 16.2c.9-2.8 1.8-4 2.8-4 .8 0 1.3.7 1.9 2 .8 1.7 1.4 2.5 2.2 2.5 1 0 1.8-.9 2.4-2.6" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-zip" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M11.2 7.1h1.8M11.2 9.5h1.8M11.2 11.9h1.8M11.2 14.3h1.8M11.2 16.7h1.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.35" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-mp3" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 14.9v-4.7l6 1.7v4.7" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
            <circle cx="8.5" cy="16.4" r="1.2" fill="#fff" fill-opacity="0.9"></circle>
            <circle cx="14.5" cy="18.1" r="1.2" fill="#fff" fill-opacity="0.9"></circle>
          </symbol>
          <symbol id="icon-file-mp4" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 11l6 3-6 3v-6Z" fill="#fff" fill-opacity="0.9"></path>
          </symbol>
          <symbol id="icon-file-py" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 9.4h3.2c1 0 1.7.7 1.7 1.6 0 1-.7 1.7-1.7 1.7h-1.4v2.3" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-php" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 11.5h1.9c1 0 1.6.6 1.6 1.4 0 .9-.6 1.5-1.6 1.5H8.4M15 11.5v3.4M15 13h2.1M17.1 11.5v3.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-jsx" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10.2h4.8M8.2 13h3.4M14.1 10.9l2.8 3.8M16.9 10.9l-2.8 3.8" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-tsx" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 10h4.7M8.2 12.8h3.5M14.3 11l3.4 3.2M17.7 11l-3.4 3.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-go" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.2 12.3h3.8M12.1 12.3c0 1.7-1 3-2.8 3-1.5 0-2.7-1.2-2.7-2.8 0-1.7 1.2-2.8 2.7-2.8.9 0 1.7.3 2.2.9" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-java" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M9 15c.9.7 1.8 1 2.8 1 1.1 0 1.8-.4 1.8-1 0-1.5-4.5-.9-4.5-3.1 0-.9.8-1.7 2.1-1.7 1 0 1.8.2 2.5.7" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
            <path d="M10.5 9.4c.4-.8.8-1.4 1.5-2.2.6.8 1 1.4 1.4 2.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-c" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M15 10.3c-.5-.7-1.2-1-2.2-1-1.6 0-2.8 1.2-2.8 2.9s1.2 2.9 2.8 2.9c1 0 1.7-.3 2.2-1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-cpp" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 12.2h2.1M9.6 11.1v2.2M13.5 12.2h2.1M14.6 11.1v2.2" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-rs" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.5 10.2h2.5c1 0 1.6.6 1.6 1.4 0 .8-.6 1.4-1.6 1.4H8.5M10.4 13l2.1 2.9" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-sql" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.3 10.2c.6-.6 1.7-1 2.8-1 1.5 0 2.1.5 2.1 1.1 0 1.7-4.7.9-4.7 3.2 0 .8.8 1.5 2 1.5 1.2 0 2.1-.3 2.8-1" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round"></path>
          </symbol>
          <symbol id="icon-file-yml" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8.4 10l2 2.6V16M12.7 10l-2 2.6M15 10.2v4.8M15 15h2.4" fill="none" stroke="#fff" stroke-opacity="0.85" stroke-width="1.45" stroke-linecap="round" stroke-linejoin="round"></path>
          </symbol>
          <symbol id="icon-file-txt" viewBox="0 0 24 24">
            <use href="#icon-file-default"></use>
            <path d="M8 10.2h8M8 13.4h8M8 16.6h5.5" stroke="#fff" stroke-opacity="0.85" stroke-width="1.5" stroke-linecap="round"></path>
          </symbol>
        </svg>
        <div class="file-explorer-header">
          <div class="file-explorer-title">
            <span class="file-explorer-title-icon">
              <svg viewBox="0 0 64 64" aria-hidden="true">
                <defs>
                  <linearGradient id="folderGrad" x1="10" y1="8" x2="54" y2="56" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="var(--colorSVG2)"></stop>
                    <stop offset="55%" stop-color="var(--secondary-color)"></stop>
                    <stop offset="100%" stop-color="var(--btn-color)"></stop>
                  </linearGradient>
                  <linearGradient id="folderGlow" x1="14" y1="12" x2="50" y2="52" gradientUnits="userSpaceOnUse">
                    <stop offset="0%" stop-color="#ffffff" stop-opacity="0.75"></stop>
                    <stop offset="100%" stop-color="#ffffff" stop-opacity="0"></stop>
                  </linearGradient>
                  <filter id="folderShadow" x="-20%" y="-20%" width="140%" height="140%">
                    <feDropShadow dx="0" dy="10" stdDeviation="10" flood-color="#000000" flood-opacity="0.45"></feDropShadow>
                  </filter>
                </defs>
                <path filter="url(#folderShadow)" d="M10 18.5C10 15.46 12.46 13 15.5 13H26l5.2 5.2H48.5C51.54 18.2 54 20.66 54 23.7v20.8C54 47.54 51.54 50 48.5 50h-33C12.46 50 10 47.54 10 44.5V18.5Z" fill="url(#folderGrad)"></path>
                <path d="M10.8 24.3H53.2" stroke="url(#folderGlow)" stroke-width="2.2" stroke-linecap="round" opacity="0.55"></path>
                <path d="M15 19.8h9.7c1.1 0 2.1.5 2.7 1.4l1.2 1.7H48" stroke="#ffffff" stroke-opacity="0.30" stroke-width="2" stroke-linecap="round" stroke-linejoin="round"></path>
                <path d="M17.5 26h28" stroke="#ffffff" stroke-opacity="0.18" stroke-width="2" stroke-linecap="round"></path>
              </svg>
            </span>
            <span>Explorer</span>
          </div>
        </div>
        <div class="file-explorer-body" id="fileTree">
          <div class="tree-node tree-folder open">
            <button class="tree-row tree-folder-row" type="button" aria-expanded="true">
              <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
              <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-open"></use></svg></span>
              <span class="tree-name">PROJECT_DELTA</span>
            </button>
            <div class="tree-children">
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-html"></use></svg></span><span class="tree-name">index.html</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-js"></use></svg></span><span class="tree-name">app.js</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-css"></use></svg></span><span class="tree-name">style.css</span></div></div>
              <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-ts"></use></svg></span><span class="tree-name">types.ts</span></div></div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">src</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">components</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-jsx"></use></svg></span><span class="tree-name">Sidebar.jsx</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-tsx"></use></svg></span><span class="tree-name">FileTree.tsx</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-md"></use></svg></span><span class="tree-name">Notes.md</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">services</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-json"></use></svg></span><span class="tree-name">api.json</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-py"></use></svg></span><span class="tree-name">worker.py</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-php"></use></svg></span><span class="tree-name">gateway.php</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">native</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-c"></use></svg></span><span class="tree-name">engine.c</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-cpp"></use></svg></span><span class="tree-name">render.cpp</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-rs"></use></svg></span><span class="tree-name">kernel.rs</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-go"></use></svg></span><span class="tree-name">server.go</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-java"></use></svg></span><span class="tree-name">Main.java</span></div></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">assets</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">images</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-png"></use></svg></span><span class="tree-name">logo.png</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-jpg"></use></svg></span><span class="tree-name">hero.jpg</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-svg"></use></svg></span><span class="tree-name">illustration.svg</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-gif"></use></svg></span><span class="tree-name">loader.gif</span></div></div>
                    </div>
                  </div>
                  <div class="tree-node tree-folder">
                    <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                      <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                      <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                      <span class="tree-name">media</span>
                    </button>
                    <div class="tree-children hidden">
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp4"></use></svg></span><span class="tree-name">intro.mp4</span></div></div>
                      <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp3"></use></svg></span><span class="tree-name">ambient.mp3</span></div></div>
                    </div>
                  </div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">public</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-pdf"></use></svg></span><span class="tree-name">report.pdf</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-zip"></use></svg></span><span class="tree-name">backup.zip</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-txt"></use></svg></span><span class="tree-name">changelog.txt</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">database</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-sql"></use></svg></span><span class="tree-name">schema.sql</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-json"></use></svg></span><span class="tree-name">seed.json</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-yml"></use></svg></span><span class="tree-name">config.yml</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">docs</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-md"></use></svg></span><span class="tree-name">README.md</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-pdf"></use></svg></span><span class="tree-name">Manual.pdf</span></div></div>
                </div>
              </div>
              <div class="tree-node tree-folder">
                <button class="tree-row tree-folder-row" type="button" aria-expanded="false">
                  <span class="tree-arrow"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-arrow"></use></svg></span>
                  <span class="tree-icon tree-folder-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-folder-closed"></use></svg></span>
                  <span class="tree-name">media-kit</span>
                </button>
                <div class="tree-children hidden">
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp4"></use></svg></span><span class="tree-name">promo.mp4</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-mp3"></use></svg></span><span class="tree-name">teaser.mp3</span></div></div>
                  <div class="tree-node tree-file"><div class="tree-row tree-file-row"><span class="tree-icon tree-file-icon"><svg viewBox="0 0 24 24" aria-hidden="true"><use href="#icon-file-png"></use></svg></span><span class="tree-name">cover.png</span></div></div>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="column">
        <div class="perant-input">
          <label for="file-name">file name</label>
          <input type="text" id="file-name" name="file_name" placeholder="Enter file name">
        </div>
        <label class="custom-file" data-no-active>
          <input type="file" id="file_upload" name="contract[]" accept=".zip">
          <span class="file-box">
            <span class="custom-file-icon">📄</span>
            <span class="custom-file-text">
              <strong>Upload file</strong>
              <small>ZIP</small>
            </span>
          </span>
        </label>
      </div>
    </div>
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Upload" description="This is progress when uploading a project file" dataFollowButton="upload" dataFollowStateProject="wordPress" pathPostForm="#">
    <div class="perant-input">
      <label for="link-website">Enter link website</label>
      <input type="text" id="link-website" name="link_website" placeholder="Enter link website">
    </div>
  </x-components::company.popupForm>
  <div class="project-page">
    <div class="tasks-card card-inner">
      <div class="left">
        <h3>Task Management</h3>
        <span class="sub">Assign and control tasks</span>
      </div>
      <div class="row">
        <button class="btn-send button-form unactive" data-status="warning" data-massage="You must select at least one employee to add a task" data-follow="add-task">Add Task</button>
        <button class="btn-send button-form" data-follow="add-team">Add Team</button>
      </div>
    </div>
    <x-components::company.fillterBar :pills="['All', 'present', 'completed']" />
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
              <h3 class="title">Vox</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>16/24</strong></div>
          <div class="stat"><span>Budget</span><strong>$22,200</strong></div>
          <div class="stat"><span>Due on</span><strong>12 Feb, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
            </button>
          </div>
        </div>
      </article>
      <article class="card-inner" data-status="completed">
        <div class="top">
          <div class="brand">
            <div class="icon icon--custom">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                <path d="M7 20h10" stroke="var(--colorSVG1)"/>
              </svg>
            </div>
            <div class="titlebox">
              <h3 class="title">Dribbble Redesign</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>56/66</strong></div>
          <div class="stat"><span>Budget</span><strong>$12,000</strong></div>
          <div class="stat"><span>Due on</span><strong>30 Jan, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>          
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=28" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow-state-project="wordPress" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow-state-project="wordPress" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
            </button>
          </div>
        </div>
      </article>
      <article class="card-inner" data-status="completed">
        <div class="top">
          <div class="brand">
            <div class="icon icon--custom">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                <path d="M7 20h10" stroke="var(--colorSVG1)"/>
              </svg>
            </div>
            <div class="titlebox">
              <h3 class="title">Dribbble Redesign</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>56/66</strong></div>
          <div class="stat"><span>Budget</span><strong>$12,000</strong></div>
          <div class="stat"><span>Due on</span><strong>30 Jan, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>          
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=28" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow-state-project="wordPress" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow-state-project="wordPress" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
            </button>
          </div>
        </div>
      </article>
      <article class="card-inner" data-status="completed">
        <div class="top">
          <div class="brand">
            <div class="icon icon--custom">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                <path d="M7 20h10" stroke="var(--colorSVG1)"/>
              </svg>
            </div>
            <div class="titlebox">
              <h3 class="title">Vox</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>16/24</strong></div>
          <div class="stat"><span>Budget</span><strong>$22,200</strong></div>
          <div class="stat"><span>Due on</span><strong>12 Feb, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=12" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=32" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=48" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
            </button>
          </div>
        </div>
      </article>
      <article class="card-inner" data-status="completed">
        <div class="top">
          <div class="brand">
            <div class="icon icon--custom">
              <svg width="30" height="30" viewBox="-1 -1 25 25" xmlns="http://www.w3.org/2000/svg">
                <rect x="3" y="4" width="18" height="14" rx="3" fill="var(--colorSVG2)"/>
                <path d="M7 20h10" stroke="var(--colorSVG1)"/>
              </svg>
            </div>
            <div class="titlebox">
              <h3 class="title">Dribbble Redesign</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>56/66</strong></div>
          <div class="stat"><span>Budget</span><strong>$12,000</strong></div>
          <div class="stat"><span>Due on</span><strong>30 Jan, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=28" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
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
              <h3 class="title">Dribbble Redesign</h3>
              <span class="tag">Design</span>
            </div>
          </div>
          <a class="button-top" href="#" aria-label="Download">
            <svg viewBox="0 0 24 24" fill="none">
              <path d="M12 3v10" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
              <path d="M8.5 10.5L12 13.9l3.5-3.4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
              <path d="M5 20h14" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
            </svg>
          </a>
        </div>
        <div class="stats">
          <div class="stat"><span>Tasks</span><strong>56/66</strong></div>
          <div class="stat"><span>Budget</span><strong>$12,000</strong></div>
          <div class="stat"><span>Due on</span><strong>30 Jan, 2025</strong></div>
        </div>
        <div class="divider"></div>
        <div class="files-box">
          <div class="files-head">Files</div>
          <div class="files-list">
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
            <div class="file-item">
              <a href="files/dribbble-wireframe.fig" download>dribbble-wireframe.fig</a>
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
            </div>
          </div>
        </div>
        <div class="divider"></div>
        <div class="bottom">
          <div class="avatars">
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=13" loading="lazy" alt="User 1"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=18" loading="lazy" alt="User 2"></a>
            <a href="/company/user-details" class="avatar-link"><img src="https://i.pravatar.cc/80?img=28" loading="lazy" alt="User 3"></a>
          </div>
          <div class="actions">
            <button class="action action--archive" type="button">
              <svg viewBox="0 0 24 24" fill="none">
                <path d="M4 7h16" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
                <path d="M6 7.2V18a1.8 1.8 0 0 0 1.8 1.8h8.4A1.8 1.8 0 0 0 18 18V7.2" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
                <path d="M9 11h6" stroke="currentColor" stroke-width="1.7" stroke-linecap="round"/>
              </svg>
              Archive
            </button>
            <button class="action action--upload button-form" data-follow="upload">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Upload
            </button>
            <button class="action action--upload button-form" data-follow="publish">
              <svg viewBox="-2 0 24 24" fill="none" width="22" height="22">
                <g transform="rotate(-90 10 12)">
                  <path d="M10 4.5H6.5C5.12 4.5 4 5.62 4 7V17C4 18.38 5.12 19.5 6.5 19.5H10" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                  <path d="M14 8L18 12L14 16" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round" stroke-linejoin="round"/>
                  <path d="M18 12H10.5" stroke="var(--bg-color)" stroke-width="1" stroke-linecap="round"/>
                </g>
              </svg>
              Publish
            </button>
          </div>
        </div>
      </article>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/tasks/project.js') }}"></script>
@endsection