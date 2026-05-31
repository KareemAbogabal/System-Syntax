const DELAYS = [0, 300, 600];
const DRAW_DUR = 2000;
let started = false;
let startTime = null;
let done = false;
let perims = null;

const faces = [
  document.getElementById('f1'),
  document.getElementById('f2'),
  document.getElementById('f3'),
];

function getPerimeter(el) {
  const pts = el.points;
  let total = 0;
  const n = pts.numberOfItems;
  for (let i = 0; i < n; i++) {
    const a = pts.getItem(i);
    const b = pts.getItem((i + 1) % n);
    total += Math.hypot(b.x - a.x, b.y - a.y);
  };
  return Math.ceil(total) + 10;
};

function easeInOut(t) {
  return t < 0.5 ? 2*t*t : -1+(4-2*t)*t;
};

function init() {
  perims = faces.map(getPerimeter);
  faces.forEach((el, i) => {
    el.style.strokeDasharray = perims[i];
    el.style.strokeDashoffset = perims[i];
    el.style.opacity = 1;
  });
};

function animate(ts) {
  if (done) return;
  if (!started) {
    startTime = ts;
    started = true;
  };
  const elapsed = ts - startTime;
  let allDone = true;
  faces.forEach((el, i) => {
    const p = perims[i];
    const local = elapsed - DELAYS[i];
    if (local <= 0) {
      el.style.strokeDashoffset = p;
      allDone = false;
    } else {
      const t = Math.min(local / DRAW_DUR, 1);
      const eased = easeInOut(t);
      el.style.strokeDashoffset = p * (1 - eased);
      if (t < 1) allDone = false;
    };
  });
  if (allDone) {
    faces.forEach(el => el.style.strokeDashoffset = 0);
    done = true;
    return;
  };
  requestAnimationFrame(animate);
};

init();
requestAnimationFrame(animate);