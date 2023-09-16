<!DOCTYPE html>
<html>
    <head>
        <title>Edit Data</title>
    </head>
    <body>
        <h1>Edit data</h1>
        <br>
        <a href="full.php">Lihat semua data</a>
        <br>

        <?php
            include "koneksi.php";
            $nim = $_GET['nim'];
            $datas = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE nim='$nim'") or die(mysqli_error());
            $no = 1;
            while($data = mysqli_fetch_array($datas)){
                ?>
                <form action="update.php" method="get">
                    <table>
                        <tr>
                            <td>Nama</td>
                            <td>
                                <input type="hidden" name="nim" value="<?php echo $data['nim'] ?>">
                                <input type="text" name="nama" value="<?php echo $data['nama'] ?>">
                            </td>
                        </tr>
                        <tr>
                            <td>Alamat</td>
                            <td><input type="text" name="alamat" value="<?php echo $data['alamat']?>"></td>
                        </tr>
                        <tr>
                            <td></td>
                            <td><input type="submit" value="SIMPAN"></td>
                        </tr>
                    </table>
                </form>
        <?php
            }
        ?>
    </body>
</html>