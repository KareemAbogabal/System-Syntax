import { makeBranchDoughnutChart, makeBarChart } from "../../charts.js";

const circle = document.querySelectorAll('.chart-circle');
const bar = document.querySelectorAll('.chart-bar');
let employees = document.querySelectorAll('.main-card');
let btnShowDetEmployee = document.querySelectorAll('.show-det-employee');

btnShowDetEmployee.forEach((button, index) => {
  button.addEventListener("click", (e) => {
    let employee = e.currentTarget.closest(".main-card");
    employee.classList.toggle("show");
    employee.classList.contains("show") ? button.innerHTML = "Hidden" : button.innerHTML = "Show";
  });
});


circle.forEach(item => {
  makeBranchDoughnutChart(item);
});

bar.forEach(item => {
  makeBarChart(item);
});

const deviceItems = document.querySelectorAll('.device-item');

deviceItems.forEach((item) => {
  const button = item.querySelector('.device-item__toggle');
  button.addEventListener('click', () => {
    item.classList.toggle('open');
    button.setAttribute('aria-expanded', item.classList.contains('open') ? 'true' : 'false');
  });
});