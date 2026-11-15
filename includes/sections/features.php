<?php $c = $site['features'] ?? []; ?>
<section id="fitur" class="section">
  <div class="container">
    <h2 class="section-title reveal"><?= e($c['title'] ?? 'Fitur Unggulan') ?></h2>
    <p class="section-subtitle reveal"><?= e($c['subtitle'] ?? '') ?></p>

    <div class="features-grid">
      <?php foreach (($c['items'] ?? []) as $i => $item): ?>
        <article class="feature-card reveal" style="--delay: <?= $i * 0.1 ?>s">
          <div class="feature-icon" aria-hidden="true"><?= e($item['icon'] ?? '★') ?></div>
          <h3><?= e($item['title'] ?? '') ?></h3>
          <p><?= e($item['description'] ?? '') ?></p>
        </article>
      <?php endforeach; ?>
    </div>
  </div>
</section>