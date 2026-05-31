@extends('company.programmers.main')

@section('title', 'Approvals')

@section('page')
  <div class="approvals-page">
    <x-components::company.fillterBar :pills="['All', 'Premium', 'Middle', 'Normal']" />
    <div class="main-table">
      <h1>Approvals</h1>
      <x-components::table :header="['Name', 'Name Project', 'Status', 'Date', 'Details']">
        <div class="row" data-status="Premium" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=51" loading="lazy" alt="No Img" loading="lazy">
              Omar El-Sherif
            </p>
            <p>Creative Director</p>
            <p data-state="finished">finished</p>
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
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=52" loading="lazy" alt="No Img" loading="lazy">
              Sara Mohamed
            </p>
            <p>UI Designer</p>
            <p data-state="pending">pending</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=53" loading="lazy" alt="No Img" loading="lazy">
              Ahmed Hassan
            </p>
            <p>Backend Dev</p>
            <p data-state="overdue">overdue</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=54" loading="lazy" alt="No Img" loading="lazy">
              Mona Salem
            </p>
            <p>Project Manager</p>
            <p data-state="finished">finished</p>
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
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=55" loading="lazy" alt="No Img" loading="lazy">
              Youssef Adel
            </p>
            <p>Security</p>
            <p data-state="pending">pending</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=56" loading="lazy" alt="No Img" loading="lazy">
              Nour Samir
            </p>
            <p>Frontend Dev</p>
            <p data-state="finished">finished</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Premium" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=57" loading="lazy" alt="No Img" loading="lazy">
              Karim Tarek
            </p>
            <p>Full Stack</p>
            <p data-state="finished">finished</p>
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
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Middle" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=58" loading="lazy" alt="No Img" loading="lazy">
              Sara Mohamed
            </p>
            <p>UI Designer</p>
            <p data-state="pending">pending</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
        <div class="row" data-status="Normal" data-row>
          <div class="content">
            <p class="search">
              <img src="https://i.pravatar.cc/100?img=59" loading="lazy" alt="No Img" loading="lazy">
              Hassan Ali
            </p>
            <p>Backend Dev</p>
            <p data-state="overdue">overdue</p>
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
                <span class="tag">Premium</span>
              </div>
              <div class="details-grid">
                <div><span>Project ID</span><strong>#PRJ-1011</strong></div>
                <div><span>Project Name</span><strong>Al Noor Tower</strong></div>
                <div><span>Client</span><strong>Al Noor Development</strong></div>
                <div><span>Employee</span><strong>Ahmed</strong></div>
                <div><span>Employee ID</span><strong>#PRJ-1033</strong></div>
                <div><span>Status</span><strong>File Task</strong></div>
                <div class="full-row">
                  <a href="#" class="custom-file" data-no-active>
                    <input type="file" id="contract" name="contract" accept=".pdf,.doc,.docx">
                    <span class="file-box">
                      <span class="custom-file-icon">📄</span>
                      <span class="custom-file-text">
                        <strong>Upload contract</strong>
                        <small>PDF, DOC, DOCX</small>
                      </span>
                    </span>
                  </a>
                </div>
              </div>
              <div class="details-actions">
                <button type="button" class="access">acceptance</button>
                <button type="button" class="block">reject</button>
              </div>
            </div>
          </div>
        </div>
      </x-components::table>
    </div>
  </div>
  <script src="{{ asset('js/company/programmers/tasks/approvals.js') }}"></script>
@endsection