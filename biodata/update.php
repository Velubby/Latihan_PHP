<?php
include "koneksi.php";

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
    // Retrieve POST data
    $id = $_POST['id'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];
    $usia = $_POST['usia'];

    // Update the record in the database
    $query = "UPDATE biodata SET nama='$nama', alamat='$alamat', usia='$usia' WHERE id='$id'";
    mysqli_query($koneksi, $query);

    header("Location: tabel.php"); // Ganti 'tabel.php' dengan nama file yang menampilkan tabel
    exit; //
}

// Retrieve the record to fill the form
$id = $_GET['id']; // Assume the ID is passed via GET request
$query = mysqli_query($koneksi, "SELECT * FROM biodata WHERE id='$id'");
$row = mysqli_fetch_array($query);
?>

<form action="update.php?id=<?php echo $row['id']; ?>" method="post">
    <table border="1">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>" />
        <tr>
            <td>Nama</td>
            <td><input type="text" name="nama" value="<?php echo $row['nama']; ?>" /></td>
        </tr>
        <tr>
            <td>Alamat</td>
            <td><textarea cols="20" rows="5" name="alamat"><?php echo $row['alamat']; ?></textarea></td>
        </tr>
        <tr>
            <td>Usia</td>
            <td><input type="text" name="usia" value="<?php echo $row['usia']; ?>" /></td>
        </tr>
        <tr>
            <td colspan="2"><input type="submit" value="Simpan" name="simpan" /></td>
        </tr>
    </table>
</form>