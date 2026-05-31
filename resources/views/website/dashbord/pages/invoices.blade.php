@extends("website.dashbord.main")

@section("title", "Invoices")

@section("page")
  <div class="invoice">
    <div class="topbar">
      <div class="brand">
        <h1>Due Invoices</h1>
        <p>A luxury invoice page for uploading the contract and tracking project operations in one refined view.</p>
      </div>
      <div class="badge"><span class="dot"></span> Secure Billing Center</div>
    </div>
    <section class="card upload-card">
      <div class="upload-grid">
        <div class="upload-copy">
          <h2>Upload the contract and keep billing organized</h2>
          <p>
            This card is built for a premium client dashboard. It gives you a clean space to upload the contract,
            review the invoice status, and keep every financial action aligned with the project workflow.
          </p>
          <div class="meta-row">
            <span class="chip"><strong>Due:</strong> $4,200</span>
            <span class="chip"><strong>Status:</strong> Pending</span>
            <span class="chip"><strong>Next Check:</strong> 12 Apr 2026</span>
          </div>
        </div>
        <div class="dropzone">
          <div class="dropzone-inner">
            <div class="upload-icon" aria-hidden="true">
              <svg viewBox="0 0 24 24">
                <path d="M12 4V15" />
                <path d="M8 11l4 4 4-4" />
                <path d="M5 20h14" />
              </svg>
            </div>
            <div>
              <h3>Download File</h3>
              <p>PDF</p>
            </div>
            <div class="btn-row">
              <a class="btn btn-primary" href="#">Download Invoice</a>
            </div>
          </div>
        </div>
      </div>
    </section>
    <section class="card table-card">
      <div class="section-title">
        <div>
          <h3>Project Operations Log</h3>
          <p>Track who worked on the project, what was done, and how much was paid.</p>
        </div>
        <div class="badge" style="box-shadow:none;">Recent Activity</div>
      </div>
      <x-components::table :header="['Name', 'Role', 'Operation', 'Amount', 'Status', 'Date']">
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
        <div class="row">
          <p class="search">Kareem</p>
          <p>front end</p>
          <p>Invoice Panel Layout</p>
          <p>$300</p>
          <p data-state="finished">finished</p>
          <p>01 Apr 2026</p>
        </div>
      </x-components::table>
      <div class="footer-note">
        This page is intentionally simple and elegant, so it can fit directly into a luxury client dashboard without visual clutter.
      </div>
    </section>
  </div>
  <script src="{{ asset("js/website/dashbord/pages/invoices.js") }}"></script>
@endsection