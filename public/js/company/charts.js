import {
  Chart,
  LineController,
  BarController,
  DoughnutController,
  LineElement,
  BarElement,
  ArcElement,
  PointElement,
  LinearScale,
  CategoryScale,
  Filler,
  Tooltip,
  Legend,
} from "https://cdn.jsdelivr.net/npm/chart.js/+esm";

Chart.register(
  LineController,
  BarController,
  DoughnutController,

  LineElement,
  BarElement,
  ArcElement,

  PointElement,
  LinearScale,
  CategoryScale,

  Filler,
  Tooltip,
  Legend,
);

export function makeBranchDoughnutChart(el) {
  if (!el) return;
  const ctx = el.getContext("2d");
  new Chart(ctx, {
    type: "doughnut",
    data: {
      labels: ["Sales", "Operations", "Support", "Security"],
      datasets: [
        {
          data: [38, 24, 20, 18],
          borderWidth: 0,
          borderRadius: 20,
          backgroundColor: ["#8f5bff", "#11c98a", "#ff6a1d", "#5d3eb3"],
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      cutout: "68%",
      plugins: {
        legend: {
          position: "bottom",
          labels: {
            color: "#fbf9ff",
            usePointStyle: true,
            pointStyle: "circle",
            padding: 18,
          },
        },
        tooltip: {
          backgroundColor: "rgba(12, 8, 34, 0.95)",
          titleColor: "#fff",
          bodyColor: "#fff",
          borderColor: "rgba(255,255,255,0.08)",
          borderWidth: 1,
        },
      },
    },
  });
}

export function makeLineSingleChart(el) {
  const ctx = el.getContext("2d");
  const gradient = ctx.createLinearGradient(0, 0, 0, 300);
  gradient.addColorStop(0, "rgba(181,140,255,0.45)");
  gradient.addColorStop(1, "rgba(181,140,255,0)");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Jan", "Feb", "Mar", "Apr", "May", "Jun", "Jul"],
      datasets: [
        {
          label: "Progress",
          data: [12, 24, 38, 55, 66, 79, 87],
          fill: true,
          backgroundColor: gradient,
          borderColor: "#b58cff",
          borderWidth: 2.5,
          pointBackgroundColor: "#ffffff",
          pointBorderColor: "#8f5bff",
          pointHoverBackgroundColor: "#ffffff",
          pointHoverBorderColor: "#b58cff",
          pointRadius: 4,
          pointHoverRadius: 6,
          tension: 0.38,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      animation: {
        duration: 1300,
        easing: "easeOutQuart",
      },
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: "rgba(5,4,24,0.95)",
          titleColor: "#fff",
          bodyColor: "#eee8ff",
          borderColor: "rgba(181,140,255,0.35)",
          borderWidth: 1,
          displayColors: false,
          padding: 14,
          callbacks: {
            label: (ctx) => ` Progress: ${ctx.parsed.y}%`,
          },
        },
      },
      interaction: {
        mode: "index",
        intersect: false,
      },
      scales: {
        x: {
          grid: { display: false },
          ticks: { color: "#d8d0f2" },
          border: { color: "rgba(255,255,255,0.08)" },
        },
        y: {
          min: 0,
          max: 100,
          ticks: {
            stepSize: 20,
            color: "#d8d0f2",
            callback: (v) => v + "%",
          },
          grid: { color: "rgba(255,255,255,0.08)" },
          border: { color: "rgba(255,255,255,0.08)" },
        },
      },
    },
  });
}

export function makeCashFlowChart(el) {
  const ctx = el.getContext("2d");
  new Chart(ctx, {
    type: "line",
    data: {
      labels: ["Mon", "Tue", "Wed", "Thu", "Fri", "Sat", "Sun"],
      datasets: [
        {
          label: "Profits",
          data: [1200, 1900, 3000, 2500, 3200, 2800, 3500],
          borderColor: "#5fd18a",
          backgroundColor: "rgba(95,209,138,0.15)",
          tension: 0.4,
          fill: true,
          pointRadius: 4,
          pointHoverRadius: 6,
        },
        {
          label: "Losses",
          data: [800, 1200, 1800, 2200, 1700, 2100, 1600],
          borderColor: "#ff6d6d",
          backgroundColor: "rgba(255,109,109,0.15)",
          tension: 0.4,
          fill: true,
          pointRadius: 4,
          pointHoverRadius: 6,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: {
          labels: {
            color: "#ccc",
          },
        },
      },
      scales: {
        x: {
          ticks: { color: "#aaa" },
          grid: { color: "rgba(255,255,255,0.05)" },
        },
        y: {
          ticks: { color: "#aaa" },
          grid: { color: "rgba(255,255,255,0.05)" },
        },
      },
    },
  });
}

export function makeCharLine(char) {
  const ctx = char.getContext("2d");
  let points = JSON.parse(char.dataset.points || "[]");
  const grad = ctx.createLinearGradient(0, 0, ctx.canvas.width, 0);
  grad.addColorStop(0, "#5ec3ff");
  grad.addColorStop(0.6, "#2b9bff");
  grad.addColorStop(1, "#1e73d8");
  const fogGrad = ctx.createLinearGradient(0, 0, 0, ctx.canvas.height);
  fogGrad.addColorStop(0, "rgba(46,130,255,0.16)");
  fogGrad.addColorStop(0.45, "rgba(46,130,255,0.08)");
  fogGrad.addColorStop(1, "rgba(46,130,255,0)");
  const shadowPlugin = {
    id: "lineShadow",
    beforeDatasetDraw(chart, args, options) {
      if (args.index !== options.mainDatasetIndex) return;
      const ctx = chart.ctx;
      ctx.save();
      ctx.shadowColor = options.color || "rgba(30,144,255,0.25)";
      ctx.shadowBlur = options.blur || 14;
      ctx.lineJoin = "round";
      ctx.lineCap = "round";
    },
    afterDatasetDraw(chart, args, options) {
      if (args.index !== options.mainDatasetIndex) return;
      chart.ctx.restore();
    },
  };
  Chart.register(shadowPlugin);
  const data = {
    labels: points.map((_, i) => i + 1),
    datasets: [
      {
        data: points,
        tension: 0.4,
        pointRadius: 0,
        fill: true,
        backgroundColor: fogGrad,
      },
      {
        data: points,
        borderColor: grad,
        borderWidth: 3,
        tension: 0.4,
        pointRadius: 0,
        fill: false,
      },
    ],
  };
  new Chart(ctx, {
    type: "line",
    data,
    options: {
      responsive: false,
      plugins: {
        legend: { display: false },
        lineShadow: {
          color: "rgba(46,130,255,0.20)",
          blur: 14,
          mainDatasetIndex: 1,
        },
      },
      scales: {
        x: {
          display: false,
          ticks: {
            color: "rgba(236, 236, 236, 1)",
            backdropColor: "transparent",
            backdropPadding: 0,
          },
        },
        y: {
          display: false,
          ticks: {
            color: "rgba(236, 236, 236, 1)",
            backdropColor: "transparent",
            backdropPadding: 0,
          },
        },
      },
      elements: {
        line: {
          borderCapStyle: "round",
          borderJoinStyle: "round",
        },
      },
      interaction: { intersect: false },
    },
  });
}

export function makeBarChart(el) {
  if (!el) return;
  const ctx = el.getContext("2d");
  const labels = el.dataset.labels
    ? JSON.parse(el.dataset.labels)
    : [
        "Jan",
        "Feb",
        "Mar",
        "Apr",
        "May",
        "Jun",
        "Jul",
        "Aug",
        "Sep",
        "Oct",
        "Nov",
        "Dec",
      ];
  const values = el.dataset.values
    ? JSON.parse(el.dataset.values)
    : [1200, 1900, 1500, 2200, 2600, 2100, 2800, 2400, 3000, 2700, 3200, 3500];
  const datasetLabel = el.dataset.label || "Revenue";
  const startColor = el.dataset.colorStart || "#8f5bff";
  const endColor = el.dataset.colorEnd || "#c6a8ff";
  const grad = ctx.createLinearGradient(0, 0, 0, el.height || 300);
  grad.addColorStop(0, startColor);
  grad.addColorStop(1, endColor);

  new Chart(ctx, {
    type: "bar",
    data: {
      labels: labels,
      datasets: [
        {
          label: datasetLabel,
          data: values,
          backgroundColor: grad,
          borderRadius: 8,
          borderSkipped: false,
          barThickness: el.dataset.barThickness
            ? Number(el.dataset.barThickness)
            : 14,
        },
      ],
    },
    options: {
      responsive: true,
      maintainAspectRatio: false,
      plugins: {
        legend: { display: false },
        tooltip: {
          backgroundColor: "#0b0a1c",
          titleColor: "#fff",
          bodyColor: "#e6dcff",
          padding: 12,
          displayColors: false,
          callbacks: {
            label: (ctx) => {
              const val = ctx.parsed.y;
              const max = Math.max(...values);
              return max <= 100 ? `${val}%` : ` $${val}`;
            },
          },
        },
      },
      scales: {
        x: { grid: { display: false }, ticks: { color: "#bfb6e6" } },
        y: {
          ticks: { color: "#bfb6e6" },
          grid: { color: "rgba(255,255,255,0.06)" },
        },
      },
    },
  });
}
