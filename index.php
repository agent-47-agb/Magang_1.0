<?php
/**
 * Magang 1.0 — Titik masuk web beranda (FULLY CONNECTED).
 *
 * Sistem ini merangkai otomatis:
 *   PHP → header, sections (dari config.php), footer
 *   HTML → Struktur lengkap dengan meta tag, link CSS, dan tempat JS
 *   JS → main.js terload di footer dengan defer, bisa berinteraksi dengan elemen HTML yang sudah dirender
 *
 * URUTAN EKSEKUSI SAAT HALAMAN DIBUKA:
 * 1. Muat functions.php (helper: site_content(), e())
 * 2. Muat config.php (daftar section: hero, features, about, gallery, contact)
 * 3. Ambil konten dari data/content.json -> $site
 * 4. Render header.php (<head>, <nav>, tombol menu mobile)
 * 5. Loop SITE_SECTIONS dan requr each section template (hero, features, etc.)
 * 6. Render footer.php (</main>, copyright, dan <script src="js/main.js" defer>)
 *
 * CARA KUSTOMISASI:
 * - Ganti/ubah teks: edit data/content.json
 * - Ubah urutan section: edit includes/config.php -> SITE_SECTIONS
 * - Tambah section baru: buat includes/sections/nama-section.php, lalu tambahkan ke SITE_SECTIONS
 * - Style ditangani oleh css/style.css (semua class sudah siap pakai)
 * - Interaktivitas ditangani oleh js/main.js (carousel, form, smooth scroll, reveal)
 */

// --- 1. MUAT HELPER & KONFIGURASI ---
require __DIR__ . '/includes/functions.php';
require __DIR__ . '/includes/config.php';

// --- 2. AMBIL KONTEN SITUS DARI JSON ---
$site = site_content();

// --- 3. RENDER HEADER (struktur HTML, CSS, dan navbar) ---
require __DIR__ . '/includes/header.php';

// --- 4. RENDER SEMUA SECTION SESUAI URUTAN config.php ---
foreach (SITE_SECTIONS as $section) {
    $template = __DIR__ . '/includes/sections/' . $section . '.php';
    if (is_file($template)) {
        require $template;
    }
}

// --- 5. RENDER FOOTER (tutup body, copyright, dan load JS) ---
require __DIR__ . '/includes/footer.php';