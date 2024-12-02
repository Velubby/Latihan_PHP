<?php
$host = "localhost";
$user = "root";
$password = "";
$database = "db_biodata";

$koneksi = mysqli_connect($host, $user, $password, $database);
if ($koneksi->connect_error) {
    die("Koneksi Gagal: " . $koneksi->connect_error); // Detailed error during development
}
?>
