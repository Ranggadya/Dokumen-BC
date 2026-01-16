<?php

namespace App\Pdf;

use Mpdf\Mpdf;
use Mpdf\Config\ConfigVariables;
use Mpdf\Config\FontVariables;

class Bc27Generator
{
    private Mpdf $mpdf;

    public function __construct()
    {
        $defaultConfig = (new ConfigVariables())->getDefaults();
        $fontDirs = $defaultConfig['fontDir'];

        $defaultFontConfig = (new FontVariables())->getDefaults();
        $fontData = $defaultFontConfig['fontdata'];

        $this->mpdf = new Mpdf([
            'mode' => 'utf-8',
            'format' => 'A4',
            'orientation' => 'P',

            // Samakan dengan CSS baseline (body font-size: 7.6pt)
            'default_font_size' => 7.6,

            // Pakai Arial sebagai default (bukan DejaVuSans)
            'default_font' => 'arial',

            // Margin sesuai template
            'margin_left' => 5,
            'margin_right' => 5,
            'margin_top' => 4.2,
            'margin_bottom' => 27.8,
            'margin_header' => 0,
            'margin_footer' => 0,

            'setAutoTopMargin' => 'stretch',
            'setAutoBottomMargin' => 'stretch',

            // Pastikan folder font Arial benar-benar ada
            'fontDir' => array_merge($fontDirs, [
                __DIR__ . '/../../assets/fonts',
            ]),
            'fontdata' => $fontData + [
                'arial' => [
                    'R' => 'arial.ttf',
                    'B' => 'arialbd.ttf',
                    // kalau kamu punya italic/bold-italic, tambah di sini:
                    // 'I' => 'ariali.ttf',
                    // 'BI' => 'arialbi.ttf',
                ],
            ],

            'tempDir' => sys_get_temp_dir(),
        ]);

        // Setelan stabil untuk form-table presisi
        $this->mpdf->useSubstitutions = false;

        // Ini yang sering bikin masalah pada nested table presisi:
        // matikan shrink agar tidak ada scaling yang “mengganggu”
        $this->mpdf->shrink_tables_to_fit = 0;

        // packTableData boleh, tapi kalau ada glitch, matikan juga
        $this->mpdf->packTableData = true;

        // simpleTables kadang mengubah cara render border/padding nested table.
        // Untuk template super presisi, lebih aman false.
        $this->mpdf->simpleTables = false;

        $this->mpdf->SetDisplayMode('fullpage');
        $this->mpdf->SetTitle('BC 2.7');
    }

    public function setFooter(string $printedFrom, string $printedTime): self
    {
        $this->mpdf->SetHTMLFooter('
            <div style="font-size:7pt; width:100%;">
              <div style="float:left;">Printed from ' . htmlspecialchars($printedFrom, ENT_QUOTES, 'UTF-8') . ' | ' . htmlspecialchars($printedTime, ENT_QUOTES, 'UTF-8') . '</div>
              <div style="float:right;">Halaman ke-{PAGENO} dari {nbpg}</div>
            </div>
        ');
        return $this;
    }

    public function addPageFromTemplate(string $templateFile, array $data): self
    {
        if (!is_file($templateFile)) {
            throw new \RuntimeException("Template tidak ditemukan: {$templateFile}");
        }

        // Helper sekali saja (tidak redeclare)
        require_once __DIR__ . '/../Support/bc27_helpers.php';

        ob_start();
        $dataLocal = $data; // hindari konflik variable
        include $templateFile; // template mengakses $dataLocal
        $html = ob_get_clean();

        $this->mpdf->WriteHTML($html);
        return $this;
    }

    public function addNewPage(): self
    {
        $this->mpdf->AddPage();
        return $this;
    }

    public function output(string $filename = 'BC_2.7.pdf', string $destination = 'I')
    {
        return $this->mpdf->Output($filename, $destination);
    }

    public function getMpdf(): Mpdf
    {
        return $this->mpdf;
    }
}
