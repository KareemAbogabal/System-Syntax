@extends('company.programmers.main')

@section('title', 'Team')

@section('page')
  <x-components::company.popupForm header="Add person in team" description="Add people to the team to distribute intelligence power" dataFollowButton="add-person-in-team" pathPostForm="#">
    <input type="hidden" id="promotion-id">
    <x-components::company.entityPicker size="3" choose="5" name="Employees" show="promotion" />
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Create team" description="Creating a team indicates that the company family is growing" dataFollowButton="create-team" pathPostForm="#">
    <input type="hidden" id="edit-team-id">
    <div class="perant-input">
      <label for="edit-team-name" data-no-active>Team Name</label>
      <input type="text" id="edit-team-name" name="edit-team-name" placeholder="Enter team name">
    </div>
    <x-components::company.entityPicker size="2" choose="20" name="Employees" show="promotion" />
  </x-components::company.popupForm>
  <x-components::company.popupForm header="Edit team" description="Remove those who do not provide value to the team" dataFollowButton="edit-team" pathPostForm="#">
    <input type="hidden" id="edit-team-id">
    <div class="perant-input">
      <label for="edit-team-name" data-no-active>Team Name</label>
      <input type="text" id="edit-team-name" name="edit-team-name" placeholder="Enter team name">
    </div>
    <x-components::company.entityPicker size="2" choose="20" name="Delete employees" show="promotion" />
  </x-components::company.popupForm>
  <div class="team-page">
    <section class="team-hero card-inner">
      <div class="hero-top">
        <div class="hero-copy">
          <span class="section-chip">Team Management</span>
          <h2>Organize and move people between teams</h2>
          <p>
            Drag any person card from one team to another. The manager slot is also supported.
            The hero above is designed for creating new teams and managing the structure.
          </p>
        </div>
        <button class="action-btn add-btn button-form" data-follow="create-team">Create Team</button>
      </div>
      <div class="hero-stats">
        <div class="hero-stat card-inner">
          <span class="hero-stat-label">Teams</span>
          <strong class="hero-stat-value">3</strong>
        </div>
        <div class="hero-stat card-inner">
          <span class="hero-stat-label">Members</span>
          <strong class="hero-stat-value" data-team-total-members>0</strong>
        </div>
        <div class="hero-stat card-inner">
          <span class="hero-stat-label">Drag & Drop</span>
          <strong class="hero-stat-value">Enabled</strong>
        </div>
      </div>
    </section>
    <section class="team-section">
      <div class="section-head">
        <div>
          <span class="section-chip">My Team</span>
          <h2>Your Team</h2>
        </div>
      </div>
      <div class="main-card-team">
        <div class="team-card card-inner" data-team-id="1">
          <div class="team-card-top">
            <div>
              <h3 class="team-name">Development Team</h3>
              <p class="team-meta">7 members</p>
            </div>
            <div class="team-actions">
              <a href="#" class="action-btn add-btn button-form" data-follow="add-person-in-team">Add Person</a>
              <a href="#" class="action-btn edit-btn button-form" data-follow="edit-team">Edit</a>
              <a href="#" class="action-btn block-btn">Block</a>
            </div>
          </div>
          <div class="manager-box">
            <a href="/company/user-details?id=1"
              class="person-card manager-card"
              draggable="true"
              data-person-id="1"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=12" loading="lazy" alt="Ahmed Ali" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Ahmed Ali</span>
                <span class="person-job">Manager</span>
              </div>
            </a>
          </div>
          <div class="members-row">
            <a href="/company/user-details?id=2"
              class="person-card"
              draggable="true"
              data-person-id="2"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=32" loading="lazy" alt="Mona Adel" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Mona Adel</span>
                <span class="person-job">Frontend Developer</span>
              </div>
            </a>
            <a href="/company/user-details?id=3"
              class="person-card"
              draggable="true"
              data-person-id="3"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=45" loading="lazy" alt="Omar Sameh" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Omar Sameh</span>
                <span class="person-job">Backend Developer</span>
              </div>
            </a>
            <a href="/company/user-details?id=4"
              class="person-card"
              draggable="true"
              data-person-id="4"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=5" loading="lazy" alt="Sara Adel" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Sara Adel</span>
                <span class="person-job">UI Designer</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
    <section class="team-section">
      <div class="section-head">
        <div>
          <span class="section-chip">Our Team</span>
          <h2>Our Teams</h2>
        </div>
      </div>
      <div class="teams-grid">
        <div class="team-card card-inner team-card-sm" data-team-id="2">
          <div class="team-card-top">
            <div>
              <h3 class="team-name">Marketing Team</h3>
              <p class="team-meta">5 members</p>
            </div>
            <div class="team-actions">
              <a href="#" class="action-btn add-btn button-form" data-follow="add-person-in-team">Add Person</a>
              <a href="#" class="action-btn edit-btn button-form" data-follow="edit-team">Edit</a>
              <a href="#" class="action-btn block-btn">Block</a>
            </div>
          </div>
          <div class="manager-box">
            <a href="/company/user-details?id=10"
              class="person-card manager-card"
              draggable="true"
              data-person-id="10"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=22" loading="lazy" alt="Nada Youssef" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Nada Youssef</span>
                <span class="person-job">Manager</span>
              </div>
            </a>
          </div>
          <div class="members-row">
            <a href="/company/user-details?id=11"
              class="person-card"
              draggable="true"
              data-person-id="11"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=30" loading="lazy" alt="Sara Khaled" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Sara Khaled</span>
                <span class="person-job">Content Specialist</span>
              </div>
            </a>
            <a href="/company/user-details?id=12"
              class="person-card"
              draggable="true"
              data-person-id="12"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=36" loading="lazy" alt="Yousef Nabil" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Yousef Nabil</span>
                <span class="person-job">SEO Specialist</span>
              </div>
            </a>
            <a href="/company/user-details?id=13"
              class="person-card"
              draggable="true"
              data-person-id="13"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=28" loading="lazy" alt="Laila Mostafa" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Laila Mostafa</span>
                <span class="person-job">Graphic Designer</span>
              </div>
            </a>
          </div>
        </div>
        <div class="team-card card-inner team-card-sm" data-team-id="3">
          <div class="team-card-top">
            <div>
              <h3 class="team-name">Sales Team</h3>
              <p class="team-meta">6 members</p>
            </div>
            <div class="team-actions">
              <a href="#" class="action-btn add-btn button-form" data-follow="add-person-in-team">Add Person</a>
              <a href="#" class="action-btn edit-btn button-form" data-follow="edit-team">Edit</a>
              <a href="#" class="action-btn block-btn">Block</a>
            </div>
          </div>
          <div class="manager-box">
            <a href="/company/user-details?id=14"
              class="person-card manager-card"
              draggable="true"
              data-person-id="14"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=18" loading="lazy" alt="Kareem Said" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Kareem Said</span>
                <span class="person-job">Manager</span>
              </div>
            </a>
          </div>
          <div class="members-row">
            <a href="/company/user-details?id=15"
              class="person-card"
              draggable="true"
              data-person-id="15"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=15" loading="lazy" alt="Eman Tarek" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Eman Tarek</span>
                <span class="person-job">Sales Executive</span>
              </div>
            </a>
            <a href="/company/user-details?id=16"
              class="person-card"
              draggable="true"
              data-person-id="16"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=14" loading="lazy" alt="Hazem Nasser" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Hazem Nasser</span>
                <span class="person-job">Sales Executive</span>
              </div>
            </a>
            <a href="/company/user-details?id=17"
              class="person-card"
              draggable="true"
              data-person-id="17"
              title="Drag to another team">
              <img src="https://i.pravatar.cc/150?img=40" loading="lazy" alt="Mina Adel" class="person-avatar">
              <div class="person-info">
                <span class="person-name">Mina Adel</span>
                <span class="person-job">Account Manager</span>
              </div>
            </a>
          </div>
        </div>
      </div>
    </section>
  </div>
  <script>
    document.addEventListener("DOMContentLoaded", () => {
      const teamPage = document.querySelector(".team-page");
      if (!teamPage) return;
      const teamCards = Array.from(teamPage.querySelectorAll(".team-card"));
      const totalMembersEl = teamPage.querySelector("[data-team-total-members]");
      let draggedCard = null;
      function teamMemberCount(teamCard) {
        return teamCard.querySelectorAll(".person-card").length;
      };
      function totalMembers() {
        return teamCards.reduce((sum, teamCard) => sum + teamMemberCount(teamCard), 0);
      };
      function updateTeamMeta() {
        teamCards.forEach((teamCard) => {
          const meta = teamCard.querySelector(".team-meta");
          if (meta) {
            meta.textContent = `${teamMemberCount(teamCard)} members`;
          }
        });
        if (totalMembersEl) {
          totalMembersEl.textContent = String(totalMembers());
        };
      };
      function ensureManagerPlaceholder(teamCard) {
        const managerBox = teamCard.querySelector(".manager-box");
        if (!managerBox) return;
        const hasManager = !!managerBox.querySelector(".person-card");
        const hasPlaceholder = !!managerBox.querySelector(".drop-placeholder");
        if (!hasManager && !hasPlaceholder) {
          managerBox.innerHTML = `<div class="drop-placeholder">Drop a manager here</div>`;
        };
      };
      function clearDropStates() {
        teamCards.forEach((teamCard) => teamCard.classList.remove("drop-over"));
        teamPage.querySelectorAll(".manager-box").forEach((box) => {
          box.classList.remove("drop-over");
        });
      };
      function setupCard(card) {
        card.addEventListener("dragstart", (e) => {
          draggedCard = card;
          card.classList.add("dragging");
          e.dataTransfer.effectAllowed = "move";
          e.dataTransfer.setData("text/plain", card.dataset.personId || "");
        });
        card.addEventListener("dragend", () => {
          card.classList.remove("dragging");
          draggedCard = null;
          clearDropStates();
          updateTeamMeta();
        });
      };
      function moveToManagerBox(targetTeamCard) {
        const managerBox = targetTeamCard.querySelector(".manager-box");
        const membersRow = targetTeamCard.querySelector(".members-row");
        if (!managerBox || !membersRow || !draggedCard) return;
        const currentManager = managerBox.querySelector(".person-card");
        if (currentManager && currentManager !== draggedCard) {
          currentManager.classList.remove("manager-card");
          membersRow.appendChild(currentManager);
        };
        const placeholder = managerBox.querySelector(".drop-placeholder");
        if (placeholder) placeholder.remove();
        draggedCard.classList.add("manager-card");
        managerBox.appendChild(draggedCard);
      };
      function moveToMembersRow(targetTeamCard) {
        const membersRow = targetTeamCard.querySelector(".members-row");
        if (!membersRow || !draggedCard) return;
        draggedCard.classList.remove("manager-card");
        membersRow.appendChild(draggedCard);
      };
      teamPage.querySelectorAll(".person-card[draggable='true']").forEach(setupCard);
      teamCards.forEach((teamCard) => {
        const managerBox = teamCard.querySelector(".manager-box");
        const membersRow = teamCard.querySelector(".members-row");
        if (managerBox) {
          managerBox.addEventListener("dragover", (e) => {
            e.preventDefault();
            if (!draggedCard) return;
            managerBox.classList.add("drop-over");
            e.dataTransfer.dropEffect = "move";
          });
          managerBox.addEventListener("dragleave", () => {
            managerBox.classList.remove("drop-over");
          });
          managerBox.addEventListener("drop", (e) => {
            e.preventDefault();
            if (!draggedCard) return;
            const sourceTeam = draggedCard.closest(".team-card");
            const sourceWasInManagerBox = !!draggedCard.closest(".manager-box");
            if (sourceTeam && sourceTeam !== teamCard && sourceWasInManagerBox) {
              ensureManagerPlaceholder(sourceTeam);
            };
            moveToManagerBox(teamCard);
            clearDropStates();
            updateTeamMeta();
            draggedCard = null;
          });
        }
        if (membersRow) {
          membersRow.addEventListener("dragover", (e) => {
            e.preventDefault();
            if (!draggedCard) return;
            teamCard.classList.add("drop-over");
            e.dataTransfer.dropEffect = "move";
          });
          membersRow.addEventListener("dragleave", () => {
            teamCard.classList.remove("drop-over");
          });
          membersRow.addEventListener("drop", (e) => {
            e.preventDefault();
            if (!draggedCard) return;
            const sourceTeam = draggedCard.closest(".team-card");
            const sourceWasInManagerBox = !!draggedCard.closest(".manager-box");
            moveToMembersRow(teamCard);
            if (sourceTeam && sourceWasInManagerBox) {
              ensureManagerPlaceholder(sourceTeam);
            };
            clearDropStates();
            updateTeamMeta();
            draggedCard = null;
          });
        }
      });
      updateTeamMeta();
    });
  </script>
  <script src="{{ asset('js/company/programmers/team.js') }}"></script>
@endsection