<?php
    include "koneksi.php";
    $nim = $_GET['nim'];
    $nama = $_GET['nama'];
    $alamat = $_GET['alamat'];

    mysqli_query($koneksi, "UPDATE Mahasiswa SET nama='$nama', alamat='$alamat' WHERE nim='$nim'");
    header("location:full.php? pesan=update");
?>