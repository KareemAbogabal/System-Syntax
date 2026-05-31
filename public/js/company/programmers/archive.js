document.addEventListener("DOMContentLoaded", () => {
  const popupTitle = document.getElementById("archiveViewTitle");
  const popupSub = document.getElementById("archiveViewSub");
  const popupHandledBy = document.getElementById("archiveViewHandledBy");
  const popupStatus = document.getElementById("archiveViewStatus");
  const popupStatusText = document.getElementById("archiveViewStatusText");
  const popupBody = document.getElementById("archiveViewBodyText");
  const popupIcon = document.getElementById("archiveViewIcon");

  const viewButtons = document.querySelectorAll(".view-data-btn");

  function getStatusClass(status) {
    const value = (status || "").toLowerCase();
    if (value.includes("soft")) return "soft";
    if (value.includes("protect")) return "safe";
    if (value.includes("delete")) return "deleted";
    return "";
  }

  function renderIconFromCard(card) {
    const sourceIcon = card.querySelector(".item-icon svg");
    if (!sourceIcon) {
      popupIcon.innerHTML = "";
      return;
    }
    popupIcon.innerHTML = "";
    popupIcon.appendChild(sourceIcon.cloneNode(true));
  }

  viewButtons.forEach((btn) => {
    btn.addEventListener("click", () => {
      const card = btn.closest(".card");
      if (!card) return;

      const title = btn.dataset.title || "Untitled";
      const handledBy = btn.dataset.handledBy || "—";
      const status = btn.dataset.status || "—";
      const sub = btn.dataset.sub || "";
      const body = btn.dataset.body || "No description available.";

      popupTitle.textContent = title;
      popupSub.textContent = sub;
      popupHandledBy.textContent = handledBy;
      popupStatus.textContent = status;
      popupStatusText.textContent = status;
      popupBody.textContent = body;

      popupStatus.className = "archive-view-badge";
      const statusClass = getStatusClass(status);
      if (statusClass) popupStatus.classList.add(statusClass);

      renderIconFromCard(card);

      const popupCard = document.querySelector('[data-follow-button="show-archive-data"]');
      if (popupCard) {
        popupCard.classList.add("is-open");
      }
    });
  });
});