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

//Query untuk menyisipkan data baru
$sql = "INSERT INTO karyawan(id, nama, umur, alamat) VALUES (null, 'Bayu', 18, 'Cikondang'),
(null,'Syifa', 17, 'Sindangpalay')";

//menjalankan query
if (mysqli_query($conn, $sql)) {
    echo "Data berhasil ditambahkan<br>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($conn);
}

//menutup koneksi
mysqli_close($conn);
?>