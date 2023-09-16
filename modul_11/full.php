<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Latihan 1</title>
    </head>
    <body>
        <h3>Data Mahasiswa</h3>
        <h5>Menambahkan data mahasiswa</h5>
        <div>
        <form action="insert.php" method="post">
            <table>
                <tr>
                    <td>NIM</td>
                    <td><input type="text" name="nim"></td>
                </tr>
                <tr>
                    <td>Nama</td>
                    <td><input type="text" name="nama"></td>
                </tr>
                <tr>
                    <td>Alamat</td>
                    <td><input type="text" name="alamat"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="simpan"></td>
                </tr>
            </table>
        </form>
        </div>
        <h5>Menampilkan data mahasiswa</h5>
        <table border="1">
            <tr>
                <th>No</th>
                <th>NIM</th>
                <th>Nama</th>
                <th>Alamat</th>
                <th>Menu</th>
            </tr>
            <?php
                include 'koneksi.php';
                $no = 1;
                $datas =  mysqli_query($koneksi, "SELECT * from mahasiswa");
                while($data = mysqli_fetch_array($datas)){
                    ?>
                    <tr>
                        <td><?php echo $no++; ?></td>
                        <td><?php echo $data['nim']; ?></td>
                        <td><?php echo $data['nama']; ?></td>
                        <td><?php echo $data['alamat']; ?></td>

                        <td>
                            <a href="lihat.php?nim=<?php echo $data['nim']; ?>">Lihat</a>
                            <a href="edit.php?nim=<?php echo $data['nim']; ?>">Edit</a>
                            <a href="hapus.php?nim=<?php echo $data['nim']; ?>" 
                                onclick="return confirm('Anda yakin mau menghapus data pada NIM <?php echo $data['nim'] ?> ini?')">
                                Hapus
                            </a>
                        </td>
                    </tr>
                    <?php
                }
            ?>
        </table>
    </body>
</html>