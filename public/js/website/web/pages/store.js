let section1 = document.querySelector(".section-1");
let sections = [section1];
const pages = Array.from(document.querySelectorAll('.page'));
const bars = Array.from(document.querySelectorAll('.bar-btn'));
const titleItems = Array.from(document.querySelectorAll('.title-item'));
const slides = Array.from(document.querySelectorAll('.viewer-slide'));
const pageInfo = document.getElementById('pageInfo');
let currentPage = 0;
let currentIndex = 0;

function setActivePage(page) {
  currentPage = page;
  pages.forEach((p, i) => p.classList.toggle('active', i === page));
  bars.forEach((b, i) => b.classList.toggle('active', i === page));
  pageInfo.textContent = `Page ${String(page + 1).padStart(2, '0')} / ${String(pages.length).padStart(2, '0')}`;
  const firstIndex = page * 4;
  setActiveItem(firstIndex, false);
};

function setActiveItem(index, focusPage = true) {
  currentIndex = index;
  titleItems.forEach((item, i) => item.classList.toggle('active', i === index));
  slides.forEach((slide, i) => slide.classList.toggle('active', i === index));
  if (focusPage) {
    const page = Math.floor(index / 4);
    if (page !== currentPage) setActivePage(page);
  };
};

bars.forEach((bar) => {
  bar.addEventListener('click', () => {
    setActivePage(Number(bar.dataset.page));
  });
});

titleItems.forEach((item) => {
  item.addEventListener('click', () => {
    setActiveItem(Number(item.dataset.index));
  });
});

setActivePage(0);
setActiveItem(0, false);


(() => {
  const canvas = document.getElementById('dotsCanvas');
  const ctx = canvas.getContext('2d');
  const scene = document.getElementById('scene');
  const cfg = {
    dotCount: 1400,
    dotSizeMin: 1.3,
    dotSizeMax: 2.5,
    driftRange: 1.5,
    spreadEase: 0.018,
    gatherEase: 0.12,
    mouseRadius: 180,
    mousePull: 0.14,
    shapeScale: 0.54,
    shapeThickness: 40
  };
  let w = 0;
  let h = 0;
  let dpr = 1;
  let dots = [];
  let mouse = {
    x: 0,
    y: 0,
    active: false
  };
  let shapeActive = false;
  let shapePoints = [];
  const rand = (min, max) =>
    Math.random() * (max - min) + min;
  const clamp = (v, min, max) =>
    Math.max(min, Math.min(max, v));
  const lerp = (a, b, t) =>
    a + (b - a) * t;
  function resize() {
    dpr = Math.min(window.devicePixelRatio || 1, 2);
    w = window.innerWidth;
    h = window.innerHeight;
    canvas.width = Math.floor(w * dpr);
    canvas.height = Math.floor(h * dpr);
    canvas.style.width = w + 'px';
    canvas.style.height = h + 'px';
    ctx.setTransform(dpr, 0, 0, dpr, 0, 0);
    buildShapePoints();
    initDots();
  }
  function buildShapePoints() {
    shapePoints = [];
    const cx = w / 2;
    const cy = h / 2;
    const scaleX =
      Math.min(w, h) * cfg.shapeScale;
    const scaleY =
      Math.min(w, h) *
      cfg.shapeScale *
      0.62;
    const thickness =
      cfg.shapeThickness;
    const layers = 18;
    for (let i = 0; i < 2500; i++) {
      const t =
        (i / 2500) *
        Math.PI *
        2;
      const s = Math.sin(t);
      const c = Math.cos(t);
      const x =
        scaleX *
        s /
        (1 + c * c);
      const y =
        scaleY *
        s *
        c /
        (1 + c * c);
      const nextT = t + 0.001;
      const ns = Math.sin(nextT);
      const nc = Math.cos(nextT);
      const nextX =
        scaleX *
        ns /
        (1 + nc * nc);
      const nextY =
        scaleY *
        ns *
        nc /
        (1 + nc * nc);
      let dx = nextX - x;
      let dy = nextY - y;
      const len =
        Math.hypot(dx, dy) || 1;
      dx /= len;
      dy /= len;
      const nx = -dy;
      const ny = dx;
      for (let j = 0; j < layers; j++) {
        const offset =
          (-thickness / 2) +
          (j / (layers - 1)) * thickness;
        shapePoints.push({
          x: cx + x + nx * offset,
          y: cy + y + ny * offset
        });
      }
    }
  }
  function initDots() {
    dots = [];
    for (let i = 0; i < cfg.dotCount; i++) {
      const baseX = rand(0, w);
      const baseY = rand(0, h);
      dots.push({
        baseX,
        baseY,
        x: baseX,
        y: baseY,
        vx: 0,
        vy: 0,
        size: rand(
          cfg.dotSizeMin,
          cfg.dotSizeMax
        ),
        alpha: rand(0.65, 1),
        driftX: rand(
          -cfg.driftRange,
          cfg.driftRange
        ),
        driftY: rand(
          -cfg.driftRange,
          cfg.driftRange
        ),
        driftTargetX: rand(
          -cfg.driftRange,
          cfg.driftRange
        ),
        driftTargetY: rand(
          -cfg.driftRange,
          cfg.driftRange
        ),
        shapeIndex: Math.floor(
          (i / cfg.dotCount) *
          shapePoints.length
        )
      });
    }
  }
  function onPointerMove(e) {
    const rect =
      canvas.getBoundingClientRect();
    mouse.x =
      e.clientX - rect.left;
    mouse.y =
      e.clientY - rect.top;
    mouse.active = true;
    shapeActive = true;
  }
  function onPointerLeave() {
    mouse.active = false;
    shapeActive = false;
  }
  scene.addEventListener(
    'pointermove',
    onPointerMove
  );
  scene.addEventListener(
    'pointerenter',
    onPointerMove
  );
  scene.addEventListener(
    'pointerleave',
    onPointerLeave
  );
  window.addEventListener(
    'resize',
    resize
  );
  window.addEventListener(
    'orientationchange',
    resize
  );
  function updateDot(dot, i) {
    const wanderSpeed =
      shapeActive
        ? 0.001
        : 0.006;
    if (Math.random() < wanderSpeed) {
      dot.driftTargetX = rand(
        -cfg.driftRange,
        cfg.driftRange
      );
      dot.driftTargetY = rand(
        -cfg.driftRange,
        cfg.driftRange
      );
    }
    dot.driftX = lerp(
      dot.driftX,
      dot.driftTargetX,
      0.006
    );
    dot.driftY = lerp(
      dot.driftY,
      dot.driftTargetY,
      0.006
    );
    const noiseX =
      Math.sin(
        (performance.now() * 0.0005) +
        i * 0.15
      ) * 0.05;
    const noiseY =
      Math.cos(
        (performance.now() * 0.0005) +
        i * 0.15
      ) * 0.05;
    const ax =
      dot.baseX +
      dot.driftX +
      noiseX;
    const ay =
      dot.baseY +
      dot.driftY +
      noiseY;
    let targetX = ax;
    let targetY = ay;
    let pull = 0;
    if (shapeActive && shapePoints.length) {
      const p =
        shapePoints[
          dot.shapeIndex %
          shapePoints.length
        ];
      targetX = p.x;
      targetY = p.y;
      pull = cfg.gatherEase;
    }
    if (mouse.active) {
      const dx =
        mouse.x - dot.x;
      const dy =
        mouse.y - dot.y;
      const dist =
        Math.hypot(dx, dy) || 1;
      if (dist < cfg.mouseRadius) {
        const force =
          (1 - dist / cfg.mouseRadius) *
          cfg.mousePull;
        targetX +=
          (dx / dist) *
          28 *
          force;
        targetY +=
          (dy / dist) *
          28 *
          force;
        pull = Math.max(
          pull,
          cfg.gatherEase * 1.4
        );
      }
    }
    dot.vx = lerp(
      dot.vx,
      (targetX - dot.x) *
      (shapeActive
        ? pull
        : cfg.spreadEase),
      0.22
    );
    dot.vy = lerp(
      dot.vy,
      (targetY - dot.y) *
      (shapeActive
        ? pull
        : cfg.spreadEase),
      0.22
    );
    dot.x += dot.vx;
    dot.y += dot.vy;
    if (dot.x < -30)
      dot.x = w + 30;
    if (dot.x > w + 30)
      dot.x = -30;
    if (dot.y < -30)
      dot.y = h + 30;
    if (dot.y > h + 30)
      dot.y = -30;
  }
  function draw() {
    ctx.clearRect(0, 0, w, h);
    ctx.fillStyle =
      'transparent';
    ctx.fillRect(0, 0, w, h);
    for (let i = 0; i < dots.length; i++) {
      const dot = dots[i];
      updateDot(dot, i);
      const glow =
        shapeActive ? 1 : 0.6;
      const alpha = clamp(
        dot.alpha,
        0.25,
        1
      );
      ctx.beginPath();
      ctx.fillStyle =
        `rgba(181, 140, 255, ${alpha * 0.82})`;
      ctx.shadowColor =
        'rgba(93, 22, 181, 0.95)';
      ctx.shadowBlur =
        shapeActive ? 13 : 6;
      ctx.arc(
        dot.x,
        dot.y,
        dot.size * glow,
        0,
        Math.PI * 2
      );
      ctx.fill();
    }
    requestAnimationFrame(draw);
  }
  resize();
  draw();
})();