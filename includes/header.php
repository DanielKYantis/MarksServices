<?php
declare(strict_types=1);

require_once __DIR__ . '/config.php';
$pages = require __DIR__ . '/pages.php';
$pageKey = $pageKey ?? 'index.php';
$page = $pages[$pageKey] ?? $pages['index.php'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta content="width=device-width, initial-scale=1.0" name="viewport">
  <title><?= e($page['title']) ?></title>
  <meta name="description" content="<?= e($page['description']) ?>">
  <meta name="keywords" content="<?= e($page['keywords']) ?>">

  <link rel="icon" type="image/x-icon" href="assets/img/favicon/favicon.ico">
  <link rel="icon" type="image/png" sizes="16x16" href="assets/img/favicon/favicon-16x16-clarity.png">
  <link rel="icon" type="image/png" sizes="32x32" href="assets/img/favicon/favicon-32x32-clarity.png">
  <link rel="icon" type="image/png" sizes="48x48" href="assets/img/favicon/favicon-48x48.png">
  <link rel="icon" type="image/png" sizes="64x64" href="assets/img/favicon/favicon-64x64.png">
  <link rel="apple-touch-icon" sizes="180x180" href="/apple-touch-icon-180x180.png">
  <link rel="icon" type="image/png" sizes="192x192" href="assets/img/favicon/android-chrome-192x192.png">
  <link rel="icon" type="image/png" sizes="512x512" href="assets/img/favicon/android-chrome-512x512.png">
  <meta name="theme-color" content="#ffffff">

  <link href="https://fonts.googleapis.com" rel="preconnect">
  <link href="https://fonts.gstatic.com" rel="preconnect" crossorigin>
  <link href="https://fonts.googleapis.com/css2?family=Roboto:ital,wght@0,100;0,300;0,400;0,500;0,700;0,900;1,100;1,300;1,400;1,500;1,700;1,900&family=Lato:ital,wght@0,100;0,300;0,400;0,700;0,900;1,100;1,300;1,400;1,700;1,900&family=Ubuntu:ital,wght@0,300;0,400;0,500;0,700;1,300;1,400;1,500;1,700&display=swap" rel="stylesheet">

  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">
  <link href="assets/vendor/bootstrap-icons/bootstrap-icons.css" rel="stylesheet">
  <link href="assets/vendor/aos/aos.css" rel="stylesheet">
  <link href="assets/vendor/swiper/swiper-bundle.min.css" rel="stylesheet">
  <link href="assets/vendor/glightbox/css/glightbox.min.css" rel="stylesheet">
  <link href="assets/css/main.css" rel="stylesheet">
</head>

<body class="<?= e($page['body_class']) ?>">

<header id="header" class="header sticky-top">
  <div class="topbar d-flex align-items-center dark-background">
    <div class="container d-flex justify-content-center justify-content-md-between">
      <div class="contact-info d-flex align-items-center">
        <a href="mailto:<?= e(BUSINESS_EMAIL) ?>" class="d-flex align-items-center ms-4"><i class="bi bi-envelope"></i><span class="ms-2"><?= e(BUSINESS_EMAIL) ?></span></a>
        <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="d-flex align-items-center ms-4"><i class="bi bi-phone"></i><span class="ms-2"><?= e(BUSINESS_PHONE_DISPLAY) ?></span></a>
      </div>
    </div>
  </div>

  <div class="branding d-flex align-items-center">
    <div class="container position-relative d-flex align-items-center justify-content-between">
      <a href="index.php" class="logo d-flex align-items-center">
        <img src="assets/img/favicon/logo_master_enhanced.png" alt="<?= e(SITE_NAME) ?> logo">
        <h1 class="sitename"><?= e(SITE_NAME) ?></h1>
      </a>

      <?php require __DIR__ . '/nav.php'; ?>
    </div>
  </div>
</header>
