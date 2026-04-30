<?php
declare(strict_types=1);
$pageKey = 'service-details.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Service Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Service Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Service Details Section -->
    <section id="service-details" class="service-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-lg-4 order-lg-2">
            <div class="service-sidebar" data-aos="fade-left" data-aos-delay="200">

              <div class="service-overview-card">
                <div class="service-icon">
                  <i class="bi bi-building"></i>
                </div>
                <h3>Home Service Work</h3>
                <p>Electrical, plumbing, handyman, home repair, and maintenance support for Sun City and Berry Creek Estates properties.</p>
                <div class="service-stats">
                  <div class="stat-item">
                    <span class="stat-number">2</span>
                    <span class="stat-label">Licensed Trades</span>
                  </div>
                  <div class="stat-item">
                    <span class="stat-number">2</span>
                    <span class="stat-label">Service Areas</span>
                  </div>
                </div>
              </div>

              <div class="quick-info-card">
                <h4>Project Information</h4>
                <div class="info-grid">
                  <div class="info-row">
                    <span class="label">Duration:</span>
                    <span class="value">By scope</span>
                  </div>
                  <div class="info-row">
                    <span class="label">Investment:</span>
                    <span class="value">Quoted</span>
                  </div>
                  <div class="info-row">
                    <span class="label">Permit Support:</span>
                    <span class="value">As needed</span>
                  </div>
                  <div class="info-row">
                    <span class="label">Warranty:</span>
                    <span class="value">Scope-based</span>
                  </div>
                </div>
              </div>

              <div class="contact-action-card">
                <h4>Ready to Start?</h4>
                <p class="contact-text">Talk through the scope, timing, and next step for your repair or improvement project.</p>
                <div class="contact-methods">
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="contact-btn">
                    <i class="bi bi-telephone-fill"></i>
                    <span>Call Now</span>
                  </a>
                  <a href="mailto:<?= e(BUSINESS_EMAIL) ?>" class="contact-btn">
                    <i class="bi bi-envelope-fill"></i>
                    <span>Email Us</span>
                  </a>
                </div>
                <a href="quote.php" class="btn btn-primary w-100 mt-3">Get Free Estimate</a>
              </div>

            </div><!-- End Service Sidebar -->
          </div>

          <div class="col-lg-8 order-lg-1">
            <div class="service-main-content">

              <div class="hero-section" data-aos="zoom-in" data-aos-delay="150">
                <img src="assets/img/construction/project-5.webp" alt="Home service and repair work" class="img-fluid">
                <div class="hero-overlay">
                  <div class="hero-badge">
                    <i class="bi bi-award"></i>
                    <span>Licensed &amp; Insured</span>
                  </div>
                </div>
              </div>

              <div class="content-section" data-aos="fade-up" data-aos-delay="200">
                <h1>Professional Home Service Support</h1>
                <div class="content-intro">
                  <p>Mark's Services handles the kinds of home and property tasks that need a licensed trade, a careful repair, or a coordinated punch-list visit.</p>
                  <p>Use this page as a starting point for electrical service, plumbing repairs, handyman work, home repair, water softener installation, maintenance, and make-ready work in the local service area.</p>
                </div>
              </div>

              <div class="capabilities-grid" data-aos="fade-up" data-aos-delay="250">
                <h2>Our Capabilities</h2>
                <div class="row g-4">
                  <div class="col-md-6">
                    <div class="capability-card">
                      <div class="capability-icon">
                        <i class="bi bi-building-gear"></i>
                      </div>
                      <h4>Electrical Service</h4>
                      <p>Troubleshooting, fixture changes, devices, circuits, and practical repairs backed by <?= e(ELECTRICAL_LICENSE) ?>.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="capability-card">
                      <div class="capability-icon">
                        <i class="bi bi-tools"></i>
                      </div>
                      <h4>Plumbing Repairs</h4>
                      <p>Leak response, fixture replacements, shutoffs, water heaters, and water softener installation backed by <?= e(PLUMBING_LICENSE) ?>.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="capability-card">
                      <div class="capability-icon">
                        <i class="bi bi-clipboard-check"></i>
                      </div>
                      <h4>Handyman &amp; Home Repair</h4>
                      <p>Doors, trim, drywall, fixtures, repairs, and finish work with clear scheduling and scope.</p>
                    </div>
                  </div>
                  <div class="col-md-6">
                    <div class="capability-card">
                      <div class="capability-icon">
                        <i class="bi bi-shield-check"></i>
                      </div>
                      <h4>Maintenance Visits</h4>
                      <p>Punch lists, make-ready work, and multi-trade tasks organized around one point of contact.</p>
                    </div>
                  </div>
                </div>
              </div>

              <div class="methodology-section" data-aos="fade-up" data-aos-delay="300">
                <h2>Our Methodology</h2>
                <div class="methodology-timeline">
                  <div class="timeline-item">
                    <div class="timeline-marker">
                      <span class="phase-number">1</span>
                    </div>
                    <div class="timeline-content">
                      <h4>Scope Review</h4>
                      <p>We start by reviewing the issue, access, measurements, photos when useful, and any code or permit considerations.</p>
                      <ul class="phase-features">
                        <li>Scope review and assessment</li>
                        <li>Material and access planning</li>
                        <li>Permit guidance when needed</li>
                      </ul>
                    </div>
                  </div>

                  <div class="timeline-item">
                    <div class="timeline-marker">
                      <span class="phase-number">2</span>
                    </div>
                    <div class="timeline-content">
                      <h4>Repair &amp; Installation</h4>
                      <p>Work is scheduled around the agreed scope, with attention to clean work areas, durable repairs, and clear communication.</p>
                      <ul class="phase-features">
                        <li>Work-area preparation</li>
                        <li>Repair or installation</li>
                        <li>Clean work-area practices</li>
                      </ul>
                    </div>
                  </div>

                  <div class="timeline-item">
                    <div class="timeline-marker">
                      <span class="phase-number">3</span>
                    </div>
                    <div class="timeline-content">
                      <h4>Trade Coordination</h4>
                      <p>When a job touches more than one discipline, the order of work is planned so the visit stays practical and efficient.</p>
                      <ul class="phase-features">
                        <li>Electrical and plumbing sequencing</li>
                        <li>Interior and exterior finish details</li>
                        <li>Progress checks as work is completed</li>
                      </ul>
                    </div>
                  </div>

                  <div class="timeline-item">
                    <div class="timeline-marker">
                      <span class="phase-number">4</span>
                    </div>
                    <div class="timeline-content">
                      <h4>Completion &amp; Follow-Up</h4>
                      <p>Before wrapping up, the completed work is reviewed and any remaining recommendations are communicated clearly.</p>
                      <ul class="phase-features">
                        <li>Final checks and cleanup</li>
                        <li>Photos or notes when useful</li>
                        <li>Next-step recommendations</li>
                      </ul>
                    </div>
                  </div>
                </div>
              </div>

            </div><!-- End Service Main Content -->
          </div>
        </div>

        <div class="portfolio-showcase mt-5" data-aos="fade-up" data-aos-delay="350">
          <div class="showcase-header text-center">
            <h2>Typical Service Work</h2>
            <p>Examples of the repair, maintenance, and improvement categories supported by Mark's Services.</p>
          </div>
          <div class="row g-4 mt-3">
            <div class="col-lg-6">
              <div class="project-showcase-item">
                <div class="project-image">
                  <img src="assets/img/construction/project-6.webp" alt="Interior repair and improvement work" class="img-fluid">
                  <div class="project-overlay">
                    <div class="project-info">
                      <h4>Interior Repairs</h4>
                      <p>Finish work and repair scopes for local homes and properties.</p>
                      <a href="assets/img/construction/project-6.webp" class="view-btn glightbox">
                        <i class="bi bi-eye"></i>
                      </a>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="row g-4">
                <div class="col-12">
                  <div class="project-showcase-item">
                    <div class="project-image">
                      <img src="assets/img/construction/project-7.webp" alt="Maintenance and make-ready work" class="img-fluid">
                      <div class="project-overlay">
                        <div class="project-info">
                          <h4>Maintenance Visits</h4>
                          <p>Punch lists, make-ready tasks, and repairs grouped into organized visits.</p>
                          <a href="assets/img/construction/project-7.webp" class="view-btn glightbox">
                            <i class="bi bi-eye"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
                <div class="col-12">
                  <div class="project-showcase-item">
                    <div class="project-image">
                      <img src="assets/img/construction/project-8.webp" alt="Licensed trade service work" class="img-fluid">
                      <div class="project-overlay">
                        <div class="project-info">
                          <h4>Licensed Trade Work</h4>
                          <p>Electrical and plumbing requests handled through the correct licensed path.</p>
                          <a href="assets/img/construction/project-8.webp" class="view-btn glightbox">
                            <i class="bi bi-eye"></i>
                          </a>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div><!-- End Portfolio Showcase -->

      </div>

    </section><!-- /Service Details Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
