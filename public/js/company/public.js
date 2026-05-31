let mainForms = document.querySelectorAll(".main-form");
let buttonForms = document.querySelectorAll(".button-form");
let buttonCloseForms = document.querySelectorAll(".close");
let accountBtn = document.getElementById("accountBtn");
let accountMenu = document.getElementById("accountMenu");
let notificationBtn = document.getElementById("notificationBtn");
let notificationMenu = document.getElementById("notificationMenu");
let currentAccountName = document.getElementById("currentAccountName");
let currentAccountRole = document.getElementById("currentAccountRole");
let aside = document.querySelectorAll("aside");
let nav = document.querySelector("nav");
let btnControlBar = document.querySelectorAll(".control-bar .input-hamburger");
let btnListPages = document.querySelectorAll(".perant-button button");
let list = document.querySelectorAll("ul li");
let listPages = document.querySelectorAll("ul li .list-pages");
let inputFillter = document.querySelector("input[data-filter]");
let pills = document.querySelectorAll(".pill[data-filter]");
let cards = document.querySelectorAll("[data-status]");
let currentFilter = "All";
let toggleButtons = document.querySelectorAll(".toggle-password");
let btnScreen = document.querySelector(".btn-screen");
let buttonsUnactives = document.querySelectorAll(".unactive");
let buttonsFileRow = document.querySelectorAll(".main-form .card-form .file-explorer .tree-folder-row");
let inputsUpload = document.querySelectorAll('label.custom-file input[type="file"]');

buttonCloseForms.forEach((button, index) => {
  button.addEventListener("click", () => {
    mainForms[index].classList.remove("show-main-card");
  });
});

function chooseEmployee(card) {
  card.querySelectorAll('.employees-picker').forEach((picker) => {
    if (picker.dataset.initialized) return;
    picker.dataset.initialized = "true";
    const search = picker.querySelector('.employee-search');
    const cards = Array.from(picker.querySelectorAll('.employee-card'));
    const countBox = picker.querySelector('[data-selected-count]');
    const maxSelected = parseInt(picker.dataset.choose) || Infinity;
    const updateCount = () => {
      const selected = picker.querySelectorAll('input[type="checkbox"]:checked').length;
      if (countBox) countBox.textContent = `${selected} selected`;
    };
    const filterCards = () => {
      const query = search.value.toLowerCase().trim();
      cards.forEach((card) => {
        const text = card.textContent.toLowerCase();
        card.style.display = text.includes(query) ? '' : 'none';
      });
    };
    search?.addEventListener('input', filterCards);
    cards.forEach((card) => {
      const input = card.querySelector('input[type="checkbox"]');
      input?.addEventListener('change', () => {
        const selectedInputs = picker.querySelectorAll('input[type="checkbox"]:checked');
        if (selectedInputs.length > maxSelected) {
          input.checked = false;
          updateCount();
          return;
        };
        updateCount();
      });
    });
    updateCount();
  });
};

buttonForms.forEach((button) => {
  button.addEventListener("click", () => {
    if (button.classList.contains("unactive")) return;
    const dataFollowButton = button.getAttribute("data-follow");
    const buttonStateProject = button.getAttribute("data-follow-state-project");
    mainForms.forEach((card) => {
      const formFollow = card.getAttribute("data-follow");
      const formStateProject = card.getAttribute("data-follow-state-project");
      const sameFollow = dataFollowButton === formFollow;
      const sameState =
        (buttonStateProject && formStateProject && buttonStateProject === formStateProject) ||
        (!buttonStateProject && !formStateProject);
      if (sameFollow && sameState) {
        card.classList.add("show-main-card");
        chooseEmployee(card);
      } else {
        card.classList.remove("show-main-card");
      };
    });
  });
});

btnScreen.addEventListener("click", () => {
  if (!document.fullscreenElement) {
    document.documentElement.requestFullscreen();
  } else {
    document.exitFullscreen();
  };
});

function closeAllMenus() {
  accountMenu.classList.remove("is-open");
  notificationMenu.classList.remove("is-open");
};

function toggleMenu(menuToOpen) {
  const isOpen = menuToOpen.classList.contains("is-open");
  closeAllMenus();
  if (!isOpen) menuToOpen.classList.add("is-open");
};

accountBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  toggleMenu(accountMenu);
});

notificationBtn.addEventListener("click", (e) => {
  e.stopPropagation();
  toggleMenu(notificationMenu);
});

accountMenu.addEventListener("click", (e) => {
  e.stopPropagation();
  const item = e.target.closest(".account-item");
  if (!item) return;
  document.querySelectorAll(".account-item").forEach((el) => el.classList.remove("active"));
  item.classList.add("active");
  currentAccountName.textContent = item.dataset.name;
  currentAccountRole.textContent = item.dataset.role;
  const avatar = item.dataset.avatar;
  accountBtn.querySelector("img").src = avatar;
  accountBtn.querySelector("img").alt = item.dataset.name;
  closeAllMenus();
});

notificationMenu.addEventListener("click", (e) => {
  e.stopPropagation();
});

document.addEventListener("click", closeAllMenus);

function toggleFullScreen() {
  aside[0].classList.toggle("hidden-screen");
  nav.classList.toggle("hidden-screen-nav");
};

function toggleSideBar(index) {
  btnControlBar[index].classList.toggle("show-bar");
  aside[index].classList.toggle("hidden-side-bar");
  const sideBarStates = JSON.parse(localStorage.getItem("sideBarStates") || "{}");
  sideBarStates[index] = aside[index].classList.contains("hidden-side-bar");
  localStorage.setItem("sideBarStates", JSON.stringify(sideBarStates));
  if (!aside[index].classList.contains("hidden-side-bar")) {
    let ulItems = document.querySelectorAll("ul li a");
    let textLink = document.querySelectorAll(".text-link");
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
          console.log("yes", parent, btn, input);
          input.checked = true;
          btn.click();
        };
        link.classList.add("active");
      };
    });
  } else {
    listPages.forEach((item, index) => {
      if (item.classList.contains("show-list-pages")) {
        let input = btnListPages[index].querySelector("input");
        input.checked = false;
        btnListPages[index].click();
      };
    });
  };
}

document.addEventListener("keydown", (e) => {
  if ((e.ctrlKey && e.key.toLowerCase() === "m") || (e.ctrlKey && e.key.toLowerCase() === "ة")) {
    toggleFullScreen();
  };
});

document.addEventListener("keydown", (e) => {
  if ((e.ctrlKey && e.key.toLowerCase() === "b") || (e.ctrlKey && e.key.toLowerCase() === "ض")) {
    toggleSideBar(0);
  };
});

btnControlBar.forEach((btn, index) => {
  btn.addEventListener("click", () => {
    toggleSideBar(index);
  });
});

window.addEventListener("DOMContentLoaded", () => {
  const sideBarStates = JSON.parse(localStorage.getItem("sideBarStates") || "{}");
  btnControlBar.forEach((btn, index) => {
    if (sideBarStates[index]) {
      btn.click();
    };
  });
  if (!aside[0].classList.contains("hidden-side-bar") && btnControlBar[1]) {
    btnControlBar[1].click();
  };
});

btnListPages.forEach((btn, index) => {
  btn.addEventListener("click", (e) => {
    e.stopPropagation();
    listPages[index].classList.toggle("show-list-pages");
  });
});

const months = [
  "Jan", "Feb", "Mar", "Apr", "May", "Jun",
  "Jul", "Aug", "Sep", "Oct", "Nov", "Dec"
];

const allGrids = document.querySelectorAll(".months-grid");

if (allGrids.length) {
  function createCell(level, monthIndex, dayIndex) {
    const cell = document.createElement("span");
    cell.className = "cell";
    const date = new Date(2026, monthIndex, dayIndex + 1);
    const formatted = date.toISOString().split("T")[0];
    cell.setAttribute("data-date", formatted);
    if (level > 0) cell.classList.add(`l${level}`);
    return cell;
  }
  allGrids.forEach((monthsGrid) => {
    const monthData = months.map((_, monthIndex) => {
      return Array.from({ length: 28 }, (_, dayIndex) => {
        const v = (monthIndex * 7 + dayIndex * 3) % 10;
        if (v < 3) return 0;
        if (v < 5) return 1;
        if (v < 7) return 2;
        if (v < 9) return 3;
        return 4;
      });
    });
    months.forEach((month, monthIndex) => {
      const group = document.createElement("div");
      group.className = "month-group";
      const title = document.createElement("div");
      title.className = "month-title";
      title.textContent = month;
      const grid = document.createElement("div");
      grid.className = "month-grid";
      monthData[monthIndex].forEach((level, dayIndex) => {
        grid.appendChild(createCell(level, monthIndex, dayIndex));
      });
      group.appendChild(title);
      group.appendChild(grid);
      monthsGrid.appendChild(group);
    });
  });
};

toggleButtons.forEach((button) => {
  button.addEventListener("click", () => {
    const targetId = button.dataset.target;
    const input = document.getElementById(targetId);
    if (!input) return;
    const isPassword = input.type === "password";
    input.type = isPassword ? "text" : "password";
    button.classList.toggle("is-visible", isPassword);
    button.setAttribute("aria-label", isPassword ? "Hide password" : "Show password");
  });
});

function filterCards() {
  const searchValue = inputFillter.value.toLowerCase().trim();
  cards.forEach((card) => {
    const status = card.dataset.status || "";
    const tier = card.dataset.tier || "";
    const text = card.querySelector(".search")?.textContent.toLowerCase() || "";
    const matchFilter = currentFilter === "All" || status === currentFilter || tier === currentFilter;
    const matchSearch = !searchValue || text.includes(searchValue);
    const show = matchFilter && matchSearch;
    card.classList.toggle("hidden", !show);
  });
};

pills.forEach((pill) => {
  pill.addEventListener("click", () => {
    pills.forEach((p) => p.classList.remove("active"));
    pill.classList.add("active");
    currentFilter = pill.dataset.filter;
    filterCards();
  });
});

if (inputFillter) {
  inputFillter.addEventListener("input", () => {
    filterCards();
  });
  filterCards();
};


window.addEventListener("load", () => {
  const sidebar = document.querySelector("aside ul");
  const activeLink = sidebar?.querySelector("a.active");
  if (!activeLink || !sidebar) return;
  requestAnimationFrame(() => {
    const sidebarRect = sidebar.getBoundingClientRect();
    const linkRect = activeLink.getBoundingClientRect();
    const targetTop =
      sidebar.scrollTop +
      (linkRect.top - sidebarRect.top) -
      sidebar.clientHeight / 2 +
      linkRect.height / 2;
    sidebar.scrollTo({
      top: Math.max(0, targetTop),
      behavior: "smooth",
    });
  });
});

list.forEach((parent) => {
  const buttonsCount = parent.querySelectorAll("[data-count]");
  const pearntButtonList = parent.querySelector(".perant-button a");
  if (buttonsCount.length < 1) return;
  let total = 0;
  buttonsCount.forEach((el) => {
    total += Number(el.dataset.count) || 0;
  });
  pearntButtonList.dataset.count = total;
});

document.addEventListener("DOMContentLoaded", () => {
  const notifications = document.querySelectorAll(".lux-notify");
  notifications.forEach((notify,index) => {
    setTimeout(() => {
      notify.classList.add("show");
    }, index * 180);
    const closeBtn = notify.querySelector(".lux-notify__close");
    closeBtn.addEventListener("click",() => {
      notify.classList.remove("show");
      notify.classList.add("hide");
      setTimeout(() => {
        notify.remove();
      }, 900);
    });
  });
});

buttonsUnactives.forEach((btn) => {
  btn.addEventListener("click", (e) => {
    e.preventDefault();
    const stack = document.querySelector(".lux-notify-stack");
    if (!stack) return;
    const status = btn.dataset.status || "warning";
    const message = btn.dataset.massage || "Action is not allowed right now.";
    const titleMap = {
      warning: "Attention Required",
      error: "Critical Error",
      success: "Verified",
      info: "Premium Notice",
    };
    const typeMap = {
      warning: "Security",
      error: "System",
      success: "Success",
      info: "Info",
    };
    const classMap = {
      warning: "lux-notify--crest lux-notify--warning",
      error: "lux-notify--onyx lux-notify--error",
      success: "lux-notify--prism lux-notify--success",
      info: "lux-notify--seal lux-notify--info",
    };
    const iconMap = {
      warning: `
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <path d="M12 3L22 20H2L12 3Z" stroke="currentColor" stroke-width="1.7" stroke-linejoin="round"/>
          <path d="M12 9v4" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 16.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      `,
      error: `
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M12 7v6" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 16.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      `,
      success: `
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M7.5 12.5L10.5 15.5L16.5 9.5" stroke="currentColor" stroke-width="1.8" stroke-linecap="round" stroke-linejoin="round"/>
        </svg>
      `,
      info: `
        <svg viewBox="0 0 24 24" fill="none" aria-hidden="true">
          <circle cx="12" cy="12" r="10" stroke="currentColor" stroke-width="1.7"/>
          <path d="M12 10.5V17" stroke="currentColor" stroke-width="1.8" stroke-linecap="round"/>
          <path d="M12 7.5h.01" stroke="currentColor" stroke-width="2.4" stroke-linecap="round"/>
        </svg>
      `,
    };
    const title = titleMap[status] || titleMap.warning;
    const type = typeMap[status] || typeMap.warning;
    const notifyClass = classMap[status] || classMap.warning;
    const icon = iconMap[status] || iconMap.warning;
    const notify = document.createElement("div");
    notify.className = `lux-notify ${notifyClass}`;
    notify.innerHTML = `
      <button class="lux-notify__close" type="button" aria-label="Close notification">
        <svg viewBox="0 0 24 24" fill="none">
          <path d="M7 7L17 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
          <path d="M17 7L7 17" stroke="currentColor" stroke-width="1.9" stroke-linecap="round"/>
        </svg>
      </button>
      <div class="lux-notify__accent"></div>
      <div class="lux-notify__icon">
        ${icon}
      </div>
      <div class="lux-notify__body">
        <div class="lux-notify__top">
          <h4>${title}</h4>
          <span>${type}</span>
        </div>
        <p>${message}</p>
      </div>
      <div class="lux-notify__sheen"></div>
    `;
    stack.appendChild(notify);
    requestAnimationFrame(() => {
      notify.classList.add("show");
    });
    notify.querySelector(".lux-notify__close")?.addEventListener("click", () => {
      notify.classList.add("hide");
      notify.addEventListener("transitionend", () => notify.remove(), { once: true });
    });
  });
});

inputsUpload.forEach((input) => {
  const label = input.closest('label.custom-file');
  const strong = label.querySelector('.custom-file-text strong');
  const small = label.querySelector('.custom-file-text small');
  const defaultStrong = strong.textContent.trim();
  const defaultSmall = small.textContent.trim();
  input.addEventListener('change', () => {
    const file = input.files && input.files[0];
    if (!file) {
      strong.textContent = defaultStrong;
      small.textContent = defaultSmall;
      return;
    };
    const fullName = file.name;
    const nameOnly = fullName.replace(/\.[^.]+$/, '');
    const sizeText = formatFileSize(file.size);
    strong.textContent = nameOnly;
    small.textContent = `${fullName} • ${sizeText}`;
  });
});

function formatFileSize(bytes) {
  if (bytes === 0) return '0 B';
  const units = ['B', 'KB', 'MB', 'GB', 'TB'];
  const index = Math.floor(Math.log(bytes) / Math.log(1024));
  const value = bytes / Math.pow(1024, index);
  return `${value.toFixed(value >= 10 || index === 0 ? 0 : 1)} ${units[index]}`;
};

buttonsFileRow.forEach((button) => {
  button.addEventListener("click", function () {
    const folder = this.closest(".tree-folder");
    const children = folder.querySelector(".tree-children");
    const expanded = this.getAttribute("aria-expanded") === "true";
    this.setAttribute("aria-expanded", String(!expanded));
    folder.classList.toggle("open", !expanded);
    if (children) {
      children.classList.toggle("hidden", expanded);
    };
  });
});
