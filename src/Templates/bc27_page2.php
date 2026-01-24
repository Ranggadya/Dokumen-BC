<?php
// Template murni rendering: jangan declare(strict_types=1) di sini

/** @var array $data */
/** @var array $items */
/** @var int $startNo */
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
        padding: 0.7mm 0.8mm;
        line-height: 1.0;
        vertical-align: middle;
    }

    .topbar-left {
        padding: 0;
    }

    .topbar-right {
        padding: 2mm;
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

    .goods-head td {
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

    /* =========================
   BLOK: NOMOR PENGAJUAN + A/B/C + D/G (SINGLE BORDER SYSTEM)
   ========================= */
    table.adgHeader {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: 0.5pt solid #000;
    }

    table.adgHeader td {
        border: 0.5pt solid #000;
        padding: 1.2mm 2.5mm;
        vertical-align: top;
    }

    table.adgHeader .no-border-right {
        border-right: none !important;
    }

    table.adgHeader .no-border-left {
        border-left: none !important;
    }

    table.adgHeader .no-border-top {
        border-top: none !important;
    }

    table.adgHeader .no-border-bottom {
        border-bottom: none !important;
    }

    table.adgHeader .left-col {
        width: 46%;
    }

    table.adgHeader .right-col {
        width: 54%;
    }

    /* Baris Halaman */
    table.adgHeader .halaman-cell {
        padding: 1.2mm 2.5mm;
    }

    table.adgHeader .halaman {
        text-align: right;
        font-size: 6.8pt;
        justify-content: right;
        justify-items: right;
    }

    /* Baris D */
    table.adgHeader .section-d-cell {
        padding: 1.2mm 2.5mm;
    }

    /* Baris G dengan border kiri dan atas */
    table.adgHeader .section-g-cell {
        padding: 1.2mm 2.5mm;
        border-left: 0.5pt solid #000 !important;
        border-top: 0.5pt solid #000 !important;
    }

    /* Table untuk alignment field KIRI (NOMOR, A, B, C) */
    table.field-table {
        width: 100%;
        border-collapse: collapse;
    }

    table.field-table td {
        border: none !important;
        padding: 0.3mm 0;
        vertical-align: top;
    }

    table.field-table .field-label {
        width: 38mm;
    }

    table.field-table .indent-label {
        padding-left: 5mm;
        width: 38mm;
    }

    table.field-table .field-sep {
        width: 1mm;
        text-align: left;
        padding-right: 1mm;
    }

    table.field-table .field-value {
        width: auto;
    }

    /* Table untuk alignment field D */
    table.field-table-right {
        width: 100%;
        border-collapse: collapse;
    }

    table.field-table-right td {
        border: none !important;
        padding: 0.3mm 0;
        vertical-align: top;
    }

    table.field-table-right .field-label-right {
        width: 30mm;
    }

    table.field-table-right .field-sep-right {
        width: 1mm;
        text-align: left;
        padding-right: 1mm;
    }

    table.field-table-right .field-value-right {
        width: auto;
    }

    /* Table untuk alignment field G */
    table.field-table-g {
        width: 100%;
        border-collapse: collapse;
    }

    table.field-table-g td {
        border: none !important;
        padding: 0.3mm 0;
        vertical-align: top;
    }

    table.field-table-g .field-label-g {
        width: 32mm;
    }

    table.field-table-g .indent-label {
        padding-left: 5mm;
        width: 32mm;
    }

    table.field-table-g .field-sep-g {
        width: 1mm;
        text-align: left;
        padding-right: 1mm;
    }

    table.field-table-g .field-value-g {
        width: auto;
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
<table class="bc27-mini">
    <tr>
        <td>BC 2.7</td>
    </tr>
</table>
<!-- TOP BAR -->
<table class="b1 topbar" cellspacing="0" cellpadding="0">
    <tr>
        <td class="b1 center bc bold topbar-left" style="width:18mm;">BC 2.7</td>
        <td class="b1 center topbar-right f10">
            LEMBAR LANJUTAN <br> DATA BARANG
        </td>
    </tr>
</table>

<!-- OUTER -->
<table class="b1">
    <tr>
        <td class="b1 bt0 p1" style="padding-left: 1.5mm;">HEADER</td>
    </tr>
    <!-- BLOK: NOMOR PENGAJUAN + A/B/C + D/G (SINGLE BORDER SYSTEM) -->
    <tr>
        <td class="p0">
            <table class="adgHeader">
                <tr>
                    <td class="left-col no-border-right" rowspan="3">
                        <table class="field-table">
                            <tr>
                                <td class="field-label">NOMOR PENGAJUAN</td>
                                <td class="field-sep">:</td>
                                <td class="field-value"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 1mm;"></td>
                            </tr>
                            <tr>
                                <td class="field-label">A. KANTOR PABEAN</td>
                                <td class="field-sep"></td>
                                <td class="field-value"></td>
                            </tr>
                            <tr>
                                <td class="field-label indent-label">1. Kantor Asal</td>
                                <td class="field-sep">:</td>
                                <td class="field-value"><?= v($data, 'kantor_asal', '-') ?></td>
                            </tr>
                            <tr>
                                <td class="field-label indent-label">2. Kantor Tujuan</td>
                                <td class="field-sep">:</td>
                                <td class="field-value"><?= v($data, 'kantor_tujuan', '-') ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 1mm;"></td>
                            </tr>
                            <tr>
                                <td class="field-label">B. JENIS TPB ASAL</td>
                                <td class="field-sep">:</td>
                                <td class="field-value"><?= v($data, 'jenis_tpb_asal', '-') ?></td>
                            </tr>
                            <tr>
                                <td colspan="3" style="height: 1mm;"></td>
                            </tr>
                            <tr>
                                <td class="field-label">C. JENIS TPB TUJUAN</td>
                                <td class="field-sep">:</td>
                                <td class="field-value"><?= v($data, 'jenis_tpb_tujuan', '-') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- Baris 1 Kanan: Halaman (sejajar dengan NOMOR) -->
                    <td class="right-col no-border-left no-border-bottom halaman-cell" style="text-align: right;">
                        <div class="halaman">Halaman ke-3 dari 3</div>
                    </td>
                </tr>

                <!-- Baris 2 Kanan: D (sejajar dengan A) -->
                <tr>
                    <td class="right-col no-border-left no-border-top section-d-cell">
                        <table class="field-table-right">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">D. JENIS TRANSAKSI</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_transaksi', '-') ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Baris 3 Kanan: G (sejajar dengan 2. Kantor Tujuan) -->
                <tr>
                    <td class="right-col no-border-left section-g-cell">
                        <div style="margin-bottom: 1.5mm;">
                            G. KOLOM KHUSUS BEA CUKAI
                        </div>
                        <table class="field-table-g">
                           <tr>
                                <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Nomor Pendaftaran</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pendaftaran', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Tanggal</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'tanggal_pendaftaran', '') ?></td>
                            </tr>
                        </table>
                    </td>
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
                    <td class="b1 bt0 p1" style="width:55%; padding-left:1.5mm;">F. TANDA TANGAN PENGUSAHA TPB</td>
                    <td class="b1 bt0 p1" style="width:45%; padding-left:1.5mm">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1" style="height:24mm; vertical-align:top; padding:2mm;">
                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                        diberitahukan dalam pemberitahuan pabean ini.<br>
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
        padding-left:1.4mm;         /* jarak kiri dari border */
        padding-right:0.6mm;
        padding-bottom:0.7mm;
        line-height:1.05;
    ">
                                    Nama :<br>NIM :
                                </td>

                                <td style="
        height:20mm;              
        vertical-align:bottom;
        border:0;
        border-left:0.5pt solid #000; /* garis vertikal lanjut sampai bawah */
        padding-left:1.4mm;         /* jarak dari garis tengah */
        padding-right:0.6mm;
        padding-bottom:0.7mm;
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

<tr>
    <td class="bt0 p1 right small" style="border:0;">
        Printed from <?= v($data, 'printed_from', 'esikatERP') ?> | <?= v($data, 'printed_date', '') ?> | <?= v($data, 'printed_time', '') ?>
    </td>
</tr>

</table>