<?php

declare(strict_types=1);

// Suppress all output before PDF generation
ini_set('display_errors', '0');
error_reporting(0);

// ===== Root & Autoload (robust) =====
$root = realpath(__DIR__ . '/..'); // public -> root
if ($root === false) {
    die('Root project tidak ditemukan dari: ' . __DIR__);
}

$autoload = $root . '/vendor/autoload.php';
if (!file_exists($autoload)) {
    die(
        "vendor/autoload.php tidak ditemukan.\n" .
        "Jalankan: composer install\n" .
        "Expected: " . $autoload
    );
}
require $autoload;

use Mpdf\Mpdf;
use Mpdf\Output\Destination;

// ===== Data dummy (BC 2.3) =====
$data = [
    'nomor_pengajuan' => '000023-317253-20260116-00001',

    // isi field sesuai kebutuhan template bc23_page1/2 Anda
    'nomor_pendaftaran' => '',
    'jenis_sarana' => '',
    'no_polisi' => '',
    'no_segel' => '',
    'jenis_segel' => '',
    'catatan_bc_tujuan' => '',
    'merek_kemasan' => '',
    'jumlah_jenis_kemasan' => '',

    'kantor_asal' => '-',
    'kantor_tujuan' => '-',
    'jenis_tpb_asal' => '-',
    'jenis_tpb_tujuan' => '-',
    'jenis_transaksi' => '-',

    'tanggal_pengesahan' => '16-01-2026',
    'nama_lengkap' => '',
    'jabatan' => '',

    // footer
    'tanggal_cetak' => '16-01-2026',
    'printed_from' => 'esikatERP',
    'printed_time' => '16-Jan-2026 | 17:15',
];

// ===== mPDF init =====
$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P',
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 4.2,
    'margin_bottom' => 27.8,
    'default_font' => 'dejavusans',
]);

$mpdf->useSubstitutions = false;
$mpdf->shrink_tables_to_fit = 1;
$mpdf->packTableData = true;
$mpdf->simpleTables = true;

// Footer (global)
$mpdf->SetHTMLFooter('
<div style="font-size:7pt; width:100%;">
  <div style="float:left;">Printed from ' . htmlspecialchars((string)$data['printed_from']) . ' | ' . htmlspecialchars((string)$data['printed_time']) . '</div>
  <div style="float:right;">Halaman ke-{PAGENO} dari {nbpg}</div>
</div>
');

// ===== Template path (BC23) =====
$t1 = $root . '/src/Templates/bc23_page1.php';
$t2 = $root . '/src/Templates/bc23_page2.php';

if (!file_exists($t1)) {
    die('Template tidak ditemukan: ' . $t1);
}
if (!file_exists($t2)) {
    die('Template tidak ditemukan: ' . $t2);
}

// ===== Render template page 1 =====
ob_start();
include $t1; // $data terbaca di dalam template
$html1 = ob_get_clean();

// ===== Render template page 2 =====
ob_start();
include $t2;
$html2 = ob_get_clean();

// ===== Clear any previous output (paling aman) =====
while (ob_get_level() > 0) {
    ob_end_clean();
}

// ===== Set headers before output =====
header('Content-Type: application/pdf; charset=utf-8');
header('Content-Disposition: inline; filename="BC23.pdf"');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');

try {
    // Write page 1
    $mpdf->WriteHTML($html1);

    // Page break ke page 2
    $mpdf->AddPage();
    $mpdf->WriteHTML($html2);

    // Output
    $mpdf->Output('BC23.pdf', Destination::INLINE);
    exit;
} catch (Exception $e) {
    header('Content-Type: text/plain; charset=utf-8');
    die('PDF Error: ' . $e->getMessage());
}
