<?php
    include 'koneksi.php';
    $nim = $_GET['nim'];
    mysqli_query($koneksi, "DELETE FROM datamahasiswa WHERE nim='$nim'") or die(mysqli_error());
    header("location:tabel.php? pesan=hapus");
?>