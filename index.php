<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "php_dasar";

//membuat koneksi
$conn = mysqli_connect($servername, $username, $password, $dbname);

//memeriksa koneksi
if (!$conn) {
    die("Koneksi gagal: " . mysql_connect_error());  
}
echo "Koneksi berhasil<br>";

$sql = "SELECT * FROM karyawan";
$result = mysqli_query($conn, $sql);

$data = mysqli_fetch_all($result, MYSQLI_ASSOC);


foreach($data as $row){
    echo $row["nama"]." ";
    echo $row["umur"]." ";
    echo $row["alamat"]." ";
    echo "<br>"
}
?>