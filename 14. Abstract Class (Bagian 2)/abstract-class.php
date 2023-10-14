<?php

// Konsep yang digunakan untuk mengatur akses dari property dan method pada sebuah objek
// ada 3 keyword visibility: public, protected, dan private
// public dapat digunakan dimana saja, bahkan diluar kelas
// protected hanya dapat digunakan di dalam sebuah kelas beserta turunannya
// private hanya dapat digunakan di dalam sebuah kelas tertentu saja

// kenapa? 
// hanya memperlihatkan aspek dari class yang dibutuhkan oleh 'client'
// menentukan kebutuhan yang jelas untuk object
// memberikan kendali pada kode untuk menghadiri 'bug'

use CetakInfoProduk as GlobalCetakInfoProduk;

abstract class Produk {
    // Property
    private $judul,
            $penulis, 
            $penerbit, 
            $harga, 
            $diskon = 0;

    // Constructor
    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this->judul = $judul;
        $this->penulis = $penulis;
        $this->penerbit = $penerbit;
        $this->harga = $harga;
    }
     
    //Method
    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }

    public function setJudul($judul) {
        $this->judul = $judul;
    }
    
    public function getJudul() {
        return $this->judul;
    }

    public function setPenulis($penulis) {
        $this->penulis = $penulis;
    }

    public function getPenulis() {
        return $this->penulis;
    }

    public function setPenerbit($penerbit) {
        $this->penerbit = $penerbit;
    }

    public function getPenerbit() {
        return $this->penerbit;
    }

    public function setHarga($harga) {
        $this->harga = $harga;
    }

    public function getHarga() {
        return $this->harga = ($this->harga * $this->diskon / 100);
    }

    public function setDiskon($diskon) {
        $this->diskon = $diskon;
    }

    public function getDiskon() {
        return $this->diskon;
    }

   abstract public function getInfoProduk();
   
   public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Komik extends Produk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga); // Overriding
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman";
        return $str;
    }
}

class Game extends Produk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga); // Overriding
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }

   
}

class cetakInfoProduk {
    public $daftarProduk = array();

    public function tambahProduk( Produk $produk ) {
        $this-> daftarProduk[] = $produk;
    }

    public function cetak() {
        $str = "DAFTAR PRODUK:  <br>";
        
        foreach( $this->daftarProduk as $p ) {
            $str .= "- {$p-> getInfoProduk()} <br>";
        }


        return $str;
    }
}

$produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
$produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 500);

$cetakProduk = new GlobalCetakInfoProduk();
$cetakProduk-> tambahProduk( $produk1 );
$cetakProduk-> tambahProduk( $produk2 );

echo $cetakProduk->cetak();


?>