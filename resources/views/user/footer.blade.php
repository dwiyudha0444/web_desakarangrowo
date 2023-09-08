<!-- ======= Footer ======= -->
<footer id="footer" class="footer">

    <div class="container">
      <div class="row gy-4">
        <div class="col-lg-6 col-md-12 footer-info">
          <a href="index.html" class="logo d-flex align-items-center">
            <span>Desa Karangrowo</span>
          </a>
          <p>Website desa dibangun dengan tujuan sebagai media pelayanan publik resmi desa, yang dibangun dan dikelola oleh tim desa setempat. Dengan memanfaatkan website penyelenggaraan pelayanan publik dapat dilakukan secara cepat dan mudah</p>
          {{-- <div class="social-links d-flex mt-4">
            <a href="#" class="twitter"><i class="bi bi-twitter"></i></a>
            <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
            <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
            <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
          </div> --}}
        </div>

        <div class="col-lg-3 col-6 footer-links">
          <h4>Useful Links</h4>
          <ul>
            <li><a href="{{ url('/home') }}">Home</a></li>
            <li><a href="{{ url('/home#berita') }}">Berita</a></li>
            <li><a href="{{ url('/home#visimisi') }}">Visi dan Misi</a></li>
            <li><a href="{{ url('/home#anggota') }}">Struktur</a></li>
          </ul>
        </div>

        <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
          <h4>Contact Us</h4>
          <p>
            A108 Adam Street <br>
            New York, NY 535022<br>
            United States <br><br>
            <strong>Phone:</strong> +1 5589 55488 55<br>
            <strong>Email:</strong> info@example.com<br>
          </p>

        </div>

      </div>
    </div>

    <div class="container mt-4">
      <div class="copyright">
        &copy; Copyright <strong><span>KKN UMK 2023</span></strong>. All Rights Reserved
      </div>
    </div>

  </footer><!-- End Footer -->
  <!-- End Footer -->

  <a href="#" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>

  <div id="preloader"></div>

  <!-- Vendor JS Files -->
  <script src="{{ asset('client/assets/vendor/bootstrap/js/bootstrap.bundle.min.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/aos/aos.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/glightbox/js/glightbox.min.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/purecounter/purecounter_vanilla.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/swiper/swiper-bundle.min.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/isotope-layout/isotope.pkgd.min.js') }}"></script>
  <script src="{{ asset('client/assets/vendor/php-email-form/validate.js') }}"></script>

  <!-- Template Main JS File -->
  <script src="{{ asset('client/assets/js/main.js') }}"></script>

</body>

</html>