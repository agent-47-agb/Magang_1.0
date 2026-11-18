<?php
// includes/database.php — Koneksi ke MariaDB
//
// Database 'data_agregat_2023-2025' seharusnya sudah ada di MariaDB server.
// File ini hanya melakukan koneksi PDO; tabel-tabel dibuat secara manual
// atau melalui proses migrasi terpisah. Tidak ada CREATE TABLE di sini.

$host = 'localhost';
$user = 'root';
$pass = '1234al';
$db   = 'data_agregat_2023-2025';

try {
    $pdo = new PDO(
        "mysql:host=$host;dbname=$db;charset=utf8mb4",
        $user,
        $pass,
        [
            PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION,
            PDO::ATTR_DEFAULT_FETCH_MODE => PDO::FETCH_ASSOC,
        ]
    );
} catch (PDOException $e) {
    die("Koneksi database gagal: " . $e->getMessage());
}