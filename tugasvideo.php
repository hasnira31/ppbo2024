<?php
class Buku {
    public $judul;
    public $pengarang;
    public $tahunTerbit;

    public function __construct($judul, $pengarang, $tahunTerbit) {
        $this->judul = $judul;
        $this->pengarang = $pengarang;
        $this->tahunTerbit = $tahunTerbit;
    }

    public function info() {
        return "Judul: " . $this->judul . ", Pengarang: " . $this->pengarang . ", Tahun Terbit: " . $this->tahunTerbit;
    }
}

class Perpustakaan {
    private $koleksi = [];

    public function tambahBuku(Buku $buku) {
        $this->koleksi[] = $buku;
    }

    public function daftarBuku() {
        foreach ($this->koleksi as $buku) {
            echo $buku->info() . "<br>";
        }
    }
}
$perpustakaan = new Perpustakaan();

$buku1 = new Buku("Harry Potter", "J.K. Rowling", 1997);
$buku2 = new Buku("The Hobbit", "J.R.R. Tolkien", 1937);

$perpustakaan->tambahBuku($buku1);
$perpustakaan->tambahBuku($buku2);


echo "Daftar Buku di Perpustakaan:<br>";
$perpustakaan->daftarBuku();

