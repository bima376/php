<?php

class Orang {
    public $nama = 'default';
    public $usia = '0';
    public $tanggalLahir = '0000-00-00';
    public $hobi = 'default hoby';

    // Method construct
    // Function yg pertama kali dipanggil saat class dibuat 
    public function __construct($namaOrang, $usiaOrang, $tanggalLahirOrang, $hobiOrang) 
    {
        // proses inisiasi
            $this->nama = $namaOrang;
            $this->usia = $usiaOrang;
            $this->tanggalLahir = $tanggalLahirOrang;
            $this->hobi = $hobiOrang;

        // proses menampilkannya
            echo $this->nama. "\n";
            echo $this->usia. "\n";
            echo $this->tanggalLahir. "\n";
            echo $this->hobi. "\n";
            echo "\n";
    }
}
// membuat class dengan variabel
$bima = new Orang("bima", 19,"2005-01-27", "DesignUI/UX");
$ola = new Orang("ola", 20,"1999-01-01", "main");
$yuhui = new Orang("yuhui", 20,"1999-01-01", "MobileLegend");


// MENAMPILKAN DI TERMINAL
// php oop.php
