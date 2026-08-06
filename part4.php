<?php

// ==========================
// ARRAY INDEX
// ==========================

$minuman = ["kopi", "jus mangga", "susu"];
echo $minuman[2]; // Output: susu

echo "<br><br>";

$nama = ["budi", "agus", "agung", "andre"];
echo $nama[3]; // Output: andre

echo "<hr>";


// ==========================
// ARRAY SEDERHANA
// ==========================

$buah = ["anggur", "apel", "alpukat"];
echo $buah[1]; // Output: apel

echo "<hr>";


// ==========================
// ARRAY ASOSIATIF
// ==========================

$umur = [
    "desi"  => 17,
    "agus"  => 34,
    "syifa" => 14,
    "awa"   => 18
];

echo $umur["awa"];

echo "<hr>";


// ==========================
// ARRAY MULTIDIMENSI
// ==========================

$orang = [
    ["Nama" => "Desi",  "Umur" => 17],
    ["Nama" => "Awa",   "Umur" => 18],
    ["Nama" => "Syifa", "Umur" => 14]
];

echo $orang[0]["Nama"] . " berumur " . $orang[0]["Umur"] . " tahun.<br>";
echo $orang[2]["Nama"] . " berumur " . $orang[2]["Umur"] . " tahun.<br>";

echo "<hr>";


// ==========================
// FOREACH ARRAY SEDERHANA
// ==========================

$buah = ["Semangka", "Sirsak", "Salak", "Sawo"];

foreach ($buah as $item) {
    echo "Buah: $item <br>";
}

echo "<hr>";


// ==========================
// FOREACH ARRAY ASOSIATIF
// ==========================

$umur = [
    "Elis"  => 25,
    "Bop"   => 30,
    "Kerli" => 35
];

foreach ($umur as $nama => $usia) {
    echo "$nama berumur $usia tahun.<br>";
}

echo "<hr>";


// ==========================
// FOREACH ARRAY MULTIDIMENSI
// ==========================

$orang = [
    ["Nama" => "Elis",  "Umur" => 17],
    ["Nama" => "Bop",   "Umur" => 18],
    ["Nama" => "Kerli", "Umur" => 14]
];

foreach ($orang as $individu) {
    echo $individu["Nama"] . " berumur " . $individu["Umur"] . " tahun.<br>";
}

echo "<hr>";


// ==========================
// FUNCTION TANPA RETURN
// ==========================

function sapa($nama)
{
    echo "Halo, $nama!<br>";
}

sapa("Elis");
sapa("Bop");

echo "<hr>";


// ==========================
// FUNCTION DENGAN RETURN
// ==========================

function tambah($a, $b)
{
    return $a + $b;
}

$hasil = tambah(3, 4);
echo "Hasil penjumlahan: $hasil";

?>