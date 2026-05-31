let officialRequestButton = document.getElementById("official-request");
let personalRequestButton = document.getElementById("personal-request");
let customSelect = document.querySelector(".custom-select");
let personalSubject = document.getElementById("personal-subject").closest(".perant-input");
let btnTransferFromTeam = document.querySelector(".transfer-from-team");
let cardRequestTeam = document.querySelector(".request-team");
let cardRequestBranches = document.querySelector(".request-branches");
let cardRequestProjects = document.querySelector(".request-projects");
let taskStatus = document.getElementById("task-status");
let requestExtraFields = document.querySelector(".request-extra-fields");

taskStatus.addEventListener("change", () => {
  requestExtraFields.innerHTML = "";
  cardRequestTeam.classList.add("hidden");
  cardRequestBranches.classList.add("hidden");
  cardRequestProjects.classList.add("hidden");
  requestExtraFields.classList.add("hidden");
  if (taskStatus.value === "transfer-from-team") {
    cardRequestTeam.classList.remove("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.add("hidden");
  };
  if (taskStatus.value === "transfer-from-branch") {
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.remove("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.add("hidden");
  };
  if (taskStatus.value === "salary-review") {
    requestExtraFields.innerHTML = `
      <div class="perant-input">
        <label for="current-salary">Current Salary</label>
        <input type="number" id="current-salary" name="current_salary" placeholder="Enter current salary">
      </div>
    `;
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.remove("hidden");
  };
  if (taskStatus.value === "vacation-request") {
    requestExtraFields.innerHTML = `
      <div class="column">
        <div class="perant-input">
          <label for="vacation-start">Vacation Start Date</label>
          <input type="date" id="vacation-start" name="vacation_start" placeholder="Select vacation start date">
        </div>
        <div class="perant-input">
          <label for="vacation-end">Vacation end Date</label>
          <input type="date" id="vacation-end" name="vacation_end" placeholder="Select vacation end date">
        </div>
      </div>
    `;
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.remove("hidden");
  };
  if (taskStatus.value === "remote-work-request") {
    requestExtraFields.innerHTML = `
      <input type="hidden" id="vacation-start" name="remote_work" value="true">
    `;
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.add("hidden");
  };
  if (taskStatus.value === "role-change") {
    requestExtraFields.innerHTML = `
      <div class="perant-input">
        <label for="role-change">Name role</label>
        <input type="text" id="role-change" name="role_change" placeholder="Select Name role">
      </div>
    `;
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.remove("hidden");
  };
  if (taskStatus.value === "job-application-for-project") {
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.remove("hidden");
    requestExtraFields.classList.add("hidden");
  };
  if (taskStatus.value === "project-extension" || taskStatus.value === "deadline-change") {
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.remove("hidden");
    requestExtraFields.classList.add("hidden");
  };
  if (taskStatus.value === "equipment-request") {
    requestExtraFields.innerHTML = `
      <div class="perant-input">
        <label for="equipment-request">To whom do you complain</label>
        <input type="text" id="equipment-request" name="equipment_request" placeholder="To whom do you complain">
      </div>
    `;
    cardRequestTeam.classList.add("hidden");
    cardRequestBranches.classList.add("hidden");
    cardRequestProjects.classList.add("hidden");
    requestExtraFields.classList.remove("hidden");
  };
});

personalRequestButton.addEventListener("click", () => {
  customSelect.classList.add("unactive");
  personalSubject.classList.remove("unactive");
});

officialRequestButton.addEventListener("click", () => {
  customSelect.classList.remove("unactive");
  personalSubject.classList.add("unactive");
});

window.onload = () => {
  personalSubject.classList.add("unactive");
};