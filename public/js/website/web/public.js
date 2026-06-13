let background = document.querySelectorAll(".bg-section");
let nav = document.querySelector("header nav");
let btnAvatar = document.querySelector("header nav .btn-avatar");
let btnLogin = document.querySelector("header nav .login-btn");
let mainAvatar = document.querySelector(".main-avatar");
let li = nav.querySelectorAll("header nav li a");
let btnClose = document.querySelectorAll(".close");
let mainForm = document.querySelectorAll(".main-form");
let radioPerson = document.getElementById("radio-person");
let radioCompany = document.getElementById("radio-company");
let company = document.querySelector(".company");
let cursor = document.getElementById("customCursor");
let hoverItems = document.querySelectorAll("a, button, input, textarea, select, .hoverable, label, .benefit",);
let currentActiveIndex = -1;

window.onload = () => {
  background.forEach((item) => {
    let bg = "";
    const boxSize = 50;
    const gap = 40;
    const containerWidth = item.offsetWidth;
    const containerHeight = item.offsetHeight;
    const cols = Math.ceil(containerWidth / (boxSize + gap));
    const rows = Math.ceil(containerHeight / (boxSize + gap));
    const randomPos = () => Math.floor(Math.random() * 10 - 5) + "px";
    for (let i = 0; i < rows; i++) {
      for (let j = 0; j < cols; j++) {
        let left = j * (boxSize + gap);
        if (i % 2 !== 0) left += (boxSize + gap) / 2;
        let top = i * (boxSize + gap);
        bg += `<div class='bg' style='
          top: ${top}px;
          left: ${left}px;
          --x1: ${randomPos()}; --y1: ${randomPos()};
          --x2: ${randomPos()}; --y2: ${randomPos()};
          --x3: ${randomPos()}; --y3: ${randomPos()};
          --x4: ${randomPos()}; --y4: ${randomPos()};
        '></div>`;
      }
    }
    item.innerHTML = bg;
    let animationFrameId = null;
    let pendingX = null;
    let pendingY = null;
    item.addEventListener("mousemove", (e) => {
      const rect = item.getBoundingClientRect();
      pendingX = e.clientX - rect.left;
      pendingY = e.clientY - rect.top;
      if (animationFrameId) return;
      animationFrameId = requestAnimationFrame(() => {
        item.style.setProperty("--mx", `${pendingX}px`);
        item.style.setProperty("--my", `${pendingY}px`);
        animationFrameId = null;
      });
    });
    item.addEventListener("mouseleave", () => {
      if (animationFrameId) {
        cancelAnimationFrame(animationFrameId);
        animationFrameId = null;
      }
      item.style.setProperty("--mx", `50%`);
      item.style.setProperty("--my", `50%`);
    });
  });
};

if (btnAvatar) {
  btnAvatar.addEventListener("mouseenter", () => {
    mainAvatar.classList.add("show-main-avatar");
  });
  mainAvatar.addEventListener("mouseleave", () => {
    mainAvatar.classList.remove("show-main-avatar");
  });
}

window.addEventListener("scroll", () => {
  const scrollY = window.scrollY;
  if (scrollY > 50) {
    nav.classList.add("scroll");
  } else {
    nav.classList.remove("scroll");
  }
  let newActiveIndex = -1;
  sections.forEach((section, index) => {
    const rect = section.getBoundingClientRect();
    if (rect.top <= 200 && rect.bottom >= 200) {
      newActiveIndex = index;
    }
  });
  if (newActiveIndex !== currentActiveIndex && newActiveIndex !== -1) {
    li.forEach((item) => item.classList.remove("active"));
    if (li[newActiveIndex]) {
      li[newActiveIndex].classList.add("active");
    }
    currentActiveIndex = newActiveIndex;
  }
});

if (btnLogin) {
  btnLogin.addEventListener("click", () => {
    mainForm[1].classList.add("show-main-card");
  });
};

if (btnClose) {
  btnClose.forEach((btn, index) => {
    btn.addEventListener("click", () => {
      mainForm[index].classList.remove("show-main-card");
    });
  });
};

if (radioPerson) {
  radioPerson.addEventListener("input", () => {
    company.classList.add("unactive");
  });
  radioCompany.addEventListener("input", () => {
    company.classList.remove("unactive");
  });
};

let pendingCursorX = 0;
let pendingCursorY = 0;
let cursorAnimationFrameId = null;

document.addEventListener("mousemove", (e) => {
  pendingCursorX = e.clientX;
  pendingCursorY = e.clientY;
  if (cursorAnimationFrameId) return;
  cursorAnimationFrameId = requestAnimationFrame(() => {
    cursor.style.left = pendingCursorX + "px";
    cursor.style.top = pendingCursorY + "px";
    cursorAnimationFrameId = null;
  });
});

document.addEventListener("mousedown", () => {
  cursor.classList.add("click");
});

document.addEventListener("mouseup", () => {
  cursor.classList.remove("click");
});

hoverItems.forEach((item) => {
  item.addEventListener("mouseenter", () => {
    cursor.classList.add("active");
  });
  item.addEventListener("mouseleave", () => {
    cursor.classList.remove("active");
  });
});

const menu = document.getElementById('luxContextMenu');

function openMenu(x, y) {
  const width = 280;
  const height = 370;
  let left = x;
  let top = y;
  if (left + width > window.innerWidth) {
    left = window.innerWidth - width - 20;
  };
  if (top + height > window.innerHeight) {
    top = window.innerHeight - height - 20;
  };
  menu.style.left = left + 'px';
  menu.style.top = top + 'px';
  menu.classList.add('active');
};

function closeMenu() {
  menu.classList.remove('active');
};

document.addEventListener('contextmenu', (e) => {
  e.preventDefault();
  openMenu(e.clientX, e.clientY);
});

document.addEventListener('click', (e) => {
  if (!menu.contains(e.target)) closeMenu();
});

document.addEventListener('keydown', (e) => {
  if (e.key === 'Escape') closeMenu();
});

window.addEventListener('scroll', closeMenu);
window.addEventListener('resize', closeMenu);

menu.addEventListener('click', async (e) => {
  const btn = e.target.closest('.lux-item');
  if (!btn) return;
  const action = btn.dataset.action;
  switch (action) {
    case 'home':
      window.scrollTo({ top: 0, behavior: 'smooth' });
      break;
    case 'services':
      document.querySelector('#services')?.scrollIntoView({ behavior: 'smooth' });
      break;
    case 'request':
      document.querySelector('[data-open-request-form]')?.click();
      break;
    case 'login':
      document.querySelector('[data-open-login-form]')?.click();
      break;
    case 'translate':
      const selectedText = window.getSelection().toString().trim();
      if (!selectedText) {
        alert('قم بتحديد نص أولاً');
        break;
      };
      window.open(
        `https://translate.google.com/?sl=auto&tl=en&text=${encodeURIComponent(selectedText)}&op=translate`,
        '_blank',
        'noopener,noreferrer'
      );
    break;
      break;
    case 'print':
      window.print();
      break;
    case 'copy-link':
      await navigator.clipboard.writeText(location.href);
      break;
    case 'save':
      alert('المتصفح لا يسمح بتنفيذ Save as من JavaScript. يمكنك توفير بديل مثل Print أو Download.');
      break;
  };
  closeMenu();
});

const isMobile = /Android|iPhone|iPad|iPod/i.test(
  navigator.userAgent
);

if (!isMobile) {
  setInterval(() => {
    const devtoolsOpen =
      window.outerWidth - window.innerWidth > 160 ||
      window.outerHeight - window.innerHeight > 160;
    if (devtoolsOpen) {
      document.body.innerHTML = `
        <div style="position:fixed; inset:0; background:#000; color:#fff; display:flex; align-items:center; justify-content:center; font-size:24px;">
          Developer Tools Detected
        </div>
      `;
    };
  }, 1000);
};