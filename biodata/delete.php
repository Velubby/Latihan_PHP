<?php
include "koneksi.php";

$id = $_GET['id'];

$query = mysqli_query($koneksi, "DELETE FROM biodata WHERE id='$id'");

if ($query) {
    echo "<script>document.location.href='tabel.php';</script>";
} else {
    echo "Gagal hapus data<br>";
    echo "Error: " . mysqli_error($koneksi);
}
?>