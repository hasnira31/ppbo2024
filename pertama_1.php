<?php
date_default_timezone_set('Asia/Jakarta');
$nama = readline('Masukkan nama Anda : ');
$waktu = date('H:i'); // Menggunakan format 'H:i' untuk jam dan menit
$jam = date('H'); // Mendapatkan jam saat ini

// Menentukan sapaan berdasarkan jam
if ($jam > 19) {
    $sapaan = "Selamat Malam";
} elseif ($jam > 15) {
    $sapaan = "Selamat Sore";
} elseif ($jam > 11) {
    $sapaan = "Selamat Siang";
} elseif ($jam > 5) {
    $sapaan = "Selamat Pagi";
} else {
    $sapaan = "Selamat Dini Hari";
}

echo "{$sapaan}, {$nama}, sekarang pukul {$waktu}\n";
