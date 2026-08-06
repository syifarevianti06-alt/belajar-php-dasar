<?php

$minuman = ["kopi", "jus mangga"; "susu"];
echo $minuman[2]; //output : susu

echo "<br>";

$nama = array("budi","agus","agung","andre");
echo $nama[3]; //output : andre

//cara membuat array
 

//array sederhana
$buah = ["anggur","apel","alpukat"];
echo $buah[1]; //output: apel

//array asosiatif
$umur = ["desi"=> 17,"agus"=> 34,"syifa"=>14,"awa"=> 18];
echo $umur["awa"];

//array multidimensi 
//mendefinisikan array multidimendi menggunakan[]
$orang = [
    ["Nama" => "Desi","Umur" => 17],
    ["Nama" => "Awa","Umur" => 18],
    ["Nama" => "Syifa","Umur" => 14]
];

//mengakses elemen array multidimensi
echo $orang[0]["Nama"] . "berumur" . $orang[0]["Umur"] . "tahun.<br>"; //output Desi berumur 17 tahun.
echo $orang[2]["Nama"] . "berumur" . $orang[2]["Umur"] . "tahun.<br>"; //output Syifa berumur 14 tahun.

//for each array sederhana
$buah = ["Semangka","Sirsak","Salak","Sawo"];

foreach ($buah as $item) {
    echo "Buah: $item <br>";
}

//for each array asosiatif
$umur = [
    "Elis" => 25,
    "Bop" => 30,
    "Kerli" => 35
];

foreach ($umur as $nama => $usia) {
    echo "$nama berumur $usia tahun.<br>";
}

//for each array multidimensi
$orang = [
    ["Nama" => "Elis","Umur" => 17],
    ["Nama" => "Bop","Umur" => 18],
    ["Nama" => "Kerli","Umur" => 14]
];

foreach ($orang as $individu) {
    echo $individu["Nama"] . "berumur" . $individu["Umur"] . "tahun.<br>";
}

//penggunaan parameter

function sapa($nama) {
    echo "Halo, $nama!";
}

sapa("Elis"); //Halo, Elis!
sapa("Bop"); //Halo, Bop!


//penggunaan yg mengembalikan nilai
function tambah($a, $b) {
    return $a + $b;
}

$hasil = tambah(3,4);
echo $hasil;

?>