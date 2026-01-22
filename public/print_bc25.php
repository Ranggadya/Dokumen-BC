<?php

declare(strict_types=1);

// public/print_bc25.php
require_once __DIR__ . '/../vendor/autoload.php';

// Optional helpers
$helpersPath = __DIR__ . '/../src/Support/helpers.php';
if (is_file($helpersPath)) {
    require_once $helpersPath;
}

// Fallback kalau helpers.php tidak punya v()
if (!function_exists('v')) {
    function v(array $data, string $key, string $default = '-'): string
    {
        $val = $data[$key] ?? $default;
        if ($val === null) return $default;
        $val = (string)$val;
        return $val === '' ? $default : $val;
    }
}

// Closure helper biar konsisten dengan template (bisa dipakai $v($data,'key'))
$v = static function (array $data, string $key, string $default = '-'): string {
    return v($data, $key, $default);
};

// ====== DATA CONTOH (ganti dari DB / request) ======
$data = [
    // Header
    'kantor_pabean'   => '-',
    'nomor_pengajuan' => '000025-317253-20260117-00000',
    'halaman'         => '1',
    'halaman_total'   => '2',

    // A. Jenis TPB (isi 'checked' kalau aktif)
    'tpb_1' => '', // Kawasan Berikat
    'tpb_2' => '', // Gudang Berikat
    'tpb_3' => '', // TPPB
    'tpb_4' => '', // TBB
    'tpb_5' => '', // TLB
    'tpb_6' => '', // KDUB
    'tpb_7' => '', // Lainnya

    // B. Data Pemberitahuan - Penyelenggara/Pengusaha
    'pengusaha_npwp'      => '',
    'pengusaha_nama'      => '',
    'pengusaha_alamat'    => '',
    'pengusaha_izin_tpb'  => '',
    'pengusaha_api'       => '--',

    // B. Pemilik Barang
    'pemilik_npwp'   => '',
    'pemilik_nama'   => '',
    'pemilik_alamat' => '',

    // B. Penerima Barang
    'penerima_npwp'   => '',
    'penerima_nama'   => '',
    'penerima_alamat' => '',
    'penerima_niper'  => '-',
    'penerima_api'    => '--',

    // Jenis transaksi (text bebas)
    'jenis_transaksi' => '-',

    // D. Diisi Bea Cukai
    'nomor_pendaftaran'   => '-',
    'tanggal_pendaftaran' => '',

    // Dokumen Pelengkap Pabean 14-18
    'invoice_no'          => '',
    'invoice_tgl'         => '',
    'packing_list_no'     => '',
    'packing_list_tgl'    => '',
    'kontrak_no'          => '',
    'kontrak_tgl'         => '',
    'fasilitas_impor'     => '-',
    'fasilitas_impor_tgl' => '',
    'surat_keputusan_no'  => '',
    'surat_keputusan_tgl' => '',

    // 19-25
    'valuta'          => '-',
    'ndpbm'           => '0.00',
    'nilai_cif'       => '0.00',
    'harga_penyerahan' => '0.00',
    'uang_muka'       => '0.00',
    'diskon'          => '0.00',
    'dasar_pengenaan' => '0.00',
    'ppn_pajak'       => '0.00',
    'ppnbm_pajak'     => '0.00',

    // 26-30
    'peti_kemas'        => '',
    'kemasan'           => '',
    'jumlah_kemasan'    => '0',
    'jenis_sarana_angkut' => '-',
    'berat_kotor'       => '0.0000',
    'berat_bersih'      => '0.0000',

    // Jenis barang info (dipakai di strip)
    'jumlah_jenis_barang' => '0',

    // 37-43 Pungutan
    'p37_bm_dibayar' => '0',
    'p37_bm_dibebaskan' => '0',
    'p37_bm_ditanggung' => '0',
    'p37_bm_sudah_dilunasi' => '0',
    'p37_bm_wajib_bayar' => '0',

    'p38_bmt_dibayar' => '0',
    'p38_bmt_dibebaskan' => '0',
    'p38_bmt_ditanggung' => '0',
    'p38_bmt_sudah_dilunasi' => '0',
    'p38_bmt_wajib_bayar' => '0',

    'p39_cukai_dibayar' => '0',
    'p39_cukai_dibebaskan' => '0',
    'p39_cukai_ditanggung' => '0',
    'p39_cukai_sudah_dilunasi' => '0',
    'p39_cukai_wajib_bayar' => '0',

    'p40_ppn_dibayar' => '0',
    'p40_ppn_dibebaskan' => '0',
    'p40_ppn_ditanggung' => '0',
    'p40_ppn_sudah_dilunasi' => '0',
    'p40_ppn_wajib_bayar' => '0',

    'p40a_ppn_lokal_dibayar' => '0',
    'p40a_ppn_lokal_dibebaskan' => '0',
    'p40a_ppn_lokal_ditanggung' => '0',
    'p40a_ppn_lokal_sudah_dilunasi' => '0',
    'p40a_ppn_lokal_wajib_bayar' => '0',

    'p41_ppnbm_dibayar' => '0',
    'p41_ppnbm_dibebaskan' => '0',
    'p41_ppnbm_ditanggung' => '0',
    'p41_ppnbm_sudah_dilunasi' => '0',
    'p41_ppnbm_wajib_bayar' => '0',

    'p42_pph_dibayar' => '0',
    'p42_pph_dibebaskan' => '0',
    'p42_pph_ditanggung' => '0',
    'p42_pph_sudah_dilunasi' => '0',
    'p42_pph_wajib_bayar' => '0',

    'p43_total_dibayar' => '0',
    'p43_total_dibebaskan' => '0',
    'p43_total_ditanggung' => '0',
    'p43_total_sudah_dilunasi' => '0',
    'p43_total_wajib_bayar' => '0',

    // C. Pengesahan
    'c_tempat'       => '',
    'c_tanggal'      => '',
    'c_nama_lengkap' => '',
    'c_jabatan'      => '',

    // E. Pembayaran
    'e_no_tanggal' => '',

    // Footer
    'printed_app'  => 'esikatERP',
    'printed_date' => date('d-M-Y'),
    'printed_time' => date('H:i'),
];

// ====== MPDF SETUP ======
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    // Ikutin pendekatan kamu: margin ketat (form sensitif)
    'margin_left'   => 8,
    'margin_right'  => 8,
    'margin_top'    => 8,
    'margin_bottom' => 8,
]);

$mpdf->SetTitle('BC 2.5 - ' . v($data, 'nomor_pengajuan'));
$mpdf->SetAuthor('System');

// ====== TEMPLATE PATH ======
$page1Path = __DIR__ . '/../src/Templates/bc25_page1.php';

if (!is_file($page1Path)) {
    http_response_code(500);
    exit("Template tidak ditemukan: {$page1Path}");
}

// ====== RENDER PAGE 1 ======
ob_start();
require $page1Path; // $data dan $v terbawa ke scope template
$html1 = ob_get_clean();

$mpdf->WriteHTML($html1);

// ====== OUTPUT ======
$filenameSafe = preg_replace('/[^0-9A-Za-z\-]/', '_', v($data, 'nomor_pengajuan', 'BC25'));
$mpdf->Output("BC25_{$filenameSafe}.pdf", \Mpdf\Output\Destination::INLINE);
