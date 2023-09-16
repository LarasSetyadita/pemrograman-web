<?php
    include "koneksi.php";

    $ada = false;

    $nim = $_POST['nim'];
    $nama = $_POST['nama'];
    $alamat = $_POST['alamat'];

    $datas =  mysqli_query($koneksi, "SELECT nim from datamahasiswa");
    while($data = mysqli_fetch_array($datas)) {
        if($data['nim'] == $nim) {
            $ada = true;
        }
    }

    if(!$ada) {
        mysqli_query($koneksi, "INSERT INTO datamahasiswa VALUE ('', '$nim', '$nama', '$alamat')");
        header("location:tabel.php? pesan=berhasil");
    } else {
        header("location:tabel.php? pesan=gagal");
    }
?>
