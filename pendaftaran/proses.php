<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi // Mendapatkan data dari form
$id = $_POST['id'];
$nama = $_POST['nama'];
$telepon = $_POST['telepon'];
$jenis_kelamin = $_POST['jenis_kelamin'];
$jurusan = $_POST['jurusan'];
$alamat = $_POST['alamat'];
$asal_sekolah = $_POST['asal_sekolah'];

// Memperbarui data di database
$sql = "UPDATE mahasiswa SET nama='$nama', telepon='$telepon', jenis_kelamin='$jenis_kelamin', jurusan='$jurusan', alamat='$alamat', asal_sekolah='$asal_sekolah' WHERE id='$id'";
if (mysqli_query($koneksi, $sql)) {
    echo "Data berhasil diperbarui!";
    echo "<br><a href='tabel.php'>Lihat Data</a>";
} else {
    echo "Error: " . $sql . "<br>" . mysqli_error($koneksi);
}

mysqli_close($koneksi); // Menutup koneksi
?>