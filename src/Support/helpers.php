<?php
declare(strict_types=1);

/**
 * Escape HTML (untuk aman di HTML/PDF).
 */
if (!function_exists('h')) {
    function h(string $s): string
    {
        return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
    }
}

/**
 * Null/empty fallback (default "-").
 */
if (!function_exists('nvl')) {
    function nvl(?string $s, string $fallback = '-'): string
    {
        $s = $s ?? '';
        $s = trim($s);
        return $s === '' ? $fallback : $s;
    }
}

/**
 * Pastikan string valid UTF-8 (mPDF sensitif encoding).
 */
if (!function_exists('ensure_utf8')) {
    function ensure_utf8(string $s): string
    {
        // Jika sudah valid UTF-8, kembalikan apa adanya
        if (preg_match('//u', $s)) {
            return $s;
        }

        // Coba deteksi encoding umum; fallback ke ISO-8859-1
        $enc = mb_detect_encoding($s, ['UTF-8', 'Windows-1252', 'ISO-8859-1'], true) ?: 'ISO-8859-1';
        return mb_convert_encoding($s, 'UTF-8', $enc);
    }
}

/**
 * Ambil value dari $data dengan default, lalu escape.
 * NOTE: v() mengembalikan string yang sudah di-escape.
 */
if (!function_exists('v')) {
    function v(array $data, string $key, string $default = ''): string
    {
        $val = $data[$key] ?? $default;
        return h((string)$val);
    }
}

if (!function_exists('vv')) {
    function vv(array $row, string $key, string $default = ''): string
    {
        $val = $row[$key] ?? $default;
        return h((string)$val);
    }
}

if (!function_exists('row3')) {
    function row3(string $label, string $value, string $no = ''): string
    {
        // value di sini diasumsikan "raw string", kita escape lagi agar aman
        // (double-escape tidak terjadi bila $value belum di-escape)
        $noCell = $no !== '' ? $no . '.' : '';

        return '
        <tr>
          <td style="width:6mm; white-space:nowrap;">' . h($noCell) . '</td>
          <td style="width:34mm;">' . h($label) . '</td>
          <td style="width:3mm;" class="center">:</td>
          <td>' . h($value) . '</td>
        </tr>';
    }
}

/**
 * Row 3 kolom: Label | ":" | Value
 * colSepMm = lebar kolom ":".
 */
if (!function_exists('rowSep')) {
    function rowSep(string $label, string $value, int $colSepMm = 10): string
    {
        return '
        <tr>
            <td class="adgLabel">' . h($label) . '</td>
            <td class="adgSep" style="width:' . (int)$colSepMm . 'mm;">:</td>
            <td class="adgVal">' . h($value) . '</td>
        </tr>';
    }
}

if (!function_exists('rowSepIndent')) {
    function rowSepIndent(string $label, string $value, int $colSepMm = 10): string
    {
        return '
        <tr>
            <td class="adgLabel adgIndent">' . h($label) . '</td>
            <td class="adgSep" style="width:' . (int)$colSepMm . 'mm;">:</td>
            <td class="adgVal">' . h($value) . '</td>
        </tr>';
    }
}

if (!function_exists('rowKV')) {
    function rowKV(string $label, string $value, bool $indent = false): string
    {
        $labelClass = $indent ? 'adgLabel adgIndent' : 'adgLabel';

        return '
        <tr>
            <td class="' . $labelClass . '">' . h($label) . '</td>
            <td class="adgSep">:</td>
            <td class="adgVal">' . h($value) . '</td>
        </tr>';
    }
}
