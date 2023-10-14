<?php 


class produk {
    public $judul = "judul",
           $penulis = "penulis",
           $penerbit = "penerbit",
           $harga = 0;

    // public function sayHello() {
    //     return "Hello World!";
    // }

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

$produk3 = new Produk();
$produk3 -> judul = "Black Clover";
$produk3 -> penulis = "Yuki Tabata";
$produk3 -> penerbit = "Shonen Jump";
$produk3 -> harga = 300000;


// echo $produk3->getLabel();

// echo" <hr>";

$produk4 = new Produk();
$produk4 -> judul = "Uncharted";
$produk4 -> penulis = "Neil Druckmann";
$produk4 -> penerbit = "Sony Computer";
$produk4 -> harga = 30203202;

echo "Komik : ". $produk3 -> getLabel();
echo "<br>";
echo "Game : " . $produk4 -> getLabel();


?>