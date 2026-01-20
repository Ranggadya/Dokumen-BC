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
</style>

<div class="titleWrap center">
    <div class="titleBig">PEMBERITAHUAN PENGELUARAN BARANG DARI</div>
    <div class="titleBig">TEMPAT PENIMBUNAN BERIKAT DENGAN JAMINAN</div>
</div>

<table>
    <!-- OUTER FRAME -->
    <tr>
        <td class="b p0">
            <table>
                <!-- HEADER ROW: Kantor Pabean / Halaman + Kode Form -->
                <tr>
                    <td class="b br0 p08" style="width: 70%;">
                        <table>
                            <colgroup>
                                <col style="width: 30mm;">
                                <col style="width: 2.2mm;">
                                <col style="width: auto;">
                            </colgroup>
                            <tr>
                                <td class="mini">Kantor Pabean</td>
                                <td class="mini center">:</td>
                                <td class="mini"><?= v($data, 'kantor_pabean') ?></td>
                            </tr>
                            <tr>
                                <td class="mini">Nomor Pengajuan</td>
                                <td class="mini center">:</td>
                                <td class="mini"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>
                    </td>

                    <td class="b bl0 p08" style="width: 30%;">
                        <table>
                            <tr>
                                <td class="right mini">Halaman ke-<?= v($data, 'halaman', '1') ?> dari <?= v($data, 'halaman_total', '2') ?></td>
                            </tr>
                            <tr>
                                <td class="right bold titleSmall">BC 2.6.1</td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- A. JENIS TRANSAKSI -->
                <tr>
                    <td colspan="2" class="b bt0 p08">
                        <span class="bold">A. JENIS TRANSAKSI</span>
                        <span class="mini"> :</span>
                        <span class="mini" style="margin-left: 4mm;">
                            1. Diperbaiki
                            <span class="check <?= (v($data, 'trx_diperbaiki', '') === 'checked') ? 'on' : '' ?>"></span>
                            2. Disubkontrakkan
                            <span class="check <?= (v($data, 'trx_disubkontrakkan', '') === 'checked') ? 'on' : '' ?>"></span>
                            3. Dipinjamkan
                            <span class="check <?= (v($data, 'trx_dipinjamkan', '') === 'checked') ? 'on' : '' ?>"></span>
                            4. Lainnya
                            <span class="check <?= (v($data, 'trx_lainnya', '') === 'checked') ? 'on' : '' ?>"></span>
                        </span>
                    </td>
                </tr>

                <!-- MAIN 2-COLUMN BLOCK: B (left) and D (right) -->
                <tr>
                    <td class="b bt0 br0 p0" style="width: 50%;">
                        <table>
                            <tr>
                                <td class="p08">
                                    <div class="boxTitle">B. DATA PEMBERITAHUAN</div>

                                    <div class="mini" style="margin-top: 1.2mm; font-weight:700;">Pengusaha TPB</div>
                                    <table class="tiny" style="margin-top: 0.6mm;">
                                        <colgroup>
                                            <col class="label">
                                            <col class="sep">
                                            <col class="val">
                                        </colgroup>
                                        <tr>
                                            <td>1. NPWP</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengusaha_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>2. Nama</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengusaha_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>3. Alamat</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengusaha_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>4. No. dan Tgl. izin TPB</td>
                                            <td class="center">:</td>
                                            <td>
                                                <?= v($data, 'izin_tpb_no', '') ?>
                                                <span style="float:right;">Tgl: <?= v($data, 'izin_tpb_tgl', '') ?></span>
                                            </td>
                                        </tr>
                                    </table>

                                    <div class="mini" style="margin-top: 2mm; font-weight:700;">Pengirim Barang</div>
                                    <table class="tiny" style="margin-top: 0.6mm;">
                                        <colgroup>
                                            <col class="label">
                                            <col class="sep">
                                            <col class="val">
                                        </colgroup>
                                        <tr>
                                            <td>5. NPWP</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengirim_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>6. Nama</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengirim_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>7. Alamat</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pengirim_alamat', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="mini" style="margin-top: 2mm; font-weight:700;">Pemilik Barang</div>
                                    <table class="tiny" style="margin-top: 0.6mm;">
                                        <colgroup>
                                            <col class="label">
                                            <col class="sep">
                                            <col class="val">
                                        </colgroup>
                                        <tr>
                                            <td>8. NPWP</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pemilik_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>9. Nama</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pemilik_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td>10. Alamat</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pemilik_alamat', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td class="b bt0 bl0 p0" style="width: 50%;">
                        <table>
                            <tr>
                                <td class="p08">
                                    <div class="boxTitle">D. DIISI OLEK BEA DAN CUKAI</div>

                                    <table class="tiny" style="margin-top: 1mm;">
                                        <colgroup>
                                            <col style="width: 36mm;">
                                            <col style="width: 2.2mm;">
                                            <col style="width: auto;">
                                        </colgroup>
                                        <tr>
                                            <td>Nomor Pendaftaran</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'nomor_pendaftaran') ?></td>
                                        </tr>
                                        <tr>
                                            <td>Tanggal</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'tanggal_pendaftaran', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="mini" style="margin-top: 2mm; font-weight:700;">Dokumen Pelengkap Pabean</div>

                                    <table class="tiny" style="margin-top: 0.8mm;">
                                        <colgroup>
                                            <col style="width: 42mm;">
                                            <col style="width: 2.2mm;">
                                            <col style="width: auto;">
                                        </colgroup>
                                        <tr>
                                            <td>11. Packing List</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'packing_list', '') ?> <span style="float:right;">Tgl. <?= v($data, 'packing_list_tgl', '') ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>12. Pemenuhan Persyaratan/Fasilitas Impor</td>
                                            <td class="center">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tiny" style="padding-left: 6mm;">No</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'pemenuhan_no', '') ?> <span style="float:right;">Tgl. <?= v($data, 'pemenuhan_tgl', '') ?></span></td>
                                        </tr>
                                        <tr>
                                            <td>13. Surat Keputusan/Dokumen Lainnya</td>
                                            <td class="center">:</td>
                                            <td></td>
                                        </tr>
                                        <tr>
                                            <td class="tiny" style="padding-left: 6mm;">No</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'skep_no', '') ?> <span style="float:right;">Tgl. <?= v($data, 'skep_tgl', '') ?></span></td>
                                        </tr>
                                    </table>

                                    <table class="tiny" style="margin-top: 2mm;">
                                        <colgroup>
                                            <col style="width: 26mm;">
                                            <col style="width: 2.2mm;">
                                            <col style="width: auto;">
                                        </colgroup>
                                        <tr>
                                            <td>14. Valuta</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'valuta', '-') ?> &nbsp;&nbsp; (<?= '' ?>)</td>
                                        </tr>
                                        <tr>
                                            <td>15. NDPBM</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'ndpbm', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td>16. Nilai CIF</td>
                                            <td class="center">:</td>
                                            <td>
                                                <?= v($data, 'nilai_cif', '0.00') ?><br>
                                                <?= v($data, 'nilai_cif_rp', 'Rp 0.00') ?>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <tr>
                                <td class="b bt0 p08">
                                    <div class="mini center">Jenis Sarana Pengangkut</div>
                                    <div class="mini" style="margin-top: 1mm;"><?= v($data, 'jenis_sarana_angkut', '') ?></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Row: 18-21 block -->
                <tr>
                    <td colspan="2" class="b bt0 p0">
                        <table>
                            <colgroup>
                                <col style="width: 52%;">
                                <col style="width: 22%;">
                                <col style="width: 26%;">
                            </colgroup>
                            <tr>
                                <td class="b br0 p08">
                                    <div class="mini">18. Nomor, Ukuran dan Tipe Peti Kemas</div>
                                    <div class="mini" style="margin-top: 1.2mm;"><?= v($data, 'peti_kemas_no_ukuran_tipe', '') ?></div>
                                </td>
                                <td class="b bl0 br0 p08">
                                    <div class="mini">19. Jumlah, Jenis dan Merek Kemasan</div>
                                    <div class="mini center" style="margin-top: 1.2mm;"><?= v($data, 'kemasan_jumlah_jenis_merek', '0') ?></div>
                                </td>
                                <td class="b bl0 p08">
                                    <table>
                                        <tr>
                                            <td class="b bb0 p06">
                                                <div class="mini">20. Berat Kotor (Kg)</div>
                                                <div class="mini right" style="margin-top: 1mm;"><?= v($data, 'berat_kotor', '0.0000') ?></div>
                                            </td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p06">
                                                <div class="mini">21. Berat Bersih (Kg)</div>
                                                <div class="mini right" style="margin-top: 1mm;"><?= v($data, 'berat_bersih', '0.0000') ?></div>
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
                        <table>
                            <colgroup>
                                <col class="gridNo">
                                <col class="gridHS">
                                <col class="gridNegara">
                                <col class="gridTarif">
                                <col class="gridSatuan">
                                <col class="gridNilai">
                            </colgroup>
                            <tr>
                                <td class="b br0 p06">
                                    <div class="mini">22. No</div>
                                </td>
                                <td class="b bl0 br0 p06">
                                    <div class="mini">23. - Pos Tarif/HS</div>
                                    <div class="mini">- Kode Barang</div>
                                    <div class="mini">- Uraian Jumlah Barang Secara Lengkap, Merek, Tipe, Ukuran</div>
                                </td>
                                <td class="b bl0 br0 p06">
                                    <div class="mini">24. Negara Asal Barang</div>
                                </td>
                                <td class="b bl0 br0 p06">
                                    <div class="mini">25. Tarif dan Fasilitas BM, BMT,</div>
                                    <div class="mini">Cukai, PPN, PPnBM, PPh</div>
                                </td>
                                <td class="b bl0 br0 p06">
                                    <div class="mini">26. Jumlah dan Jenis Satuan</div>
                                    <div class="mini">Berat Bersih (Kg)</div>
                                </td>
                                <td class="b bl0 p06">
                                    <div class="mini">27. Nilai CIF</div>
                                </td>
                            </tr>

                            <!-- Empty body area (tinggi kotak besar seperti form) -->
                            <tr>
                                <td colspan="6" class="b bt0 p0" style="height: 52mm;">
                                    <div class="noteLine"><?= v($data, 'jenis_barang_info') ?></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- Data Penyesuaian Jaminan + Data Jaminan -->
                <tr>
                    <td colspan="2" class="b bt0 p0">
                        <table>
                            <colgroup>
                                <col style="width: 50%;">
                                <col style="width: 50%;">
                            </colgroup>
                            <tr>
                                <!-- Left: Data Penyesuaian Jaminan -->
                                <td class="b br0 p0">
                                    <table>
                                        <tr>
                                            <td colspan="2" class="b bb0 p06 center bold mini">Data Penyesuaian Jaminan</td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini bold">Jenis Pungutan</td>
                                            <td class="b bt0 bl0 p06 mini bold center">Jumlah</td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">28. Bea Masuk</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p28_bea_masuk', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">29. Bea Masuk</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p29_bea_masuk', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">30. Cukai</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p30_cukai', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">31. PPN</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p31_ppn', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">32. PPnBM</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p32_ppnbm', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">33. PPh</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p33_pph', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 br0 p06 mini">34. Jumlah Total</td>
                                            <td class="b bt0 bl0 p06 mini right"><?= v($data, 'p34_total', '0') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <!-- Right: Data Jaminan -->
                                <td class="b bl0 p0">
                                    <table>
                                        <tr>
                                            <td class="b bb0 p06 center bold mini">Data Jaminan</td>
                                        </tr>
                                        <tr>
                                            <td class="b bt0 p08">
                                                <table class="tiny">
                                                    <colgroup>
                                                        <col style="width: 32mm;">
                                                        <col style="width: 2.2mm;">
                                                        <col style="width: auto;">
                                                    </colgroup>
                                                    <tr>
                                                        <td>35. Jenis Jaminan</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'jenis_jaminan', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>36. Nomor Jaminan</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'nomor_jaminan', '-') ?> <span style="float:right;">Tanggal: <?= v($data, 'tgl_jaminan', '-') ?></span></td>
                                                    </tr>
                                                    <tr>
                                                        <td>37. Nilai Jaminan</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'nilai_jaminan', '0') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>38. Tanggal Jatuh Tempo</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'jatuh_tempo', '-') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>39. Penjamin</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'penjamin', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td>40. Nomor dan Tanggal Bukti Penerimaan Jaminan</td>
                                                        <td class="center">:</td>
                                                        <td><?= v($data, 'bukti_jaminan_no_tgl', '') ?> <span style="float:right;">Tangagl : <?= v($data, 'bukti_jaminan_tgl', '-') ?></span></td>
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
                        <table>
                            <colgroup>
                                <col style="width: 50%;">
                                <col style="width: 50%;">
                            </colgroup>
                            <tr>
                                <td class="b br0 p08">
                                    <div class="bold">C. PENGESAHAN PENGUSAHA TPB</div>
                                    <div class="tiny" style="margin-top: 1mm;">
                                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang diberitakan
                                    </div>

                                    <table class="tiny" style="margin-top: 3mm;">
                                        <colgroup>
                                            <col style="width: 30mm;">
                                            <col style="width: 2.2mm;">
                                            <col style="width: auto;">
                                        </colgroup>
                                        <tr>
                                            <td>Tempat, Tanggal</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'c_tempat', '') ?>, <?= v($data, 'c_tanggal', '') ?></td>
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
                                            <td style="height: 14mm;"></td>
                                        </tr>
                                    </table>
                                </td>

                                <td class="b bl0 p08">
                                    <div class="bold">E. UNTUK PEJABAT BEA DAN CUKAI</div>
                                    <div style="height: 44mm;"></div>
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