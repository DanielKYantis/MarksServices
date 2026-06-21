<?php
declare(strict_types=1);

if (!isset($pageKey, $servicePage) || !is_array($servicePage)) {
    throw new RuntimeException('Service landing-page data is required.');
}

require __DIR__ . '/header.php';
?>

<main class="main">
  <div class="page-title light-background">
    <div class="container d-lg-flex justify-content-between align-items-center">
      <h1 class="mb-2 mb-lg-0"><?= e($servicePage['h1']) ?></h1>
      <nav class="breadcrumbs" aria-label="Breadcrumb">
        <ol>
          <li><a href="index.php">Home</a></li>
          <li><a href="services.php">Services</a></li>
          <li class="current"><?= e($servicePage['breadcrumb']) ?></li>
        </ol>
      </nav>
    </div>
  </div>

  <section class="section">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="row gy-4 align-items-start">
        <div class="col-lg-8">
          <span class="text-uppercase fw-semibold text-primary small"><?= e($servicePage['eyebrow']) ?></span>
          <h2 class="mt-2"><?= e($servicePage['intro_title']) ?></h2>
          <p class="lead"><?= e($servicePage['lead']) ?></p>
          <?php foreach ($servicePage['intro_paragraphs'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
          <div class="d-flex flex-wrap gap-3 mt-4">
            <a href="quote.php" class="btn btn-primary">Request a Quote</a>
            <a href="tel:<?= e(BUSINESS_PHONE_TEL) ?>" class="btn btn-outline-primary">Call or Text <?= e(BUSINESS_PHONE_DISPLAY) ?></a>
          </div>
        </div>

        <div class="col-lg-4">
          <aside class="p-4 border rounded h-100">
            <h2 class="h4"><?= e($servicePage['credential']['title']) ?></h2>
            <?php foreach ($servicePage['credential']['lines'] as $line): ?>
              <p class="mb-2"><strong><?= e($line) ?></strong></p>
            <?php endforeach; ?>
            <p class="mb-0"><?= e($servicePage['credential']['note']) ?></p>
          </aside>
        </div>
      </div>
    </div>
  </section>

  <section class="section light-background">
    <div class="container" data-aos="fade-up" data-aos-delay="100">
      <div class="section-title">
        <h2><?= e($servicePage['scope_title']) ?></h2>
        <p><?= e($servicePage['scope_intro']) ?></p>
      </div>

      <div class="row gy-4">
        <?php foreach ($servicePage['scope_groups'] as $group): ?>
          <div class="col-lg-6">
            <article class="service-area-card p-4 border rounded h-100">
              <h3 class="h4"><i class="bi <?= e($group['icon']) ?> me-2" aria-hidden="true"></i><?= e($group['title']) ?></h3>
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
          <h2><?= e($servicePage['planning_title']) ?></h2>
          <?php foreach ($servicePage['planning_paragraphs'] as $paragraph): ?>
            <p><?= e($paragraph) ?></p>
          <?php endforeach; ?>
        </div>
        <div class="col-lg-5">
          <div class="p-4 border rounded h-100">
            <h2 class="h4">Where this service is available</h2>
            <ul>
              <li><a href="sun-city-georgetown-tx.php">Sun City, Georgetown, Williamson County, TX 78633</a></li>
              <li><a href="berry-creek-georgetown-tx.php">Berry Creek, Georgetown, Williamson County, TX 78628</a></li>
              <li>Georgetown, TX 78626 and 78627</li>
            </ul>
            <p class="mb-0"><?= e($servicePage['requirements_note']) ?></p>
          </div>
        </div>
      </div>

      <div class="row gy-3 mt-4">
        <?php foreach ($servicePage['related_services'] as $related): ?>
          <div class="col-md-6 col-lg-4">
            <a class="d-block p-3 border rounded h-100" href="<?= e($related['href']) ?>">
              <strong><?= e($related['label']) ?></strong><br>
              <span class="small"><?= e($related['description']) ?></span>
            </a>
          </div>
        <?php endforeach; ?>
      </div>

      <div class="text-center mt-5 p-4 light-background rounded">
        <h2 class="h3">Plan the next step</h2>
        <p>Send photos, the property location, and a short description of the work. Mark's Services will review the scope and follow up.</p>
        <a href="quote.php" class="btn btn-primary">Request a Quote</a>
      </div>
    </div>
  </section>
</main>

<?php require __DIR__ . '/footer.php'; ?>
