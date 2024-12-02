<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mendapatkan data dari form
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];

// Menyimpan data ke database
$sql = "INSERT INTO mahasiswa (nama, telepon, jenis_kelamin, jurusan, alamat, asal_sekolah) VALUES ('$nama', '$telepon', '$jenis_kelamin', '$jurusan', '$alamat', '$asal_sekolah')";
if (mysqli_query($koneksi, $sql)) {
    echo "Pendaftaran berhasil!";
    echo "<br><a href='tabel.php'>Lihat Data</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi); // Menutup koneksi
?>