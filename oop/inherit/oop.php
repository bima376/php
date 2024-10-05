<?php

class OrangTua {
    // properti
    public $ayah = "default";
    public $ibu = "default";
    // contruct
    public function __construct($ayah, $ibu)
    {
        $this->ayah = $ayah;
        $this->ibu = $ibu;
    }


    // Method untuk mencetak siapa ayah ibunya
    public function printOrangTua() {
        echo "Ayah: " .$this->ayah. " , Ibu: " .$this->ibu. "\n";
    }
}

class Anak extends OrangTua {
    // properti
    public $namaAnak = "default nama anak";
    // construc
    public function __construct($nama, $namaAyah, $namaIbu)
    {
        $this->namaAnak = $nama;
        parent::__construct($namaAyah, $namaIbu);
    }

    // Method untuk mencetak anak
    public function printAnak() {
        echo "Nama saya adalah: ". $this->namaAnak. "\n";
    }
}

$bima = new Anak("bima", "Mul", "Mur");

// method dari class Anak
$bima->printAnak();

// method dari class OrangTua
$bima->printOrangTua();



// BUKA TERMINAL UNTUK MELIHAT HASIL
// php oop.php