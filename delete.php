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

//Query untuk menghapus data
$sql = "DELETE FROM karyawan WHERE id=2";

//Menjalankan Query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil dihapus<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysql_close($conn);
?>