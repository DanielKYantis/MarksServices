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
              <p>Dignissimos deleniti accusamus rerum voluptate. Dignissimos rerum sit maiores reiciendis voluptate inventore ut.</p>
            </div>

            <div class="contact-info-cards">
              <div class="info-card">
                <div class="icon-container">
                  <i class="bi bi-pin-map-fill"></i>
                </div>
                <div class="card-content">
                  <h4>Our Location</h4>
                  <p><?= e(BUSINESS_CITY) ?> (Sun City), <?= e(
     BUSINESS_STATE
 ) ?> <?= e(BUSINESS_ZIP) ?></p>
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

            <div class="social-links-panel">
              <h5>Follow Us</h5>
              <div class="social-icons">
                <a href="#"><i class="bi bi-facebook"></i></a>
                <a href="#"><i class="bi bi-twitter-x"></i></a>
                <a href="#"><i class="bi bi-instagram"></i></a>
                <a href="#"><i class="bi bi-linkedin"></i></a>
                <a href="#"><i class="bi bi-youtube"></i></a>
              </div>
            </div>
          </div>

          <div class="contact-form-panel">
            <div class="map-container">
              <iframe src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d48389.78314118045!2d-74.006138!3d40.710059!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25a22a3bda30d%3A0xb89d1fe6bc499443!2sDowntown%20Conference%20Center!5e0!3m2!1sen!2sus!4v1676961268712!5m2!1sen!2sus" width="100%" height="100%" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

            <div class="form-container">
              <h3>Send Us a Message</h3>
              <p>Lorem ipsum dolor sit amet consectetur adipiscing elit mauris hendrerit faucibus imperdiet nec eget felis.</p>

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
