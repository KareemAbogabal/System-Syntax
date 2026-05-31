let aside = document.querySelectorAll("aside");
let btnControlBar = document.querySelectorAll(".control-bar .input-hamburger");
let cursor = document.getElementById("customCursor");
let hoverItems = document.querySelectorAll("a, button, input, textarea, select, .hoverable, label");

document.addEventListener("mousemove", (e) => {
  cursor.style.left = e.clientX + "px";
  cursor.style.top = e.clientY + "px";
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

btnControlBar.forEach((btn, index) => {
  btn.addEventListener("click", (e) => {
    btn.classList.toggle("show-bar");
    aside[index].classList.toggle("hidden-side-bar");
    const sideBarStates = JSON.parse(localStorage.getItem("sideBarStates") || "{}");
    sideBarStates[index] = aside[index].classList.contains("hidden-side-bar");
    localStorage.setItem("sideBarStates", JSON.stringify(sideBarStates));
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