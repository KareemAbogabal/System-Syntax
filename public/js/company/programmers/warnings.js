document.addEventListener("DOMContentLoaded", () => {
  const detailBtns = document.querySelectorAll(".details-btn");
  detailBtns.forEach((btn) => {
    btn.addEventListener("click", () => {
      const title = btn.dataset.title || "—";
      const desc = btn.dataset.description || "—";
      const severity = btn.dataset.severity || "—";
      const type = btn.dataset.type || "—";
      const id = btn.dataset.id || "—";
      const source = btn.dataset.source || "—";
      const time = btn.dataset.time || "—";
      const progress = btn.dataset.progress || "—";
      const risk = btn.dataset.risk || "—";
      const priority = btn.dataset.priority || "—";
      const status = btn.dataset.status || "—";
      const handledBy = btn.dataset.handledBy || "—";
      document.getElementById("warningViewTitle").textContent = title;
      document.getElementById("warningViewDescription").textContent = desc;
      document.getElementById("warningViewSeverity").textContent = severity.toUpperCase();
      document.getElementById("warningViewSeverityText").textContent = severity;
      document.getElementById("warningViewType").textContent = type;
      document.getElementById("warningViewSource").textContent = source;
      document.getElementById("warningViewTime").textContent = time;
      document.getElementById("warningViewProgress").textContent = progress;
      document.getElementById("warningViewRisk").textContent = risk;
      document.getElementById("warningViewPriority").textContent = priority;
      document.getElementById("warningViewStatus").textContent = status;
      document.getElementById("warningViewHandledBy").textContent = handledBy;
      document.getElementById("warningViewId").textContent = id;
    });
  });
});