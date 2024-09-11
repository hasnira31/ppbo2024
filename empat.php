<?php

require_once 'Author.php';
require_once 'Book.php';
require_once 'Publisher.php';

$author = new Author("J.K. Rowling", "Penulis buku Harry Potter");

// Menampilkan nama penulis
echo "Menampilkan Nama Penulis:\n";
print_r($author->show('name'));

// Menampilkan deskripsi penulis
echo "Menampilkan Deskripsi Penulis:\n";
print_r($author->show('description'));

// Menampilkan semua informasi penulis
echo "Menampilkan Semua Informasi Penulis:\n";
print_r($author->show('all'));

// Menampilkan dengan tipe yang tidak valid
echo "Menampilkan Tipe yang Tidak Valid:\n";
print_r($author->show('invalid'));


// Contoh penggunaan kelas Book
$book1 = new Book(123456789, "Belajar PHP", "Panduan lengkap untuk belajar PHP.", "Teknologi", "Indonesia", 300, "John Doe", "Penerbit XYZ");

// Menampilkan semua informasi buku
print_r($book1->showAll());

// Menampilkan detail buku berdasarkan ISBN
print_r($book1->detail(123456789));
print_r($book1->detail(987654321)); // Buku tidak ditemukan


// Contoh penggunaan kelas Publisher
$publisher = new Publisher("Penerbit ABC", "Jl. Contoh No. 123", 123456789);

// Menampilkan informasi penerbit
echo "Nama Penerbit: " . $publisher->name . "\n";
echo "Alamat Penerbit: " . $publisher->address . "\n";
echo "Nomor Telepon Penerbit: " . $publisher->getPhone() . "\n";

// Mengubah nomor telepon
$publisher->setPhone(987654321);
echo "Nomor Telepon Penerbit setelah diubah: " . $publisher->getPhone() . "\n";
