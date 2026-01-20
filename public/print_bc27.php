<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Mpdf\Mpdf;

/**
 * OPTIONAL: kalau project kamu sudah punya ensure_utf8() dan v(),
 * kamu boleh require helper asli kamu di sini.
 * Misal:
 * require __DIR__ . '/../src/Support/helpers.php';
 */

// ---- Fallback aman (kalau helper belum ada) ----
if (!function_exists('ensure_utf8')) {
    function ensure_utf8(string $html): string
    {
        // mPDF relatif aman dengan UTF-8, ini hanya fallback
        if (!mb_detect_encoding($html, 'UTF-8', true)) {
            return mb_convert_encoding($html, 'UTF-8');
        }
        return $html;
    }
}
if (!function_exists('v')) {
    function v(array $arr, string $key, $default = '')
    {
        return array_key_exists($key, $arr) ? $arr[$key] : $default;
    }
}
// ----------------------------------------------

// =====================
// DATA DUMMY (sesuaikan dari DB)
// =====================
$data = [
    'nomor_pengajuan'      => '000027-317253-20260113-00002',
    'kantor_asal'          => '-',
    'kantor_tujuan'        => '-',
    'jenis_transaksi'      => '-',
    'jenis_tpb_asal'       => '-',
    'jenis_tpb_tujuan'     => '-',
    'nomor_pendaftaran'    => '',
    'tanggal_pendaftaran'  => '',
    'tanggal_cetak'        => '13-01-2026',
    'printed_from'         => 'esikatERP',
    'printed_date'         => date('d-M-Y'),
    'printed_time'         => date('H:i'),
];

// Contoh: items untuk halaman 2 & 3 (kalau template butuh)
$itemsPage2 = $data['barang_page2'] ?? [
    [
        'hs' => '34031990',
        'kode_barang' => '83242345',
        'uraian' => 'RAW MATERIAL',
        'merk' => '-',
        'tipe' => '-',
        'ukuran' => '-',
        'spesifikasi' => '-',
        'jumlah_satuan' => '10.00',
        'berat_bersih' => '10.00',
        'volume' => '10.00',
        'nilai_cif' => 'Rp 10.00',
        'harga_penyerahan' => '10.00',
        'harga_perolehan' => '10.00',
        'nilai_jasa' => '10.00',
    ],
];

$itemsPage3 = $data['barang_page3'] ?? $itemsPage2;

// Kalau halaman 3 meneruskan nomor dari halaman 2:
// Misal halaman 2 sudah sampai baris ke-10, maka startNoPage3 = 11
$startNoPage2 = 1;
$startNoPage3 = 1;

// =====================
// MPDF INIT
// =====================
$mpdf = new Mpdf([
    'mode'          => 'utf-8',
    'format'        => 'A4',
    'margin_left'   => 5,
    'margin_right'  => 5,
    'margin_top'    => 4.2,
    'margin_bottom' => 27.8,
    'default_font'  => 'Arial',
]);

// =====================
// RENDER PAGE 1
// =====================
$page1Tpl = __DIR__ . '/../src/Templates/bc27_page1.php';

ob_start();
include $page1Tpl;           // template pakai $data
$html1 = ob_get_clean();

$mpdf->WriteHTML(ensure_utf8($html1));

// =====================
// PAGE BREAK -> PAGE 2
// =====================
$mpdf->AddPage();

$page2Tpl = __DIR__ . '/../src/Templates/bc27_page2.php';

ob_start();
$items   = $itemsPage2;      // template pakai $items
$startNo = $startNoPage2;    // template pakai $startNo
include $page2Tpl;
$html2 = ob_get_clean();

$mpdf->WriteHTML(ensure_utf8($html2));

// =====================
// PAGE BREAK -> PAGE 3
// =====================
$mpdf->AddPage();

$page3Tpl = __DIR__ . '/../src/Templates/bc27_page3.php';

ob_start();
$items   = $itemsPage3;
$startNo = $startNoPage3;
include $page3Tpl;
$html3 = ob_get_clean();

$mpdf->WriteHTML(ensure_utf8($html3));

// =====================
// OUTPUT
// =====================
$filename = 'BC27_3page_' . v($data, 'nomor_pengajuan', 'document') . '.pdf';
$mpdf->Output($filename, 'I');
exit;
