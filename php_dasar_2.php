<?php

$a = 15;
$b = 30;

$a = 15;
$b = 30;

$c = $a + $b; // $c bernilai 45
echo $c . "<br>";

$c = $b - $a; // $c bernilai 15
echo $c . "<br>";

$c = $a * $b; // $c bernilai 450
echo $c . "<br>";

$c = $b / $a; // $c bernilai 2
echo $c . "<br>";

$c = $b % $a; // $c bernilai 0
echo $c . "<br>";



$a = 20;

// Operator Penugasan
$a += 10; // $a sekarang bernilai 30
echo $a . "<br>";

$a -= 5; // $a sekarang bernilai 25
echo $a . "<br>";

$a *= 2; // $a sekarang bernilai 50
echo $a . "<br>";

$a /= 5; // $a sekarang bernilai 10
echo $a . "<br>";

$a %= 3; // $a sekarang bernilai 1
echo $a . "<br>";


$a = 15;
$b = 25;

// Operator Perbandingan
echo var_export($a == $b, true) . "<br>";  // Sama dengan (==) -> false
echo var_export($a === $b, true) . "<br>"; // Identik (===) -> false
echo var_export($a != $b, true) . "<br>";  // Tidak sama dengan (!=) -> true
echo var_export($a !== $b, true) . "<br>"; // Tidak identik (!==) -> true
echo var_export($a > $b, true) . "<br>";   // Lebih besar dari (>) -> false
echo var_export($a < $b, true) . "<br>";   // Lebih kecil dari (<) -> true
echo var_export($a >= $b, true) . "<br>";  // Lebih besar atau sama dengan (>=) -> false
echo var_export($a <= $b, true) . "<br>";  // Lebih kecil atau sama dengan (<=) -> true


$a = false;
$b = true;

// Operator Logika
echo var_dump($a && $b) . "<br>"; // AND (&&) -> bernilai true jika KEDUA nilai true
echo var_dump($a || $b) . "<br>"; // OR (||) -> bernilai true jika SALAH SATU nilai true
echo var_dump(!$a) . "<br>";      // NOT (!) -> membalikkan nilai boolean (false jadi true)
echo var_dump($a xor $b) . "<br>"; // XOR (xor) -> bernilai true jika SALAH SATU true, tapi BUKAN KEDUANYA


$a = 50;

// Operator Increment/Decrement
$a++; // Increment (menambah 1)
echo $a . "<br>"; // $a sekarang bernilai 51

$a--; // Decrement (mengurangi 1)
echo $a . "<br>"; // $a sekarang bernilai 50

?>
