<?php $site = $site ?? site_content(); ?>
<!DOCTYPE html>
<html lang="id">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title><?= e($site['site']['name'] ?? 'Magang 1.0') ?></title>
  <meta name="description" content="<?= e($site['site']['description'] ?? '') ?>">
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <header class="site-header" id="top">
    <div class="container nav-wrap">
      <a class="brand" href="#beranda">
        <span class="brand-logo" aria-hidden="true">⌘</span>
        <span class="brand-name"><?= e($site['site']['name'] ?? 'Magang 1.0') ?></span>
      </a>

      <nav class="site-nav" id="nav" aria-label="Navigasi utama">
        <ul>
          <?php foreach (($site['menu'] ?? []) as $i => $item): ?>
            <li>
              <a href="<?= e($item['href'] ?? '#') ?>" class="<?= $i === 0 ? 'active' : '' ?>"><?= e($item['label'] ?? '') ?></a>
            </li>
          <?php endforeach; ?>
        </ul>
      </nav>

      <button class="nav-toggle" id="nav-toggle" aria-label="Buka/tutup menu" aria-expanded="false">
        <span></span><span></span><span></span>
      </button>
    </div>
  </header>

  <main>