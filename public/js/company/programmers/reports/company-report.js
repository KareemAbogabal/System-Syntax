import { makeBranchDoughnutChart, makeLineSingleChart, makeBarChart } from "../../charts.js";

const companyTrendCtx = document.getElementById('companyTrendChart');
const companyDistributionCtx = document.getElementById('companyDistributionChart');
const companyBalanceCtx = document.getElementById('companyBalanceChart');

makeLineSingleChart(companyTrendCtx);

makeBranchDoughnutChart(companyDistributionCtx);

makeBarChart(companyBalanceCtx);