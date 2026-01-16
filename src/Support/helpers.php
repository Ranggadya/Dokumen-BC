<?php

declare(strict_types=1);

function h(string $s): string
{
    return htmlspecialchars($s, ENT_QUOTES, 'UTF-8');
}

function nvl(?string $s, string $fallback = '-'): string
{
    $s = $s ?? '';
    $s = trim($s);
    return $s === '' ? $fallback : $s;
}

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


if (!function_exists('v')) {
    function v(array $data, string $key, string $default = ''): string
    {
        $val = $data[$key] ?? $default;
        return htmlspecialchars((string)$val, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('vv')) {
    function vv(array $row, string $key, string $default = ''): string
    {
        $val = $row[$key] ?? $default;
        return htmlspecialchars((string)$val, ENT_QUOTES, 'UTF-8');
    }
}

if (!function_exists('row3')) {
    function row3(string $label, string $value, string $no = ''): string
    {
        $noCell = $no !== '' ? $no . '.' : '';
        return '
        <tr>
          <td style="width:6mm; white-space:nowrap;">' . htmlspecialchars($noCell, ENT_QUOTES, 'UTF-8') . '</td>
          <td style="width:34mm;">' . htmlspecialchars($label, ENT_QUOTES, 'UTF-8') . '</td>
          <td style="width:3mm;" class="center">:</td>
          <td>' . htmlspecialchars($value, ENT_QUOTES, 'UTF-8') . '</td>
        </tr>';
    }
}

/**
 * Row 3 kolom: Label | (kolom jarak + :) | Value
 * colSepMm = lebar kolom untuk ":" (ini yang bikin jarak 10mm+)
 */
if (!function_exists('rowSep')) {
    function rowSep(string $label, string $value, int $colSepMm = 10): string
    {
        $label = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

        return '
        <tr>
            <td class="adgLabel">' . $label . '</td>
            <td class="adgSep" style="width:' . $colSepMm . 'mm;">:</td>
            <td class="adgVal">' . $value . '</td>
        </tr>';
    }
}

if (!function_exists('rowSepIndent')) {
    function rowSepIndent(string $label, string $value, int $colSepMm = 10): string
    {
        $label = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
        $value = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

        return '
        <tr>
            <td class="adgLabel adgIndent">' . $label . '</td>
            <td class="adgSep" style="width:' . $colSepMm . 'mm;">:</td>
            <td class="adgVal">' . $value . '</td>
        </tr>';
    }
}
if (!function_exists('rowKV')) {
    function rowKV(string $label, string $value, bool $indent = false): string
    {
        $labelEsc = htmlspecialchars($label, ENT_QUOTES, 'UTF-8');
        $valueEsc = htmlspecialchars($value, ENT_QUOTES, 'UTF-8');

        $labelClass = $indent ? 'adgLabel adgIndent' : 'adgLabel';

        return '
        <tr>
            <td class="' . $labelClass . '">' . $labelEsc . '</td>
            <td class="adgSep">:</td>
            <td class="adgVal">' . $valueEsc . '</td>
        </tr>';
    }
}

