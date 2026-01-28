<?php

declare(strict_types=1);

// HARUS paling atas, sebelum output apapun
ini_set('display_errors', '0'); // jangan tampilkan warning ke output
error_reporting(E_ALL);

// Start buffering untuk "menangkap" output liar (whitespace/notice/debug)
if (!ob_get_level()) {
    ob_start();
}

if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

// public/print_bc261.php
require_once __DIR__ . '/vendor/autoload.php';

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

if (!function_exists('IndonesiaTgl')) {
    function IndonesiaTgl(?string $tgl): string
    {
        if (empty($tgl) || $tgl === '0000-00-00' || $tgl === '-') {
            return '-';
        }
        $ts = strtotime($tgl);
        if ($ts === false) return (string)$tgl;
        return date('d-m-Y', $ts);
    }
}

if (!function_exists('format_angka_desimal')) {
    function format_angka_desimal($angka, int $decimal = 2): string
    {
        $angka = (float)($angka ?? 0);
        return number_format($angka, $decimal, '.', ',');
    }
}

if (!function_exists('bc261_build_ref_map')) {
    function bc261_build_ref_map($query, string $table, string $kodeField, string $uraianField): array
    {
        try {
            $rows = $query->table($table)
                ->where('is_aktif', '=', 1)
                ->get() ?? [];
        } catch (\Throwable $e) {
            return [];
        }

        $map = [];
        foreach ($rows as $row) {
            $kode = trim((string)($row[$kodeField] ?? ''));
            if ($kode === '') continue;
            $map[$kode] = trim((string)($row[$uraianField] ?? ''));
        }
        return $map;
    }
}

if (!function_exists('bc261_ref_label')) {
    function bc261_ref_label(array $map, ?string $kode, bool $showCode = true): string
    {
        $kode = trim((string)($kode ?? ''));
        if ($kode === '') return '-';
        $nama = $map[$kode] ?? '';
        if ($nama === '') return $kode;
        return $showCode ? "{$kode} - {$nama}" : $nama;
    }
}

/* ===========================
 * 1) FETCH DATA DB + MAPPING ke $data 
 * =========================== */

// id header
$idHeader = $_GET['id'] ?? null;
if (empty($idHeader)) {
    http_response_code(400);
    exit('ID dokumen tidak ditemukan (param ?id=...).');
}

// Pastikan $query tersedia 
if (!isset($query)) {
    http_response_code(500);
    exit('Objek $query (DB query builder) belum tersedia di file ini. Pastikan inisialisasi DB dilakukan sebelum print_bc261.php dipanggil.');
}

// Validasi kdusaha dari session bila ada
$kdUsahaSession = $_SESSION['app']['auth']['user']['kdusaha'] ?? null;

// header
$builder = $query->table('ceisa_header')->where('id_header', '=', $idHeader);
if (!empty($kdUsahaSession)) {
    $builder->where('kdusaha', '=', $kdUsahaSession);
}
$h = $builder->first();

if (!$h) {
    http_response_code(404);
    exit('Dokumen tidak ditemukan / tidak berhak diakses.');
}

// entitas
$entitasRows = $query->table('ceisa_entitas')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriEntitas', 'ASC')
    ->get() ?? [];

$entitasByKode = [];
foreach ($entitasRows as $row) {
    $kode = (string)($row['kodeEntitas'] ?? '');
    $entitasByKode[$kode][] = $row;
}

$ambilEntitas = function (string $kode) use ($entitasByKode) {
    return $entitasByKode[$kode][0] ?? null;
};

$entPengusahaTPB = $ambilEntitas('2'); // di contoh bc261_coth ini "Eksportir". Untuk BC2.6.1 kamu jadikan "Pengusaha TPB"
$entPengirim     = $ambilEntitas('6'); // di contoh "Pembeli". Kamu jadikan "Pengirim Barang" (placeholder mapping)
$entPemilik      = $ambilEntitas('7'); // "Pemilik"
$entPenerima     = $ambilEntitas('8'); // "Penerima"

// dokumen, kemasan, kontainer, pengangkut
$daftarDokumen = $query->table('ceisa_dokumen')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriDokumen', 'ASC')
    ->get() ?? [];

$daftarKemasan = $query->table('ceisa_kemasan')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriKemasan', 'ASC')
    ->get() ?? [];

$daftarKontainer = $query->table('ceisa_kontainer')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriKontainer', 'ASC')
    ->get() ?? [];

$pengangkut = $query->table('ceisa_pengangkut')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriPengangkut', 'ASC')
    ->first() ?? null;

$kesiapan = $query->table('ceisa_kesiapan_barang')
    ->where('id_header', '=', $idHeader)
    ->orderBy('id', 'ASC')
    ->first() ?? null;

try {
    $bankDevisa = $query->table('ceisa_bank_devisa')
        ->where('id_header', '=', $idHeader)
        ->orderBy('seriBank', 'ASC')
        ->first() ?? ['namaBank' => '-'];
} catch (\Throwable $e) {
    $bankDevisa = ['namaBank' => '-'];
}

/* ===== Load referensi (yang kepake di template kamu) ===== */
$mapKantor      = bc261_build_ref_map($query, 'ceisa_referensi_kantor', 'kode_kantor', 'nama_kantor');
$mapValuta      = bc261_build_ref_map($query, 'ceisa_referensi_valuta', 'kode', 'nama');
$mapJenisKemasan = bc261_build_ref_map($query, 'ceisa_referensi_jenis_kemasan', 'kode', 'uraian');
$mapCaraAngkut  = bc261_build_ref_map($query, 'ceisa_referensi_cara_pengangkutan', 'kode_cara', 'uraian_cara');
$mapUkuranKont  = bc261_build_ref_map($query, 'ceisa_referensi_ukuran_kontainer', 'kode', 'uraian');
$mapJenisKont   = bc261_build_ref_map($query, 'ceisa_referensi_jenis_kontainer', 'kode', 'uraian');

/* ===== Build detail peti (18) dan kemasan (19) ===== */
$detail_peti = '-';
if (!empty($daftarKontainer)) {
    $firstPeti = $daftarKontainer[0];
    $nomorKont = $firstPeti['nomorKontainer'] ?? '-';
    $ukuran    = bc261_ref_label($mapUkuranKont, $firstPeti['kodeUkuranKontainer'] ?? '', false);
    $jenisKont = bc261_ref_label($mapJenisKont,  $firstPeti['kodeJenisKontainer'] ?? '', false);
    $detail_peti = trim($nomorKont . ' / ' . $ukuran . ' / ' . $jenisKont);
}

$jumlah_kemasan = 0;
$detail_kemasan_line = '-';
if (!empty($daftarKemasan)) {
    $parts = [];
    foreach ($daftarKemasan as $k) {
        $jml  = (int)($k['jumlahKemasan'] ?? 0);
        $jumlah_kemasan += $jml;

        $kode = (string)($k['kodeJenisKemasan'] ?? '');
        $jenisLabel = bc261_ref_label($mapJenisKemasan, $kode, true);
        $merk = (string)($k['merkKemasan'] ?? '');

        $text = trim($jml . ' ' . $jenisLabel);
        if ($merk !== '') $text .= ' / ' . $merk;
        $parts[] = $text;
    }
    $detail_kemasan_line = implode('; ', $parts);
}

/* ===== Dokumen pelengkap pabean: ambil Packing List bila ada =====
*/
$packing_no = '';
$packing_tgl = '';
foreach ($daftarDokumen as $doc) {
    $kode = (string)($doc['kodeDokumen'] ?? '');
    if ($kode === '217') {
        $packing_no = (string)($doc['nomorDokumen'] ?? '');
        $packing_tgl = IndonesiaTgl($doc['tanggalDokumen'] ?? '');
        break;
    }
}

/* ===== Build cara angkut (buat field jenis_sarana_angkut di template) ===== */
$caraAngkutText = '';
if ($pengangkut) {
    $caraAngkutText = bc261_ref_label($mapCaraAngkut, $pengangkut['kodeCaraAngkut'] ?? '', false);
}

// Kita gabung: cara angkut + nama + nomor
$jenisSaranaAngkut = trim(
    implode(' | ', array_filter([
        $caraAngkutText,
        $pengangkut['namaPengangkut'] ?? '',
        $pengangkut['nomorPengangkut'] ?? '',
    ], fn($x) => trim((string)$x) !== ''))
);

/* ===== Mapping utama ke $data (nama field mengikuti template kamu) ===== */

// kantor pabean: ambil yang paling masuk akal untuk form kamu.
// Kamu bisa pilih: kodeKantorEkspor / kodeKantor / kodeKantorMuat
$kantorPabeanLabel = bc261_ref_label(
    $mapKantor,
    $h['kodeKantor'] ?? ($h['kodeKantorEkspor'] ?? ($h['kodeKantorMuat'] ?? '')),
    true
);

// Valuta + NDPBM
$valutaLabel = bc261_ref_label($mapValuta, $h['kodeValuta'] ?? '', true);
$ndpbm = (float)($h['ndpbm'] ?? 0);

// CIF (karena skema DB kamu belum pasti, kita coba beberapa kemungkinan field)
$cif = (float)(
    $h['cif'] ??
    $h['nilaiCif'] ??
    $h['nilai_cif'] ??
    0
);

// CIF Rupiah (jika CIF dinyatakan valuta asing)
$cif_rp = $cif * $ndpbm;

// Bruto/Netto
$bruto = (float)($h['bruto'] ?? 0);
$netto = (float)($h['netto'] ?? 0);

// Nomor/Tanggal pendaftaran (di bc261_coth: nomorDaftar & tanggalDaftar)
$nomorDaftar = (string)($h['nomorDaftar'] ?? '-');
$tglDaftar   = IndonesiaTgl($h['tanggalDaftar'] ?? '');

// Pengesahan (kalau di DB ada)
$ttdTempat = (string)($h['kotaTtd'] ?? '');
$ttdTgl    = IndonesiaTgl($h['tanggalTtd'] ?? '');
$ttdNama   = (string)($h['namaTtd'] ?? '');
$ttdJabatan = (string)($h['jabatanTtd'] ?? '');

// Build $data final yang dipakai HTML kamu
$data = [
    // Header top
    'nomor_pengajuan' => (string)($h['nomorAju'] ?? '-'),
    'kantor_pabean'   => $kantorPabeanLabel,

    // Halaman
    'halaman'       => '1',
    'halaman_total' => '2',

    // A. Jenis transaksi (tetap manual dulu kalau belum ada di DB)
    'trx_diperbaiki'      => 'checked',
    'trx_disubkontrakkan' => '',
    'trx_dipinjamkan'     => '',
    'trx_lainnya'         => '',

    // B. Data Pemberitahuan (mapping dari entitas: ini placeholder karena di sistem tiap kantor bisa beda)
    'pengusaha_npwp'   => (string)($entPengusahaTPB['nomorIdentitas'] ?? ''),
    'pengusaha_nama'   => (string)($entPengusahaTPB['namaEntitas'] ?? ''),
    'pengusaha_alamat' => (string)($entPengusahaTPB['alamatEntitas'] ?? ''),
    'izin_tpb_no'      => (string)($h['nomorIzinTpb'] ?? ''),    
    'izin_tpb_tgl'     => IndonesiaTgl($h['tanggalIzinTpb'] ?? ''),

    'pengirim_npwp'    => (string)($entPengirim['nomorIdentitas'] ?? ''),
    'pengirim_nama'    => (string)($entPengirim['namaEntitas'] ?? ''),
    'pengirim_alamat'  => (string)($entPengirim['alamatEntitas'] ?? ''),

    'pemilik_npwp'     => (string)($entPemilik['nomorIdentitas'] ?? ''),
    'pemilik_nama'     => (string)($entPemilik['namaEntitas'] ?? ''),
    'pemilik_alamat'   => (string)($entPemilik['alamatEntitas'] ?? ''),

    // D. Bea Cukai
    'nomor_pendaftaran'   => $nomorDaftar,
    'tanggal_pendaftaran' => $tglDaftar,

    // Dokumen pelengkap: Packing List
    'packing_list'     => $packing_no,
    'packing_list_tgl' => $packing_tgl,

    // Pemenuhan persyaratan & SKEP (kalau belum ada kolomnya, kosong)
    'pemenuhan_no'  => (string)($h['pemenuhanNo'] ?? ''),
    'pemenuhan_tgl' => IndonesiaTgl($h['pemenuhanTgl'] ?? ''),
    'skep_no'       => (string)($h['skepNo'] ?? ''),
    'skep_tgl'      => IndonesiaTgl($h['skepTgl'] ?? ''),

    // 14-16
    'valuta'     => $valutaLabel,
    'valuta_code' => (string)($h['kodeValuta'] ?? ''),
    'ndpbm'      => format_angka_desimal($ndpbm, 2),
    'nilai_cif'  => format_angka_desimal($cif, 2),
    'nilai_cif_rp' => 'Rp ' . format_angka_desimal($cif_rp, 2),

    // 17–21
    'jenis_sarana_angkut'       => $jenisSaranaAngkut,
    'peti_kemas_no_ukuran_tipe' => $detail_peti,

    // PERHATIAN: di template kamu kotak angka pakai key 'jumlah_kemasan',
    // tapi data awal kamu pakai 'kemasan_jumlah_jenis_merek'. Aku isi dua-duanya biar aman.
    'jumlah_kemasan'            => (string)$jumlah_kemasan,
    'kemasan_jumlah_jenis_merek' => $detail_kemasan_line,

    'berat_kotor'  => format_angka_desimal($bruto, 4),
    'berat_bersih' => format_angka_desimal($netto, 4),

    // 22–27 (kalau belum ada, tetap default)
    'jumlah_jenis_barang' => (string)($h['jumlahJenisBarang'] ?? 0),
    'jenis_barang_info'   => '--------------- ' . (string)($h['jumlahJenisBarang'] ?? 0) . ' Jenis barang. Lihat lembar lanjutan. ---------------',

    // 28–34 Data Penyesuaian Jaminan (isi 0 dulu kalau belum ada)
    'p28_bea_masuk' => (string)($h['p28_bea_masuk'] ?? '0'),
    'p29_bea_masuk' => (string)($h['p29_bea_masuk'] ?? '0'),
    'p30_cukai'     => (string)($h['p30_cukai'] ?? '0'),
    'p31_ppn'       => (string)($h['p31_ppn'] ?? '0'),
    'p32_ppnbm'     => (string)($h['p32_ppnbm'] ?? '0'),
    'p33_pph'       => (string)($h['p33_pph'] ?? '0'),
    'p34_total'     => (string)($h['p34_total'] ?? '0'),

    // 35–40 Data Jaminan (isi dari DB jika ada)
    'jenis_jaminan'        => (string)($h['jenisJaminan'] ?? ''),
    'nomor_jaminan'        => (string)($h['nomorJaminan'] ?? '-'),
    'tgl_jaminan'          => IndonesiaTgl($h['tanggalJaminan'] ?? '-'),
    'nilai_jaminan'        => (string)($h['nilaiJaminan'] ?? '0'),
    'jatuh_tempo'          => IndonesiaTgl($h['jatuhTempoJaminan'] ?? '-'),
    'penjamin'             => (string)($h['penjamin'] ?? ''),
    'bukti_jaminan_no_tgl' => (string)($h['buktiJaminanNo'] ?? ''),
    'bukti_jaminan_tgl'    => IndonesiaTgl($h['buktiJaminanTgl'] ?? '-'),

    // C. Pengesahan (ambil dari ttd header kalau ada)
    'c_tempat'       => $ttdTempat,
    'c_tanggal'      => $ttdTgl !== '-' ? $ttdTgl : date('d-m-Y'),
    'c_nama_lengkap' => $ttdNama,
    'c_jabatan'      => $ttdJabatan,

    // Footer / printed
    'printed_app'      => 'esikatERP',
    'printed_datetime' => date('d-M-Y | H:i'),
    'printed_from'     => 'esikatERP | ' . date('d-M-Y H:i'),

    // Page 2
    'nomor_pendaftaran2' => $nomorDaftar,

    // list dokumen page2 (kalau kamu mau isi tabel, tinggal render loop di HTML)
    'dokumen_list' => [],
];

// Filename safe (FIX: sebelumnya belum ada variabel ini)
$filenameSafe = preg_replace('/[^A-Za-z0-9_\-]+/', '_', (string)v($data, 'nomor_pengajuan', 'BC261'));


/* ===========================
 * OPTIONAL: DEBUG cepat untuk cek mapping
 * =========================== */
if (isset($_GET['debug']) && $_GET['debug'] === 'json') {
    header('Content-Type: application/json; charset=utf-8');
    echo json_encode([
        'header_raw' => $h,
        'mapped_data_for_template' => $data,
        'kontainer' => $daftarKontainer,
        'kemasan' => $daftarKemasan,
        'dokumen' => $daftarDokumen,
        'pengangkut' => $pengangkut,
        'bank_devisa' => $bankDevisa,
        'kesiapan' => $kesiapan,
    ], JSON_PRETTY_PRINT | JSON_UNESCAPED_UNICODE);
    exit;
}

/* ===========================
 * 2) BUILD HTML (PUNYA KAMU) — TIDAK DIUBAH
 * =========================== */

ob_start();
?>
<!DOCTYPE html>
<html>

<head>
    <meta charset="utf-8">
    <title>BC261 - <?= htmlspecialchars(v($data, 'nomor_pengajuan', '-'), ENT_QUOTES, 'UTF-8') ?></title>
    <style>
        /* ... STYLE kamu (aku tidak ubah) ... */
        @page {
            margin: 6mm 5mm 8mm 5mm;
        }

        * {
            box-sizing: border-box;
        }

        body {
            font-family: Arial, sans-serif;
            font-size: 8pt;
            line-height: 1.05;
            color: #000;
        }

        table {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        td {
            vertical-align: top;
        }

        .b {
            border: 0.5pt solid #000;
        }

        .bt0 {
            border-top: 0;
        }

        .bb0 {
            border-bottom: 0;
        }

        .bl0 {
            border-left: 0;
        }

        .br0 {
            border-right: 0;
        }

        .p0 {
            padding: 0;
        }

        .p1 {
            padding: 1mm;
        }

        .p12 {
            padding: 1.2mm;
        }

        .p08 {
            padding: 0.8mm;
        }

        .p06 {
            padding: 0.6mm;
        }

        .p04 {
            padding: 0.4mm;
        }

        .center {
            text-align: center;
        }

        .right {
            text-align: right;
        }

        .bold {
            font-weight: 700;
        }

        .titleWrap {
            margin-bottom: 1.5mm;
        }

        .titleBig {
            font-size: 10pt;
            font-weight: 700;
            letter-spacing: 0.2px;
        }

        .titleSmall {
            font-size: 9pt;
            font-weight: 700;
        }

        .boxTitle {
            font-weight: 700;
        }

        .label {
            width: 28mm;
        }

        .sep {
            width: 2.2mm;
            text-align: center;
        }

        .val {
            width: auto;
        }

        .mini {
            font-size: 7.4pt;
        }

        .tiny {
            font-size: 7.2pt;
        }

        .footerLine {
            font-size: 7.2pt;
            margin-top: 1.5mm;
        }

        .bc27-mini {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
            margin: 0;
        }

        .bc27-mini td {
            padding: 0;
            border: 0;
            font-size: 7pt;
            text-align: right;
            line-height: 1;
        }
    </style>
</head>

<body>
    <div class="titleWrap center">
        <div class="titleBig">PEMBERITAHUAN PENGELUARAN BARANG DARI</div>
        <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>
    </div>
    <table class="bc27-mini">
        <tr>
            <td>BC 2.6.1</td>
        </tr>
    </table>
    <table>
        <tr>
            <td class="b p0" colspan="2">
                <table>
                    <tr>
                        <td class="b br0 p08" style="width:70%; border:0; padding-bottom:0;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Kantor Pabean</td>
                                    <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                    <td class="mini" style="border:none; padding:0.5mm 0;"><?= v($data, 'kantor_pabean') ?></td>
                                </tr>
                                <tr>
                                    <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Nomor Pengajuan</td>
                                    <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                    <td class="mini" style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pengajuan') ?></td>
                                </tr>
                            </table>
                        </td>

                        <td class="b bl0 p08" style="width:30%; border:0; padding-right:5mm;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td class="right mini" style="border:none; padding:0.5mm 0;">
                                        Halaman ke-<?= v($data, 'halaman', '1') ?> dari <?= v($data, 'halaman_total', '2') ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <tr>
                        <td class="b p08" colspan="2" style="border:0; padding-top: 0;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td class="mini bold" style="border:none; padding:0.5mm 0; width:30mm;">A. JENIS TRANSAKSI</td>
                                    <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                    <td class="" style="border:none; padding:0.5mm 0;">
                                        <span style="display:inline-block; border:1px solid #000; width:5mm; height:4mm; vertical-align:middle; margin-right:2mm;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                        &nbsp; 1. Diperbaiki&nbsp;&nbsp;2. Disubkontrakkan&nbsp;&nbsp;3. Dipinjamkan&nbsp;&nbsp;4. Lainnya&nbsp;&nbsp;
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="b bt0 br0 p08" style="width:50%;">
                <div class="boxTitle">B. DATA PEMBERITAHUAN</div>
            </td>
            <td class="b bt0 bl0 p08" style="width:50%;">
                &nbsp;
            </td>
        </tr>
        <tr>
            <!-- KOLOM KIRI -->
            <td style="width:50%; border:1px solid #000; border-top:0; border-right:1px solid #000; padding:0; vertical-align:top;">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                    <!-- ROW AREA 1: Pengusaha TPB -->
                    <tr>
                        <td style="padding:2mm; border-bottom:1px solid #000;">
                            <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengusaha TPB</div>

                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">1. NPWP</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_npwp']) ? $data['pengusaha_npwp'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">2. Nama</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_nama']) ? $data['pengusaha_nama'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">3. Alamat</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_alamat']) ? $data['pengusaha_alamat'] : '' ?></td>
                                </tr>

                                <!-- 4: No + Tgl (1 baris 6 kolom, tanpa float, tanpa colgroup) -->
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; white-space:nowrap;">4. No. dan Tgl. izin TPB</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0; width:30%;"><?= isset($data['izin_tpb_no']) ? $data['izin_tpb_no'] : '' ?></td>

                                    <td style="border:none; padding:0.5mm 0 0.5mm 3mm; white-space:nowrap;">Tgl</td>

                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['izin_tpb_tgl']) ? $data['izin_tpb_tgl'] : '' ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ROW AREA 2: Pengirim Barang -->
                    <tr>
                        <td style="padding:2mm; border-bottom:1px solid #000;">
                            <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengirim Barang</div>

                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">5. NPWP</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_npwp']) ? $data['pengirim_npwp'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">6. Nama</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_nama']) ? $data['pengirim_nama'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">7. Alamat</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_alamat']) ? $data['pengirim_alamat'] : '' ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ROW AREA 3: Pemilik Barang -->
                    <tr>
                        <td style="padding:2mm;">
                            <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pemilik Barang</div>

                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">8. NPWP</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_npwp']) ? $data['pemilik_npwp'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">9. Nama</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_nama']) ? $data['pemilik_nama'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">10. Alamat</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_alamat']) ? $data['pemilik_alamat'] : '' ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                </table>
            </td>

            <!-- KOLOM KANAN -->
            <td style="width:50%; border:1px solid #000; border-top:0; border-left:0; padding:0; vertical-align:top;">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                    <!-- ROW AREA 1: D. DIISI OLEH BEA DAN CUKAI -->
                    <tr>
                        <td style="padding:2mm; border-bottom:1px solid #000;">
                            <div style="font-size:8pt; font-weight:700; margin-bottom:1mm;">D. DIISI OLEH BEA DAN CUKAI</div>

                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Nomor Pendaftaran</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['nomor_pendaftaran']) ? $data['nomor_pendaftaran'] : '' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Tanggal</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['tanggal_pendaftaran']) ? $data['tanggal_pendaftaran'] : '' ?></td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ROW AREA 2: Dokumen Pelengkap Pabean -->
                    <tr>
                        <td style="padding:2mm; border-bottom:1px solid #000;">
                            <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Dokumen Pelengkap Pabean</div>
                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">

                                <!-- 11: Packing List + Tgl -->
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">11. Packing List</td>
                                    <td style="border:none; padding:0.5mm 2mm; width:0.5mm; text-align:left;">:</td>
                                    <td style="border:none; padding:0.5mm 0; width:5mm; text-align:left;"><?= isset($data['packing_list']) ? $data['packing_list'] : '' ?></td>
                                    <td style="border:none; padding:0.5mm 0; width:5mm; text-align:left; padding-left:-5mm;">Tgl.</td>

                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['packing_list_tgl']) ? $data['packing_list_tgl'] : '' ?></td>
                                </tr>

                                <!-- 12: Header -->
                                <tr>
                                    <td colspan="6" style="border:none; padding:0.5mm 0;">12. Pemenuhan Persyaratan/Fasilitas Impor</td>
                                </tr>

                                <!-- 12: No + Tgl -->
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:6mm; width:10mm;">No &nbsp;:</td>

                                    <td style="border:none; padding:0.5mm 0; width:38mm;"><?= isset($data['pemenuhan_no']) ? $data['pemenuhan_no'] : '' ?></td>
                                    <td style="border:none; padding:0.5mm 0; width:5mm;">Tgl.</td>

                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemenuhan_tgl']) ? $data['pemenuhan_tgl'] : '' ?></td>
                                </tr>

                                <!-- 13: Header -->
                                <tr>
                                    <td colspan="6" style="border:none; padding:0.5mm 0;">13. Surat Keputusan/Dokumen Lainnya</td>
                                </tr>

                                <!-- 13: No + Tgl -->
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:6mm; width:10mm;">No &nbsp;:</td>

                                    <td style="border:none; padding:0.5mm 0; width:38mm;"><?= isset($data['skep_no']) ? $data['skep_no'] : '' ?></td>
                                    <td style="border:none; padding:0.5mm 0; width:5mm;">Tgl.</td>

                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['skep_tgl']) ? $data['skep_tgl'] : '' ?></td>
                                </tr>
                            </table>
                        </td>

                    </tr>

                    <!-- ROW AREA 3: 14-16 -->
                    <tr>
                        <td style="padding:2mm; border-bottom:1px solid #000;">
                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">14. Valuta</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['valuta']) ? $data['valuta'] : '-' ?> &nbsp;&nbsp; (<?= isset($data['valuta_code']) ? $data['valuta_code'] : '' ?>)</td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">15. NDPBM</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= isset($data['ndpbm']) ? $data['ndpbm'] : '0.00' ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">16. Nilai CIF</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;">
                                        <?= isset($data['nilai_cif']) ? $data['nilai_cif'] : '0.00' ?><br>
                                        <?= isset($data['nilai_cif_rp']) ? $data['nilai_cif_rp'] : 'Rp 0.00' ?>
                                    </td>
                                </tr>
                            </table>
                        </td>
                    </tr>

                    <!-- ROW AREA 4: Jenis Sarana Pengangkut -->
                    <tr>
                        <td style="padding:2mm;">
                            <div style="font-size:8pt; text-align:center; font-weight:700;">Jenis Sarana Pengangkut</div>
                            <div style="font-size:8pt; margin-top:1mm;"><?= isset($data['jenis_sarana_angkut']) ? $data['jenis_sarana_angkut'] : '' ?></div>
                        </td>
                    </tr>

                </table>
            </td>
        </tr>
        <!-- LANJUTAN BARIS: BLOK 18-21 (revisi posisi 19, center "0", tanpa garis pemisah 20-21) -->
        <tr>
            <td colspan="2" style="border:1px solid #000; border-top:0; padding:0; vertical-align:top;">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                    <tr>
                        <!-- AREA KIRI: 18 + 19 (SATU BIDANG) -->
                        <td style="width:80%; border-right:1px solid #000; padding:0; vertical-align:top; height:22mm;">
                            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                <tr>
                                    <!-- 18 (diperkecil supaya 19 geser ke kiri) -->
                                    <td style="width:50%; border:none; padding:1.2mm; vertical-align:top;">
                                        <div style="font-size:8pt;">18. Nomor, Ukuran dan Tipe Peti Kemas</div>
                                    </td>

                                    <!-- 19 (lebih ke kiri karena width 50%) + kotak angka -->
                                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                            <tr>
                                                <!-- label 19 -->
                                                <td style="border:none; padding:1.2mm; vertical-align:top;">
                                                    <div style="font-size:8pt;">19. Jumlah, Jenis dan Merek Kemasan</div>
                                                </td>

                                                <!-- kotak kecil angka -->
                                                <td style="width:20mm; border-left:1px solid #000; border-bottom:1px solid #000; padding:0; vertical-align:top;">
                                                    <!-- bikin 0 center horizontal+vertical -->
                                                    <div style="
                                                font-size:8pt;
                                                text-align:center;
                                                height:8mm;
                                                line-height:8mm;
                                                margin:0;
                                                padding:0;

                                            ">
                                                        <?= isset($data['jumlah_kemasan']) ? $data['jumlah_kemasan'] : '0' ?>
                                                    </div>
                                                </td>
                                            </tr>

                                            <!-- spacer bawah agar tinggi 19 full -->
                                            <tr>
                                                <td colspan="2" style="border:none; padding:0; height:14mm;"></td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>
                            </table>
                        </td>

                        <!-- AREA KANAN: 20 & 21 (tanpa garis pemisah tengah) -->
                        <td style="width:20%; padding:0; vertical-align:top; height:22mm;">
                            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                <!-- 20 (tanpa border bawah) -->
                                <tr>
                                    <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none;">
                                        <div style="font-size:8pt;">20. Berat Kotor (Kg)</div>
                                        <div style="font-size:9pt; margin-top:1.2mm; padding-left:6mm;">
                                            <?= isset($data['berat_kotor']) ? $data['berat_kotor'] : '0.0000' ?>
                                        </div>
                                    </td>
                                </tr>

                                <!-- 21 -->
                                <tr>
                                    <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none;">
                                        <div style="font-size:8pt;">21. Berat Bersih (Kg)</div>
                                        <div style="font-size:9pt; margin-top:1.2mm; padding-left:6mm;">
                                            <?= isset($data['berat_bersih']) ? $data['berat_bersih'] : '0.0000' ?>
                                        </div>
                                    </td>
                                </tr>
                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <!-- Grid header 22-27 -->
        <tr>
            <td colspan="2" class="b bt0 p0">
                <table style="width:100%; table-layout:fixed;">
                    <tr>
                        <td class="b p06 mini" style="width: 8mm; height: 15
                                mm;">
                            22. No
                        </td>
                        <td class="b p06 mini" style="width: 80mm; height: 15mm;">
                            23. - Pos Tarif/HS<br>
                            - Kode Barang<br>
                            - Uraian Jumlah Barang Secara Lengkap, Merek, Tipe, Ukuran
                        </td>
                        <td class="b p06 mini" style="width: 22mm;">
                            24. Negara Asal Barang
                        </td>
                        <td class="b p06 mini" style="width: 22mm;">
                            25. Tarif dan Fasilitas BM, BMT, Cukai, PPN, PPnBM, PPh
                        </td>
                        <td class="b p06 mini" style="width: 22mm;">
                            26. Jumlah dan Jenis Satuan Berat Bersih (Kg)
                        </td>
                        <td class="b p06 mini" style="width: 22mm;">
                            27. Nilai CIF
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
        <!-- Area Jenis Barang -->
        <tr>
            <td colspan="2"
                class="b bt0 center"
                style="height:23mm; vertical-align:middle; padding:0;">

                <div style="text-align:center; font-size:8pt;">
                    --------------- <?= v($data, 'jumlah_jenis_barang', '0') ?> Jenis barang. Lihat lembar lanjutan. ---------------
                </div>

            </td>
        </tr>
        <!-- Data Penyesuaian Jaminan + Data Jaminan -->
        <tr>
            <td colspan="2" class="b bt0 p0">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                    <tr>

                        <!-- LEFT (40%): JANGAN pakai class b biar tidak double dengan border utama -->
                        <td style="width:40%; border:none; border-right:0.5pt solid #000; padding:0; vertical-align:top;">
                            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                                <!-- HEADER -->
                                <tr>
                                    <td colspan="2" class="b p06 center bold mini">Data Penyesuaian Jaminan</td>
                                </tr>

                                <!-- Sub Header -->
                                <tr>
                                    <td class="b bt0 p06 mini bold center" style="width:55%;">Jenis Pungutan</td>
                                    <td class="b bt0 p06 mini bold center" style="width:45%;">Jumlah</td>
                                </tr>

                                <!-- ROWS -->
                                <tr>
                                    <td class="b bt0 p06 mini">28. Bea Masuk</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p28_bea_masuk', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">29. Bea Masuk</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p29_bea_masuk', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">30. Cukai</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p30_cukai', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">31. PPN</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p31_ppn', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">32. PPnBM</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p32_ppnbm', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">33. PPh</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p33_pph', '0') ?></td>
                                </tr>
                                <tr>
                                    <td class="b bt0 p06 mini">34. Jumlah Total</td>
                                    <td class="b bt0 p06 mini right"><?= v($data, 'p34_total', '0') ?></td>
                                </tr>

                            </table>
                        </td>

                        <!-- RIGHT (60%): JANGAN pakai class b biar tidak double -->
                        <td style="width:60%; border:none; padding:0; vertical-align:top;">
                            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                                <!-- HEADER -->
                                <tr>

                                    <td class="b p06 center bold mini" style="border-left:0;">Data Jaminan</td>
                                </tr>

                                <!-- ISI -->
                                <tr>
                                    <td class="p08" style="border:none;">
                                        <table style="width:100%; border-collapse:collapse;" class="tiny">
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:32mm;">35. Jenis Jaminan</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_jaminan', '') ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:30mm;">36. Nomor Jaminan</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                <td style="border:none; padding:0.5mm 0; text-align:center;">
                                                    <?= v($data, 'nomor_jaminan', '-') ?>
                                                    <span style="float:right;">Tanggal: <?= v($data, 'tgl_jaminan', '-') ?></span>
                                                </td>
                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:32mm;">37. Nilai Jaminan</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_jaminan', '0') ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:32mm;">38. Tanggal Jatuh Tempo</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jatuh_tempo', '-') ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:32mm;">39. Penjamin</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penjamin', '') ?></td>
                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; width:32mm;">40. Nomor dan Tanggal Bukti Penerimaan Jaminan</td>
                                                <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>

                                            </tr>
                                            <tr>
                                                <td style="border:none; padding:0.5mm 0; text-align:right">
                                                    <?= v($data, 'bukti_jaminan_no_tgl', '') ?>
                                                    <span style="float:right;">Tanggal : <?= v($data, 'bukti_jaminan_tgl', '-') ?></span>
                                                </td>
                                            </tr>
                                        </table>
                                    </td>
                                </tr>

                            </table>
                        </td>

                    </tr>
                </table>
            </td>
        </tr>
        <!-- Bottom: C and E blocks -->
        <tr>
            <td colspan="2" class="b bt0 p0">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed; ">
                    <tr>
                        <!-- C (kiri) -->
                        <td style="width:50%; border:none; border-right:0.5pt solid #000; padding:2mm; vertical-align:top; height:40mm;">
                            <div class="bold" style="font-size:8pt;">C. PENGESAHAN PENGUSAHA TPB</div>

                            <div class="tiny" style="margin-top:1mm; line-height:1.2;">
                                Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitakan
                            </div>

                            <table style="width:100%; border-collapse:collapse; font-size:7.5pt; margin-top:3mm;">
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Tempat, Tanggal</td>
                                    <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                    <td style="border:none; padding:0.7mm 0;">
                                        <?= v($data, 'c_tempat', '') ?><?= v($data, 'c_tempat', '') !== '' && v($data, 'c_tanggal', '') !== '' ? ', ' : '' ?><?= v($data, 'c_tanggal', '') ?>
                                    </td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Nama Lengkap</td>
                                    <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'c_nama_lengkap', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Jabatan</td>
                                    <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'c_jabatan', '') ?></td>
                                </tr>
                            </table>

                            <!-- Area tanda tangan -->
                            <div style="margin-top:2mm; font-size:7.5pt;">
                                Tanda Tangan dan Stempel Perusahaan :
                            </div>

                            <div style="height:20mm;"></div>

                            <!-- Spacer tambahan supaya tidak ada space kosong di bawah C -->
                            <div style="height:10mm;"></div>
                        </td>

                        <!-- E (kanan) -->
                        <td style="width:50%; border:none; padding:2mm; vertical-align:top;">
                            <div class="bold" style="font-size:8pt;">E. UNTUK PEJABAT BEA DAN CUKAI</div>
                            <div style="height:54mm;"></div>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
    </td>
    </tr>
    </table>

    <div class="footerLine">
        Rangkap ke -1 / 2 / 3: Pengusaha TPB / KPPBC Pengawas / Penerima Barang
        <span style="float:right;"><?= v($data, 'printed_from', '') ?></span>
    </div>

    <pagebreak />

    <!-- Judul tanpa border -->
    <div class="titleWrap center">
        <div class="titleBig">LEMBAR LANJUTAN DOKUMEN PELENGKAP PABEAN</div>
        <div class="titleBig">PEMBERITAHUAN PENGELUARAN BARANG DARI</div>
        <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>

    </div>

    <table class="bc27-mini">
        <tr>
            <td>BC 2.6.1</td>
        </tr>
    </table>

    <!-- Section 1: Kantor Pabean dengan border lengkap (":" sejajar & ada jarak) -->
    <table style="margin-bottom: 0;">
        <tr>
            <td class="b p08 tiny">
                <table style="width:100%; border-collapse:collapse;">
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:30mm;">Kantor Pabean</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'kantor_pabean', '-') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:30mm;">Nomor Pengajuan</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pengajuan', '-') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:30mm;">Nomor Pendaftaran</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pendaftaran2', '-') ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
    <table style="margin-bottom: 0;">
        <tr>
            <td class="b bt0 p0">
                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                    <!-- HEADER -->
                    <tr>
                        <td class="b p06 center bold mini" style="width:10mm; padding: 1.5mm 3.0mm;">No</td>

                        <!-- Jenis Dokumen dibuat paling lebar + padding lebih besar -->
                        <td class="b bold mini"
                            style="
                            width:65mm;
                            padding: 1.5mm 3.0mm; 
                            text-align:center;
                            white-space:nowrap;
                            font-size:8pt;
                        ">
                            Jenis Dokumen
                        </td>

                        <td class="b p06 center bold mini" style="width:45mm; font-size:8pt; padding: 1.5mm 3.0mm;">Nomor Dokumen</td>
                        <td class="b p06 center bold mini" style="width:35mm; font-size:8pt; padding: 1.5mm 3.0mm;">Tanggal Dokumen</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Section 3: C. Pengesahan Pengusaha TPB -->
    <table style="margin-bottom: 0;">
        <tr>
            <td class="b bt0 p08">
                <div class="bold">C. Pengesahan Pengusaha TPB</div>
                <div class="tiny" style="margin-top: 1mm;">
                    Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan pabean ini.
                </div>

                <table style="width:100%; border-collapse:collapse; margin-top:3mm;" class="tiny">
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:50mm;">Tempat, Tanggal</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;">
                            <?= v($data, 'c_tempat', '') ?><?= v($data, 'c_tempat', '') ? ', ' : '' ?><?= v($data, 'c_tanggal', '') ?>
                        </td>
                    </tr>

                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:50mm;">Nama Lengkap</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'c_nama_lengkap', '') ?></td>
                    </tr>

                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:50mm;">Jabatan</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'c_jabatan', '') ?></td>
                    </tr>

                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:50mm;">Tanda Tangan dan Stempel Perusahaan</td>
                        <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0; height:16mm;">&nbsp;</td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- Footer tanpa border -->
    <div class="footerLine">
        Rangkap ke -1 / 2 / 3: Pengusaha TPB / KPPBC Pengawas / Penerima Barang
        <span style="float:right;"><?= v($data, 'printed_from', '') ?></span>
    </div>

</body>

</html>
<?php
$html = ob_get_clean();

/* ===========================
 * 3) RENDER PDF
 * =========================== */
$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 8,
    'margin_right' => 8,
    'margin_top' => 8,
    'margin_bottom' => 8,
]);

$mpdf->SetTitle('BC 2.6.1 - ' . v($data, 'nomor_pengajuan'));
$mpdf->SetAuthor('System');

$mpdf->WriteHTML($html);

// bersihin semua buffer biar gak ganggu output PDF
while (ob_get_level() > 0) {
    ob_end_clean();
}

$mpdf->Output("BC261_{$filenameSafe}.pdf", \Mpdf\Output\Destination::INLINE);
