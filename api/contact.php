<?php
/**
 * Magang 1.0 — Endpoint form kontak.
 *
 * Menerima POST (JSON atau form data) dengan field:
 *   nama  (wajib), email (opsional), pesan (wajib)
 * Pesan valid disimpan ke data/messages.json
 */

header('Content-Type: application/json; charset=utf-8');

if (($_SERVER['REQUEST_METHOD'] ?? '') !== 'POST') {
    http_response_code(405);
    echo json_encode(['success' => false, 'message' => 'Method tidak diizinkan. Gunakan POST.']);
    exit;
}

// Terima baik JSON body maupun form data.
$body = json_decode((string) file_get_contents('php://input'), true);
$data = is_array($body) ? $body : $_POST;

$nama  = trim((string) ($data['nama'] ?? ''));
$email = trim((string) ($data['email'] ?? ''));
$pesan = trim((string) ($data['pesan'] ?? ''));

if ($nama === '' || $pesan === '') {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Nama dan pesan wajib diisi.']);
    exit;
}

if ($email !== '' && !filter_var($email, FILTER_VALIDATE_EMAIL)) {
    http_response_code(422);
    echo json_encode(['success' => false, 'message' => 'Format email tidak valid.']);
    exit;
}

$file = __DIR__ . '/../data/messages.json';
$messages = [];
if (is_file($file)) {
    $decoded = json_decode((string) file_get_contents($file), true);
    if (is_array($decoded)) {
        $messages = $decoded;
    }
}

$messages[] = [
    'nama'    => $nama,
    'email'   => $email,
    'pesan'   => $pesan,
    'tanggal' => date('c'),
];

file_put_contents(
    $file,
    json_encode($messages, JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE | JSON_UNESCAPED_SLASHES)
);

echo json_encode(['success' => true, 'message' => 'Terima kasih, ' . $nama . '! Pesan Anda telah kami terima.']);