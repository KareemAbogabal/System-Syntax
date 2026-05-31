<section class="section-2">
  @include("website.web.SVG.icon_section", ["iconText" => "Our motto"])
  <div class="content">
    <h2>We don't produce ordinary software we create a carefully crafted digital presence befitting only those who seek exclusivity</h2>
    <a href="/encryption" class="btn-crypto">
      <span class="btn-text">!@#$%^&*()_+=-{}[]<>?/|</span>
    </a>
  </div>
  <div class="bar">
    <div class="stack" id="stack">
      <div class="row">
        <div class="track" data-speed="0.75">
          <span class="chip c1">@include("website.web.SVG.System_Syntax", ["size" => "20"])Elegant Engineering</span>
          <span class="chip c2">@include("website.web.SVG.System_Syntax", ["size" => "20"])Precision Architecture</span>
          <span class="chip c3">@include("website.web.SVG.System_Syntax", ["size" => "20"])Refined Interfaces</span>
          <span class="chip c5">@include("website.web.SVG.System_Syntax", ["size" => "20"])Timeless Design</span>
          <span class="chip c6">@include("website.web.SVG.System_Syntax", ["size" => "20"])Elite Development</span>
          <span class="chip c7">@include("website.web.SVG.System_Syntax", ["size" => "20"])Clarity in Complexity</span>
        </div>
      </div>
      <div class="row">
        <div class="track" data-speed="0.55">
          <span class="chip c8">@include("website.web.SVG.System_Syntax", ["size" => "20"])Digital Excellence</span>
          <span class="chip c7">@include("website.web.SVG.System_Syntax", ["size" => "20"])Engineered Precision</span>
          <span class="chip c6">@include("website.web.SVG.System_Syntax", ["size" => "20"])Quiet Innovation</span>
          <span class="chip c2">@include("website.web.SVG.System_Syntax", ["size" => "20"])Crafted Experiences</span>
          <span class="chip c1">@include("website.web.SVG.System_Syntax", ["size" => "20"])Luxury-Grade Systems</span>
        </div>
      </div>
    </div>
  </div>
  <svg xmlns="http://www.w3.org/2000/svg" width="100%" height="135" style="transform: translateY(-25%);" viewBox="0 0 706 135" fill="none">
    <defs>
      <filter id="glow" x="-50%" y="-50%" width="200%" height="200%">
        <feGaussianBlur stdDeviation="1.8" result="b"/>
        <feMerge>
          <feMergeNode in="b"/>
          <feMergeNode in="SourceGraphic"/>
        </feMerge>
      </filter>
    </defs>

    <!-- left vertical line with small curve at the bottom -->
    <path d="M -100 0 L -100 50 Q -100 53 -78 53"
          stroke="#7a7690"
          stroke-opacity="0.55"
          stroke-width="3"
          stroke-linecap="round"
          stroke-dasharray="12 14"
          fill="none"/>

    <!-- right vertical line with small curve at the bottom -->
    <path d="M 820 0 L 820 50 Q 820 53 798 53"
          stroke="#7a7690"
          stroke-opacity="0.55"
          stroke-width="3"
          stroke-linecap="round"
          stroke-dasharray="12 14"
          fill="none"/>

    <!-- center vertical dashed line -->
    <line x1="353" y1="4" x2="353" y2="56"
          stroke="#7a7690"
          stroke-opacity="0.55"
          stroke-width="2"
          stroke-linecap="round"
          stroke-dasharray="12 14"/>

    <!-- horizontal dashed line -->
    <line x1="-90" y1="53" x2="800" y2="53"
          stroke="#7a7690"
          stroke-opacity="0.55"
          stroke-width="3"
          stroke-linecap="round"
          stroke-dasharray="12 14"
          stroke-dashoffset="12"/>

    <!-- center circle -->
    <circle cx="353" cy="53" r="15"
            fill="none"
            stroke="#8a869d"
            stroke-opacity="0.5"
            stroke-width="2.5"/>

    <circle cx="353" cy="53" r="6.5"
            fill="#ffffff"
            filter="url(#glow)"/>

    <!-- text bubble -->
    <rect x="372" y="78" width="148" height="34" rx="12"
          fill="#09051d"
          fill-opacity="0.28"
          stroke="#66607a"
          stroke-opacity="0.55"
          stroke-width="2"/>

    <text x="388" y="100"
          fill="#f7f7ff"
          font-family="Arial, Helvetica, sans-serif"
          font-size="15"
          font-weight="700"
          filter="url(#glow)">You will access</text>
  </svg>
</section>