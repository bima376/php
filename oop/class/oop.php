<?php

class Orang {
    public $nama = 'Bima';
    public $usia = '19';
    public $tanggalLahir = '2005-01-27';
    public $hobi = 'DesignUI/UX';

    // Method constructor
    public function __construct()
    {
      // proses menampilkannya
        echo $this->nama. "\n";
        echo $this->usia. "\n";
        echo $this->tanggalLahir. "\n";
        echo $this->hobi. "\n";  
    }
}

// memanggil class dengan variabel
$bima = new Orang();


// MENAMPILKAN DI TERMINAL
// php oop.php
