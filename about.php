<?php
$page_title = "About - ConstructoPro";
$body_class = "about-page";
$active_page = "about";
include 'includes/header.php';
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
              <h2>Building Excellence Since 1995</h2>
              <p class="lead">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Proin gravida tortor in magna feugiat, quis faucibus libero commodo. Maecenas semper lacus vel leo ultrices, vel tempus lectus varius.</p>
              <p>Vestibulum ante ipsum primis in faucibus orci luctus et ultrices posuere cubilia curae; Nulla facilisi. Duis cursus nisi eu orci laoreet, vel molestie enim ullamcorper. Phasellus at convallis neque, id vehicula magna.</p>

              <div class="achievement-boxes row g-4 mt-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="achievement-box">
                    <h3>25+</h3>
                    <p>Years Experience</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-box">
                    <h3>500+</h3>
                    <p>Projects Completed</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="500">
                  <div class="achievement-box">
                    <h3>100%</h3>
                    <p>Client Satisfaction</p>
                  </div>
                </div>
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="achievement-box">
                    <h3>48</h3>
                    <p>Team Members</p>
                  </div>
                </div>
              </div>

              <div class="certifications mt-5" data-aos="fade-up" data-aos-delay="700">
                <h5>Certifications &amp; Partnerships</h5>
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
                <a href="about.php" class="btn btn-primary">Learn More About Us</a>
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
                <span>25+</span>
                <p>Years of Experience</p>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /About 2 Section -->

  </main>

<?php include 'includes/footer.php'; ?>
