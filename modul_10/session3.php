<?php
    session_start();
    if (isset($_SESSION['login'])) {
        unset ($_SESSION);
        session_destroy();
        echo "<h1>Kamu sudah berhasil logout</h1>";
        echo "<h1>Klik <a href='session.php'>disini</a> untuk login lagi.<br> kamu tidak bisa masuk ke <a href='session2.php'>HOME</a></h1>";
    }
?>