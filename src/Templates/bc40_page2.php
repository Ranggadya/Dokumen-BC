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
    }

    table {
        border-collapse: collapse;
        width: 100%;
        table-layout: fixed;
    }

    td {
        vertical-align: top;
        padding: 1.1mm 1.2mm;
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

    .titleBC {
        font-size: 12.5pt;
        font-weight: bold;
        padding: 2.0mm;
    }

    .title2 {
        font-size: 11pt;
    }

    .small {
        font-size: 7.0pt;
    }

    .docTable td {
        padding: 0.8mm 0;
    }

    .docTable .mid,
    .docTable .rightc {
        border-left: 0.5pt solid #000;
    }

    /* Area E */
    .eWrap td {
        padding: 0;
    }

    .eTitle {
        font-weight: bold;
        text-align: center;
        padding-top: 2mm;
        padding-bottom: 2mm;
    }

    .eText {
        text-align: center;
        padding: 1mm 0 0 0;
    }

    .eDate {
        text-align: center;
        padding-top: 10mm;
    }

    .eSpace {
        height: 24mm;
    }

    .line {
        border-top: 0.5pt solid #000;
        height: 1mm;
    }

    .footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 6mm;
        font-size: 7.0pt;
    }
</style>

<table class="b1">
    <!-- TITLE -->
    <tr>
        <td class="b1 center titleBC" style="width:18%;">BC 4.1</td>
        <td class="b1 center" style="width:82%; padding: 2.0mm 1.0mm;">
            <div class="title2">LEMBAR LANJUTAN</div>
            <div class="title2">DOKUMEN PELENGKAP PABEAN</div>
        </td>
    </tr>

    <!-- HEADER LABEL -->
    <tr>
        <td class="b1" colspan="2" style="padding: 1.0mm 1.2mm;">HEADER</td>
    </tr>
    <!-- HEADER CONTENT -->
    <tr>
        <td colspan="2" style="padding:0; border: 0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <!-- BARIS 1: Nomor Pengajuan | Info Halaman -->
                <tr>
                    <!-- Kolom Kiri Baris 1: Nomor Pengajuan -->
                    <td style="width:49%; border:none; vertical-align:top; padding-bottom:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; width:45mm; padding-bottom:0;">Nomor Pengajuan</td>
                                <td style="border:none; width:3mm; padding:0.5mm 0;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- Kolom Kanan Baris 1: Info Halaman -->
                    <td style="width:51%; border:none; padding:1.8mm; text-align:right; vertical-align:top;">
                        Halaman ke-2 dari 2
                    </td>
                </tr>

                <!-- BARIS 2: A, B, C | Section F -->
                <tr>
                    <!-- Kolom Kiri Baris 2: A, B, C -->
                    <td style="width:49%; border:none; border-right:0.6pt solid #000; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; width:45mm;">A. KANTOR PABEAN</td>
                                <td style="border:none; width:3mm; padding:0.5mm 0;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'kantor_pabean', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none;">B. JENIS TPB</td>
                                <td style="border:none; padding:0.5mm 0;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_tpb', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none;">C. JENIS TRANSAKSI</td>
                                <td style="border:none; padding:0.5mm 0;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_transaksi', '-') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- Kolom Kanan Baris 2: Section F (dengan border kiri dan atas) -->
                    <td style="width:51%; border:none; border-top:0.6pt solid #000; padding:0mm; vertical-align:top;">
                        <div style="border-left:0.6pt solid #000; padding:1.5mm; height:100%;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td>F. KOLOM KHUSUS BEA CUKAI</td>
                                </tr>
                                <tr>
                                    <td style="border:none; width:39mm;">Nomor Pendaftaran</td>
                                    <td style="border:none; width:3mm; padding:0.5mm 0;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pendaftaran', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none;">Tanggal</td>
                                    <td style="border:none; padding:0.5mm 0;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'tanggal_pendaftaran', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="b1 bt0" colspan="2" style="padding:0;">
            <table class="docTable" style="width:100%; table-layout:fixed;">
                <tr style="padding-top:5mm;">
                    <td class="center" style="width:8%; padding-top:2mm; padding-bottom:2mm ">N0</td>
                    <td class="center mid" style="width:40%; padding-right:0.5mm; padding-top:2mm; padding-bottom:2mm ">JENIS DOKUMEN</td>
                    <td class="center mid" style="width:42%;padding-top:2mm; padding-bottom:2mm">NOMOR</td>
                    <td class="center rightc" style="width:17%;padding-top:2mm; padding-bottom:2mm">TANGGAL</td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <!-- Kotak luar E -->
        <td class="b1 bt0" colspan="2" style="padding:0;">
            <table style="width:100%; table-layout:fixed; border-collapse:collapse;">
                <!-- ROW 1: Judul E (baris dengan border bawah) -->
                <tr>
                    <!-- kiri kosong -->
                    <td style="width:52%; padding: 1.2mm 1.2mm; border-bottom:0.5pt solid #000;"></td>

                    <!-- judul di kolom kanan -->
                    <td style="width:48%; padding: 1.2mm 1.2mm; border-bottom:0.5pt solid #000; text-align:left;">
                        E. TANDA TANGAN PENGUSAHA TPB
                    </td>
                </tr>

                <!-- ROW 2: Area kosong tanda tangan -->
                <tr>
                    <!-- kolom kiri kosong -->
                    <td style="width:52%; padding:0; height:40mm;"></td>

                    <!-- kolom kanan -->
                    <td style="width:48%; padding: 1.8mm 1.8mm; vertical-align:top; height:40mm;">
                        <!-- teks pernyataan: rata kiri -->
                        <div style="text-align:left;">
                            Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal<br>
                            yang diberitahukan dalam pemberitahuan pabean ini.
                        </div>

                        <!-- tanggal: di tengah bawah teks -->
                        <div style="margin-top: 12mm; text-align:center;">
                            , <?= v($data, 'tanggal', '') ?>
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>


</table>

<div class="footer">
    Printed from <?= v($data, 'printed_app', 'esikatERP') ?> | <?= v($data, 'printed_datetime', '') ?>
    <span style="float:right;">Halaman ke-2 dari 2</span>
</div>