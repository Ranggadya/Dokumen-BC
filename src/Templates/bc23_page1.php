<?php
// bc23_page1.php
// TEMPLATE ONLY: HTML + CSS
// Asumsi helper v($data,'key') sudah tersedia dari print_bc23.php
// dan $data sudah ada di scope include.
?>
<style>
    @page {
        margin: 8mm;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 8pt;
        margin: 0;
        padding: 0;
        color: #000;
    }

    .header-bc23 {
        text-align: center;
        font-size: 11pt;
        margin: 0 0 3mm 0;
        line-height: 1.15;
    }

    .nomor-pengajuan {
        margin: 0 0 3mm 0;
        font-size: 8pt;
    }

    /* Main table (basis 7 kolom agar konsisten dengan kolom 33-39) */
    table.bc23-main {
        width: 100%;
        border-collapse: collapse;
        border: 0.6pt solid #000;
        table-layout: fixed;
    }

    table.bc23-main td {
        border: 0.6pt solid #000;
        padding: 1mm 1.5mm;
        vertical-align: top;
        font-size: 8pt;
    }

    .checkbox-group {
        display: inline-block;
        margin-right: 3mm;
        white-space: nowrap;
    }

    .checkbox {
        display: inline-block;
        width: 3mm;
        height: 3mm;
        border: 0.6pt solid #000;
        margin-right: 1mm;
        vertical-align: middle;
    }

    .text-right {
        text-align: right;
    }

    .text-center {
        text-align: center;
    }

    .small-text {
        font-size: 7pt;
    }

    .footer-page {
        margin-top: 2mm;
        font-size: 7pt;
    }

    .print-info {
        text-align: right;
        font-size: 7pt;
        margin-top: 2mm;
    }

    /* Table kecil untuk blok kanan (biar rapih) */
    table.inner {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.inner td {
        border: none;
        padding: 0.4mm 0;
        font-size: 8pt;
        vertical-align: top;
    }

    /* Header barang (33-39) */
    .barang-head td {
        font-size: 7pt;
        text-align: left;
        line-height: 1.15;
    }

    /* Body barang */
    .barang-body td {
        font-size: 7.5pt;
        line-height: 1.2;
    }

    .nowrap {
        white-space: nowrap;
    }

    .topbox td {
        padding: 0.8mm 1.2mm;
        vertical-align: top;
    }

    /* Tabel layout header-top: bikin ":" sejajar vertikal */
    .top-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .top-grid td {
        border: none !important;
        padding: 0;
    }

    /* Kolom label kiri */
    .top-lbl {
        width: 25mm;
        white-space: nowrap;
    }

    /* Kolom ":" yang fix, supaya semua ":" sejajar */
    .top-colon {
        width: 2mm;
        text-align: center;
    }

    /* Kolom value kiri */
    .top-val {
        width: auto;
    }

    /* Kolom kanan untuk halaman (bukan cell terpisah di bc23-main, tapi masih 1 row di top-grid) */
    .top-page {
        width: 28mm;
        text-align: right;
        white-space: nowrap;
    }

    .tujuan-wrap {
        white-space: nowrap;
    }

    .tujuan-box {
        display: inline-block;
        width: 10mm;
        height: 6mm;
        border: 0.6pt solid #000;
        vertical-align: middle;
        margin: 0 2mm;
    }

    /* Style untuk mPDF - gunakan unit mm untuk stabilitas */
    .bd-table {
        width: 100%;
        border-collapse: collapse;
    }

    .bd-table td {
        border: 0.6pt solid #000;
        padding: 2mm;
        vertical-align: top;
    }

    .bd-title {
        margin-bottom: 2mm;
    }

    /* Bagian B - Data Pemberitahuan Pemasok */
    .b-content {
        display: block;
    }

    .b-field-row {
        margin-bottom: 1mm;
    }

    .b-field-label {
        display: inline-block;
        width: 50mm;
    }

    .b-colon {
        display: inline-block;
        width: 5mm;
    }

    .b-field-text {
        display: inline-block;
    }

    /* Bagian D - Diisi Oleh Bea dan Cukai */
    .d-content {
        display: block;
    }

    .d-field-row {
        margin-bottom: 1mm;
        position: relative;
    }

    .d-label {
        display: inline-block;
        width: 52mm;
        vertical-align: middle;
    }

    .d-colon {
        display: inline-block;
        width: 5mm;
        vertical-align: middle;
    }

    .input-boxes {
        display: inline-block;
        vertical-align: middle;
    }

    .input-box {
        display: inline-block;
        height: 6mm;
        border: 0.6pt solid #000;
        background: #fff;
        vertical-align: middle;
    }

    .input-box.large {
        width: 32mm;
    }

    .input-box.small {
        width: 22mm;
    }

    /* Kotak No dan Tgl tanpa gap */
    .d-field-row.no-tgl .input-box+.input-box {
        margin-left: 0;
    }

    /* Kotak Kantor Pabean menempel kanan */
    .d-field-row.kantor {
        text-align: left;
    }

    .d-field-row.kantor .input-boxes {
        float: right;
        margin-right: 0;
    }

    .transport-table {
        width: 100%;
        border-collapse: collapse;
    }

    .transport-table td {
        border: 0.6pt solid #000;
        padding: 1.5mm;
        vertical-align: top;
    }

    /* rapihin padding supaya mirip form */
    .cell-tight {
        padding: 1.2mm 1.4mm;
        vertical-align: top;
        font-size: 8pt;
        line-height: 1.2;
    }

    .rightval {
        float: right;
        white-space: nowrap;
    }

    .stack>div {
        margin-bottom: 0.8mm;
    }

    .stack>div:last-child {
        margin-bottom: 0;
    }

    /* jika mau kotak input, aktifkan ini dan pakai span.inputbox */
    .inputbox {
        display: inline-block;
        height: 6mm;
        border: 0.6pt solid #000;
        background: #fff;
        vertical-align: middle;
        margin-left: 2mm;
    }

    .main-table {
        width: 100%;
        border-collapse: collapse;
    }

    .main-table td {
        border: 0.6pt solid #000;
        padding: 1.5mm;
        vertical-align: top;
    }

    .label-bold {
        margin-bottom: 1mm;
    }

    /* Grid untuk align label : value (kiri) */
    .left-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .left-grid td {
        border: none;
        padding: 0.5mm 0;
        vertical-align: top;
    }

    .l-label {
        width: 42mm;

        text-align: left;
        white-space: nowrap;
    }

    .l-colon {
        width: 4mm;
        /* ini “jarak” minimal 4mm sebelum ':' (lebih enak dari nempel) */
        text-align: center;
        /* ':' di tengah kolom colon biar stabil */
        white-space: nowrap;
        padding-left: 20mm;
    }

    .l-value {
        text-align: left;
    }

    /* khusus untuk baris yang butuh area kosong / multiline */
    .l-block {
        padding-top: 0.5mm;
        white-space: normal;
    }


    /* Right column menggunakan table untuk align */
    .right-grid {
        width: 100%;
        border-collapse: collapse;
    }

    .right-grid td {
        border: none;
        padding: 0.5mm 0;
        vertical-align: top;
    }

    .r-label {
        width: 45mm;
        text-align: left;
    }

    .r-colon {
        width: 3mm;
        text-align: left;
    }

    .r-value {
        text-align: left;
    }

    .r-tgl {
        width: 25mm;
        text-align: right;
    }

    .input-box-inline {
        display: inline-block;
        height: 4mm;
        width: 25mm;
        border: 0.6pt solid #000;
        background: #fff;
        vertical-align: middle;
        margin-left: 2mm;
    }

    .kemasan-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .kemasan-grid td {
        border: 0.5pt solid #000;
        vertical-align: top;
        padding: 0.4mm 0.6mm;
    }

    .kemasan-col-right {
        width: 38mm !important;
        max-width: 38mm !important;
        min-width: 38mm !important;
    }

    .force-wrap {
        overflow-wrap: anywhere;
        word-break: break-word;
        white-space: normal;
    }

    /* ===== 29 & 30 sejajar ===== */
    .k29_30 {
        display: grid;
        grid-template-columns: 1fr 1fr;
        /* dua kolom sejajar */
        column-gap: 6mm;
        row-gap: 0.3mm;
        font-size: 7.4pt;
        line-height: 1.05;
    }

    .k29_30 .lbl {
        font-weight: normal;
    }

    .k29_30 .val {
        margin-top: 0.2mm;
    }

    .k-row {
        display: block;
        margin: 0;
        padding: 0;
        line-height: 1.05;
        font-size: 7pt;
    }

    .k-right-num {
        float: right;
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


<!-- HEADER JUDUL (tetap) -->
<div class="header-bc23">
    PEMBERITAHUAN IMPOR BARANG UNTUK DITIMBUN<br>
    DI TEMPAT PENIMBUNAN BERIKAT
</div>

<table class="bc27-mini">
    <tr>
        <td>BC 2.3</td>
    </tr>
</table>
<!-- TOP BOX: NOMOR PENGAJUAN + A. TUJUAN dalam SATU AREA -->
<table class="bc23-main topbox">
    <tr>
        <td colspan="7">
            <table class="top-grid">
                <colgroup>
                    <col class="top-lbl">
                    <col class="top-colon">
                    <col class="top-val">
                    <col class="top-page">
                </colgroup>

                <!-- ROW 1: Nomor Pengajuan (kiri) + Halaman (kanan, sejajar) -->
                <tr>
                    <td class="top-lbl">Nomor Pengajuan</td>
                    <td class="top-colon">:</td>
                    <td class="top-val"><?= v($data, 'nomor_pengajuan') ?></td>
                    <td class="top-page" style="font-size: x-small;">Halaman ke-1 dari 2</td>
                </tr>
                <!-- ROW 2: A. Tujuan (kiri) -->
                <tr>
                    <td class="top-lbl" style="vertical-align: middle;">A. Tujuan</td>
                    <td class="top-colon" style="vertical-align: middle;">:</td>
                    <td colspan="2" style="padding: 0; vertical-align: middle;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0; width:6mm; vertical-align:middle;">
                                    <div style="border:1px solid #000; width:5mm; height:4mm;"></div>
                                </td>
                                <td style="border:none; padding:0 0 0 1mm; vertical-align:middle;">
                                    1. Kawasan Berikat&nbsp;&nbsp;2. Gudang Berikat&nbsp;&nbsp;3. TPPB&nbsp;&nbsp;4. TBB&nbsp;&nbsp;5. TLB&nbsp;&nbsp;6. KDUB&nbsp;&nbsp;7. PLB&nbsp;&nbsp;8. Lainnya
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<table class="bc23-main">
    <tr>
        <!-- Bagian B: DATA PEMBERITAHUAN PEMASOK -->
        <td colspan="3">
            <div class="bd-title">B. DATA PEMBERITAHUAN PEMASOK</div>
            <div class="b-content">
                <div class="b-field-row">
                    <span class="b-field-label">1. Nama, Alamat, Negara</span><span class="b-colon"> :</span><span class="b-field-text"><?= v($data, 'pemasok_nama_alamat_negara') ?></span>
                </div>
            </div>
        </td>

        <!-- Bagian D: DIISI OLEH BEA DAN CUKAI -->
        <td colspan="4" style="border: 1px solid #000; padding: 5px;">
            <!-- Baris 1: Judul D -->
            <div class="label-bold" style="margin-bottom: 2mm;">D. DIISI OLEH BEA DAN CUKAI</div>

            <!-- Baris 2: No. dan Tgl. -->
            <table class="left-grid" style="width: 100%; margin-bottom: 0;">
                <tr>
                    <td class="l-label" style="width: 40mm; padding-bottom: 0; ">No. dan Tgl.</td>
                    <td class="l-colon" style="width: 3mm; padding-bottom: 0;">:</td>
                    <td class="l-value" style="padding: 0;">
                        <table style="width: 98%; border-collapse: collapse; margin: 0; margin-right: -10px;">
                            <tr>
                                <td style="width: 50%; border: 1px solid #000; height: 4mm;"></td>
                                <td style="width: 50%; border-top: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; height: 4mm;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>

            <!-- Baris 3: Kantor Pabean Bongkar & Kantor Pabean -->
            <table class="left-grid" style="width: 100%; margin-bottom: 0;">
                <tr>
                    <td class="l-label" style="width: 40mm; padding-bottom: 0;">Kantor Pabean Bongkar</td>
                    <td class="l-colon" style="width: 3mm; padding-bottom: 0;">:</td>
                    <td class="l-value" style="padding: 0;">
                        <table style="width: 40%; border-collapse: collapse; margin: 0; margin-left: auto; margin-right:-5px;">
                            <tr>
                                <td style="border: 1px solid #000; height: 4mm;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="l-label" style="width: 40mm; padding-bottom: 0;">Kantor Pabean</td>
                    <td class="l-colon" style="width: 3mm; padding-bottom: 0;">:</td>
                    <td class="l-value" style="padding: 0;">
                        <table style="width: 40%; border-collapse: collapse; margin: 0; margin-left: auto; margin-right:-5px;">
                            <tr>
                                <td style="border: 1px solid #000; height: 4mm;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- BARIS 1: IMPORTIR / PENGUSAHA TPB + KOLOM KANAN (rowspan 3) -->
    <tr>
        <td colspan="3">
            <div class="label-bold">IMPORTIR / PENGUSAHA TPB</div>

            <table class="left-grid">
                <tr>
                    <td class="l-label">2. Identitas (NPWP)</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"><?= v($data, 'importir_npwp') ?></td>
                </tr>

                <tr>
                    <td class="l-label">3. Nama, Alamat</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"></td>
                </tr>
            </table>

            <div class="l-block" style="min-height:8mm; margin-bottom:1mm;">
                <?= v($data, 'importir_nama_alamat') ?>
            </div>

            <table class="left-grid">
                <tr>
                    <td class="l-label">4. No izin TPB</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"><?= v($data, 'importir_no_izin_tpb') ?></td>
                </tr>

                <tr>
                    <td class="l-label">5. NIB</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"><?= v($data, 'importir_nib') ?></td>
                </tr>
            </table>
        </td>
        <td colspan="4" rowspan="3">
            <table style="width: 100%; border-collapse: collapse;">
                <!-- 16. Invoice -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">16. Invoice</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'invoice_no') ?></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'invoice_tgl') ?></td>
                </tr>

                <!-- 17. Fasilitas Impor -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">17. Fasilitas Impor</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td colspan="3" style="border:none; padding:0.5mm 0;"><?= v($data, 'fasilitas_impor') ?></td>
                </tr>

                <!-- 18. Surat Keputusan -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">18. Surat Keputusan</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'sk_no') ?></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'sk_tgl') ?></td>
                </tr>

                <!-- Slash separator -->
                <tr>
                    <td colspan="5" style="border:none; padding:0.5mm 0; text-align: left;">/</td>
                </tr>

                <!-- Tgl. kosong -->
                <tr>
                    <td colspan="3" style="border:none; padding:0.5mm 0;"></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"></td>
                </tr>

                <!-- 19. LC -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">19. LC</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'lc_no') ?></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'lc_tgl') ?></td>
                </tr>

                <!-- 20. BL / AWB -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">20. BL / AWB</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'bl_awb_no') ?></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'bl_awb_tgl') ?></td>
                </tr>

                <!-- 21. BC 1.1 -->
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:28mm;">21. BC 1.1</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'bc11_no') ?></td>
                    <td style="border:none; padding:0.5mm 0; width:8mm;">Tgl.</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'bc11_tgl') ?></td>
                </tr>

                <!-- Pos & Sub Pos -->
                <tr>
                    <td colspan="5" style="border:none; padding:0.5mm 0; text-align: center;">Pos : <?= v($data, 'bc11_pos') ?> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; Sub Pos: <?= v($data, 'bc11_subpos') ?></td>
                </tr>
            </table>

            <!-- Kotak besar di bawah -->
            <div style="margin-top: 2mm; text-align: right;">
                <span class="input-box-inline" style="width: 50mm;"></span>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="3">
            <div class="label-bold">PEMILIK BARANG</div>

            <table class="left-grid">
                <tr>
                    <td class="l-label">6. Identitas (NPWP)</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"><?= v($data, 'pemilik_npwp') ?></td>
                </tr>

                <tr>
                    <td class="l-label">7. Nama, Alamat</td>
                    <td class="l-colon">:</td>
                    <td class="l-value"></td>
                </tr>
            </table>

            <div class="l-block" style="min-height:8mm;">
                <?= v($data, 'pemilik_nama_alamat') ?>
            </div>
        </td>
    </tr>
    <tr>
        <td colspan="3" style="border: 1px solid #000; padding: 10px; padding-bottom: 0;">
            <div class="label-bold">PPKJ</div>

            <table class="left-grid" style="width: 100%;">
                <tr>
                    <td class="l-label" style="width: 40mm;">8. NPWP</td>
                    <td class="l-colon" style="width: 3mm;">:</td>
                    <td class="l-value"><?= v($data, 'ppjk_npwp') ?></td>
                </tr>

                <tr>
                    <td class="l-label" style="width: 40mm;">9. Nama, Alamat</td>
                    <td class="l-colon" style="width: 3mm;">:</td>
                    <td class="l-value"></td>
                </tr>
            </table>

            <div class="l-block" style="min-height:5mm; margin-bottom:1mm;">
                <?= v($data, 'ppjk_nama_alamat') ?>
            </div>

            <table class="left-grid" style="width: 100%; margin-bottom: 0;">
                <tr>
                    <td class="l-label" style="width: 40mm; padding-bottom: 0;">10. No dan tgl NP-PPJK</td>
                    <td class="l-colon" style="width: 3mm; padding-bottom: 0;">:</td>
                    <td class="l-value" style="padding: 0;">
                        <table style="width: 100%; border-collapse: collapse; margin: 0; margin-right: -10px;">
                            <tr>
                                <td class="input-box-inline" style="width: 50%; border-left: 1px solid #000; border-bottom: 1px solid #000; height: 5mm;"></td>
                                <td class="input-box-inline" style="width: 50%; border-left: 1px solid #000; border-bottom: 1px solid #000; border-right: 1px solid #000; height: 5mm;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <!-- 11. CARA PENGANGKUTAN -->
        <td colspan="3" class="cell-tight" style="padding:0;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <!-- subkolom kiri: teks -->
                    <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top; width:70%;">
                        <div style="line-height:5mm;">
                            11. CARA PENGANGKUTAN : <?= v($data, 'cara_pengangkutan') ?>
                        </div>
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">&nbsp;</div>
                    </td>

                    <!-- subkolom kanan: KOTAK -->
                    <td style="border-left:0.5pt solid #000; padding:0; width:26%; vertical-align:bottom;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; padding-left:2mm;">
                            <tr>
                                <td style="height:5mm; border-top:0.5pt solid #000; border-bottom:0.5pt solid #000; border-right:0.5pt solid #000; padding-left:2mm;">

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>

        <!-- 22. TEMPAT PENIMBUNAN -->
        <td colspan="4" class="cell-tight" style="padding:0;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <!-- subkolom kiri: teks -->
                    <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top; width:70%;">
                        <div style="line-height:5mm;">
                            22. TEMPAT PENIMBUNAN : <?= v($data, 'tempat_penimbunan') ?>
                        </div>
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">&nbsp;</div>
                    </td>

                    <!-- subkolom kanan: KOTAK -->
                    <td style="border-left:0.5pt solid #000; padding:0; width:25%; vertical-align:bottom;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>

                                <td style="height:5mm; border-top:0.5pt solid #000; border-bottom:0.5pt solid #000; border-right:0.5pt solid #000;">

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <!-- KIRI 50% (colspan=3) : DIPECAH jadi 2 subkolom: teks + kotak -->
        <td colspan="3" class="cell-tight" style="height:5mm; padding:0;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <!-- subkolom kiri: teks 12 -->
                    <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top; width:70%; padding-right:0.2mm;">
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">
                            12. Nama Sarana Pengangkut &amp; No. Voy/Flight dan Bendera
                        </div>
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">/</div>
                    </td>

                    <!-- subkolom kanan: KOTAK (3 kotak vertikal seperti contoh kanan 13-15) -->
                    <td style="border-left:0.5pt solid #000; padding:0; padding-bottom:0; width:16%; vertical-align:bottom; border-bottom:0;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; margin-bottom:-0.9pt; padding-bottom:1mm;">
                            <tr>
                                <td style="height:4mm; line-height:5mm; text-align:center; border-top:0.5pt solid #000; border-bottom:0.5pt solid #000; padding-bottom:1mm;">
                                    <?= v($data, 'kotak_12_3', '') ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>

        <!-- 23. Valuta -->
        <td colspan="2" class="cell-tight" style="padding:0; vertical-align:top;">
            <table style="width: 100%; min-height:15mm; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top; width:70%;">
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">
                            23. Valuta
                            <span style="display:inline-block; width:4mm; margin-left:2mm; text-align:center; vertical-align:middle;">:</span>
                            <?= v($data, 'valuta') ?>
                        </div>
                        <div style="height:5mm; line-height:5mm; white-space:nowrap;">&nbsp;</div>
                    </td>

                    <!-- subkolom kanan: KOTAK -->
                    <td style="border-left:0.5pt solid #000; padding:0; width:46%; vertical-align:bottom;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; padding-left:2mm;">
                            <tr>
                                <td style="height:4mm; border-top:0.5pt solid #000; border-bottom:0.5pt solid #000; border-right:0.5pt solid #000; padding-left:2mm;">

                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>

        <!-- KANAN 25% (24) : normal, tanpa kotak -->
        <td colspan="2" class="cell-tight" style="padding:0.8mm 1.2mm; vertical-align:top;">
            <div style="white-space:nowrap;">
                24. NDPBM
                <span style="display:inline-block; width:4mm; margin-left:2mm; text-align:center;">:</span>
                <span class="rightval"><?= v($data, 'ndpbm', '0.00') ?></span>
            </div>
        </td>
    </tr>

    <tr>
        <td colspan="3" class="cell-tight" style="padding:0; vertical-align:top;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <!-- subkolom kiri: teks 13-15 -->
                    <!-- subkolom kiri: teks 13-15 -->
                    <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; line-height:1;">
                            <tr>
                                <td style="border:none; padding:0; height:4mm; line-height:4mm; white-space:nowrap; width:auto;">13. Pelabuhan Muat</td>
                                <td style="border:none; padding:0; width:2mm; height:4mm; line-height:4mm;">:</td>
                                <td style="border:none; padding:0; height:4mm;"></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0; height:4mm; line-height:4mm; white-space:nowrap; width:auto;">14. Pelabuhan Transit</td>
                                <td style="border:none; padding:0; width:2mm; height:4mm; line-height:4mm;">:</td>
                                <td style="border:none; padding:0; height:4mm;"></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0; height:4mm; line-height:4mm; white-space:nowrap; width:auto;">15. Pelabuhan</td>
                                <td style="border:none; padding:0; width:2mm; height:4mm; line-height:4mm;">:</td>
                                <td style="border:none; padding:0; height:4mm;"></td>
                            </tr>
                        </table>
                    </td>

                    <!-- subkolom kanan: 3 kotak -->
                    <td style="border:none; padding:0; width:18mm; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <td style="height:5mm; padding:0; border:0.5pt solid #000;"></td>
                            </tr>
                            <tr>
                                <td style="height:5mm; padding:0; border:0.5pt solid #000; border-top:0;"></td>
                            </tr>
                            <tr>
                                <td style="height:5mm; padding:0; border:0.5pt solid #000; border-top:0;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>

        <!-- kanan subkolom kiri 25% -->
        <td colspan="2" class="cell-tight" style="height:6mm;">
            <div class="stack">
                <div>25. FOB: <span class="rightval"><?= v($data, 'fob', '0.00') ?></span></div>
                <div>26. Freight: <span class="rightval"><?= v($data, 'freight', '0.00') ?></span></div>
                <div>27. Asuransi LN/DN: <span class="rightval"><?= v($data, 'asuransi', '0.00') ?></span></div>
            </div>
        </td>

        <!-- kanan subkolom kanan 25% -->
        <td colspan="2" class="cell-tight" style="height:6mm;">
            <div>28. Nilai CIF: <span class="rightval"><?= v($data, 'nilai_cif', '0.00') ?></span></div>
            <div>Rp. <span class="rightval"><?= v($data, 'nilai_cif_rp', '0.00') ?></span></div>
        </td>
    </tr>

    <!-- KEMASAN (29-32 + F) -->
    <tr>
        <td colspan="7" style="padding:0; border:none;">
            <table class="kemasan-grid">
                <colgroup>
                    <col>
                    <col style="width:38mm;">
                </colgroup>

                <tr>
                    <!-- KIRI (rowspan 2): 29 & 30 -->
                    <td rowspan="2">
                        <!-- Label 29 & 30 sejajar horizontal -->
                        <table style="width: 100%; border-collapse: collapse; margin-bottom: 1mm;">
                            <tr>
                                <td style="border: none; padding: 0; width: 50%; vertical-align: top; font-size: 7pt;">
                                    29. Nomor Kemasan dan Tipe Peti Kemas :
                                </td>
                                <td style="border: none; padding: 0; width: 50%; vertical-align: top; font-size: 7pt;">
                                    30. Jumlah dan Jenis Kemasan
                                </td>


                            </tr>
                        </table>

                        <!-- Value 29 & 30 sejajar horizontal -->
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0; width: 50%; vertical-align: top; font-size: 7pt;">
                                    <?= v($data, 'nomor_kemasan') ?>
                                </td>
                                <td style="border: none; padding: 0; width: 50%; vertical-align: top; font-size: 7pt;">
                                    <?= v($data, 'jumlah_jenis_kemasan') ?>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- KANAN ATAS: F -->
                    <td class="kemasan-col-right force-wrap" style="font-size:7pt; line-height:1.05;">
                        <span><?= v($data, 'barang_kena_pajak') ?></span>
                        <span class="force-wrap">F. Barang Kena Pajak/Jasa Kena Pajak</span>
                    </td>
                </tr>

                <tr>
                    <!-- KANAN BAWAH: 31 & 32 -->
                    <td class="kemasan-col-right force-wrap" style="font-size:7pt; line-height:1.05;">
                        <div class="k-row">
                            <span>31. Berat Kotor (Kg) :</span>
                            <span class="k-right-num"><?= v($data, 'berat_kotor', '0.00') ?></span>
                            <div style="clear:both;"></div>
                        </div>

                        <div class="k-row" style="margin-top:0.6mm;">
                            <span>32. Berat Bersih (Kg) :</span>
                            <span class="k-right-num"><?= v($data, 'berat_bersih', '0.00') ?></span>
                            <div style="clear:both;"></div>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- HEADER BARANG 33-39 (7 kolom) -->
    <tr class="barang-head">
        <td style="width:3%;">33.<br>No.</td>
        <td style="width:25%;">34. - Pos Tarif/HS<br>- Kode barang<br>- Uraian barang secara lengkap, merk, tipe, ukuran, spesifikasi lain<br>- Jumlah dan Jenis Kemasan<br>- Fasilitas Impor<br>- Surat Keputusan/Dokumen Lainnya</td>
        <td style="width:8%;">35. Kategori<br>Barang</td>
        <td style="width:8%;">36. Negara<br>Asal</td>
        <td style="width:15%;">37. - Tarif dan Fasilitas<br>- BM -BMT -Cukai<br>- PPN - PPnBM -PPh</td>
        <td style="width:15%;">38. - Jumlah<br>- Jenis Satuan<br>- Berat Bersih (kg)</td>
        <td style="width:12%;">39. Jumlah Nilai CIF</td>
    </tr>

    <?php
    $barangList = $data['barang_list'] ?? [];
    if (!is_array($barangList)) {
        $barangList = [];
    }
    ?>

    <?php foreach ($barangList as $barang): ?>
        <tr class="barang-body">
            <td class="text-center"><?= v($barang, 'no') ?></td>

            <td class="small-text">
                <div>Pos Tarif/HS: <?= v($barang, 'pos_tarif') ?></div>
                <div>Kode Brg: <?= v($barang, 'kode_barang') ?></div>
                <div><?= v($barang, 'uraian') ?>, Merk: <?= v($barang, 'merk') ?>, Tipe: <?= v($barang, 'tipe') ?>, Ukuran: <?= v($barang, 'ukuran') ?>, Lain-lain: <?= v($barang, 'lain_lain') ?></div>
                <div>Kemasan: <?= v($barang, 'kemasan') ?>, Fasilitas: <?= v($barang, 'fasilitas') ?></div>
                <div class="label-bold" style="margin-top:1mm;">Dokumen</div>
                <div><?= v($barang, 'dokumen') ?></div>
            </td>

            <td class="text-center small-text"><?= v($barang, 'kategori') ?></td>
            <td class="text-center small-text"><?= v($barang, 'negara_asal') ?></td>

            <td class="small-text">
                <div>- <?= v($barang, 'bm') ?></div>
                <div>-</div>
                <div>- <?= v($barang, 'ppn') ?></div>
            </td>

            <td class="small-text">
                <div><?= v($barang, 'jumlah_satuan') ?></div>
                <div><?= v($barang, 'berat_bersih_kg') ?></div>
            </td>

            <td class="text-right small-text">
                <div class="label-bold">CIF (<?= v($data, 'valuta') ?>):</div>
                <div><?= v($barang, 'nilai_cif') ?></div>
            </td>
        </tr>
    <?php endforeach; ?>

    <!-- TOTAL PUNGUTAN (4 kolom sama besar) -->
    <tr>
        <td colspan="7" style="padding: 0; border: none;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; width: 25%; text-align: center;">
                        Jenis Pungutan
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; width: 25%; text-align: center; padding-right:0mm;">
                        Ditangguhkan (Rp)
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; width: 25%; text-align: center;">
                        Dibebaskan (Rp)
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; width: 25%; text-align: center;">
                        Tidak Dipungut (Rp)
                    </td>
                </tr>
                <tr>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; text-align: right;">
                        40 TOTAL
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; text-align: right;">
                        <?= v($data, 'total_ditangguhkan', '0.00') ?>
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; text-align: right;">
                        <?= v($data, 'total_dibebaskan', '0.00') ?>
                    </td>
                    <td style="border: 0.5pt solid #000; padding: 2mm 3mm; text-align: right;">
                        <?= v($data, 'total_tidak_dipungut', '0.00') ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- PENGESAHAN -->
    <tr>
        <td colspan="3">
            <div class="label-bold">C. PENGESAHAN PENGUSAHA TPB</div>
            <div style="margin-top: 2mm;">
                Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan pabean
            </div>
            <div style="margin-top: 3mm;">Tempat, Tanggal : <?= v($data, 'tempat') ?>, <?= v($data, 'tanggal_pengesahan') ?></div>
            <div>Nama Lengkap : <?= v($data, 'nama_lengkap') ?></div>
            <div>Jabatan : <?= v($data, 'jabatan') ?></div>
            <div style="margin-top: 2mm;">Tanda Tangan dan Stempel Perusahaan :</div>
            <div style="height: 15mm;"></div>
        </td>

        <td colspan="4">
            <div class="label-bold">E. UNTUK PEJABAT BEA DAN CUKAI</div>
            <div style="height: 40mm;"></div>
        </td>
    </tr>
</table>

<div class="footer-page">
    Rangkap ke -1 / 2 / 3 : Pengusaha TPB / KPPBC Pengawas / Penerima Barang
    <span style="float:right;">Halaman ke-1 dari 2</span>
</div>

<div class="print-info">
    Printed from esikatERP | <?= date('d-M-Y') ?> | <?= date('H:i') ?>
</div>