<?php 

// define('NAMA', 'Sandhika Galih');

// echo NAMA;

// echo "<br>";

// const UMUR = 32;
// echo UMUR;

// define tidak bisa
//const bisa disimpan dalam class

// class Coba {
//     const NAMA = 'Sandhika';
// }

// echo Coba:: NAMA;

// Magic constant

// echo __LINE__;

// echo __FILE__;


// function coba() {
//     return __FUNCTION__;
// }


// echo coba();

class Coba {
    public $kelas = __CLASS__;
}

$obj = new Coba;

echo $obj -> kelas;

?>