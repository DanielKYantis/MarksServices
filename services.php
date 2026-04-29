<?php
declare(strict_types=1);
$pageKey = 'services.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Services</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Services</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Services 2 Section -->
    <section id="services-2" class="services-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">
          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="200">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-building"></i>
              </div>
              <h3>Electrical Service</h3>
              <p>Licensed troubleshooting, repairs, fixture upgrades, panels, circuits, and punch-list electrical work for homes and small properties.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Repairs &amp; diagnostics</span>
                <span><i class="bi bi-check-circle"></i> Fixtures &amp; devices</span>
                <span><i class="bi bi-check-circle"></i> <?= e(ELECTRICAL_LICENSE) ?></span>
              </div>
              <a href="service-details.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="300">
            <div class="service-card featured">
              <div class="service-badge">Most Requested</div>
              <div class="service-icon">
                <i class="bi bi-house"></i>
              </div>
              <h3>Plumbing Service</h3>
              <p>Licensed plumbing repairs, fixture replacements, shutoffs, water heater support, and leak response with clean work areas.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Leaks &amp; fixtures</span>
                <span><i class="bi bi-check-circle"></i> Water heaters</span>
                <span><i class="bi bi-check-circle"></i> <?= e(PLUMBING_LICENSE) ?></span>
              </div>
              <a href="service-details.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->

          <div class="col-lg-4" data-aos="fade-up" data-aos-delay="400">
            <div class="service-card">
              <div class="service-icon">
                <i class="bi bi-gear"></i>
              </div>
              <h3>Maintenance &amp; Make-Ready</h3>
              <p>Scheduled repair visits for homeowners, property managers, and make-ready lists that need one reliable point of contact.</p>
              <div class="service-features">
                <span><i class="bi bi-check-circle"></i> Punch lists</span>
                <span><i class="bi bi-check-circle"></i> Tenant turns</span>
                <span><i class="bi bi-check-circle"></i> Small repairs</span>
              </div>
              <a href="service-details.php" class="service-link">Learn More <i class="bi bi-arrow-right"></i></a>
            </div>
          </div><!-- End Service Item -->
        </div>

        <div class="row mt-5">
          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="service-image-block">
              <img src="assets/img/construction/project-1.webp" alt="Construction Services" class="img-fluid">
            </div>
          </div>

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="service-list-block">
              <h3>Additional Services</h3>
              <p>Mark's Services can combine trade work, repairs, and small remodel scopes into one organized visit or proposal.</p>

              <div class="service-list">
                <div class="service-list-item" data-aos="fade-up" data-aos-delay="100">
                  <div class="service-list-icon">
                    <i class="bi bi-rulers"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Remodeling &amp; Carpentry</h4>
                    <p>Trim, doors, built-ins, small renovations, and finish work for practical home improvements.</p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="200">
                  <div class="service-list-icon">
                    <i class="bi bi-calendar-check"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Scope Coordination</h4>
                    <p>Clear estimates, scheduling, and communication when a job touches more than one trade.</p>
                  </div>
                </div><!-- End Service List Item -->

                <div class="service-list-item" data-aos="fade-up" data-aos-delay="300">
                  <div class="service-list-icon">
                    <i class="bi bi-tools"></i>
                  </div>
                  <div class="service-list-content">
                    <h4>Repair Visits</h4>
                    <p>Focused service calls for repairs, adjustments, replacements, and finish-the-list tasks.</p>
                  </div>
                </div><!-- End Service List Item -->
              </div>
            </div>
          </div>
        </div>

        <div class="cta-container text-center mt-5" data-aos="fade-up" data-aos-delay="300">
          <h3>Ready to Plan the Work?</h3>
          <p>Send the details and Mark's Services will follow up with the best next step.</p>
          <a href="quote.php" class="btn btn-cta">Request a Free Quote</a>
        </div>

      </div>

    </section><!-- /Services 2 Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
