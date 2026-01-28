<?php

declare(strict_types=1);

// =======================================================
// BC 2.6.1 PRINT RUNNER (STABLE VERSION)
// =======================================================

// Amankan output dari awal (anti "Data has already been sent")
ob_start();
ini_set('display_errors', '0');
error_reporting(E_ALL);

require_once __DIR__ . '/../vendor/autoload.php';

// Helper
$helpersPath = __DIR__ . '/../src/Support/helpers.php';
if (is_file($helpersPath)) {
    require_once $helpersPath;
}

// Fallback v()
if (!function_exists('v')) {
    function v(array $data, string $key, string $default = '-'): string
    {
        $val = $data[$key] ?? $default;
        if ($val === null || $val === '') return $default;
        return (string)$val;
    }
}

// =======================================================
// DATA (MOCK / DB)
// =======================================================
$data = [
    'nomor_pengajuan' => '000261-317253-20260117-00002',
    'kantor_pabean'   => '-',

    'halaman'       => '1',
    'halaman_total' => '2',

    // A. Jenis Transaksi
    'trx_diperbaiki'      => 'checked',
    'trx_disubkontrakkan' => '',
    'trx_dipinjamkan'     => '',
    'trx_lainnya'         => '',

    // B. Data Pemberitahuan
    'pengusaha_npwp'   => '',
    'pengusaha_nama'   => '',
    'pengusaha_alamat' => '',
    'izin_tpb_no'      => '',
    'izin_tpb_tgl'     => '',

    'pengirim_npwp'    => '',
    'pengirim_nama'    => '',
    'pengirim_alamat'  => '',

    'pemilik_npwp'     => '',
    'pemilik_nama'     => '',
    'pemilik_alamat'   => '',

    // D. Bea Cukai
    'nomor_pendaftaran'   => '-',
    'tanggal_pendaftaran' => '',
    'packing_list'        => '',
    'packing_list_tgl'    => '',
    'pemenuhan_no'        => '',
    'pemenuhanan_tgl'     => '',
    'skep_no'             => '',
    'skep_tgl'            => '',
    'valuta'              => '-',
    'ndpbm'               => '0.00',
    'nilai_cif'           => '0.00',
    'nilai_cif_rp'        => 'Rp 0.00',

    // 17–21
    'jenis_sarana_angkut'        => '',
    'peti_kemas_no_ukuran_tipe'  => '',
    'kemasan_jumlah_jenis_merek' => '0',
    'berat_kotor'                => '0.0000',
    'berat_bersih'               => '0.0000',

    // 22–27
    'jenis_barang_info' =>
    '--------------- 0 Jenis barang. Lihat lembar lanjutan. ---------------',

    // 28–34
    'p28_bea_masuk' => '0',
    'p29_bea_masuk' => '0',
    'p30_cukai'     => '0',
    'p31_ppn'       => '0',
    'p32_ppnbm'     => '0',
    'p33_pph'       => '0',
    'p34_total'     => '0',

    // 35–40
    'jenis_jaminan'        => '',
    'nomor_jaminan'        => '-',
    'tgl_jaminan'          => '-',
    'nilai_jaminan'        => '0',
    'jatuh_tempo'          => '-',
    'penjamin'             => '',
    'bukti_jaminan_no_tgl' => '',
    'bukti_jaminan_tgl'    => '-',

    // C. Pengesahan
    'c_tempat'       => '',
    'c_tanggal'      => '17-01-2026',
    'c_nama_lengkap' => '',
    'c_jabatan'      => '',

    // Footer
    'printed_app'      => 'esikatERP',
    'printed_datetime' => date('d-M-Y | H:i'),

    // Page 2
    'nomor_pendaftaran2' => '-',
    'dokumen_list' => [],
];

// =======================================================
// MPDF SETUP (SAMAKAN DENGAN TEMPLATE)
// =======================================================
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    // Samakan dengan @page di template BC 2.6.1
    'margin_left'   => 5,
    'margin_right'  => 5,
    'margin_top'    => 6,
    'margin_bottom' => 8,
]);

$mpdf->SetTitle('BC 2.6.1 - ' . v($data, 'nomor_pengajuan'));
$mpdf->SetAuthor('System');

// =======================================================
// TEMPLATE
// =======================================================
$page1Path = __DIR__ . '/../src/Templates/bc261_page1.php';
$page2Path = __DIR__ . '/../src/Templates/bc261_page2.php';

if (!is_file($page1Path) || !is_file($page2Path)) {
    http_response_code(500);
    exit('Template BC 2.6.1 tidak ditemukan');
}

// Page 1
ob_start();
require $page1Path;
$mpdf->WriteHTML(ob_get_clean());

// Page 2
$mpdf->AddPage();
ob_start();
require $page2Path;
$mpdf->WriteHTML(ob_get_clean());

// =======================================================
// OUTPUT (PASTI AMAN)
// =======================================================
while (ob_get_level() > 0) {
    ob_end_clean();
}

$filenameSafe = preg_replace(
    '/[^0-9A-Za-z\-]/',
    '_',
    v($data, 'nomor_pengajuan')
);

$mpdf->Output("BC261_{$filenameSafe}.pdf", \Mpdf\Output\Destination::INLINE);
