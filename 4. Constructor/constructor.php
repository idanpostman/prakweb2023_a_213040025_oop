<?php 


class produk {
    public $judul,
           $penulis,
           $penerbit,
           $harga;

    public function __construct($judul ="judul", $penulis = "penulis", $penerbit = "penerbit", $harga = 0) {
        $this-> judul = $judul;
        $this-> penulis = $penulis;
        $this-> penerbit = $penerbit;
        $this-> harga = $harga;
    }
    
        
    

    public function getLabel() {
        return "$this->penulis, $this->penerbit";
    }
}

// $produk1 = new Produk();
// $produk1 -> judul = "naruto";

// var_dump($produk1);

// $produk2 = new Produk();
// $produk2 -> judul = "Uncharted";
// $produk2 -> tambahProperty = "hahaha";
// var_dump($produk2);

$produk1 = new produk("Black CLover", "Yuki Tabata", "Shonen Jump", 123123);
$produk2 = new produk("Uncharted", "Neil Druckmann", "Sony Computer", 1212123123);
$produk3 = new produk("Dragon Ball");



// echo $produk3->getLabel();

// echo" <hr>";



echo "Komik : ". $produk1 -> getLabel();
echo "<br>";
echo "Game : " . $produk2 -> getLabel();

var_dump($produk3);

?>