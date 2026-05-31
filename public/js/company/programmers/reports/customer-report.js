import { makeCashFlowChart } from "../../charts.js";

const cardsPreferencesSections = document.querySelectorAll(".card-preferences-sections .card .list .item");
const opened = document.querySelector(".card-preferences-sections .card .list .item.show");
let flowChart = document.getElementById("companyFlowChart");

makeCashFlowChart(flowChart);

function resetDeviceBarsIn(container) {
  container.querySelectorAll(".device__share span").forEach((s) => (s.style.width = "0%"));
}

function animateDeviceBarsIn(container) {
  container.querySelectorAll(".device").forEach((dev) => {
    const span = dev.querySelector(".device__share span");
    const share = Number(dev.dataset.share || 0);
    requestAnimationFrame(() => (span.style.width = share + "%"));
  });
}

cardsPreferencesSections.forEach((item) => {
  resetDeviceBarsIn(item);
  item.addEventListener("click", () => {
    if (item.classList.contains("show")) {
      item.classList.remove("show");
      resetDeviceBarsIn(item);
    } else {
      cardsPreferencesSections.forEach((i) => {
        i.classList.remove("show");
        resetDeviceBarsIn(i);
      });
      item.classList.add("show");
      setTimeout(() => animateDeviceBarsIn(item), 60);
    }
  });
});

if (opened) animateDeviceBarsIn(opened);
