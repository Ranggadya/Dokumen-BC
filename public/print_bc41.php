<?php

declare(strict_types=1);

// public/print_bc41.php
require_once __DIR__ . '/../vendor/autoload.php';

// Kalau Anda punya helper di src/Support/helpers.php, pakai require_once agar aman
$helpersPath = __DIR__ . '/../src/Support/helpers.php';
if (is_file($helpersPath)) {
    require_once $helpersPath;
}

// Fallback kalau helpers.php tidak punya v()
if (!function_exists('v')) {
    function v(array $data, string $key, string $default = '-'): string
    {
        $val = $data[$key] ?? $default;
        if ($val === null || $val === '') return $default;
        return (string)$val;
    }
}

// ====== DATA (contoh). Ganti ini ambil dari DB / request Anda ======
$data = [
    'nomor_pengajuan' => '000041-317253-20260116-00017',
    'tanggal' => '16-01-2026',

    'kantor_pabean' => '-',
    'jenis_tpb' => '-',
    'jenis_transaksi' => '-',

    'nomor_pendaftaran' => '',
    'tanggal_pendaftaran' => '',

    'pengusaha_npwp' => '',
    'pengusaha_nama' => '',
    'pengusaha_alamat' => '',
    'pengusaha_izin_tpb' => '',

    'penerima_npwp' => '',
    'penerima_nama' => '',
    'penerima_alamat' => '',

    'pemilik_npwp' => '',
    'pemilik_nama' => '',
    'pemilik_alamat' => '',

    'packing_list_tgl' => '',
    'kontrak_tgl' => '',
    'faktur_pajak_tgl' => '',
    'uang_muka_tgl' => '',
    'sk_persetujuan_tgl' => '',
    'dok_jenis_nomor_tgl' => '-',
    'dok_tgl_15' => '-',

    'jenis_sarana' => 'Darat',
    'no_polisi' => '-',

    'harga_penyerahan' => '',
    'nilai_penggantian' => '',
    'jenis_jasa_kena_pajak' => '',
    'nilai_uang_muka' => '0,00',
    'nilai_perolehan' => '',
    'diskon' => '0,00',
    'dpp' => '',
    'ppn_11' => '',
    'ppnbm' => '0,00',

    'jenis_kemasan' => '-',
    'merek_kemasan' => '-',
    'jumlah_kemasan' => '0',

    'volume_m3' => '0,0000',
    'berat_kotor' => '0,0000',
    'berat_bersih' => '0,0000',

    'nama_petugas' => '-',
    'nip_petugas' => '-',

    'wajib_bayar' => '',
    'no_bayar' => '-',
    'tgl_bayar' => '-',

    'printed_app' => 'esikatERP',
    'printed_datetime' => date('d-M-Y | H:i'),
];

// ====== MPDF SETUP ======
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 8,
    'margin_right' => 8,
    'margin_top' => 8,
    'margin_bottom' => 8,
]);

$mpdf->SetTitle('BC 4.1 - ' . v($data, 'nomor_pengajuan'));
$mpdf->SetAuthor('System');

// ====== INCLUDE TEMPLATE PATH (src/templates) ======
$page1Path = __DIR__ . '/../src/Templates/bc41_page1.php';
$page2Path = __DIR__ . '/../src/Templates/bc41_page2.php';

if (!is_file($page1Path)) {
    http_response_code(500);
    exit("Template tidak ditemukan: {$page1Path}");
}
if (!is_file($page2Path)) {
    http_response_code(500);
    exit("Template tidak ditemukan: {$page2Path}");
}

// Render page 1
ob_start();
require $page1Path; // $data ikut terbawa karena scope file include
$html1 = ob_get_clean();
$mpdf->WriteHTML($html1);

// Render page 2
$mpdf->AddPage();
ob_start();
require $page2Path;
$html2 = ob_get_clean();
$mpdf->WriteHTML($html2);

// Output inline (browser)
$filenameSafe = preg_replace('/[^0-9A-Za-z\-]/', '_', v($data, 'nomor_pengajuan'));
$mpdf->Output("BC41_{$filenameSafe}.pdf", \Mpdf\Output\Destination::INLINE);
