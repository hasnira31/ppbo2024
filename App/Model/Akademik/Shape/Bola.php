<?php

class Bola
{
    const PHI = 3.14;
    public $jari_jari;

    // Konstruktor
    public function __construct($jari_jari) {
        $this->jari_jari = $jari_jari;
    }

    // Metode untuk menghitung volume
    public function volume() : float {
        return (4/3) * self::PHI * pow($this->jari_jari, 3);
    }
}