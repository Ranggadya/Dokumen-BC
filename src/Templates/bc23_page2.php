<?php
?>
<style>
    body {
        font-family: Arial, sans-serif;
        font-size: 9pt;
        margin: 0;
        padding: 0;
    }

    .header-title {
        text-align: center;

        font-size: 10pt;
        line-height: 1.3;
        margin-bottom: 5mm;
    }

    .bc-number {
        text-align: right;
        font-weight: bold;
        font-size: 9pt;
        margin-bottom: 3mm;
    }

    /* Table border utama */
    table.main-table {
        width: 100%;
        border-collapse: collapse;
        border: 1pt solid #000;
    }

    table.main-table td {
        border: 1pt solid #000;
        padding: 2mm 3mm;
        vertical-align: top;
    }

    /* Section Nomor Pengajuan - padding lebih besar */
    .section-nomor {
        padding: 5mm 3mm;
    }

    /* Table untuk alignment nomor pengajuan */
    table.nomor-table {
        width: 100%;
        border-collapse: collapse;
    }

    table.nomor-table td {
        border: none !important;
        padding: 1mm 0;
        vertical-align: top;
    }

    table.nomor-table .field-label-nomor {
        width: 20%;
        padding-right: 5mm;
    }

    table.nomor-table .field-sep-nomor {
        width: 50%;
        text-align: left;
        padding-right: 0mm;
    }

    table.nomor-table .field-value-nomor {
        width: 30%;
    }

    /* Header dokumen - lebih ramping */
    .header-dokumen {
        padding: 1mm 2mm !important;
    }

    /* Section C - area lebih besar */
    .section-c {
        padding: 5mm 4mm;
        min-height: 100mm;
    }

    .section-c-title {
        margin-bottom: 3mm;
    }

    .section-c-text {
        margin: 3mm 0;
        line-height: 1.5;
    }

    /* Table untuk alignment field C */
    table.field-c-table {
        width: 100%;
        border-collapse: collapse;
        margin-top: 3mm;
    }

    table.field-c-table td {
        border: none !important;
        padding: 1.5mm 0;
        vertical-align: top;
    }

    table.field-c-table .field-label-c {
        width: auto;
        padding-right: 5mm;
    }

    table.field-c-table .indent-label-c {
        padding-left: 5mm;
    }

    table.field-c-table .field-sep-c {
        width: auto;
        text-align: left;
        padding-right: 2mm;
        white-space: nowrap;
    }

    table.field-c-table .field-value-c {
        width: auto;
    }

    /* Footer */
    .footer-text {
        font-size: 8pt;
        margin-top: 2mm;
    }

    .text-center {
        text-align: center;
    }

    .font-bold {
        font-weight: bold;
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
</style>
<div class="header-title">
    LEMBAR LAMPIRAN<br>
    PEMBERITAHUAN IMPOR BARANG UNTUK DITIMBUN<br>
    DI TEMPAT PENIMBUNAN BERIKAT<br>
    UNTUK DOKUMEN DAN SKEP/PERSETUJUAN
</div>
<table class="bc27-mini">
    <tr>
        <td>BC 2.7</td>
    </tr>
</table>
<table class="main-table">
    <!-- Section: Nomor Pengajuan & Nomor Pendaftaran -->
    <tr>
        <td colspan="3" class="section-nomor">
            <table class="nomor-table">
                <tr>
                    <td class="field-label-nomor">Nomor Pengajuan</td>
                    <td class="field-sep-nomor">:</td>
                    <td class="field-value-nomor"><?= v($data, 'nomor_pengajuan') ?></td>
                </tr>
                <tr>
                    <td class="field-label-nomor">Nomor Pendaftaran</td>
                    <td class="field-sep-nomor">:</td>
                    <td class="field-value-nomor"><?= v($data, 'nomor_pendaftaran') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Header: Jenis Dokumen | Nomor Dokumen | Tanggal Dokumen - lebih ramping -->
    <tr>
        <td class="text-center header-dokumen" style="width: 33%;">Jenis Dokumen</td>
        <td class="text-center header-dokumen" style="width: 34%;">Nomor Dokumen</td>
        <td class="text-center header-dokumen" style="width: 33%;">Tanggal Dokumen</td>
    </tr>

    <!-- Section C: PENGESAHAN PENGUSAHA TPB - area lebih besar -->
    <tr>
        <td colspan="3" class="section-c">
            <div class="section-c-title">C. PENGESAHAN PENGUSAHA TPB</div>

            <div class="section-c-text">
                Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan pabean ini.
            </div>

            <table class="field-c-table">
                <tr>
                    <td class="field-label-c indent-label-c">Tempat, Tanggal <span>:</span></td>
                    <td class="field-value-c">, <?= v($data, 'tanggal_pengesahan', '16-01-2026') ?></td>
                </tr>
                <tr>
                    <td class="field-label-c indent-label-c">Nama Lengkap <span>:</span></td>
                    <td class="field-value-c"><?= v($data, 'nama_lengkap') ?></td>
                </tr>
                <tr>
                    <td class="field-label-c indent-label-c">Jabatan <span>:</span></td>

                    <td class="field-value-c"><?= v($data, 'jabatan') ?></td>
                </tr>
            </table>

            <div style="margin-top: 5mm;">
                <span style="padding-left: 5mm;">Tanda Tangan dan Stempel Perusahaan :</span>
            </div>

            <div style="height: 35mm;"></div>
        </td>
    </tr>
</table>

<div class="footer-text">
    Rangkap ke -1 / 2 / 3 : Pengusaha TPB / KPPBC Pengawas / Penerima Barang
</div>