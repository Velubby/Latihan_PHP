<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mengambil data dari database
$sql = "SELECT * FROM mahasiswa";
$result = mysqli_query($koneksi, $sql);

echo "<h2>Data Mahasiswa</h2>";
echo "<table border='1'>
<tr>
<th>ID</th>
<th>Nama Lengkap</th>
<th>Nomor Telepon</th>
<th>Jenis Kel amin</th>
<th>Jurusan</th>
<th>Alamat</th>
<th>Asal Sekolah</th>
<th>Aksi</th>
</tr>";

// Menampilkan data dalam tabel
if (mysqli_num_rows($result) > 0) {
    while($row = mysqli_fetch_assoc($result)) {
        echo "<tr>
        <td>" . $row["id"] . "</td>
        <td>" . $row["nama"] . "</td>
        <td>" . $row["telepon"] . "</td>
        <td>" . $row["jenis_kelamin"] . "</td>
        <td>" . $row["jurusan"] . "</td>
        <td>" . $row["alamat"] . "</td>
        <td>" . $row["asal_sekolah"] . "</td>
        <td>
            <a href='update.php?id=" . $row["id"] . "'>Edit</a> |
            <a href='delete.php?id=" . $row["id"] . "'>Hapus</a>
        </td>
        </tr>";
    }
} else {
    echo "<tr><td colspan='8'>Tidak ada data</td></tr>";
    
}
echo "</table><br/>";
echo "<a href='form.php'>input data form</a>";


mysqli_close($koneksi); // Menutup koneksi
?>