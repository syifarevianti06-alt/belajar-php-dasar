<?php

<<<<<<< HEAD
// ========================
// OPERATOR ARITMATIKA
// ========================
echo "<h2>1. Operator Aritmatika</h2>";

$a = 15;
$b = 30;

echo "Penjumlahan : " . ($a + $b) . "<br>";
echo "Pengurangan : " . ($b - $a) . "<br>";
echo "Perkalian   : " . ($a * $b) . "<br>";
echo "Pembagian   : " . ($b / $a) . "<br>";
echo "Modulus     : " . ($b % $a) . "<br>";

echo "<hr>";


// ========================
// OPERATOR PENUGASAN
// ========================
echo "<h2>2. Operator Penugasan</h2>";

$a = 20;

$a += 10;
echo "a += 10 = $a <br>";

$a -= 5;
echo "a -= 5 = $a <br>";

$a *= 2;
echo "a *= 2 = $a <br>";

$a /= 5;
echo "a /= 5 = $a <br>";

$a %= 3;
echo "a %= 3 = $a <br>";

echo "<hr>";


// ========================
// OPERATOR PERBANDINGAN
// ========================
echo "<h2>3. Operator Perbandingan</h2>";
=======
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

>>>>>>> b2fe6014f13b24ed92aa92dafb366d22f37b081a

$a = 15;
$b = 25;

<<<<<<< HEAD
echo "a == b : " . var_export($a == $b, true) . "<br>";
echo "a === b : " . var_export($a === $b, true) . "<br>";
echo "a != b : " . var_export($a != $b, true) . "<br>";
echo "a !== b : " . var_export($a !== $b, true) . "<br>";
echo "a > b : " . var_export($a > $b, true) . "<br>";
echo "a < b : " . var_export($a < $b, true) . "<br>";
echo "a >= b : " . var_export($a >= $b, true) . "<br>";
echo "a <= b : " . var_export($a <= $b, true) . "<br>";

echo "<hr>";


// ========================
// OPERATOR LOGIKA
// ========================
echo "<h2>4. Operator Logika</h2>";
=======
// Operator Perbandingan
echo var_export($a == $b, true) . "<br>";  // Sama dengan (==) -> false
echo var_export($a === $b, true) . "<br>"; // Identik (===) -> false
echo var_export($a != $b, true) . "<br>";  // Tidak sama dengan (!=) -> true
echo var_export($a !== $b, true) . "<br>"; // Tidak identik (!==) -> true
echo var_export($a > $b, true) . "<br>";   // Lebih besar dari (>) -> false
echo var_export($a < $b, true) . "<br>";   // Lebih kecil dari (<) -> true
echo var_export($a >= $b, true) . "<br>";  // Lebih besar atau sama dengan (>=) -> false
echo var_export($a <= $b, true) . "<br>";  // Lebih kecil atau sama dengan (<=) -> true

>>>>>>> b2fe6014f13b24ed92aa92dafb366d22f37b081a

$a = false;
$b = true;

<<<<<<< HEAD
echo "AND (&&) : ";
var_dump($a && $b);
echo "<br>";

echo "OR (||) : ";
var_dump($a || $b);
echo "<br>";

echo "NOT (!) : ";
var_dump(!$a);
echo "<br>";

echo "XOR : ";
var_dump($a xor $b);
echo "<br>";

echo "<hr>";


// ========================
// OPERATOR INCREMENT & DECREMENT
// ========================
echo "<h2>5. Increment & Decrement</h2>";

$a = 50;

$a++;
echo "Setelah Increment : $a <br>";

$a--;
echo "Setelah Decrement : $a <br>";

?>
=======
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
>>>>>>> b2fe6014f13b24ed92aa92dafb366d22f37b081a
