<style>
    * {
        box-sizing: border-box;
    }

    body {
        font-family: Arial, sans-serif;
        font-size: 9pt;
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
        border: 0.6pt solid #000;
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
        padding: 1.2mm 1.6mm;
    }

    .px {
        padding: 0.8mm 1.2mm;
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

    .small {
        font-size: 8pt;
    }

    .hdrTitle {
        text-align: center;
        font-weight: normal;
        font-size: 11pt;
        line-height: 1.1;
        margin: 0;
        padding: 0;
    }

    .bcCodeRight {
        text-align: right;
        font-weight: bold;
        font-size: 10pt;
        margin: 0;
        padding: 0;
    }

    /* Wrapper form (border luar) */
    table.bc23Form {
        border: 0.6pt solid #000;
    }

    /* Cell default */
    table.bc23Form td {
        border: 0.6pt solid #000;
        padding: 1.1mm 1.4mm;
    }

    /* Row kecil header (Nomor Pengajuan / Halaman) */
    .bc23Top td {
        padding: 0.9mm 1.2mm;
    }

    /* Label : value layout */
    .kv {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .kv td {
        border: 0 !important;
        padding: 0;
    }

    .kv .lbl {
        width: 44mm;
    }

    .kv .sep {
        width: 4mm;
        text-align: center;
    }

    .kv .val {
        width: auto;
    }

    /* Kotak input kecil (checkbox/box) */
    .box {
        display: inline-block;
        width: 12mm;
        height: 5mm;
        border: 0.6pt solid #000;
        vertical-align: middle;
        margin: 0 2mm;
    }

    .boxLong {
        display: inline-block;
        width: 32mm;
        height: 5mm;
        border: 0.6pt solid #000;
        vertical-align: middle;
    }

    .boxMid {
        display: inline-block;
        width: 22mm;
        height: 5mm;
        border: 0.6pt solid #000;
        vertical-align: middle;
    }

    /* Kolom kiri/kanan utama */
    .colL {
        width: 55%;
    }

    .colR {
        width: 45%;
    }

    /* Sub-block tanpa border dobel: inner table border 0 */
    .inner {
        width: 100%;
        border-collapse: collapse;
        table-layout: fixed;
    }

    .inner td {
        border: 0 !important;
        padding: 0;
    }

    /* Baris tabel 33-39 header */
    table.itemsHead td {
        font-size: 8.6pt;
        line-height: 1.05;
        padding: 1mm 1.2mm;
    }

    /* Area tanda tangan C/E */
    .signCell {
        height: 38mm;
    }

    .signSmall {
        font-size: 8pt;
    }
</style>