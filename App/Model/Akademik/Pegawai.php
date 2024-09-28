<?php

namespace App\Model\Akademik;

// Kelas Induk: Pegawai
class Pegawai {
    public int $nip;      // Nomor Induk Pegawai
    public string $nama;   // Nama Pegawai
    public string $no_hp;  // Nomor HP Pegawai (diubah ke string)
    public string $alamat;  // Alamat Pegawai

    // Konstruktor untuk inisialisasi pegawai
    public function __construct(int $nip, string $nama, string $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }

    // Getter untuk nomor HP
    public function getNoHp(): string {
        return $this->no_hp;
    }
}
