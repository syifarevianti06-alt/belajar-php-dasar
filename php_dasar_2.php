<?php

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

$a = 15;
$b = 25;

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

$a = false;
$b = true;

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