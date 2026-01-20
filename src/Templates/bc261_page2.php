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
</style>

<div class="titleWrap center">
    <div class="titleBig">LEMBAR LANJUTAN DOKUMEN PELENGKAP PABEAN</div>
    <div class="titleBig">PEMBERITAHUAN PENGELUARAN BARANG DARI</div>
    <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>
    <div class="formCode">BC 2.6.1</div>
</div>

<!-- Section Kantor Pabean, Nomor Pengajuan, Nomor Pendaftaran -->
<table style="margin-bottom: 0;">
    <tr>
        <td class="b p08">
            <table class="tiny">
                <colgroup>
                    <col style="width: 30mm;">
                    <col style="width: 2.2mm;">
                    <col style="width: auto;">
                </colgroup>
                <tr>
                    <td>Kantor Pabean</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'kantor_pabean', '-') ?></td>
                </tr>
                <tr>
                    <td>Nomor Pengajuan</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'nomor_pengajuan', '-') ?></td>
                </tr>
                <tr>
                    <td>Nomor Pendaftaran</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'nomor_pendaftaran2', '-') ?></td>
                </tr>
            </table>
        </td>
    </tr>
</table>
<tr>
    <td class="b1 bt0" colspan="2" style="padding:0;">
        <table class="docTable" style="width:100%; table-layout:fixed;">
            <tr style="padding-top:5mm;">
                <td class="center" style="width:8%; padding-top:2mm; padding-bottom:2mm ">No</td>
                <td class="center mid" style="width:49%; padding-right:0.2mm; padding-top:2mm; padding-bottom:2mm ">Jenis Dokumen</td>
                <td class="center mid" style="width:27%;padding-top:2mm; padding-bottom:2mm">Nomor Dokumen</td>
                <td class="center rightc" style="width:17%;padding-top:2mm; padding-bottom:2mm">Tanggal Dokumen</td>
            </tr>
        </table>
    </td>
</tr>
<!-- C. Pengesahan Pengusaha TPB -->
<table style="margin-bottom: 0;">
    <tr>
        <td class="b bt0 p08">
            <div class="bold">C. Pengesahan Pengusaha TPB</div>
            <div class="tiny" style="margin-top: 1mm;">
                Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan pabean ini.
            </div>

            <table class="tiny" style="margin-top: 3mm;">
                <colgroup>
                    <col style="width: 50mm;">
                    <col style="width: 2.2mm;">
                    <col style="width: auto;">
                </colgroup>
                <tr>
                    <td>Tempat, Tanggal</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'c_tempat', '') ?><?= v($data, 'c_tempat', '') ? ', ' : '' ?><?= v($data, 'c_tanggal', '') ?></td>
                </tr>
                <tr>
                    <td>Nama Lengkap</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'c_nama_lengkap', '') ?></td>
                </tr>
                <tr>
                    <td>Jabatan</td>
                    <td class="center">:</td>
                    <td><?= v($data, 'c_jabatan', '') ?></td>
                </tr>
                <tr>
                    <td>Tanda Tangan dan Stempel Perusahaan</td>
                    <td class="center">:</td>
                    <td style="height: 16mm;"></td>
                </tr>
            </table>
        </td>
    </tr>
</table>

<div class="footerLine">
    Rangkap ke -1 / 2 / 3: Pengusaha TPB / KPPBC Pengawas / Penerima Barang
    <span style="float:right;"><?= v($data, 'printed_from', '') ?></span>
</div>