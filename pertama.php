<?php
date_default_timezone_set('Asia/Jakarta');
$nama = readline('Masukkan nama Anda : ');
$waktu = date('H:i'); // Menggunakan format 'H:i' untuk jam dan menit
echo "Halo {$nama}, sekarang pukul {$waktu}\n";
