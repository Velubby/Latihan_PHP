<html>
    <head>
        <title>Form Biodata</title>
    </head>
    <body>
        <h2>Formulir Biodata Koperasi</h2>
        <form action="proses.php" method="post">
            <table>
                <tr>
                    <td><b>Nama</b></td>
                    <td><input type="text" name="nama" size="20"></td>
                </tr>
                <tr>
                    <td><b>Alamat</b></td>
                    <td><textarea row="5" cols="20" name="alamat"></textarea></td>
                </tr>
                <tr>
                    <td><b>Usia</b></td>
                    <td><input type="text" name="usia" size="20"></td>
                </tr>
                <tr>
                    <td><input type="submit" name="proses" value="proses"></td>
                    <td><input type="reset" value="batal"></td>
                </tr>
            </table>
        </form>
    </body>
</html>