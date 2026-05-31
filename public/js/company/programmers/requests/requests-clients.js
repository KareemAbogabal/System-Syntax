import { makeBranchDoughnutChart, makeBarChart } from "../../charts.js";

const companyDistributionCtx = document.getElementById('companyDistributionChart');
const companyBalanceCtx = document.getElementById('companyBalanceChart');
let taskStatus = document.getElementById("task-status");
let selectOwners = document.querySelector(".select-owners");
let selectProjects = document.querySelector(".select-projects");

taskStatus.addEventListener("change", () => {
  selectOwners.classList.add("hidden");
  selectProjects.classList.add("hidden");
  if (taskStatus.value === "programming" || taskStatus.value === "wordPress") {
    selectOwners.classList.remove("hidden");
  };
  if (taskStatus.value === "amendment") {
    selectOwners.classList.add("hidden");
    selectProjects.classList.remove("hidden");
  };
});

makeBranchDoughnutChart(companyDistributionCtx);

makeBarChart(companyBalanceCtx);