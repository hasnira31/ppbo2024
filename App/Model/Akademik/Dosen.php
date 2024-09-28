<?php

namespace App\Admin;

require_once 'Pegawai.php'; // Mengimpor kelas Pegawai

// Kelas Anak: Dosen
class Dosen extends Pegawai {
    private string $nidn;   // Nomor Induk Dosen Nasional

    // Konstruktor untuk inisialisasi dosen
    public function __construct(int $nip, string $nama, string $no_hp, string $alamat, string $nidn) {
        parent::__construct($nip, $nama, $no_hp, $alamat); // Memanggil konstruktor kelas induk
        $this->nidn = $nidn;
    }

    // Getter untuk NIDN
    public function getNidn(): string {
        return $this->nidn;
    }

    // Setter untuk NIDN
    public function setNidn(string $nidn): void {
        $this->nidn = $nidn;
    }

    // Metode untuk mengajar
    public function mengajar(): void {
        echo "{$this->nama} sedang mengajar perkuliahan.\n";
    }
}
