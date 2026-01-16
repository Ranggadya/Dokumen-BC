<?php

declare(strict_types=1);

require __DIR__ . '/../vendor/autoload.php';

use Mpdf\Mpdf;

ob_start();

$data = [
    'nomor_pengajuan' => '000027-317253-20260113-00002',
    'kantor_asal' => '-',
    'kantor_tujuan' => '-',
    'jenis_transaksi' => '-',
    'jenis_tpb_asal' => '-',
    'jenis_tpb_tujuan' => '-',
    'nomor_pendaftaran' => '',
    'tanggal_pendaftaran' => '',
    'tanggal_cetak' => '13-01-2026',
    'printed_from' => 'esikatERP',
    'printed_date' => date('d-M-Y'),
    'printed_time' => date('H:i'),
];

// contoh: barang untuk halaman 3
$items = $data['barang_page3'] ?? [
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

// kalau halaman 3 meneruskan nomor dari halaman 2, set sesuai kebutuhan
$startNo = 1; // misal kalau halaman 3 berisi baris ke-3 dst, set 3

$tpl = __DIR__ . '/../src/Templates/bc27_page3_MARGIN_FIXED.php';

ob_start();
$itemsLocal = $items; // hindari variable collision
$startNoLocal = $startNo;
$items = $itemsLocal;
$startNo = $startNoLocal;
include $tpl;
$html = ob_get_clean();

$html = ensure_utf8($html);

$mpdf = new Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 4.2,
    'margin_bottom' => 27.8,
    'default_font' => 'Arial',
]);

$mpdf->WriteHTML($html);

ob_end_clean();

$mpdf->Output('BC27_page3.pdf', 'I');
