<?php

/** @var array $data */
/** @var callable $v (didefinisikan di print_b261.php atau print_bc262.php) */
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
        margin: 0 1mm 0 1mm;
    }

    .check.on {
        background: #000;
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

<!-- JUDUL: BC 2.6.2 -->
<div class="titleWrap center">
    <div class="titleBig">PEMBERITAHUAN PEMASUKAN KEMBALI BARANG YANG DIKELUARKAN DARI</div>
    <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>
</div>
<table class="bc27-mini">
    <tr>
        <td>BC 2.6.2</td>
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

                    <td class="b bl0 p08" style="width:30%; border-bottom:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="right mini" style="border:none; padding:0.5mm 0;">
                                    Halaman ke-<?= v($data, 'halaman', '1') ?> dari <?= v($data, 'halaman_total', '2') ?>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>


                <!-- A. TUJUAN PEMASUKAN (BC 2.6.2) -->
                <tr>
                    <td class="b p08" colspan="2" style="border-top:0; padding-top:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td class="mini bold" style="border:none; padding:0.5mm 0; width:30mm;">A. TUJUAN PEMASUKAN</td>
                                <td class="mini center" style="border:none; padding:0.5mm 0; width:3mm;">:</td>
                                <td class="mini" style="border:none; padding:0.5mm 0; white-space:nowrap;">
                                    1. Eks Diperbaiki
                                    <span class="check <?= (v($data, 'tujuan_eks_diperbaiki', '') === 'checked') ? 'on' : '' ?>"></span>
                                    2. Eks Disubkontrakkan
                                    <span class="check <?= (v($data, 'tujuan_eks_disubkontrakkan', '') === 'checked') ? 'on' : '' ?>"></span>
                                    3. Eks Dipinjamkan
                                    <span class="check <?= (v($data, 'tujuan_eks_dipinjamkan', '') === 'checked') ? 'on' : '' ?>"></span>
                                    4.
                                    <span class="check <?= (v($data, 'tujuan_lainnya', '') === 'checked') ? 'on' : '' ?>"></span>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- B. DATA PEMBERITAHUAN -->
                <tr>
                    <td class="b bt0 br0 p08" style="width:50%;">
                        <div class="bold">B. DATA PEMBERITAHUAN</div>
                    </td>
                    <td class="b bt0 bl0 p08" style="width:50%;">&nbsp;</td>
                </tr>

                <!-- BLOK KIRI + KANAN -->
                <tr>
                    <!-- KOLOM KIRI -->
                    <td style="width:50%; border:1px solid #000; border-top:0; border-right:1px solid #000; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                            <!-- Pengusaha TPB -->
                            <tr>
                                <td style="padding:2mm; border-bottom:1px solid #000;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengusaha TPB</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">1. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">2. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">3. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; white-space:nowrap;">4. No. dan Tgl. izin TPB</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:30%;"><?= v($data, 'izin_tpb_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0 0.5mm 1mm; white-space:nowrap;">Tgl</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'izin_tpb_tgl', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Pengirim Barang -->
                            <tr>
                                <td style="padding:2mm; border-bottom:1px solid #000;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pengirim Barang</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">5. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">6. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">7. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_alamat', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Pemilik Barang -->
                            <tr>
                                <td style="padding:2mm;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Pemilik Barang</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">8. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">9. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:26mm; white-space:nowrap;">10. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_alamat', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                        </table>
                    </td>

                    <!-- KOLOM KANAN -->
                    <td style="width:50%; border:1px solid #000; border-top:0; border-left:0; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

                            <!-- D. DIISI OLEH BEA DAN CUKAI -->
                            <tr>
                                <td style="padding:2mm; border-bottom:1px solid #000;">
                                    <div style="font-size:8pt; font-weight:700; margin-bottom:1mm;">D. DIISI OLEH BEA DAN CUKAI</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Nomor Pendaftaran</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_pendaftaran', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:32mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'tanggal_pendaftaran', '-') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- Dokumen Pelengkap Pabean (BC 2.6.2: 11/12/13 berbeda) -->
                            <tr>
                                <td style="padding:2mm; border-bottom:1px solid #000;">
                                    <div style="font-weight:700; font-size:8pt; margin-bottom:1mm;">Dokumen Pelengkap Pabean</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <!-- 11 -->
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:34mm; white-space:nowrap;">11. Packing List</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= v($data, 'packing_list_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0 0.5mm 2mm; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'packing_list_tgl', '') ?></td>
                                        </tr>

                                        <!-- 12 -->
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:34mm; white-space:nowrap;">12. Surat Keputusan</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= v($data, 'dok12_surat_keputusan_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0 0.5mm 2mm; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'dok12_surat_keputusan_tgl', '') ?></td>
                                        </tr>

                                        <!-- 13 -->
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:34mm; white-space:nowrap;">13. Dokumen BC</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:26mm;"><?= v($data, 'dok13_bc_no', '') ?></td>

                                            <td style="border:none; padding:0.5mm 0 0.5mm 2mm; width:9mm; white-space:nowrap;">Tgl.</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'dok13_bc_tgl', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- 14-16 -->
                            <tr>
                                <td style="padding:2mm; border-bottom:1px solid #000;">
                                    <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">14. Valuta</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'valuta', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">15. NDPBM</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ndpbm', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:20mm; white-space:nowrap;">16. Nilai CIF</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;">
                                                <?= v($data, 'nilai_cif', '0.00') ?><br>
                                                <?= v($data, 'nilai_cif_rp', 'Rp 0.00') ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- 17 -->
                            <tr>
                                <td style="padding:2mm;">
                                    <div style="font-size:8pt; text-align:center; font-weight:700;">17. Jenis Sarana Pengangkut</div>
                                    <div style="font-size:8pt; margin-top:1mm;"><?= v($data, 'jenis_sarana_angkut', '') ?></div>
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
                <!-- Grid header (BC 2.6.2 umumnya lebih ringkas 22-25) -->
                <tr>
                    <td colspan="2" class="b bt0 p0">
                        <table style="width:100%; table-layout:fixed;">
                            <tr>
                                <td class="b p06 mini" style="width: 8mm; height:10mm;">22. No</td>
                                <td class="b p06 mini" style="width: 90mm;">
                                    23. - Pos Tarif/HS<br>
                                    - Kode Barang<br>
                                    - Uraian Jumlah Barang Secara Lengkap, Merek, Tipe, Ukuran
                                </td>
                                <td class="b p06 mini" style="width: 35mm;">24. Jumlah dan Jenis Satuan<br>Berat Bersih (Kg)</td>
                                <td class="b p06 mini" style="width: 35mm;">25. Nilai CIF</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Area Jenis Barang -->
                <tr>
                    <td colspan="2" class="b bt0 center" style="height:25mm; vertical-align:middle; padding:0;">
                        <div style="text-align:center; font-size:8pt;">
                            --------------- <?= v($data, 'jumlah_jenis_barang', '0') ?> Jenis barang. Lihat lembar lanjutan. ---------------
                        </div>
                    </td>
                </tr>

                <!-- Data Penyesuaian Jaminan (BC 2.6.2: 26-32) + Data Jaminan (33-38) -->
                <tr>
                    <td colspan="2" class="b bt0 p0">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <!-- LEFT 40% -->
                                <td style="width:40%; border:none; border-right:0.5pt solid #000; padding:0; vertical-align:top;">
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <td colspan="2" class="b p06 center bold mini">Data Penyesuaian Jaminan</td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini bold center" style="width:55%;">Jenis Pungutan</td>
                                            <td class="b bt0 p06 mini bold center" style="width:45%;">Jumlah</td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">26. Bea Masuk</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p26_bea_masuk', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">27. Bea Masuk</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p27_bea_masuk', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">28. Cukai</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p28_cukai', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">29. PPN</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p29_ppn', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">30. PPnBM</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p30_ppnbm', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">31. PPh</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p31_pph', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06 mini">32. Jumlah Total</td>
                                            <td class="b bt0 p06 mini right"><?= v($data, 'p32_total', '0') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <!-- RIGHT 60% -->
                                <td style="width:60%; border:none; padding:0; vertical-align:top;">
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <td class="b p06 center bold mini">Data Jaminan</td>
                                        </tr>
                                        <tr>
                                            <td class="p08" style="border:none;">
                                                <table style="width:100%; border-collapse:collapse;" class="tiny">
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">33. Jenis Jaminan</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_jaminan', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">34. Nomor Jaminan</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;">
                                                            <?= v($data, 'nomor_jaminan', '-') ?>
                                                            <span style="float:right;">Tanggal: <?= v($data, 'tgl_jaminan', '-') ?></span>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">35. Nilai Jaminan</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_jaminan', '0') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">36. Tanggal Jatuh Tempo</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jatuh_tempo', '-') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">37. Penjamin</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penjamin', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="border:none; padding:0.5mm 0; width:32mm;">38. Nomor dan Tanggal Bukti Penerimaan Jaminan</td>
                                                        <td style="border:none; padding:0.5mm 2mm; width:3mm; text-align:center;">:</td>
                                                        <td style="border:none; padding:0.5mm 0;">
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
                                        Tanda Tangan dan Stempel Perusahaan
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