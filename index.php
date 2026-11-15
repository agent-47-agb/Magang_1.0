<?php
/**
 * Magang 1.0 — Titik masuk web beranda.
 *
 * Alur render:
 *   1. Muat helper (includes/functions.php) & konfigurasi (includes/config.php)
 *   2. Muat konten situs dari data/content.json
 *   3. Render header, semua section (urutan sesuai SITE_SECTIONS), lalu footer
 *
 * Menambah section baru: lihat dokumentasi di includes/config.php
 */

require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/config.php';

$site = site_content();
require __DIR__ . '/includes/header.php';

foreach (SITE_SECTIONS as $section) {
    $template = __DIR__ . '/includes/sections/' . $section . '.php';
    if (is_file($template)) {
        require $template;
    }
}

require __DIR__ . '/includes/footer.php';