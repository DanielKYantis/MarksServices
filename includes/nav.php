<?php
declare(strict_types=1);
?>
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= is_active($pageKey, 'index.php') ?>">Home</a></li>
    <li><a href="about.php" class="<?= is_active($pageKey, 'about.php') ?>">About</a></li>
    <li><a href="services.php" class="<?= is_active($pageKey, ['services.php', 'service-details.php']) ?>">Services</a></li>
    <li><a href="projects.php" class="<?= is_active($pageKey, ['projects.php', 'project-details.php']) ?>">Projects</a></li>
    <li><a href="team.php" class="<?= is_active($pageKey, 'team.php') ?>">Team</a></li>
    <li class="dropdown"><a href="#" class="<?= is_active($pageKey, ['service-details.php', 'project-details.php', 'quote.php', 'terms.php', 'privacy.php', '404.php', 'starter-page.php']) ?>"><span>More</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li><a href="service-details.php">Service Details</a></li>
        <li><a href="project-details.php">Project Details</a></li>
        <li><a href="quote.php">Quote Form</a></li>
        <li><a href="terms.php">Terms</a></li>
        <li><a href="privacy.php">Privacy</a></li>
        <li><a href="404.php">404</a></li>
      </ul>
    </li>
    <li><a href="contact.php" class="<?= is_active($pageKey, 'contact.php') ?>">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>