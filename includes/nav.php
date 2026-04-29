<?php
declare(strict_types=1);

$pageKey = $pageKey ?? basename($_SERVER['SCRIPT_NAME']);
?>
<nav id="navmenu" class="navmenu">
  <ul>
    <li><a href="index.php" class="<?= is_active($pageKey, 'index.php') ?>">Home</a></li>
    <li><a href="about.php" class="<?= is_active($pageKey, 'about.php') ?>">About</a></li>
    <li class="dropdown extended-dropdown-2">
      <a href="services.php" class="<?= is_active($pageKey, ['services.php', 'service-details.php']) ?>"><span>Services</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
      <ul>
        <li>
          <a href="services.php">
            <div class="menu-item-content">
              <div class="menu-icon"><i class="bi bi-lightning-charge"></i></div>
              <div class="menu-text">
                <span class="menu-title">Electrical Service</span>
                <span class="menu-description">Troubleshooting, fixtures, panels, and repairs</span>
              </div>
            </div>
            <div class="menu-badge">Licensed</div>
          </a>
        </li>
        <li>
          <a href="services.php">
            <div class="menu-item-content">
              <div class="menu-icon"><i class="bi bi-droplet"></i></div>
              <div class="menu-text">
                <span class="menu-title">Plumbing Service</span>
                <span class="menu-description">Leaks, fixtures, shutoffs, and water heaters</span>
              </div>
            </div>
            <div class="menu-badge hot">RMP</div>
          </a>
        </li>
        <li>
          <a href="services.php">
            <div class="menu-item-content">
              <div class="menu-icon"><i class="bi bi-hammer"></i></div>
              <div class="menu-text">
                <span class="menu-title">Remodeling &amp; Carpentry</span>
                <span class="menu-description">Trim, doors, small remodels, and finish work</span>
              </div>
            </div>
          </a>
        </li>
        <li>
          <a href="quote.php">
            <div class="menu-item-content">
              <div class="menu-icon"><i class="bi bi-clipboard-check"></i></div>
              <div class="menu-text">
                <span class="menu-title">Request a Quote</span>
                <span class="menu-description">Send the details and plan the next step</span>
              </div>
            </div>
            <div class="menu-badge updates">Go</div>
          </a>
        </li>
      </ul>
    </li>
    <li><a href="projects.php" class="<?= is_active($pageKey, ['projects.php', 'project-details.php']) ?>">Projects</a></li>
    <li><a href="team.php" class="<?= is_active($pageKey, 'team.php') ?>">Team</a></li>

    <li class="megamenu-2">
      <a href="#" class="<?= is_active($pageKey, ['service-details.php', 'project-details.php', 'quote.php', 'terms.php', 'privacy.php', '404.php', 'starter-page.php']) ?>"><span>Explore</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>

      <ul class="mobile-megamenu">
        <li><a href="service-details.php">Service Details</a></li>
        <li><a href="project-details.php">Project Details</a></li>
        <li><a href="quote.php">Quote Form</a></li>
        <li class="dropdown"><a href="#"><span>Resources</span> <i class="bi bi-chevron-down toggle-dropdown"></i></a>
          <ul>
            <li><a href="terms.php">Terms</a></li>
            <li><a href="privacy.php">Privacy</a></li>
            <li><a href="404.php">404</a></li>
          </ul>
        </li>
      </ul>

      <div class="desktop-megamenu">
        <div class="tab-navigation">
          <ul class="nav nav-tabs flex-column" id="marks-megamenu-tabs" role="tablist">
            <li class="nav-item" role="presentation">
              <button class="nav-link active" id="marks-tab-services-tab" data-bs-toggle="tab" data-bs-target="#marks-tab-services" type="button" role="tab" aria-controls="marks-tab-services" aria-selected="true">
                <i class="bi bi-tools"></i>
                <span>Service Paths</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="marks-tab-projects-tab" data-bs-toggle="tab" data-bs-target="#marks-tab-projects" type="button" role="tab" aria-controls="marks-tab-projects" aria-selected="false">
                <i class="bi bi-house-gear"></i>
                <span>Project Planning</span>
              </button>
            </li>
            <li class="nav-item" role="presentation">
              <button class="nav-link" id="marks-tab-resources-tab" data-bs-toggle="tab" data-bs-target="#marks-tab-resources" type="button" role="tab" aria-controls="marks-tab-resources" aria-selected="false">
                <i class="bi bi-journal-text"></i>
                <span>Resources</span>
              </button>
            </li>
          </ul>
        </div>

        <div class="tab-content">
          <div class="tab-pane fade show active" id="marks-tab-services" role="tabpanel" aria-labelledby="marks-tab-services-tab">
            <div class="content-grid">
              <div class="product-section">
                <h4>Licensed Work</h4>
                <div class="product-list">
                  <a href="services.php" class="product-link">
                    <i class="bi bi-lightning-charge"></i>
                    <div><span>Electrical Service</span><small><?= e(ELECTRICAL_LICENSE) ?> for repairs, fixtures, and diagnostics</small></div>
                  </a>
                  <a href="services.php" class="product-link">
                    <i class="bi bi-droplet"></i>
                    <div><span>Plumbing Service</span><small><?= e(PLUMBING_LICENSE) ?> for leaks, fixtures, and water heaters</small></div>
                  </a>
                  <a href="quote.php" class="product-link">
                    <i class="bi bi-clipboard-check"></i>
                    <div><span>Request a Quote</span><small>Send photos, timing, and project details</small></div>
                  </a>
                </div>
              </div>

              <div class="product-section">
                <h4>Home Improvements</h4>
                <div class="product-list">
                  <a href="services.php" class="product-link">
                    <i class="bi bi-hammer"></i>
                    <div><span>Remodeling &amp; Carpentry</span><small>Trim, doors, finish work, and small remodel scopes</small></div>
                  </a>
                  <a href="services.php" class="product-link">
                    <i class="bi bi-list-check"></i>
                    <div><span>Maintenance Visits</span><small>Punch lists, make-ready tasks, and repairs</small></div>
                  </a>
                  <a href="contact.php" class="product-link">
                    <i class="bi bi-telephone"></i>
                    <div><span>Talk Through Scope</span><small><?= e(BUSINESS_PHONE_DISPLAY) ?> for a practical next step</small></div>
                  </a>
                </div>
              </div>
            </div>

            <div class="featured-banner">
              <div class="banner-content">
                <div class="banner-icon"><i class="bi bi-shield-check"></i></div>
                <div class="banner-info">
                  <h5>Licensed electrical and plumbing support</h5>
                  <p>Clear scope, practical scheduling, and one local point of contact for Georgetown and Sun City work.</p>
                  <a href="quote.php" class="cta-btn">Start a quote <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="marks-tab-projects" role="tabpanel" aria-labelledby="marks-tab-projects-tab">
            <div class="content-grid">
              <div class="product-section">
                <h4>Plan the Work</h4>
                <div class="product-list">
                  <a href="project-details.php" class="product-link">
                    <i class="bi bi-images"></i>
                    <div><span>Project Details</span><small>See how scopes, notes, and photos can be organized</small></div>
                  </a>
                  <a href="projects.php" class="product-link">
                    <i class="bi bi-grid"></i>
                    <div><span>Projects</span><small>Browse repair, remodel, and service examples</small></div>
                  </a>
                  <a href="service-details.php" class="product-link">
                    <i class="bi bi-diagram-3"></i>
                    <div><span>Service Method</span><small>Review the scope, trade, and follow-up flow</small></div>
                  </a>
                </div>
              </div>

              <div class="product-section">
                <h4>Get Ready</h4>
                <div class="product-list">
                  <a href="quote.php" class="product-link">
                    <i class="bi bi-camera"></i>
                    <div><span>Share Photos</span><small>Photos help clarify access, materials, and priority</small></div>
                  </a>
                  <a href="contact.php" class="product-link">
                    <i class="bi bi-calendar-check"></i>
                    <div><span>Schedule a Visit</span><small>Service-area appointments only, no walk-ins</small></div>
                  </a>
                  <a href="about.php" class="product-link">
                    <i class="bi bi-geo-alt"></i>
                    <div><span>Local Area</span><small><?= e(BUSINESS_AREA) ?></small></div>
                  </a>
                </div>
              </div>
            </div>
          </div>

          <div class="tab-pane fade" id="marks-tab-resources" role="tabpanel" aria-labelledby="marks-tab-resources-tab">
            <div class="resources-layout">
              <div class="resource-categories">
                <div class="resource-category">
                  <i class="bi bi-file-earmark-text"></i>
                  <h5>Terms</h5>
                  <p>Review service terms and expectations before work begins.</p>
                  <a href="terms.php" class="resource-link">Read terms <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="resource-category">
                  <i class="bi bi-lock"></i>
                  <h5>Privacy</h5>
                  <p>See how contact and quote-request information is handled.</p>
                  <a href="privacy.php" class="resource-link">View privacy <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="resource-category">
                  <i class="bi bi-envelope-paper"></i>
                  <h5>Contact</h5>
                  <p>Send a message or call to discuss the best next step.</p>
                  <a href="contact.php" class="resource-link">Contact us <i class="bi bi-arrow-right"></i></a>
                </div>
                <div class="resource-category">
                  <i class="bi bi-question-circle"></i>
                  <h5>Not Found</h5>
                  <p>Use the fallback page when a saved link no longer exists.</p>
                  <a href="404.php" class="resource-link">Open 404 <i class="bi bi-arrow-right"></i></a>
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </li>

    <li><a href="contact.php" class="<?= is_active($pageKey, 'contact.php') ?>">Contact</a></li>
  </ul>
  <i class="mobile-nav-toggle d-xl-none bi bi-list"></i>
</nav>
