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

    .p0 td,
    .p0 {
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
        font-size: 11.5pt;
        font-weight: bold;
        padding: 2mm 2mm;
    }

    .titleMain {
        font-size: 10.5pt;
        letter-spacing: 0.2px;
    }

    .secHead {
        padding: 1.0mm 1.2mm;
    }

    .label {
        width: 60%;
    }

    .sep {
        width: 0.8mm;
        text-align: center;
    }

    .val {
        width: auto;
    }

    .noPadCell {
        padding: 0;
    }

    .small {
        font-size: 7.0pt;
    }

    .field-row {
        font-size: 7.6pt;
        line-height: 1.15;
        margin-bottom: 0.8mm;
        white-space: nowrap;
        /* ':' tidak turun baris */
    }

    .field-row .label {
        display: inline-block;
        width: 35mm;
        /* kunci lebar label */
        padding-right: 2.5mm;
        /* jarak label -> ':' */
        vertical-align: top;
    }

    .field-row .colon {
        display: inline-block;
        width: 4mm;
        text-align: center;
        vertical-align: top;
    }

    .field-row .value {
        display: inline-block;
        vertical-align: top;
    }
</style>

<table class="b1">
    <!-- TOP TITLE BAR -->
    <tr>
        <td class="b1 center titleBC" style="width:18%;">BC 4.1</td>
        <td class="b1 center" style="width:82%; padding: 2.0mm 2.0mm;">
            <div class="titleMain">PEMBERITAHUAN PENGELUARAN KEMBALI BARANG ASAL TEMPAT LAIN DALAM DAERAH</div>
        </td>
    </tr>

    <!-- HEADER SECTION TITLE -->
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
                    <td style="width:49%; border:none; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; width:45mm;">Nomor Pengajuan</td>
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
                                    <td style="border:none; width:40mm;">Nomor Pendaftaran</td>
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
    <!-- D. DATA PEMBERITAHUAN -->
    <tr>
        <td class="b1" colspan="2">D. DATA PEMBERITAHUAN</td>
    </tr>
    <!-- PENGUSAHA + PENERIMA -->
    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- PENGUSAHA -->
                    <td style="width:40%; border:none; border-right:0.6pt solid #000; padding:1.5mm; vertical-align:top; padding-right:0.5mm;">
                        <div style="margin-bottom:1mm;">PENGUSAHA TPB</div>

                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">1. NPWP</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'pengusaha_npwp', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">2. Nama</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'pengusaha_nama', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">3. Alamat</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'pengusaha_alamat', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">4. No. Izin TPB</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'pengusaha_izin_tpb', '') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- PENERIMA -->
                    <td style="width:60%; border:none; padding:1.5mm; vertical-align:top;">
                        <div style="margin-bottom:1mm;">PENERIMA BARANG</div>

                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">5. NPWP</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'penerima_npwp', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">6. Nama</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'penerima_nama', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 0; width: 26mm;">7. Alamat</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'penerima_alamat', '') ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- PEMILIK BARANG -->
    <tr>
        <td class="b1" colspan="2" style="padding:0mm;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td class="secHead" colspan="3">PEMILIK BARANG</td>
                </tr>
                <tr>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">8. NPWP</td>
                    <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                    <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'pemilik_npwp', '') ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">9. Nama</td>
                    <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                    <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'pemilik_nama', '') ?></td>
                </tr>
                <tr>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">10. Alamat</td>
                    <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                    <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'pemilik_alamat', '') ?></td>
                </tr>
                <tr>
                    <td style="height:7mm;" colspan="3"></td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- DOKUMEN PELENGKAP PABEAN -->
    <tr>
        <td class="b1" colspan="2">DOKUMEN PELENGKAP PABEAN</td>
    </tr>
    <tr>
        <td class="b1" colspan="2" style="padding:0;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <!-- KOLOM KIRI -->
                    <td style="width: 50%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">11. Packing List</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0; width: 30mm;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 8mm;">tgl.</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'packing_list_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">12. Kontrak</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0; width: 30mm;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 8mm;">tgl.</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'kontrak_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 28mm;">13. Faktur Pajak</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0; width: 30mm;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 8mm;">tgl.</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'faktur_pajak_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 30mm;">Uang Muka</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'uang_muka_tgl', '-') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- KOLOM KANAN -->
                    <td style="width: 50%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 45mm;">14. Surat Keputusan/Persetujuan</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 0; width: 25mm;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 8mm;">tgl.</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'sk_persetujuan_tgl', '') ?></td>
                            </tr>
                            <tr></tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 45mm;">15. Jenis / nomor / tanggal dokumen</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;" colspan="3"><?= v($data, 'dok_jenis_nomor_tgl', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm;"></td>
                                <td style="border: none; padding: 0.5mm 0;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 25mm;"></td>
                                <td style="border: none; padding: 0.5mm 0; width: 8mm;">tgl.</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'dok_tgl_15', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; height: 4mm;" colspan="5"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- RIWAYAT BARANG -->
    <tr>
        <td class="b1" colspan="2">RIWAYAT BARANG</td>
    </tr>
    <tr>
        <td class="b1" colspan="2" style="padding:0;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">16. Nomor dan tanggal BC 4.0 asal</td>
                    <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'bc40_nomor', '') ?></td>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 25mm; text-align: center;">Tgl.</td>
                    <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'bc40_tgl', '') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- DATA PENGANGKUT -->
    <tr>
        <td class="b1" colspan="2">DATA PENGANGKUT</td>
    </tr>
    <tr>
        <td class="b1" colspan="2" style="padding:0;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 50%;">
                        17. Jenis Sarana Pengangkut <?= v($data, 'jenis_sarana', 'Darat') ?> &nbsp;&nbsp;&nbsp; -
                    </td>
                    <td style="border: none; padding: 0.5mm 1.5mm; width: 50%;">
                        18. No Polisi: <?= v($data, 'no_polisi', '-') ?>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- DATA PERDAGANGAN -->
    <tr>
        <td class="b1" colspan="2">DATA PERDAGANGAN</td>
    </tr>
    <tr>
        <td class="b1" colspan="2" style="padding:0;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <!-- KOLOM KIRI -->
                    <td style="width: 55%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">19. Harga Penyerahan</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'harga_penyerahan', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">20. Nilai Penggantian/Nilai Jasa</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'nilai_penggantian', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">21. Jenis Jasa Kena Pajak</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'jenis_jasa_kena_pajak', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">22. Nilai Uang Muka</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'nilai_uang_muka', '0,00') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 50mm;">23. Nilai Perolehan</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'nilai_perolehan', '') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- KOLOM KANAN -->
                    <td style="width: 45%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 42mm;">- Diskon</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'diskon', '0,00') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 42mm;">- Dasar Pengenaan Pajak</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'dpp', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 42mm;">- PPN Pajak (11%)</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'ppn_11', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 42mm;">- PPNBM Pajak</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'ppnbm', '0,00') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; height: 4mm;" colspan="3"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- DATA PENGEMAS -->
    <tr>
        <td class="b1" colspan="2">DATA PENGEMAS</td>
    </tr>
    <tr>
        <td class="b1" colspan="2" style="padding:0;">
            <table style="width: 100%; border-collapse: collapse;">
                <tr>
                    <!-- KOLOM KIRI: 24 & 25 -->
                    <td style="width: 50%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 30mm;">24. Jenis Kemasan</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'jenis_kemasan', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 30mm;">25. Merek</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'merek_kemasan', '-') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- KOLOM KANAN: 26 -->
                    <td style="width: 50%; border: none; padding: 0; vertical-align: top;">
                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border: none; padding: 0.5mm 1.5mm; width: 25mm;">26. Jumlah</td>
                                <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                <td style="border: none; padding: 0.5mm 1.5mm;"><?= v($data, 'jumlah_kemasan', '0') ?></td>
                            </tr>
                            <tr>
                                <td style="border: none; height: 4mm;" colspan="3"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- DATA BARANG -->
    <tr>
        <td class="b1" colspan="2">DATA BARANG</td>
    </tr>
    <!-- Volume/Berat (27-29 dalam 1 baris dengan jarak) -->
    <tr>
        <td colspan="2" style="padding:1.5mm; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="border:none; width:33.33%; padding:0;">27. Volume (m3) <?= v($data, 'volume_m3', '0,0000') ?></td>
                    <td style="border:none; width:33.33%; padding:0;">28. Berat Kotor <?= v($data, 'berat_kotor', '0,0000') ?></td>
                    <td style="border:none; width:33.34%; padding:0;">29. Berat Bersih (Kg) <?= v($data, 'berat_bersih', '0,0000') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- Kolom No 30 (5%) -->
                    <td style="width:5%; border-right:0.6pt solid #000; padding:0.5mm; text-align:center; vertical-align:top;">
                        <div>30.</div>
                        <div>No</div>
                    </td>

                    <!-- Kolom No 31 (45%) -->
                    <td style="width:45%; border-right:0.6pt solid #000; padding:0.5mm; vertical-align:top;">
                        <div>31.</div>
                        <div style="font-size:7pt;">Uraian jumlah dan jenis barang secara lengkap, kode barang, merk, tipe, ukuran, dan spesifikasi lain</div>
                    </td>

                    <!-- Kolom No 32 (25%) -->
                    <td style="width:25%; border-right:0.6pt solid #000; padding:0.5mm; vertical-align:top;">
                        <div>32.</div>
                        <div style="font-size:7pt;">- Jumlah &amp; Jenis Satuan</div>
                        <div style="font-size:7pt;">- Berat Bersih (Kg)</div>
                        <div style="font-size:7pt;">- Volume (m3)</div>
                    </td>

                    <!-- Kolom No 33 (25%) -->
                    <td style="width:25%; padding:0.5mm; vertical-align:top;">
                        <div>33.</div>
                        <div style="font-size:7pt;">- Harga Penyerahan (Rp)</div>
                        <div style="font-size:7pt;">- Nilai Penggantian / Nilai Jasa</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Area kosong dengan text "0 jenis barang" (area diperbesar) -->
    <tr>
        <td colspan="2" style="border:0.6pt solid #000; padding:10mm 2mm; text-align:center; font-size:9pt;">
            --------------- 0 Jenis barang. Lihat lembar lanjutan. ---------------
        </td>
    </tr>
    <!-- Bottom blocks: G/H (left) + E (right) -->
    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- KOLOM KIRI: G dan H -->
                    <td style="width:50%; border:none; border-right:0.6pt solid #000; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <!-- JUDUL G -->
                            <tr>
                                <td style="border:none; border-bottom:0.6pt solid #000; padding:1.5mm;">
                                    G. UNTUK PEJABAT BEA DAN CUKAI
                                </td>
                            </tr>

                            <!-- ISI G -->
                            <tr>
                                <td style="border:none; padding:1.5mm;">
                                    <table style="width:100%; border-collapse:collapse;">
                                        <tr>
                                            <td style="border:none; width:25mm; padding:0.5mm 0;">Nama</td>
                                            <td style="border:none; width:5mm; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nama_petugas', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0;">NIP</td>
                                            <td style="border:none; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nip_petugas', '-') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- JUDUL H -->
                            <tr>
                                <td style="border:none; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000; padding:1.5mm;">
                                    H. UNTUK PEMBAYARAN
                                </td>
                            </tr>

                            <!-- ISI H -->
                            <tr>
                                <td style="border:none; padding:1.5mm;">
                                    <table style="width:100%; border-collapse:collapse;">
                                        <tr>
                                            <td style="border:none; width:25mm; padding:0.5mm 0;">Pembayaran</td>
                                            <td style="border:none; width:5mm; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;">1. Bank &nbsp;&nbsp; 2. Pos &nbsp;&nbsp; 3. Kantor Pabean</td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0;">Wajib Bayar</td>
                                            <td style="border:none; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'wajib_bayar', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0;" colspan="3">
                                                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                                    <colgroup>
                                                        <col style="width:55%;">
                                                        <col style="width:45%;">
                                                    </colgroup>
                                                    <tr>
                                                        <!-- Kiri: No -->
                                                        <td style="border:none; padding:0;">
                                                            No. <?= v($data, 'no_bayar', '-') ?>
                                                        </td>

                                                        <!-- Kanan: Tanggal -->
                                                        <td style="border:none; padding:0;">
                                                            Tanggal: <?= v($data, 'tgl_bayar', '-') ?>
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- KOLOM KANAN: E -->
                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">

                            <tr>
                                <td style="border:none; border-bottom:0.6pt solid #000; padding:1.5mm; text-align:center;">
                                    E. TANDA TANGAN PENGUSAHA TPB
                                </td>
                            </tr>

                            <!-- ISI E: Pernyataan -->
                            <tr>
                                <td style="border:none; padding:1.5mm;">
                                    Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal<br>
                                    yang diberitahunakan dalam pemberitahuan pabean ini.
                                </td>
                            </tr>

                            <!-- ISI E: Tanggal -->
                            <tr>
                                <td style="border:none; text-align:center; padding-top:2mm;">
                                    , <?= v($data, 'tanggal', '16-01-2026') ?>
                                </td>
                            </tr>

                            <!-- ISI E: Area kosong untuk tanda tangan -->
                            <tr>
                                <td style="border:none; height:14mm;"></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- Bottom note line -->
    <tr>
        <td colspan="2" class="bt0 bl0 br0" style="border-top:0; padding: 1.2mm 1.2mm;">
            Rangkap ke-1 / 2 / 3 : Kantor Pabean / Pengusaha TPB / Pengirim Baran
        </td>
    </tr>
</table>