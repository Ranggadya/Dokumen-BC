<?php

/** @var array $data */
/** @var callable $v  helper v($data,'key','-') didefinisikan di print */
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

    .p06 {
        padding: 0.6mm;
    }

    .p08 {
        padding: 0.8mm;
    }

    .p12 {
        padding: 1.2mm;
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

    .titleBig {
        font-size: 10pt;
        font-weight: 700;
        letter-spacing: 0.2px;
    }

    .bc-mini {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        margin: 0;
    }

    .bc-mini td {
        padding: 0;
        border: 0;
        font-size: 7pt;
        font-weight: 700;
        text-align: right;
        line-height: 1;
    }

    .check {
        display: inline-block;
        width: 3.2mm;
        height: 3.2mm;
        border: 0.5pt solid #000;
        vertical-align: middle;
        margin: 0 1mm 0 0.7mm;
    }

    .check.on {
        background: #000;
    }

    .noteLine {
        text-align: center;
        font-size: 8pt;
    }
</style>

<!-- JUDUL -->
<div class="center" style="margin-bottom:1.5mm;">
    <div class="titleBig">PEMBERITAHUAN IMPOR BARANG DARI TEMPAT PENIMBUNAN BERIKAT</div>
</div>
<table class="bc-mini" style="margin-bottom:1mm;">
    <tr>
        <td>BC 2.5</td>
    </tr>
</table>

<table>
    <tr>
        <td class="b p0">
            <table>

                <!-- HEADER: Kantor Pabean, Nomor Pengajuan, Halaman -->
                <tr>
                    <td class="b br0 p08" style="width:70%; border:0; padding-bottom:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Kantor Pabean</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="mini" style="border:none; padding:0.5mm 0;"><?= $v($data, 'kantor_pabean', '-') ?></td>
                            </tr>
                            <tr>
                                <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Nomor Pengajuan</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="mini" style="border:none; padding:0.5mm 0;"><?= $v($data, 'nomor_pengajuan', '-') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td class="b bl0 p08" style="width:30%; border:0; text-align:right; padding-bottom:0;">
                        <div class="right mini">
                            Halaman ke-<?= $v($data, 'halaman', '1') ?> dari <?= $v($data, 'halaman_total', '2') ?>
                        </div>
                    </td>
                </tr>

                <!-- A. JENIS TPB -->
                <tr>
                    <td class="b p08" colspan="2" style="border:0; padding-top:0; ">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="mini bold" style="border:none; padding:0.5mm 0; width:30mm;">A. Jenis TPB</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="" style="border:none; padding:0.5mm 0;">
                                    <span style="display:inline-block; border:1px solid #000; width:5mm; height:4mm; vertical-align:middle; margin-right:2mm;"> &nbsp;&nbsp;&nbsp; </span>
                                    &nbsp; 1. Kawasan Berikat&nbsp;&nbsp;&nbsp;&nbsp;2. Gudang Berikat&nbsp;&nbsp;&nbsp;&nbsp;3. TPPB&nbsp;&nbsp;&nbsp;&nbsp;4. TBB&nbsp;&nbsp;&nbsp;&nbsp;5. TLB&nbsp;&nbsp;&nbsp;&nbsp;6. KDUB&nbsp;&nbsp;&nbsp;&nbsp;7. Lainnya
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
                <!-- B kiri + D kanan -->
                <tr>
                    <!-- KIRI (B) -->
                    <td style="
    width:50%;
    border:0.5pt solid #000;
    border-right:0.5 solid #000;
    border-left:0;
    padding:0;
    vertical-align:top;
">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <td style="padding:1.2mm 2mm;">
                                    <div style="font-weight:700; font-size:8pt;">
                                        B. DATA PEMBERITAHUAN
                                    </div>
                                </td>
                            </tr>

                            <!-- Penyelenggara/Pengusaha TPB -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">PENYELENGGARA/PENGUSAHA TPB</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">1. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pengusaha_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">2. Nama</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pengusaha_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">3. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pengusaha_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">4. No Izin TPB</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pengusaha_izin_tpb', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">5. API</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pengusaha_api', '--') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Pemilik Barang -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">PEMILIK BARANG</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">6. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pemilik_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">7. Nama</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pemilik_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">8. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'pemilik_alamat', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Penerima Barang (tetap isi saja, JENIS TRANSAKSI sudah dipindah ke atas D) -->
                            <tr>
                                <td style="padding:2mm;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">PENERIMA BARANG</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">9. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'penerima_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">10. Nama</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'penerima_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">11. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'penerima_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">12. NIPER</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'penerima_niper', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">13. API</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'penerima_api', '--') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>

                    <!-- KANAN (D) -->
                    <td style="
    width:50%;
    border:0.5pt solid #000;
    border:0;
    padding:0;
    vertical-align:top;
">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                            <!-- ROW: JENIS TRANSAKSI (wajib ADA garis bawah, TIDAK ADA garis atas) -->
                            <tr>
                                <td style="
                padding:1.2mm 2mm;
                border:none;                 /* tidak bikin garis sendiri */
                border-bottom:0.5pt solid #000;  /* ini garis bawahnya */
            ">
                                    <div style="font-size:7.5pt; line-height:1.15;">
                                        <span style="font-weight:700;">JENIS TRANSAKSI</span>
                                        <span style="display:inline-block; width:2mm; text-align:center;">:</span>
                                        <?= $v($data, 'jenis_transaksi', '-') ?>
                                    </div>
                                </td>
                            </tr>

                            <!-- D. DIISI OLEH BEA DAN CUKAI -->
                            <!-- NOTE: jangan pakai border-top lagi karena sudah dipisah oleh border-bottom Jenis Transaksi -->
                            <tr>
                                <td style="
                padding:2mm;
                border:none;
                border-bottom:0.5pt solid #000;  /* garis bawah blok D (kalau di template memang ada pemisah) */
            ">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">D. DIISI OLEH BEA DAN CUKAI</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Nomor Pendaftaran</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'nomor_pendaftaran', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 0.8mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'tanggal_pendaftaran', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>


                            <!-- Dokumen Pelengkap Pabean: 14-18 (Invoice/PL/Kontrak/Fasilitas/Surat Keputusan) -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15; table-layout:fixed;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">14. Invoice</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= $v($data, 'invoice_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'invoice_tgl', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">15. Packing List</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= $v($data, 'packing_list_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'packing_list_tgl', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">16. Kontrak</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= $v($data, 'kontrak_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'kontrak_tgl', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">17. Fasilitas Impor</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= $v($data, 'fasilitas_impor', '-') ?></td>

                                            <td style="border:none; padding:0.5mm 0; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'fasilitas_impor_tgl', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">18. Surat Keputusan</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= $v($data, 'surat_keputusan_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'surat_keputusan_tgl', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Area 1: 19. Valuta & 20. NDPBM (2 kolom sejajar dengan garis pemisah) -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15; margin:-2mm; padding:0;">
                                        <tr>
                                            <!-- Kolom Kiri: 19. Valuta -->
                                            <td style="width:50%; border:none; border-right:0.5pt solid #000; padding:1mm; vertical-align:top;">
                                                <table style="width:100%; border-collapse:collapse;">
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:4mm;">19. Valuta</td>

                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0; text-align:right;"><?= v($data, 'valuta', '-') ?></td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <!-- Kolom Kanan: 20. NDPBM -->
                                            <td style="width:50%; border:none; padding:1mm; vertical-align:top;">
                                                <table style="width:100%; border-collapse:collapse;">
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:20mm;">20. NDPBM</td>

                                                    <tr>
                                                        <td style="border:none; padding:0; text-align:right;"><?= v($data, 'valuta', '-') ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                            <!-- Area 2: 21. Nilai CIF & 22. Harga Penyerahan -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">21. Nilai CIF</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_cif', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">22. Harga Penyerahan</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'harga_penyerahan', '0.00') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Area 3: 23. Uang Muka, 24. Diskon, 25. Dasar Pengenaan + Pajak -->
                            <tr>
                                <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15; ">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">23. Uang Muka</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'uang_muka', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">24. Diskon</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'diskon', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">25. Dasar Pengenaan</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'dasar_pengenaan', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0 0.5mm 4mm; width:30mm;">- PPN Pajak (0%)</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ppn_pajak', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0 0.5mm 4mm; width:30mm;">- PPNBM Pajak (0%)</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ppnbm_pajak', '0.00') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
                <tr>
                    <td colspan="2" style="border:1px solid #000; border:0; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <!-- AREA KIRI: 18 (SATU BIDANG) -->
                                <td style="width:80%; border-right:1px solid #000; padding:0; vertical-align:top; height:22mm;">
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <!-- 18  -->
                                            <td style="width:50%; border:none; padding:1.2mm; vertical-align:top;">
                                                <div style="font-size:8pt;">26. Nomor, Ukuran dan Tipe Peti Kemas</div>
                                            </td>

                                            <!-- 27  -->
                                            <td style="width:50%; border:none; padding:0; vertical-align:top;">
                                                <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                                    <tr>
                                                        <!-- label 19 -->
                                                        <td style="border:none; padding:1.2mm; vertical-align:top;">
                                                            <div style="font-size:8pt;">27. Jumlah, Jenis dan Merek Kemasan</div>
                                                        </td>

                                                        <!-- kotak kecil angka -->
                                                        <td style="width:20mm; border-left:1px solid #000; border-bottom:1px solid #000; padding:0; vertical-align:top;">
                                                            <!-- bikin 0 -->
                                                            <div style="
                                                font-size:8pt;
                                                text-align:center;
                                                height:8mm;
                                                line-height:8mm;
                                                margin:0;
                                                padding:0;
                                            ">
                                                                <?= isset($data['jumlah_kemasan']) ? $data['jumlah_kemasan'] : '0' ?>
                                                            </div>
                                                        </td>
                                                    </tr>

                                                    <!-- spacer bawah -->
                                                    <tr>
                                                        <td colspan="2" style="border:none; padding:0; height:14mm;"></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                                <!-- AREA KANAN: 28, 29 & 30  -->
                                <!-- AREA KANAN: 28, 29 & 30  -->
                                <td style="width:20%; padding:0; vertical-align:top; height:22mm;">
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <!-- Baris 1: 28. Jenis Sarana Pengangkut -->
                                        <tr>
                                            <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none; border-bottom:0.5pt solid #000;">
                                                <div style="font-size:8pt;">28. Jenis Sarana Pengangkut</div>
                                                <div style="font-size:9pt; margin-top:1.2mm;">
                                                    <?= v($data, 'jenis_sarana_pengangkut', '-') ?>
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- Baris 2: 29 & 30 dalam satu area -->
                                        <!-- Baris 2: 29 & 30 dalam satu area -->
                                        <tr>
                                            <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none;">
                                                <!-- 29. Berat Kotor -->
                                                <div style="font-size:8pt;">29. Berat Kotor (Kg)</div>
                                                <div style="font-size:9pt; margin-top:0.5mm; text-align:right">
                                                    <div style="float:right;"><?= v($data, 'berat_kotor', '0.0000') ?></div>
                                                </div>

                                                <!-- 30. Berat Bersih -->
                                                <div style="font-size:8pt; margin-top:1mm; clear:both;">30. Berat Bersih</div>
                                                <div style="font-size:9pt; margin-top:0.5mm;">
                                                    <div style="float:right;"><?= v($data, 'berat_bersih', '0.0000') ?></div>
                                                </div>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Tabel Barang: Header + Data -->
                <tr>
                    <td colspan="2" class="b bt0 p0" style="border-left: 0; border-right: 0; border-bottom: 0;">
                        <table style="width:100%; table-layout:fixed; border-collapse:collapse;">
                            <!-- Baris 1: Header 31-36 -->
                            <tr>
                                <td class="b p06 mini" style="width:8mm; height:15mm; border-left:0;">31.<br>No</td>
                                <td class="b p06 mini" style="width:8mm;">
                                    32. - Pos Tarif/HS<br>
                                    - Kode Barang<br>
                                    - Uraian barang secara lengkap, merk, tipe, ukuran, spesifikasi lain<br>
                                    - Fasilitas Impor<br>
                                    - Surat Keputusan/Dokumen Lainnya
                                </td>
                                <td class="b p06 mini" style="width:25mm;">
                                    33. - Kategori Barang<br>
                                    - Kondisi Barang
                                </td>
                                <td class="b p06 mini" style="width:25mm;">
                                    34. - Tarif dan Fasilitas<br>
                                    - BM - BMT<br>
                                    - Cukai<br>
                                    - PPN<br>
                                    - PPnBM<br>
                                    - PPh
                                </td>
                                <td class="b p06 mini" style="width:24mm;">
                                    35. - Jumlah dan Jenis Satuan<br>
                                    - Berat Bersih (Kg)<br>
                                    - Jumlah dan Jenis Kemasan
                                </td>
                                <td class="b p06 mini" style="width:25mm; border-right:0;">
                                    36. - Nilai CIF<br>
                                    - Harga<br>
                                    - Harga Penyerahan
                                </td>
                            </tr>

                            <!-- Baris 2: Data No 1 -->
                            <tr>
                                <td class="b p06 mini" style="width:8mm; height:15mm; border-left:0;">1.</td>
                                <td class="b p06 mini" style="width:8mm;">
                                    Pos Tarif/HS : 55162200<br>
                                    Kode Barang : BARANG23V<br>
                                    ASDASD, Merk: ASDASD, Tipe: ASDASD,<br>
                                    Ukuran: ASDASD, Lain-lain: ASDASD<br>
                                    Dokumen<br>
                                    --
                                </td>
                                <td class="b p06 mini" style="width:25mm;">
                                    Kategori :<br>
                                    BARANG MODAL<br>
                                    Kondisi :<br>
                                    TIDAK RUSAK
                                </td>
                                <td class="b p06 mini" style="width:25mm;">
                                    BM 1 100 <br>
                                    PPH 15 100 <br>
                                    PPN 11 100 <br>
                                    PPNBM 1 100 <br>
                                </td>
                                <td class="b p06 mini" style="width:24mm;">
                                    Sat : 123,123.0000<br>
                                    KGM(KILOGRAM)<br>
                                    Berat Bersih :<br>
                                    123.0000<br>
                                    Kemasan : 123123<br>
                                    7A
                                </td>
                                <td class="b p06 mini" style="width:25mm; border-right:0;">
                                    CIF (dalam ):<br>
                                    123,123.00<br>
                                    Harga Penyerahan :<br>
                                    1,231,234.00<br>
                                    Kode Perhitungan :<br>
                                    Harga Pemasukan
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- TABEL PUNGUTAN 37-43 -->
                <tr>
                    <td colspan="2" class="b bt0 p0" style="border:0;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; font-size:7.5pt; border-left:0;">
                            <tr>
                                <td class="b p06 center bold" style="width:26%;">Jenis Pungutan</td>
                                <td class="b p06 center bold" style="width:14%;">Dibayar<br>(Rp)</td>
                                <td class="b p06 center bold" style="width:14%;">Dibebaskan<br>(Rp)</td>
                                <td class="b p06 center bold" style="width:18%;">Ditanggung Pemerintah<br>(Rp)</td>
                                <td class="b p06 center bold" style="width:14%;">Sudah Dilunasi<br>(Rp)</td>
                                <td class="b p06 center bold" style="width:14%;">Wajib Bayar (Rp)</td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">37. BM</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p37_bm_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p37_bm_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p37_bm_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p37_bm_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p37_bm_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">38. BMT</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p38_bmt_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p38_bmt_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p38_bmt_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p38_bmt_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p38_bmt_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">39. Cukai</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p39_cukai_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p39_cukai_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p39_cukai_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p39_cukai_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p39_cukai_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">40. PPN</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40_ppn_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40_ppn_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40_ppn_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40_ppn_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40_ppn_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">40a. PPN Lokal</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40a_ppn_lokal_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40a_ppn_lokal_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40a_ppn_lokal_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40a_ppn_lokal_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p40a_ppn_lokal_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">41. PPnBM</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p41_ppnbm_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p41_ppnbm_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p41_ppnbm_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p41_ppnbm_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p41_ppnbm_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06">42. PPh</td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p42_pph_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p42_pph_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p42_pph_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p42_pph_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right"><?= $v($data, 'p42_pph_wajib_bayar', '0') ?></td>
                            </tr>

                            <tr>
                                <td class="b bt0 p06 bold">43. Total</td>
                                <td class="b bt0 p06 right bold"><?= $v($data, 'p43_total_dibayar', '0') ?></td>
                                <td class="b bt0 p06 right bold"><?= $v($data, 'p43_total_dibebaskan', '0') ?></td>
                                <td class="b bt0 p06 right bold"><?= $v($data, 'p43_total_ditanggung', '0') ?></td>
                                <td class="b bt0 p06 right bold"><?= $v($data, 'p43_total_sudah_dilunasi', '0') ?></td>
                                <td class="b bt0 p06 right bold"><?= $v($data, 'p43_total_wajib_bayar', '0') ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- C & E (pengesahan + pembayaran) -->
                <tr>
                    <td colspan="2" class="b bt0 p0">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; border-right:0;">
                            <tr>
                                <!-- C -->
                                <td style="width:50%; border:none; border-right:0.5pt solid #000; padding:2mm; vertical-align:top; height:44mm;">
                                    <div class="bold" style="font-size:8pt;">C. PENGESAHAN PENGUSAHA TPB</div>
                                    <div class="tiny" style="margin-top:1mm; line-height:1.2;">
                                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitahukan dalam pemberitahuan
                                    </div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; margin-top:3mm;">
                                        <tr>
                                            <td style="border:none; padding:0.7mm 0; width:30mm;">Tempat, Tanggal</td>
                                            <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.7mm 0;">
                                                <?= $v($data, 'c_tempat', '') ?><?= ($v($data, 'c_tempat', '') !== '' && $v($data, 'c_tanggal', '') !== '') ? ', ' : '' ?><?= $v($data, 'c_tanggal', '') ?>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.7mm 0; width:30mm;">Nama Lengkap</td>
                                            <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.7mm 0;"><?= $v($data, 'c_nama_lengkap', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.7mm 0; width:30mm;">Jabatan</td>
                                            <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.7mm 0;"><?= $v($data, 'c_jabatan', '') ?></td>
                                        </tr>
                                    </table>

                                    <div style="margin-top:2mm; font-size:7.5pt;">Tanda Tangan dan Stempel</div>
                                    <div style="height:18mm;"></div>
                                </td>
                                <!-- E -->
                                <td style="width:50%; border:0; padding:0; vertical-align:top;">
                                    <table style="width:100%; border-collapse:collapse;">
                                        <!-- BARIS 1: Area E (50% = 22mm) -->
                                        <tr>
                                            <td style="border-bottom:1px solid #000; padding:2mm; vertical-align:top; height:22mm;">
                                                <table style="width:100%; border-collapse:collapse;">
                                                    <tr>
                                                        <td style="border:none; width:auto; vertical-align:middle; font-size:8pt;">
                                                            <span class="bold">E. UNTUK</span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; vertical-align:middle; font-size:7.5pt;">
                                                            Pembayaran&nbsp;&nbsp;&nbsp;&nbsp;
                                                            <span style="display:inline-block; border:1px solid #000; width:5mm; height:4mm; vertical-align:middle; margin-right:2mm;"> &nbsp;1&nbsp; </span>
                                                            &nbsp; 1. Bank &nbsp;&nbsp;&nbsp; 2. Pos &nbsp;&nbsp;&nbsp; 3. Kantor Pabean
                                                        </td>

                                                    </tr>
                                                </table>
                                                <div style="margin-top:3mm; font-size:7.5pt;">
                                                    No.&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;Tanggal :
                                                </div>
                                            </td>
                                        </tr>

                                        <!-- BARIS 2: Nama/Stempel (50% = 22mm, tanpa garis horizontal) -->
                                        <tr>
                                            <td style="border:none; padding:0; vertical-align:top; height:22mm;">
                                                <table style="width:100%; height:100%; border-collapse:collapse;">
                                                    <tr>
                                                        <td style="border:none; text-align:center; vertical-align:top; padding-top:2mm; padding-bottom:12mm; font-size:7.5pt; height:50%;">
                                                            Nama/Stempel
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; text-align:center; vertical-align:bottom; padding-bottom:2mm; font-size:7.5pt; height:50%;">
                                                            Nama/Stempel
                                                        </td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

<!-- FOOTER INFO -->
<div class="tiny" style="margin-top:1.5mm;">
    Rangkap ke -1 / 2 / 3 : Pengusaha TPB / KPPBC Pengawas / Penerima Barang
    <span style="float:right;">
        Printed from <?= $v($data, 'printed_app', '') ?> | <?= $v($data, 'printed_date', '') ?> | <?= $v($data, 'printed_time', '') ?>
    </span>
</div>