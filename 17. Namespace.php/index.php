<?php 

require_once 'App/init.php';

// $produk1 = new Komik("Naruto", "Masashi Kishimoto", "Shonen Jump", 30000, 100);
// $produk2 = new Game("Uncharted", "Neil Druckmann", "Sony Computer", 250000, 500);

// $cetakProduk = new CetakInfoProduk();
// $cetakProduk-> tambahProduk( $produk1 );
// $cetakProduk-> tambahProduk( $produk2 );

// echo $cetakProduk->cetak();
// echo "<hr>";

use App\Service\User as ServiceUser;
use App\Produk\User as ProdukUSer;

new ServiceUser();
echo "<br>";
new ProdukUser();


?>