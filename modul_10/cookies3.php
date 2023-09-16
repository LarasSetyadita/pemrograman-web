<?php
    setcookie("username", "", time() -3600);
    setcookie("nama_lengkap", "", time() -3600);
    echo "<h1>Cookies berhasil dihapus</h1>";
    echo "<h2>Klik <a href='cookies2.php'>disini</a>untuk pemeriksaan cookies</h2>";
?>