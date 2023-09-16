<?php
    session_start();
    if (isset($_SESSION['login'])) {
        echo "<h1>Selamat datang, ". $_SESSION['login']."</h2>";
        echo "<h2>Halaman ini dapat ditampilkan apabila anda berhasil login. Ini adalah HOME (beranda) kamu.</h2>";
        echo "<h2>Klik <a href='session3.php'> disini (session3.php) </a> unutk logout atau keluar</h2>";
    } else {
        die ("Anda belum login! Login menggunakan akun anda terlebih dahulu. <a href='session.php'>disini</a>.");
    }
?>