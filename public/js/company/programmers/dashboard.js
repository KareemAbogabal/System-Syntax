import { makeBranchDoughnutChart, makeLineSingleChart, makeCashFlowChart, makeCharLine } from "../charts.js";

let chartLine = document.querySelectorAll(".chart-line");
const reportCanvas = document.getElementById('reportChart');
const donutCtx = document.getElementById('donutChart');
const flow = document.getElementById('cashFlowChart');

makeLineSingleChart(reportCanvas);

makeBranchDoughnutChart(donutCtx);

makeCashFlowChart(flow);

chartLine.forEach((item) => {
  makeCharLine(item);
});