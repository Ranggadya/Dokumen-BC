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

    .small {
        font-size: 7.0pt;
    }

    /* footer kecil bawah (di luar box besar) */
    .footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 6mm;
        font-size: 7.0pt;
    }
</style>

<table class="b1">
    <!-- TOP TITLE BAR -->
    <tr>
        <td class="b1 center titleBC" style="width:18%;">BC 4.0</td>
        <td class="b1 center" style="width:82%; padding: 2.0mm 2.0mm;">
            <div class="titleMain">
                PEMBERITAHUAN PEMASUKAN BARANG ASAL TEMPAT LAIN DALAM DAERAH PABEAN KE
            </div>
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
                        Halaman ke-1 dari 2
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

                    <!-- Kolom Kanan Baris 2: Section F -->
                    <td style="width:51%; border:none; border-top:0.6pt solid #000; padding:0mm; vertical-align:top;">
                        <div style="border-left:0.6pt solid #000; padding:1.5mm; height:100%;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td style="border:none; padding-bottom:0.8mm;">F. KOLOM KHUSUS BEA CUKAI</td>
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

    <!-- PENGUSAHA + PENGIRIM -->
    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- PENGUSAHA -->
                    <td style="width:40%; border:none; border-right:0.6pt solid #000; padding:1.5mm; vertical-align:top; padding-right:0.5mm;">
                        <div style="margin-bottom:1mm;">PENGUSAHA TPB</div>

                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">1. NPWP</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_npwp', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">2. Nama</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_nama', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">3. Alamat</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_alamat', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">4. No. Izin TPB</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengusaha_izin_tpb', '') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- PENGIRIM -->
                    <td style="width:60%; border:none; padding:1.5mm; vertical-align:top;">
                        <div style="margin-bottom:1mm;">PENGIRIM BARANG</div>

                        <table style="width: 100%; border-collapse: collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">5. NPWP</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_npwp', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">6. Nama</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_nama', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 0; width:26mm;">7. Alamat</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pengirim_alamat', '') ?></td>
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
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td class="secHead" colspan="3">PEMILIK BARANG</td>
                </tr>
                <tr>
                    <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">8. NPWP</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'pemilik_npwp', '') ?></td>
                </tr>
                <tr>
                    <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">9. Nama</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'pemilik_nama', '') ?></td>
                </tr>
                <tr>
                    <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">10. Alamat</td>
                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                    <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'pemilik_alamat', '') ?></td>
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
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- KIRI -->
                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">11. Packing List</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'packing_list_no', '') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'packing_list_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">12. Kontrak</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'kontrak_no', '') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'kontrak_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">13. Faktur Pajak</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'faktur_pajak_no', '') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'faktur_pajak_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:28mm;">Uang Muka</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:30mm;"><?= v($data, 'uang_muka_no', '') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'uang_muka_tgl', '') ?></td>
                            </tr>
                        </table>
                    </td>

                    <!-- KANAN -->
                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:45mm;">14. Surat Keputusan/Persetujuan</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 0; width:25mm;"><?= v($data, 'sk_persetujuan_no', '') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'sk_persetujuan_tgl', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:45mm;">15. Jenis / nomor / tanggal dokumen</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;" colspan="3"><?= v($data, 'dok_jenis_nomor_tgl', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm;"></td>
                                <td style="border:none; padding:0.5mm 0;"></td>
                                <td style="border:none; padding:0.5mm 0; width:25mm;"><?= v($data, 'dok_no_15_2', '-') ?></td>
                                <td style="border:none; padding:0.5mm 0; width:8mm;">tgl.</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'dok_tgl_15', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; height:4mm;" colspan="5"></td>
                            </tr>
                        </table>
                    </td>
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
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="border:none; padding:0.5mm 1.5mm; width:50%;">
                        16. Jenis Sarana Pengangkut : <?= v($data, 'jenis_sarana', '-') ?>
                    </td>
                    <td style="border:none; padding:0.5mm 1.5mm; width:50%;">
                        17. No Polisi : <?= v($data, 'no_polisi', '-') ?>
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
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="width:55%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:55mm;">18. Harga penyerahan</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'harga_penyerahan', '0.00') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:55mm;">19. Nilai Penggantian Jasa/Nilai</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'nilai_penggantian', '0.00') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td style="width:45%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:40mm;">20. Nilai Uang Muka</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'nilai_uang_muka', '0.00') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:40mm;">21. Jenis Jasa kena</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'jenis_jasa_kena_pajak', '') ?></td>
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
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:35mm;">22. Jenis Kemasan</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'jenis_kemasan', '-') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:35mm;">23. Merek</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'merek_kemasan', 'Tanpa Merk') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.5mm 1.5mm; width:40mm;">24. Jumlah Kemasan</td>
                                <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.5mm 1.5mm;"><?= v($data, 'jumlah_kemasan', '') ?></td>
                            </tr>
                            <tr>
                                <td style="border:none; height:4mm;" colspan="3"></td>
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

    <!-- Volume/Berat (24-26 dalam 1 baris) -->
    <tr>
        <td colspan="2" style="padding:1.5mm; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="border:none; width:33.33%; padding:0;">24. Volume (m3) : <?= v($data, 'volume_m3', '0') ?></td>
                    <td style="border:none; width:33.33%; padding:0;">25. Berat Kotor : <?= v($data, 'berat_kotor', '0') ?></td>
                    <td style="border:none; width:33.34%; padding:0;">26. Berat Bersih (Kg) : <?= v($data, 'berat_bersih', '0') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Header Kolom barang (27/28/29/30) -->
    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <td style="width:5%; border-right:0.6pt solid #000; padding:0.5mm; text-align:center; vertical-align:top;">
                        <div>27.</div>
                        <div>No</div>
                    </td>
                    <td style="width:45%; border-right:0.6pt solid #000; padding:0.5mm; vertical-align:top;">
                        <div>28.</div>
                        <div style="font-size:7pt;">Uraian jumlah dan jenis barang secara lengkap, kode barang, merk, tipe, ukuran, dan spesifikasi lain</div>
                    </td>
                    <td style="width:25%; border-right:0.6pt solid #000; padding:0.5mm; vertical-align:top;">
                        <div>29.</div>
                        <div style="font-size:7pt;">- Jumlah &amp; Jenis Satuan</div>
                        <div style="font-size:7pt;">- Berat Bersih (Kg)</div>
                        <div style="font-size:7pt;">- Volume (m3)</div>
                    </td>
                    <td style="width:25%; padding:0.5mm; vertical-align:top;">
                        <div>30.</div>
                        <div style="font-size:7pt;">- JHarga Penyerahan (Rp)</div>
                        <div style="font-size:7pt;">- Nilai Penggantian / Nilai Jasa</div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- Area kosong barang -->
    <tr>
        <td colspan="2" style="border:0.6pt solid #000; padding:10mm 2mm; text-align:center; font-size:9pt;">
            -------------- (0) Jenis barang. Lihat lembar lanjut --------------
        </td>
    </tr>

    <!-- Bottom blocks: PPN (left) + E (right) -->
    <tr>
        <td colspan="2" style="padding:0; border:0.6pt solid #000;">
            <table style="width:100%; border-collapse:collapse;">
                <tr>
                    <!-- KIRI: PPN + G -->
                    <td style="width:50%; border:none; border-right:0.6pt solid #000; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <!-- PPN -->
                            <tr>
                                <td style="border:none; border-bottom:0.6pt solid #000; padding:1.5mm;">PPN</td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:1.5mm;">
                                    <table style="width:100%; border-collapse:collapse;">
                                        <tr>
                                            <td style="border:none; width:28mm; padding:0.5mm 0;">31. PPN Dilunasi</td>
                                            <td style="border:none; width:5mm; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;">Rp <?= v($data, 'ppn_dilunasi', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0;">32. PPN Dibebaskan</td>
                                            <td style="border:none; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;">Rp <?= v($data, 'ppn_dibebaskan', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0;">33. PPN Tidak</td>
                                            <td style="border:none; padding:0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;">Rp <?= v($data, 'ppn_tidak', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- G -->
                            <tr>
                                <td style="border:none; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000; padding:1.5mm;">
                                    G. UNTUK PEJABAT BEA DAN CUKAI
                                </td>
                            </tr>
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
                        </table>
                    </td>

                    <!-- KANAN: E -->
                    <td style="width:50%; border:none; padding:0; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; border-bottom:0.6pt solid #000; padding:1.5mm;">
                                    E. TANDA TANGAN PENGUSAHA TPB
                                </td>
                            </tr>
                            <tr>
                                <td style="border:none; padding:1.5mm;">
                                    Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal<br>
                                    yang diberitahukan dalam pemberitahuan pabean ini.
                                </td>
                            </tr>
                            <tr>
                                <td style="border:none; text-align:center; padding-top:2mm;">
                                    , <?= v($data, 'tanggal', '17-01-2026') ?>
                                </td>
                            </tr>
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

<div class="footer">
    Printed from <?= v($data, 'printed_app', 'esikatERP') ?> | <?= v($data, 'printed_datetime', '17-Jan-2026 | 14:27') ?>
</div>