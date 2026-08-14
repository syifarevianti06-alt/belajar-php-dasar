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

//Query untuk memperbarui data
$sql = "UPDATE karyawan SET nama='Bayu ganteng', umur=17, alamat='Sindangpalay' WHERE id=1";

//Menjalankan query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil diperbarui"<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//Menutup koneksi
mysqli_close($conn);
?>