<?php
declare(strict_types=1);
$pageKey = 'about.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">About</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">About</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- About 2 Section -->
    <section id="about-2" class="about-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-right" data-aos-delay="200">
              <h2>Local Home Services for Sun City and Berry Creek</h2>
              <p class="lead">Mark's Services handles practical repair, maintenance, electrical, plumbing, and handyman work for homeowners and small properties.</p>
              <p>Every project starts with a clear scope and a real conversation about timing, access, materials, and the result you need. The goal is straightforward work done cleanly and communicated plainly.</p>
              <p>Mark Walbert brings 25+ years of contractor and home-repair experience, including 20 years previously licensed in electrical and plumbing. Those licenses are expired. Current regulated electrical and plumbing work is tied to Larry Kizer, Electrical Contractor TECL 20547, and James Pote (Jim) Bradford, Responsible Master Plumber M-38601.</p>

              <div class="achievement-boxes row g-4 mt-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="achievement-box">
                    <h3>2</h3>
                    <p>Licensed Trades</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-box">
                    <h3>4</h3>
                    <p>Core Services</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="500">
                  <div class="achievement-box">
                    <h3>TX</h3>
                    <p>Licensed Work</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="achievement-box">
                    <h3>Local</h3>
                    <p>Service Area</p>
                  </div>
                </div>
              </div>

              <div class="certifications mt-5" data-aos="fade-up" data-aos-delay="700">
                <h5>Licenses &amp; Credentials</h5>
                <div class="row g-3 align-items-center">
                  <div class="col-4 col-md-3">
                    <img src="assets/img/construction/badge-4.webp" alt="Certification" class="img-fluid">
                  </div>
                  <div class="col-4 col-md-3">
                    <img src="assets/img/construction/badge-3.webp" alt="Certification" class="img-fluid">
                  </div>
                  <div class="col-4 col-md-3">
                    <img src="assets/img/construction/badge-5.webp" alt="Certification" class="img-fluid">
                  </div>
                </div>
              </div>

              <div class="cta-container mt-5" data-aos="fade-up" data-aos-delay="800">
                <a href="quote.php" class="btn btn-primary">Request a Quote</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="about-image position-relative" data-aos="fade-left" data-aos-delay="200">
              <img src="assets/img/construction/project-3.webp" alt="Construction Team" class="img-fluid main-image rounded">
              <div class="image-overlay">
                <img src="assets/img/construction/project-7.webp" alt="Construction Project" class="img-fluid rounded">
              </div>
              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span>TX</span>
                <p>Licensed Trades</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About 2 Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
