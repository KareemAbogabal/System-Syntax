const groupCards = document.querySelectorAll(".add-group-page .group-card");
let btnAddPersonInBranch = document.querySelectorAll(".state-btn");
let inputGroupId = document.getElementById("group-id");

btnAddPersonInBranch.forEach(button => {
  button.addEventListener("click", () => {
    let id = button.getAttribute("data-id");
    inputGroupId.value = id;
  });
});

groupCards.forEach((card) => {
  const searchInput = card.querySelector('input[placeholder*="Search member"]');
  const members = Array.from(card.querySelectorAll(".members-list .member"));
  if (!searchInput) return;
  const emptyState = document.createElement("div");
  emptyState.className = "search-empty";
  emptyState.textContent = "No members found.";
  emptyState.style.display = "none";
  emptyState.style.marginTop = "12px";
  emptyState.style.padding = "12px 14px";
  emptyState.style.borderRadius = "18px";
  emptyState.style.border = "1px solid rgba(255,255,255,0.08)";
  emptyState.style.background = "rgba(255,255,255,0.04)";
  emptyState.style.color = "rgba(194, 189, 214, 0.82)";
  emptyState.style.fontSize = "14px";
  const membersList = card.querySelector(".members-list");
  if (membersList) {
    membersList.after(emptyState);
  };
  searchInput.addEventListener("input", () => {
    const query = searchInput.value.trim().toLowerCase();
    let visibleCount = 0;
    members.forEach((member) => {
      const text = member.textContent.toLowerCase();
      const isVisible = text.includes(query);
      member.style.display = isVisible ? "" : "none";
      if (isVisible) visibleCount++;
    });
    emptyState.style.display = visibleCount === 0 ? "block" : "none";
  });
});