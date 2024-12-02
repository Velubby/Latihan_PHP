<?php
include "koneksi.php";

$id = $_POST['id'];
$nama = $_POST['nama'];
$alamat = $_POST['alamat'];
$usia = $_POST['usia'];

$query = mysqli_query($koneksi, "UPDATE biodata SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id='$id'");

if ($query) {
    echo "Data Berhasil Diupdate<br>";
    echo '<a href="tabel.php">Lihat data di tabel</a>';
} else {
    echo "Data Gagal Diupdate<br>";
    echo "Error: " . mysqli_error($koneksi);
}
?>
