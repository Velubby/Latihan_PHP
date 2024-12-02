<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <title>Form Pendaftaran Mahasiswa</title>
</head>
<body>
    <h2>Form Pendaftaran Mahasiswa</h2>
    <form action="simpan.php" method="post">
        <label for="nama">Nama Lengkap:</label>
        <input type="text" name="nama" id="nama" required>
        <br>
        
        <label for="telepon">Nomor Telepon:</label>
        <input type="text" name="telepon" id="telepon" required>
        <br>

        <label for="jenis_kelamin">Jenis Kelamin:</label>
        <select name="jenis_kelamin" id="jenis_kelamin" required>
            <option value="">Pilih Jenis Kelamin</option>
            <option value="Laki-laki">Laki-laki</option>
            <option value="Perempuan">Perempuan</option>
        </select>
        <br>

        <label for="jurusan">Jurusan:</label>
        <select name="jurusan" id="jurusan" required>
            <option value="">Pilih Jurusan</option>
            <option value="Teknik Informatika">Teknik Informatika</option>
            <option value="Sistem Informasi">Sistem Informasi</option>
            <option value="Manajemen">Manajemen</option>
            <option value="Akuntansi">Akuntansi</option>
        </select>
        <br>

        <label for="alamat">Alamat:</label>
        <textarea name="alamat" id="alamat" required></textarea>
        <br>

        <label for="asal_sekolah">Asal Sekolah:</label>
        <input type="text" name="asal_sekolah" id="asal_sekolah" required>
        <br>

        <input type="submit" value="Daftar">
    </form>
</body>
</html>