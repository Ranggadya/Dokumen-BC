<?php

namespace App\Pdf;

use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

class PdfRenderer
{
    private $mpdf;

    public function __construct()
    {
        // Konfigurasi mPDF
        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $this->mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => [210, 297], // A4 portrait
            'margin_left' => 10,
            'margin_right' => 10,
            'margin_top' => 10,
            'margin_bottom' => 10,
            'margin_header' => 5,
            'margin_footer' => 5,
            'default_font' => 'helvetica',
            'default_font_size' => 9,
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/../../assets/fonts',
            ]),
            'fontdata' => $fontData + [
                'helvetica' => [
                    'R' => 'Helvetica.ttf',
                    'B' => 'Helvetica-Bold.ttf',
                ],
            ],
            'tempDir' => __DIR__ . '/../../storage/tmp',
            'setAutoTopMargin' => 'stretch',
            'setAutoBottomMargin' => 'stretch',
        ]);

        $this->mpdf->SetDisplayMode('fullpage');
        $this->mpdf->SetTitle('BC 2.7 - Pembentahuan Pengeluaran');
        $this->mpdf->SetAuthor('Sistem Bea Cukai');
        $this->mpdf->SetCreator('PHP mPDF');
    }

    public function renderBC27Page1(array $data = [])
    {
        // Load template
        $templatePath = __DIR__ . '/../../Templates/bc27_page1.php';

        if (!file_exists($templatePath)) {
            throw new \Exception("Template not found: " . $templatePath);
        }

        // Merge dengan data default
        $defaultData = $this->getDefaultData();
        $data = array_merge($defaultData, $data);

        // Extract data untuk template
        extract($data);

        // Start output buffering
        ob_start();
        include $templatePath;
        $html = ob_get_clean();

        // Write to PDF
        $this->mpdf->WriteHTML($html);

        return $this;
    }

    public function output($filename = 'BC2.7.pdf', $outputType = 'I')
    {
        // Validasi output type
        $validOutputTypes = ['I', 'D', 'F', 'S'];
        if (!in_array($outputType, $validOutputTypes)) {
            $outputType = 'I';
        }

        return $this->mpdf->Output($filename, $outputType);
    }

    public function saveToFile($filepath)
    {
        $this->mpdf->Output($filepath, 'F');
        return file_exists($filepath);
    }

    public function getPDFContent()
    {
        return $this->mpdf->Output('', 'S');
    }

    private function getDefaultData()
    {
        return [
            'nomor_pengajuan' => '000027-317253-' . date('Ymd') . '-00002',
            'tanggal' => date('d-m-Y'),
            'halaman_sekarang' => 1,
            'total_halaman' => 3,
            'kantor_asal' => '-',
            'kantor_tujuan' => '-',
            'jenis_tpb_asal' => '-',
            'jenis_tpb_tujuan' => '-',
            'jenis_transaksi' => '-',
            'nomor_pendaftaran' => '',
            'cif_value' => '20.00',
            'diskon' => '0.00',
            'nilai_penggantian' => '0.00',
            'dasar_pengenaan' => '20.00',
            'harga_penyerahan' => '20.00',
            'ppn_pajak' => '0.00',
            'harga_perolehan' => '0.00',
            'ppnbm_pajak' => '0.00',
            'nilai_uang_muka' => '0.00',
            'volume' => '20.0000',
            'berat_bersih' => '20.0000',
        ];
    }
}
