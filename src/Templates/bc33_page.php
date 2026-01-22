<?php

/** @var array $data */
?>
<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 6pt;
        line-height: 1.15;
        color: #000;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    td {
        vertical-align: top;
        padding: 0.6mm;
        /* << lebih kecil biar muat TTD */
    }

    .b1 {
        border: 0.6pt solid #000;
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

    /* =========================
       BC33 HEADER
       ========================= */
    .bc33Header {
        width: 100%;
        border-collapse: collapse;
        border: 0.6pt solid #000;
        border-bottom: none;
    }

    .bc33Header td {
        border: 0.6pt solid #000;
        padding: 0.9mm 1.2mm;
        /* << hemat tinggi */
        vertical-align: top;
        font-size: 6pt;
        /* pastikan ngikut 6pt */
        line-height: 1.15;
    }

    /* =========================
       MAIN WRAPPER
       ========================= */
    .hwrap {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .hwrap td {
        padding: 0;
        /* grid tetap rapat */
        vertical-align: top;
    }

    /* =========================
       SECTION BLOCKS
       ========================= */
    .sec {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    /* SUBJUDUL (EXPORTIR, PEMILIK BARANG, dst) */
    .secHead {
        font-weight: bold;
        border-top: 0.6pt solid #000;
        border-bottom: 0.6pt solid #000;
        padding: 0.8mm 1.2mm;
        /* << sebelumnya 0 bikin nempel */
        line-height: 1.1;
        font-size: 6pt;
    }

    /* ISI SECTION */
    .secBody {
        padding: 0.9mm 1.2mm !important;
        font-size: 6pt;
        line-height: 1.15;
    }

    /* =========================
       FIELD TABLES
       ========================= */
    .ftable,
    .ftable6 {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .ftable td,
    .ftable6 td {
        border: none;
        padding: 0.55mm 0 !important;
        /* << lebih hemat */
        font-size: 6pt;
        line-height: 1.15;
    }

    .flbl {
        width: 30mm;
    }

    /* sedikit diperkecil */
    .fsep {
        width: 2.0mm;
        text-align: center;
    }

    .fval {
        width: auto;
    }

    /* =========================
       BAR HEADS (DATA PENGANGKUT, dst)
       ========================= */
    .barHeadCell,
    .barHeadCellSplit {
        border-top: 0.6pt solid #000;
        border-bottom: 0.6pt solid #000;
        padding: 0.9mm 1.2mm;
        /* << sebelumnya 2mm kebesaran */
        font-weight: bold;
        line-height: 1.1;
        font-size: 6pt;
    }

    .innerPad {
        padding: 1.3mm 2.2mm !important;
        /* kiri-kanan lebih lega supaya tidak nempel border */
    }

    /* Footer */
    .footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 6mm;
        font-size: 6pt;
        /* ikut 6 */
        line-height: 1.1;
    }

    /* Field table: format seperti referensi (label | : | value) */
    .ftable {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    /* override padding td ftable: jangan 0 kiri-kanan */
    .ftable td {
        border: none;
        font-size: 6pt;
        line-height: 1.15;
        padding: 0.55mm 0;
        /* default atas/bawah */
    }

    /* Lebar label diperkecil supaya ':' dekat */
    .ftable .flbl {
        width: 26mm;
        /* << samakan referensi */
        padding-left: 0.8mm;
        /* << tidak mepet border */
        padding-right: 0.6mm;
        white-space: nowrap;
        /* label tidak “melebar” ke bawah */
    }

    /* Kolon kecil dan rapat */
    .ftable .fsep {
        width: 2mm;
        /* << rapat seperti referensi */
        text-align: center;
        padding-left: 0;
        padding-right: 0;
    }

    /* Value punya padding kiri agar tidak nempel ':' */
    .ftable .fval {
        width: auto;
        padding-left: 0.8mm;
        padding-right: 0.8mm;
    }
</style>

<!-- =========================
     BC 3.3 HEADER
     ========================= -->
<table>
    <tr>
        <td colspan="2" style="padding:0; border:none;">
            <table class="bc33Header">
                <colgroup>
                    <col style="width:6mm;">
                    <col style="width:97mm;">
                    <col style="width:97mm;">
                </colgroup>

                <tr>
                    <td rowspan="3" style="border:0.6pt solid #000; padding:0; width:6mm; vertical-align:middle; text-align:center;">
                        <div style="height:100%; display:flex; align-items:center; justify-content:center;">
                            <div style="display:inline-block; transform:rotate(-90deg); transform-origin:center; font-weight:bold; font-size:9pt; letter-spacing:2pt; white-space:nowrap;">
                                HEADER
                            </div>
                        </div>
                    </td>

                    <td colspan="2" style="border:0.6pt solid #000; padding:0;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; border-right:0.6pt solid #000; width:22mm; font-weight:bold; font-size:10pt; text-align:center; padding:2mm;">
                                    BC 3.3
                                </td>
                                <td style="border:none; font-size:9pt; text-align:center; padding:2mm;">
                                    PEMBERITAHUAN EKSPOR MELALUI/DARI PUSAT LOGISTIK BERIKAT
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2" style="border:0.6pt solid #000; padding:2mm; vertical-align:top; font-size:7.5pt;">
                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:35mm;">Nomor Pengajuan</td>
                                <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.7mm 0;"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>

                        <div style="margin-top:3mm;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">A. Kantor Pengawas</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'kantor_pengawas', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">B. Kantor Pabean</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'kantor_pabean', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">C. Jenis Ekspor</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'jenis_ekspor', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">D. Kategori Ekspor</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'kategori_ekspor', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">E. Cara Perdagangan</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'cara_perdagangan', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">F. Cara Pembayaran</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'cara_pembayaran', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">G. Jenis BC 3.3</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'jenis_bc33', '-') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>

                    <td style="border:0.6pt solid #000; padding:2mm; vertical-align:top; font-size:7.5pt;">
                        <div class="center" style="margin-bottom:2mm;">Tanggal</div>
                        <div style="height:15mm;"></div>
                        <div class="right" style="font-size:7pt;">Halaman ke-1 dari 1</div>
                    </td>
                </tr>

                <tr>
                    <td style="border:0.6pt solid #000; padding:2mm; vertical-align:top; font-size:7.5pt;">
                        <div class="" style="margin-bottom:2mm;">J. PENDAFTARAN DAN PEMBAYARAN</div>

                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:35mm;">Pendaftaran</td>
                                <td style="border:none; padding:0.7mm 0; width:2mm;"></td>
                                <td style="border:none; padding:0.7mm 0;"></td>
                            </tr>
                        </table>

                        <table style="width:100%; border-collapse:collapse;">
                            <tr>
                                <td style="border:none; padding:0.7mm 0; width:35mm;">Nomor</td>
                                <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.7mm 0;"><?= v($data, 'pendaftaran_nomor', '') ?></td>

                                <td style="border:none; padding:0.7mm 0; padding-left:5mm; width:20mm;">Tanggal</td>
                                <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                <td style="border:none; padding:0.7mm 0;"><?= v($data, 'pendaftaran_tanggal', '') ?></td>
                            </tr>
                        </table>

                        <div style="margin-top:3mm;">
                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">Bukti Pembayaran</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;"></td>
                                    <td style="border:none; padding:0.7mm 0;"></td>
                                </tr>
                            </table>

                            <table style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td style="border:none; padding:0.7mm 0; width:35mm;">Nomor</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'bukti_bayar_nomor', '') ?></td>

                                    <td style="border:none; padding:0.7mm 0; padding-left:5mm; width:20mm;">Tanggal</td>
                                    <td style="border:none; padding:0.7mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.7mm 0;"><?= v($data, 'bukti_bayar_tanggal', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>

            </table>
        </td>
    </tr>
</table>

<!-- =========================
     BLOK UTAMA (H. DATA PERDAGANGAN)
     ========================= -->
<table class="b1 hwrap">
    <colgroup>
        <col style="width:6mm;">
        <col style="width:auto;">
    </colgroup>

    <tr>
        <td rowspan="3" style="border:0.6pt solid #000; padding:0; width:6mm; vertical-align:middle; text-align:center;">
            <div style="height:100%; display:flex; align-items:center; justify-content:center;">
                <div style="display:inline-block; transform:rotate(-90deg); transform-origin:center; font-weight:bold; font-size:9pt; letter-spacing:2pt; white-space:nowrap;">
                    HEADER
                </div>
            </div>
        </td>

        <td class="b1 p0">
            <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                <colgroup>
                    <col style="width:50%;">
                    <col style="width:50%;">
                </colgroup>

                <tr>
                    <!-- kolom tengah -->
                    <td style="border-right:0.6pt solid #000; padding:0;">
                        <table class="sec">
                            <tr>
                                <td class="secHead" style="padding:1mm;">EXPORTIR</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border: none; padding: 0.5mm 0; width: 25mm;">1. Identitas</td>
                                            <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                            <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'exportir_identitas', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border: none; padding: 0.5mm 0; width: 25mm;">2. Nama</td>
                                            <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                            <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'exportir_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border: none; padding: 0.5mm 0; width: 25mm;">3. Alamat</td>
                                            <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                            <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'exportir_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border: none; padding: 0.5mm 0; width: 25mm;">4. Niper</td>
                                            <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                            <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'exportir_niper', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border: none; padding: 0.5mm 0; width: 25mm;">5. Status</td>
                                            <td style="border: none; padding: 0.5mm 0; width: 2mm;">:</td>
                                            <td style="border: none; padding: 0.5mm 0;"><?= v($data, 'exportir_status', '') ?></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">PEMILIK BARANG</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">6. Identitas</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_identitas', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">7. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">8. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">9. Niper</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_niper', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">10. Status</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pemilik_status', '') ?></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">PPJK</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">11. NPWP</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ppjk_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">12. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ppjk_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">13. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'ppjk_alamat', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding:1mm;">PENERIMA</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">14. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penerima_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">15. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penerima_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">16. Negara</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'penerima_negara', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">PEMBELI</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">17. Nama</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pembeli_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">18. Alamat</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pembeli_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">19. Negara</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pembeli_negara', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- kolom kanan -->
                    <td style="padding:0;">
                        <table class="sec">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">DOKUMEN PELENGKAP PABEAN</td>
                            </tr>
                            <tr>
                                <td style="padding: 1.2mm 1.6mm;">
                                    <table style="width:100%; border-collapse:collapse; font-size:6pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0; white-space:nowrap;">20. Invoice</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:25%;"><?= v($data, 'invoice_no', '-') ?></td>

                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 3mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'invoice_tgl', '-') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0; white-space:nowrap;">21. Packing List</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:25%;"><?= v($data, 'packing_list_no', '-') ?></td>

                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 3mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'packing_list_tgl', '-') ?></td>
                                        </tr>
                                    </table>

                                    <div style="height:1.4mm;"></div>

            
                                    <div style="font-weight:bold; font-size:6pt; line-height:1.15; padding-bottom:0.9mm;">22. Dokumen Persyaratan</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:6pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 6mm; white-space:nowrap;">Jenis</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;" colspan="4"><?= v($data, 'dok_persyaratan_jenis', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 6mm; white-space:nowrap;">Nomor</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:25%;"><?= v($data, 'dok_persyaratan_nomor', '') ?></td>

                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 3mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'dok_persyaratan_tgl', '') ?></td>
                                        </tr>
                                    </table>

                                    <div style="height:1.4mm;"></div>

                                    <div style="font-weight:bold; font-size:6pt; line-height:1.15; padding-bottom:0.9mm;">23. Dokumen Fasilitas Fiskal di Bidang</div>

                                    <table style="width:100%; border-collapse:collapse; font-size:6pt; line-height:1.15;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 6mm; white-space:nowrap;">Jenis</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;" colspan="4"><?= v($data, 'dok_fiskal_jenis', '') ?></td>
                                        </tr>

                                        <tr>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 6mm; white-space:nowrap;">Nomor</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0; width:25%;"><?= v($data, 'dok_fiskal_nomor', '') ?></td>

                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 3mm; white-space:nowrap;">Tanggal</td>
                                            <td style="border:none; padding:0.5mm 2mm 0.5mm 0;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'dok_fiskal_tgl', '') ?></td>
                                        </tr>
                                    </table>

                                </td>
                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">PUSAT LOGISTIK BERIKAT</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">24. Nama PLB</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'plb_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">25. Lokasi/Kode</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'plb_lokasi_kode', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">26. Cara Pengangkutan ke</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'plb_cara_pengangkutan_ke', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">27. Perkiraan Tanggal</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'plb_perkiraan_tgl', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding:1mm;">DATA PENYERAHAN</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">28. Daerah Asal</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'daerah_asal', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">29. Cara Penyerahan</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'cara_penyerahan', '-') ?></td>
                                        </tr>
                                    </table>
                                </td>

                            </tr>
                        </table>

                        <table class="sec" style="border-top:0.6pt solid #000;">
                            <tr>
                                <td class="secHead" style="padding: 1mm;">DATA PENYERAHAN</td>
                            </tr>
                            <tr>
                                <td class="secBody" style="padding: 2mm 3mm;">
                                    <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">30. Bank Devisa hasil</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'bank_devisa_hasil', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">31. Jenis Valuta</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_valuta', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">32. Nilai Tukar</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_tukar', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">33. Nilai Barang</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_barang', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">34. FOB</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'fob', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td style="border:none; padding:0.5mm 0; width:25mm;">35. Nilai Maklon</td>
                                            <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                            <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nilai_maklon', '0.00') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- BAR HEAD: DATA PENGANGKUT -->
                <tr>
                    <td colspan="2" class="barHeadCell" style="padding: 1mm;">DATA PENGANGKUT</td>
                </tr>

                <!-- BODY: DATA PENGANGKUT -->
                <tr>
                    <td style="padding: 1mm 2mm; border-right:0.6pt solid #000; vertical-align:top;">
                        <div class="innerPad">
                            <table class="ftable" style="width:100%; border-collapse:collapse;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:0.8mm; width:25mm;">36. Cara</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'angkut_cara', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:0.8mm; width:25mm;">37. Sarana</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'angkut_sarana', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:0.8mm; width:25mm;">38. No. Pengangkut</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'angkut_no', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; padding-left:0.8mm; width:25mm;">39. Perkiraan Tanggal</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'angkut_perkiraan_tgl', '--') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="padding: 1mm 2mm; vertical-align:top;">
                        <div class="innerPad">
                            <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">40. Pelabuhan/Tempat Muat</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pelabuhan_muat', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">41. Pelabuhan Bongkar</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pelabuhan_bongkar', '') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">42. Pelabuhan Tujuan</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'pelabuhan_tujuan', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>

                <!-- BAR HEAD: DATA PETI KEMAS & DATA KEMASAN -->
                <tr>
                    <td class="barHeadCellSplit" style="border-right:0.6pt solid #000; padding:1mm">DATA PETI KEMAS</td>
                    <td class="barHeadCellSplit" style="padding: 1mm;">DATA KEMASAN</td>
                </tr>

                <!-- BODY: DATA PETI KEMAS & DATA KEMASAN -->
                <tr>
                    <td style="padding: 1mm 2mm; border-right:0.6pt solid #000; vertical-align:top;">
                        <div class="innerPad">
                            <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">43. Jumlah Peti kemas</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jumlah_peti_kemas', '0') ?></td>
                                </tr>
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">44. Nomor, Ukuran dan Status Peti</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'nomor_ukuran_status_peti', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                    <td style="padding: 1mm 2mm; vertical-align:top;">
                        <div class="innerPad">
                            <table class="ftable" style="width: 100%; border-collapse: collapse;">
                                <tr>
                                    <td style="border:none; padding:0.5mm 0; width:25mm;">45. Jenis, Jumlah dan Merek</td>
                                    <td style="border:none; padding:0.5mm 0; width:2mm;">:</td>
                                    <td style="border:none; padding:0.5mm 0;"><?= v($data, 'jenis_jumlah_merek_kemasan', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>

                <tr>
                    <td colspan="2" style="padding:0; border-top:0.6pt solid #000;">
                        <!-- BARHEAD: DATA BARANG EKSPOR -->
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <tr>
                                <td class="barHeadCell" style="border-left:0; border-right:0; padding:1mm;">
                                    DATA BARANG EKSPOR
                                </td>
                            </tr>
                        </table>

                        <!-- 46 & 47 (split 2 kolom) -->
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <col style="width:50%;">
                                <col style="width:50%;">
                            </colgroup>
                            <tr>
                                <td style="border-top:0; border-right:0.6pt solid #000; border-left:0; border-bottom:0; padding:1.2mm 1.6mm;">
                                    46. Berat Kotor (Kg) &nbsp;&nbsp;: <?= v($data, 'berat_kotor', '0.0000') ?>
                                </td>
                                <td style="border-top:0; border-left:0; border-right:0; border-bottom:0; padding:1.2mm 1.6mm;">
                                    47. Berat Bersih (Kg) &nbsp;&nbsp;: <?= v($data, 'berat_bersih', '0.0000') ?>
                                </td>
                            </tr>
                        </table>

                        <!-- Header kolom 48-53 -->
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <col style="width:6%;"> <!-- 48 -->
                                <col style="width:38%;"> <!-- 49 -->
                                <col style="width:17%;"> <!-- 50 -->
                                <col style="width:10%;"> <!-- 51 -->
                                <col style="width:16%;"> <!-- 52 -->
                                <col style="width:13%;"> <!-- 53 -->
                            </colgroup>

                            <tr>
                                <td style="border:0.6pt solid #000; border-left:0; padding:1.2mm 1.2mm; text-align:center; vertical-align:top;">
                                    48. No
                                </td>

                                <td style="border:0.6pt solid #000; padding:1.2mm 1.6mm; vertical-align:top;">
                                    49. - Pos Tarif/HS<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Uraian jenis barang (termasuk merk, tipe, dan spesifikasi wajib)<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Negara Asal Barang
                                </td>

                                <td style="border:0.6pt solid #000; padding:1.2mm 1.6mm; vertical-align:top;">
                                    50. Keterangan<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Kode Barang<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Persyaratan &amp; No. Unit<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Fasilitas &amp; No. Unit
                                </td>

                                <td style="border:0.6pt solid #000; padding:1.2mm 1.6mm; vertical-align:top;">
                                    51. - HE Barang<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- BK<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- PPh
                                </td>

                                <td style="border:0.6pt solid #000; padding:1.2mm 1.6mm; vertical-align:top;">
                                    52. - Jumlah &amp; Jenis Satuan<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Berat Bersih (Kg)<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- Volume (m3)
                                </td>

                                <td style="border:0.6pt solid #000; border-right:0; padding:1.2mm 1.6mm; vertical-align:top;">
                                    53. - Nilai Barang<br>
                                    &nbsp;&nbsp;&nbsp;&nbsp;- FOB
                                </td>
                            </tr>

                            <!-- 1 baris isi (contoh kosong seperti template) -->
                            <tr>
                                <td style="border:0.6pt solid #000; border-left:0; padding:2.2mm 1.2mm; text-align:center; vertical-align:middle;">
                                    1
                                </td>

                                <td style="border:0.6pt solid #000; padding:2.2mm 1.6mm; vertical-align:top;">
                                    -<br>
                                    - (Merk ; Tipe; ;Spesifikasi: )<br>
                                    -
                                </td>

                                <td style="border:0.6pt solid #000; padding:2.2mm 1.6mm; vertical-align:top;">
                                    -<br>
                                    -<br>
                                    -
                                </td>

                                <td style="border:0.6pt solid #000; padding:2.2mm 1.6mm; vertical-align:top;">
                                    - 0.00<br>
                                    - 0.00<br>
                                    - 0.00
                                </td>

                                <td style="border:0.6pt solid #000; padding:2.2mm 1.6mm; vertical-align:top;">
                                    - 0.00<br>
                                    - 0.0000<br>
                                    - 0.0000
                                </td>

                                <td style="border:0.6pt solid #000; border-right:0; padding:2.2mm 1.6mm; vertical-align:top;">
                                    - 0.0000<br>
                                    - 0.0000
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <!-- (JUDUL KAMU YANG SUDAH BENAR, JANGAN DIUBAH) -->
                <tr>
                    <td class="barHeadCellSplit center" style="border-right:0.6pt solid #000; padding:1mm;">
                        DATA PENERIMAAN NEGARA
                    </td>
                    <td class="barHeadCellSplit center" style="padding: 1mm;">
                        PEMBERITAHUAN PABEAN IMPOR <span style="font-weight:normal;">(dalam hal Ekspor)</span>
                    </td>
                </tr>

                <!-- =========================
     BODY: 54-60 (Kotak besar 2 kolom 50/50, masing-masing label|blank)
     ========================= -->
                <tr>
                    <!-- KOLOM A (KIRI) 54-57 -->
                    <td style="padding:0; border-right:0.6pt solid #000; vertical-align:top;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <!-- LABEL kecil -->
                                <col style="width:28mm;">
                                <!-- BLANK besar -->
                                <col style="width:auto;">
                            </colgroup>

                            <tr>
                                <td style="border-bottom:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    54. Bea Keluar
                                </td>
                                <td style="border-bottom:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <tr>
                                <td style="border-bottom:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    55. PPh
                                </td>
                                <td style="border-bottom:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <tr>
                                <td style="border-bottom:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    56. Lainnya
                                </td>
                                <td style="border-bottom:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <tr>
                                <td style="border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    57. Jumlah
                                </td>
                                <td style="padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>

                    <!-- KOLOM B (KANAN) 58-60 -->
                    <td style="padding:0; vertical-align:top;">
                        <table style=" border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <!-- LABEL kanan lebih lebar -->
                                <col style="width:38mm;">
                                <col style="width:auto;">
                            </colgroup>

                            <tr>
                                <td style="border-bottom:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    58. Jenis Dokumen
                                </td>
                                <td style="border-bottom:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <tr>
                                <td style="border-bottom:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    59. Nomor Pendaftaran
                                </td>
                                <td style="border-bottom:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <tr>
                                <td style="border-right:0.6pt solid #000; padding:1.2mm 1.6mm; white-space:nowrap;">
                                    60. Tanggal Pendaftaran
                                </td>
                                <td style="padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>

                            <!-- baris kosong biar tinggi kanan = kiri -->
                            <tr>
                                <td style="border-top:0.6pt solid #000; border-right:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                                <td style="border-top:0.6pt solid #000; padding:1.2mm 1.6mm;">
                                    &nbsp;
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

        </td>
    </tr>
</table>
</td>
</tr>
</table>
<!-- =========================
     I. TANDA TANGAN EKSPORTIR (TTD / PENGESAHAN)
     BOX 2 KOLOM 50% : 50%
     KIRI = TEKS, KANAN = TANGGAL (CENTER TOP)
     ========================= -->
<table style="width:100%; border-collapse:collapse; table-layout:fixed; border:0.6pt solid #000; margin-top:0;">
    <colgroup>
        <col style="width:50%;">
        <col style="width:50%;">
    </colgroup>

    <!-- BARIS 1: JUDUL (kiri) + TANGGAL (kanan) -->
    <tr>
        <td style="
            border:none;
            padding:1.2mm 1.6mm;
            font-size:6pt;
            line-height:1.15;
            font-weight:bold;
            vertical-align:top;
        ">
            I. TANDA TANGAN EKSPORTIR
        </td>

        <td style="
            border:none;
            padding:1.2mm 1.6mm 1.2mm 0;
            font-size:6pt;
            line-height:1.15;
            vertical-align:top;
            text-align:center;
            white-space:nowrap;
        ">
            16-01-2026
        </td>
    </tr>

    <!-- BARIS 2: PERNYATAAN (kiri) + AREA TTD (kanan) -->
    <tr>
        <td style="
            border:none;
            padding:1.2mm 1.6mm;
            font-size:6pt;
            line-height:1.15;
            vertical-align:top;
        ">
            Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
            diberitahukan dalam dokumen ini dan keabsahan dokumen pelengkap pabean yang<br>
            menjadi dasar pembuatan ini.
        </td>

        <!-- area kosong tanda tangan (kolom kanan) -->
        <td style="
            border:none;
            padding:1.2mm 1.6mm;
            font-size:6pt;
            line-height:1.15;
            vertical-align:top;
            height:10mm;
        ">
            &nbsp;
        </td>
    </tr>
</table>