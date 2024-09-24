<?php

namespace App\Admin;

require_once 'Pegawai.php'; // Mengimpor kelas Pegawai

// Kelas Anak: Dosen
class Dosen extends Pegawai {
    public string $nidn;   // Nomor Induk Dosen Nasional

    // Konstruktor untuk inisialisasi dosen
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat, string $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat); // Memanggil konstruktor kelas induk
        $this->nidn = $nidn;
    }

    // Metode untuk mengajar
    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan.\n";
    }
}
?>
