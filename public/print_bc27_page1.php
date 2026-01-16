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
    die("vendor/autoload.php tidak ditemukan.\n" .
        "Jalankan: composer install\n" .
        "Expected: " . $autoload);
}
require $autoload;

use Mpdf\Mpdf;

// ===== Data dummy =====
$data = [
    'nomor_pengajuan' => '000027-317253-20260113-00002',
    'kantor_asal' => '-',
    'kantor_tujuan' => '-',
    'jenis_tpb_asal' => '-',
    'jenis_tpb_tujuan' => '-',
    'jenis_transaksi' => '-',
    'nomor_pendaftaran' => '',
    'tanggal_pendaftaran' => '',
    'tpb_asal_npwp' => '',
    'tpb_asal_nama' => '',
    'tpb_asal_alamat' => '',
    'tpb_asal_no_izin' => '',
    'tpb_tujuan_npwp' => '',
    'tpb_tujuan_nama' => '',
    'tpb_tujuan_alamat' => '',
    'tpb_tujuan_no_izin' => '',
    'pemilik_npwp' => '',
    'pemilik_nama' => '',
    'pemilik_alamat' => '',
    'invoice_no' => '',
    'invoice_tgl' => '',
    'packing_list_no' => '',
    'packing_list_tgl' => '',
    'kontrak_no' => '',
    'kontrak_tgl' => '',
    'faktur_pajak_no' => '',
    'faktur_pajak_tgl' => '',
    'uang_muka_tgl' => '',
    'surat_jalan_no' => '',
    'surat_jalan_tgl' => '',
    'sk_persetujuan_no' => '',
    'sk_persetujuan_tgl' => '',
    'lainnya' => '',
    'riwayat_bc27_no' => '',
    'riwayat_bc27_tgl' => '',
    'riwayat_bc23_no' => '',
    'riwayat_bc23_tgl' => '',
    'riwayat_bc40_no' => '',
    'riwayat_bc40_tgl' => '',
    'valuta' => '-',
    'cif' => '20.00',
    'nilai_penggantian' => '0.00',
    'harga_penyerahan' => '20.00',
    'harga_perolehan' => '0.00',
    'nilai_uang_muka' => '0.00',
    'diskon' => '0.00',
    'dasar_pengenaan' => '20.00',
    'ppn' => '0.00',
    'ppnbm' => '0.00',
    'jenis_sarana' => 'Sarana Pengangkut Darat',
    'no_polisi' => '',
    'no_segel' => '',
    'jenis_segel' => '',
    'catatan_bc_tujuan' => '',
    'merek_kemasan' => '',
    'jumlah_jenis_kemasan' => '',
    'volume' => '20.0000',
    'berat_kotor' => '0.0000',
    'berat_bersih' => '20.0000',
    'tanggal_cetak' => '13-01-2026',
    'printed_from' => 'esikatERP',
    'printed_time' => '13-Jan-2026 | 21:04',
];

// ===== mPDF init =====
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'orientation' => 'P',
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 4.2,
    'margin_bottom' => 27.8, // dari 10 -> 18 (buat ruang kosong bawah lebih lebar)
    'default_font' => 'dejavusans',
]);

$mpdf->useSubstitutions = false;
$mpdf->shrink_tables_to_fit = 1;
$mpdf->packTableData = true;
$mpdf->simpleTables = true;

$mpdf->SetHTMLFooter('
<div style="font-size:7pt; width:100%;">
  <div style="float:left;">Printed from ' . htmlspecialchars($data['printed_from']) . ' | ' . htmlspecialchars($data['printed_time']) . '</div>
  <div style="float:right;">Halaman ke-{PAGENO} dari {nbpg}</div>
</div>
');

// ===== Render template =====
$template = $root . '/src/Templates/bc27_page1.php';
if (!file_exists($template)) {
    die('Template tidak ditemukan: ' . $template);
}

ob_start();
include $template; // $data terbaca di dalam template
$html = ob_get_clean();

// Clear any previous output
while (ob_get_level()) {
    ob_end_clean();
}

// Set headers before output
header('Content-Type: application/pdf; charset=utf-8');
header('Content-Disposition: inline; filename="BC27.pdf"');
header('Cache-Control: public, must-revalidate, max-age=0');
header('Pragma: public');

try {
    $mpdf->WriteHTML($html);
    $mpdf->Output('BC27.pdf', \Mpdf\Output\Destination::INLINE);
} catch (Exception $e) {
    header('Content-Type: text/plain');
    die('PDF Error: ' . $e->getMessage());
}
