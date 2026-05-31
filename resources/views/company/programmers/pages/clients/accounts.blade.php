@extends('company.programmers.main')

@section('title', 'Accounts')

@section('page')
  <x-components::company.popupForm header="Project rejection" description="Rejecting a project means that the entity you belong to does not accept it" dataFollowButton="project-rejection" pathPostForm="#">
    <div class="perant-input">
      <label for="reason-for-rejection">Reason for rejection</label>
      <textarea id="reason-for-rejection" placeholder="Reason for rejection"></textarea>
    </div>
  </x-components::company.popupForm>
  <div class="accounts">
    <x-components::company.fillterBar :pills="['All', 'Premium', 'Middle', 'Normal', 'Block', 'Access']" />
    <div class="main-table">
      <h1>Accounts</h1>
      <x-components::table :header="['Name', 'Name Project', 'Amount', 'Status', 'Block', 'Access', 'Date', 'Details']">
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=51" alt="No Img" loading="lazy">
              Omar El-Sherif
            </p>
            <p>Creative Director</p>
            <p>EGP 16000</p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=52" alt="No Img" loading="lazy">
              Sara Mohamed
            </p>
            <p>UI Designer</p>
            <p>$550</p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="projects">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="finance">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>12 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1012</strong></div>
                <div><span>Device</span><strong>iPad Pro</strong></div>
                <div><span>Location</span><strong>Giza, EG</strong></div>
                <div><span>IP</span><strong>10.0.0.18</strong></div>
                <div><span>Browser</span><strong>Safari</strong></div>
                <div><span>Type</span><strong>Task</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Giza%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=53" alt="No Img" loading="lazy">
              Ahmed Hassan
            </p>
            <p>Backend Dev</p>
            <p>EGP 7200</p>
            <p data-state="overdue">overdue</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="history">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="reports">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>13 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1013</strong></div>
                <div><span>Device</span><strong>Windows Laptop</strong></div>
                <div><span>Location</span><strong>Alexandria, EG</strong></div>
                <div><span>IP</span><strong>172.16.0.44</strong></div>
                <div><span>Browser</span><strong>Edge</strong></div>
                <div><span>Type</span><strong>Operation</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Alexandria%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=54" alt="No Img" loading="lazy">
              Mona Salem
            </p>
            <p>Project Manager</p>
            <p>EGP 14500</p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="billing">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="security">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>14 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1014</strong></div>
                <div><span>Device</span><strong>MacBook Air</strong></div>
                <div><span>Location</span><strong>Port Said, EG</strong></div>
                <div><span>IP</span><strong>192.168.10.7</strong></div>
                <div><span>Browser</span><strong>Chrome</strong></div>
                <div><span>Type</span><strong>Login</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Mona Salem</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Port%20Said%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=55" alt="No Img" loading="lazy">
              Youssef Adel
            </p>
            <p>Security</p>
            <p>EGP 6800</p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="employees">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>15 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1015</strong></div>
                <div><span>Device</span><strong>Surface Pro</strong></div>
                <div><span>Location</span><strong>Tanta, EG</strong></div>
                <div><span>IP</span><strong>10.24.1.11</strong></div>
                <div><span>Browser</span><strong>Firefox</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Tanta%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=56" alt="No Img" loading="lazy">
              Nour Samir
            </p>
            <p>Frontend Dev</p>
            <p>EGP 7700</p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="projects">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="finance">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>16 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1016</strong></div>
                <div><span>Device</span><strong>ThinkPad</strong></div>
                <div><span>Location</span><strong>Mansoura, EG</strong></div>
                <div><span>IP</span><strong>192.168.3.19</strong></div>
                <div><span>Browser</span><strong>Chrome 146</strong></div>
                <div><span>Type</span><strong>Login</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Mansoura%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=57" alt="No Img" loading="lazy">
              Karim Tarek
            </p>
            <p>Full Stack</p>
            <p>EGP 18500</p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="billing">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="security">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>17 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1017</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Damietta, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.44</strong></div>
                <div><span>Browser</span><strong>Chrome</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Karim Tarek</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Damietta%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=58" alt="No Img" loading="lazy">
              Sara Mohamed
            </p>
            <p>UI Designer</p>
            <p>EGP 9100</p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="history">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="reports">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>18 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1018</strong></div>
                <div><span>Device</span><strong>iPad Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>10.0.2.91</strong></div>
                <div><span>Browser</span><strong>Safari</strong></div>
                <div><span>Type</span><strong>Task</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=59" alt="No Img" loading="lazy">
              Hassan Ali
            </p>
            <p>Backend Dev</p>
            <p>EGP 6900</p>
            <p data-state="overdue">overdue</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="employees">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>19 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1019</strong></div>
                <div><span>Device</span><strong>Windows Laptop</strong></div>
                <div><span>Location</span><strong>Alexandria, EG</strong></div>
                <div><span>IP</span><strong>172.16.0.88</strong></div>
                <div><span>Browser</span><strong>Edge</strong></div>
                <div><span>Type</span><strong>Operation</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Alexandria%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
      </x-components::table>
    </div>
    <div class="main-table">
      <h1>Site visits</h1>
      <x-components::table :header="['Name', 'Status', 'Block', 'Access', 'Date', 'Details']">
        <div class="row" data-status="Premium" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              Omar El-Sherif
            </p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>11 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1011</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.31</strong></div>
                <div><span>Browser</span><strong>Chrome 147</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Omar El-Sherif</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              Sara Mohamed
            </p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="projects">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="finance">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>12 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1012</strong></div>
                <div><span>Device</span><strong>iPad Pro</strong></div>
                <div><span>Location</span><strong>Giza, EG</strong></div>
                <div><span>IP</span><strong>10.0.0.18</strong></div>
                <div><span>Browser</span><strong>Safari</strong></div>
                <div><span>Type</span><strong>Task</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Giza%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              Ahmed Hassan
            </p>
            <p data-state="overdue">overdue</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="history">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="reports">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>13 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1013</strong></div>
                <div><span>Device</span><strong>Windows Laptop</strong></div>
                <div><span>Location</span><strong>Alexandria, EG</strong></div>
                <div><span>IP</span><strong>172.16.0.44</strong></div>
                <div><span>Browser</span><strong>Edge</strong></div>
                <div><span>Type</span><strong>Operation</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Alexandria%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              Mona Salem
            </p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="billing">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="security">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>14 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1014</strong></div>
                <div><span>Device</span><strong>MacBook Air</strong></div>
                <div><span>Location</span><strong>Port Said, EG</strong></div>
                <div><span>IP</span><strong>192.168.10.7</strong></div>
                <div><span>Browser</span><strong>Chrome</strong></div>
                <div><span>Type</span><strong>Login</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Mona Salem</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Port%20Said%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              Youssef Adel
            </p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="employees">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>15 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1015</strong></div>
                <div><span>Device</span><strong>Surface Pro</strong></div>
                <div><span>Location</span><strong>Tanta, EG</strong></div>
                <div><span>IP</span><strong>10.24.1.11</strong></div>
                <div><span>Browser</span><strong>Firefox</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Tanta%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              Nour Samir
            </p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="projects">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="finance">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>16 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1016</strong></div>
                <div><span>Device</span><strong>ThinkPad</strong></div>
                <div><span>Location</span><strong>Mansoura, EG</strong></div>
                <div><span>IP</span><strong>192.168.3.19</strong></div>
                <div><span>Browser</span><strong>Chrome 146</strong></div>
                <div><span>Type</span><strong>Login</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Mansoura%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-tier="Block" data-row>
          <div class="content">
            <p class="search">
              Karim Tarek
            </p>
            <p data-state="finished">finished</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="billing">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="security">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>17 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1017</strong></div>
                <div><span>Device</span><strong>MacBook Pro</strong></div>
                <div><span>Location</span><strong>Damietta, EG</strong></div>
                <div><span>IP</span><strong>192.168.1.44</strong></div>
                <div><span>Browser</span><strong>Chrome</strong></div>
                <div><span>Type</span><strong>Security</strong></div>
                <div class="full-row"><span>Reason for rejection</span><strong>Karim Tarek</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Damietta%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">access</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              Sara Mohamed
            </p>
            <p data-state="pending">pending</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="history">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="reports">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>18 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Middle</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1018</strong></div>
                <div><span>Device</span><strong>iPad Pro</strong></div>
                <div><span>Location</span><strong>Cairo, EG</strong></div>
                <div><span>IP</span><strong>10.0.2.91</strong></div>
                <div><span>Browser</span><strong>Safari</strong></div>
                <div><span>Type</span><strong>Task</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Cairo%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-tier="Access" data-row>
          <div class="content">
            <p class="search">
              Hassan Ali
            </p>
            <p data-state="overdue">overdue</p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" value="employees">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>
              <label class="switch-card" data-no-style data-no-active>
                <input type="checkbox" name="permissions[]" checked value="dashboard">
                <span class="switch-slider"></span>
              </label>
            </p>
            <p>19 Apr 2026</p>
            <button type="button" class="expand-btn" aria-label="Expand row">
              <svg width="30" height="30" viewBox="0 0 80 80" fill="none" xmlns="http://www.w3.org/2000/svg">
                <circle cx="40" cy="40" r="35" stroke="var(--colorSVG1)" stroke-width="4"/>
                <path d="M25 34L40 49L55 34" stroke="var(--colorSVG1)" stroke-width="4" stroke-linecap="round" stroke-linejoin="round"/>
              </svg>
            </button>
          </div>
          <div class="row-details">
            <div class="details-card card-inner">
              <div class="details-head">
                <strong>Operation Details</strong>
                <span class="tag">Normal</span>
              </div>
              <div class="details-grid">
                <div><span>ID</span><strong>#OP-1019</strong></div>
                <div><span>Device</span><strong>Windows Laptop</strong></div>
                <div><span>Location</span><strong>Alexandria, EG</strong></div>
                <div><span>IP</span><strong>172.16.0.88</strong></div>
                <div><span>Browser</span><strong>Edge</strong></div>
                <div><span>Type</span><strong>Operation</strong></div>
                <div class="info-box card-inner map-box">
                  <div class="map-frame">
                    <iframe
                      src="https://www.google.com/maps?q=Alexandria%2C%20Egypt&z=13&output=embed"
                      loading="lazy"
                      referrerpolicy="no-referrer-when-downgrade"
                      allowfullscreen>
                    </iframe>
                  </div>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="block button-form" data-follow="project-rejection">block</button>
              </div>
            </div>
          </div>
        </div>
      </x-components::table>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/clients/accounts.js') }}"></script>
@endsection