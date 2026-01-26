<?php

/** @var array $data */
/** @var callable $v (didefinisikan di print_b261.php) */
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

    .p1 {
        padding: 1mm;
    }

    .p12 {
        padding: 1.2mm;
    }

    .p08 {
        padding: 0.8mm;
    }

    .p06 {
        padding: 0.6mm;
    }

    .p04 {
        padding: 0.4mm;
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

    .titleWrap {
        margin-bottom: 1.5mm;
    }

    .titleBig {
        font-size: 10pt;
        font-weight: 700;
        letter-spacing: 0.2px;
    }

    .titleSmall {
        font-size: 9pt;
        font-weight: 700;
    }

    .boxTitle {
        font-weight: 700;
    }

    .label {
        width: 28mm;
    }

    .sep {
        width: 2.2mm;
        text-align: center;
    }

    .val {
        width: auto;
    }

    .mini {
        font-size: 7.4pt;
    }

    .tiny {
        font-size: 7.2pt;
    }

    .check {
        display: inline-block;
        width: 3.2mm;
        height: 3.2mm;
        border: 0.5pt solid #000;
        vertical-align: middle;
        margin-right: 1mm;
    }

    .check.on {
        background: #000;
    }

    .gridNo {
        width: 6mm;
        text-align: center;
    }

    .gridHS {
        width: 36mm;
    }

    .gridNegara {
        width: 20mm;
    }

    .gridTarif {
        width: 35mm;
    }

    .gridSatuan {
        width: 30mm;
    }

    .gridNilai {
        width: 22mm;
    }

    .noteLine {
        text-align: center;
        padding: 4mm 0;
        font-size: 8pt;
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

<div class="titleWrap center">
    <div class="titleBig">PEMBERITAHUAN PENGELUARAN BARANG DARI</div>
    <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>
</div>
<table class="bc27-mini">
    <tr>
        <td>BC 2.6.1</td>
    </tr>
</table>
<table>
    <tr>
        <td class="b p0">
            <table>
                <tr>
                    <td class="b br0 p08" style="width:70%; border-bottom:0; padding-bottom:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Kantor Pabean</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="mini" style="border:none; padding:0.5mm 0;"><?= v($data, 'kantor_pabean') ?></td>
                            </tr>
                            <tr>
                                <td class="mini" style="border:none; padding:0.5mm 0; width:30mm;">Nomor Pengajuan</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="mini" style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td class="b bl0 p08" style="width:30%; border-bottom:0; padding-right:5mm;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="right mini" style="border:none; padding:0.5mm 0;">
                                    Halaman ke-<?= v($data, 'halaman', '1') ?> dari <?= v($data, 'halaman_total', '2') ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="b p08" colspan="2" style="border-top:0; padding-top: 0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="mini bold" style="border:none; padding:0.5mm 0; width:30mm;">A. JENIS TRANSAKSI</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="" style="border:none; padding:0.5mm 0;">
                                    <span style="display:inline-block; border:1px solid #000; width:5mm; height:4mm; vertical-align:middle; margin-right:2mm;"> &nbsp;&nbsp;&nbsp;&nbsp;&nbsp; </span>
                                    &nbsp; 1. Diperbaiki&nbsp;&nbsp;2. Disubkontrakkan&nbsp;&nbsp;3. Dipinjamkan&nbsp;&nbsp;4. Lainnya&nbsp;&nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="b bt0 br0 p08" style="width:50%;">
            <div class="boxTitle">B. DATA PEMBERITAHUAN</div>
        </td>
        <td class="b bt0 bl0 p08" style="width:50%;">
            &nbsp;
        </td>
    </tr>
    <tr>
        <!-- KOLOM KIRI -->
        <td style="width:50%; border:1px solid #000; border-top:0; border-right:1px solid #000; padding:0; vertical-align:top;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                <!-- ROW AREA 1: Pengusaha TPB -->
                <tr>
                    <td style="padding:2mm; border-bottom:1px solid #000;">
                        <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengusaha TPB</div>

                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">1. NPWP</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_npwp']) ? $data['pengusaha_npwp'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">2. Nama</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_nama']) ? $data['pengusaha_nama'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">3. Alamat</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengusaha_alamat']) ? $data['pengusaha_alamat'] : '' ?></td>
                            </tr>

                            <!-- 4: No + Tgl (1 baris 6 kolom, tanpa float, tanpa colgroup) -->
                            <tr>
                                <td style="border:none; padding:0.5mm 0; white-space:nowrap;">4. No. dan Tgl. izin TPB</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:30%;"><?= isset($data['izin_tpb_no']) ? $data['izin_tpb_no'] : '' ?></td>

                                <td style="border:none; padding:0.5mm 0 0.5mm 3mm; white-space:nowrap;">Tgl</td>

                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['izin_tpb_tgl']) ? $data['izin_tpb_tgl'] : '' ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- ROW AREA 2: Pengirim Barang -->
                <tr>
                    <td style="padding:2mm; border-bottom:1px solid #000;">
                        <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengirim Barang</div>

                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">5. NPWP</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_npwp']) ? $data['pengirim_npwp'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">6. Nama</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_nama']) ? $data['pengirim_nama'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">7. Alamat</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pengirim_alamat']) ? $data['pengirim_alamat'] : '' ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- ROW AREA 3: Pemilik Barang -->
                <tr>
                    <td style="padding:2mm;">
                        <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pemilik Barang</div>

                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">8. NPWP</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_npwp']) ? $data['pemilik_npwp'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">9. Nama</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_nama']) ? $data['pemilik_nama'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">10. Alamat</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemilik_alamat']) ? $data['pemilik_alamat'] : '' ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

            </table>
        </td>

        <!-- KOLOM KANAN -->
        <td style="width:50%; border:1px solid #000; border-top:0; border-left:0; padding:0; vertical-align:top;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                <!-- ROW AREA 1: D. DIISI OLEH BEA DAN CUKAI -->
                <tr>
                    <td style="padding:2mm; border-bottom:1px solid #000;">
                        <div style="font-size:8pt; font-weight:700; margin-bottom:1mm;">D. DIISI OLEH BEA DAN CUKAI</div>

                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Nomor Pendaftaran</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['nomor_pendaftaran']) ? $data['nomor_pendaftaran'] : '' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Tanggal</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['tanggal_pendaftaran']) ? $data['tanggal_pendaftaran'] : '' ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- ROW AREA 2: Dokumen Pelengkap Pabean -->
                <tr>
                    <td style="padding:2mm; border-bottom:1px solid #000;">
                        <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Dokumen Pelengkap Pabean</div>
                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">

                            <!-- 11: Packing List + Tgl -->
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:25mm;">11. Packing List</td>
                                <td style="border:none; padding:0.5mm 2mm; width:0.5mm; text-align:left;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:5mm; text-align:left;"><?= isset($data['packing_list']) ? $data['packing_list'] : '' ?></td>
                                <td style="border:none; padding:0.5mm 0; width:5mm; text-align:left; padding-left:-5mm;">Tgl.</td>

                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['packing_list_tgl']) ? $data['packing_list_tgl'] : '' ?></td>
                            </tr>

                            <!-- 12: Header -->
                            <tr>
                                <td colspan="6" style="border:none; padding:0.5mm 0;">12. Pemenuhan Persyaratan/Fasilitas Impor</td>
                            </tr>

                            <!-- 12: No + Tgl -->
                            <tr>
                                <td style="border:none; padding:0.5mm 0; padding-left:6mm; width:10mm;">No &nbsp;:</td>

                                <td style="border:none; padding:0.5mm 0; width:38mm;"><?= isset($data['pemenuhan_no']) ? $data['pemenuhan_no'] : '' ?></td>
                                <td style="border:none; padding:0.5mm 0; width:5mm;">Tgl.</td>

                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['pemenuhan_tgl']) ? $data['pemenuhan_tgl'] : '' ?></td>
                            </tr>

                            <!-- 13: Header -->
                            <tr>
                                <td colspan="6" style="border:none; padding:0.5mm 0;">13. Surat Keputusan/Dokumen Lainnya</td>
                            </tr>

                            <!-- 13: No + Tgl -->
                            <tr>
                                <td style="border:none; padding:0.5mm 0; padding-left:6mm; width:10mm;">No &nbsp;:</td>

                                <td style="border:none; padding:0.5mm 0; width:38mm;"><?= isset($data['skep_no']) ? $data['skep_no'] : '' ?></td>
                                <td style="border:none; padding:0.5mm 0; width:5mm;">Tgl.</td>

                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['skep_tgl']) ? $data['skep_tgl'] : '' ?></td>
                            </tr>
                        </table>
                    </td>

                </tr>

                <!-- ROW AREA 3: 14-16 -->
                <tr>
                    <td style="padding:2mm; border-bottom:1px solid #000;">
                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">14. Valuta</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['valuta']) ? $data['valuta'] : '-' ?> &nbsp;&nbsp; (<?= isset($data['valuta_code']) ? $data['valuta_code'] : '' ?>)</td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">15. NDPBM</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= isset($data['ndpbm']) ? $data['ndpbm'] : '0.00' ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">16. Nilai CIF</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;">
                                    <?= isset($data['nilai_cif']) ? $data['nilai_cif'] : '0.00' ?><br>
                                    <?= isset($data['nilai_cif_rp']) ? $data['nilai_cif_rp'] : 'Rp 0.00' ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- ROW AREA 4: Jenis Sarana Pengangkut -->
                <tr>
                    <td style="padding:2mm;">
                        <div style="font-size:8pt; text-align:center; font-weight:700;">Jenis Sarana Pengangkut</div>
                        <div style="font-size:8pt; margin-top:1mm;"><?= isset($data['jenis_sarana_angkut']) ? $data['jenis_sarana_angkut'] : '' ?></div>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
    <!-- LANJUTAN BARIS: BLOK 18-21 (revisi posisi 19, center "0", tanpa garis pemisah 20-21) -->
    <tr>
        <td colspan="2" style="border:1px solid #000; border-top:0; padding:0; vertical-align:top;">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <!-- AREA KIRI: 18 + 19 (SATU BIDANG) -->
                    <td style="width:80%; border-right:1px solid #000; padding:0; vertical-align:top; height:22mm;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <!-- 18 (diperkecil supaya 19 geser ke kiri) -->
                                <td style="width:50%; border:none; padding:1.2mm; vertical-align:top;">
                                    <div style="font-size:8pt;">18. Nomor, Ukuran dan Tipe Peti Kemas</div>
                                </td>

                                <!-- 19 (lebih ke kiri karena width 50%) + kotak angka -->
                                <td style="width:50%; border:none; padding:0; vertical-align:top;">
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <!-- label 19 -->
                                            <td style="border:none; padding:1.2mm; vertical-align:top;">
                                                <div style="font-size:8pt;">19. Jumlah, Jenis dan Merek Kemasan</div>
                                            </td>

                                            <!-- kotak kecil angka -->
                                            <td style="width:20mm; border-left:1px solid #000; border-bottom:1px solid #000; padding:0; vertical-align:top;">
                                                <!-- bikin 0 center horizontal+vertical -->
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

                                        <!-- spacer bawah agar tinggi 19 full -->
                                        <tr>
                                            <td colspan="2" style="border:none; padding:0; height:14mm;"></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- AREA KANAN: 20 & 21 (tanpa garis pemisah tengah) -->
                    <td style="width:20%; padding:0; vertical-align:top; height:22mm;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <!-- 20 (tanpa border bawah) -->
                            <tr>
                                <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none;">
                                    <div style="font-size:8pt;">20. Berat Kotor (Kg)</div>
                                    <div style="font-size:9pt; margin-top:1.2mm; padding-left:6mm;">
                                        <?= isset($data['berat_kotor']) ? $data['berat_kotor'] : '0.0000' ?>
                                    </div>
                                </td>
                            </tr>

                            <!-- 21 -->
                            <tr>
                                <td style="padding:1.2mm; height:11mm; vertical-align:top; border:none;">
                                    <div style="font-size:8pt;">21. Berat Bersih (Kg)</div>
                                    <div style="font-size:9pt; margin-top:1.2mm; padding-left:6mm;">
                                        <?= isset($data['berat_bersih']) ? $data['berat_bersih'] : '0.0000' ?>
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>

                </tr>
            </table>
        </td>
    </tr>
    <!-- Grid header 22-27 -->
    <tr>
        <td colspan="2" class="b bt0 p0">
            <table style="width:100%; table-layout:fixed;">
                <tr>
                    <td class="b p06 mini" style="width: 8mm; height: 15
                                mm;">
                        22. No
                    </td>
                    <td class="b p06 mini" style="width: 80mm; height: 15mm;">
                        23. - Pos Tarif/HS<br>
                        - Kode Barang<br>
                        - Uraian Jumlah Barang Secara Lengkap, Merek, Tipe, Ukuran
                    </td>
                    <td class="b p06 mini" style="width: 22mm;">
                        24. Negara Asal Barang
                    </td>
                    <td class="b p06 mini" style="width: 22mm;">
                        25. Tarif dan Fasilitas BM, BMT, Cukai, PPN, PPnBM, PPh
                    </td>
                    <td class="b p06 mini" style="width: 22mm;">
                        26. Jumlah dan Jenis Satuan Berat Bersih (Kg)
                    </td>
                    <td class="b p06 mini" style="width: 22mm;">
                        27. Nilai CIF
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <!-- Area Jenis Barang -->
    <tr>
        <td colspan="2"
            class="b bt0 center"
            style="height:23mm; vertical-align:middle; padding:0;">

            <div style="text-align:center; font-size:8pt;">
                --------------- <?= v($data, 'jumlah_jenis_barang', '0') ?> Jenis barang. Lihat lembar lanjutan. ---------------
            </div>

        </td>
    </tr>
    <!-- Data Penyesuaian Jaminan + Data Jaminan -->
    <tr>
        <td colspan="2" class="b bt0 p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>

                    <!-- LEFT (40%): JANGAN pakai class b biar tidak double dengan border utama -->
                    <td style="width:40%; border:none; border-right:0.5pt solid #000; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                            <!-- HEADER -->
                            <tr>
                                <td colspan="2" class="b p06 center bold mini">Data Penyesuaian Jaminan</td>
                            </tr>

                            <!-- Sub Header -->
                            <tr>
                                <td class="b bt0 p06 mini bold center" style="width:55%;">Jenis Pungutan</td>
                                <td class="b bt0 p06 mini bold center" style="width:45%;">Jumlah</td>
                            </tr>

                            <!-- ROWS -->
                            <tr>
                                <td class="b bt0 p06 mini">28. Bea Masuk</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p28_bea_masuk', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">29. Bea Masuk</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p29_bea_masuk', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">30. Cukai</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p30_cukai', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">31. PPN</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p31_ppn', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">32. PPnBM</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p32_ppnbm', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">33. PPh</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p33_pph', '0') ?></td>
                            </tr>
                            <tr>
                                <td class="b bt0 p06 mini">34. Jumlah Total</td>
                                <td class="b bt0 p06 mini right"><?= v($data, 'p34_total', '0') ?></td>
                            </tr>

                        </table>
                    </td>

                    <!-- RIGHT (60%): JANGAN pakai class b biar tidak double -->
                    <td style="width:60%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                            <!-- HEADER -->
                            <tr>
                                <!-- header cukup border bawah dari cell header (tidak perlu border luar lagi) -->
                                <td class="b p06 center bold mini">Data Jaminan</td>
                            </tr>

                            <!-- ISI -->
                            <tr>
                                <td class="p08" style="border:none;">
                                    <table style="width:100%; border-collapse:collapse;" class="tiny">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm;">35. Jenis Jaminan</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_jaminan', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:30mm;">36. Nomor Jaminan</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0; text-align:center;">
                                                <?= v($data, 'nomor_jaminan', '-') ?>
                                                <span style="float:right;">Tanggal: <?= v($data, 'tgl_jaminan', '-') ?></span>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm;">37. Nilai Jaminan</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_jaminan', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm;">38. Tanggal Jatuh Tempo</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jatuh_tempo', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm;">39. Penjamin</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penjamin', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm;">40. Nomor dan Tanggal Bukti Penerimaan Jaminan</td>
                                            <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>

                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; text-align:right">
                                                <?= v($data, 'bukti_jaminan_no_tgl', '') ?>
                                                <span style="float:right;">Tanggal : <?= v($data, 'bukti_jaminan_tgl', '-') ?></span>
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
    </tr>
    <!-- Bottom: C and E blocks -->
    <tr>
        <td colspan="2" class="b bt0 p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed; ">
                <tr>
                    <!-- C (kiri) -->
                    <td style="width:50%; border:none; border-right:0.5pt solid #000; padding:2mm; vertical-align:top; height:40mm;">
                        <div class="bold" style="font-size:8pt;">C. PENGESAHAN PENGUSAHA TPB</div>

                        <div class="tiny" style="margin-top:1mm; line-height:1.2;">
                            Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitakan
                        </div>

                        <table style="width:100%; border-collapse:collapse; font-size:7.5pt; margin-top:3mm;">
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Tempat, Tanggal</td>
                                <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                <td style="border:none; padding:0.7mm 0;">
                                    <?= v($data, 'c_tempat', '') ?><?= v($data, 'c_tempat', '') !== '' && v($data, 'c_tanggal', '') !== '' ? ', ' : '' ?><?= v($data, 'c_tanggal', '') ?>
                                </td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Nama Lengkap</td>
                                <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                <td style="border:none; padding:0.7mm 0;"><?= v($data, 'c_nama_lengkap', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:30mm; white-space:nowrap;">Jabatan</td>
                                <td style="border:none; padding:0.7mm 1mm; width:2mm; text-align:center;">:</td>
                                <td style="border:none; padding:0.7mm 0;"><?= v($data, 'c_jabatan', '') ?></td>
                            </tr>
                        </table>

                        <!-- Area tanda tangan -->
                        <div style="margin-top:2mm; font-size:7.5pt;">
                            Tanda Tangan dan Stempel Perusahaan :
                        </div>

                        <!-- Tinggikan area tanda tangan -->
                        <div style="height:20mm;"></div>

                        <!-- Spacer tambahan supaya tidak ada space kosong di bawah C -->
                        <div style="height:10mm;"></div>
                    </td>

                    <!-- E (kanan) -->
                    <td style="width:50%; border:none; padding:2mm; vertical-align:top;">
                        <div class="bold" style="font-size:8pt;">E. UNTUK PEJABAT BEA DAN CUKAI</div>

                        <!-- Samakan tinggi total dengan C -->
                        <div style="height:54mm;"></div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>
</td>
</tr>
</table>

<div class="footerLine">
    Rangkap ke -1 / 2 / 3: Pengusaha TPB / KPPBC Pengawas / Penerima Barang
    <span style="float:right;"><?= v($data, 'printed_from', '') ?></span>
</div>