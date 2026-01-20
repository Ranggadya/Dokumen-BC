<?php

declare(strict_types=1);

// public/print_bc33.php

require __DIR__ . '/../vendor/autoload.php';
require_once __DIR__ . '/../src/Support/helpers.php';

use Mpdf\Mpdf;

try {
    // Contoh data (silakan ganti dari DB/API Anda)
    $data = [
        'nomor_pengajuan' => '000033-317253-20260117-00000',

        // HEADER
        'kantor_pengawas' => '',
        'kantor_pabean' => '',
        'jenis_ekspor' => '',
        'kategori_ekspor' => '',
        'cara_perdagangan' => '',
        'cara_pembayaran' => '',
        'jenis_bc33' => '-',
        'tanggal' => '17-01-2026',

        // J. PENDAFTARAN DAN PEMBAYARAN
        'pendaftaran_nomor' => '',
        'pendaftaran_tanggal' => '',
        'bukti_bayar_nomor' => '',
        'bukti_bayar_tanggal' => '',

        // H. DATA PERDAGANGAN
        'exportir_identitas' => '',
        'exportir_nama' => '',
        'exportir_alamat' => '',
        'exportir_niper' => '',
        'exportir_status' => '',

        'pemilik_identitas' => '',
        'pemilik_nama' => '',
        'pemilik_alamat' => '',
        'pemilik_niper' => '',
        'pemilik_status' => '',

        'ppjk_npwp' => '',
        'ppjk_nama' => '',
        'ppjk_alamat' => '',

        'penerima_nama' => '',
        'penerima_alamat' => '',
        'penerima_negara' => '',

        'pembeli_nama' => '',
        'pembeli_alamat' => '',
        'pembeli_negara' => '',

        // Dokumen pelengkap
        'invoice_no' => '-',
        'invoice_tgl' => '-',
        'packing_list_no' => '-',
        'packing_list_tgl' => '-',

        'dok_persyaratan_jenis' => '',
        'dok_persyaratan_nomor' => '',
        'dok_persyaratan_tgl' => '',

        'dok_fiskal_jenis' => '',
        'dok_fiskal_nomor' => '',
        'dok_fiskal_tgl' => '',

        // PLB
        'plb_nama' => '',
        'plb_lokasi_kode' => '',
        'plb_cara_pengangkutan_ke' => '',
        'plb_perkiraan_tgl' => '',

        // Data penyerahan (dua blok)
        'daerah_asal' => '',
        'cara_penyerahan' => '-',

        'bank_devisa_hasil' => '',
        'jenis_valuta' => '',
        'nilai_tukar' => '0.00',
        'nilai_barang' => '0.00',
        'fob' => '0.00',
        'nilai_maklon' => '0.00',

        // Pengangkut
        'angkut_cara' => '',
        'angkut_sarana' => '',
        'angkut_no' => '',
        'angkut_perkiraan_tgl' => '--',
        'pelabuhan_muat' => '',
        'pelabuhan_bongkar' => '',
        'pelabuhan_tujuan' => '',

        // Peti kemas / kemasan
        'jumlah_peti_kemas' => '0',
        'nomor_ukuran_status_peti' => '',
        'jenis_jumlah_merek_kemasan' => '',

        // Data barang ekspor (ringkas template default 1 baris)
        'berat_kotor' => '0.0000',
        'berat_bersih' => '0.0000',

        // Penerimaan negara
        'bea_keluar' => '',
        'pph' => '',
        'lainnya' => '',
        'jumlah' => '',

        // Pemberitahuan pabean impor (dalam hal ekspor)
        'impor_jenis_dok' => '',
        'impor_no_daftar' => '',
        'impor_tgl_daftar' => '',

        // Footer print
        'printed_app' => 'esikatERP',
        'printed_datetime' => '17-Jan-2026 | 14:27',
    ];

    // Render template
    ob_start();
    include __DIR__ . '/../src/templates/bc33_page.php';
    $html = ob_get_clean();

    $mpdf = new Mpdf([
        'mode' => 'utf-8',
        'format' => 'A4',
        'margin_top' => 6,
        'margin_right' => 6,
        'margin_bottom' => 10,
        'margin_left' => 6,
        'use_kwt' => true,
    ]);

    $mpdf->SetTitle('BC 3.3');
    $mpdf->WriteHTML($html);

    // Inline display
    $mpdf->Output('BC33.pdf', 'I');
} catch (\Throwable $e) {
    http_response_code(500);
    echo "Gagal generate PDF. Error: " . $e->getMessage();
}
