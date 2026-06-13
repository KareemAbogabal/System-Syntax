@extends("website.web.pages.benefits")

@section("title", "Special Request")

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
    <div class="shape" id="scene">
      <div class="overlay-glow"></div>
      <canvas id="dotsCanvas"></canvas>
    </div>
    <div class="content">
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
              <h3 class="title">Special Request</h3>
              <div class="body small-space">
                This package is designed for clients who need something beyond the standard structure, with features shaped around a specific business need, workflow, or internal process.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box">
                <div class="muted">What it includes</div>
                <div class="muted">• Custom modules and workflows</div>
                <div class="muted">• Advanced interface adjustments</div>
                <div class="muted">• Business-specific logic</div>
                <div class="muted">• Integration with existing systems</div>
                <div class="muted">• Flexible delivery phases</div>
                <a class="link-row" href="#">
                  Request a proposal
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Focused Engineering</h3>
              <div class="body small-space">
                Every request is handled with a clear development path, so the final result stays refined, practical, and aligned with the goal of the business.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Adapted To Your Needs</h3>
              <div class="body small-space">
                Whether the requirement involves a unique dashboard, custom automation, or a specialized internal tool, the structure is built to match the problem precisely.
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content box-content">
              <div class="box" style="padding-left:0;border-left:0;background:transparent;">
                <div class="muted">Why it matters</div>
                <div class="body small-space">
                  A tailored package gives your company the freedom to solve exact operational challenges while keeping the experience premium, controlled, and scalable.
                </div>
                <a class="link-row" href="#">
                  <span class="play"></span>
                  <span>View process</span>
                </a>
              </div>
            </div>
          </article>
          <article class="timeline-item article">
            <div class="content">
              <h3 class="title">Scalable By Design</h3>
              <div class="body small-space">
                The solution can evolve over time, allowing new modules, deeper integrations, and expanded functionality without losing the original structure.
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
  <script>
    let text = "Privileged Exception";
  </script>
@endsection