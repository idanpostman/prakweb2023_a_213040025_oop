<?php 
/*
INTERFACE
Kelas abstrak yang sama sekali tidak memiliki implementasi
Murni merupakan template untuk kelas turunannya
tidak boleh memiliki property, hanya deklarasi method saja.
semua method harus dideklarasi dengan visibility public
boleh mendeklarasikan __construct()
satu kelas boleh mengimplementasikan banyak interface

Dengan menggunakan type-hinting dapat melakukan 'dependency injection'
pada akhirnya akan mencapai Polymorphism
*/

interface InfoProduk {
     public function getInfoProduk();
}

abstract class Produk {
    // Property
    protected $judul,
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

    abstract public function getInfo();
   
  
}

class Komik extends Produk implements InfoProduk {
    public $jmlHalaman;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $jmlHalaman = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga); // Overriding
        $this->jmlHalaman = $jmlHalaman;
    }
    
    public function getInfoProduk() {
        $str = "Komik : " . $this->getInfo() . " ~ {$this->jmlHalaman} Halaman";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

        return $str;
    }
}

class Game extends Produk implements InfoProduk {
    public $waktuMain;

    public function __construct($judul = "judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0, $waktuMain = 0) {
        parent::__construct($judul, $penulis, $penerbit, $harga); // Overriding
        $this->waktuMain = $waktuMain;
    }

    public function getInfoProduk() {
        $str = "Game : " . $this->getInfo() . " ~ {$this->waktuMain} Jam";
        return $str;
    }

    public function getInfo(){
        $str = "{$this->judul} | {$this->getLabel()} (Rp. {$this->harga})";

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

$cetakProduk = new CetakInfoProduk();
$cetakProduk-> tambahProduk( $produk1 );
$cetakProduk-> tambahProduk( $produk2 );

echo $cetakProduk->cetak();


?>

