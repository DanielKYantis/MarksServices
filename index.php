<?php
declare(strict_types=1);
$pageKey = 'index.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Hero Section -->
    <section id="hero" class="hero section">
      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center">

          <div class="col-lg-7">
            <div class="hero-content" data-aos="fade-right" data-aos-delay="200">
              <span class="subtitle">Licensed Plumbing, Electrical &amp; Handyman Services</span>
              <h1><?= e(BUSINESS_AREA) ?></h1>

              <p>
                Plumbing • Electrical • Handyman Repairs<br>
                Water Softeners • Maintenance • Punch Lists • Make-Ready
              </p>

              <div class="hero-buttons">
                <a href="quote.php" class="btn-primary">Request a Quote</a>
                <a href="projects.php" class="btn-secondary">Our Projects</a>
              </div>

              <div class="trust-badges">
                <div class="badge-item">
                  <i class="bi bi-geo-alt"></i>
                  <div class="badge-text">
                    <span class="count">Local</span>
                    <span class="label">Sun City 78633<br>Berry Creek Estates 78628</span>
                  </div>
                </div>
                <div class="badge-item">
                  <i class="bi bi-file-earmark-check"></i>
                  <div class="badge-text">
                    <span class="count">Licensed</span>
                    <span class="label">Plumber <?= e(PLUMBING_LICENSE) ?><br>Electrician <?= e(ELECTRICAL_LICENSE) ?></span>
                  </div>
                </div>
                <div class="badge-item">
                  <i class="bi bi-telephone"></i>
                  <div class="badge-text">
                    <span class="count"><?= e(BUSINESS_PHONE_DISPLAY) ?></span>
                    <span class="label">Call or Text</span>
                  </div>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-5" data-aos="fade-left" data-aos-delay="300">
            <div class="hero-image">
              <img src="assets/img/construction/showcase-3.webp" alt="Sun City and Berry Creek Estates home services team" class="img-fluid">
              <div class="image-badge">
                <span>Clean Work</span>
                <p>Reliable Scheduling</p>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Hero Section -->

    <!-- About Section -->
    <section id="about" class="about section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row align-items-center g-5">
          <div class="col-lg-6">
            <div class="about-content" data-aos="fade-right" data-aos-delay="200">

              <h2>Sun City Home Services Near Berry Creek Estates</h2>

              <p class="lead">
                Mark’s Services delivers dependable repairs, handyman help, and licensed trade work with clear communication
                and clean, respectful job sites.
              </p>

              <p>
                Whether you need a quick service call, a punch list knocked out, or a planned upgrade, we bring the right
                specialist to the job and keep you informed from estimate to final walkthrough. Sun City homeowners and
                Berry Creek Estates property owners count on us for reliable scheduling and quality workmanship.
              </p>

              <div class="achievement-boxes row g-4 mt-4">
                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="300">
                  <div class="achievement-box">
                    <h3 class="">Local</h3>
                    <p class="">Sun City 78633<br>Berry Creek Estates 78628<br>Client locations</p>
                  </div>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="400">
                  <div class="achievement-box">
                    <h3>Clear</h3>
                    <p>Written scope</p>
                  </div>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="500">
                  <div class="achievement-box">
                    <h3>Clean</h3>
                    <p>Respectful work</p>
                  </div>
                </div>

                <div class="col-6 col-md-3" data-aos="fade-up" data-aos-delay="600">
                  <div class="achievement-box">
                    <h3>Trusted</h3>
                    <p>Repeat clients</p>
                  </div>
                </div>
              </div>

              <div class="certifications mt-5" data-aos="fade-up" data-aos-delay="700">
                <h5>Licenses &amp; Credentials</h5>

                <!-- Replace placeholders below with your real license numbers.
                 Electrical contractor license should display as: TECL ######
                 Master plumber / RMP should display as: M-##### (or RMP identifier format used on your paperwork) -->
                <div class="row g-3 align-items-stretch">
                  <div class="col-12 col-md-4">
                    <div class="p-3 border rounded h-100">
                      <div class="d-flex gap-2 align-items-start">
                        <i class="bi bi-lightning-charge fs-4"></i>
                        <div>
                          <strong>Licensed Electrical</strong>
                          <div class="small">Electrical Contractor: <span><?= e(ELECTRICAL_LICENSE) ?></span></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="p-3 border rounded h-100">
                      <div class="d-flex gap-2 align-items-start">
                        <i class="bi bi-droplet fs-4"></i>
                        <div>
                          <strong>Licensed Plumbing</strong>
                          <div class="small">Responsible Master Plumber: <span><?= e(PLUMBING_LICENSE) ?></span></div>
                        </div>
                      </div>
                    </div>
                  </div>

                  <div class="col-12 col-md-4">
                    <div class="p-3 border rounded h-100">
                      <div class="d-flex gap-2 align-items-start">
                        <i class="bi bi-shield-check fs-4"></i>
                        <div>
                          <strong>Insurance &amp; Documentation</strong>
                          <div class="small">Certificate available with estimates and proposals</div>
                        </div>
                      </div>
                    </div>
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
              <img src="assets/img/construction/project-3.webp" alt="Sun City and Berry Creek Estates home service team" class="img-fluid main-image rounded">

              <div class="image-overlay">
                <img src="assets/img/construction/project-7.webp" alt="Home repair project in Berry Creek Estates Texas" class="img-fluid rounded">
              </div>

              <div class="experience-badge" data-aos="zoom-in" data-aos-delay="500">
                <span>Local</span>
                <p>Sun City 78633<br>Berry Creek Estates 78628<br>Client locations</p>
              </div>
            </div>
          </div>

        </div>

      </div>

    </section><!-- /About Section -->

    <!-- Services Section -->
    <section id="services" class="services section" data-section="services">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Services</h2>
        <p>Licensed electrical and plumbing, plus handyman repairs, water softener installation, and maintenance for Sun City and Berry Creek Estates homeowners.</p>
      </div>
      <!-- End Section Title -->

      <!-- Schema note:
       Site-wide JSON-LD is rendered in <head>. Keep visible service text aligned with the schema. -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5">

          <!-- Card 1 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="150">
            <div class="offering-card h-100">
              <div class="card-top">
                <img src="assets/img/construction/project-3.webp" class="img-fluid" alt="Handyman and home repair service in Sun City and Berry Creek Estates, Texas">
                <div class="icon-badge"><i class="bi bi-hammer"></i></div>
              </div>
              <div class="card-body-content">
                <h3>Handyman &amp; Home Repair</h3>
                <p>Doors, trim, drywall repair, fixtures, and practical punch-list help designed for Sun City and Berry Creek Estates homes.</p>
                <ul class="highlights">
                  <li><i class="bi bi-shield-check"></i> Written scope and clean work areas</li>
                  <li><i class="bi bi-shield-check"></i> Aging-in-place friendly repairs</li>
                  <li><i class="bi bi-shield-check"></i> Punch lists and small jobs welcome</li>
                </ul>
                <a class="explore-link" href="services.php">Explore Details <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 2 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="200">
            <div class="offering-card h-100">
              <div class="card-top">
                <img src="assets/img/construction/project-1.webp" class="img-fluid" alt="Licensed electrician services in Sun City and Berry Creek Estates, Texas">
                <div class="icon-badge"><i class="bi bi-lightning-charge"></i></div>
              </div>
              <div class="card-body-content">
                <h3>Licensed Electrical</h3>
                <p>Service calls, lighting, ceiling fans, outlets, and troubleshooting—safety-first and code-compliant.</p>
                <ul class="highlights">
                  <li><i class="bi bi-shield-check"></i> License: <strong><?= e(ELECTRICAL_LICENSE) ?></strong> </li>
                  <li><i class="bi bi-shield-check"></i> Clear estimate before work begins</li>
                  <li><i class="bi bi-shield-check"></i> Senior-friendly lighting upgrades</li>
                </ul>
                <a class="explore-link" href="services.php">Explore Details <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 3 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="250">
            <div class="offering-card h-100">
              <div class="card-top">
                <img src="assets/img/construction/project-7.webp" class="img-fluid" alt="Licensed plumbing services in Sun City and Berry Creek Estates, Texas">
                <div class="icon-badge"><i class="bi bi-droplet"></i></div>
              </div>
              <div class="card-body-content">
                <h3>Licensed Plumbing</h3>
                <p>Leaks, fixtures, water heaters, water softeners, shutoffs, and repairs—done neatly with durability in mind.</p>
                <ul class="highlights">
                  <li><i class="bi bi-shield-check"></i> RMP/Master: <strong><?= e(PLUMBING_LICENSE) ?></strong> </li>
                  <li><i class="bi bi-shield-check"></i> Water heater and softener installation</li>
                  <li><i class="bi bi-shield-check"></i> Fast response for active leaks</li>
                </ul>
                <a class="explore-link" href="services.php">Explore Details <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

          <!-- Card 4 -->
          <div class="col-lg-3 col-md-6" data-aos="zoom-in" data-aos-delay="300">
            <div class="offering-card h-100">
              <div class="card-top">
                <img src="assets/img/construction/project-5.webp" class="img-fluid" alt="Maintenance, punch lists, and make-ready services in Sun City and Berry Creek Estates, Texas">
                <div class="icon-badge"><i class="bi bi-house-gear"></i></div>
              </div>
              <div class="card-body-content">
                <h3>Maintenance &amp; Make-Ready</h3>
                <p>Service calls, tenant turns, punch lists, minor repairs, and “finish-the-list” visits for homeowners and property managers.</p>
                <ul class="highlights">
                  <li><i class="bi bi-shield-check"></i> Scheduled windows that respect your day</li>
                  <li><i class="bi bi-shield-check"></i> Photos on request for remote owners</li>
                  <li><i class="bi bi-shield-check"></i> One vendor for multi-trade tasks</li>
                </ul>
                <a class="explore-link" href="quote.php">Explore Details <i class="bi bi-chevron-right"></i></a>
              </div>
            </div>
          </div>

        </div>

        <!-- Bottom Banner -->
        <div class="bottom-banner" data-aos="fade-up" data-aos-delay="400">
          <div class="row align-items-center">
            <div class="col-lg-8">
              <h4>Need help in Sun City or Berry Creek Estates?</h4>
              <p>Request a quote for service calls, repairs, water softener work, or punch lists. Clear scope, clean work, and reliable scheduling.</p>
            </div>
            <div class="col-lg-4">
              <div class="banner-actions">
                <a class="action-primary" href="quote.php">Request a Quote</a>
                <a class="action-outline" href="projects.php">Browse Projects</a>
              </div>
            </div>
          </div>
        </div>
        <!-- End Bottom Banner -->

      </div>
    </section><!-- /Services Section -->

    <!-- Testimonials Section -->
    <section id="testimonials" class="testimonials section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row">
          <div class="col-12">
            <div class="testimonials-container">
              <div class="swiper testimonials-slider init-swiper" data-aos="fade-up" data-aos-delay="400">
                <script type="application/json" class="swiper-config">
                  {
                    "loop": true,
                    "speed": 600,
                    "autoplay": {
                      "delay": 5000
                    },
                    "slidesPerView": 1,
                    "spaceBetween": 30,
                    "pagination": {
                      "el": ".swiper-pagination",
                      "type": "bullets",
                      "clickable": true
                    },
                    "breakpoints": {
                      "768": {
                        "slidesPerView": 2
                      },
                      "992": {
                        "slidesPerView": 3
                      }
                    }
                  }
                </script>

                <div class="swiper-wrapper">
                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Clear scope comes first: the team confirms what needs attention, what can be handled in one visit, and what needs a quoted follow-up.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-f-1.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Scope Review</h3>
                          <h4>Before the visit</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        Electrical and plumbing requests are routed through the licensed trade path so repairs and replacements are handled appropriately.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-m-2.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Licensed Trades</h3>
                          <h4>Electrical &amp; plumbing</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-half"></i>
                      </div>
                      <p>
                        Work areas are treated with care, and the plan is communicated before materials, access, or scheduling affects the job.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-f-3.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Clean Work</h3>
                          <h4>Respect for the home</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                  <div class="swiper-slide">
                    <div class="testimonial-item">
                      <div class="stars">
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                        <i class="bi bi-star-fill"></i>
                      </div>
                      <p>
                        For punch lists and make-ready work, the priority is an organized visit with practical next steps and clear follow-up.
                      </p>
                      <div class="testimonial-profile">
                        <img src="assets/img/person/person-m-4.webp" alt="Reviewer" class="img-fluid rounded-circle">
                        <div>
                          <h3>Follow-Up</h3>
                          <h4>Scheduling &amp; notes</h4>
                        </div>
                      </div>
                    </div>
                  </div><!-- End testimonial item -->

                </div>
                <div class="swiper-pagination"></div>
              </div>
            </div>
          </div>
        </div>

      </div>
    </section><!-- /Testimonials Section -->

    <!-- Certifications Section -->
    <section id="certifications" class="certifications section" data-section="credentials">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Licenses &amp; Credentials</h2>
        <p>License numbers are shown on relevant pages, estimates, and invoices for transparency and verification.</p>
      </div>
      <!-- End Section Title -->

      <!-- JSON-LD placement note:
       Place the business/service-area JSON-LD once site-wide (in <head>).
       The hasCredential entries MUST match the visible license text shown below. -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row align-items-center mb-5 content">
          <div class="col-lg-6" data-aos="fade-right" data-aos-delay="200">
            <h2>Verify before you hire</h2>
            <p>
              We encourage homeowners—especially in Sun City—to verify trade licenses and insurance.
              Electrical contractor licenses in Texas use the <strong>TECL</strong> prefix.
              Responsible Master Plumber (RMP) / Master Plumber license numbers begin with <strong>M</strong>.
            </p>

            <div class="mt-3">
              <a class="btn btn-outline-primary btn-sm me-2" href="https://www.tdlr.texas.gov/verify.htm" target="_blank" rel="noopener">
                Verify Electrical (TDLR)
              </a>
              <a class="btn btn-outline-primary btn-sm" href="https://vo.licensing.hpc.texas.gov/datamart/selSearchType.do" target="_blank" rel="noopener">
                Verify Plumbing (TSBPE Public Search)
              </a>
            </div>

            <p class="small mt-3 mb-0">
              <!-- TODO: optionally link to a dedicated Licenses & Insurance page once created -->
              Need documentation for a proposal? We can provide insurance certificates upon request.
            </p>
          </div>

          <div class="col-lg-6" data-aos="fade-left" data-aos-delay="300">
            <div class="badge-highlight">
              <img src="assets/img/construction/badge-5.webp" class="img-fluid" alt="Licensed and insured home services in Sun City and Berry Creek Estates">
              <div class="badge-content">
                <h4>Credential-first service</h4>
                <p class="mb-0">Clear license disclosure, clean work, and written scope—built for homeowner confidence.</p>
              </div>
            </div>
          </div>
        </div>

        <div class="certification-grid" data-aos="fade-up" data-aos-delay="400">

          <div class="cert-card" data-aos="flip-left" data-aos-delay="100">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-1.webp" class="img-fluid" alt="Texas electrical contractor license">
            </div>
            <div class="cert-details">
              <h5>Texas Electrical Contractor</h5>
              <span class="cert-category">License Disclosure</span>
              <p><strong><?= e(ELECTRICAL_LICENSE) ?></strong></p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="150">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-4.webp" class="img-fluid" alt="Texas master plumber license">
            </div>
            <div class="cert-details">
              <h5>Responsible Master Plumber</h5>
              <span class="cert-category">License Disclosure</span>
              <p><strong><?= e(PLUMBING_LICENSE) ?></strong></p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="200">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-3.webp" class="img-fluid" alt="Insurance documentation available">
            </div>
            <div class="cert-details">
              <h5>Insurance Documentation</h5>
              <span class="cert-category">On Request</span>
              <p>General liability / COI available with proposals. <!-- TODO: add real policy limits if you want them public --></p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="250">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-2.webp" class="img-fluid" alt="Sun City and Berry Creek Estates service area">
            </div>
            <div class="cert-details">
              <h5>Local Service Area</h5>
              <span class="cert-category">Sun City • Berry Creek Estates</span>
              <p>Focused scheduling and communication for Sun City 78633 and Berry Creek Estates 78628 homeowners.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="300">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-5.webp" class="img-fluid" alt="Written estimates and scope">
            </div>
            <div class="cert-details">
              <h5>Written Scope</h5>
              <span class="cert-category">Clarity</span>
              <p>Clear deliverables and options so you can approve the work confidently.</p>
            </div>
          </div>

          <div class="cert-card" data-aos="flip-left" data-aos-delay="350">
            <div class="cert-icon">
              <img src="assets/img/construction/badge-1.webp" class="img-fluid" alt="Clean jobsite practices">
            </div>
            <div class="cert-details">
              <h5>Clean Jobsite Practices</h5>
              <span class="cert-category">Respect</span>
              <p>We protect surfaces, clean up daily when needed, and leave your home ready to use.</p>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Certifications Section -->

    <!-- Projects Section -->
    <section id="projects" class="projects section" data-section="projects">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Projects</h2>
        <p>Recent work in Sun City and Berry Creek Estates—repairs, upgrades, and service calls completed with clean execution and clear communication.</p>
      </div>
      <!-- End Section Title -->

      <!-- Schema note:
       Treat these as case studies. Later, add structured data on the project detail page
       (WebPage + ImageObject + optional Service references). Keep claims verifiable. -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-4">

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-3.webp" class="img-fluid" alt="Sun City bathroom safety refresh project">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Aging-in-Place</div>
                <h4 class="project-title">Sun City Bathroom Safety Refresh</h4>
                <p class="project-description">Targeted upgrades for safer daily use: fixtures, lighting, and practical improvements that reduce slip and fall risk.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Sun City, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> 1–2 days</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="150">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-1.webp" class="img-fluid" alt="Ceiling fan and lighting upgrade in Berry Creek Estates Texas">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Electrical</div>
                <h4 class="project-title">Lighting &amp; Ceiling Fan Upgrade</h4>
                <p class="project-description">Improved comfort and visibility with safe installs and clean finishes.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Berry Creek Estates, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> Same day</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-7.webp" class="img-fluid" alt="Water heater replacement project in Sun City, Texas">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Plumbing</div>
                <h4 class="project-title">Water Heater Replacement + Shutoff Upgrade</h4>
                <p class="project-description">Replacement with tidy piping, improved shutoff reliability, and a clean jobsite handoff.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Sun City, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> Same day</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="250">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-5.webp" class="img-fluid" alt="Door, trim, and hardware update in Berry Creek Estates TX">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Carpentry</div>
                <h4 class="project-title">Doors, Trim &amp; Hardware Refresh</h4>
                <p class="project-description">Fit, finish, and function improvements—small changes that make daily living smoother.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Berry Creek Estates, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> 1–2 days</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-6.webp" class="img-fluid" alt="Make-ready punch list project in Berry Creek Estates Texas">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Make-Ready</div>
                <h4 class="project-title">Tenant Turn Punch List</h4>
                <p class="project-description">Coordinated multi-trade fixes (minor repairs, replacements, adjustments) to get a property ready fast.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Berry Creek Estates, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> 1–3 days</span>
                </div>
              </div>
            </div>
          </div>

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="350">
            <div class="project-card">
              <div class="project-image">
                <img src="assets/img/construction/project-2.webp" class="img-fluid" alt="Sun City safety and comfort upgrade planning">
                <div class="project-overlay">
                  <div class="project-status completed">Completed</div>
                  <div class="project-actions">
                    <a class="btn-project" href="project-details.php">View Details</a>
                  </div>
                </div>
              </div>
              <div class="project-info">
                <div class="project-category">Home Improvements</div>
                <h4 class="project-title">Sun City Comfort &amp; Safety Upgrades</h4>
                <p class="project-description">Practical improvements prioritized for comfort, safety, and low-disruption installation.</p>
                <div class="project-meta">
                  <span class="location"><i class="bi bi-geo-alt"></i> Sun City, TX</span>
                  <span class="timeline"><i class="bi bi-calendar"></i> Varies</span>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="450">
          <a href="projects.php" class="btn btn-primary">View All Projects</a>
        </div>
      </div>
    </section><!-- /Projects Section -->

    <!-- Team Section -->
    <section id="team" class="team section" data-section="team">
      <!-- Section Title -->
      <div class="container section-title">
        <h2>Team</h2>
        <p>Local pros serving Sun City and Berry Creek Estates with licensed trade work and clean, respectful job sites.</p>
      </div>
      <!-- End Section Title -->

      <!-- Schema note:
       If you later add Person schema for staff, only include what you display on-page.
       Do not add credentials in schema without also showing them visibly. -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row gy-5 align-items-stretch">

          <!-- Member 1 -->
          <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-delay="150">
            <div class="crew-member primary-member">
              <div class="member-portrait">
                <img src="assets/img/construction/team-5.webp" class="img-fluid" alt="Contractor serving Sun City and Berry Creek Estates Texas">
                <div class="years-tag">Expert</div>
              </div>
              <div class="member-body">
                <h4>Mark Walbert</h4>
                <span class="role">Handyman &amp; Home Repair Expert</span>
                <p>Detail-first repairs: doors, trim, drywall, fixtures, punch lists, and practical upgrades.</p>
                <div class="badge-row">
                  <span class="cert-badge"><i class="bi bi-hammer"></i> Carpentry</span>
                  <span class="cert-badge"><i class="bi bi-house-gear"></i>Expert</span>
                </div>

                <div class="contact-row">
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" aria-label="Call"><i class="bi bi-telephone-fill"></i></a>
                  <a href="mailto:<?= e(BUSINESS_EMAIL) ?>" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Member 2 -->
          <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-delay="200">
            <div class="crew-member primary-member">
              <div class="member-portrait">
                <img src="assets/img/construction/team-2.webp" class="img-fluid" alt="Lead electrician serving Sun City and Berry Creek Estates Texas">
                <div class="years-tag">Licensed</div>
              </div>
              <div class="member-body">
                <h4>Larry Kizer</h4>
                <span class="role">Licensed Electrician</span>
                <p>Service calls and upgrades with a safety-first approach—lighting, ceiling fans, outlets, and troubleshooting.</p>
                <div class="badge-row">
                  <span class="cert-badge"><i class="bi bi-lightning-charge"></i> Electrical</span>
                  <span class="cert-badge"><i class="bi bi-file-earmark-check"></i> <?= e(ELECTRICAL_LICENSE) ?></span>
                </div>

                <div class="contact-row">
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" aria-label="Call"><i class="bi bi-telephone-fill"></i></a>
                  <a href="mailto:<?= e(BUSINESS_EMAIL) ?>" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

          <!-- Member 3 -->
          <div class="col-lg-4 col-md-4" data-aos="zoom-in" data-aos-delay="250">
            <div class="crew-member primary-member">
              <div class="member-portrait">
                <img src="assets/img/construction/team-1.webp" class="img-fluid" alt="Licensed plumber serving Sun City and Berry Creek Estates Texas">
                <div class="years-tag">Licensed</div>
              </div>
              <div class="member-body">
                <h4>James Pote (Jim) Bradford</h4>
                <span class="role">Responsible Master Plumber</span>
                <p>Repairs, fixtures, water heaters, and water softeners with clean execution and dependable results.</p>
                <div class="badge-row">
                  <span class="cert-badge"><i class="bi bi-droplet"></i> Plumbing</span>
                  <span class="cert-badge"><i class="bi bi-file-earmark-check"></i> <?= e(PLUMBING_LICENSE) ?><!-- TODO --></span>
                </div>

                <div class="contact-row">
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" aria-label="Call"><i class="bi bi-telephone-fill"></i></a>
                  <a href="mailto:<?= e(BUSINESS_EMAIL) ?>" aria-label="Email"><i class="bi bi-envelope-fill"></i></a>
                </div>
              </div>
            </div>
          </div>

        </div>

        <div class="text-center mt-4" data-aos="fade-up" data-aos-delay="350">
          <a href="team.php" class="btn btn-primary">Meet the Full Team</a>
        </div>
      </div>
    </section><!-- /Team Section -->

    <!-- Call To Action Section -->
    <section id="call-to-action" class="call-to-action section light-background" data-section="cta">
      <!-- CTA note:
       This form should send leads to your CRM/email. Keep fields minimal to improve conversion.
       Add spam protection (reCAPTCHA/turnstile) if you publish the form publicly. -->

      <div class="container" data-aos="fade-up" data-aos-delay="100">
        <div class="row g-5 align-items-center">

          <div class="col-lg-6">
            <div class="cta-hero-content" data-aos="fade-right" data-aos-delay="200">
              <div class="badge-wrapper">
                <span class="cta-badge">
                  <i class="bi bi-geo-alt"></i>
                  Sun City &amp; Berry Creek Estates Service Area
                </span>
              </div>

              <h2>Request a Quote or Service Call</h2>

              <p>
                Tell us what you need and where you’re located. We’ll confirm scope, schedule, and next steps.
                Licensed trade work is identified by license number on the relevant estimate and invoice.
              </p>

              <div class="feature-highlights">
                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <div>
                    <h5>Clear scope</h5>
                    <p class="mb-0">Written estimate before work begins.</p>
                  </div>
                </div>

                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <div>
                    <h5>License disclosure</h5>
                    <p class="mb-0">Electrical: <?= e(ELECTRICAL_LICENSE) ?> • Plumbing: <?= e(PLUMBING_LICENSE) ?><!-- TODO replace --></p>
                  </div>
                </div>

                <div class="highlight-item">
                  <i class="bi bi-check-circle-fill"></i>
                  <div>
                    <h5>Sun City-friendly scheduling</h5>
                    <p class="mb-0">Reliable windows and clear communication.</p>
                  </div>
                </div>
              </div>

              <div class="mt-4">
                <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="btn btn-primary me-2">Call <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
                <a href="projects.php" class="btn btn-outline-primary">View Projects</a>
              </div>
            </div>
          </div>

          <div class="col-lg-6">
            <div class="cta-form-section" data-aos="fade-left" data-aos-delay="300">
              <div class="form-container">
                <div class="form-header">
                  <h3>Request Your Free Quote</h3>
                  <p>Get started with your next construction project today</p>
                </div>

                <form action="forms/quote.php" method="post" class="php-email-form">
                  <div class="row g-3">
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="text" name="name" class="form-control" placeholder="Your Name" required="">
                      </div>
                    </div>
                    <div class="col-md-6">
                      <div class="form-group">
                        <input type="email" name="email" class="form-control" placeholder="Your Email" required="">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <input type="tel" name="phone" class="form-control" placeholder="Phone Number" required="">
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <select name="type" class="form-control" required="">
                          <option value="">Select Service Type</option>
                          <option value="electrical">Electrical Service Call</option>
                          <option value="plumbing">Plumbing Service Call</option>
                          <option value="home-repair">Handyman / Home Repair</option>
                          <option value="maintenance">Maintenance / Punch List</option>
                          <option value="other">Other</option>
                        </select>
                      </div>
                    </div>
                    <div class="col-12">
                      <div class="form-group">
                        <textarea name="message" class="form-control" rows="4" placeholder="Project Details" required=""></textarea>
                      </div>
                    </div>
                  </div>

                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your quote request has been sent. Thank you!</div>

                  <div class="form-actions">
                    <button type="submit" class="btn btn-primary">
                      <i class="bi bi-send"></i>
                      Send Quote Request
                    </button>

                    <div class="contact-alternative">
                      <span>Service-area business • Appointments only • No walk-ins</span>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="phone-link">
                        <i class="bi bi-telephone-fill"></i>
                        <?= e(BUSINESS_PHONE_DISPLAY) ?>
                      </a>
                    </div>
                  </div>
                </form>
              </div>
            </div>
          </div>

        </div>
      </div>
    </section><!-- /Call To Action Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
