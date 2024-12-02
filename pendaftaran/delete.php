<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Menghapus data dari database
$sql = "DELETE FROM mahasiswa WHERE id='$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil dihapus!";
    echo "<br><a href='tabel.php'>Lihat Data</a>";
} else {
    echo "Error: " . mysqli_error($koneksi);
}

mysqli_close($koneksi); // Menutup koneksi
?>