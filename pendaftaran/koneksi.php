<?php
// Koneksi ke database
$host = "localhost"; // Alamat host
$user = "root"; // Username database
$password = ""; // Password database
$database = "db_pendaftaran"; // Nama database

// Membuat koneksi
$koneksi = mysqli_connect($host, $user, $password, $database);

// Cek koneksi
if (!$koneksi) {
    die("Koneksi gagal: " . mysqli_connect_error());
}
?>