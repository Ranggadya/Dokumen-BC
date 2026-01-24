<?php
// Functions loaded from src/Support/helpers.php
?>

<style>
    @page {
        margin-top: 4.2mm;
        margin-right: 5mm;
        margin-bottom: 27.8mm;
        margin-left: 5mm;
    }

    :root {
        --hTop: 24mm;
        --hBottom: 18mm;
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
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
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
        padding: 0.45mm;
    }

    .p2 {
        padding: 0.85mm;
    }

    .p3 {
        padding: 1.2mm;
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

    .title {
        font-size: 10pt;
        line-height: 1.05;
    }

    .small {
        font-size: 6.8pt;
    }

    .wrap {
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .nowrap {
        white-space: nowrap;
    }

    table.topbar {
        margin: 0;
    }

    table.topbar td {
        padding: 0.4mm 0.6mm;
        line-height: 1.0;
        vertical-align: middle;
    }

    .topbar-left {
        padding: 0 !important;
        line-height: 1.0 !important;
    }

    .topbar-right {
        padding: 0.35mm 0.6mm !important;
        line-height: 1.0 !important;
    }

    .f10 {
        font-size: 10pt;
    }

    .bc {
        font-size: 10pt;
        line-height: 1.0;
    }

    .sizebc {
        font-weight: bold;
    }

    .kv td {
        padding: 0.25mm 0.55mm;
        vertical-align: top;
    }

    .kv-tight td {
        padding: 0.18mm 0.55mm;
        vertical-align: top;
    }

    .kv-abc td {
        padding: 0.20mm 0.60mm;
    }

    .sec-title {
        display: block;
        padding-top: 0.6mm;
        padding-bottom: 0.4mm;
    }

    .sec-cell {
        padding: 0.7mm 0.9mm;
    }

    .bc-gap {
        margin-top: 0.6mm;
    }

    .sec-kv {
        margin-top: 0.2mm;
    }

    .e-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .e-title {
        border: 0.5pt solid #000;
        border-top: 0;
        padding: 0.6mm;
    }

    .e-sub-left {
        border: 0.5pt solid #000;
        border-top: 0;
        border-right: 0.5pt solid #000;
        padding: 0.6mm;
        width: 50%;
    }

    .e-sub-right {
        border: 0.5pt solid #000;
        border-top: 0;
        border-left: 0;
        padding: 0.6mm;
        width: 50%;
    }

    .e-body {
        border: 0.5pt solid #000;
        border-top: 0;
        padding: 0.6mm;
    }

    .e-body-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: 0;
    }

    .e-body-grid td {
        border: 0;
        vertical-align: top;
        padding: 0;
    }

    .kv-row {
        padding: 0.35mm 0;
        line-height: 1.05;
    }

    .kv-no {
        display: inline-block;
        width: 6mm;
        white-space: nowrap;
    }

    .kv-lbl {
        display: inline-block;
        width: 34mm;
        vertical-align: top;
    }

    .kv-sep {
        display: inline-block;
        width: 3mm;
        text-align: center;
    }

    .kv-val {
        display: inline-block;
        width: 60mm;
        vertical-align: top;
    }

    .leftbox {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .leftbox td {
        border: 0.5pt solid #000;
        padding: 0.45mm 0.55mm;
        vertical-align: top;
    }

    .split-noline {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .split-noline td {
        border: 0;
        padding: 0.35mm 0.55mm;
        vertical-align: top;
    }

    .peti-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .peti-grid td {
        border: 0;
        padding: 0.45mm 0.55mm;
        vertical-align: top;
    }

    .peti-grid .vline {
        border-left: 0.5pt solid #000;
    }

    .lb-top {
        height: var(--hTop);
    }

    .lb-bottom {
        height: var(--hBottom);
    }

    .lb-top td,
    .lb-bottom td {
        vertical-align: top;
    }

    table.bigbox2 {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.bigbox2>tbody>tr>td {
        border: 0.5pt solid #000;
        padding: 0;
        vertical-align: top;
    }

    .segel-top {
        height: var(--hTop);
    }

    .segel-bottom {
        height: var(--hBottom);
    }

    .segel-grid {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .segel-grid td {
        border: 0;
        padding: 0;
        vertical-align: top;
    }

    table.block2632 {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.block2632 td {
        border: 0.5pt solid #000;
        vertical-align: top;
        padding: 1.2pt;
    }

    .block2632 .hdr-center {
        text-align: center;
    }

    .block2632 .bc-asal {
        text-align: center;
    }

    .block2632 .row-head {
        height: 6mm;
        vertical-align: middle;
    }

    .block2632 .row-top {
        height: var(--hTop);
    }

    .block2632 .row-bottom {
        height: var(--hBottom);
    }

    .block2632 .blank {
        padding: 0;
    }

    .block2632 .center-content {
        text-align: center;
        vertical-align: middle;
    }

    .block2632 .inner-table {
        width: 100%;
        border-collapse: collapse;
    }

    .block2632 .inner-table td {
        vertical-align: top;
    }

    table.sigFH {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.sigFH td {
        border: 0.5pt solid #000;
        vertical-align: top;
        padding: 1.2mm;
    }

    .sigFH .fh-head {
        padding: 0.8mm 1.2mm;
    }

    .sigFH .fh-f {
        width: 55%;
        line-height: 1.05;
    }

    .sigFH .fh-h1,
    .sigFH .fh-h2 {
        width: 22.5%;
    }

    .sigFH .fh-office {
        text-align: center;
        padding: 0.8mm 1.2mm;
    }

    .sigFH .fh-sign {
        height: 20mm;
        vertical-align: bottom;
        padding: 2mm;
        position: relative;
    }

    .sigFH .fh-statement {
        margin-bottom: 8mm;

    }

    .sigFH .fh-date {
        text-align: center;
        margin-top: 3mm;
    }

    .sigFH .fh-sign-inner {
        position: absolute;
        left: 2mm;
        right: 2mm;
        bottom: 10mm;
        line-height: 1.1;
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
        font-weight: bold;
        text-align: right;
        line-height: 1;
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
</style>
<table class="bc27-mini">
    <tr>
        <td>BC 2.7</td>
    </tr>
</table>
<table class="b1 topbar" cellspacing="0" cellpadding="0">
    <tr>
        <td class="b1 center bc sizebc topbar-left" style="width:18mm;">BC 2.7</td>
        <td class="b1 center f10 topbar-right">
            PEMBERITAHUAN PENGELUARAN UNTUK DIANGKUT DARI TEMPAT PENIMBUNAN<br>
            BERIKAT KE TEMPAT PENIMBUNAN BERIKAT LAINNYA
        </td>
    </tr>
</table>

<table class="b1">

    <tr>
        <td class="b1 bt0 p1">HEADER</td>
    </tr>

    <!-- BLOK: NOMOR PENGAJUAN + A/B/C + D/G (SINGLE BORDER SYSTEM) -->
    <tr>
        <td class="p0">
            <table class="adgHeader">
                <!-- Baris 1: NOMOR PENGAJUAN | Halaman -->
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
                    <td class="right-col no-border-left no-border-bottom halaman-cell" style="text-align:right">
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
    <tr>
        <td class="b1 bt0 p0">
            <table class="e-table">
                <tr>
                    <td class="e-title" colspan="2">E. DATA PEMBERITAHUAN</td>
                </tr>

                <tr>
                    <td class="e-sub-left">TPB ASAL BARANG</td>
                    <td class="e-sub-right">TPB TUJUAN BARANG</td>
                </tr>

                <tr>
                    <td class="e-body" colspan="2">
                        <table class="e-body-grid">
                            <tr>
                                <td style="width:50%; padding-right:2mm;">
                                    <div class="kv-row"><span class="kv-no">1.</span><span class="kv-lbl">NPWP</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_npwp') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">2.</span><span class="kv-lbl">Nama</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_nama') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">3.</span><span class="kv-lbl">Alamat</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_alamat') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">4.</span><span class="kv-lbl">No Izin TPB</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_no_izin') ?></span></div>
                                </td>

                                <td style="width:50%; padding-left:2mm;">
                                    <div class="kv-row"><span class="kv-no">5.</span><span class="kv-lbl">NPWP</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_npwp') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">6.</span><span class="kv-lbl">Nama</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_nama') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">7.</span><span class="kv-lbl">Alamat</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_alamat') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">8.</span><span class="kv-lbl">No Izin TPB</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_no_izin') ?></span></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="b1 bt0 p0" colspan="2">
                        <div class="p1">PEMILIK BARANG</div>
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


    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">DOKUMEN PELENGKAP PABEAN</td>
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
                                            <td></td>
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

    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">RIWAYAT BARANG</td>
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

    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">DATA PERDAGANGAN</td>
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

    <tr>
        <td class="p0">
            <table class="block2632">
                <colgroup>
                    <!-- Panel A total 75% (26+27, 31+32) -->
                    <col style="width: 65%;"> <!-- 26+27 / 31+32 jadi satu kolom -->

                    <!-- Panel B total 25% (28,29,30) -->
                    <col style="width: 12%;"> <!-- 28 -->
                    <col style="width: 16%;"> <!-- 29 -->
                    <col style="width: 9%;"> <!-- 30 -->
                </colgroup>

                <!-- Baris 1: Judul Panel A dan Panel B -->
                <tr class="row-head" style="border-top: none;">
                    <td class="hdr">DATA PENGANGKUTAN</td>
                    <td class="hdr-center" colspan="3">SEGEL (DIISI OLEH BEA DAN CUKAI)</td>
                </tr>

                <!-- Baris 2-3: zona atas -->
                <tr class="row-top">
                    <!-- 26 & 27 sejajar horizontal dalam satu cell -->
                    <td rowspan="2">
                        <table class="inner-table">
                            <tr>
                                <td style="width: 56%; padding: 0; border: none;">
                                    <span class="nowrap">26.</span> Jenis Sarana Pengangkut Darat <span class="nowrap">:</span>
                                    <?= v($data, 'jenis_sarana') ?>
                                </td>
                                <td style="width: 44%; padding: 0; border: none;">
                                    <span class="nowrap">27.</span> No Polisi <span class="nowrap">:</span>
                                    <?= v($data, 'no_polisi') ?>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td class="bc-asal" colspan="2">BC Asal</td>

                    <td rowspan="2" class="center-content">
                        <span class="nowrap">30.</span> Catatan BC Tujuan
                        <div style="margin-top:1.2pt;">
                            <?= v($data, 'catatan_bc_tujuan') ?>
                        </div>
                    </td>
                </tr>

                <!-- Baris 3: label 28 & 29 -->
                <tr>
                    <td>
                        <span class="nowrap">28.</span> No Segel
                        <div style="margin-top:1.2pt;">
                            <?= v($data, 'no_segel') ?>
                        </div>
                    </td>
                    <td>
                        <span class="nowrap" style="padding: 1mm;">29.</span> Jenis
                        <div style="margin-top:1.2pt;">
                            <?= v($data, 'jenis_segel') ?>
                        </div>
                    </td>
                </tr>

                <!-- Baris 4-5: zona bawah -->
                <tr class="row-bottom">
                    <!-- Judul Data Peti -->
                    <td class="hdr">DATA PETI KEMAS DAN PENGEMAS</td>

                    <!-- area kosong segel -->
                    <td class="blank" rowspan="2">&nbsp;</td>
                    <td class="blank" rowspan="2">&nbsp;</td>
                    <td class="blank" rowspan="2">&nbsp;</td>
                </tr>

                <!-- Baris 5: 31 & 32 sejajar horizontal dalam satu cell -->
                <tr>
                    <td>
                        <table class="inner-table">
                            <tr>
                                <td style="width: 56%; padding: 0; border: none;">
                                    <span class="nowrap">31.</span> Merek dan No Kemasan/Peti Kemasan dan Jumlah
                                    <div style="margin-top:1.2pt;">
                                        <?= v($data, 'merek_kemasan') ?>
                                    </div>
                                </td>
                                <td style="width: 44%; padding: 0; border: none;">
                                    <span class="nowrap">32.</span> Jumlah dan Jenis Kemasan
                                    <div style="margin-top:1.2pt;">
                                        <?= v($data, 'jumlah_jenis_kemasan') ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed; border:0.5pt solid #000;">
                <tr>
                    <td class="p1" style="width:33.33%;">33. Volume (m3) : <?= v($data, 'volume') ?></td>
                    <td class="p1" style="width:33.33%;">34. Berat Kotor : <?= v($data, 'berat_kotor') ?></td>
                    <td class="p1" style="width:33.33%;">35. Berat Bersih (kg) : <?= v($data, 'berat_bersih') ?></td>
                </tr>
            </table>
        </td>
    </tr>

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

    <tr>
        <td class="b1 bt0 p0">
            <table class="sigFH">
                <colgroup>
                    <col style="width:55%;">
                    <col style="width:22.5%;">
                    <col style="width:22.5%;">
                </colgroup>

                <!-- Row 1: Header -->
                <tr>
                    <td class="fh-head">F. TANDA TANGAN PENGUSAHA TPB</td>
                    <td class="fh-head" colspan="2">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                </tr>

                <!-- Row 2: isi F (rowspan=2) + header kantor -->
                <tr>
                    <td class="fh-f" rowspan="2">
                        <div class="fh-statement">
                            Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                            diberitahukan dalam pemberitahuan pabean ini.
                        </div>

                        <div class="fh-date">
                            , <?= v($data, 'tanggal_cetak') ?>
                        </div>
                    </td>

                    <td class="fh-office fh-h1">Kantor Pabean Asal</td>
                    <td class="fh-office fh-h2">Kantor Pabean Tujuan</td>
                </tr>

                <!-- Row 3: area tanda tangan (Nama/NIM bawah) -->
                <tr>
                    <td class="fh-sign">
                        <div class="fh-sign-inner">
                            Nama :<br>
                            NIM :
                        </div>
                    </td>
                    <td class="fh-sign">
                        <div class="fh-sign-inner">
                            Nama :<br>
                            NIM :
                        </div>
                    </td>

                </tr>
            </table>
        </td>
    </tr>

</table>