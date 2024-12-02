<?php
include 'koneksi.php'; // Menghubungkan ke file koneksi

// Mendapatkan ID dari URL
$id = $_GET['id'];

// Mengambil data berdasarkan ID
$sql = "SELECT * FROM mahasiswa WHERE id='$id'";
$result = mysqli_query($koneksi, $sql);
$row = mysqli_fetch_assoc($result);
?>

<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Edit Data Mahasiswa</title>
</head>
<body>
    <h2>Form Edit Data Mahasiswa</h2>
    <form action="proses.php" method="post">
        <input type="hidden" name="id" value="<?php echo $row['id']; ?>">
        
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" value="<?php echo $row['nama']; ?>" required>
        <br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" name="telepon" id="telepon" value="<?php echo $row['telepon']; ?>" required>
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="Laki-laki" <?php if($row['jenis_kelamin'] == 'Laki-laki') echo 'selected'; ?>>Laki-laki</option>
            <option value="Perempuan" <?php if($row['jenis_kelamin'] == 'Perempuan') echo 'selected'; ?>>Perempuan</option>
        </select>
        <br>

        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="Teknik Informatika" <?php if($row['jurusan'] == 'Teknik Informatika') echo 'selected'; ?>>Teknik Informatika</option>
            <option value="Sistem Informasi" <?php if($row['jurusan'] == 'Sistem Informasi') echo 'selected'; ?>>Sistem Informasi</option>
            <option value="Manajemen" <?php if($row['jurusan'] == 'Manajemen') echo 'selected'; ?>>Manajemen</option>
            <option value="Akuntansi" <?php if($row['jurusan'] == 'Akuntansi') echo 'selected'; ?>>Akuntansi</option>
        </select>
        <br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required><?php echo $row['alamat']; ?></textarea>
        <br>

        <label for="asal_sekolah">Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" value="<?php echo $row['asal_sekolah']; ?>" required>
        <br>

        <input type="submit" value="Update">
    </form>
</body>
</html>