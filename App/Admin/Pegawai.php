<?php

namespace App\Admin;

// Kelas Induk: Pegawai
class Pegawai {
    public int $nip;      // Nomor Induk Pegawai
    public string $nama;   // Nama Pegawai
    public int $no_hp;  // Nomor HP Pegawai
    public string $alamat;  // Alamat Pegawai

    // Konstruktor untuk inisialisasi pegawai
    public function __construct(int $nip, string $nama, int $no_hp, string $alamat) {
        $this->nip = $nip;
        $this->nama = $nama;
        $this->no_hp = $no_hp;
        $this->alamat = $alamat;
    }
}

