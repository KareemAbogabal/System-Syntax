import { makeBarChart } from "../../charts.js";

function applyFilters() {
  const q = (document.getElementById("branches_search")?.value || "")
    .trim()
    .toLowerCase();
  const s = document.getElementById("branches_status")?.value || "";
  const c = document.getElementById("branches_category")?.value || "";
  document
    .querySelectorAll(".branch-report .client-dashboard__project")
    .forEach((card) => {
      const text = card.innerText.toLowerCase();
      const status = (card.dataset.status || "").toLowerCase();
      const category = (card.dataset.category || "").toLowerCase();
      const ok =
        (q === "" || text.includes(q)) &&
        (s === "" || status === s) &&
        (c === "" || category === c);
      card.style.display = ok ? "" : "none";
    });
}

document.addEventListener("DOMContentLoaded", () => {
  // initialize shared bar charts (charts.js will read data-* if present)
  document
    .querySelectorAll(".branch-report canvas.branch-chart")
    .forEach((c) => {
      if (!c.dataset.barThickness) c.dataset.barThickness = "12";
      makeBarChart(c);
    });

  // filters
  ["branches_search", "branches_status", "branches_category"].forEach((id) => {
    const el = document.getElementById(id);
    if (!el) return;
    const ev = el.tagName.toLowerCase() === "input" ? "input" : "change";
    el.addEventListener(ev, applyFilters);
  });
});
