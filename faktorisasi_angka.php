<?php

function faktorisasi($angka)
{
    $faktor = [];

    while ($angka != 1) {
        for ($i = 2; $i <= $angka; $i++) {
            if ($angka % $i == 0) {
                array_push($faktor, $i);
                $angka = $angka / $i;
                break;
            }
        }
    }

    return $faktor;
}

function format_faktorisasi($angka)
{
    $faktor = faktorisasi($angka);

    return $angka . ' = ' . implode(' x ', $faktor) . "\n";
}

// Untuk testing hasilnya
echo var_dump(faktorisasi(30));
echo format_faktorisasi(30);
echo format_faktorisasi(120);
echo format_faktorisasi(2452000);
echo format_faktorisasi(1123131411411312);
