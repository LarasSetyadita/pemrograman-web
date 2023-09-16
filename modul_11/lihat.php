<!DOCTYPE html>
<html>
    <head>
        <title>Lihat Data</title>
    </head>
    <body>
        <div class="judul">
            <h1>Detail Data</h1>
        </div>
        <br>
        <?php
            include "koneksi.php";
            $nim = $_GET['nim'];
            $data = mysqli_query($koneksi, "SELECT * from mahasiswa WHERE nim='$nim'") or die (mysqli_error());
            $no = 1;
            while($d = mysqli_fetch_array($data)) {
            ?>
                <table>
                    <tr>
                        <td>NIM</td>
                        <td> : <?php echo $d['nim'] ?></td>
                    </tr>
                    <tr>
                        <td>Nama</td>
                        <td> : <?php echo $d['nama'] ?></td>
                    </tr>
                    <tr>
                        <td>Alamat : <?php echo $d['alamat'] ?></td>
                        <td></td>
                    </tr>
                    <tr></tr>
                </table>
        <?php
            }
        ?>
        <a href="full.php"> <<<<< Kembali lihat semua data</a>
    </body>
</html>