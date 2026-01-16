<?php
// Functions loaded from src/Support/helpers.php
?>

<style>
    @page {
        margin-top: 4.2mm;
        margin-right: 5mm;
        margin-bottom: 27.8mm;
        margin-left: 5mm;
    }

    :root {
        --hTop: 24mm;
        --hBottom: 18mm;
    }

    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 7.6pt;
        line-height: 1.02;
    }

    table {
        width: 100%;
        table-layout: fixed;
        border-collapse: collapse;
    }

    table,
    tr,
    td {
        page-break-inside: avoid;
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

    .p0 {
        padding: 0;
    }

    .p1 {
        padding: 0.45mm;
    }

    .p2 {
        padding: 0.85mm;
    }

    .p3 {
        padding: 1.2mm;
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

    .title {
        font-size: 10pt;
        line-height: 1.05;
    }

    .small {
        font-size: 6.8pt;
    }

    .wrap {
        overflow-wrap: break-word;
        word-wrap: break-word;
    }

    .nowrap {
        white-space: nowrap;
    }

    table.topbar {
        margin: 0;
    }

    table.topbar td {
        padding: 0.4mm 0.6mm;
        line-height: 1.0;
        vertical-align: middle;
    }

    .topbar-left {
        padding: 0 !important;
        line-height: 1.0 !important;
    }

    .topbar-right {
        padding: 0.35mm 0.6mm !important;
        line-height: 1.0 !important;
    }

    .f10 {
        font-size: 10pt;
    }

    .bc {
        font-size: 10pt;
        line-height: 1.0;
    }

    .sizebc {
        font-weight: bold;
    }

    .kv td {
        padding: 0.25mm 0.55mm;
        vertical-align: top;
    }

    .kv-tight td {
        padding: 0.18mm 0.55mm;
        vertical-align: top;
    }

    .kv-abc td {
        padding: 0.20mm 0.60mm;
    }

    .sec-title {
        display: block;
        padding-top: 0.6mm;
        padding-bottom: 0.4mm;
    }

    .sec-cell {
        padding: 0.7mm 0.9mm;
    }

    .bc-gap {
        margin-top: 0.6mm;
    }

    .sec-kv {
        margin-top: 0.2mm;
    }

    .e-table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .e-title {
        border: 0.5pt solid #000;
        border-top: 0;
        padding: 0.6mm;
        font-weight: bold;
    }

    .e-sub-left {
        border: 0.5pt solid #000;
        border-top: 0;
        border-right: 0.5pt solid #000;
        padding: 0.6mm;
        font-weight: bold;
        width: 50%;
    }

    .e-sub-right {
        border: 0.5pt solid #000;
        border-top: 0;
        border-left: 0;
        padding: 0.6mm;
        font-weight: bold;
        width: 50%;
    }

    .e-body {
        border: 0.5pt solid #000;
        border-top: 0;
        padding: 0.6mm;
    }

    .e-body-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: 0;
    }

    .e-body-grid td {
        border: 0;
        vertical-align: top;
        padding: 0;
    }

    .kv-row {
        padding: 0.35mm 0;
        line-height: 1.05;
    }

    .kv-no {
        display: inline-block;
        width: 6mm;
        white-space: nowrap;
    }

    .kv-lbl {
        display: inline-block;
        width: 34mm;
        vertical-align: top;
    }

    .kv-sep {
        display: inline-block;
        width: 3mm;
        text-align: center;
    }

    .kv-val {
        display: inline-block;
        width: 60mm;
        vertical-align: top;
    }

    .leftbox {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .leftbox td {
        border: 0.5pt solid #000;
        padding: 0.45mm 0.55mm;
        vertical-align: top;
    }

    .split-noline {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .split-noline td {
        border: 0;
        padding: 0.35mm 0.55mm;
        vertical-align: top;
    }

    .peti-grid {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .peti-grid td {
        border: 0 !important;
        padding: 0.45mm 0.55mm;
        vertical-align: top;
    }

    .peti-grid .vline {
        border-left: 0.5pt solid #000 !important;
    }

    .lb-top {
        height: var(--hTop);
    }

    .lb-bottom {
        height: var(--hBottom);
    }

    .lb-top td,
    .lb-bottom td {
        vertical-align: top;
    }

    table.bigbox2 {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.bigbox2>tbody>tr>td {
        border: 0.5pt solid #000;
        padding: 0;
        vertical-align: top;
    }

    .segel-top {
        height: var(--hTop);
    }

    .segel-bottom {
        height: var(--hBottom);
    }

    .segel-grid {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .segel-grid td {
        border: 0;
        padding: 0;
        vertical-align: top;
    }

    table.segelpanel2 {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: 0.5pt solid #000;
    }

    table.segelpanel2 td {
        border: 0;
        padding: 0;
        vertical-align: top;
    }

    table.segelpanel2 .sg-head {
        text-align: center;
        font-weight: bold;
        padding: 2pt 0 1.5pt 0;
        border-bottom: 0.5pt solid #000;
    }

    table.segelpanel2 .segel-top {
        height: var(--hTop);
    }

    table.segelpanel2 .segel-bottom {
        height: var(--hBottom);
    }

    table.segelpanel2 table.segel-grid {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.segelpanel2 table.segel-grid td {
        border: 0;
        padding: 0;
        vertical-align: top;
    }

    table.segelpanel2 .sg-v30 {
        border-left: 0.5pt solid #000;
    }

    table.segelpanel2 table.sg-bc {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.segelpanel2 table.sg-bc td {
        border: 0;
        padding: 1.2pt;
    }

    table.segelpanel2 .sg-bc-title {
        text-align: center;
        font-weight: bold;
        padding: 1.2pt 0;
        border-bottom: 0.5pt solid #000;
    }

    table.segelpanel2 .sg-28label,
    table.segelpanel2 .sg-29label {
        border-bottom: 0.5pt solid #000;
    }

    table.segelpanel2 .sg-29label,
    table.segelpanel2 .sg-29val,
    table.segelpanel2 .sg-29blank {
        border-left: 0.5pt solid #000;
    }

    table.segelpanel2 .sg-28val,
    table.segelpanel2 .sg-29val {
        border-bottom: 0.5pt solid #000;
    }

    table.segelpanel2 .sg-30cell {
        padding: 1.2pt;
        border-bottom: 0.5pt solid #000;
    }

    table.segelpanel2 .sg-30body {
        padding: 1.2pt;
        height: 100%;
    }

    table.segelpanel2 table.sg-blank {
        width: 100%;
        height: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.segelpanel2 table.sg-blank td {
        border-top: 0 !important;
        border-bottom: 0 !important;
        padding: 0;
    }
</style>

<table class="b1 topbar" cellspacing="0" cellpadding="0">
    <tr>
        <td class="b1 center bc sizebc topbar-left" style="width:18mm;">BC 2.7</td>
        <td class="b1 center f10 topbar-right">
            PEMBERITAHUAN PENGELUARAN UNTUK DIANGKUT DARI TEMPAT PENIMBUNAN<br>
            BERIKAT KE TEMPAT PENIMBUNAN BERIKAT LAINNYA
        </td>
    </tr>
</table>

<table class="b1 bt0">

    <tr>
        <td class="b1 bt0 p1">HEADER</td>
    </tr>

    <!-- BLOK: NOMOR PENGAJUAN + A/D/G (SATU BORDER LUAR) -->
    <tr>
        <td class="b1 bt0 p0">
            <table class="adgWrap">
                <colgroup>
                    <!-- KIRI -->
                    <col style="width:26%;">
                    <col style="width:2.0mm;"> <!-- ":" kiri makin rapat -->
                    <col style="width:36%;">
                    <!-- KANAN -->
                    <col style="width:20%;">
                    <col style="width:2.0mm;"> <!-- ":" kanan makin rapat -->
                    <col style="width:14%;">
                </colgroup>

                <!-- Row 0: NOMOR PENGAJUAN | Halaman -->
                <tr>
                    <td class="secHead">NOMOR PENGAJUAN</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'nomor_pengajuan') ?></td>

                    <td colspan="3" style="padding-right:0.8mm;">
                        <div class="page">Halaman ke-3 dari 3</div>
                    </td>
                </tr>

                <!-- Row 1: A | D -->
                <tr>
                    <td class="secHead">A. KANTOR PABEAN</td>
                    <td class="sep">:</td>
                    <td class="val">-</td>

                    <td class="secHead">D. JENIS TRANSAKSI</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_transaksi', '-') ?></td>
                </tr>

                <!-- Row 2: 1. Kantor Asal | kosong kanan -->
                <tr>
                    <td class="indent">1. Kantor Asal</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'kantor_asal', '-') ?></td>

                    <td colspan="3">&nbsp;</td>
                </tr>

                <!-- Row 3: 2. Kantor Tujuan | G header (mulai splitL + garis tebal atas hanya kanan) -->
                <tr>
                    <td class="indent">2. Kantor Tujuan</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'kantor_tujuan', '-') ?></td>

                    <!-- garis tebal atas hanya area kanan -->
                    <td class="secHead splitL gTopBold" colspan="3">G. KOLOM KHUSUS BEA CUKAI</td>
                </tr>

                <!-- Row 4: B | Nomor Pendaftaran -->
                <tr>
                    <td class="secHead">B. JENIS TPB ASAL</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_tpb_asal', '-') ?></td>

                    <td class="splitL indent gLabel">Nomor Pendaftaran</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'nomor_pendaftaran', '-') ?></td>
                </tr>

                <!-- Row 5: C | Tanggal -->
                <tr>
                    <td class="secHead">C. JENIS TPB TUJUAN</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'jenis_tpb_tujuan', '-') ?></td>

                    <td class="splitL indent gLabel">Tanggal</td>
                    <td class="sep">:</td>
                    <td class="val"><?= v($data, 'tanggal_pendaftaran', '-') ?></td>
                </tr>

            </table>
        </td>
    </tr>


    <!-- =========================
       E
       ========================= -->
    <tr>
        <td class="b1 bt0 p0">
            <table class="e-table">
                <tr>
                    <td class="e-title" colspan="2">E. DATA PEMBERITAHUAN</td>
                </tr>

                <tr>
                    <td class="e-sub-left">TPB ASAL BARANG</td>
                    <td class="e-sub-right">TPB TUJUAN BARANG</td>
                </tr>

                <tr>
                    <td class="e-body" colspan="2">
                        <table class="e-body-grid">
                            <tr>
                                <td style="width:50%; padding-right:2mm;">
                                    <div class="kv-row"><span class="kv-no">1.</span><span class="kv-lbl">NPWP</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_npwp') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">2.</span><span class="kv-lbl">Nama</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_nama') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">3.</span><span class="kv-lbl">Alamat</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_alamat') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">4.</span><span class="kv-lbl">No Izin TPB</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_asal_no_izin') ?></span></div>
                                </td>

                                <td style="width:50%; padding-left:2mm;">
                                    <div class="kv-row"><span class="kv-no">5.</span><span class="kv-lbl">NPWP</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_npwp') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">6.</span><span class="kv-lbl">Nama</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_nama') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">7.</span><span class="kv-lbl">Alamat</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_alamat') ?></span></div>
                                    <div class="kv-row"><span class="kv-no">8.</span><span class="kv-lbl">No Izin TPB</span><span class="kv-sep">:</span><span class="kv-val"><?= v($data, 'tpb_tujuan_no_izin') ?></span></div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td class="b1 bt0 p0" colspan="2">
                        <div class="p1">PEMILIK BARANG</div>
                        <table class="kv">
                            <?= row3('NPWP', v($data, 'pemilik_npwp'), '9') ?>
                            <?= row3('Nama', v($data, 'pemilik_nama'), '10') ?>
                            <?= row3('Alamat', v($data, 'pemilik_alamat'), '11') ?>
                        </table>
                    </td>
                </tr>

            </table>
        </td>
    </tr>

    <!-- =========================
       ... (bagian 12-25 kamu biarkan seperti semula)
       ========================= -->

    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">DOKUMEN PELENGKAP PABEAN</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p0">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">12.</td>
                                            <td style="width:30mm;">Invoice</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'invoice_no') ?></td>
                                            <td style="width:10mm;" class="right">tgl.</td>
                                            <td><?= v($data, 'invoice_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>13.</td>
                                            <td>Packing List</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'packing_list_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'packing_list_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>14.</td>
                                            <td>Kontrak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'kontrak_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'kontrak_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>15.</td>
                                            <td>Faktur Pajak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'faktur_pajak_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'faktur_pajak_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Uang Muka</td>
                                            <td></td>
                                            <td><?= v($data, 'uang_muka_tgl') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <td class="b1 bt0 br0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">16.</td>
                                            <td style="width:40mm;">Surat Jalan</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'surat_jalan_no') ?></td>
                                            <td style="width:10mm;" class="right">tgl.</td>
                                            <td><?= v($data, 'surat_jalan_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>17.</td>
                                            <td>Surat Keputusan/Persetujuan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'sk_persetujuan_no') ?></td>
                                            <td class="right">tgl.</td>
                                            <td><?= v($data, 'sk_persetujuan_tgl') ?></td>
                                        </tr>
                                        <tr>
                                            <td>18.</td>
                                            <td>Lainnya</td>
                                            <td class="center">:</td>
                                            <td colspan="3"><?= v($data, 'lainnya') ?></td>
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

    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">RIWAYAT BARANG</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p1">
                        <table class="kv-tight">
                            <tr>
                                <td style="width:6mm;">19.</td>
                                <td style="width:6mm;">a.</td>
                                <td style="width:55mm;">Nomor dan Tanggal BC 2.7</td>
                                <td class="center" style="width:3mm;">:</td>
                                <td><?= v($data, 'riwayat_bc27_no') ?></td>
                                <td class="right" style="width:10mm;">tgl.</td>
                                <td><?= v($data, 'riwayat_bc27_tgl') ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>b.</td>
                                <td>Nomor dan Tanggal BC 2.3</td>
                                <td class="center">:</td>
                                <td><?= v($data, 'riwayat_bc23_no') ?></td>
                                <td class="right">tgl.</td>
                                <td><?= v($data, 'riwayat_bc23_tgl') ?></td>
                            </tr>
                            <tr>
                                <td></td>
                                <td>c.</td>
                                <td>Nomor dan Tanggal BC 4.0</td>
                                <td class="center">:</td>
                                <td><?= v($data, 'riwayat_bc40_no') ?></td>
                                <td class="right">tgl.</td>
                                <td><?= v($data, 'riwayat_bc40_tgl') ?></td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1">DATA PERDAGANGAN</td>
                </tr>
                <tr>
                    <td class="b1 bt0 p0">
                        <table>
                            <tr>
                                <td class="b1 bt0 bl0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">20.</td>
                                            <td style="width:45mm;">Jenis Valuta Asing</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'valuta', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td>21.</td>
                                            <td>CIF</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'cif') ?></td>
                                        </tr>
                                        <tr>
                                            <td>22.</td>
                                            <td>Nilai Penggantian/Nilai</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'nilai_penggantian') ?></td>
                                        </tr>
                                        <tr>
                                            <td>23.</td>
                                            <td>Harga Penyerahan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'harga_penyerahan') ?></td>
                                        </tr>
                                        <tr>
                                            <td>24.</td>
                                            <td>Harga Perolehan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'harga_perolehan') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <td class="b1 bt0 br0 p1" style="width:50%; vertical-align:top;">
                                    <table class="kv-tight">
                                        <tr>
                                            <td style="width:6mm;">25.</td>
                                            <td style="width:45mm;">Nilai Uang Muka</td>
                                            <td class="center" style="width:3mm;">:</td>
                                            <td><?= v($data, 'nilai_uang_muka') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Diskon</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'diskon') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>Dasar Pengenaan</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'dasar_pengenaan') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>PPN Pajak(0%)</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'ppn') ?></td>
                                        </tr>
                                        <tr>
                                            <td></td>
                                            <td>PPNBM Pajak</td>
                                            <td class="center">:</td>
                                            <td><?= v($data, 'ppnbm') ?></td>
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
    <tr>
        <td class="p0">
            <table class="bigbox2">
                <colgroup>
                    <col style="width:75%;">
                    <col style="width:25%;">
                </colgroup>

                <tr>
                    <!-- PANEL KIRI -->
                    <td style="padding:0;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <!-- AREA ATAS -->
                            <tr>
                                <td style="padding:0; height:var(--hTop);">
                                    <table class="leftbox lb-top" style="width:100%; height:100%;">
                                        <tr>
                                            <td style="padding:0.6mm 0.6mm; border-bottom:0.5pt solid #000;">DATA PENGANGKUTAN</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0; height:100%;">
                                                <table class="split-noline" style="width:100%; height:100%;">
                                                    <colgroup>
                                                        <col style="width:56%;">
                                                        <col style="width:44%;">
                                                    </colgroup>
                                                    <tr>
                                                        <td class="wrap" style="padding:1.2pt; vertical-align:top;">
                                                            <span class="nowrap">26.</span> Jenis Sarana Pengangkut Darat <span class="nowrap">:</span>
                                                            <?= v($data, 'jenis_sarana') ?>
                                                        </td>
                                                        <td class="wrap" style="padding:1.2pt; vertical-align:top;">
                                                            <span class="nowrap">27.</span> No Polisi <span class="nowrap">:</span>
                                                            <?= v($data, 'no_polisi') ?>
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td colspan="2" style="height:100%;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- AREA BAWAH -->
                            <tr>
                                <td style="padding:0; height:var(--hBottom);">
                                    <table class="leftbox lb-bottom" style="width:100%; height:100%;">
                                        <tr>
                                            <td style="padding:0.6mm 0.6mm; border-bottom:0.5pt solid #000;">DATA PETI KEMAS DAN PENGEMAS</td>
                                        </tr>
                                        <tr>
                                            <td style="padding:0; height:100%;">
                                                <table class="peti-grid" style="width:100%; height:100%;">
                                                    <colgroup>
                                                        <col style="width:56%;">
                                                        <col style="width:44%;">
                                                    </colgroup>
                                                    <tr>
                                                        <td style="padding:1.2pt; vertical-align:top;">
                                                            31. Merek dan No Kemasan/Peti Kemasan dan Jumlah
                                                        </td>
                                                        <td class="vline" style="padding:1.2pt; vertical-align:top;">
                                                            32. Jumlah dan Jenis Kemasan
                                                        </td>
                                                    </tr>
                                                    <tr>
                                                        <td style="padding:1.2pt; vertical-align:top;"><?= v($data, 'merek_kemasan') ?></td>
                                                        <td class="vline" style="padding:1.2pt; vertical-align:top;"><?= v($data, 'jumlah_jenis_kemasan') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td style="height:100%;">&nbsp;</td>
                                                        <td class="vline" style="height:100%;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <td style="padding:0;">
                        <table class="segelpanel2" cellpadding="0" cellspacing="0">
                            <colgroup>
                                <col style="width:56%;">
                                <col style="width:44%;">
                            </colgroup>

                            <!-- ZONA ATAS -->
                            <tr>
                                <td class="segel-top" colspan="2" style="padding:0;">
                                    <table class="segel-grid" cellpadding="0" cellspacing="0">
                                        <colgroup>
                                            <col style="width:56%;">
                                            <col style="width:44%;">
                                        </colgroup>

                                        <tr>
                                            <td class="sg-head" colspan="2">SEGEL (DIISI OLEH BEA DAN CUKAI)</td>
                                        </tr>

                                        <tr>
                                            <!-- KIRI: BC Asal -->
                                            <td style="padding:0;">
                                                <table class="sg-bc" cellpadding="0" cellspacing="0" style="height:100%;">
                                                    <colgroup>
                                                        <col style="width:50%;">
                                                        <col style="width:50%;">
                                                    </colgroup>

                                                    <tr>
                                                        <td class="sg-bc-title" colspan="2">BC Asal</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="sg-28label">28. No Segel</td>
                                                        <td class="sg-29label">29. Jenis</td>
                                                    </tr>

                                                    <tr>
                                                        <td class="sg-28val"><?= v($data, 'no_segel') ?></td>
                                                        <td class="sg-29val"><?= v($data, 'jenis_segel') ?></td>
                                                    </tr>

                                                    <tr>
                                                        <td style="height:100%;">&nbsp;</td>
                                                        <td class="sg-29blank" style="height:100%;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <!-- KANAN: 30 (border bawah di TD supaya nyambung) -->
                                            <td class="sg-v30" style="padding:0;">
                                                <table style="width:100%; height:100%; border-collapse:collapse; table-layout:fixed;">
                                                    <tr>
                                                        <td class="sg-30cell">30. Catatan BC Tujuan</td>
                                                    </tr>
                                                    <tr>
                                                        <td class="sg-30body">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>

                                    </table>
                                </td>
                            </tr>

                            <!-- ZONA BAWAH -->
                            <tr>
                                <td class="segel-bottom" colspan="2" style="padding:0;">
                                    <table class="segel-grid" cellpadding="0" cellspacing="0">
                                        <colgroup>
                                            <col style="width:56%;">
                                            <col style="width:44%;">
                                        </colgroup>

                                        <tr>
                                            <!-- blank kiri -->
                                            <td style="padding:0;">
                                                <table class="sg-blank" cellpadding="0" cellspacing="0" style="height:100%;">
                                                    <colgroup>
                                                        <col style="width:50%;">
                                                        <col style="width:50%;">
                                                    </colgroup>
                                                    <tr>
                                                        <td style="height:100%;">&nbsp;</td>
                                                        <td class="sg-29blank" style="height:100%;">&nbsp;</td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <!-- blank kanan: tetap ada garis vertikal sg-v30 -->
                                            <td class="sg-v30" style="padding:0;">
                                                <div class="sg-30body"><?= v($data, 'catatan_bc_tujuan') ?></div>
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
    <tr>
        <td class="p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <td class="p1" style="width:33.33%;">33. Volume (m3) : <?= v($data, 'volume') ?></td>
                    <td class="p1" style="width:33.33%;">34. Berat Kotor : <?= v($data, 'berat_kotor') ?></td>
                    <td class="p1" style="width:33.33%;">35. Berat Bersih (kg) : <?= v($data, 'berat_bersih') ?></td>
                </tr>
            </table>
        </td>
    </tr>

    <!-- =========================
       ... lanjutkan bagian setelah ini seperti punyamu
       ========================= -->
    <tr>
        <td class="b1 bt0 p0">
            <table>
                <tr>
                    <td class="b1 bt0 p1" style="width:10mm;">36.<br>No</td>
                    <td class="b1 bt0 p1" style="width:95mm;">
                        37. Pos tarif/HS, uraian jumlah dan barang secara lengkap, kode barang,<br>
                        merk, tipe, ukuran, dan spesifikasi
                    </td>
                    <td class="b1 bt0 p1" style="width:45mm;">
                        38.<br>
                        - Jumlah &amp; Jenis Satuan<br>
                        - Berat Bersih (kg)<br>
                        - Volume (m3)
                    </td>
                    <td class="b1 bt0 p1">
                        39.<br>
                        - Nilai CIF<br>
                        - Harga penyerahan<br>
                        - Harga perolehan<br>
                        - Nilai Penggantian/Nilai Jasa
                    </td>
                </tr>

                <tr>
                    <td class="b1 bt0 center" style="height:25mm;" colspan="4">
                        <div class="center" style="margin-top:10mm;">
                            -------------- (2) Jenis barang. Lihat lembar lanjut --------------
                        </div>
                    </td>
                </tr>
            </table>
        </td>
    </tr>
    <tr>
        <td class="b1 bt0 p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <tr>
                    <td class="b1 bt0 p1" style="width:55%;">F. TANDA TANGAN PENGUSAHA TPB</td>
                    <td class="b1 bt0 p1" style="width:45%;">H. UNTUK PEJABAT BEA DAN CUKAI</td>
                </tr>

                <tr>
                    <td class="b1 bt0 p1" style="height:24mm; vertical-align:top;">
                        Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                        diberitahukan dalam pemberitahuan pabean ini.<br><br>
                        , <?= v($data, 'tanggal_cetak') ?>
                    </td>

                    <td class="b1 bt0 p0" style="height:24mm; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed; height:24mm; border:0.5pt solid #000;">
                            <colgroup>
                                <col style="width:50%;">
                                <col style="width:50%;">
                            </colgroup>

                            <tr>
                                <td class="p1 center" style="
                                border:0;
                                border-bottom:0.5pt solid #000;
                                border-right:0.5pt solid #000;
                            ">
                                    Kantor Pabean Asal
                                </td>

                                <td class="p1 center" style="
                                border:0;
                                border-bottom:0.5pt solid #000;
                                border-left:0.5pt solid #000;
                            ">
                                    Kantor Pabean Tujuan
                                </td>
                            </tr>

                            <tr>
                                <td style="
                                height:20mm;
                                vertical-align:bottom;
                                border:0;
                                padding:0;
                                border-right:0.5pt solid #000;
                            ">
                                    <div style="padding-left:2mm; padding-right:0.6mm; padding-bottom:0.6mm; line-height:1.05;">
                                        Nama :<br>
                                        NIM :
                                    </div>
                                </td>

                                <td style="
                                height:20mm;
                                vertical-align:bottom;
                                border:0;
                                padding:0;
                                border-left:0.5pt solid #000;
                            ">
                                    <div style="padding-left:2mm; padding-right:0.6mm; padding-bottom:0.6mm; line-height:1.05;">
                                        Nama :<br>
                                        NIM :
                                    </div>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>
            </table>
        </td>
    </tr>

</table>