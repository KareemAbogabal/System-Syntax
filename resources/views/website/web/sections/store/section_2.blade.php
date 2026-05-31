<section class="section-2">
  <div class="scene">
    <div class="stage" id="stage">
      <svg class="bg-lines" viewBox="0 0 760 317" xmlns="http://www.w3.org/2000/svg" aria-hidden="true">
        <defs>
          <linearGradient id="lineFade" x1="0" y1="0" x2="1" y2="0">
            <stop offset="0%" stop-color="rgba(255,255,255,0)" />
            <stop offset="20%" stop-color="rgba(255,255,255,.20)" />
            <stop offset="50%" stop-color="rgba(214,158,255,.32)" />
            <stop offset="80%" stop-color="rgba(255,255,255,.20)" />
            <stop offset="100%" stop-color="rgba(255,255,255,0)" />
          </linearGradient>
          <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
            <feGaussianBlur stdDeviation="1.4" result="blur" />
            <feMerge>
              <feMergeNode in="blur" />
              <feMergeNode in="SourceGraphic" />
            </feMerge>
          </filter>
          <radialGradient id="centerGlow" cx="50%" cy="50%" r="50%">
            <stop offset="0%" stop-color="rgba(183, 60, 255, 0.22)" />
            <stop offset="60%" stop-color="rgba(183, 60, 255, 0.07)" />
            <stop offset="100%" stop-color="rgba(184,60,255,0)" />
          </radialGradient>
        </defs>
        <!-- left sweep lines -->
        <path
          d="M0 35 C 138 35, 196 35, 254 35 S 306 38, 334 72"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 15px)"
        />
        <path
          d="M0 78 C 138 78, 196 78, 254 78 S 308 82, 336 94"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 5px)"
        />
        <path
          d="M0 78 C 138 78, 196 78, 254 78 S 308 82, 336 94"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 38px)"
        />
        <path
          d="M0 166 C 130 166, 206 166, 256 166 S 308 164, 336 148"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -10px)"
        />
        <path
          d="M0 210 C 128 210, 206 210, 256 210 S 308 206, 334 188"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -20px)"
        />
        <path
          d="M0 255 C 132 255, 202 255, 254 255 S 306 250, 332 228"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -30px)"
        />
        <path
          d="M0 255 C 132 255, 202 255, 254 255 S 306 250, 332 228"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 10px)"
        />
        <!-- right sweep lines -->
        <path
          d="M760 35 C 622 35, 564 35, 506 35 S 454 38, 426 72"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 15px)"
        />
        <path
          d="M760 78 C 622 78, 564 78, 506 78 S 452 82, 424 94"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 5px)"
        />
        <path
          d="M760 78 C 622 78, 564 78, 506 78 S 452 82, 424 94"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 38px)"
        />
        <path
          d="M760 166 C 630 166, 554 166, 504 166 S 452 164, 424 148"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -10px)"
        />
        <path
          d="M760 210 C 632 210, 554 210, 504 210 S 452 206, 426 188"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -20px)"
        />
        <path
          d="M760 255 C 628 255, 558 255, 506 255 S 454 250, 428 228"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, -30px)"
        />
        <path
          d="M760 255 C 628 255, 558 255, 506 255 S 454 250, 428 228"
          fill="none"
          stroke="url(#lineFade)"
          stroke-width="1.4"
          filter="url(#glow)"
          style="transform: translate(0px, 10px)"
        />
        <!-- center rings connector arcs -->
        <circle
          cx="380"
          cy="159"
          r="118"
          fill="rgba(183, 60, 255, 0.03)"
          stroke="rgba(190,138,255,.24)"
          stroke-width="1.2"
          filter="url(#glow)"
        />
        <circle
          cx="380"
          cy="159"
          r="93"
          fill="rgba(125, 43, 172, 0.1)"
          stroke="rgba(190,138,255,.16)"
          stroke-width="1.1"
          filter="url(#glow)"
        />
        <circle
          cx="380"
          cy="159"
          r="68"
          fill="rgba(74, 12, 110, 0.39)"
          stroke="rgba(190,138,255,.14)"
          stroke-width="1.0"
          filter="url(#glow)"
        />
      </svg>
      <div class="content">
        <div class="heading left">Developers</div>
        <div class="heading right">DevOps</div>
        <ul class="list left-list">
          <li><span>Self-service environments</span></li>
          <li><span>Real-time logging</span></li>
          <li><span>CLI</span></li>
          <li><span>Advanced security layers</span></li>
          <li><span>Modular architecture</span></li>
        </ul>
        <ul class="list right-list">
          <li><span>Centralized configs</span></li>
          <li><span>Built-in CI/CD</span></li>
          <li><span>Resource control</span></li>
          <li><span>Intelligent monitoring</span></li>
          <li><span>Secure cloud infrastructure</span></li>
        </ul>
        <div class="center-wrap">
          <div class="ring outer"></div>
          <div class="ring mid"></div>
          <div class="ring inner"></div>
          <div class="core">
            <div class="main-icon">
              <div class="main-label">
                <div class="label secure">Secure</div>
                <div class="label safety">Safety</div>
                <div class="label luxury">Luxury</div>
                <div class="label vision">Vision</div>
                <div class="label shield">Shield</div>
                <div class="label robust">Robust</div>
              </div>
              <svg class="icon" width="100" height="100" viewBox="-35 0 500 500" xmlns="http://www.w3.org/2000/svg">
                <defs>
                  <linearGradient id="top-gradient">
                    <stop offset="0%" stop-color="currentColor" />
                    <stop offset="100%" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient id="left-gradient">
                    <stop offset="0%" stop-color="currentColor" />
                    <stop offset="100%" stop-color="currentColor" />
                  </linearGradient>
                  <linearGradient id="right-gradient">
                    <stop offset="0%" stop-color="currentColor" />
                    <stop offset="100%" stop-color="currentColor" />
                  </linearGradient>
                </defs>
                <!-- top -->
                <polygon
                  points="250,60 420,160 250,260 80,160"
                  fill="url(#top-gradient)"
                  transform="scale(0.92) translate(0,-20)"
                />
                <!-- left -->
                <polygon
                  points="80,160 250,260 250,440 80,340"
                  fill="url(#left-gradient)"
                  transform="scale(0.92) translate(-20,10)"
                />
                <!-- right -->
                <polygon
                  points="420,160 250,260 250,440 420,340"
                  fill="url(#right-gradient)"
                  transform="scale(0.92) translate(20,10)"
                />
              </svg>
            </div>
          </div>
        </div>
        <div class="node n1"></div>
        <div class="node n2"></div>
        <div class="node n3"></div>
        <div class="node n4"></div>
        <div class="node n5"></div>
        <div class="node n6"></div>
      </div>
    </div>
  </div>
</section>