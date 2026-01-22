<?php

declare(strict_types=1);

// public/print_bc262.php
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
        return (string) $val;
    }
}

// ====== DATA (contoh). Ganti ini ambil dari DB / request Anda ======
$data = [
    // Header
    'nomor_pengajuan' => '000262-317253-20260117-00015',
    'kantor_pabean'   => '-',

    // halaman
    'halaman'       => '1',
    'halaman_total' => '2',

    // A. TUJUAN PEMASUKAN (BC 2.6.2)
    // isi dengan 'checked' kalau mau dianggap aktif (di template bisa dipakai)
    'tujuan_eks_diperbaiki'      => 'checked',
    'tujuan_eks_disubkontrakkan' => '',
    'tujuan_eks_dipinjamkan'     => '',
    'tujuan_lainnya'             => '',

    // B. Data pemberitahuan
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

    // Dokumen Pelengkap Pabean (BC 2.6.2)
    'packing_list_no'            => '',
    'packing_list_tgl'           => '',
    'dok12_surat_keputusan_no'   => '',
    'dok12_surat_keputusan_tgl'  => '',
    'dok13_bc_no'                => '',
    'dok13_bc_tgl'               => '',

    // 14–16
    'valuta'       => '-',
    'ndpbm'        => '0.00',
    'nilai_cif'    => '0.00',
    'nilai_cif_rp' => 'Rp 0.00',

    // 17–21
    'jenis_sarana_angkut'        => '',
    'peti_kemas_no_ukuran_tipe'  => '',
    // kamu pakai key ini di layout 0 (kotak kecil)
    'jumlah_kemasan'             => '0',
    'berat_kotor'                => '0.0000',
    'berat_bersih'               => '0.0000',

    // Area Jenis Barang (tengah)
    'jumlah_jenis_barang' => '0',

    // 26–32 Data Penyesuaian Jaminan (BC 2.6.2)
    'p26_bea_masuk' => '0',
    'p27_bea_masuk' => '0',
    'p28_cukai'     => '0',
    'p29_ppn'       => '0',
    'p30_ppnbm'     => '0',
    'p31_pph'       => '0',
    'p32_total'     => '0',

    // 33–38 Data Jaminan (BC 2.6.2)
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

    // Page 2 (lembar lanjutan dokumen pelengkap pabean)
    'nomor_pendaftaran2' => '-',
    'dokumen_list' => [
        // ['no'=>'1', 'jenis'=>'Packing List', 'nomor'=>'...', 'tanggal'=>'...'],
    ],
];

// ====== MPDF SETUP ======
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    // Kamu sudah pakai @page di template (margin: 6mm 5mm 8mm 5mm),
    // jadi margin di sini boleh minimal, tapi aman kita samakan:
    'margin_left'   => 5,
    'margin_right'  => 5,
    'margin_top'    => 6,
    'margin_bottom' => 8,
]);

$mpdf->SetTitle('BC 2.6.2 - ' . v($data, 'nomor_pengajuan'));
$mpdf->SetAuthor('System');

// ====== INCLUDE TEMPLATE PATH (src/Templates) ======
$page1Path = __DIR__ . '/../src/Templates/bc262_page1.php';
$page2Path = __DIR__ . '/../src/Templates/bc262_page2.php';

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
$mpdf->Output("BC262_{$filenameSafe}.pdf", \Mpdf\Output\Destination::INLINE);
