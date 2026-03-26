<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?php echo $page_title; ?></title>
  <meta name="description" content="">
  <meta name="keywords" content="">

  <!-- Favicons -->
  <!-- <link href="assets/img/favicon.png" rel="icon"> -->
  <!-- <link href="assets/img/apple-touch-icon.png" rel="apple-touch-icon"> -->

  <!-- Standard favicon -->
  <link rel="icon" type="image/x-icon" href="assets/img/favicon.ico">

  <!-- PNG favicons (use clarity variants for small sizes) -->
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon-16x16-clarity.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon-32x32-clarity.png">
  <link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon-48x48.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/img/favicon-64x64.png">

  <!-- Apple touch icon -->
  <link rel="apple-touch-icon" sizes="180x180" href="assets/img/apple-touch-icon-180x180.png">

  <!-- Android / Chrome -->
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/img/android-chrome-512x512.png">

  <!-- Optional: theme color -->
  <meta name="theme-color" content="#ffffff">

  <!-- Fonts -->
  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">

  <!-- Main CSS File -->
  <link href="assets/css/main.css" rel="stylesheet">

</head>

<body class="<?php echo $body_class; ?>">

  <header id="header" class="header sticky-top">

    <div class="topbar d-flex align-items-center dark-background">
      <div class="container d-flex justify-content-center justify-content-md-between">
        <div class="contact-info d-flex align-items-center">
          <i class="bi bi-envelope d-flex align-items-center"><a href="mailto:contact@example.com">contact@example.com</a></i>
          <i class="bi bi-phone d-flex align-items-center ms-4"><span>+1 5589 55488 55</span></i>
        </div>
        <div class="social-links d-none d-md-flex align-items-center">
          <a href="#" class="twitter"><i class="bi bi-twitter-x"></i></a>
          <a href="#" class="facebook"><i class="bi bi-facebook"></i></a>
          <a href="#" class="instagram"><i class="bi bi-instagram"></i></a>
          <a href="#" class="linkedin"><i class="bi bi-linkedin"></i></a>
        </div>
      </div>
    </div><!-- End Top Bar -->

    <div class="branding d-flex align-items-cente">

      <div class="container position-relative d-flex align-items-center justify-content-between">
        <a href="index.php" class="logo d-flex align-items-center">
          <!-- Uncomment the line below if you also wish to use an image logo -->
          <!-- <img src="assets/img/logo.webp" alt=""> -->
          <h1 class="sitename">Constructo</h1>
        </a>

        <nav id="navmenu" class="navmenu">
          <ul>
            <li><a href="index.php" <?php if($active_page == 'index') echo 'class="active"'; ?>>Home</a></li>
            <li><a href="about.php" <?php if($active_page == 'about') echo 'class="active"'; ?>>About</a></li>
            <li><a href="services.php" <?php if($active_page == 'services') echo 'class="active"'; ?>>Services</a></li>
            <li><a href="projects.php" <?php if($active_page == 'projects') echo 'class="active"'; ?>>Projects</a></li>
            <li><a href="team.php" <?php if($active_page == 'team') echo 'class="active"'; ?>>Team</a></li>
            <li class="dropdown"><a href="#"><span>More Pages</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="service-details.php" <?php if($active_page == 'service-details') echo 'class="active"'; ?>>Service Details</a></li>
                <li><a href="project-details.php" <?php if($active_page == 'project-details') echo 'class="active"'; ?>>Project Details</a></li>
                <li><a href="quote.php" <?php if($active_page == 'quote') echo 'class="active"'; ?>>Quote Form</a></li>
                <li><a href="terms.php" <?php if($active_page == 'terms') echo 'class="active"'; ?>>Terms</a></li>
                <li><a href="privacy.php" <?php if($active_page == 'privacy') echo 'class="active"'; ?>>Privacy</a></li>
                <li><a href="404.php" <?php if($active_page == '404') echo 'class="active"'; ?>>404</a></li>
              </ul>
            </li>
            <li class="dropdown"><a href="#"><span>Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
              <ul>
                <li><a href="#">Dropdown 1</a></li>
                <li class="dropdown"><a href="#"><span>Deep Dropdown</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
                  <ul>
                    <li><a href="#">Deep Dropdown 1</a></li>
                    <li><a href="#">Deep Dropdown 2</a></li>
                    <li><a href="#">Deep Dropdown 3</a></li>
                    <li><a href="#">Deep Dropdown 4</a></li>
                    <li><a href="#">Deep Dropdown 5</a></li>
                  </ul>
                </li>
                <li><a href="#">Dropdown 2</a></li>
                <li><a href="#">Dropdown 3</a></li>
                <li><a href="#">Dropdown 4</a></li>
              </ul>
            </li>
            <li><a href="contact.php" <?php if($active_page == 'contact') echo 'class="active"'; ?>>Contact</a></li>
          </ul>
          <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
        </nav>

      </div>

    </div>

  </header>
