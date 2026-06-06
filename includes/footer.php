<?php
declare(strict_types=1) ?>
<footer id="footer" class="footer dark-background position-relative" data-section="footer">
  <div class="container footer-top">
    <div class="row gy-4">
      <div class="col-lg-5 col-md-12 footer-about">
        <a href="index.php" class="logo d-flex align-items-center">
          <span class="sitename"><?= e(SITE_NAME) ?></span>
        </a>
        <p>
          Local home services for Sun City and Berry Creek: handyman repairs, maintenance, and licensed electrical and plumbing.
          Clean work, clear scope, reliable scheduling.
        </p>
        <div class="mt-3">
          <p class="mb-1"><strong>Electrical:</strong> <?= e(
              ELECTRICAL_LICENSE
          ) ?></p>
          <p class="mb-0"><strong>Plumbing (RMP/Master):</strong> <?= e(
              PLUMBING_LICENSE
          ) ?></p>
        </div>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Site</h4>
        <ul>
          <li><a href="services.php">Services</a></li>
          <li><a href="projects.php">Projects</a></li>
          <li><a href="team.php">Team</a></li>
          <li><a href="about.php">About</a></li>
          <li><a href="contact.php">Contact</a></li>
        </ul>
      </div>

      <div class="col-lg-2 col-6 footer-links">
        <h4>Policies</h4>
        <ul>
          <li><a href="privacy.php">Privacy</a></li>
          <li><a href="terms.php">Terms</a></li>
          <li><a href="quote.php">Request a Quote</a></li>
        </ul>
      </div>

      <div class="col-lg-3 col-md-12 footer-contact text-center text-md-start">
        <h4>Contact</h4>
        <p>Sun City Home Repair</p>
        <p><?= e(BUSINESS_AREA_DETAIL) ?></p>
        <p class="mb-2">Client-location appointments only</p>
        <p class="mt-3 mb-1"><strong>Phone:</strong> <span><a href="tel:<?= e(
            BUSINESS_PHONE_TEL
        ) ?>"><?= e(BUSINESS_PHONE_DISPLAY) ?></a></span></p>
        <p class="mb-0"><strong>Email:</strong> <span><a href="mailto:<?= e(
            BUSINESS_EMAIL
        ) ?>"><?= e(BUSINESS_EMAIL) ?></a></span></p>
        <div class="mt-3 small"><strong>Serving:</strong> Sun City 78633 • Berry Creek 78628</div>
      </div>
    </div>
  </div>

  <div class="container copyright text-center mt-4">
    <p>© <span>Copyright</span> <strong class="px-1 sitename"><?= e(
        SITE_NAME
    ) ?></strong> <span>All Rights Reserved</span></p>
  </div>
</footer>

<a href="#" id="scroll-top" class="scroll-top d-flex align-items-center justify-content-center"><i class="bi bi-arrow-up-short"></i></a>
<div id="preloader"></div>

<script src="assets/vendor/bootstrap/js/bootstrap.bundle.min.js"></script>
<script src="assets/vendor/php-email-form/validate.js"></script>
<script src="assets/vendor/aos/aos.js"></script>
<script src="assets/vendor/swiper/swiper-bundle.min.js"></script>
<script src="assets/vendor/glightbox/js/glightbox.min.js"></script>
<script src="assets/js/main.js"></script>

</body>
</html>
