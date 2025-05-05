<!-- Footer Start -->
<footer class="text-center text-lg-start text-white" style="background-color: #ffcc00; margin-top:100px">
    <div class="container p-4">

      <!-- Grid row -->
      <div class="row">

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">About Us</h5>
          <p>
           Become a local pastry brand that is trusted by the community for its taste, quality, and excellent service.
          </p>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Products</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Pre Order</a></li>
            <li><a href="#" class="text-white">Paket Hampers</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Links</h5>
          <ul class="list-unstyled">
            <li><a href="#" class="text-white">Dashboard</a></li>
            <li><a href="#" class="text-white">About</a></li>
            <li><a href="#" class="text-white">Tentang RaraCookies</a></li>
          </ul>
        </div>
        <!-- Grid column -->

        <!-- Grid column -->
        <div class="col-lg-3 col-md-6 mb-4 mb-md-0">
          <h5 class="text-uppercase">Contact Us</h5>
          <ul class="list-unstyled">
            <li><p><i class="fas fa-envelope me-3"></i>ig: @rafarayacookies </p></li>
            <li><p><i class="fas fa-phone me-3"></i> wa: 089676368631 </p></li>
            <li><p><i class="fas fa-map-marker-alt me-3"></i> Jl. Ikan Cakalang No:27 </p></li>
          </ul>

          @if (Auth::check())
@else
<ul class="list-unstyled">
  <a href="{{ route('login_admin') }}">
    <button class="btn btn-warning">Admin?</button>
  </a>
</ul>
@endif
        </div>
        <!-- Grid column -->

      </div>
      <!-- Grid row -->
    </div>

    <div class="text-center p-3" style="background-color: rgba(0, 0, 0, 0.2);">
      © 2025 RaraCookies. All Rights Reserved.
    </div>
  </footer>
  <!-- Footer End -->
