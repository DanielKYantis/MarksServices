<?php
declare(strict_types=1);
$pageKey = 'team.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Team</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Team</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Team 2 Section -->
    <section id="team-2" class="team-2 section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row gy-4">

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-card featured">
              <div class="team-header">
                <div class="team-image">
                  <img src="assets/img/favicon/logo_master_enhanced.png" class="img-fluid team-identity-logo" alt="Mark's Services logo">
                  <div class="experience-badge">Verified</div>
                </div>
                <div class="team-info">
                  <h4><?= e(ELECTRICAL_LICENSE_HOLDER) ?></h4>
                  <span class="position">Electrical Contractor <?= e(ELECTRICAL_LICENSE) ?></span>
                  <div class="contact-info">
                    <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i> <?= e(BUSINESS_EMAIL) ?></a>
                    <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i> <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
                  </div>
                </div>
              </div>
              <div class="team-details">
                <p>Electrical scopes are reviewed for safety, access, materials, and the right repair path before work begins.</p>
                <div class="credentials">
                  <div class="cred-item">
                    <i class="bi bi-award"></i>
                    <span>Electrical Contractor</span>
                  </div>
                  <div class="cred-item">
                    <i class="bi bi-shield-check"></i>
                    <span><?= e(ELECTRICAL_LICENSE) ?></span>
                  </div>
                </div>
                <div class="social-links">
                  <a href="contact.php"><i class="bi bi-envelope"></i></a>
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                  <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Featured Team Member -->

          <div class="col-lg-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card featured">
              <div class="team-header">
                <div class="team-image">
                  <img src="assets/img/favicon/logo_master_enhanced.png" class="img-fluid team-identity-logo" alt="Mark's Services logo">
                  <div class="experience-badge">Verified</div>
                </div>
                <div class="team-info">
                  <h4><?= e(PLUMBING_LICENSE_HOLDER) ?></h4>
                  <span class="position">Responsible Master Plumber <?= e(PLUMBING_LICENSE) ?></span>
                  <div class="contact-info">
                    <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i> <?= e(BUSINESS_EMAIL) ?></a>
                    <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i> <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
                  </div>
                </div>
              </div>
              <div class="team-details">
                <p>Plumbing work is scoped around the active issue, fixture needs, shutoffs, cleanup, and long-term durability.</p>
                <div class="credentials">
                  <div class="cred-item">
                    <i class="bi bi-person-badge"></i>
                    <span>Responsible Master Plumber</span>
                  </div>
                  <div class="cred-item">
                    <i class="bi bi-tools"></i>
                    <span><?= e(PLUMBING_LICENSE) ?></span>
                  </div>
                </div>
                <div class="social-links">
                  <a href="contact.php"><i class="bi bi-envelope"></i></a>
                  <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                  <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                </div>
              </div>
            </div>
          </div><!-- End Featured Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/favicon/logo_master_enhanced.png" class="img-fluid team-identity-logo" alt="Mark's Services logo">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5><?= e(HANDYMAN_EXPERT) ?></h5>
                    <span>Handyman &amp; Home Repair Expert</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5><?= e(HANDYMAN_EXPERT) ?></h5>
                <span>Handyman &amp; Home Repair Expert • <?= e(HANDYMAN_EXPERIENCE) ?> • Prior electrical/plumbing licenses expired</span>
                <div class="skills">
                  <span class="skill-tag">Handyman</span>
                  <span class="skill-tag">Home Repair</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-4.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Maintenance</h5>
                    <span>Punch lists &amp; make-ready</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Maintenance</h5>
                <span>Punch lists &amp; make-ready</span>
                <div class="skills">
                  <span class="skill-tag">Scheduling</span>
                  <span class="skill-tag">Repairs</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="100">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-5.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Make-Ready</h5>
                    <span>Turnover support</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Make-Ready</h5>
                <span>Turnover support</span>
                <div class="skills">
                  <span class="skill-tag">Punch Lists</span>
                  <span class="skill-tag">Repairs</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="200">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-6.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Fixture Updates</h5>
                    <span>Electrical &amp; plumbing</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Fixture Updates</h5>
                <span>Electrical &amp; plumbing</span>
                <div class="skills">
                  <span class="skill-tag">Lighting</span>
                  <span class="skill-tag">Fixtures</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="300">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-7.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Small Repairs</h5>
                    <span>Finish-the-list visits</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Small Repairs</h5>
                <span>Finish-the-list visits</span>
                <div class="skills">
                  <span class="skill-tag">Repairs</span>
                  <span class="skill-tag">Adjustments</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

          <div class="col-lg-4 col-md-6" data-aos="fade-up" data-aos-delay="400">
            <div class="team-card compact">
              <div class="member-photo">
                <img src="assets/img/construction/team-8.webp" class="img-fluid" alt="">
                <div class="hover-overlay">
                  <div class="overlay-content">
                    <h5>Scope Review</h5>
                    <span>Estimates &amp; scheduling</span>
                    <div class="quick-contact">
                      <a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><i class="bi bi-envelope"></i></a>
                      <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><i class="bi bi-telephone"></i></a>
                      <a href="quote.php"><i class="bi bi-clipboard-check"></i></a>
                    </div>
                  </div>
                </div>
              </div>
              <div class="member-summary">
                <h5>Scope Review</h5>
                <span>Estimates &amp; scheduling</span>
                <div class="skills">
                  <span class="skill-tag">Quotes</span>
                  <span class="skill-tag">Planning</span>
                </div>
              </div>
            </div>
          </div><!-- End Compact Team Member -->

        </div>

      </div>

    </section><!-- /Team 2 Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
