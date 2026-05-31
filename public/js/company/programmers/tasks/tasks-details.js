import { makeBarChart } from "../../charts.js";

const companyBalanceCtx = document.getElementById("companyBalanceChart");
let tasks = document.querySelectorAll(".tasks-details-page .toggle-btn-tasks");

tasks.forEach((button) => {
  button.addEventListener("click", () => {
    const task = button.closest(".task");
    if (!task) return;
    task.classList.toggle("is-collapsed");
    button.classList.toggle("show-state", !task.classList.contains("is-collapsed")
    );
  });
});

makeBarChart(companyBalanceCtx);