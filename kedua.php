<?php

// Fungsi untuk menghitung luas lingkaran
function luasLingkaran($jari) : float {
    return 3.14 * $jari * $jari;
}

// Fungsi untuk menghitung keliling lingkaran
function kelilingLingkaran($jari) : float {
    return 2 * 3.14 * $jari;
}

// Fungsi untuk menghitung volume bola
function volumeBola($jari) : float {
    return (4/3) * 3.14 * pow($jari, 3);
}

// Fungsi untuk menghitung volume tabung
function volumeTabung($jari, $tinggi) : float {
    return 3.14 * pow($jari, 2) * $tinggi;
}

// Fungsi untuk menghitung volume kerucut
function volumeKerucut($jari, $tinggi) : float {
    return (1/3) * 3.14 * pow($jari, 2) * $tinggi;
}

// Contoh penggunaan
$jari = 45;
$tinggiTabung = 100;
$tinggiKerucut = 60;

$luas = luasLingkaran($jari);
$keliling = kelilingLingkaran($jari);
$volumeBola = volumeBola($jari);
$volumeTabung = volumeTabung($jari, $tinggiTabung);
$volumeKerucut = volumeKerucut($jari, $tinggiKerucut);

echo "Luas Lingkaran: {$luas}\n";
echo "Keliling Lingkaran: {$keliling}\n";
echo "Volume Bola: {$volumeBola}\n";
echo "Volume Tabung: {$volumeTabung}\n";
echo "Volume Kerucut: {$volumeKerucut}\n";
