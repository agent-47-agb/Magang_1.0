<?php
/**
 * Magang 1.0 — Fungsi helper bersama.
 */

if (!function_exists('site_content')) {
    /**
     * Muat konten situs dari data/content.json (dicashe per request).
     *
     * @return array Konten situs; array kosong bila file tidak ada.
     */
    function site_content(): array
    {
        static $cache = null;

        if ($cache !== null) {
            return $cache;
        }

        $file = __DIR__ . '/../data/content.json';
        if (!is_file($file)) {
            return [];
        }

        $json = @file_get_contents($file);
        $data = json_decode((string) $json, true);

        return $cache = is_array($data) ? $data : [];
    }
}

if (!function_exists('e')) {
    /**
     * Escape string untuk aman output ke HTML.
     *
     * @param string|null $value
     * @return string
     */
    function e(?string $value): string
    {
        return htmlspecialchars($value ?? '', ENT_QUOTES, 'UTF-8');
    }
}