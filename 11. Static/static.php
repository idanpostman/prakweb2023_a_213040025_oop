<?php 

// Kita bisa mengakses property dan method dalam konteks class
// Jadi kita bisa mengakses dua hal tersebut tanpa instansiasi
// Memeber terletak dengan class, bukan dengan object
// Nilai static akan selali tetap, meskipun object di instansiasi berulang kali
// Membuat kode menjadi 'procedural'
// Biasanya digunakan untuk membuat fungsi helper
// atau digunakan di class-class utility pada framework

// class ContohStatic {
//     public static $angka = 1;

//     public static function hallo() {
//         return "Hallo " . self::$angka++ . " kali.";
//     }
// }

// echo ContohStatic::$angka;
// echo "<br>";
// echo ContohStatic::hallo();
// echo "<hr";
// echo ContohStatic::hallo();

class Contoh {
    public static $angka = 1;

    public function hallo() {
        return "Hallo " . self::$angka++ . " kali. <br>";
    }
}

$obj = new Contoh;
echo $obj->hallo();
echo $obj->hallo();
echo $obj->hallo();

echo "<hr>";

$obj2 = new Contoh;
echo $obj2->hallo();
echo $obj2->hallo();
echo $obj2->hallo();

?>