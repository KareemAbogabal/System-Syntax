@extends("website.web.pages.benefits")

@section("title", "Bespoke")

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
      <h1>Exclusive Systems Crafted For Distinguished Brands</h1>
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
              <h3 class="title">Bespoke Experience</h3>
              <div class="body small-space">
                The Bespoke package is created for clients who expect a fully unique digital product, designed from the ground up with no compromise on detail, identity, or performance.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box">
                <div class="muted">What defines it</div>
                <div class="muted">• Fully custom architecture</div>
                <div class="muted">• Premium interface direction</div>
                <div class="muted">• Strategic user experience design</div>
                <div class="muted">• High-end integrations</div>
                <div class="muted">• Designed around your brand</div>
                <a class="link-row" href="#">
                  Start a bespoke brief
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Created Around Identity</h3>
              <div class="body small-space">
                Every detail is shaped to reflect the personality of the brand, from the structure and interactions to the way the system feels in use.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Precision At The Highest Level</h3>
              <div class="body small-space">
                Bespoke work is not about adjusting an existing package. It is about designing a refined digital environment that serves a very specific vision.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box" style="padding-left:0;border-left:0;background:transparent;">
                <div class="muted">Why it matters</div>
                <div class="body small-space">
                  A bespoke solution gives your company the presence of a premium product and the control of a system built exclusively for its own goals and standards.
                </div>
                <a class="link-row" href="#">
                  <span class="play"></span>
                  <span>See the vision</span>
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Built For Long-Term Distinction</h3>
              <div class="body small-space">
                The result is a timeless digital platform that can grow with the brand while preserving exclusivity, elegance, and technical strength.
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