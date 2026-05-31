import { makeBranchDoughnutChart, makeCashFlowChart, makeBarChart, makeLineSingleChart } from "../../charts.js";

let chartBar = document.getElementById("chart-bar");
let chartBarClient = document.getElementById("chart-bar-client");
let chartBarClientWithoutReq = document.getElementById("chart-bar-client-without-req");
let donutCtx = document.querySelector(".chart-circle");
let flow = document.getElementById("ordersReturnsChart");

makeBarChart(chartBar);
makeBarChart(chartBarClient);
makeBarChart(chartBarClientWithoutReq);

makeCashFlowChart(flow);

makeBranchDoughnutChart(donutCtx);

document.querySelectorAll(".branch-share-chart").forEach((chart) => {
  makeBranchDoughnutChart(chart);
});

document.querySelectorAll(".branch-trend-chart").forEach((chart) => {
  makeLineSingleChart(chart);
});