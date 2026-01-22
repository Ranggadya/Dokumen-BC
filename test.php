<!-- KANAN (D) -->
<td style="width:50%; border:0.5pt solid #000; border-top:0; border-left:0; padding:0; vertical-align:top;">
    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">

        <!-- ROW: JENIS TRANSAKSI (di atas D, tanpa garis atas) -->
        <!-- sengaja border:none supaya tidak muncul garis pemisah tambahan -->
        <tr>
            <td style="padding:1.2mm 2mm; border:none;">
                <div style="font-size:7.5pt;">
                    <span style="font-weight:700;">JENIS TRANSAKSI</span>
                    <span style="display:inline-block; width:2mm; text-align:center;">:</span>
                    <?= $v($data, 'jenis_transaksi', '-') ?>
                </div>
            </td>
        </tr>

        <!-- D. DIISI OLEH BEA DAN CUKAI -->
        <!-- tanpa border-top supaya tidak ada garis di atas D -->
        <tr>
            <td style="padding:2mm; border-top:0; border-bottom:0.5pt solid #000;">
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

        <!-- 19-25 (Valuta, NDPBM, Nilai CIF, Harga Penyerahan, Uang Muka, Diskon, Dasar Pengenaan + pajak) -->
        <tr>
            <td style="padding:2mm; border-bottom:0.5pt solid #000;">
                <table style="width:100%; border-collapse:collapse; font-size:7.5pt; line-height:1.15;">
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">19. Valuta</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0; width:18mm;"><?= $v($data, 'valuta', '-') ?></td>

                        <td style="border:none; padding:0.5mm 0; width:18mm;">20. NDPBM</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;"><?= $v($data, 'ndpbm', '0.00') ?></td>
                    </tr>

                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">21. Nilai CIF</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'nilai_cif', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">22. Harga Penyerahan</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'harga_penyerahan', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">23. Uang Muka</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'uang_muka', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">24. Diskon</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'diskon', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">25. Dasar Pengenaan</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'dasar_pengenaan', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">&nbsp;&nbsp;- PPN Pajak (0%)</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'ppn_pajak', '0.00') ?></td>
                    </tr>
                    <tr>
                        <td style="border:none; padding:0.5mm 0; width:20mm;">&nbsp;&nbsp;- PPNBM Pajak (0%)</td>
                        <td style="border:none; padding:0.5mm 1.2mm; width:2mm; text-align:center;">:</td>
                        <td style="border:none; padding:0.5mm 0;" colspan="4"><?= $v($data, 'ppnbm_pajak', '0.00') ?></td>
                    </tr>
                </table>
            </td>
        </tr>
    </table>
</td>