<?php
declare(strict_types=1);
$pageKey = 'quote.php';
require __DIR__ . '/includes/header.php';
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Quote</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Quote</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Quote Section -->
    <section id="quote" class="quote section">

      <div class="container" data-aos="fade-up" data-aos-delay="100">

        <div class="row justify-content-center">
          <div class="col-lg-10">
            <div class="quote-form-container">
              <div class="row g-0">
                <div class="col-lg-6">
                  <div class="quote-info">
                    <div class="quote-content">
                      <h3>Ready to Schedule Your Project?</h3>
                      <p>Tell us what you need done and Mark's Services will follow up with a clear next step for your Berry Creek or Sun City project.</p>

                      <div class="contact-items">
                        <div class="contact-item" data-aos="fade-right" data-aos-delay="200">
                          <div class="contact-icon">
                            <i class="bi bi-telephone"></i>
                          </div>
                          <div class="contact-details">
                            <h4>Call Us Directly</h4>
                            <p><a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>"><?= e(BUSINESS_PHONE_DISPLAY) ?></a></p>
                          </div>
                        </div>

                        <div class="contact-item" data-aos="fade-right" data-aos-delay="250">
                          <div class="contact-icon">
                            <i class="bi bi-envelope"></i>
                          </div>
                          <div class="contact-details">
                            <h4>Email Us</h4>
                            <p><a href="mailto:<?= e(BUSINESS_EMAIL) ?>"><?= e(BUSINESS_EMAIL) ?></a></p>
                          </div>
                        </div>

                        <div class="contact-item" data-aos="fade-right" data-aos-delay="300">
                          <div class="contact-icon">
                            <i class="bi bi-clock"></i>
                          </div>
                          <div class="contact-details">
                            <h4>Response Time</h4>
                            <p>Within 24 hours</p>
                          </div>
                        </div>
                      </div>

                      <div class="trust-badges" data-aos="fade-right" data-aos-delay="350">
                        <div class="trust-badge">
                          <i class="bi bi-shield-check"></i>
                          <span>Licensed &amp; Insured</span>
                        </div>
                        <div class="trust-badge">
                          <i class="bi bi-award"></i>
                          <span>15+ Years Experience</span>
                        </div>
                      </div>
                    </div>
                  </div>
                </div>

                <div class="col-lg-6">
                  <div class="quote-form-wrapper">
                    <form action="forms/quote.php" method="post" class="php-email-form" data-aos="fade-left" data-aos-delay="200">
                      <div class="form-header">
                        <h4>Request Your Free Quote</h4>
                        <p>Fill out the form below and we'll get back to you with a practical estimate or scheduling option.</p>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="name" class="form-control" id="name" placeholder="Your Name" required="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="email" name="email" class="form-control" id="email" placeholder="Your Email" required="">
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="tel" name="phone" class="form-control" id="phone" placeholder="Your Phone" required="">
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <select name="type" class="form-control" required="">
                              <option value="">Select Service Type</option>
                              <option value="electrical">Electrical Service Call</option>
                              <option value="plumbing">Plumbing Service Call</option>
                              <option value="remodel">Remodeling / Carpentry</option>
                              <option value="maintenance">Maintenance / Punch List</option>
                              <option value="other">Other</option>
                            </select>
                          </div>
                        </div>
                      </div>

                      <div class="row">
                        <div class="col-md-6">
                          <div class="form-group">
                            <select name="timeline" class="form-control" required="">
                              <option value="">Project Timeline</option>
                              <option value="asap">ASAP</option>
                              <option value="1-2weeks">1-2 Weeks</option>
                              <option value="1-3months">1-3 Months</option>
                              <option value="3-6months">3-6 Months</option>
                              <option value="6-12months">6-12 Months</option>
                              <option value="planning">Still Planning</option>
                            </select>
                          </div>
                        </div>
                        <div class="col-md-6">
                          <div class="form-group">
                            <input type="text" name="budget" class="form-control" id="budget" placeholder="Budget or scope notes (Optional)">
                          </div>
                        </div>
                      </div>

                      <div class="form-group">
                        <textarea class="form-control" name="message" rows="5" placeholder="Project details - tell us what needs repair, replacement, or improvement." required=""></textarea>
                      </div>

                      <div class="loading">Loading</div>
                      <div class="error-message"></div>
                      <div class="sent-message">Your quote request has been sent successfully. We'll contact you within 24 hours!</div>

                      <div class="text-center">
                        <button type="submit">Get Free Quote</button>
                      </div>
                    </form>
                  </div>
                </div>
              </div>
            </div>
          </div>
        </div>

      </div>

    </section><!-- /Quote Section -->

  </main>

<?php require __DIR__ . '/includes/footer.php'; ?>
