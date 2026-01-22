<tr>
    <!-- KIRI 50% (colspan=3): 12 teks + KOTAK BAWAH SAJA -->
    <td colspan="3" class="cell-tight" style="height:5mm; padding:0;">
        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
            <tr>
                <!-- subkolom kiri: teks 12 -->
                <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top; width:84%; padding-right:0.2mm;">
                    <div style="height:5mm; line-height:5mm; white-space:nowrap;">
                        12. Nama Sarana Pengangkut &amp; No. Voy/Flight dan Bendera
                    </div>
                    <div style="height:5mm; line-height:5mm; white-space:nowrap;">/</div>
                </td>

                <!-- subkolom kanan: area KOTAK (cuma bawah) -->
                <td style="border-left:0.5pt solid #000; padding:0; width:16%; vertical-align:top;">
                    <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
                        <!-- baris atas: kosong (TANPA kotak) -->
                        <tr>
                            <td style="height:4mm; line-height:4mm; border:none; padding:0;"></td>
                        </tr>

                        <!-- baris bawah: KOTAK -->
                        <tr>
                            <td style="border:none; padding:0;">
                                <div style="
                                    border:0.5pt solid #000;
                                    height:5mm;
                                    line-height:5mm;
                                    text-align:center;
                                    margin:0;
                                    padding:0;
                                ">
                                    <?= v($data, 'kotak_12_bawah', '') ?>
                                </div>
                            </td>
                        </tr>
                    </table>
                </td>
            </tr>
        </table>
    </td>

    <!-- 23 Valuta: teks normal + KOTAK di bawah -->
    <td colspan="2" class="cell-tight" style="height:5mm; padding:0; vertical-align:top;">
        <table style="width:100%; border-collapse:collapse; table-layout:fixed;">
            <!-- baris atas: label 23 -->
            <tr>
                <td style="border:none; padding:0.8mm 1.2mm; vertical-align:top;">
                    <div style="height:5mm; line-height:5mm; white-space:nowrap;">
                        23. Valuta
                        <span style="display:inline-block; width:4mm; margin-left:2mm; text-align:center; vertical-align:middle;">:</span>
                        <span><?= v($data, 'valuta', '') ?></span>
                    </div>
                </td>
            </tr>

            <!-- baris bawah: KOTAK 23 -->
            <tr>
                <td style="border:none; padding:0 1.2mm 0.8mm 1.2mm; vertical-align:bottom;">
                    <div style="
                        border:0.5pt solid #000;
                        height:5mm;
                        line-height:5mm;
                        text-align:center;
                        margin:0;
                        padding:0;
                    ">
                        <?= v($data, 'kotak_23_bawah', '') ?>
                    </div>
                </td>
            </tr>
        </table>
    </td>

    <!-- KANAN 25% (24) : normal, tanpa kotak -->
    <td colspan="2" class="cell-tight" style="padding:0.8mm 1.2mm; vertical-align:top;">
        <div style="white-space:nowrap;">
            24. NDPBM
            <span style="display:inline-block; width:4mm; margin-left:2mm; text-align:center;">:</span>
            <span class="rightval"><?= v($data, 'ndpbm', '0.00') ?></span>
        </div>
    </td>
</tr>