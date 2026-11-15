<?php $c = $site['gallery'] ?? []; ?>
<section id="galeri" class="section">
  <div class="container">
    <h2 class="section-title reveal"><?= e($c['title'] ?? 'Galeri') ?></h2>
    <p class="section-subtitle reveal"><?= e($c['subtitle'] ?? '') ?></p>

    <div class="carousel" id="carousel">
      <div class="carousel-viewport">
        <div class="carousel-track" id="carousel-track">
          <?php foreach (($c['items'] ?? []) as $i => $item): ?>
            <figure class="carousel-slide">
              <?php if (!empty($item['image'])): ?>
                <img src="<?= e($item['image']) ?>" alt="<?= e($item['caption'] ?? '') ?>" loading="lazy">
              <?php else: ?>
                <div class="slide-placeholder slide-placeholder--<?= $i % 3 + 1 ?>" aria-hidden="true"><?= $i + 1 ?></div>
              <?php endif; ?>
              <figcaption><?= e($item['caption'] ?? '') ?></figcaption>
            </figure>
          <?php endforeach; ?>
        </div>
      </div>

      <button class="carousel-btn carousel-prev" id="carousel-prev" aria-label="Sebelumnya">‹</button>
      <button class="carousel-btn carousel-next" id="carousel-next" aria-label="Berikutnya">›</button>
      <div class="carousel-dots" id="carousel-dots" role="tablist" aria-label="Indikator slide"></div>
    </div>
  </div>
</section>