<?php

declare(strict_types=1);

// helper aman
function v(array $data, string $key, string $default = ''): string
{
    $val = $data[$key] ?? $default;
    return htmlspecialchars((string)$val);
}

// baris label : value : nomor kecil (seperti "1." "2.")
function row3(string $label, string $value, string $no = ''): string
{
    $noCell = $no !== '' ? $no . '.' : '';
    return '
    <tr>
      <td class="no">' . htmlspecialchars($noCell, ENT_QUOTES, 'UTF-8') . '</td>
      <td class="lbl">' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</td>
      <td class="sep center">:</td>
      <td class="val">' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</td>
    </tr>';
}
?>

<style>
    /* =========================
     RESET & BASE
     ========================= */
    * {
        box-sizing: border-box;
    }

    html,
    body {
        margin: 0;
        padding: 0;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 8pt;
        line-height: 1.05;
        color: #000;
    }

    /* =========================
     TABLE DEFAULTS (mPDF-friendly)
     ========================= */
    table {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
        /* penting untuk layout konsisten */
    }

    /* bantu mPDF supaya tidak memecah tabel di tengah */
    table,
    tr,
    td {
        page-break-inside: avoid;
    }

    td {
        vertical-align: top;
    }

    /* =========================
     BORDER UTILITIES (Word-like)
     ========================= */
    .b1 {
        border: 0.75pt solid #000;
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

    /* kalau perlu border sisi tertentu (opsional) */
    .bt1 {
        border-top: 0.75pt solid #000;
    }

    .bb1 {
        border-bottom: 0.75pt solid #000;
    }

    .bl1 {
        border-left: 0.75pt solid #000;
    }

    .br1 {
        border-right: 0.75pt solid #000;
    }

    /* =========================
     PADDING UTILITIES
     ========================= */
    .p0 {
        padding: 0;
    }

    .p1 {
        padding: 0.6mm;
    }

    .p2 {
        padding: 1mm;
    }

    .p3 {
        padding: 1.5mm;
    }

    /* =========================
     TYPO UTILITIES
     ========================= */
    .center {
        text-align: center;
    }

    .right {
        text-align: right;
    }

    .bold {
        font-weight: bold;
    }

    .small {
        font-size: 7pt;
        line-height: 1.05;
    }

    /* title di top bar */
    .title {
        font-size: 10pt;
        line-height: 1.10;
        /* sedikit lebih lega agar sama Word */
        font-weight: bold;
    }

    /* label "BC 2.7" */
    .bc {
        font-size: 12pt;
        /* 'large' sering beda antar engine, pakai angka */
        font-weight: bold;
        line-height: 1.0;
    }

    .f10 {
        font-size: 10pt;
    }

    /* Supaya div tidak bikin margin bawaan */
    .blk {
        margin: 0;
        padding: 0;
    }

    /* =========================
     KEY-VALUE TABLE (rapat)
     ========================= */
    .kv td {
        padding: 0.30mm 0.60mm;
        vertical-align: top;
        line-height: 1.05;
    }

    .kv-tight td {
        padding: 0.20mm 0.60mm;
        vertical-align: top;
        line-height: 1.00;
    }

    /* rapat khusus area header A/B/C/D/G */
    .kv-abc td {
        padding: 0.20mm 0.60mm;
        vertical-align: top;
        line-height: 1.00;
    }

    /* =========================
     SECTION HEADER TUNING
     ========================= */
    .sec-title {
        display: block;
        padding-top: 0.6mm;
        padding-bottom: 0.4mm;
        line-height: 1.0;
    }

    /* satu section cell (A, D, B/C, G) */
    .sec-cell {
        padding: 0.7mm 0.9mm;
        /* top/bottom, left/right */
    }

    /* gap antara B dan C */
    .bc-gap {
        margin-top: 0.6mm;
    }

    /* tabel di bawah judul section */
    .sec-kv {
        margin-top: 0.2mm;
    }

    /* =========================
     OPTIONAL: CONSISTENT COL WIDTHS FOR row3()
     (kalau Anda mau jadikan class, lebih stabil dibanding inline)
     ========================= */
    .no-col {
        width: 6mm;
        white-space: nowrap;
    }

    .lbl-col {
        width: 34mm;
    }

    .sep-col {
        width: 3mm;
    }
</style>

<!-- TOP BAR (BC 2.7 + Judul besar) -->
<table class="b">
    <tr>
        <td class="b center bold bc" style="width:18mm;">BC 2.7</td>
        <td class="b center f10" style="vertical-align: middle; padding: 1mm 0;">
            PEMBERITAHUAN PENGELUARAN UNTUK DIANGKUT DARI TEMPAT PENIMBUNAN<br>
            BERIKAT KE TEMPAT PENIMBUNAN BERIKAT LAINNYA
        </td>
    </tr>
</table>

<!-- OUTER MAIN WRAPPER -->
<table class="b bt0">

    <!-- HEADER row -->
    <tr>
        <td class="b bt0 p1">HEADER</td>
    </tr>

    <!-- === BLOK HEADER PENTING (NOMOR PENGAJUAN + A/B/C + D + G) === -->
    <tr>
        <td class="b bt0 p0">

            <table class="hdr-wrap" style="width:100%;">
                <!-- ROW 1: NOMOR PENGAJUAN (kiri) + HALAMAN (kanan) -->
                <tr class="hdr-top">
                    <!-- kiri 62% -->
                    <td class="col-left b br0 p0">
                        <table class="kv" style="width:100%;">
                            <tr>
                                <td style="width:40mm;" class="bold">NOMOR PENGAJUAN</td>
                                <td style="width:4mm;" class="center bold">:</td>
                                <td class="bold"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- kanan 38% -->
                    <td class="col-right b bl0 p0">
                        <div class="right small p1">Halaman ke-1 dari 3</div>
                    </td>
                </tr>

                <!-- ROW 2-?: kiri (A/B/C) + kanan (D lalu G) -->
                <tr>
                    <!-- KIRI: A/B/C (punya border kanan sebagai divider) -->
                    <td class="col-left b br0 p0">
                        <div class="sec">
                            <div class="sec-title">A. KANTOR PABEAN</div>
                            <table class="kv" style="width:100%; margin-top:0.6mm;">
                                <?= row3('Kantor Asal', v($data, 'kantor_asal', '-'), '1') ?>
                                <?= row3('Kantor Tujuan', v($data, 'kantor_tujuan', '-'), '2') ?>
                            </table>

                            <div style="height:0.9mm;"></div>

                            <div class="sec-title">B. JENIS TPB ASAL</div>
                            <table class="kv" style="width:100%; margin-top:0.6mm;">
                                <tr>
                                    <td class="no"></td>
                                    <td class="lbl"></td>
                                    <td class="sep center">:</td>
                                    <td class="val"><?= v($data, 'jenis_tpb_asal', '-') ?></td>
                                </tr>
                            </table>

                            <div style="height:0.9mm;"></div>

                            <div class="sec-title">C. JENIS TPB TUJUAN</div>
                            <table class="kv" style="width:100%; margin-top:0.6mm;">
                                <tr>
                                    <td class="no"></td>
                                    <td class="lbl"></td>
                                    <td class="sep center">:</td>
                                    <td class="val"><?= v($data, 'jenis_tpb_tujuan', '-') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>

                    <!-- KANAN: D (atas) dan G (bawah) dengan garis pemisah horizontal -->
                    <td class="col-right b bl0 p0">
                        <!-- D: punya border bawah sebagai pemisah dengan G -->
                        <div class="split-bottom">
                            <table class="d-table" style="width:100%;">
                                <tr>
                                    <td class="d-title sec-title">D. JENIS TRANSAKSI</td>
                                    <td class="d-val" style="padding:0.6mm;">
                                        : <?= v($data, 'jenis_transaksi', '-') ?>
                                    </td>
                                </tr>
                            </table>
                        </div>

                        <!-- G -->
                        <div class="sec">
                            <div class="sec-title bold">G. KOLOM KHUSUS BEA CUKAI</div>
                            <table class="kv" style="width:100%; margin-top:0.6mm;">
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

    <!-- E. DATA PEMBERITAHUAN -->
    <tr>
        <td class="b bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold" colspan="2">E. DATA PEMBERITAHUAN</td>
                </tr>

                <tr>
                    <td class="b1 bt0 p0" style="width:50%; vertical-align:top;">
                        <div class="bold p1">TPB ASAL BARANG</div>
                        <table class="kv">
                            <?= row3('NPWP', v($data, 'tpb_asal_npwp'), '1') ?>
                            <?= row3('Nama', v($data, 'tpb_asal_nama'), '2') ?>
                            <?= row3('Alamat', v($data, 'tpb_asal_alamat'), '3') ?>
                            <?= row3('No Izin TPB', v($data, 'tpb_asal_no_izin'), '4') ?>
                        </table>
                    </td>

                    <td class="b1 bt0 p0" style="width:50%; vertical-align:top;">
                        <div class="bold p1">TPB TUJUAN BARANG</div>
                        <table class="kv">
                            <?= row3('NPWP', v($data, 'tpb_tujuan_npwp'), '5') ?>
                            <?= row3('Nama', v($data, 'tpb_tujuan_nama'), '6') ?>
                            <?= row3('Alamat', v($data, 'tpb_tujuan_alamat'), '7') ?>
                            <?= row3('No Izin TPB', v($data, 'tpb_tujuan_no_izin'), '8') ?>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="b1 bt0 p0" colspan="2">
                        <div class="bold p1">PEMILIK BARANG</div>
                        <table class="kv">
                            <?= row3('NPWP', v($data, 'pemilik_npwp'), '9') ?>
                            <?= row3('Nama', v($data, 'pemilik_nama'), '10') ?>
                            <?= row3('Alamat', v($data, 'pemilik_alamat'), '11') ?>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>

    <!-- DOKUMEN PELENGKAP PABEAN -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold">DOKUMEN PELENGKAP PABEAN</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p0">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">12.</td>
                                            <td style="width:30mm;">Invoice</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'invoice_no') ?></td>
                                            <td style="width:10mm;" class="right">tgl.</td>
                                            <td><?= v($data, 'invoice_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Packing List</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'packing_list_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'packing_list_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Kontrak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'kontrak_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'kontrak_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Faktur Pajak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'faktur_pajak_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'faktur_pajak_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Uang Muka</td>
                                            <td class="center">:</td>
                                            <td></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'uang_muka_tgl') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <td class="b1 bt0 br0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">16.</td>
                                            <td style="width:40mm;">Surat Jalan</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'surat_jalan_no') ?></td>
                                            <td style="width:10mm;" class="right">tgl.</td>
                                            <td><?= v($data, 'surat_jalan_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Surat Keputusan/Persetujuan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'sk_persetujuan_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'sk_persetujuan_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Lainnya</td>
                                            <td class="center">:</td>
                                            <td colspan="3"><?= v($data, 'lainnya') ?></td>
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

    <!-- RIWAYAT BARANG -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold">RIWAYAT BARANG</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1">
                        <table class="kv-tight">
                            <tr>
                                <td style="width:6mm;">19.</td>
                                <td style="width:6mm;">a.</td>
                                <td style="width:55mm;">Nomor dan Tanggal BC 2.7</td>
                                <td class="center" style="width:3mm;">:</td>
                                <td><?= v($data, 'riwayat_bc27_no') ?></td>
                                <td class="right" style="width:10mm;">tgl.</td>
                                <td><?= v($data, 'riwayat_bc27_tgl') ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b.</td>
                                <td>Nomor dan Tanggal BC 2.3</td>
                                <td class="center">:</td>
                                <td><?= v($data, 'riwayat_bc23_no') ?></td>
                                <td class="right">tgl.</td>
                                <td><?= v($data, 'riwayat_bc23_tgl') ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c.</td>
                                <td>Nomor dan Tanggal BC 4.0</td>
                                <td class="center">:</td>
                                <td><?= v($data, 'riwayat_bc40_no') ?></td>
                                <td class="right">tgl.</td>
                                <td><?= v($data, 'riwayat_bc40_tgl') ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- DATA PERDAGANGAN -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold">DATA PERDAGANGAN</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p0">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">20.</td>
                                            <td style="width:45mm;">Jenis Valuta Asing</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'valuta', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>CIF</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'cif') ?></td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>Nilai Penggantian/Nilai</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'nilai_penggantian') ?></td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>Harga Penyerahan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'harga_penyerahan') ?></td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>Harga Perolehan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'harga_perolehan') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <td class="b1 bt0 br0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">25.</td>
                                            <td style="width:45mm;">Nilai Uang Muka</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'nilai_uang_muka') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Diskon</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'diskon') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dasar Pengenaan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'dasar_pengenaan') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>PPN Pajak(0%)</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'ppn') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>PPNBM Pajak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'ppnbm') ?></td>
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

    <!-- DATA PENGANGKUTAN + SEGEL -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold">DATA PENGANGKUTAN</td>
                    <td class="b1 bt0 p1 bold center" style="width:40%;">SEGEL (DIISI OLEH BEA DAN CUKAI)</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1" style="width:60%;">
                        <table class="kv-tight">
                            <tr>
                                <td style="width:6mm;">26.</td>
                                <td style="width:55mm;">Jenis Sarana Pengangkut</td>
                                <td class="center" style="width:3mm;">:</td>
                                <td><?= v($data, 'jenis_sarana') ?></td>
                            </tr>
                            <tr>
                                <td style="width:6mm;">27.</td>
                                <td>No Polisi</td>
                                <td class="center">:</td>
                                <td><?= v($data, 'no_polisi') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td class="b1 bt0 p0" style="width:40%;">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1 center bold" colspan="2">BC Asal</td>
                                <td class="b1 bt0 br0 p1 center bold" style="width:45%;">30. Catatan BC Tujuan</td>
                            </tr>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="width:30%;">28. No Segel</td>
                                <td class="b1 bt0 p1" style="width:25%;"><?= v($data, 'no_segel') ?></td>
                                <td class="b1 bt0 br0 p1" rowspan="2"><?= v($data, 'catatan_bc_tujuan') ?></td>
                            </tr>
                            <tr>
                                <td class="b1 bt0 bl0 p1">29. Jenis</td>
                                <td class="b1 bt0 p1"><?= v($data, 'jenis_segel') ?></td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
        </td>
    </tr>

    <!-- DATA PETI KEMAS DAN PENGEMAS -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold" colspan="2">DATA PETI KEMAS DAN PENGEMAS</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1" style="width:60%;">31. Merek dan No Kemasan/Peti Kemasan dan Jumlah</td>
                    <td class="b1 bt0 p1" style="width:40%;">32. Jumlah dan Jenis Kemasan</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1"><?= v($data, 'merek_kemasan') ?></td>
                    <td class="b1 bt0 p1"><?= v($data, 'jumlah_jenis_kemasan') ?></td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1">33. Volume (m3) : <?= v($data, 'volume') ?></td>
                    <td class="b1 bt0 p1">34. Berat Kotor : <?= v($data, 'berat_kotor') ?> &nbsp;&nbsp; 35. Berat Bersih (kg) : <?= v($data, 'berat_bersih') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- TABEL 36-39 -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1" style="width:10mm;">36.<br>No</td>
                    <td class="b1 bt0 p1" style="width:95mm;">
                        37. Pos tarif/HS, uraian jumlah dan barang secara lengkap, kode barang,<br>
                        merk, tipe, ukuran, dan spesifikasi
                    </td>
                    <td class="b1 bt0 p1" style="width:45mm;">
                        38.<br>
                        - Jumlah &amp; Jenis Satuan<br>
                        - Berat Bersih (kg)<br>
                        - Volume (m3)
                    </td>
                    <td class="b1 bt0 p1">
                        39.<br>
                        - Nilai CIF<br>
                        - Harga penyerahan<br>
                        - Harga perolehan<br>
                        - Nilai Penggantian/Nilai Jasa
                    </td>
                </tr>

                <tr>
                    <td class="b1 bt0 center" style="height:25mm;" colspan="4">
                        <div class="center" style="margin-top:10mm;">
                            -------------- (2) Jenis barang. Lihat lembar lanjut --------------
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- F & H -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1 bold" style="width:55%;">F. TANDA TANGAN PENGUSAHA TPB</td>
                    <td class="b1 bt0 p1 bold" style="width:45%;">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1" style="height:24mm; vertical-align:top;">
                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                        diberitahukan dalam pemberitahuan pabean ini.<br><br>
                        , <?= v($data, 'tanggal_cetak') ?>
                    </td>

                    <td class="b1 bt0 p0" style="height:24mm; vertical-align:top;">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1 center bold">Kantor Pabean Asal</td>
                                <td class="b1 bt0 br0 p1 center bold">Kantor Pabean Tujuan</td>
                            </tr>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="height:15mm; vertical-align:bottom;">
                                    Nama :<br>
                                    NIM :
                                </td>
                                <td class="b1 bt0 br0 p1" style="height:15mm; vertical-align:bottom;">
                                    Nama :<br>
                                    NIM :
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
        </td>
    </tr>

</table>