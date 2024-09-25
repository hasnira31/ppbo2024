<?php
require 'vendor/autoload.php';

use App\Admin\Dosen;

$dian = new Dosen("198411132015041001","Dian Prawira","62111111","Jln Purnama", "0013118405");
$dian->nip = 198411132015041001;
$dian->nama = "Dian Prawira";
$dian->no_hp = 62111111; 
$dian->alamat = "Jln Purnama";
$dian->nidn = "0013118405";

$dian->mengajar(); // Memanggil metode mengajar()


