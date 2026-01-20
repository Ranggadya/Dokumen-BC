<?php

/** @var array $data */
?>

<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 7.4pt;
        line-height: 1.12;
        color: #000;
    }

    table {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    td {
        vertical-align: top;
        padding: 1.0mm 1.2mm;
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

    /* ===== WRAPPER (SATU KOTAK BESAR) ===== */
    table.outerBox {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: 2pt solid #000;
        /* border luar tunggal */
    }

    table.outerBox td {
        border: none;
        /* jangan bikin border lagi */
        padding: 0;
        /* biar rapat */
    }

    /* ===== HEADER BC33 ===== */
    table.bc33Header {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: none;
        /* PENTING: border luar dipegang outerBox */
    }

    table.bc33Header td {
        border: 1pt solid #000;
        padding: 2mm 3mm;
        vertical-align: top;
        font-size: 9pt;
    }

    .headerVertical {
        writing-mode: vertical-rl;
        text-orientation: mixed;
        font-weight: bold;
        font-size: 10pt;
        text-align: center;
        width: 10mm;
        padding: 3mm 1.5mm;
    }

    .bcNumber {
        font-weight: bold;
        font-size: 11pt;
        text-align: center;
        padding: 3mm;
    }

    .titleHeader {
        font-weight: bold;
        font-size: 10pt;
        text-align: center;
        padding: 3mm;
    }

    .halaman {
        text-align: right;
        font-size: 8pt;
        margin-bottom: 3mm;
    }

    .sectionJ {
        font-weight: bold;
        margin-bottom: 2mm;
    }

    table.alignTable {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    table.alignTable td {
        border: none !important;
        padding: 0.5mm 0;
        vertical-align: top;
        font-size: 9pt;
    }

    .fieldLabel {
        width: 35mm;
    }

    .fieldSep {
        width: 2mm;
        text-align: center;
    }

    .fieldValue {
        width: auto;
    }

    /* ===== BODY TABLE (H dst) ===== */
    table.bodyBox {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
        border: none;
        /* border luar dipegang outerBox */
    }

    table.bodyBox td {
        border: 0.6pt solid #000;
        /* grid body */
        padding: 1.0mm 1.2mm;
        vertical-align: top;
        font-size: 7.4pt;
    }

    /* footer */
    .footer {
        position: fixed;
        left: 0;
        right: 0;
        bottom: 6mm;
        font-size: 7.0pt;
    }
</style>

<!-- SATU KOTAK BESAR -->
<table class="outerBox">
    <tr>
        <td>

            <!-- =======================
                 HEADER BC 3.3
                 ======================= -->
            <table class="bc33Header">
                <colgroup>
                    <col style="width:10mm;">
                    <col style="width:95mm;">
                    <col style="width:auto;">
                </colgroup>

                <tr>
                    <td class="headerVertical" rowspan="3">HEADER</td>

                    <td colspan="2" style="padding:0;">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <col style="width:70px;">
                                <col style="width:auto;">
                            </colgroup>
                            <tr>
                                <td class="bcNumber" style="border:none; border-right:1pt solid #000;">BC 3.3</td>
                                <td class="titleHeader" style="border:none;">
                                    PEBERITAHUAN EKSPOR MELALUI/DARI PUSAT LOGISTIK BERIKAT
                                </td>
                            </tr>
                        </table>
                    </td>
                </tr>

                <tr>
                    <td rowspan="2" style="vertical-align:top;">
                        <table class="alignTable">
                            <tr>
                                <td class="fieldLabel">Nomor Pengajuan</td>
                                <td class="fieldSep">:</td>
                                <td class="fieldValue"><?= v($data, 'nomor_pengajuan') ?></td>
                            </tr>
                        </table>

                        <div style="margin-top:3mm;">
                            <table class="alignTable">
                                <tr>
                                    <td class="fieldLabel">A. Kantor Pengawas</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'kantor_pengawas', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">B. Kantor Pabean</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'kantor_pabean', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">C. Jenis Ekspor</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'jenis_ekspor', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">D. Kategori Ekspor</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'kategori_ekspor', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">E. Cara Perdagangan</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'cara_perdagangan', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">F. Cara Pembayaran</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'cara_pembayaran', '') ?></td>
                                </tr>
                                <tr>
                                    <td class="fieldLabel">G. Jenis BC 3.3</td>
                                    <td class="fieldSep">:</td>
                                    <td class="fieldValue"><?= v($data, 'jenis_bc33', '-') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>

                    <td style="vertical-align:top;">
                        <div style="text-align:center; margin-bottom:2mm;">Tanggal</div>
                        <div style="height:15mm;"></div>
                        <div class="halaman">Halaman ke-1 dari 1</div>
                    </td>
                </tr>

                <tr>
                    <td style="vertical-align:top;">
                        <div class="sectionJ">J. PENDAFTARAN DAN PEMBAYARAN</div>

                        <table class="alignTable">
                            <tr>
                                <td class="fieldLabel">Pendaftaran</td>
                                <td class="fieldSep"></td>
                                <td class="fieldValue"></td>
                            </tr>
                        </table>

                        <table class="alignTable">
                            <colgroup>
                                <col style="width:35mm;">
                                <col style="width:2mm;">
                                <col style="width:auto;">
                                <col style="width:20mm;">
                                <col style="width:2mm;">
                                <col style="width:auto;">
                            </colgroup>
                            <tr>
                                <td>Nomor</td>
                                <td>:</td>
                                <td><?= v($data, 'pendaftaran_nomor', '') ?></td>
                                <td style="padding-left:5mm;">Tanggal</td>
                                <td>:</td>
                                <td><?= v($data, 'pendaftaran_tanggal', '') ?></td>
                            </tr>
                        </table>

                        <div style="margin-top:3mm;">
                            <table class="alignTable">
                                <tr>
                                    <td class="fieldLabel">Bukti Pembayaran</td>
                                    <td class="fieldSep"></td>
                                    <td class="fieldValue"></td>
                                </tr>
                            </table>

                            <table class="alignTable">
                                <colgroup>
                                    <col style="width:35mm;">
                                    <col style="width:2mm;">
                                    <col style="width:auto;">
                                    <col style="width:20mm;">
                                    <col style="width:2mm;">
                                    <col style="width:auto;">
                                </colgroup>
                                <tr>
                                    <td>Nomor</td>
                                    <td>:</td>
                                    <td><?= v($data, 'bukti_bayar_nomor', '') ?></td>
                                    <td style="padding-left:5mm;">Tanggal</td>
                                    <td>:</td>
                                    <td><?= v($data, 'bukti_bayar_tanggal', '') ?></td>
                                </tr>
                            </table>
                        </div>
                    </td>
                </tr>
            </table>

            <!-- =======================
                 BODY (H. DATA PERDAGANGAN dst)
                 PENTING: BODY TABLE JANGAN PAKAI BORDER LUAR LAGI
                 ======================= -->
            <table class="bodyBox">
                <colgroup>
                    <col style="width:10mm;">
                    <col style="width:auto;">
                </colgroup>

                <!-- H. DATA PERDAGANGAN -->
                <tr>
                    <td class="b1 sectionHead" colspan="2">H. DATA PERDAGANGAN</td>
                </tr>

                <tr>
                    <!-- vertikal H. DATA PERDAGANGAN -->
                    <td class="b1 vcol">
                        <div class="vbox" style="min-height:165mm;">
                            <div class="vtext">H. DATA PERDAGANGAN</div>
                        </div>
                    </td>

                    <td class="b1 p0">
                        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                            <colgroup>
                                <col style="width:50%;">
                                <col style="width:50%;">
                            </colgroup>

                            <!-- ROW: Exportir vs Dokumen Pelengkap -->
                            <tr>
                                <td class="b1 bt0 bl0" style="border-right:0;">
                                    <div class="bold" style="padding:1mm 1.2mm; border-bottom:0.6pt solid #000;">EXPORTIR</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">1. Identitas</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'exportir_identitas', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">2. Nama</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'exportir_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">3. Alamat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'exportir_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">4. Niper</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'exportir_niper', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">5. Status</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'exportir_status', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">PEMILIK BARANG</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">6. Identitas</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pemilik_identitas', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">7. Nama</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pemilik_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">8. Alamat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pemilik_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">9. Niper</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pemilik_niper', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">10. Status</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pemilik_status', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">PPJK</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">11. NPWP</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'ppjk_npwp', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">12. Nama</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'ppjk_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">13. Alamat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'ppjk_alamat', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">PENERIMA</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">14. Nama</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'penerima_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">15. Alamat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'penerima_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">16. Negara</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'penerima_negara', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">PEMBELI</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">17. Nama</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pembeli_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">18. Alamat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pembeli_alamat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">19. Negara</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pembeli_negara', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">DATA PENGANGKUT</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">36. Cara</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'angkut_cara', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">37. Sarana</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'angkut_sarana', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">38. No. Pengangkut</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'angkut_no', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">39. Perkiraan Tanggal</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'angkut_perkiraan_tgl', '--') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">40. Pelabuhan/Tempat Muat</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pelabuhan_muat', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">41. Pelabuhan Bongkar</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pelabuhan_bongkar', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">42. Pelabuhan Tujuan</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'pelabuhan_tujuan', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">DATA PETI KEMAS</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">43. Jumlah Peti kemas</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'jumlah_peti_kemas', '0') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">44. Nomor, Ukuran dan Status Peti</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'nomor_ukuran_status_peti', '') ?></td>
                                        </tr>
                                    </table>
                                </td>

                                <!-- KANAN -->
                                <td class="b1 bt0 br0" style="border-left:0;">
                                    <div class="bold" style="padding:1mm 1.2mm; border-bottom:0.6pt solid #000;">DOKUMEN PELENGKAP PABEAN</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">20. Invoice</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'invoice_no', '-') ?></td>
                                            <td class="flbl" style="width:18mm;">Tanggal</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'invoice_tgl', '-') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">21. Packing List</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'packing_list_no', '-') ?></td>
                                            <td class="flbl" style="width:18mm;">Tanggal</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'packing_list_tgl', '-') ?></td>
                                        </tr>
                                    </table>

                                    <div style="padding:0.5mm 1.2mm;">
                                        <div class="bold">22. Dokumen Persyaratan</div>
                                        <table class="ftable">
                                            <tr>
                                                <td class="flbl">Jenis</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_persyaratan_jenis', '') ?></td>
                                            </tr>
                                            <tr>
                                                <td class="flbl">Nomor</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_persyaratan_nomor', '') ?></td>
                                                <td class="flbl" style="width:18mm;">Tanggal</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_persyaratan_tgl', '') ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div style="padding:0.5mm 1.2mm; border-top:0.6pt solid #000;">
                                        <div class="bold">23. Dokumen Fasilitas Fiskal di Bidang</div>
                                        <table class="ftable">
                                            <tr>
                                                <td class="flbl">Jenis</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_fiskal_jenis', '') ?></td>
                                            </tr>
                                            <tr>
                                                <td class="flbl">Nomor</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_fiskal_nomor', '') ?></td>
                                                <td class="flbl" style="width:18mm;">Tanggal</td>
                                                <td class="fsep">:</td>
                                                <td class="fval"><?= v($data, 'dok_fiskal_tgl', '') ?></td>
                                            </tr>
                                        </table>
                                    </div>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">PUSAT LOGISTIK BERIKAT</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">24. Nama PLB</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'plb_nama', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">25. Lokasi/Kode</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'plb_lokasi_kode', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">26. Cara Pengangkutan ke</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'plb_cara_pengangkutan_ke', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">27. Perkiraan Tanggal</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'plb_perkiraan_tgl', '') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">DATA PENYERAHAN</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">28. Daerah Asal</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'daerah_asal', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">29. Cara Penyerahan</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'cara_penyerahan', '-') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">DATA PENYERAHAN</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">30. Bank Devisa hasil</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'bank_devisa_hasil', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">31. Jenis Valuta</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'jenis_valuta', '') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">32. Nilai Tukar</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'nilai_tukar', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">33. Nilai Barang</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'nilai_barang', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">34. FOB</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'fob', '0.00') ?></td>
                                        </tr>
                                        <tr>
                                            <td class="flbl">35. Nilai Maklon</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'nilai_maklon', '0.00') ?></td>
                                        </tr>
                                    </table>

                                    <div class="bold" style="padding:1mm 1.2mm; border-top:0.6pt solid #000; border-bottom:0.6pt solid #000;">DATA KEMASAN</div>
                                    <table class="ftable" style="padding:1mm 1.2mm;">
                                        <tr>
                                            <td class="flbl">45. Jenis, Jumlah dan Merek</td>
                                            <td class="fsep">:</td>
                                            <td class="fval"><?= v($data, 'jenis_jumlah_merek_kemasan', '') ?></td>
                                        </tr>
                                    </table>
                                </td>
                            </tr>

                            <!-- DATA BARANG EKSPOR (ringkas sesuai template 1 halaman) -->
                            <tr>
                                <td class="b1 bl0 bb0" colspan="2" style="border-top:0.6pt solid #000; padding:0;">
                                    <div class="bold" style="padding:1mm 1.2mm; border-bottom:0.6pt solid #000;">DATA BARANG EKSPOR</div>

                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <td style="width:50%; border-right:0.6pt solid #000; padding:1mm 1.2mm;">
                                                46. Berat Kotor (Kg) : <?= v($data, 'berat_kotor', '0.0000') ?>
                                            </td>
                                            <td style="width:50%; padding:1mm 1.2mm;">
                                                47. Berat Bersih (Kg) : <?= v($data, 'berat_bersih', '0.0000') ?>
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- header kolom barang -->
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <colgroup>
                                            <col style="width:5%;">
                                            <col style="width:30%;">
                                            <col style="width:20%;">
                                            <col style="width:15%;">
                                            <col style="width:15%;">
                                            <col style="width:15%;">
                                        </colgroup>
                                        <tr>
                                            <td class="b1 bl0" style="text-align:center; padding:1mm 0.8mm;">
                                                48.<br>No
                                            </td>
                                            <td class="b1" style="padding:1mm 1.2mm;">
                                                49. - Pos Tarif/HS<br>
                                                - Uraian jenis barang (termasuk merk, tipe, dan spesifikasi wajib)<br>
                                                - Negara Asal Barang
                                            </td>
                                            <td class="b1" style="padding:1mm 1.2mm;">
                                                50. Keterangan<br>
                                                - Kode Barang<br>
                                                - Persyaratan &amp; No. Unit<br>
                                                - Fasilitas &amp; No. Unit
                                            </td>
                                            <td class="b1" style="padding:1mm 1.2mm;">
                                                51. - HE Barang<br>- BK<br>- PPh
                                            </td>
                                            <td class="b1" style="padding:1mm 1.2mm;">
                                                52. - Jumlah &amp; Jenis Satuan<br>
                                                - Berat Bersih (Kg)<br>
                                                - Volume (m3)
                                            </td>
                                            <td class="b1 br0" style="padding:1mm 1.2mm;">
                                                53. - Nilai Barang<br>- FOB
                                            </td>
                                        </tr>

                                        <!-- 1 baris contoh (sesuai PDF contoh kosong) -->
                                        <tr>
                                            <td class="b1 bl0" style="text-align:center; padding:2mm 0.8mm;">1</td>
                                            <td class="b1" style="padding:2mm 1.2mm;">-</td>
                                            <td class="b1" style="padding:2mm 1.2mm;">-</td>
                                            <td class="b1" style="padding:2mm 1.2mm;">-</td>
                                            <td class="b1" style="padding:2mm 1.2mm;">-</td>
                                            <td class="b1 br0" style="padding:2mm 1.2mm;">-</td>
                                        </tr>
                                    </table>

                                    <!-- penerimaan negara + pemberitahuan pabean impor -->
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <colgroup>
                                            <col style="width:50%;">
                                            <col style="width:50%;">
                                        </colgroup>
                                        <tr>
                                            <td class="b1 bl0" style="border-right:0; padding:0;">
                                                <div class="bold center" style="padding:1mm 1.2mm; border-bottom:0.6pt solid #000;">
                                                    DATA PENERIMAAN NEGARA
                                                </div>
                                                <table class="ftable" style="padding:1mm 1.2mm;">
                                                    <tr>
                                                        <td class="flbl">54. Bea Keluar</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'bea_keluar', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flbl">55. PPh</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'pph', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flbl">56. Lainnya</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'lainnya', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flbl">57. Jumlah</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'jumlah', '') ?></td>
                                                    </tr>
                                                </table>
                                            </td>

                                            <td class="b1 br0" style="border-left:0; padding:0;">
                                                <div class="bold center" style="padding:1mm 1.2mm; border-bottom:0.6pt solid #000;">
                                                    PEMBERITAHUAN PABEAN IMPOR (dalam hal Ekspor)
                                                </div>
                                                <table class="ftable" style="padding:1mm 1.2mm;">
                                                    <tr>
                                                        <td class="flbl">58. Jenis Dokumen</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'impor_jenis_dok', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flbl">59. Nomor Pendaftaran</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'impor_no_daftar', '') ?></td>
                                                    </tr>
                                                    <tr>
                                                        <td class="flbl">60. Tanggal Pendaftaran</td>
                                                        <td class="fsep">:</td>
                                                        <td class="fval"><?= v($data, 'impor_tgl_daftar', '') ?></td>
                                                    </tr>
                                                </table>
                                            </td>
                                        </tr>
                                    </table>

                                    <!-- TANDA TANGAN -->
                                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                                        <tr>
                                            <td class="b1 bl0 br0" style="border-top:0; padding:1mm 1.2mm;">
                                                <div class="bold">I. TANDA TANGAN EKSPORTIR</div>
                                                <div style="margin-top:1mm;">
                                                    Dengan ini saya menyatakan bertanggung jawab atas kebenaran hal-hal yang<br>
                                                    diberitahukan dalam dokuemn ini dan keabsahan dokumen pelengkap pabean yang<br>
                                                    menjadi dasar pembuatan ini.
                                                </div>
                                            </td>
                                            <td class="b1 br0" style="border-top:0; width:30%; padding:1mm 1.2mm; vertical-align:bottom;">
                                                <div class="center">, <?= v($data, 'tanggal', '17-01-2026') ?></div>
                                                <div style="height:14mm;"></div>
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
</table>

<div class="footer">
    Printed from <?= v($data, 'printed_app', 'esikatERP') ?> | <?= v($data, 'printed_datetime', '') ?>
    <span style="float:right;">Halaman ke-1 dari 1</span>
</div>