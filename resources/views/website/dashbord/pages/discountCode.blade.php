@extends("website.dashbord.main")

@section("title", "Discount Code")

@section("page")
  <section class="qr-code">
    <section class="card">
      <div class="content">
        <h2>Discount QR Code</h2>
        <p>Scan the code to unlock your offer.</p>
        <div class="qr-frame">
          <div id="qrCode" class="qr-holder" data-img="{{ asset("images/content/logo/logo-company.png") }}"></div>
        </div>
        <div class="discount-code">
          Coupon Code: <strong>LUX-15</strong>
        </div>
      </div>
    </section>
  </section>
  <script src="https://cdn.jsdelivr.net/npm/qr-code-styling@1.9.2/lib/qr-code-styling.js"></script>
  <script src="{{ asset("js/website/dashbord/pages/discountCode.js") }}"></script>
@endsection