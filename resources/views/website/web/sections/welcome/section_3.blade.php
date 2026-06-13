<section class="section-3">
  @include("website.web.SVG.icon_section", ["iconText" => "benefits"])
  <div class="content">
    <h1>Your Benefits</h1>
    <p>Every system we create is meticulously crafted to remove complexity empower your team with clarity and control and elevate the way your business operates</p>
    <div class="benefits">
      <div class="benefit">
        <div class="icon">
          @include("website.web.SVG.System_Syntax", ["size" => "20", "color" => "#5d16b5"])
        </div>
        <div class="header">
          <h2>General</h2>
          <p>Built for essential needs with a polished, dependable, and effortless digital experience.</p>
        </div>
        <div class="body">
          <div class="main-charts">
            <div class="card">
              <div class="content">
                <span>Operational Load</span>
                <h2>+90%</h2>
              </div>
              <canvas class="profChart" data-points="[24, 27, 15, 35, 26, 31, 25, 40, 30, 36, 33]" data-colors='["#6cff5e", "#3dff2b", "#3dd81e"]'></canvas>
            </div>
            <div class="card">
              <div class="content">
                <span>Efficiency Growth</span>
                <h2>Live</h2>
              </div>
              <div class="main-svg">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64" fill="none">
                  <defs>
                    <linearGradient id="boltGradient" x1="18" y1="4" x2="46" y2="60" gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-color="#6C63FF"/>
                      <stop offset="1" stop-color="#00D4FF"/>
                    </linearGradient>
                  </defs>
                  <path
                    d="M37 2L14 35h15L25 62l25-34H34L37 2Z"
                    fill="url(#boltGradient)"
                  />
                </svg>
              </div>
            </div>
            <div class="card">
              <div class="content">
                <span>Performance Trend</span>
                <h2>+20%</h2>
              </div>
              <canvas class="profChart" data-points="[33, 36, 30, 40, 25, 31, 26, 35, 15, 27, 24]" data-colors='["#5ec3ff", "#2b9bff", "#1e73d8"]'></canvas>
            </div>
          </div>
          <div class="columns">
            <span><i></i> Crafted as a bespoke operational signature</span>
            <span><i></i> Tuned for elevated exclusivity and control</span>
            <span><i></i> Built to feel uncommon, not merely premium</span>
          </div>
          <a href="/general">Get Started</a>
        </div>
      </div>
      <div class="benefit">
        <div class="icon">
          @include("website.web.SVG.System_Syntax", ["size" => "20", "color" => "#5d16b5"])
        </div>
        <div class="header">
          <h2>Special request</h2>
          <p>Created for exceptional brands that demand exclusivity, precision, and a premium standard in every detail.</p>
        </div>
        <div class="body">
          <div class="main-charts">
            <div class="gauge-wrap" aria-hidden="false">
              <svg id="gauge" width="100%" height="100%" viewBox="0 0 340 340">
                <defs>
                  <linearGradient id="gGrad" x1="0" x2="1">
                    <stop offset="0" stop-color="#6C63FF" stop-opacity="1" />
                    <stop offset="1" stop-color="#00D4FF" stop-opacity="1" />
                  </linearGradient>
                  <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
                    <feGaussianBlur stdDeviation="6" result="b"/>
                    <feMerge><feMergeNode in="b"/><feMergeNode in="SourceGraphic"/></feMerge>
                  </filter>
                </defs>
                <g transform="translate(170,170)">
                  <circle r="140" fill="none" stroke="rgba(255,255,255,0.02)" stroke-width="12" />
                  <circle id="arc-fg"
                    r="140" cx="0" cy="0"
                    fill="none"
                    stroke="url(#gGrad)"
                    stroke-width="18"
                    stroke-linecap="round"
                    style="filter:url(#glow); transform-origin: 0px 0px; transform: rotate(-265deg);"
                    pathLength="100"
                    stroke-dasharray="85 15"
                    stroke-dashoffset="100"
                  />
                </g>
              </svg>
              <div class="center-display" aria-live="polite">
                <svg xmlns="http://www.w3.org/2000/svg" viewBox="0 0 64 64" width="64" height="64" fill="none">
                  <defs>
                    <linearGradient id="boltGradient" x1="18" y1="4" x2="46" y2="60" gradientUnits="userSpaceOnUse">
                      <stop offset="0" stop-color="#6C63FF"/>
                      <stop offset="1" stop-color="#00D4FF"/>
                    </linearGradient>
                  </defs>
                  <path
                    d="M37 2L14 35h15L25 62l25-34H34L37 2Z"
                    fill="url(#boltGradient)"
                  />
                </svg>
                <div class="point">90%</div>
                <p>Current load</p>
              </div>
            </div>
          </div>
          <div class="columns">
            <span><i></i> Improved operational clarity</span>
            <span><i></i> Smart automation layers</span>
            <span><i></i> Refined user experience</span>
          </div>
          <a href="/special">Get Started</a>
        </div>
      </div>
      <div class="benefit">
        <div class="icon">
          @include("website.web.SVG.System_Syntax", ["size" => "20", "color" => "#5d16b5"])
        </div>
        <div class="header">
          <h2>Bespoke</h2>
          <p>Designed for businesses that need a higher level of refinement, structure, and control.</p>
        </div>
        <div class="body">
          <div class="main-charts">
            <canvas class="circleChart" data-points="[80, 20]"></canvas>
          </div>
          <div class="columns">
            <span><i></i> Calibrated for sharper decision flow</span>
            <span><i></i> Layered to handle deeper process control</span>
            <span><i></i> Refined for a more selective workflow</span>
          </div>
          <a href="/bespoke">Get Started</a>
        </div>
      </div>
    </div>
  </div>
  <script src="https://cdn.jsdelivr.net/npm/chart.js@4/dist/chart.umd.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/chartjs-chart-sankey/dist/chartjs-chart-sankey.min.js"></script>
</section>