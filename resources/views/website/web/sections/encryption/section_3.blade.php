<section class="section-3">
  <div class="content">
    <svg xmlns="http://www.w3.org/2000/svg" width="629" height="208" viewBox="0 0 629 208" style="transform: scale(1.7);">
      <defs>
        <radialGradient id="orb" cx="50%" cy="50%" r="50%">
          <stop offset="0%" stop-color="#c98cff"/>
          <stop offset="45%" stop-color="#7d39d9"/>
          <stop offset="78%" stop-color="#3c1b5c"/>
          <stop offset="100%" stop-color="#1a1026"/>
        </radialGradient>

        <radialGradient id="glow" cx="50%" cy="50%" r="50%">
          <stop offset="0%" stop-color="#c779ff" stop-opacity="0.9"/>
          <stop offset="60%" stop-color="#a24cff" stop-opacity="0.35"/>
          <stop offset="100%" stop-color="#a24cff" stop-opacity="0"/>
        </radialGradient>

        <linearGradient id="pillFill" x1="0" y1="0" x2="0" y2="1">
          <stop offset="0%" stop-color="#1d1625"/>
          <stop offset="100%" stop-color="#17111f"/>
        </linearGradient>

        <linearGradient id="lineGrad" x1="0" y1="0" x2="1" y2="0">
          <stop offset="0%" stop-color="#2a1939"/>
          <stop offset="50%" stop-color="#5d3d80"/>
          <stop offset="100%" stop-color="#2a1939"/>
        </linearGradient>

        <filter id="softGlow" x="-200%" y="-200%" width="400%" height="400%">
          <feGaussianBlur stdDeviation="2.2" result="b"/>
          <feMerge>
            <feMergeNode in="b"/>
            <feMergeNode in="SourceGraphic"/>
          </feMerge>
        </filter>

        <filter id="orbGlow" x="-200%" y="-200%" width="400%" height="400%">
          <feGaussianBlur stdDeviation="8" result="blur"/>
          <feMerge>
            <feMergeNode in="blur"/>
            <feMergeNode in="SourceGraphic"/>
          </feMerge>
        </filter>

        <path id="path-left-top" d="M314.5,94 H215 V42 H114"/>
        <path id="path-left-middle" d="M314.5,94 H215 V95 H114"/>
        <path id="path-left-bottom" d="M314.5,94 H215 V149 H114"/>

        <path id="path-right-top" d="M314.5,94 H415 V42 H511"/>
        <path id="path-right-middle" d="M314.5,94 H415 V95 H511"/>
        <path id="path-right-bottom" d="M314.5,94 H415 V149 H511"/>
      </defs>

      <g fill="none" stroke-linecap="round" stroke-linejoin="round">
        <g stroke="#6d46a0" stroke-opacity="0.28" stroke-width="4" filter="url(#softGlow)">
          <path d="M 129 42 H 214"/>
          <path d="M 129 95 H 214"/>
          <path d="M 129 149 H 214"/>
          <path d="M 214 42 V 149"/>

          <path d="M 415 42 H 511"/>
          <path d="M 415 95 H 511"/>
          <path d="M 415 149 H 511"/>
          <path d="M 415 42 V 149"/>

          <path d="M 214 95 H 415"/>
        </g>

        <g stroke="url(#lineGrad)" stroke-width="1.35" opacity="0.95">
          <path d="M 129 42 H 214"/>
          <path d="M 129 95 H 214"/>
          <path d="M 129 149 H 214"/>
          <path d="M 214 42 V 149"/>

          <path d="M 415 42 H 511"/>
          <path d="M 415 95 H 511"/>
          <path d="M 415 149 H 511"/>
          <path d="M 415 42 V 149"/>

          <path d="M 214 95 H 415"/>
        </g>
      </g>

      <g filter="url(#orbGlow)">
        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-right-top"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" repeatCount="indefinite"/>
        </circle>

        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-right-middle"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" begin="0.2s" repeatCount="indefinite"/>
        </circle>

        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-right-bottom"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" begin="0.4s" repeatCount="indefinite"/>
        </circle>

        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-left-top"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" begin="0.1s" repeatCount="indefinite"/>
        </circle>

        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-left-middle"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" begin="0.3s" repeatCount="indefinite"/>
        </circle>

        <circle r="4" fill="#c97cff">
          <animateMotion dur="4s" repeatCount="indefinite">
            <mpath href="#path-left-bottom"/>
          </animateMotion>
          <animate attributeName="opacity" values="0;1;0" dur="4s" repeatCount="indefinite"/>
          <animate attributeName="r" values="3;5;3" dur="1.4s" begin="0.5s" repeatCount="indefinite"/>
        </circle>
      </g>

      <g transform="translate(314.5,96)">
        <circle r="32" fill="url(#glow)" opacity="0.78" filter="url(#orbGlow)">
          <animate attributeName="r" values="32;44;32" dur="3s" repeatCount="indefinite"/>
          <animate attributeName="opacity" values="0.78;0.32;0.78" dur="3s" repeatCount="indefinite"/>
        </circle>

        <circle r="40" fill="none" stroke="#c779ff" stroke-opacity="0.25" stroke-width="1.5">
          <animate attributeName="r" values="40;70;90" dur="3s" repeatCount="indefinite"/>
          <animate attributeName="stroke-opacity" values="0.35;0.12;0" dur="3s" repeatCount="indefinite"/>
        </circle>

        <circle r="40" fill="none" stroke="#dcb7eb" stroke-opacity="0.18" stroke-width="1">
          <animate attributeName="r" values="40;65;85" dur="3s" begin="1s" repeatCount="indefinite"/>
          <animate attributeName="stroke-opacity" values="0.3;0.1;0" dur="3s" begin="1s" repeatCount="indefinite"/>
        </circle>

        <circle r="24" fill="url(#orb)" stroke="#d7b0ff" stroke-opacity="0.45" stroke-width="1"/>
        <circle r="20" fill="none" stroke="#f1d8ff" stroke-opacity="0.08" stroke-width="1"/>

        <g transform="translate(-12,-12)">
          <defs>
            <linearGradient id="top-1">
              <stop offset="0%" stop-color="currentColor"/>
              <stop offset="100%" stop-color="currentColor"/>
            </linearGradient>
            <linearGradient id="left-2">
              <stop offset="0%" stop-color="currentColor"/>
              <stop offset="100%" stop-color="currentColor"/>
            </linearGradient>
            <linearGradient id="right-3">
              <stop offset="0%" stop-color="currentColor"/>
              <stop offset="100%" stop-color="currentColor"/>
            </linearGradient>
          </defs>

          <polygon points="250,60 420,160 250,260 80,160" fill="url(#top-1)" transform="scale(0.05) translate(0,-20)"/>
          <polygon points="80,160 250,260 250,440 80,340" fill="url(#left-2)" transform="scale(0.05) translate(-20,10)"/>
          <polygon points="420,160 250,260 250,440 420,340" fill="url(#right-3)" transform="scale(0.05) translate(20,10)"/>

          <path
            d="M12 2L19 5V10C19 15 16 18 12 20C8 18 5 15 5 10V5L12 2Z"
            fill="#f5f5ff"
            fill-opacity="0.08"
            stroke="#f3d9ff"
            stroke-opacity="0.5"
            transform="translate(0 2) scale(0.9)"
          >
            <animate attributeName="fill-opacity" values="0.08;0.18;0.08" dur="2s" repeatCount="indefinite"/>
          </path>
        </g>
      </g>

      <g font-family="Arial, Helvetica, sans-serif" font-size="10.5" fill="#efe7ff" letter-spacing="0.1">
        <g transform="translate(59 28)">
          <rect x="0" y="0" rx="6" ry="6" width="72" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="20" y="14" dominant-baseline="middle">Encrypt</text>
        </g>

        <g transform="translate(59 86)">
          <rect x="-20" y="-3" rx="6" ry="6" width="95" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="10" y="10" dominant-baseline="middle">Decrypt</text>
        </g>

        <g transform="translate(59 144)">
          <rect x="0" y="-7" rx="6" ry="6" width="74" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="20" y="6" dominant-baseline="middle">Hashing</text>
        </g>

        <g transform="translate(507 28)">
          <rect x="0" y="2" rx="6" ry="6" width="78" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="23" y="15" dominant-baseline="middle">Salteds</text>
        </g>

        <g transform="translate(487 86)">
          <rect x="20" y="-4" rx="6" ry="6" width="95" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="50" y="9" dominant-baseline="middle">Keypair</text>
        </g>

        <g transform="translate(507 144)">
          <rect x="0" y="-8" rx="6" ry="6" width="74" height="24" fill="url(#pillFill)" stroke="#433252" stroke-width="1.1"/>
          <text x="20" y="5" dominant-baseline="middle">Ciphers</text>
        </g>
      </g>
    </svg>
  </div>
</section>