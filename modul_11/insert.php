<?php
    include "koneksi.php";

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    mysqli_query($koneksi, "INSERT INTO mahasiswa VALUE ('', '$nim', '$nama', '$alamat')");
    header("location:full.php? pesan=update");
?>
