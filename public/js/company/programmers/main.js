let ulItems = document.querySelectorAll("ul li a");
let textLink = document.querySelectorAll(".text-link");
const rows = document.querySelectorAll("[data-row]");

document.addEventListener("DOMContentLoaded", function () {
  const pageTitle = document.title;
  let result = "";
  const sep = pageTitle.indexOf("|");
  if (sep !== -1) {
    result = pageTitle.slice(sep + 1).trim().toLowerCase();
  } else {
    result = pageTitle.trim().toLowerCase();
  };
  ulItems.forEach((link, i) => {
    const text = (typeof textLink !== "undefined" && textLink[i]) ? textLink[i].innerText.toLowerCase().trim() : link.innerText.toLowerCase().trim();
    if (text === result) {
      const listPages = link.closest(".list-pages");
      if (listPages) {
        const parent = listPages.closest("li");
        const btn = parent.querySelector(".perant-button button");
        const input = parent.querySelector("input");
        input.checked = true;
        btn.click();
      };
      link.classList.add("active");
    };
  });
});

rows.forEach((row) => {
  const btn = row.querySelector(".expand-btn");
  if (!btn) return;
  btn.addEventListener("click", () => {
    const isOpen = row.classList.contains("open");
    rows.forEach((other) => {
      if (other !== row) other.classList.remove("open");
    });
    row.classList.toggle("open", !isOpen);
  });
});