<?php

/** @var array $data */
?>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 7.6pt;
        line-height: 1.02;
        color: #000;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    td {
        vertical-align: top;
        padding: 1.1mm 1.2mm;
    }

    /* Border system */
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

    .p0,
    .p0 td {
        padding: 0;
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

    /* Title */
    .titleBC {
        font-size: 12.5pt;
        font-weight: bold;
        padding: 2.0mm;
    }

    .title2 {
        font-size: 11pt;
        font-weight: bold;
        line-height: 1.1;
    }

    .docTable {
        width: 100%;
    }

    .docTable td {
        padding: 2mm 1.2mm;
    }

    .docTable .mid,
    .docTable .rightc {
        border-left: 0.5pt solid #000;
    }

    .eOuter td {
        padding: 0;
    }

    .eTitleRow td {
        padding: 1.2mm 1.2mm;
        border-bottom: 0.5pt solid #000;
    }

    .eBodyRow td {
        height: 40mm;
    }

    .eText {
        padding: 1.8mm 1.8mm 0 1.8mm;
        text-align: left;
        /* text nempel kiri di kolom kanan */
    }

    .eDate {
        margin-top: 12mm;
        text-align: left;
        /* tanggal di tengah bawah text */
    }

    .footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 6mm;
        font-size: 7.0pt;
    }

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

    table.adgHeader .section-d-cell {
        padding: 1.2mm 2.5mm;
    }

    table.adgHeader .section-g-cell {
        padding: 1.2mm 2.5mm;
        border-left: 0.5pt solid #000 !important;
        border-top: 0.5pt solid #000 !important;
    }

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

<table class="b1">
    <!-- TITLE -->
    <tr>
        <td class="b1 center titleBC" style="width:18%;">BC 2.7</td>
        <td class="b1 center" style="width:82%; padding: 2.0mm 1.0mm;">
            <div class="title2">LEMBAR LANJUTAN</div>
            <div class="title2">DOKUMEN PELENGKAP PABEAN</div>
        </td>
    </tr>

    <!-- HEADER LABEL -->
    <tr>
        <td class="b1" colspan="2" style="padding: 1.0mm 1.2mm;">HEADER</td>
    </tr>

    <tr>
        <td class="p0" colspan="2">
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
                        <div style="margin-bottom: 1.5mm; ">
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
        <td class="b1 bt0" colspan="2" style="padding:0;">
            <table class="docTable" style="width:100%; table-layout:fixed;">
                <tr>
                    <td class="center" style="width:4%;">No</td>
                    <td class="center mid" style="width:41%; padding:1.2mm;">JENIS DOKUMEN</td>
                    <td class="center mid" style="width:37%;">NOMOR</td>
                    <td class="center rightc" style="width:18%;">TANGGAL</td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="b1 bt0" colspan="2" style="padding:0;">
            <table class="eOuter" style="width:100%; table-layout:fixed; border-collapse:collapse;">
                <!-- ROW 1: Judul E (baris wajib ada border bawah) -->
                <tr class="eTitleRow">
                    <!-- kiri kosong + tetap ada border bawah -->
                    <td style="width:52%;"></td>

                    <!-- kanan: judul E (tanpa border kiri) -->
                    <td style="width:48%; text-align:left;">
                        E. TANDA TANGAN PENGUSAHA TPB
                    </td>
                </tr>

                <!-- ROW 2: area ttd -->
                <tr class="eBodyRow">
                    <td style="width:52%;"></td>
                    <td style="width:48%; vertical-align:top;">
                        <div class="eText">
                            Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal<br>
                            yang diberitahukan dalam pemberitahuan pabean ini.
                            <div class="eDate">, <?= v($data, 'tanggal_cetak', v($data, 'tanggal', '')) ?></div>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="footer">
    Printed from <?= v($data, 'printed_from', v($data, 'printed_app', 'esikatERP')) ?>
    | <?= v($data, 'printed_date', '') ?> <?= v($data, 'printed_time', '') ?>
    <span style="float:right;">Halaman ke-3 dari 3</span>
</div>