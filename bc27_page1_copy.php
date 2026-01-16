<?php

declare(strict_types=1);
/** @var array $data */
require __DIR__ . '/../Support/helpers.php';

function v(array $arr, string $key, string $fallback = '-'): string
{
    $val = $arr[$key] ?? '';
    $val = is_string($val) ? trim($val) : (string)$val;
    return $val === '' ? $fallback : $val;
}

/** baris label : nilai (posisi titik dua sejajar) */
function row3(string $label, string $value, string $no = ''): string
{
    $noText = $no !== '' ? $no . '. ' : '';
    return '<tr>
      <td class="lbl">' . h($noText . $label) . '</td>
      <td class="colon">:</td>
      <td class="val">' . h($value) . '</td>
    </tr>';
}
?>
<!doctype html>
<html lang="id">

<head>
    <meta charset="utf-8">
    <style>
        :root {
            --stroke: 0.6pt;
        }

        @page {
            size: A4 portrait;
            margin: 0;
        }

        body {
            margin: 0;
            padding: 0;
            font-family: DejaVu Sans, sans-serif;
            font-size: 8pt;
            /* KUNCI: biasanya template resmi sekitar 8pt–8.5pt */
            line-height: 1.00;
            /* cegah “ngembang” */
            color: #000;
        }

        .page {
            padding: 4mm 4mm;
            border: 0.6pt solid #000;
            /* batas samping dan luar */
        }

        .main {
            width: 100%;
            border-top: 0;
        }

        div,
        p {
            margin: 0;
            padding: 0;
        }

        /* ====== CORE TABLE SETTINGS ====== */
        table {
            border-collapse: collapse;
            border-spacing: 0;
            table-layout: fixed;
            width: 100%;
        }

        td,
        th {
            vertical-align: top;
            line-height: 1.00;
        }

        /* border style persis form */
        .b1 {
            border: var(--stroke) solid #000;
        }

        .stroke {
            border: var(--stroke) solid #000;
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

        /* padding rapat seperti form */
        .p2 {
            padding: 0.6mm 1.2mm;
        }

        .p3 {
            padding: 0.9mm 1.4mm;
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

        .topbar {
            width: 100%;
            border: 0;
        }

        /* bar header paling atas */
        .topbar td {
            border: 0.6pt solid #000;
        }

        .top-left,
        .top-right {
            width: 10%;
        }

        .top-mid {
            /* judul tengah */
            width: 80%;
            font-size: 10pt;
            /* sebelumnya 11px */
            font-weight: 450;
            line-height: 1.08;
        }

        /* label : value table */
        .kv td {
            padding: 0.25mm 0.6mm;
            vertical-align: top;
        }

        .kv .lbl {
            width: 62%;
        }

        .kv .colon {
            width: 6%;
            text-align: center;
        }

        .kv .val {
            width: 32%;
        }

        /* HEADER row */
        .section-title {
            font-weight: 450;
        }

        .header-line td {
            padding: 0;
        }

        /* cegah extra spacing */
        .header-line .bold {
            font-weight: 700;
        }


        /* ukuran kolom utama blok A..G */
        .col-left {
            width: 62%;
        }

        .col-right {
            width: 38%;
        }

        .sec-title {
            font-weight: bold;
            margin: 0;
            padding: 0;
        }

        /* dua kolom TPB Asal/Tujuan */
        .half {
            width: 50%;
        }

        /* tabel dokumen pelengkap 2 kolom */
        .doc-half {
            width: 50%;
        }

        /* blok pengangkutan+segel */
        .angkut-left {
            width: 60%;
        }

        .angkut-right {
            width: 40%;
        }

        /* tabel segel (3 kolom di kanan) */
        .segel-c1 {
            width: 32%;
        }

        .segel-c2 {
            width: 28%;
        }

        .segel-c3 {
            width: 40%;
        }

        /* data peti kemas top row 2 kolom */
        .kemas-c1 {
            width: 65%;
        }

        .kemas-c2 {
            width: 35%;
        }

        /* header tabel 36-39 */
        .c36 {
            width: 8%;
        }

        .c37 {
            width: 52%;
        }

        .c38 {
            width: 20%;
        }

        .c39 {
            width: 20%;
        }

        /* footer signature */
        .sig-left {
            width: 60%;
        }

        .sig-right {
            width: 40%;
        }

        .sig-r-half {
            width: 50%;
        }

        .inner {
            width: 100%;
            border-collapse: collapse;
            table-layout: fixed;
        }

        /* agar garis tidak “dobel tebal” karena nested table */
        .inner td,
        .inner th {
            border: none;
        }

        .topbar-wrap {
            position: relative;
        }

        .bc-mini {
            position: absolute;
            top: 0.6mm;
            /* sesuaikan halus */
            right: 4.5mm;
            /* sesuaikan halus */
            font-size: 7pt;
            /* kecil seperti template */
            font-weight: 700;
            line-height: 1;
        }

        .mt2 {
            margin-top: 0px;
        }

        .mt6 {
            margin-top: 0px;
        }
    </style>
</head>

<body>
    <div class="page">
        <!-- ================= TOP BAR ================= -->
        <table class="topbar">
            <tr>
                <td class="top-left center bold b1 p2">BC 2.7</td>
                <td class="top-mid center b1 p2">
                    PEMBERITAHUAN PENGELUARAN UNTUK DIANGKUT DARI TEMPAT PENIMBUNAN<br>
                    BERIKAT KE TEMPAT PENIMBUNAN BERIKAT LAINNYA
                </td>

            </tr>
        </table>

        <div class="bc-mini">BC 2.7</div>

        <!-- ================= MAIN OUTER GRID ================= -->
        <table class="b1 main" style="border-top:0;">
            <!-- HEADER title -->
            <tr>
                <td class="b1 section-title p2">HEADER</td>
            </tr>

            <!-- Nomor Pengajuan line -->
            <tr>
                <!-- b1 supaya ada kotak dan garisnya konsisten -->
                <td class="b1 p2 bb0">
                    <!-- bb0: hilangkan garis bawah agar nyambung dengan blok A–G tanpa dobel -->
                    <table class="inner" style="width:100%;">
                        <tr>
                            <td style="width:26%;" class="bold">NOMOR PENGAJUAN</td>
                            <td style="width:4mm;" class="center">:</td> <!-- kunci colon -->
                            <td style="width:52%;" class="bold"><?= h(v($data, 'nomor_pengajuan', '')) ?></td>
                            <td style="width:20%;" class="right">Halaman ke-1 dari 3</td>
                        </tr>
                    </table>
                </td>
            </tr>


            <!-- A..D..G row (2 columns) -->
            <tr>
                <td class="b1 bt0 p0" style="padding:0;">
                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                        <tr>

                            
                            <td class="col-left" style="border-right:0.6pt solid #000; vertical-align:top;">

                                <div class="sec-title">A. KANTOR PABEAN</div>
                                <table class="inner kv mt2">
                                    <?= row3('Kantor Asal', v($data, 'kantor_asal', '-'), '1') ?>
                                    <?= row3('Kantor Tujuan', v($data, 'kantor_tujuan', '-'), '2') ?>
                                </table>

                                <div class="sec-title">B. JENIS TPB ASAL</div>
                                <table class="inner kv mt2">
                                    <?= row3('', v($data, 'jenis_tpb_asal', '-'), '') ?>
                                </table>

                                <div class="sec-title">C. JENIS TPB TUJUAN</div>
                                <table class="inner kv mt2">
                                    <?= row3('', v($data, 'jenis_tpb_tujuan', '-'), '') ?>
                                </table>

                            </td>

                            
                            <td class="col-right p0" style="vertical-align:top;">

                                <!-- D (atas kanan) -->
                                <div class="p3" style="vertical-align:top;">
                                    <div class="sec-title">D. JENIS TRANSAKSI</div>
                                    <table class="inner kv mt2">
                                        <tr>
                                            <td style="width:6mm;"></td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'jenis_transaksi', '-') ?></td>
                                        </tr>
                                    </table>
                                </div>

                                <!-- G (bawah kanan) dengan kotak border seperti template -->
                                <div class="b1" style="border-left:0; border-right:0; border-bottom:0; padding:3mm; margin-top:6px;">
                                    <div class="sec-title">G. KOLOM KHUSUS BEA CUKAI</div>
                                    <table class="inner kv mt2">
                                        <tr>
                                            <td style="width:38mm;">Nomor Pendaftaran</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'nomor_pendaftaran') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'tanggal_pendaftaran') ?></td>
                                        </tr>
                                    </table>
                                </div>

                            </td>

                        </tr>
                    </table>
                </td>
            </tr>

            <!-- TPB ASAL / TPB TUJUAN header -->
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <td class="b1 p2 bold half">TPB ASAL BARANG</td>
                            <td class="b1 p2 bold half">TPB TUJUAN BARANG</td>
                        </tr>
                        <tr>
                            <!-- TPB ASAL -->
                            <td class="b1 p3">
                                <table class="inner kv">
                                    <?= row3('NPWP', v($data['tpb_asal'] ?? [], 'npwp'), '1') ?>
                                    <?= row3('Nama', v($data['tpb_asal'] ?? [], 'nama'), '2') ?>
                                    <?= row3('Alamat', v($data['tpb_asal'] ?? [], 'alamat'), '3') ?>
                                    <?= row3('No Izin TPB', v($data['tpb_asal'] ?? [], 'izin'), '4') ?>
                                </table>
                            </td>

                            <!-- TPB TUJUAN -->
                            <td class="b1 p3">
                                <table class="inner kv">
                                    <?= row3('NPWP', v($data['tpb_tujuan'] ?? [], 'npwp'), '5') ?>
                                    <?= row3('Nama', v($data['tpb_tujuan'] ?? [], 'nama'), '6') ?>
                                    <?= row3('Alamat', v($data['tpb_tujuan'] ?? [], 'alamat'), '7') ?>
                                    <?= row3('No Izin TPB', v($data['tpb_tujuan'] ?? [], 'izin'), '8') ?>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- PEMILIK BARANG -->
            <tr>
                <td class="b1 p2 bold">PEMILIK BARANG</td>
            </tr>
            <tr>
                <td class="b1 p3">
                    <table class="inner kv">
                        <?= row3('NPWP', v($data['pemilik'] ?? [], 'npwp'), '9') ?>
                        <?= row3('Nama', v($data['pemilik'] ?? [], 'nama'), '10') ?>
                        <?= row3('Alamat', v($data['pemilik'] ?? [], 'alamat'), '11') ?>
                    </table>
                </td>
            </tr>

            <!-- DOKUMEN PELENGKAP PABEAN -->
            <tr>
                <td class="b1 p2 bold">DOKUMEN PELENGKAP PABEAN</td>
            </tr>
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <!-- LEFT DOC -->
                            <td class="b1 p3 doc-half">
                                <table class="inner kv">
                                    <?= row3('Invoice', 'tgl. ' . v($data['dokumen'] ?? [], 'invoice_tgl', ''), '12') ?>
                                    <?= row3('Packing List', 'tgl. ' . v($data['dokumen'] ?? [], 'packing_tgl', ''), '13') ?>
                                    <?= row3('Kontrak', 'tgl. ' . v($data['dokumen'] ?? [], 'kontrak_tgl', ''), '14') ?>
                                    <?= row3('Faktur Pajak', 'tgl. ' . v($data['dokumen'] ?? [], 'faktur_tgl', ''), '15') ?>
                                    <tr>
                                        <td class="lbl">Uang Muka</td>
                                        <td class="colon">:</td>
                                        <td class="val">tgl. <?= h(v($data['dokumen'] ?? [], 'uang_muka_tgl', '')) ?></td>
                                    </tr>
                                </table>
                            </td>

                            <!-- RIGHT DOC -->
                            <td class="b1 p3 doc-half">
                                <table class="inner kv">
                                    <?= row3('Surat Jalan', 'tgl. ' . v($data['dokumen'] ?? [], 'surat_jalan_tgl', ''), '16') ?>
                                    <?= row3('Surat Keputusan/Persetujuan', 'tgl. ' . v($data['dokumen'] ?? [], 'sk_tgl', ''), '17') ?>
                                    <?= row3('Lainnya', 'tgl. ' . v($data['dokumen'] ?? [], 'lainnya_tgl', ''), '18') ?>
                                    <tr>
                                        <td class="lbl"></td>
                                        <td class="colon"></td>
                                        <td class="val">tgl.</td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- RIWAYAT BARANG -->
            <tr>
                <td class="b1 p2 bold">RIWAYAT BARANG</td>
            </tr>
            <tr>
                <td class="b1 p3">
                    <table class="inner kv">
                        <tr>
                            <td class="lbl">19. a. Nomor dan Tanggal BC 2.7</td>
                            <td class="colon">:</td>
                            <td class="val">tgl. <?= h(v($data['riwayat'] ?? [], 'bc27', '')) ?></td>
                        </tr>
                        <tr>
                            <td class="lbl">b. Nomor dan Tanggal BC 2.3</td>
                            <td class="colon">:</td>
                            <td class="val">tgl. <?= h(v($data['riwayat'] ?? [], 'bc23', '')) ?></td>
                        </tr>
                        <tr>
                            <td class="lbl">c. Nomor dan Tanggal BC 4.0</td>
                            <td class="colon">:</td>
                            <td class="val">tgl. <?= h(v($data['riwayat'] ?? [], 'bc40', '')) ?></td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- DATA PERDAGANGAN -->
            <tr>
                <td class="b1 p2 bold">DATA PERDAGANGAN</td>
            </tr>
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <!-- left perdagangan -->
                            <td class="b1 p3 half">
                                <table class="inner kv">
                                    <?= row3('Jenis Valuta Asing', v($data['perdagangan'] ?? [], 'valuta'), '20') ?>
                                    <?= row3('CIF', v($data['perdagangan'] ?? [], 'cif'), '21') ?>
                                    <?= row3('Nilai Penggantian/Nilai', v($data['perdagangan'] ?? [], 'nilai_penggantian'), '22') ?>
                                    <?= row3('Harga Penyerahan', v($data['perdagangan'] ?? [], 'harga_penyerahan'), '23') ?>
                                    <?= row3('Harga Perolehan', v($data['perdagangan'] ?? [], 'harga_perolehan'), '24') ?>
                                </table>
                            </td>

                            <!-- right perdagangan -->
                            <td class="b1 p3 half">
                                <table class="inner kv">
                                    <?= row3('Nilai Uang Muka', v($data['perdagangan'] ?? [], 'uang_muka'), '25') ?>
                                    <tr>
                                        <td class="lbl">- Diskon</td>
                                        <td class="colon">:</td>
                                        <td class="val"><?= h(v($data['perdagangan'] ?? [], 'diskon')) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl">- Dasar Pengenaan</td>
                                        <td class="colon">:</td>
                                        <td class="val"><?= h(v($data['perdagangan'] ?? [], 'dasar_pengenaan')) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl">- PPN Pajak(0%)</td>
                                        <td class="colon">:</td>
                                        <td class="val"><?= h(v($data['perdagangan'] ?? [], 'ppn')) ?></td>
                                    </tr>
                                    <tr>
                                        <td class="lbl">- PPNBM Pajak</td>
                                        <td class="colon">:</td>
                                        <td class="val"><?= h(v($data['perdagangan'] ?? [], 'ppnbm')) ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- DATA PENGANGKUTAN + SEGEL -->
            <tr>
                <td class="b1 p2 bold">DATA PENGANGKUTAN</td>
            </tr>
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <!-- left angkut -->
                            <td class="b1 p3 angkut-left">
                                <table class="inner kv">
                                    <?= row3('Jenis Sarana Pengangkut Darat', v($data['angkut'] ?? [], 'jenis'), '26') ?>
                                    <?= row3('No Polisi', v($data['angkut'] ?? [], 'nopol'), '27') ?>
                                </table>
                            </td>

                            <!-- right segel -->
                            <td class="b1 p0 angkut-right" style="padding:0;">
                                <table style="width:100%;">
                                    <tr>
                                        <td class="b1 p2 bold center" colspan="3">SEGEL (DIISI OLEH BEA DAN CUKAI)</td>
                                    </tr>
                                    <tr>
                                        <td class="b1 p2 bold center" colspan="2">BC Asal</td>
                                        <td class="b1 p2 bold center">30. Catatan BC Tujuan</td>
                                    </tr>
                                    <tr>
                                        <td class="b1 p2 segel-c1">28. No Segel</td>
                                        <td class="b1 p2 segel-c2">29. Jenis</td>
                                        <td class="b1 p2 segel-c3"><?= h(v($data['angkut'] ?? [], 'catatan_bc_tujuan', '')) ?></td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- DATA PETI KEMAS DAN PENGEMAS -->
            <tr>
                <td class="b1 p2 bold">DATA PETI KEMAS DAN PENGEMAS</td>
            </tr>
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <td class="b1 p3 kemas-c1">
                                <table class="inner kv">
                                    <?= row3('Merek dan No Kemasan/Peti Kemasan dan Jumlah', v($data['kemas'] ?? [], 'merek_no', ''), '31') ?>
                                </table>
                            </td>
                            <td class="b1 p3 kemas-c2">
                                <table class="inner kv">
                                    <?= row3('Jumlah dan Jenis Kemasan', v($data['kemas'] ?? [], 'jumlah_jenis', ''), '32') ?>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="b1 p3">
                                <table class="inner kv">
                                    <?= row3('Volume (m3)', v($data['kemas'] ?? [], 'volume', ''), '33') ?>
                                </table>
                            </td>
                            <td class="b1 p3">
                                <table class="inner kv">
                                    <?= row3('Berat Kotor', v($data['kemas'] ?? [], 'berat_kotor', ''), '34') ?>
                                </table>
                            </td>
                        </tr>
                        <tr>
                            <td class="b1 p3" colspan="2">
                                <table class="inner kv">
                                    <?= row3('Berat Bersih (kg)', v($data['kemas'] ?? [], 'berat_bersih', ''), '35') ?>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Header 36-39 -->
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <td class="b1 p2 center c36">
                                <div class="bold">36.</div>
                                <div class="bold">No</div>
                            </td>
                            <td class="b1 p2 c37">
                                <div class="bold">37.</div>
                                Pos tarif/HS, uraian jumlah dan barang secara lengkap, kode barang,<br>
                                merk, tipe, ukuran, dan spesifikasi
                            </td>
                            <td class="b1 p2 c38">
                                <div class="bold">38.</div>
                                - Jumlah &amp; Jenis Satuan<br>
                                - Berat Bersih (kg)<br>
                                - Volume (m3)
                            </td>
                            <td class="b1 p2 c39">
                                <div class="bold">39.</div>
                                - Nilai CIF<br>
                                - Harga penyerahan<br>
                                - Harga perolehan<br>
                                - Nilai Penggantian/Nilai Jasa
                            </td>
                        </tr>
                        <tr>
                            <td class="b1 p2 center" colspan="4" style="height: 45px;">
                                -------------- (2) Jenis barang. Lihat lembar lanjut --------------
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>

            <!-- Signatures F & H -->
            <tr>
                <td class="b1 p0" style="padding:0;">
                    <table style="width:100%;">
                        <tr>
                            <td class="b1 p2 bold sig-left">F. TANDA TANGAN PENGUSAHA TPB</td>
                            <td class="b1 p2 bold sig-right">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                        </tr>
                        <tr>
                            <td class="b1 p3 sig-left" style="height:62px;">
                                Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                                diberitahukan dalam pemberitahuan pabean ini.<br><br>
                                <div class="center">, <?= h(v($data, 'tanggal_ttd', date('d-m-Y'))) ?></div>
                            </td>
                            <td class="b1 p0 sig-right" style="padding:0;">
                                <table style="width:100%;">
                                    <tr>
                                        <td class="b1 p2 center sig-r-half">Kantor Pabean Asal</td>
                                        <td class="b1 p2 center sig-r-half">Kantor Pabean Tujuan</td>
                                    </tr>
                                    <tr>
                                        <td class="b1 p3" style="height:62px;">
                                            <div style="margin-top:18px;">
                                                Nama :<br>
                                                NIM :
                                            </div>
                                        </td>
                                        <td class="b1 p3" style="height:62px;">
                                            <div style="margin-top:18px;">
                                                Nama :<br>
                                                NIM :
                                            </div>
                                        </td>
                                    </tr>
                                </table>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </div>

</body>

</html>