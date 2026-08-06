<?php

// ========================
// IF ELSE
// ========================
$umur = 16;

echo "<h3>1. IF ELSE</h3>";

if ($umur > 17) {
    echo "Dewasa";
} else {
    echo "Anak-anak";
}

echo "<hr>";


// ========================
// SWITCH CASE
// ========================
$warna = "kuning";

echo "<h3>2. SWITCH CASE</h3>";

switch ($warna) {
    case "merah":
        echo "Stop!";
        break;

    case "kuning":
        echo "Hati-hati!";
        break;

    case "hijau":
        echo "Jalan!";
        break;

    default:
        echo "Warna tidak dikenali";
}

echo "<hr>";


// ========================
// TERNARY OPERATOR
// ========================
$nilai = 8;

echo "<h3>3. Ternary Operator</h3>";

$hasil = ($nilai >= 10) ? "Nilai positif" : "Nilai negatif";
echo "Hasil: $hasil";

echo "<hr>";


// ========================
// FOR LOOP
// ========================
echo "<h3>4. For Loop</h3>";

for ($i = 4; $i < 10; $i++) {
    echo $i . "<br>";
}

echo "<hr>";


// ========================
// WHILE LOOP
// ========================
echo "<h3>5. While Loop</h3>";

$i = 4;

while ($i < 10) {
    echo $i . "<br>";
    $i++;
}

echo "<hr>";


// ========================
// DO WHILE LOOP
// ========================
echo "<h3>6. Do While Loop</h3>";

$i = 4;

do {
    echo $i . "<br>";
    $i++;
} while ($i < 10);

?>