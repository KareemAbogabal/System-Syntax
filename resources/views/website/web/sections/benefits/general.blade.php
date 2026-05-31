@extends("website.web.pages.benefits")

@section("title", "General")

@section("content")
  <x-components::website.web.nav 
    :ul="[
      ['name' => 'Home', 'url' => '#', 'active' => true],
      ['name' => 'Solutions', 'url' => '#'],
      ['name' => 'Packages', 'url' => '#'],
      ['name' => 'Projects', 'url' => '#'],
      ['name' => 'Contact', 'url' => '#'],
    ]"
  />
  <section class="section-1">
    <div class="content">
      <h1>Engineering Digital Systems With Precision and Elegance</h1>
      <button class="cssbuttons-io-button">
        Discover More
        <div class="icon">
          <svg viewBox="0 0 24 24" xmlns="http://www.w3.org/2000/svg">
            <path d="M0 0h24v24H0z" fill="none"></path>
            <path d="M11.9997 13.1716L7.04996 8.22186L5.63574 9.63607L11.9997 16L18.3637 9.63607L16.9495 8.22186L11.9997 13.1716Z" fill="currentColor"></path>
          </svg>
        </div>
      </button>
    </div>
  </section>
  <section class="section-2">
    <div class="page">
      <div class="wrap">
        <div class="timeline">
          <div class="wheel"></div>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">General Foundation</h3>
              <div class="body small-space">
                The General package is the ideal starting point for businesses that need a refined digital presence, a stable structure, and a premium user experience from day one.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box">
                <div class="muted">Package Scope</div>
                <div class="muted">• Core modules and admin tools</div>
                <div class="muted">• Responsive premium interface</div>
                <div class="muted">• Clean information architecture</div>
                <div class="muted">• Ready for launch</div>
                <div class="muted">• Built for future growth</div>
                <a class="link-row" href="#">
                  Download Resources
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Clean Workflow</h3>
              <div class="body small-space">
                Every part of the package is structured to keep daily operations smooth, organized, and easy to manage for both your team and your users.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Core Platform Features</h3>
              <div class="body small-space">
                This package includes the essential building blocks for a polished platform: dashboard access, content control, responsive pages, and a strong foundation for expansion.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box" style="padding-left:0;border-left:0;background:transparent;">
                <div class="muted">Why It Matters</div>
                <div class="body small-space">
                  A strong first release shapes trust. The General package delivers a clean, premium, and reliable experience that gives your brand a confident digital presence.
                </div>
                <a class="link-row" href="#">
                  <span class="play"></span>
                  <span>Watch the Video</span>
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Scalable Delivery</h3>
              <div class="body small-space">
                Built to grow with your business, the General package can later evolve into more advanced modules without losing its clarity, structure, or elegance.
              </div>
            </div>
          </article>
          <div class="scene" aria-hidden="true">
            <div class="books left1"></div>
            <div class="books left2"></div>
            <div class="books center"></div>
            <div class="books right2"></div>
            <div class="books right1"></div>
          </div>
        </div>
      </div>
    </div>
  </section>
@endsection