let sections = document.querySelectorAll(".section-1, .article");

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

    spreadEase: 0.018,
    gatherEase: 0.05,
    hoverBoost: 0.60,

    mouseRadius: 180,
    mousePull: 0.14,

    shapeScale: 0.54,
    shapeThickness: 40,

    maxDpr: 1.5,

    wanderMinFramesIdle: 45,
    wanderMaxFramesIdle: 130,
    wanderMinFramesHover: 160,
    wanderMaxFramesHover: 360,

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

  function extractPointsFromCanvas(tempCanvas, step = 5, threshold = 25) {
    const tctx = tempCanvas.getContext('2d', { willReadFrequently: true });
    const img = tctx.getImageData(0, 0, tempCanvas.width, tempCanvas.height).data;
    const points = [];

    for (let y = 0; y < tempCanvas.height; y += step) {
      for (let x = 0; x < tempCanvas.width; x += step) {
        const idx = (y * tempCanvas.width + x) * 4 + 3;
        if (img[idx] > threshold) {
          points.push({
            x: x + rand(-1.1, 1.1),
            y: y + rand(-1.1, 1.1)
          });
        }
      }
    }

    return points;
  }

  function drawPremiumEmblem(tempCanvas) {
    const tctx = tempCanvas.getContext('2d');
    const cx = tempCanvas.width / 2;
    const cy = tempCanvas.height / 2;

    const minSide = Math.min(tempCanvas.width, tempCanvas.height);
    const emblemSize = minSide * cfg.shapeScale;

    const outerR = emblemSize * 0.42;
    const innerR = emblemSize * 0.26;
    const diamondW = emblemSize * 0.30;
    const diamondH = emblemSize * 0.42;

    const ringW = Math.max(2, emblemSize * 0.022);
    const lineW = Math.max(2, emblemSize * 0.032);

    tctx.clearRect(0, 0, tempCanvas.width, tempCanvas.height);
    tctx.save();
    tctx.translate(cx, cy);

    tctx.strokeStyle = '#fff';
    tctx.fillStyle = '#fff';
    tctx.lineCap = 'round';
    tctx.lineJoin = 'round';

    // الحلقة الخارجية
    tctx.lineWidth = ringW;
    tctx.beginPath();
    tctx.arc(0, 0, outerR, 0, Math.PI * 2);
    tctx.stroke();

    // الحلقة الداخلية الخفيفة
    tctx.globalAlpha = 0.9;
    tctx.beginPath();
    tctx.arc(0, 0, innerR, 0, Math.PI * 2);
    tctx.stroke();

    // المعين المركزي
    tctx.globalAlpha = 1;
    tctx.lineWidth = lineW;
    tctx.beginPath();
    tctx.moveTo(0, -diamondH * 0.55);
    tctx.lineTo(diamondW * 0.55, 0);
    tctx.lineTo(0, diamondH * 0.55);
    tctx.lineTo(-diamondW * 0.55, 0);
    tctx.closePath();
    tctx.stroke();

    // خط مركزي يوحي بالقوة والدقة
    const midLine = diamondH * 0.30;
    tctx.lineWidth = Math.max(2, emblemSize * 0.022);
    tctx.beginPath();
    tctx.moveTo(-diamondW * 0.42, 0);
    tctx.lineTo(diamondW * 0.42, 0);
    tctx.stroke();

    // لمسة فخمة: نقطتان/لمعتان جانبيتان
    tctx.lineWidth = Math.max(2, emblemSize * 0.018);
    tctx.beginPath();
    tctx.moveTo(-diamondW * 0.15, -midLine);
    tctx.lineTo(-diamondW * 0.05, -midLine);
    tctx.moveTo(diamondW * 0.05, midLine);
    tctx.lineTo(diamondW * 0.15, midLine);
    tctx.stroke();

    tctx.restore();
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

    const temp = document.createElement('canvas');
    const tctx = temp.getContext('2d', {
      willReadFrequently: true
    });

    temp.width = w;
    temp.height = h;

    const fontSize = Math.min(w, h) * 0.16;

    tctx.clearRect(0, 0, w, h);

    tctx.fillStyle = '#ffffff';
    tctx.textAlign = 'center';
    tctx.textBaseline = 'middle';

    // خط فاخر
    tctx.font = `700 ${fontSize}px "Inter", "SF Pro Display", sans-serif`;

    tctx.fillText(
      text,
      w / 2,
      h / 2
    );

    const image = tctx.getImageData(
      0,
      0,
      temp.width,
      temp.height
    ).data;

    const step = 5;

    for (let y = 0; y < temp.height; y += step) {
      for (let x = 0; x < temp.width; x += step) {

        const alpha =
          image[(y * temp.width + x) * 4 + 3];

        if (alpha > 30) {
          shapePoints.push({
            x: x + rand(-1.2, 1.2),
            y: y + rand(-1.2, 1.2)
          });
        }
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

    if (dot.x < -30) dot.x = w + 30;
    if (dot.x > w + 30) dot.x = -30;
    if (dot.y < -30) dot.y = h + 30;
    if (dot.y > h + 30) dot.y = -30;
  }

  function drawDot(dot, shapeBoost) {
    const alpha = clamp(dot.alpha, 0.25, 1);
    const size = dot.size * shapeBoost * (shapeActive ? 2.35 : 1.75);
    const half = size / 2;

    ctx.globalAlpha = shapeActive ? alpha * 0.95 : alpha * 0.78;
    ctx.drawImage(sprite, dot.x - half, dot.y - half, size, size);
  }

  function draw(now) {
    ctx.clearRect(0, 0, w, h);

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