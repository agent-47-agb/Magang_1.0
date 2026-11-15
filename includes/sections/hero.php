<?php $c = $site['hero'] ?? []; ?>
<section id="beranda" class="hero">
  <div class="container">
    <p class="hero-eyebrow reveal"><?= e($site['site']['tagline'] ?? '') ?></p>
    <h1 class="hero-title reveal"><?= e($c['title'] ?? 'Selamat Datang') ?></h1>
    <p class="hero-subtitle reveal"><?= e($c['subtitle'] ?? '') ?></p>
    <div class="hero-actions reveal">
      <a class="btn btn-primary" href="<?= e($c['cta_link'] ?? '#fitur') ?>"><?= e($c['cta_text'] ?? 'Mulai Sekarang') ?></a>
      <a class="btn btn-ghost" href="<?= e($c['secondary_cta_link'] ?? '#tentang') ?>"><?= e($c['secondary_cta_text'] ?? 'Pelajari Lebih Lanjut') ?></a>
    </div>
  </div>
</section>