<?php
/**
 * Magang 1.0 — Konfigurasi situs.
 *
 * MENAMBAHKAN SECTION BARU:
 *   1. Buat template di includes/sections/nama-section.php
 *   2. Tambahkan "nama-section" ke daftar SITE_SECTIONS di bawah
 *      (posisi daftar = urutan tampil di halaman).
 *
 * Mengubah teks/konten: edit data/content.json — tidak perlu
 * menyentuh file PHP.
 */

// Section yang di-render di halaman beranda, sesuai urutan tampilan.
define('SITE_SECTIONS', [
    'hero',     // includes/sections/hero.php     — banner utama
    'features', // includes/sections/features.php — kartu fitur
    'about',    // includes/sections/about.php    — tentang + statistik
    'gallery',  // includes/sections/gallery.php  — galeri carousel
    'contact',  // includes/sections/contact.php  — form kontak
]);