<?php
// Template murni rendering: jangan declare(strict_types=1) di sini

/** @var array $data */
/** @var array $items */
/** @var int $startNo */

// Helper functions sudah tersedia dari helpers.php via autoload Composer
// function v(), vv(), row3() sudah di-deklarasikan di src/Support/helpers.php
?>

<style>
    @page {
        margin-top: 4.2mm;
        margin-right: 5mm;
        margin-bottom: 27.8mm;
        margin-left: 5mm;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 7.6pt;
        line-height: 1.02;
    }

    table {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
    }

    table,
    tr,
    td {
        page-break-inside: avoid;
    }

    .b1 {
        border: 0.5pt solid #000;
    }

    .bt0 {
        border-top: 0;
    }

    .bl0 {
        border-left: 0;
    }

    .br0 {
        border-right: 0;
    }

    .bb0 {
        border-bottom: 0;
    }

    .p0 {
        padding: 0;
    }

    .p1 {
        padding: 0.45mm;
    }

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
        font-size: 6.8pt;
    }

    .bc {
        font-size: 10pt;
        line-height: 1.0;
    }

    .f10 {
        font-size: 9.5pt;
        line-height: 1.0;
    }

    .topbar td {
        padding: 0.4mm 0.6mm;
        line-height: 1.0;
        vertical-align: middle;
    }

    .topbar-left {
        padding: 0 !important;
    }

    .topbar-right {
        padding: 0.35mm 0.6mm !important;
    }

    .kv-tight td {
        padding: 0.18mm 0.55mm;
        vertical-align: top;
    }

    .kv td {
        padding: 0.25mm 0.55mm;
        vertical-align: top;
    }

    .sec-title {
        display: block;
        padding-top: 0.6mm;
        padding-bottom: 0.4mm;
    }

    .sec-cell {
        padding: 0.7mm 0.9mm;
    }

    .sec-kv {
        margin-top: 0.2mm;
    }

    .kv-abc td {
        padding: 0.20mm 0.60mm;
    }

    /* Tabel barang 36-39 */
    .goods-head td {
        font-weight: bold;
        vertical-align: top;
    }

    .goods-row td {
        vertical-align: top;
        padding: 0.6mm 0.8mm;
    }

    .goods-no {
        width: 10mm;
        text-align: center;
    }

    .goods-col37 {
        width: 95mm;
    }

    .goods-col38 {
        width: 45mm;
    }

    .goods-col39 {
        width: auto;
    }

    .wrap {
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .line {
        margin: 0;
        padding: 0;
    }

    /* rapatkan semua cell di adgWrap */
    .adgWrap td {
        padding: 0.22mm 0.30mm;
        /* lebih rapat dari sebelumnya */
        vertical-align: top;
    }

    /* kolom ":" super rapat */
    .adgWrap .sep {
        width: 2.0mm;
        /* dari 2.6mm -> 2.0mm */
        text-align: center;
        padding: 0 !important;
        /* kunci supaya ":" nempel */
    }

    /* value biar "-" dekat ":" */
    .adgWrap .val {
        padding-left: 0.15mm !important;
        /* kecil sekali supaya "-" dekat ":" */
    }

    /* label kiri/kanan rapat (supaya ":" dekat label) */
    .adgWrap .indent,
    .adgWrap .secHead {
        padding-right: 0.25mm !important;
        /* label makin dekat ke ":" */
    }

    /* khusus label kanan di area G (Nomor Pendaftaran/Tanggal): lebih rapat lagi */
    .adgWrap .gLabel {
        padding-right: 0.10mm !important;
    }

    /* garis vertikal pemisah G */
    .adgWrap .splitL {
        border-left: 0.5pt solid #000;
    }

    /* garis tebal atas khusus area G (hanya panel kanan) */
    .adgWrap .gTopBold {
        border-top: 1.0pt solid #000;
        /* “tebal” */
    }
</style>

<!-- TOP BAR -->
<table class="b1 topbar" cellspacing="0" cellpadding="0">
    <tr>
        <td class="b1 center bc bold topbar-left" style="width:18mm;">BC 2.7</td>
        <td class="b1 center bold topbar-right f10">
            LEMBAR LANJUTAN DATA BARANG
        </td>
    </tr>
</table>

<!-- OUTER -->
<table class="b1 bt0">

    <!-- HEADER row -->
    <tr>
        <td class="b1 bt0 p1">HEADER</td>
    </tr>

    <!-- BLOK: NOMOR PENGAJUAN + A/D/G (SATU BORDER LUAR) -->
    <tr>
        <td class="b1 bt0 p0">
            <table class="adgWrap">
                <colgroup>
                    <!-- KIRI -->
                    <col style="width:26%;">
                    <col style="width:2.0mm;"> <!-- ":" kiri makin rapat -->
                    <col style="width:36%;">
                    <!-- KANAN -->
                    <col style="width:20%;">
                    <col style="width:2.0mm;"> <!-- ":" kanan makin rapat -->
                    <col style="width:14%;">
                </colgroup>

                <!-- Row 0: NOMOR PENGAJUAN | Halaman -->
                <tr>
                    <td class="secHead">NOMOR PENGAJUAN</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'nomor_pengajuan') ?></td>

                    <td colspan="3" style="padding-right:0.8mm;">
                        <div class="page">Halaman ke-3 dari 3</div>
                    </td>
                </tr>

                <!-- Row 1: A | D -->
                <tr>
                    <td class="secHead">A. KANTOR PABEAN</td>
                    <td class="sep">:</td>
                    <td class="val">-</td>

                    <td class="secHead">D. JENIS TRANSAKSI</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_transaksi', '-') ?></td>
                </tr>

                <!-- Row 2: 1. Kantor Asal | kosong kanan -->
                <tr>
                    <td class="indent">1. Kantor Asal</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'kantor_asal', '-') ?></td>

                    <td colspan="3">&nbsp;</td>
                </tr>

                <!-- Row 3: 2. Kantor Tujuan | G header (mulai splitL + garis tebal atas hanya kanan) -->
                <tr>
                    <td class="indent">2. Kantor Tujuan</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'kantor_tujuan', '-') ?></td>

                    <!-- garis tebal atas hanya area kanan -->
                    <td class="secHead splitL gTopBold" colspan="3">G. KOLOM KHUSUS BEA CUKAI</td>
                </tr>

                <!-- Row 4: B | Nomor Pendaftaran -->
                <tr>
                    <td class="secHead">B. JENIS TPB ASAL</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_tpb_asal', '-') ?></td>

                    <td class="splitL indent gLabel">Nomor Pendaftaran</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'nomor_pendaftaran', '-') ?></td>
                </tr>

                <!-- Row 5: C | Tanggal -->
                <tr>
                    <td class="secHead">C. JENIS TPB TUJUAN</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_tpb_tujuan', '-') ?></td>

                    <td class="splitL indent gLabel">Tanggal</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'tanggal_pendaftaran', '-') ?></td>
                </tr>

            </table>
        </td>
    </tr>


    <!-- TABEL 36-39 -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr class="goods-head">
                    <td class="b1 bt0 p1 goods-no">36.<br>No</td>
                    <td class="b1 bt0 p1 goods-col37">
                        37. Pos tarif/HS, uraian jumlah dan barang secara lengkap, kode barang,<br>
                        merk, tipe, ukuran, dan spesifikasi
                    </td>
                    <td class="b1 bt0 p1 goods-col38">
                        38.<br>
                        - Jumlah &amp; Jenis Satuan<br>
                        - Berat Bersih (kg)<br>
                        - Volume (m3)
                    </td>
                    <td class="b1 bt0 p1 goods-col39">
                        39.<br>
                        - Nilai CIF<br>
                        - Harga penyerahan<br>
                        - Harga perolehan<br>
                        - Nilai Penggantian/Nilai Jasa
                    </td>
                </tr>

                <?php
                $no = (int)($startNo ?? 1);
                foreach (($items ?? []) as $row):
                ?>
                    <tr class="goods-row">
                        <td class="b1 bt0 center"><?= $no++ ?></td>

                        <td class="b1 bt0 wrap">
                            <div class="line">- Pos Tarif/HS: <?= vv($row, 'hs', '-') ?></div>
                            <div class="line">- Kode Brg: <?= vv($row, 'kode_barang', '-') ?></div>
                            <div class="line">
                                <?= vv($row, 'uraian', '-') ?>
                                , Merk: <?= vv($row, 'merk', '-') ?>,
                                Tipe: <?= vv($row, 'tipe', '-') ?>,
                                Ukuran: <?= vv($row, 'ukuran', '-') ?>,
                                Spesifikasi Lain: <?= vv($row, 'spesifikasi', '-') ?>
                            </div>
                        </td>

                        <td class="b1 bt0 wrap">
                            <div class="line"><?= vv($row, 'jumlah_satuan', '-') ?></div>
                            <div class="line"><?= vv($row, 'berat_bersih', '-') ?></div>
                            <div class="line"><?= vv($row, 'volume', '-') ?></div>
                        </td>

                        <td class="b1 bt0 wrap">
                            <div class="line"><?= vv($row, 'nilai_cif', '-') ?></div>
                            <div class="line"><?= vv($row, 'harga_penyerahan', '-') ?></div>
                            <div class="line"><?= vv($row, 'harga_perolehan', '-') ?></div>
                            <div class="line"><?= vv($row, 'nilai_jasa', '-') ?></div>
                        </td>
                    </tr>
                <?php endforeach; ?>

                <?php if (empty($items)): ?>
                    <tr>
                        <td class="b1 bt0 center" style="height:25mm;" colspan="4">
                            <div class="center" style="margin-top:10mm;">
                                -------------- (2) Jenis barang. Lihat lembar lanjut --------------
                            </div>
                        </td>
                    </tr>
                <?php endif; ?>
            </table>
        </td>
    </tr>

    <!-- F & H -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1" style="width:55%;">F. TANDA TANGAN PENGUSAHA TPB</td>
                    <td class="b1 bt0 p1" style="width:45%;">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1" style="height:24mm; vertical-align:top;">
                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                        diberitahukan dalam pemberitahuan pabean ini.<br><br>
                        , <?= v($data, 'tanggal_cetak') ?>
                    </td>

                    <td class="b1 bt0 p0" style="height:24mm; vertical-align:top;">
                        <table style="width:100%; table-layout:fixed; border-collapse:collapse; height:24mm;">
                            <colgroup>
                                <col style="width:50%;">
                                <col style="width:50%;">
                            </colgroup>

                            <!-- HEADER -->
                            <tr>
                                <td class="p1 center"
                                    style="border-bottom:0.5pt solid #000;">
                                    Kantor Pabean Asal
                                </td>

                                <td class="p1 center"
                                    style="border-left:0.5pt solid #000; border-bottom:0.5pt solid #000;">
                                    Kantor Pabean Tujuan
                                </td>
                            </tr>

                            <!-- BODY (tanpa garis horizontal), garis tengah harus lanjut sampai bawah -->
                            <tr>
                                <td style="
        height:18mm;              /* SAMAKAN kiri & kanan */
        vertical-align:bottom;
        border:0;
        padding-left:1.2mm;         /* jarak kiri dari border */
        padding-right:0.6mm;
        padding-bottom:0.3mm;
        line-height:1.05;
    ">
                                    Nama :<br>NIM :
                                </td>

                                <td style="
        height:20mm;              /* SAMAKAN kiri & kanan */
        vertical-align:bottom;
        border:0;
        border-left:0.5pt solid #000; /* garis vertikal lanjut sampai bawah */
        padding-left:1.2mm;         /* jarak dari garis tengah */
        padding-right:0.6mm;
        padding-bottom:0.3mm;
        line-height:1.05;
    ">
                                    Nama :<br>NIM :
                                </td>
                            </tr>


                </tr>
            </table>
        </td>
    </tr>
</table>

<!-- FOOTER (opsional, tapi di template Word ada printed from) -->
<tr>
    <td class="bt0 p1 right small" style="border:0;">
        Printed from <?= v($data, 'printed_from', 'esikatERP') ?> | <?= v($data, 'printed_date', '') ?> | <?= v($data, 'printed_time', '') ?>
    </td>
</tr>

</table>