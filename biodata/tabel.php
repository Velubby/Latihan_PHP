<?php
include "koneksi.php";

$query = $koneksi->query("SELECT * FROM biodata");
$jumlah = $query->num_rows;

echo "<b>Jumlah data ada: " . $jumlah . "</b><br />";
$c = 1;
?>
<table border="1">
<tr>
    <th>Nomor</th>
    <th>Nama</th>
    <th>Alamat</th>
    <th>Usia</th>
    <th>Aksi</th>
</tr>
<?php
while ($row = $query->fetch_assoc()) {
?>
<tr>
    <td><?php echo $c++; ?></td>
    <td><?php echo htmlspecialchars($row['nama']); ?></td>
    <td><?php echo htmlspecialchars($row['alamat']); ?></td>
    <td><?php echo htmlspecialchars($row['usia']); ?></td>
    <td>
        <a href="delete.php?id=<?php echo $row['id']; ?>" onclick="return confirm('Apakah anda yakin?')">Delete</a>
        <a href="update.php?id=<?php echo $row['id']; ?>">Update</a>
    </td>
</tr>
<?php
}
?>
</table><br />
<a href="form.php">Input data form</a>