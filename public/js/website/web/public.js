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
