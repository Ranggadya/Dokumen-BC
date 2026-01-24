<?php

/** @var array $data */
?>
<style>
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

    .p08 {
        padding: 0.8mm;
    }

    .p06 {
        padding: 0.6mm;
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

    .mini {
        font-size: 7.4pt;
    }

    .tiny {
        font-size: 7.2pt;
    }

    .titleWrap {
        margin-bottom: 1.5mm;
        position: relative;
    }

    .titleBig {
        font-size: 10pt;
        font-weight: 700;
        letter-spacing: 0.2px;
    }

    .formCode {
        position: absolute;
        right: 0;
        top: 0;
        font-size: 9pt;
        font-weight: 700;
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

<!-- Judul tanpa border -->
<div class="titleWrap center">
    <div class="titleBig">LEMBAR LANJUTAN DOKUMEN PELENGKAP PABEAN</div>
    <div class="titleBig">PEMBERITAHUAN IMPOR BARANG DARI TEMPAT PENIMBUNAN BERIKAT
    </div>

</div>

<table class="bc27-mini">
    <tr>
        <td>BC 2.5</td>
    </tr>
</table>

<!-- Section 1: Kantor Pabean dengan border lengkap (":" sejajar & ada jarak) -->
<table style="margin-bottom: 0;">
    <tr>
        <td class="b p08 tiny">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:30mm; padding-left:1mm;">Kantor Pabean</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'kantor_pabean', '-') ?></td>
                </tr>
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:30mm;  padding-left:1mm;">Nomor Pengajuan</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pengajuan', '-') ?></td>
                </tr>
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:20mm;  padding-left:1mm;">Nomor Pendaftaran</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0; width:55mm;"><?= v($data, 'nomor_pendaftaran2', '-') ?></td>
                    <td style="border:none; padding:0.5mm 0 0.5mm 3mm; white-space:nowrap; text-align:left;">Tanggal</td>
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
                    <td class="p06 center mini" style="width:10mm; padding: 1.5mm 3.0mm; border-right:0.5pt solid #000;">No</td>

                    <!-- Jenis Dokumen dibuat paling lebar + padding lebih besar -->
                    <td class="mini"
                        style="
                            width:45mm;
                            padding: 1.5mm 3.0mm; 
                            text-align:center;
                            white-space:nowrap;
                            font-size:8pt;
                            border-right:0.5pt solid #000;
                        ">
                        Jenis Dokumen
                    </td>

                    <td class="p06 center mini" style="width:45mm; font-size:8pt; padding: 1.5mm 3.0mm; border-right:0.5pt solid #000;">Nomor Dokumen</td>
                    <td class="p06 center mini" style="width:45mm; font-size:8pt; padding: 1.5mm 3.0mm; border-right:0.5pt solid #000;">Tanggal Dokumen</td>
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
            <table>
                <tr>
                    <td style="border:none; padding:0.5mm 0; width:50mm; padding-left:3mm;">Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan pabean ini.</td>
                </tr>
            </table>


            <table style="width:100%; border-collapse:collapse; margin-top:0;" class="tiny">

                <tr>
                    <td style="border:none; padding:0.5mm 0; width:50mm; padding-left:3mm;">Tempat, Tanggal</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0;">
                        <?= v($data, 'c_tempat', '') ?><?= v($data, 'c_tempat', '') ? ', ' : '' ?><?= v($data, 'c_tanggal', '') ?>
                    </td>
                </tr>

                <tr>
                    <td style="border:none; padding:0.5mm 0; width:50mm; padding-left:3mm;">Nama Lengkap</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'c_nama_lengkap', '') ?></td>
                </tr>

                <tr>
                    <td style="border:none; padding:0.5mm 0; width:50mm; padding-left:3mm;">Jabatan</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'c_jabatan', '') ?></td>
                </tr>

                <tr>
                    <td style="border:none; padding:0.5mm 0; width:50mm; padding-left:3mm;">Tanda Tangan dan Stempel Perusahaan</td>
                    <td style="border:none; padding:0.5mm 0; width:3mm; text-align:center;">:</td>
                    <td style="border:none; padding:0.5mm 0; height:10mm;">&nbsp;</td>
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