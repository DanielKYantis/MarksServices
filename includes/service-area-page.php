<?php
declare(strict_types=1);

if (!isset($pageKey, $serviceArea) || !is_array($serviceArea)) {
    throw new RuntimeException('Service-area page data is required.');
}

require __DIR__ . '/header.php';
?>

<main class="main">
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?= e($serviceArea['h1']) ?></h1>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li class="current"><?= e($serviceArea['breadcrumb']) ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-start">
        <div class="col-lg-8">
          <span class="text-uppercase fw-semibold text-primary small"><?= e($serviceArea['eyebrow']) ?></span>
          <h2 class="mt-2"><?= e($serviceArea['intro_title']) ?></h2>
          <p class="lead"><?= e($serviceArea['lead']) ?></p>
          <?php foreach ($serviceArea['intro_paragraphs'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="quote.php" class="btn btn-primary">Request a Quote</a>
            <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="btn btn-outline-primary">Call or Text <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
          </div>
        </div>

        <div class="col-lg-4">
          <aside class="p-4 border rounded h-100">
            <h2 class="h4">Service-area details</h2>
            <p class="mb-2"><strong><?= e($serviceArea['place']) ?></strong></p>
            <p><?= e($serviceArea['service_note']) ?></p>
            <p class="mb-2"><strong>Also serving:</strong></p>
            <a href="<?= e($serviceArea['related_href']) ?>"><?= e($serviceArea['related_label']) ?></a>
          </aside>
        </div>
      </div>
    </div>
  </section>

  <section class="section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title">
        <h2><?= e($serviceArea['services_title']) ?></h2>
        <p><?= e($serviceArea['services_intro']) ?></p>
      </div>

      <div class="row gy-4">
        <?php foreach ($serviceArea['service_groups'] as $group): ?>
          <div class="col-lg-6">
            <article class="service-area-card p-4 border rounded h-100">
              <h3 class="h4"><i class="bi <?= e($group['icon']) ?> me-2" aria-hidden="true"></i><?= e($group['title']) ?></h3>
              <p><?= e($group['description']) ?></p>
              <ul class="mb-0">
                <?php foreach ($group['items'] as $item): ?>
                  <li class="mb-2"><?= e($item) ?></li>
                <?php endforeach; ?>
              </ul>
            </article>
          </div>
        <?php endforeach; ?>
      </div>
    </div>
  </section>

  <section class="section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4">
        <div class="col-lg-7">
          <h2><?= e($serviceArea['local_title']) ?></h2>
          <?php foreach ($serviceArea['local_paragraphs'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
        </div>
        <div class="col-lg-5">
          <div class="p-4 border rounded h-100">
            <h2 class="h4">Before visible or regulated work</h2>
            <p><?= e($serviceArea['requirements_note']) ?></p>
            <p class="mb-0">Minor repairs and fixture installations are evaluated by scope; licensed trades are coordinated when required.</p>
            <hr>
            <p class="mb-0"><strong>Verified plumbing credential:</strong><br><?= e(PLUMBING_LICENSE_HOLDER) ?>, Responsible Master Plumber <?= e(PLUMBING_LICENSE) ?>.</p>
            <hr>
            <p class="mb-0"><strong>Verified electrical credential:</strong><br><?= e(ELECTRICAL_LICENSE_HOLDER) ?>, Electrical Contractor <?= e(ELECTRICAL_LICENSE) ?>.</p>
            <hr>
            <p class="mb-0"><strong>Verified home-repair experience:</strong><br><?= e(HANDYMAN_EXPERT) ?>, Handyman &amp; Home Repair Expert with <?= e(HANDYMAN_EXPERIENCE) ?> of contractor and home-repair experience, including <?= e(HANDYMAN_PRIOR_TRADE_EXPERIENCE) ?>. Current regulated work is tied to the verified current license holders listed above.</p>
          </div>
        </div>
      </div>

      <div class="text-center mt-5 p-4 light-background rounded">
        <h2 class="h3">Tell us what needs attention</h2>
        <p>Share the repair list, photos, location, and timing. Mark's Services will follow up with a practical next step.</p>
        <a href="quote.php" class="btn btn-primary">Request a Quote</a>
        <a href="services.php" class="btn btn-outline-primary ms-2">Browse Services</a>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
