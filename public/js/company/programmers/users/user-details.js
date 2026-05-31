import { makeBranchDoughnutChart, makeBarChart } from "../../charts.js";

const circle = document.querySelector('.chart-circle');
const bar = document.querySelector('.chart-bar');

makeBranchDoughnutChart(circle);

makeBarChart(bar);

function downloadFile(type) {
  const files = {
    contract: 'Contract for Omar El-Sherif.pdf',
    cv: 'CV for Omar El-Sherif.pdf'
  };
  const blob = new Blob([`Demo file: ${files[type]}`], { type: 'text/plain' });
  const url = URL.createObjectURL(blob);
  const a = document.createElement('a');
  a.href = url;
  a.download = files[type];
  a.click();
  URL.revokeObjectURL(url);
}