<?php
declare(strict_types=1);
$pageKey = "contact.php";
require __DIR__ . "/includes/header.php";
?>

<main class="main">

    <!-- Page Title -->
    <div class="page-title light-background">
      <div class="container d-lg-flex justify-content-between align-items-center">
        <h1 class="mb-2 mb-lg-0">Contact</h1>
        <nav class="breadcrumbs">
          <ol>
            <li><a href="index.php">Home</a></li>
            <li class="current">Contact</li>
          </ol>
        </nav>
      </div>
    </div><!-- End Page Title -->

    <!-- Contact Section -->
    <section id="contact" class="contact section">

      <div class="container">
        <div class="contact-wrapper">
          <div class="contact-info-panel">
            <div class="contact-info-header">
              <h3>Contact Information</h3>
              <p>Call, email, or send a message to discuss electrical, plumbing, handyman, home repair, water softener, or maintenance work at client locations in Sun City and Berry Creek.</p>
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Service Area</h4>
                  <p><?= e(BUSINESS_AREA_DETAIL) ?></p>
                  <p class="small mb-0"><?= e(BUSINESS_SERVICE_NOTE) ?></p>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-envelope-open"></i>
                </div>
                <div class="card-content">
                  <h4>Email Us</h4>
                  <a href="mailto:<?= e(
                      BUSINESS_EMAIL
                  ) ?>" class="d-flex align-items-center ms-4"><i class="bi bi-envelope"></i><span class="ms-2"><?= e(
    BUSINESS_EMAIL
) ?></span></a>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-telephone-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Call Us</h4>
                  <a href="tel:<?= e(
                      BUSINESS_PHONE_TEL
                  ) ?>" class="d-flex align-items-center ms-4"><i class="bi bi-phone"></i><span class="ms-2"><?= e(
    BUSINESS_PHONE_DISPLAY
) ?></span></a>
                </div>
              </div>

              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-clock-history"></i>
                </div>
                <div class="card-content">
                  <h4>Working Hours</h4>
                  <p>Monday-Saturday: 9AM - 5PM</p>
                </div>
              </div>
            </div>

          </div>

          <div class="contact-form-panel">
            <div class="map-container">
              <iframe src="https://www.google.com/maps?q=Sun%20City%2C%20Georgetown%2C%20TX%2078633&output=embed" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form-container">
              <h3>Send Us a Message</h3>
              <p>Share a few details and the team will respond with the best next step.</p>

              <form action="forms/contact.php" method="post" class="php-email-form">
                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="nameInput" name="name" placeholder="Full Name" required="">
                  <label for="nameInput">Full Name</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="email" class="form-control" id="emailInput" name="email" placeholder="Email Address" required="">
                  <label for="emailInput">Email Address</label>
                </div>

                <div class="form-floating mb-3">
                  <input type="text" class="form-control" id="subjectInput" name="subject" placeholder="Subject" required="">
                  <label for="subjectInput">Subject</label>
                </div>

                <div class="form-floating mb-3">
                  <textarea class="form-control" id="messageInput" name="message" rows="5" placeholder="Your Message" style="height: 150px" required=""></textarea>
                  <label for="messageInput">Your Message</label>
                </div>

                <div class="my-3">
                  <div class="loading">Loading</div>
                  <div class="error-message"></div>
                  <div class="sent-message">Your message has been sent. Thank you!</div>
                </div>

                <div class="d-grid">
                  <button type="submit" class="btn-submit">Send Message <i class="bi bi-send-fill ms-2"></i></button>
                </div>
              </form>
            </div>
          </div>
        </div>
      </div>
    </section><!-- /Contact Section -->

  </main>

<?php require __DIR__ . "/includes/footer.php"; ?>
