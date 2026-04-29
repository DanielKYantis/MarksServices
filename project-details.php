<?php
declare(strict_types=1);
$pageKey = 'project-details.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Portfolio Details</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Project Details</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Project Details Section -->
    <section id="project-details" class="project-details section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="project-header" data-aos="zoom-in" data-aos-delay="200">
          <div class="row align-items-center">
            <div class="col-lg-6">
              <div class="project-banner">
                <img src="assets/img/construction/project-4.webp" alt="Residential repair and remodel work" class="img-fluid">
                <div class="banner-badge">
                  <span class="status-indicator">In Progress</span>
                </div>
              </div>
            </div>
            <div class="col-lg-6">
              <div class="project-summary">
                <div class="project-tags">
                  <span class="tag">Residential</span>
                  <span class="tag"><?= e(BUSINESS_AREA) ?></span>
                </div>
                <h1 class="main-title">Repair, Remodel &amp; Service Work</h1>
                <p class="summary-text">This portfolio page highlights the kind of coordinated home-service work Mark's Services supports: repairs, finish work, licensed trade tasks, and make-ready improvements.</p>

                <div class="key-metrics">
                  <div class="metric-row">
                    <div class="metric">
                      <span class="metric-title">Timeline</span>
                      <span class="metric-data">By scope</span>
                    </div>
                    <div class="metric">
                      <span class="metric-title">Service Area</span>
                      <span class="metric-data">Local</span>
                    </div>
                  </div>
                  <div class="metric-row">
                    <div class="metric">
                      <span class="metric-title">Budget</span>
                      <span class="metric-data">Quoted</span>
                    </div>
                    <div class="metric">
                      <span class="metric-title">Work Types</span>
                      <span class="metric-data">Multi-trade</span>
                    </div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="visual-showcase" data-aos="fade-up" data-aos-delay="300">
          <div class="showcase-grid">
            <div class="showcase-item large">
              <img src="assets/img/construction/project-10.webp" alt="Work in progress" class="img-fluid" loading="lazy">
              <div class="item-overlay">
                <span class="overlay-label">Work in Progress</span>
              </div>
            </div>
            <div class="showcase-item">
              <img src="assets/img/construction/project-2.webp" alt="Repair preparation" class="img-fluid" loading="lazy">
              <div class="item-overlay">
                <span class="overlay-label">Preparation</span>
              </div>
            </div>
            <div class="showcase-item">
              <img src="assets/img/construction/project-6.webp" alt="Interior Planning" class="img-fluid" loading="lazy">
              <div class="item-overlay">
                <span class="overlay-label">Interior Work</span>
              </div>
            </div>
            <div class="showcase-item tall">
              <img src="assets/img/construction/project-1.webp" alt="Finish detail" class="img-fluid" loading="lazy">
              <div class="item-overlay">
                <span class="overlay-label">Finish Detail</span>
              </div>
            </div>
          </div>
        </div>

        <div class="detailed-breakdown" data-aos="fade-up" data-aos-delay="400">
          <div class="row">
            <div class="col-lg-7">
              <div class="breakdown-content">
                <h3>Project Execution</h3>
                <p>Service work starts with understanding the issue, confirming the right trade path, and setting expectations for access, materials, and timing.</p>
                <p>For multi-trade scopes, Mark's Services keeps the estimate and scheduling conversation in one place so homeowners and property managers know what happens next.</p>

                <h3>Key Achievements</h3>
                <div class="achievement-list">
                  <div class="achievement-point">
                    <div class="achievement-marker">
                      <i class="bi bi-award"></i>
                    </div>
                    <div class="achievement-details">
                      <h5>Clear Scope</h5>
                      <p>Work is discussed up front so priorities, exclusions, and next steps are understood before the visit.</p>
                    </div>
                  </div>
                  <div class="achievement-point">
                    <div class="achievement-marker">
                      <i class="bi bi-shield-check"></i>
                    </div>
                    <div class="achievement-details">
                      <h5>Licensed Trade Support</h5>
                      <p>Electrical and plumbing scopes are backed by the licenses listed across the site.</p>
                    </div>
                  </div>
                  <div class="achievement-point">
                    <div class="achievement-marker">
                      <i class="bi bi-clock"></i>
                    </div>
                    <div class="achievement-details">
                      <h5>Practical Scheduling</h5>
                      <p>Appointments are planned around the access and sequencing needed for the work.</p>
                    </div>
                  </div>
                </div>
              </div>
            </div>
            <div class="col-lg-5">
              <div class="specifications-panel">
                <h4>Project Specifications</h4>
                <div class="spec-table">
                  <div class="spec-row">
                    <span class="spec-name">Property Type</span>
                    <span class="spec-detail">Residential / Small Property</span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Electrical</span>
                    <span class="spec-detail"><?= e(ELECTRICAL_LICENSE) ?></span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Plumbing</span>
                    <span class="spec-detail"><?= e(PLUMBING_LICENSE) ?></span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Remodeling</span>
                    <span class="spec-detail">Scope-based</span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Maintenance</span>
                    <span class="spec-detail">Punch-list support</span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Scheduling</span>
                    <span class="spec-detail">By appointment</span>
                  </div>
                  <div class="spec-row">
                    <span class="spec-name">Estimate</span>
                    <span class="spec-detail">After scope review</span>
                  </div>
                </div>

                <div class="progress-indicator">
                  <div class="progress-header">
                    <span class="progress-label">Scope Review</span>
                    <span class="progress-percentage">Start here</span>
                  </div>
                  <div class="progress-bar-container">
                    <div class="progress-bar" style="width: 100%"></div>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

        <div class="technical-gallery" data-aos="fade-up" data-aos-delay="500">
          <div class="gallery-header">
            <h3>Work Documentation</h3>
            <p>Photos and notes can be used to document scope, progress, and completion when helpful.</p>
          </div>
          <div class="row g-3">
            <div class="col-md-4">
              <div class="tech-item">
                <img src="assets/img/construction/project-12.webp" alt="Blueprint Review" class="img-fluid" loading="lazy">
                <div class="tech-caption">Scope Review</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tech-item">
                <img src="assets/img/construction/project-3.webp" alt="Quality Control" class="img-fluid" loading="lazy">
                <div class="tech-caption">Quality Check</div>
              </div>
            </div>
            <div class="col-md-4">
              <div class="tech-item">
                <img src="assets/img/construction/project-7.webp" alt="Final Installation" class="img-fluid" loading="lazy">
                <div class="tech-caption">Final Walkthrough</div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Project Details Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
