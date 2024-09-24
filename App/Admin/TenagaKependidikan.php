<?php

namespace App\Admin;

require_once 'Pegawai.php'; // Mengimpor kelas Pegawai

// Kelas Anak: TenagaKependidikan
class TenagaKependidikan extends Pegawai {
    public int $gaji_pokok; // Gaji pokok pegawai

    // Konstruktor untuk inisialisasi tenaga kependidikan
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, int $gaji_pokok) {
        parent::__construct($nip, $nama, $no_hp, $alamat); // Memanggil konstruktor kelas induk
        $this->gaji_pokok = $gaji_pokok;
    }

    // Metode untuk cuti
    public function cuti(): void {
        echo "{$this->nama} sedang cuti.\n";
    }
}
?>
