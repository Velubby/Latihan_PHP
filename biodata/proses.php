<?php
include "koneksi.php";

$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

$query = mysqli_query($koneksi, "INSERT INTO biodata (nama, alamat, usia) VALUES ('$nama', '$alamat', '$usia')");

if ($query) {
    echo "Data Berhasil Disimpan<br>";
    echo '<a href="tabel.php">Lihat data di tabel</a>';
} else {
    echo "Data Gagal Disimpan<br>";
    echo "Error: " . mysqli_error($koneksi);
}
?>
