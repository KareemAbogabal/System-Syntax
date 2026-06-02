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
  const scene = document.getElementById('scene');

  if (!canvas || !scene) return;

  const ctx = canvas.getContext('2d', { alpha: true });

  const cfg = {
    dotCount: 1400,
    dotSizeMin: 1.3,
    dotSizeMax: 2.5,

    driftRange: 1.5,

    // حركة الانتشار العادية
    spreadEase: 0.018,

    // سرعة التجمع عند المرور بالماوس
    gatherEase: 0.10,

    // تقوية إضافية للهوفر
    hoverBoost: 0.60,

    mouseRadius: 180,
    mousePull: 0.14,

    shapeScale: 0.54,
    shapeThickness: 40,

    // تقليل الحمل على الجهاز بدون المساس بعدد النقاط
    maxDpr: 1.5,

    // تقليل التغييرات العشوائية داخل كل فريم
    wanderMinFramesIdle: 45,
    wanderMaxFramesIdle: 130,
    wanderMinFramesHover: 160,
    wanderMaxFramesHover: 360,

    // سرعة الاهتزاز البسيط
    noiseSpeed: 0.00045
  };

  let w = 0;
  let h = 0;
  let dpr = 1;

  let dots = [];
  let shapePoints = [];
  let shapeActive = false;

  let mouse = {
    x: 0,
    y: 0,
    active: false
  };

  let lastTime = 0;
  let sprite = null;

  const rand = (min, max) => Math.random() * (max - min) + min;
  const clamp = (v, min, max) => Math.max(min, Math.min(max, v));
  const lerp = (a, b, t) => a + (b - a) * t;

  function createSprite() {
    const s = 64;
    const c = document.createElement('canvas');
    c.width = s;
    c.height = s;

    const g = c.getContext('2d');
    const r = s / 2;

    const grad = g.createRadialGradient(r, r, 0, r, r, r);
    grad.addColorStop(0.0, 'rgba(230, 220, 255, 1)');
    grad.addColorStop(0.28, 'rgba(181, 140, 255, 0.95)');
    grad.addColorStop(0.62, 'rgba(123, 70, 220, 0.35)');
    grad.addColorStop(1.0, 'rgba(93, 22, 181, 0)');

    g.fillStyle = grad;
    g.beginPath();
    g.arc(r, r, r, 0, Math.PI * 2);
    g.fill();

    return c;
  }

  function resize() {
    dpr = Math.min(window.devicePixelRatio || 1, cfg.maxDpr);
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

    const scaleX = Math.min(w, h) * cfg.shapeScale;
    const scaleY = Math.min(w, h) * cfg.shapeScale * 0.62;
    const thickness = cfg.shapeThickness;
    const layers = 18;

    const samples = 2500;

    for (let i = 0; i < samples; i++) {
      const t = (i / samples) * Math.PI * 2;

      const s = Math.sin(t);
      const c = Math.cos(t);

      const x = scaleX * s / (1 + c * c);
      const y = scaleY * s * c / (1 + c * c);

      const nextT = t + 0.001;
      const ns = Math.sin(nextT);
      const nc = Math.cos(nextT);

      const nextX = scaleX * ns / (1 + nc * nc);
      const nextY = scaleY * ns * nc / (1 + nc * nc);

      let dx = nextX - x;
      let dy = nextY - y;

      const len = Math.hypot(dx, dy) || 1;
      dx /= len;
      dy /= len;

      const nx = -dy;
      const ny = dx;

      for (let j = 0; j < layers; j++) {
        const offset = (-thickness / 2) + (j / (layers - 1)) * thickness;

        shapePoints.push({
          x: cx + x + nx * offset,
          y: cy + y + ny * offset
        });
      }
    }
  }

  function initDots() {
    dots = [];
    const shapeLen = Math.max(1, shapePoints.length);

    for (let i = 0; i < cfg.dotCount; i++) {
      const baseX = rand(0, w);
      const baseY = rand(0, h);

      const iseed = Math.random() * Math.PI * 2;

      dots.push({
        baseX,
        baseY,
        x: baseX,
        y: baseY,
        vx: 0,
        vy: 0,
        size: rand(cfg.dotSizeMin, cfg.dotSizeMax),
        alpha: rand(0.65, 1),

        driftX: rand(-cfg.driftRange, cfg.driftRange),
        driftY: rand(-cfg.driftRange, cfg.driftRange),
        driftTargetX: rand(-cfg.driftRange, cfg.driftRange),
        driftTargetY: rand(-cfg.driftRange, cfg.driftRange),

        // بدل Math.random داخل كل فريم
        wanderCooldown: Math.floor(rand(
          cfg.wanderMinFramesIdle,
          cfg.wanderMaxFramesIdle
        )),

        wanderSeed: iseed,
        wanderPhase: rand(0, Math.PI * 2),

        shapeIndex: Math.floor((i / cfg.dotCount) * shapeLen)
      });
    }
  }

  function setMouseFromEvent(e) {
    const rect = canvas.getBoundingClientRect();
    mouse.x = e.clientX - rect.left;
    mouse.y = e.clientY - rect.top;
    mouse.active = true;
    shapeActive = true;
  }

  function onPointerLeave() {
    mouse.active = false;
    shapeActive = false;
  }

  scene.addEventListener('pointermove', setMouseFromEvent, { passive: true });
  scene.addEventListener('pointerenter', setMouseFromEvent, { passive: true });
  scene.addEventListener('pointerleave', onPointerLeave, { passive: true });

  let resizeTimer = 0;
  window.addEventListener('resize', () => {
    clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(resize, 80);
  }, { passive: true });

  window.addEventListener('orientationchange', () => {
    clearTimeout(resizeTimer);
    resizeTimer = window.setTimeout(resize, 120);
  }, { passive: true });

  function updateDot(dot, i, now) {
    // بدل العشوائية كل فريم، نبدل الهدف على فترات
    dot.wanderCooldown--;

    if (dot.wanderCooldown <= 0) {
      const isHover = shapeActive;
      dot.wanderCooldown = Math.floor(rand(
        isHover ? cfg.wanderMinFramesHover : cfg.wanderMinFramesIdle,
        isHover ? cfg.wanderMaxFramesHover : cfg.wanderMaxFramesIdle
      ));

      dot.driftTargetX = rand(-cfg.driftRange, cfg.driftRange);
      dot.driftTargetY = rand(-cfg.driftRange, cfg.driftRange);
    }

    dot.driftX = lerp(dot.driftX, dot.driftTargetX, 0.02);
    dot.driftY = lerp(dot.driftY, dot.driftTargetY, 0.02);

    const t = now * cfg.noiseSpeed + dot.wanderPhase;
    const noiseX = Math.sin(t + i * 0.15) * 0.05;
    const noiseY = Math.cos(t + i * 0.15) * 0.05;

    const ax = dot.baseX + dot.driftX + noiseX;
    const ay = dot.baseY + dot.driftY + noiseY;

    let targetX = ax;
    let targetY = ay;

    let pull = 0;
    let ease = cfg.spreadEase;

    if (shapeActive && shapePoints.length) {
      const p = shapePoints[dot.shapeIndex % shapePoints.length];
      targetX = p.x;
      targetY = p.y;

      pull = cfg.gatherEase * cfg.hoverBoost;
      ease = pull;
    }

    if (mouse.active) {
      const dx = mouse.x - dot.x;
      const dy = mouse.y - dot.y;
      const dist = Math.hypot(dx, dy) || 1;

      if (dist < cfg.mouseRadius) {
        const force = (1 - dist / cfg.mouseRadius) * cfg.mousePull;

        targetX += (dx / dist) * 28 * force;
        targetY += (dy / dist) * 28 * force;

        pull = Math.max(pull, cfg.gatherEase * 1.6);
        ease = pull;
      }
    }

    dot.vx = lerp(dot.vx, (targetX - dot.x) * ease, 0.18);
    dot.vy = lerp(dot.vy, (targetY - dot.y) * ease, 0.18);

    dot.x += dot.vx;
    dot.y += dot.vy;

    // إعادة تدوير النقاط خارج الشاشة
    if (dot.x < -30) dot.x = w + 30;
    if (dot.x > w + 30) dot.x = -30;
    if (dot.y < -30) dot.y = h + 30;
    if (dot.y > h + 30) dot.y = -30;
  }

  function drawDot(dot, shapeBoost) {
    const alpha = clamp(dot.alpha, 0.25, 1);

    // sprite جاهز بدل shadowBlur لكل نقطة
    const size = dot.size * shapeBoost * (shapeActive ? 2.35 : 1.75);
    const half = size / 2;

    ctx.globalAlpha = alpha;

    // لون أخف قليلًا عند عدم وجود هوفر، وأوضح عند الـ hover
    if (shapeActive) {
      ctx.globalAlpha = alpha * 0.95;
    } else {
      ctx.globalAlpha = alpha * 0.78;
    }

    ctx.drawImage(sprite, dot.x - half, dot.y - half, size, size);
  }

  function draw(now) {
    ctx.clearRect(0, 0, w, h);

    // تقليل التغييرات داخل الحلقة
    const shapeBoost = shapeActive ? 1.15 : 1;

    for (let i = 0; i < dots.length; i++) {
      const dot = dots[i];
      updateDot(dot, i, now);
      drawDot(dot, shapeBoost);
    }

    ctx.globalAlpha = 1;
    requestAnimationFrame(draw);
  }

  sprite = createSprite();
  resize();
  requestAnimationFrame(draw);
})();