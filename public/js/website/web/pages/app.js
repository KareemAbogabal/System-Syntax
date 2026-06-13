let section1 = document.querySelector(".section-1");
let section2 = document.querySelector(".section-2");
let section3 = document.querySelector(".section-3");
let section4 = document.querySelector(".section-4");
let section5 = document.querySelector(".section-5");
let section6 = document.querySelector(".section-6");
let sections = [section1, section2, section3, section4];
const btn = document.querySelector(".btn-crypto");
const textEl = btn.querySelector(".btn-text");
let profChart = document.querySelectorAll(".profChart");
let circleChart = document.querySelector(".circleChart");
const slides = document.querySelectorAll('.slide');
const buttons = document.querySelectorAll('.button');
let btnOrder = document.querySelector('.order');
const letters = "!@#$%^&*()_+=-{}[]<>?/|ABCDEFGHIJKLMNOPQRSTUVWXYZabcdefghijklmnopqrstuvwxyz123456789";
const originalText = textEl.textContent;
const targetText = "More Us";
const maxRandomTextLength = 20;

let interval;

function getRandomLetter() {
  const randomIndex = Math.floor(Math.random() * letters.length);
  return letters[randomIndex];
};

function animateText(textToShow) {
  let iteration = 0;
  clearInterval(interval);
  interval = setInterval(() => {
    textEl.textContent = textToShow
      .split("")
      .map((letter, index) => {
        if (index < iteration) return textToShow[index];
        return getRandomLetter();
      })
      .join("");
    if (iteration >= textToShow.length) clearInterval(interval);
    iteration += 0.2;
  }, 20);
};

if (btn) {
  btn.addEventListener("mouseenter", () => animateText(targetText));
  btn.addEventListener("mouseleave", () => {
    const randomText = Array.from({ length: maxRandomTextLength }, () => getRandomLetter()).join("");
    animateText(randomText);
  });
};

function makeCharLine(char) {
  const ctx = char.getContext("2d");
  const isArabic = document.documentElement.getAttribute("lang") === "ar";
  let points = JSON.parse(char.dataset.points);
  let colors = JSON.parse(char.dataset.colors);
  const grad = ctx.createLinearGradient(0, 0, ctx.canvas.width, 0);
  grad.addColorStop(0, colors[0]);
  grad.addColorStop(0.6, colors[1]);
  grad.addColorStop(1, colors[2]);
  const shadowPlugin = {
    id: 'lineShadow',
    beforeDatasetDraw(chart, args, options) {
      if (args.index !== options.mainDatasetIndex) return;
      const ctx = chart.ctx;
      ctx.save();
      ctx.shadowColor = options.color || 'rgba(30,144,255,0.25)';
      ctx.shadowBlur = options.blur || 14;
      ctx.lineJoin = 'round';
      ctx.lineCap = 'round';
    },
    afterDatasetDraw(chart, args, options) {
      if (args.index !== options.mainDatasetIndex) return;
      chart.ctx.restore();
    }
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
      },
      {
        data: points,
        borderColor: grad,
        borderWidth: 3,
        tension: 0.4,
        pointRadius: 0,
        fill: false
      }
    ],
  };
  new Chart(ctx, {
    type: 'line',
    data,
    options: {
      responsive: false,
      plugins: {
        legend: { display: false },
        lineShadow: { color: 'rgba(46,130,255,0.20)', blur: 14, mainDatasetIndex: 1 }
      },
      scales: {
        x: {
          display: false,
          ticks: {
            color: 'rgba(236, 236, 236, 1)',
            backdropColor: 'transparent',
            backdropPadding: 0,
            font: {
              family: isArabic ? 'Cairo' : 'Arial',
              size: 12
            },
          },
        },
        y: {
          display: false,
          ticks: {
            color: 'rgba(236, 236, 236, 1)',
            backdropColor: 'transparent',
            backdropPadding: 0,
            font: {
              family: isArabic ? 'Cairo' : 'Arial',
              size: 12
            },
          },
        }
      },
      elements: {
        line: {
          borderCapStyle: 'round',
          borderJoinStyle: 'round'
        }
      },
      interaction: { intersect: false }
    }
  });
};

profChart.forEach((item) => {
  makeCharLine(item);
});


function makeChartCircle(element) {
  const ctx1Att = JSON.parse(element.getAttribute("data-points"));
  const doughnutConfig = {
    type: 'doughnut',
    data: {
      datasets: [{
        label: 'My First Dataset',
        data: ctx1Att,
        hoverOffset: 4,
        backgroundColor: [
          '#342bd8',
          '#9941eb',
        ],
        borderWidth: 0,
        cutout: '60%',
      }]
    },
    options: {}
  };
  new Chart(element, doughnutConfig);
};

makeChartCircle(circleChart);

// particlesJS("particles-js", {
//   particles:{
//     number:{ value: 120 },
//     color:{ value: "#ffffff" },
//     shape:{ type: "circle" },
//     size:{ value: 2 },
//     line_linked: {
//       enable: true,
//       distance: 150,
//       color: "#ffffff"
//     },
//     move:{ enable: true, speed: 3 }
//   }
// });

const gradients = [
  "linear-gradient(19deg, #00c853 0%, #b9f6ca 100%)",
  "linear-gradient(19deg, #7c4dff 0%, #d1c4e9 100%)",
  "linear-gradient(19deg, #ff5252 0%, #ffcdd2 100%)",
  "linear-gradient(19deg, #00bcd4 0%, #b2ebf2 100%)",
  "linear-gradient(19deg, #ff9800 0%, #ffe0b2 100%)",
  "linear-gradient(19deg, #8bc34a 0%, #f1f8e9 100%)"
];

function setActiveSlide(hash) {
  const id = hash || '#slide-1';
  slides.forEach(slide => slide.classList.remove('active'));
  buttons.forEach(btn => {
    btn.classList.remove('active');
    btn.style.backgroundImage = "none";
  });
  const activeSlide = document.querySelector(id);
  if (activeSlide) {
    activeSlide.classList.add('active');
    const index = [...slides].indexOf(activeSlide);
    if (buttons[index]) {
      buttons[index].classList.add('active');
      buttons[index].style.backgroundImage = gradients[index];
    };
  };
};

window.addEventListener('DOMContentLoaded', () => {
  setActiveSlide(window.location.hash);
});

window.addEventListener('hashchange', () => {
  setActiveSlide(window.location.hash);
});

btnOrder.addEventListener("click", () => {
  mainForm[0].classList.add("show-main-card");
});
