<?php
declare(strict_types=1);


if (session_status() !== PHP_SESSION_ACTIVE) {
    session_start();
}

/* ===========================
 * HELPER
 * =========================== */
if (!function_exists('IndonesiaTgl')) {
    function IndonesiaTgl(?string $tgl): string {
        if (empty($tgl) || $tgl === '0000-00-00' || $tgl === '-') {
            return '-';
        }
        $ts = strtotime($tgl);
        if ($ts === false) {
            return $tgl;
        }
        return date('d-m-Y', $ts);
    }
}

if (!function_exists('format_angka_desimal')) {
    function format_angka_desimal($angka, int $decimal = 2): string {
        $angka = (float)($angka ?? 0);
        return number_format($angka, $decimal, '.', ',');
    }
}

if (!function_exists('bc30_build_ref_map')) {

    function bc30_build_ref_map($query, string $table, string $kodeField, string $uraianField): array {
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
            if ($kode === '') {
                continue;
            }
            $map[$kode] = trim((string)($row[$uraianField] ?? ''));
        }
        return $map;
    }
}

if (!function_exists('bc30_ref_label')) {

    function bc30_ref_label(array $map, ?string $kode, bool $showCode = true): string {
        $kode = trim((string)($kode ?? ''));
        if ($kode === '') {
            return '-';
        }
        $nama = $map[$kode] ?? '';
        if ($nama === '') {
            return $kode;
        }
        return $showCode ? "{$kode} - {$nama}" : $nama;
    }
}

/* ===========================
 * GET DATA DARI DATABASE
 * =========================== */


$idHeader = $_GET['id'] ?? null;
if (empty($idHeader)) {
    die('ID dokumen tidak ditemukan.');
}


$kdUsahaSession = $_SESSION['app']['auth']['user']['kdusaha'] ?? null;


$builder = $query->table('ceisa_header')->where('id_header', '=', $idHeader);
if (!empty($kdUsahaSession)) {
    $builder->where('kdusaha', '=', $kdUsahaSession);
}
$h = $builder->first();

if (!$h) {
    die('Dokumen tidak ditemukan / tidak berhak diakses.');
}

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
    if (!empty($entitasByKode[$kode][0])) {
        return $entitasByKode[$kode][0];
    }
    return null;
};

$entEksportir = $ambilEntitas('2'); // Eksportir
$entPemilik   = $ambilEntitas('7'); // Pemilik
$entPembeli   = $ambilEntitas('6'); // Pembeli
$entPenerima  = $ambilEntitas('8'); // Penerima

$daftarBarang = $query->table('ceisa_barang')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriBarang', 'ASC')
    ->get() ?? [];

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

try {
    $bankDevisa = $query->table('ceisa_bank_devisa')
        ->where('id_header', '=', $idHeader)
        ->orderBy('seriBank', 'ASC')
        ->first() ?? ['namaBank' => '-'];
} catch (\Throwable $e) {
    $bankDevisa = ['namaBank' => '-'];
}

$pengangkut = $query->table('ceisa_pengangkut')
    ->where('id_header', '=', $idHeader)
    ->orderBy('seriPengangkut', 'ASC')
    ->first() ?? null;

$kesiapan = $query->table('ceisa_kesiapan_barang')
    ->where('id_header', '=', $idHeader)
    ->orderBy('id', 'ASC')
    ->first() ?? null;

/* ===========================
 * LOAD REFERENSI UNTUK CONVERT KODE -> NAMA
 * =========================== */

$mapKantor        = bc30_build_ref_map($query, 'ceisa_referensi_kantor',          'kode_kantor',  'nama_kantor');
$mapJenisEkspor   = bc30_build_ref_map($query, 'ceisa_referensi_jenis_ekspor',    'kode',         'uraian');
$mapKatEkspor     = bc30_build_ref_map($query, 'ceisa_referensi_kategori_ekspor', 'kode',         'uraian');
$mapCaraDagang    = bc30_build_ref_map($query, 'ceisa_referensi_cara_dagang',     'kode',         'uraian');
$mapCaraBayar     = bc30_build_ref_map($query, 'ceisa_referensi_cara_bayar',      'kode',         'uraian');
$mapCaraAngkut    = bc30_build_ref_map($query, 'ceisa_referensi_cara_pengangkutan','kode_cara',   'uraian_cara');
$mapIncoterm      = bc30_build_ref_map($query, 'ceisa_referensi_incoterm',        'kode',         'uraian');
$mapNegara        = bc30_build_ref_map($query, 'ceisa_referensi_negara',          'kode_negara',  'nama_negara');
$mapPelabuhan     = bc30_build_ref_map($query, 'ceisa_referensi_pelabuhan',       'kode_pelabuhan','nama_pelabuhan');
$mapTempatTimbun  = bc30_build_ref_map($query, 'ceisa_referensi_tempat_penimbunan','kode_tempat_penimbunan','nama_tempat_penimbunan');
$mapLokPeriksa    = bc30_build_ref_map($query, 'ceisa_referensi_lokasi_pemeriksaan','kode_lokasi','uraian_lokasi');
$mapValuta        = bc30_build_ref_map($query, 'ceisa_referensi_valuta',          'kode',         'nama');
$mapAsuransiRef   = bc30_build_ref_map($query, 'ceisa_referensi_asuransi',        'kode',         'uraian');
$mapJenisKemasan  = bc30_build_ref_map($query, 'ceisa_referensi_jenis_kemasan',   'kode',         'uraian');
$mapSatuan        = bc30_build_ref_map($query, 'ceisa_referensi_satuan',          'kode_satuan',  'nama_satuan');
$mapDaerahAsal    = bc30_build_ref_map($query, 'ceisa_referensi_daerah_asal',     'kode_daerah',  'nama_daerah');
$mapJenisKont     = bc30_build_ref_map($query, 'ceisa_referensi_jenis_kontainer', 'kode',         'uraian');
$mapUkuranKont    = bc30_build_ref_map($query, 'ceisa_referensi_ukuran_kontainer','kode',         'uraian');
$mapTipeKont      = bc30_build_ref_map($query, 'ceisa_referensi_tipe_kontainer',  'kode',         'uraian');
$mapJenisIdentitas= bc30_build_ref_map($query, 'ceisa_referensi_jenis_identitas', 'kode_jenis',   'uraian');

$mapJenisDokumen       = [];
$mapJenisDokumenLartas = [];

try {
    $rows = $query->table('ceisa_referensi_jenisdokumen')
        ->where('is_active', '=', 1)
        ->where('is_bc30', '=', 1)
        ->get() ?? [];
    foreach ($rows as $row) {
        $kode = trim((string)($row['kodeDokumen'] ?? ''));
        if ($kode === '') {
            continue;
        }
        $mapJenisDokumen[$kode] = trim((string)($row['uraianDokumen'] ?? ''));
    }
} catch (\Throwable $e) {
    $mapJenisDokumen = [];
}

try {
    $rowsL = $query->table('ceisa_referensi_jenisdokumen_lartas')
        ->where('is_aktif', '=', 1)
        ->get() ?? [];
    foreach ($rowsL as $row) {
        $kode = trim((string)($row['kode_dokumen'] ?? ''));
        if ($kode === '') {
            continue;
        }
        $mapJenisDokumenLartas[$kode] = trim((string)($row['uraian_dokumen'] ?? ''));
    }
} catch (\Throwable $e) {
    $mapJenisDokumenLartas = [];
}

/* ===========================
 * MAPPING DATA KE TEMPLATE
 * =========================== */

$jumlahPeti = count($daftarKontainer);
if ($jumlahPeti > 0) {
    $firstPeti     = $daftarKontainer[0];
    $nomorKont     = $firstPeti['nomorKontainer'] ?? '-';
    $ukuranLabel   = bc30_ref_label($mapUkuranKont, $firstPeti['kodeUkuranKontainer'] ?? '', false);
    $jenisKontLabel= bc30_ref_label($mapJenisKont,  $firstPeti['kodeJenisKontainer']  ?? '', false);

    $detail_peti = $nomorKont . ' / ' . $ukuranLabel . ' / ' . $jenisKontLabel;
} else {
    $detail_peti = '-';
}

$detail_kemasan = '-';
if (!empty($daftarKemasan)) {
    $parts = [];
    foreach ($daftarKemasan as $k) {
        $jumlah      = $k['jumlahKemasan'] ?? 0;
        $kodeKemasan = $k['kodeJenisKemasan'] ?? '';
        $jenisLabel  = bc30_ref_label($mapJenisKemasan, $kodeKemasan, true);
        $merk        = $k['merkKemasan'] ?? '';

        $text = trim($jumlah . ' ' . $jenisLabel);
        if ($merk) {
            $text .= " / {$merk}";
        }
        $parts[] = $text;
    }
    $detail_kemasan = implode('; ', $parts);
}

$caraAngkutText = '';
if ($pengangkut) {
    $caraAngkutText = bc30_ref_label($mapCaraAngkut, $pengangkut['kodeCaraAngkut'] ?? '', false);
}

$kodeLokPeriksa = $kesiapan['lokasiSiapPeriksa'] ?? ($h['lokasiPemeriksaan'] ?? '');

/**
 * HEADER untuk template
 */
$header = [
    'kddokbc'               => $h['kodeDokumen'] ?? '3.0',
    'nomorAju'              => $h['nomorAju'] ?? '-',

    'kantor_pabean_muat'    => bc30_ref_label($mapKantor, $h['kodeKantorMuat']   ?? ($h['kodeKantor'] ?? ''), true),
    'kantor_pabean_ekspor'  => bc30_ref_label($mapKantor, $h['kodeKantorEkspor'] ?? ($h['kodeKantor'] ?? ''), true),
    'kantor_pabean_periksa' => bc30_ref_label($mapKantor, $h['kodeKantorPeriksa'] ?? '', true),

    'jenis_ekspor'          => bc30_ref_label($mapJenisEkspor,  $h['kodeJenisEkspor']     ?? '', true),
    'kategori_ekspor'       => bc30_ref_label($mapKatEkspor,    $h['kodeKategoriEkspor']  ?? '', true),
    'cara_dagang'           => bc30_ref_label($mapCaraDagang,   $h['kodeCaraDagang']      ?? '', true),
    'cara_bayar'            => bc30_ref_label($mapCaraBayar,    $h['kodeCaraBayar']       ?? '', true),

    'bc_no_daftar'          => $h['nomorDaftar'] ?? '',
    'bc_tgl_daftar'         => IndonesiaTgl($h['tanggalDaftar'] ?? ''),
    'bc_no_bc11'            => $h['kodeKantorTujuan'] ?? '-',   // sementara
    'bc_tgl_bc11'           => '-',                             // belum ada kolom khusus
    'bc_pos'                => $h['kodeKantorBongkar'] ?? '-',  // sementara

    'eksportir_id'          => $entEksportir['nomorIdentitas'] ?? '',
    'eksportir_nama'        => $entEksportir['namaEntitas'] ?? '',
    'eksportir_alamat'      => $entEksportir['alamatEntitas'] ?? '',
    'eksportir_status'      => bc30_ref_label($mapJenisIdentitas, $entEksportir['kodeJenisIdentitas'] ?? '', true),

    'pemilik_id'            => $entPemilik['nomorIdentitas'] ?? '',
    'pemilik_nama'          => $entPemilik['namaEntitas'] ?? '',
    'pemilik_alamat'        => $entPemilik['alamatEntitas'] ?? '',

    'ppjk_npwp'             => $entEksportir['nomorIdentitas'] ?? '-',
    'ppjk_nama'             => $entEksportir['namaEntitas'] ?? '-',
    'ppjk_alamat'           => $entEksportir['alamatEntitas'] ?? '-',

    'konsolidasi_kategori'  => '',
    'konsolidasi_npwp'      => '-',
    'konsolidasi_nama'      => '',
    'konsolidasi_alamat'    => '',

    'pembeli_nama'          => $entPembeli['namaEntitas'] ?? '',
    'pembeli_alamat'        => $entPembeli['alamatEntitas'] ?? '',
    'pembeli_negara'        => bc30_ref_label($mapNegara, $entPembeli['kodeNegara'] ?? '', true),

    'penerima_nama'         => $entPenerima['namaEntitas'] ?? '',
    'penerima_alamat'       => $entPenerima['alamatEntitas'] ?? '',
    'penerima_negara'       => bc30_ref_label($mapNegara, $entPenerima['kodeNegara'] ?? '', true),

    'cara_angkut'           => $caraAngkutText,
    'nama_sarana'           => $pengangkut['namaPengangkut'] ?? '',
    'no_pengangkut'         => $pengangkut['nomorPengangkut'] ?? '',
    'tgl_perkiraan'         => IndonesiaTgl($h['tanggalEkspor'] ?? ''),

    'pel_muat_asal'         => bc30_ref_label($mapPelabuhan,    $h['kodePelMuat']    ?? '', true),
    'pel_muat_ekspor'       => bc30_ref_label($mapPelabuhan,    $h['kodePelEkspor']  ?? '', true),
    'tempat_timbun'         => bc30_ref_label($mapTempatTimbun, $h['tempatPenimbunan'] ?? '', true),
    'pel_tujuan'            => bc30_ref_label($mapPelabuhan,    $h['kodePelTujuan']  ?? '', true),
    'negara_tujuan'         => bc30_ref_label($mapNegara,       $h['negaraTujuan']   ?? '', true),

    'lokasi_periksa'        => bc30_ref_label($mapLokPeriksa, $kodeLokPeriksa, true),
    'cara_serah'            => bc30_ref_label($mapIncoterm,   $h['kodeIncoterm'] ?? '', true),

    'bank_devisa'           => $bankDevisa['namaBank'] ?? '-', // sudah nama langsung dari ceisa_bank_devisa
    'jenis_valuta'          => bc30_ref_label($mapValuta, $h['kodeValuta'] ?? '', true),
    'fob'                   => $h['fob'] ?? 0,
    'biaya_angkut'          => $h['freight'] ?? 0,
    'asuransi'              => $h['asuransi'] ?? 0,
    'nilai_maklon'          => $h['nilaiMaklon'] ?? 0,

    'jml_peti'              => (string)$jumlahPeti,
    'detail_peti'           => $detail_peti,
    'detail_kemasan'        => $detail_kemasan,

    'bruto'                 => $h['bruto'] ?? 0,
    'netto'                 => $h['netto'] ?? 0,

    'nilai_bk'              => $h['nilaiBeaKeluar'] ?? 0,
    'pph_22'                => $h['pph'] ?? 0,
    'sawit'                 => $h['nilaiPungutanSawit'] ?? 0,
    'nilai_tukar'           => 'Rp.'.format_angka_desimal($h['ndpbm'] ?? 0, 2),

    'kota_ttd'              => strtoupper($h['kotaTtd'] ?? ''),
    'tgl_ttd'               => IndonesiaTgl($h['tanggalTtd'] ?? ''),
    'nama_ttd'              => strtoupper($h['namaTtd'] ?? ''),
];

/* ===========================
 * 3. BARANG & DOKUMEN UNTUK TEMPLATE
 * =========================== */

$barang = $daftarBarang[0] ?? null;

if ($barang) {
    $uraianBarang = ($barang['uraian'] ?? '');
    if (!empty($barang['merk'])) {
        $uraianBarang .= ', Merk: '.$barang['merk'];
    }
    if (!empty($barang['tipe'])) {
        $uraianBarang .= ', Tipe: '.$barang['tipe'];
    }
    if (!empty($barang['ukuran'])) {
        $uraianBarang .= ', Ukuran: '.$barang['ukuran'];
    }
    if (!empty($barang['spesifikasiLain'])) {
        $uraianBarang .= ', Spesifikasi Lain: '.$barang['spesifikasiLain'];
    }
    if (!empty($barang['jumlahKemasan']) || !empty($barang['kodeJenisKemasan'])) {
        $kemasanLabel = bc30_ref_label($mapJenisKemasan, $barang['kodeJenisKemasan'] ?? '', true);
        $uraianBarang .= ', Kemasan: '.($barang['jumlahKemasan'] ?? 0).' '.$kemasanLabel;
    }

    $qtySatuan       = format_angka_desimal($barang['jumlahSatuan'] ?? 0, 2);
    $jenisSatuanText = bc30_ref_label($mapSatuan, $barang['kodeSatuanBarang'] ?? '', true);

    $barang_detail = [
        'hs_code'       => $barang['kodeHs'] ?? '',
        'uraian'        => $uraianBarang,
        'kode_barang'   => $barang['kodeBarang'] ?? '',
        'he'            => '0',
        'bk'            => '0',
        'qty_satuan'    => $qtySatuan,
        'jenis_satuan'  => $jenisSatuanText,
        'netto_vol'     => format_angka_desimal($barang['netto'] ?? 0, 2).' Kg<br>'.format_angka_desimal($barang['volume'] ?? 0, 2).' m3',
        'negara_asal'   => bc30_ref_label($mapNegara,     $barang['kodeNegaraAsal'] ?? '', true),
        'daerah_asal'   => bc30_ref_label($mapDaerahAsal, $barang['kodeDaerahAsal'] ?? '', true),
        'nilai_ekspor'  => format_angka_desimal($barang['fob'] ?? 0, 2),
    ];
} else {
    $barang_detail = [
        'hs_code'       => '',
        'uraian'        => '',
        'kode_barang'   => '',
        'he'            => '0',
        'bk'            => '0',
        'qty_satuan'    => '',
        'jenis_satuan'  => '',
        'netto_vol'     => '',
        'negara_asal'   => '',
        'daerah_asal'   => '',
        'nilai_ekspor'  => '0.00',
    ];
}

$dokumen_main = [
    'invoice' => ['no' => '-', 'tgl' => '-'],
    'packing' => ['no' => '-', 'tgl' => '-'],
    'lainnya' => ['jenis' => '-', 'kantor' => $header['kantor_pabean_ekspor']],
];

foreach ($daftarDokumen as $doc) {
    $kode = $doc['kodeDokumen'] ?? '';
    if ($kode === '380') { // Invoice
        $dokumen_main['invoice'] = [
            'no'  => $doc['nomorDokumen'] ?? '-',
            'tgl' => IndonesiaTgl($doc['tanggalDokumen'] ?? ''),
        ];
    } elseif ($kode === '217') { // Packing List
        $dokumen_main['packing'] = [
            'no'  => $doc['nomorDokumen'] ?? '-',
            'tgl' => IndonesiaTgl($doc['tanggalDokumen'] ?? ''),
        ];
    } else {
        if ($dokumen_main['lainnya']['jenis'] === '-') {
            $uraianJenis = $mapJenisDokumen[$kode] ?? $mapJenisDokumenLartas[$kode] ?? '';
            $jenisPrint  = $uraianJenis ? "{$kode} - {$uraianJenis}" : $kode;
            $dokumen_main['lainnya']['jenis'] = $jenisPrint;
        }
    }
}

$dokumen_lanjutan = [];
foreach ($daftarDokumen as $index => $doc) {
    $kodeDok = $doc['kodeDokumen'] ?? '';
    $uraianJ = $mapJenisDokumen[$kodeDok] ?? $mapJenisDokumenLartas[$kodeDok] ?? '';
    $jenisPrint = $uraianJ ? "{$kodeDok} - {$uraianJ}" : $kodeDok;

    $dokumen_lanjutan[] = [
        'no'        => (string)($index + 1),
        'jenis'     => $jenisPrint,
        'nomor_dok' => $doc['nomorDokumen'] ?? '',
        'tgl'       => IndonesiaTgl($doc['tanggalDokumen'] ?? ''),
        'kantor'    => $header['kantor_pabean_ekspor'], // pakai kantor ekspor sebagai kantor pendaftaran
    ];
}

/* ===========================
 * 4. MODE DEBUG (LIHAT HASIL QUERY)
 * =========================== */

if (isset($_GET['debug']) && $_GET['debug'] === '1') {
    header('Content-Type: text/plain; charset=utf-8');
    echo "=== HEADER (ceisa_header) ===\n";
    print_r($h);

    echo "\n=== ENTITAS (by kodeEntitas) ===\n";
    print_r($entitasByKode);

    echo "\n=== HEADER MAPPED (dipakai template) ===\n";
    print_r($header);

    echo "\n=== BARANG PERTAMA ===\n";
    print_r($barang);

    echo "\n=== BARANG DETAIL (untuk kolom 48-54) ===\n";
    print_r($barang_detail);

    echo "\n=== DOKUMEN ===\n";
    print_r($daftarDokumen);

    echo "\n=== DOKUMEN MAIN (invoice/packing/lainnya) ===\n";
    print_r($dokumen_main);

    echo "\n=== DOKUMEN LANJUTAN (page 2) ===\n";
    print_r($dokumen_lanjutan);

    echo "\n=== KONTAINER ===\n";
    print_r($daftarKontainer);

    echo "\n=== KEMASAN ===\n";
    print_r($daftarKemasan);

    echo "\n=== BANK DEVISA ===\n";
    print_r($bankDevisa);

    echo "\n=== PENGANGKUT ===\n";
    print_r($pengangkut);

    echo "\n=== KESIAPAN BARANG ===\n";
    print_r($kesiapan);

    exit;
}

/* ===========================
 * 5. BANGUN HTML DENGAN OUTPUT BUFFER
 * =========================== */

ob_start();
?>
<html>
<head>
    <title>BC 3.0 - <?= htmlspecialchars($header['nomorAju']); ?></title>
    <style>
        @page {
            margin: 0.5cm;
            font-family: Arial, sans-serif;
            footer: html_watermarkFooter;
        }
        body { font-size: 7pt; line-height: 1.1; }

        table { width: 100%; border-collapse: collapse; border-spacing: 0; }
        td { vertical-align: top; padding: 2px; }

        .border-main { border: 2px solid black; }
        .bt { border-top: 1px solid black; }
        .bb { border-bottom: 1px solid black; }
        .bl { border-left: 1px solid black; }
        .br { border-right: 1px solid black; }

        .table-grid td { border: 1px solid black; }

        .text-center { text-align: center; }
        .text-right  { text-align: right; }
        .text-left   { text-align: left; }
        .bold { font-weight: bold; }
        .f10 { font-size: 10pt; }
        .f9  { font-size: 9pt; }
        .f8  { font-size: 8pt; }

        .section-title {
            background-color: #f0f0f0;
            font-weight: bold;
            border-bottom: 1px solid black;
            padding-left: 2px;
        }

        .no-padding { padding: 0 !important; }
        .pad-left   { padding-left: 5px; }

        .tbl-fields td { padding: 1px 2px; }
    </style>
</head>
<body>

<htmlpagefooter name="watermarkFooter">
    <div style="font-size: 5pt; color: #444; font-family: sans-serif; padding-left: 0px;">
        Printed from esikatERP | <?= date('d-M-Y'); ?> | <?= date('H:i'); ?>
    </div>
</htmlpagefooter>

<!-- === HALAMAN 1 === -->
<div class="border-main">

    <!-- Judul -->
    <table class="bb">
        <tr>
            <td width="10%" class="text-center bold f10 br" style="padding: 5px;">BC 3.0</td>
            <td class="text-center bold f10" style="padding: 5px;">PEMBERITAHUAN EKSPOR BARANG</td>
        </tr>
    </table>

    <!-- HEADER -->
    <table class="bb">
        <tr>
            <td width="3%" class="br bb f9 bold text-center" style="padding: 0; text-rotate: 90; vertical-align: middle;">
                HEADER
            </td>
            <td width="97%" class="no-padding bb">
                <table style="width: 100%;">
                    <tr>
                        <td class="bb" style="padding: 3px 5px;" colspan="2">
                            <table width="100%">
                                <tr>
                                    <td align="left">
                                        Nomor Pengajuan
                                        <span style="margin-left: 30px;">: <?= $header['nomorAju']; ?></span>
                                    </td>
                                    <td align="right">Halaman ke-1 dari 2</td>
                                </tr>
                            </table>
                        </td>
                    </tr>
                    <tr>
                        <td width="58%" class="br" style="vertical-align: top; padding: 5px;">
                            <div class="bold">A. KANTOR PABEAN</div>
                            <table style="margin-left: 10px; width: 100%;">
                                <tr>
                                    <td width="45%">1. Kantor Pabean Pemuatan</td>
                                    <td>: <?= $header['kantor_pabean_muat']; ?></td>
                                </tr>
                                <tr>
                                    <td>2. Kantor Pabean Ekspor</td>
                                    <td>: <?= $header['kantor_pabean_ekspor']; ?></td>
                                </tr>
                            </table>
                            <div style="margin-top: 4px;">
                                <table style="width: 100%;">
                                    <tr><td width="48%">B. JENIS EKSPOR</td><td>: <?= $header['jenis_ekspor']; ?></td></tr>
                                    <tr><td>C. KATEGORI EKSPOR</td><td>: <?= $header['kategori_ekspor']; ?></td></tr>
                                    <tr><td>D. CARA PERDAGANGAN</td><td>: <?= $header['cara_dagang']; ?></td></tr>
                                    <tr><td>E. CARA PEMBAYARAN</td><td>: <?= $header['cara_bayar']; ?></td></tr>
                                </table>
                            </div>
                        </td>
                        <td width="42%" style="vertical-align: top; padding: 5px;">
                            <div class="bold">H. KOLOM KHUSUS BEA DAN CUKAI</div>
                            <table style="width: 100%; margin-top: 5px;">
                                <tr><td width="40%" class="pad-left">1. Nomor Pendaftaran</td><td>: <?= $header['bc_no_daftar']; ?></td></tr>
                                <tr><td style="padding-left: 15px;">Tanggal</td><td>: <?= $header['bc_tgl_daftar']; ?></td></tr>
                                <tr><td class="pad-left">2. Nomor BC 1.1</td><td>: <?= $header['bc_no_bc11']; ?></td></tr>
                                <tr><td style="padding-left: 15px;">Tanggal</td><td>: <?= $header['bc_tgl_bc11']; ?></td></tr>
                                <tr><td style="padding-left: 15px;">Pos/Sub Pos</td><td>: <?= $header['bc_pos']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>

    <!-- F. DATA PERDAGANGAN -->
    <table class="bb">
        <tr>
            <td width="3%" class="br bold text-center" style="text-rotate: 90; vertical-align: middle; padding: 0;" rowspan="10">
               F. DATA PERDAGANGAN
            </td>

            <td width="97%" class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="33.3%" class="br no-padding">
                            <div class="bold section-title">EKSPORTIR</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">1. Identitas</td><td>: <?= $header['eksportir_id']; ?></td></tr>
                                <tr><td class="pad-left">NITKU</td><td>: <?= $header['eksportir_id']; ?>000000</td></tr>
                                <tr><td>2. Nama</td><td>: <?= $header['eksportir_nama']; ?></td></tr>
                                <tr><td>3. Alamat</td><td>: <?= $header['eksportir_alamat']; ?></td></tr>
                                <tr><td>4. Status</td><td>: <?= $header['eksportir_status']; ?></td></tr>
                            </table>
                        </td>
                        <td width="33.3%" class="br no-padding">
                            <div class="bold section-title">PEMILIK BARANG</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">5. Identitas</td><td>: <?= $header['pemilik_id']; ?></td></tr>
                                <tr><td class="pad-left">NITKU</td><td>: <?= $header['pemilik_id']; ?>000000</td></tr>
                                <tr><td>6. Nama</td><td>: <?= $header['pemilik_nama']; ?></td></tr>
                                <tr><td>7. Alamat</td><td>: <?= $header['pemilik_alamat']; ?></td></tr>
                            </table>
                        </td>
                        <td width="33.3%" class="no-padding">
                            <div class="bold section-title">PEMBELI</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">15. Nama</td><td>: <?= $header['pembeli_nama']; ?></td></tr>
                                <tr><td>16. Alamat</td><td>: <?= $header['pembeli_alamat']; ?></td></tr>
                                <tr><td>17. Negara</td><td>: <?= $header['pembeli_negara']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="33.3%" class="br no-padding">
                            <div class="bold section-title">PPJK</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">8. NPWP</td><td>: <?= $header['ppjk_npwp']; ?></td></tr>
                                <tr><td>9. Nama</td><td>: <?= $header['ppjk_nama']; ?></td></tr>
                                <tr><td>10. Alamat</td><td>: <?= $header['ppjk_alamat']; ?></td></tr>
                            </table>
                        </td>
                        <td width="33.3%" class="br no-padding">
                            <div class="bold section-title">PIHAK YANG MELAKUKAN KONSOLIDASI</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">11. Kategori</td><td>: <?= $header['konsolidasi_kategori']; ?></td></tr>
                                <tr><td>12. NPWP</td><td>: <?= $header['konsolidasi_npwp']; ?></td></tr>
                                <tr><td>13. Nama</td><td>: <?= $header['konsolidasi_nama']; ?></td></tr>
                                <tr><td>14. Alamat</td><td>: <?= $header['konsolidasi_alamat']; ?></td></tr>
                            </table>
                        </td>
                        <td width="33.3%" class="no-padding">
                            <div class="bold section-title">PENERIMA</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="25%">18. Nama</td><td>: <?= $header['penerima_nama']; ?></td></tr>
                                <tr><td>19. Alamat</td><td>: <?= $header['penerima_alamat']; ?></td></tr>
                                <tr><td>20. Negara</td><td>: <?= $header['penerima_negara']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="50%" class="br no-padding">
                            <div class="bold section-title">DATA PENGANGKUT</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">21. Cara Pengangkutan</td><td>: <?= $header['cara_angkut']; ?></td></tr>
                                <tr><td>22. Nama & Bendera Sarana</td><td>: <?= $header['nama_sarana']; ?></td></tr>
                                <tr><td>23. No Pengangkut</td><td>: <?= $header['no_pengangkut']; ?></td></tr>
                                <tr><td>24. Tanggal Perkiraan Ekspor</td><td>: <?= $header['tgl_perkiraan']; ?></td></tr>
                            </table>
                        </td>
                        <td width="50%" class="no-padding">
                            <div class="bold section-title">DATA PELABUHAN/TEMPAT MUAT EKSPOR</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">25. Pelabuhan Muat Asal</td><td>: <?= $header['pel_muat_asal']; ?></td></tr>
                                <tr><td>26. Pelabuhan Muat Ekspor</td><td>: <?= $header['pel_muat_ekspor']; ?></td></tr>
                                <tr><td>27. Tempat Penimbunan</td><td>: <?= $header['tempat_timbun']; ?></td></tr>
                                <tr><td>28. Pelabuhan Tujuan</td><td>: <?= $header['pel_tujuan']; ?></td></tr>
                                <tr><td>29. Negara Tujuan Ekspor</td><td>: <?= $header['negara_tujuan']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="50%" class="br no-padding">
                            <div class="bold section-title">DATA PELENGKAP PABEAN</div>
                            <table class="tbl-fields" width="100%">
                                <tr>
                                    <td width="40%">30. No &amp; Tgl Invoice</td>
                                    <td width="30%">: <?= $dokumen_main['invoice']['no']; ?></td>
                                    <td>tgl. <?= $dokumen_main['invoice']['tgl']; ?></td>
                                </tr>
                                <tr>
                                    <td>31. No &amp; Tgl Packing</td>
                                    <td>: <?= $dokumen_main['packing']['no']; ?></td>
                                    <td>tgl. <?= $dokumen_main['packing']['tgl']; ?></td>
                                </tr>
                                <tr>
                                    <td>32. Jenis, No &amp; Tgl Dok. Lainnya</td>
                                    <td>: <?= $dokumen_main['lainnya']['jenis']; ?></td>
                                    <td></td>
                                </tr>
                                <tr>
                                    <td class="pad-left">Kantor Bea Cukai Pendaftaran</td>
                                    <td colspan="2">: <?= $dokumen_main['lainnya']['kantor']; ?></td>
                                </tr>
                            </table>
                        </td>
                        <td width="50%" class="no-padding">
                            <div class="bold section-title">DATA TEMPAT PEMERIKSAAN</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">33. Lokasi Pemeriksaan</td><td>: <?= $header['lokasi_periksa']; ?></td></tr>
                                <tr><td>34. Kantor Pabean Pemeriksaan</td><td>: <?= $header['kantor_pabean_periksa']; ?></td></tr>
                            </table>
                            <div class="bold section-title bt">DATA PENYERAHAN</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">35. Cara Penyerahan Barang</td><td>: <?= $header['cara_serah']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                     <tr><td colspan="2" class="bold section-title bb">DATA TRANSAKSI EKSPOR</td></tr>
                     <tr>
                        <td width="50%" class="br no-padding">
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">36. Bank Devisa Hasil Ekspor</td><td>: <?= $header['bank_devisa']; ?></td></tr>
                                <tr><td>37. Jenis Valuta</td><td>: <?= $header['jenis_valuta']; ?></td></tr>
                                <tr><td>38. Jumlah Nilai Ekspor</td><td>: <?= format_angka_desimal($header['fob']); ?></td></tr>
                            </table>
                        </td>
                        <td width="50%" class="no-padding">
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">39. Biaya Pengangkutan</td><td>: <?= format_angka_desimal($header['biaya_angkut']); ?></td></tr>
                                <tr><td>40. Asuransi (LN/DN)</td><td>: <?= format_angka_desimal($header['asuransi']); ?></td></tr>
                                <tr><td>41. Nilai Maklon (Jika Ada)</td><td>: <?= format_angka_desimal($header['nilai_maklon']); ?></td></tr>
                            </table>
                        </td>
                     </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="50%" class="br no-padding">
                            <div class="bold section-title">DATA PETI KEMAS</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="45%">42. Jumlah Peti kemas</td><td>: <?= $header['jml_peti']; ?></td></tr>
                                <tr><td>43. Nomor, Ukuran dan Status Peti</td><td>: <?= $header['detail_peti']; ?></td></tr>
                            </table>
                        </td>
                        <td width="50%" class="no-padding">
                            <div class="bold section-title">DATA KEMASAN</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="60%">44. Jenis, Jumlah dan Merek Kemasan</td><td></td></tr>
                                <tr><td colspan="2" class="pad-left"><?= $header['detail_kemasan']; ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <div class="bold section-title">DATA BARANG EKSPOR</div>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table width="100%">
                    <tr>
                        <td width="50%" class="br">
                            45. Berat Kotor (kg)<span style="margin-left:50px">: <?= $header['bruto']; ?></span>
                        </td>
                        <td width="50%">
                            46. Berat Bersih (kg)<span style="margin-left:50px">: <?= $header['netto']; ?></span>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding bb">
                <table class="table-grid" width="100%">
                    <tr class="text-center f8 bold">
                        <td width="3%">47.<br>No.</td>
                        <td width="30%">48. - Pos Tarif/HS<br>- Uraian Jenis Barang Secara Lengkap, Merk, Tipe, Ukuran, kode barang, Spesifikasi Wajib<br>- Jenis Ekspor</td>
                        <td width="10%">49. Perizinan Ekspor &amp; No. Urut</td>
                        <td width="10%">50. HE barang dan tarif BK</td>
                        <td width="17%">51. - Jumlah &amp; Jenis Satuan Barang,<br>- Berat Bersih (kg),<br>- Jumlah &amp; Jenis Kemasan</td>
                        <td width="15%">52. Negara Asal Barang<br>53. Daerah Asal Barang</td>
                        <td width="15%">54. Nilai Ekspor</td>
                    </tr>

                    <tr style="vertical-align:top; font-size: 8pt;">
                        <td class="text-center">1</td>
                        <td>
                            - <?= $barang_detail['hs_code']; ?><br><br>
                            - <?= $barang_detail['uraian']; ?><br><br>
                            - Kode Barang: <?= $barang_detail['kode_barang']; ?>
                        </td>
                        <td></td>
                        <td>
                            - HE: <?= $barang_detail['he']; ?><br>
                            - BK: <?= $barang_detail['bk']; ?>
                        </td>
                        <td>
                            <?= $barang_detail['qty_satuan']; ?><br>
                            <?= $barang_detail['jenis_satuan']; ?><br>
                            <?= $barang_detail['netto_vol']; ?>
                        </td>
                        <td>
                            <?= $barang_detail['negara_asal']; ?><br>
                            <?= $barang_detail['daerah_asal']; ?>
                        </td>
                        <td class="text-right" style="vertical-align:top;">
                            <?= $barang_detail['nilai_ekspor']; ?>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

        <tr>
            <td class="no-padding">
                <table width="100%">
                    <tr>
                        <td width="55%" class="br" style="vertical-align: top;">
                            <div style="margin-top: 5px;">
                                52. Nilai Tukar Mata Uang
                                <span style="margin-left:20px;">: <?= $header['nilai_tukar']; ?></span>
                            </div>
                        </td>
                        <td width="45%" class="no-padding">
                            <div class="bold section-title">DATA PENERIMAAN NEGARA</div>
                            <table class="tbl-fields" width="100%">
                                <tr><td width="50%">53. Nilai Bea Keluar</td><td class="text-right">: <?= format_angka_desimal($header['nilai_bk']); ?></td></tr>
                                <tr><td>54. PPh Pasal 22 Ekspor</td><td class="text-right">: <?= format_angka_desimal($header['pph_22']); ?></td></tr>
                                <tr><td>55. Pungutan Sawit</td><td class="text-right">: <?= format_angka_desimal($header['sawit']); ?></td></tr>
                            </table>
                        </td>
                    </tr>
                </table>
            </td>
        </tr>

    </table>
</div>

<!-- Tanda Tangan -->
<div style="border: 1px solid black; margin-top: 5px; padding: 5px;">
    <div class="bold">G. TANDA TANGAN EKSPORTIR / PPJK</div>
    <div style="font-size: 6.5pt; margin-bottom: 10px;">
        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam Pemberitahuan Ekspor Barang ini, serta bersedia dikenakan sanksi sesuai dengan ketentuan di bidang kepabeanan apabila terdapat kesalahan.
    </div>
    <div class="text-right" style="margin-right: 30px;">
        <?= $header['kota_ttd']; ?>, <?= $header['tgl_ttd']; ?><br>
        Eksportir/PPJK<br><br><br><br>
        <?= $header['nama_ttd']; ?>
    </div>
</div>

<!-- === HALAMAN 2 (LEMBAR LANJUTAN DOKUMEN) === -->
<pagebreak />

<div class="border-main">
    <div class="text-center bold f10 bb" style="padding: 10px;">
        LEMBAR LANJUTAN DOKUMEN PELENGKAP PABEAN<br>
        PEMBERITAHUAN EKSPOR BARANG (PEB)
    </div>
    <div class="text-right f8" style="padding: 2px;">Halaman ke-2 dari 2</div>

    <!-- Header Info Page 2 -->
    <table class="bt bb" width="100%">
         <tr>
            <td width="80%" style="padding: 5px;">
                <table class="no-border">
                    <tr>
                        <td width="150px">1. Kantor Pabean</td>
                        <td>: <?= $header['kantor_pabean_ekspor']; ?></td>
                    </tr>
                    <tr>
                        <td>2. Nomor Pengajuan</td>
                        <td>: <?= $header['nomorAju']; ?></td>
                    </tr>
                </table>
            </td>
            <td width="20%" style="padding: 0; vertical-align: top;">
                 <div style="float: right; border: 1px solid black; border-top: none; border-right: none; width: 60px; text-align:center; font-size: 8pt; margin-right: 50px;">
                    001500
                 </div>
            </td>
         </tr>
    </table>

    <!-- Document Table -->
    <table class="table-grid" style="margin-top: 0px; border-bottom: 1px solid black;">
        <thead>
            <tr class="text-center bold" style="background-color: #f0f0f0;">
                <td width="5%">NO</td>
                <td width="25%">Jenis Dokumen</td>
                <td width="25%">Nomor Dokumen</td>
                <td width="15%">Tanggal</td>
                <td width="30%">Kantor Pendaftaran</td>
            </tr>
        </thead>
        <tbody>
        <?php if (!empty($dokumen_lanjutan)): ?>
            <?php foreach ($dokumen_lanjutan as $doc): ?>
            <tr>
                <td class="text-center"><?= $doc['no']; ?></td>
                <td><?= $doc['jenis']; ?></td>
                <td><?= $doc['nomor_dok']; ?></td>
                <td class="text-center"><?= $doc['tgl']; ?></td>
                <td><?= $doc['kantor']; ?></td>
            </tr>
            <?php endforeach; ?>
        <?php else: ?>
            <tr>
                <td class="text-center">&nbsp;</td>
                <td>&nbsp;</td>
                <td>&nbsp;</td>
                <td class="text-center">&nbsp;</td>
                <td>&nbsp;</td>
            </tr>
        <?php endif; ?>
        </tbody>
    </table>

    <!-- Footer Page 2 -->
    <div style="min-height: 100px; position: relative; margin-top: 20px;">
        <div class="text-right" style="margin-right: 30px;">
            <?= $header['kota_ttd']; ?>, <?= $header['tgl_ttd']; ?><br>
            Eksportir/PPJK<br><br><br><br>
            <?= $header['nama_ttd']; ?>
        </div>
    </div>

</div>

</body>
</html>
<?php
$html = ob_get_clean();

/* ===========================
 * 6. RENDER PDF
 * =========================== */

if (!class_exists('\Mpdf\Mpdf')) {
    require __DIR__ . '/vendor/autoload.php';
}

$mpdf = new \Mpdf\Mpdf([
    'mode' => 'utf-8',
    'format' => 'A4',
    'margin_left' => 5,
    'margin_right' => 5,
    'margin_top' => 5,
    'margin_bottom' => 5,
]);

$mpdf->WriteHTML($html);
$mpdf->Output('BC30_'.$header['nomorAju'].'.pdf', 'I');