<?php

declare(strict_types=1);

// public/print_bc41.php
require_once __DIR__ . '/../vendor/autoload.php';

// Kalau Anda punya helper di src/Support/helpers.php, pakai require_once agar aman
$helpersPath = __DIR__ . '/../src/Support/helpers.php';
// ====================== PATH SETUP ======================
$root = dirname(__DIR__); // karena file ini ada di /public


// Hindari redeclare v() kalau template juga require helpers
if (file_exists($helpersPath)) {
    require_once $helpersPath;
}

use Mpdf\Mpdf;
use Mpdf\Output\Destination;

// ====================== DATA (GANTI SESUAI SUMBER DATA ANDA) ======================
// Anda bisa ambil dari DB / API / session. Ini dummy default supaya tidak error.
$data = $data ?? [
    'nomor_pengajuan'      => '000041-317253-20260116-00017',
    'tanggal'             => '16-01-2026',
    'printed_app'         => 'esikatERP',
    'printed_datetime'    => date('d-M-Y | H:i'),

    // Header page1
    'kantor_pabean'        => '-',
    'jenis_tpb'            => '-',
    'jenis_transaksi'      => '-',
    'nomor_pendaftaran'    => '',
    'tanggal_pendaftaran'  => '',

    // Field page1
    'pengusaha_npwp'       => '',
    'pengusaha_nama'       => '',
    'pengusaha_alamat'     => '',
    'pengusaha_izin_tpb'   => '',
    'penerima_npwp'        => '',
    'penerima_nama'        => '',
    'penerima_alamat'      => '',
];

// ====== INCLUDE TEMPLATE PATH (src/templates) ======
$page1Path = __DIR__ . '/../src/Templates/bc40_page1.php';
$page2Path = __DIR__ . '/../src/Templates/bc40_page2.php';


if (!file_exists($page1Path)) {
    http_response_code(500);
    echo "Template page1 not found: " . htmlspecialchars($page1Path);
    exit;
}
if (!file_exists($page2Path)) {
    http_response_code(500);
    echo "Template page2 not found: " . htmlspecialchars($page2Path);
    exit;
}

// Render helper: include template -> ambil output HTML
$render = static function (string $path, array $data): string {
    ob_start();
    // Pastikan $data tersedia di template
    /** @var array $data */
    include $path;
    return (string) ob_get_clean();
};

try {
    // ====================== MPDF CONFIG ======================
    $mpdf = new Mpdf([
        'mode'          => 'utf-8',
        'format'        => 'A4',
        'orientation'   => 'P',
        // Margin silakan samakan dengan form Anda sebelumnya
        // Kalau tiap page sudah atur @page margin di CSS, ini tetap aman.
        'margin_left'   => 5,
        'margin_right'  => 5,
        'margin_top'    => 4.2,
        'margin_bottom' => 27.8,
        'tempDir'       => $root . '/tmp', // optional, buat stabil di windows
    ]);

    $mpdf->setTitle('BC 4.0');
    $mpdf->showImageErrors = true;

    // ====================== PAGE 1 ======================
    $html1 = $render($page1Path, $data);
    $mpdf->WriteHTML($html1);

    // ====================== PAGE 2 ======================
    $mpdf->AddPage();
    $html2 = $render($page2Path, $data);
    $mpdf->WriteHTML($html2);

    // ====================== OUTPUT ======================
    // Inline preview di browser:
    $mpdf->Output('BC40.pdf', Destination::INLINE);
} catch (\Throwable $e) {
    http_response_code(500);
    echo "Gagal generate PDF. Error: " . htmlspecialchars($e->getMessage());
    echo "<br>File: " . htmlspecialchars($e->getFile());
    echo "<br>Line: " . (int)$e->getLine();
    exit;
}
