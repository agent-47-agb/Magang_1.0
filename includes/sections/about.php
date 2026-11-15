<?php $c = $site['about'] ?? []; ?>
<section id="tentang" class="section section-alt">
  <div class="container about-grid">
    <div class="about-text reveal">
      <h2 class="section-title"><?= e($c['title'] ?? 'Tentang Kami') ?></h2>
      <p><?= e($c['text'] ?? '') ?></p>
      <?php if (!empty($c['stats'])): ?>
        <div class="stats-row">
          <?php foreach ($c['stats'] as $stat): ?>
            <div class="stat">
              <strong><?= e($stat['value'] ?? '') ?></strong>
              <span><?= e($stat['label'] ?? '') ?></span>
            </div>
          <?php endforeach; ?>
        </div>
      <?php endif; ?>
    </div>

    <div class="about-visual reveal" aria-hidden="true">
      <div class="visual-card visual-card--php">
        <span class="visual-card__label">PHP</span>
        <code>&lt;?php render()?&gt;</code>
      </div>
      <div class="visual-card visual-card--js">
        <span class="visual-card__label">JavaScript</span>
        <code>app.init()</code>
      </div>
      <div class="visual-card visual-card--html">
        <span class="visual-card__label">HTML/CSS</span>
        <code>section.grid</code>
      </div>
    </div>
  </div>
</section>