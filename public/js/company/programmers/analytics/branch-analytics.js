import { makeBranchDoughnutChart, makeCashFlowChart, makeBarChart } from "../../charts.js";

document.addEventListener("DOMContentLoaded", function () {
  initActivityMenus();
  initActivitySearch();
  initActivityActions();
  makeBarChart(document.getElementById("salesBarChart"));
  makeBranchDoughnutChart(document.getElementById("branchDoughnutChart"));
});

function initActivityMenus() {
  document.querySelectorAll(".recent-activity-card .dots-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      const item = this.closest(".activity-item");
      const menu = item.querySelector(".activity-menu");
      document.querySelectorAll(".recent-activity-card .activity-menu").forEach((m) => {
        if (m !== menu) m.classList.remove("show");
      });
      menu.classList.toggle("show");
    });
  });
  document.addEventListener("click", function () {
    document.querySelectorAll(".recent-activity-card .activity-menu").forEach((menu) => {
      menu.classList.remove("show");
    });
  });
};

function initActivitySearch() {
  const activitySearch = document.getElementById("activitySearch");
  const activityItems = Array.from(document.querySelectorAll("#activityList .activity-item"));
  const emptyState = document.getElementById("activityEmpty");
  if (!activitySearch) return;
  activitySearch.addEventListener("input", function () {
    const value = this.value.toLowerCase().trim();
    let visibleCount = 0;
    activityItems.forEach((item) => {
      const show = item.innerText.toLowerCase().includes(value);
      item.style.display = show ? "flex" : "none";
      if (show) visibleCount++;
    });
    if (emptyState) {
      emptyState.style.display = visibleCount === 0 ? "block" : "none";
    };
  });
};

function initActivityActions() {
  document.querySelectorAll(".recent-activity-card .view-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      const item = this.closest(".activity-item");
      const name = item.querySelector(".activity-text h4").textContent.trim();
      alert("Viewing activity of: " + name);
      item.querySelector(".activity-menu").classList.remove("show");
    });
  });
  document.querySelectorAll(".recent-activity-card .delete-btn").forEach((btn) => {
    btn.addEventListener("click", function (e) {
      e.stopPropagation();
      const item = this.closest(".activity-item");
      const name = item.querySelector(".activity-text h4").textContent.trim();
      if (confirm("Delete this activity: " + name + " ?")) {
        item.remove();
      };
    });
  });
};
