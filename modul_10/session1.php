<?php
    session_start();
    if (isset($_POST['login'])) {
        $user = $_POST['user'];
        $pass = $_POST['pass'];

        if ($user == "ani" && $pass === "1111") {
            $_SESSION['login'] = $user;
            echo "<h1>Selamat, kamu berhasil login!</h1>";
            echo "<h2>Klik <a href ='session2.php'> disini (session2.php)</a> unutk menuju ke halaman pemeriksaan session</h2>";
        }
    } else {
        ?>
        <html>
            <head>
                <title>Login disini</title>
            </head>
            <body>
                <form action="" method="post">
                    <h2>Login disini</h2>
                    Username : <input type="text" name="user"><br>
                    Password : <input type="password" name="pass"><br>
                    <input type="submit" name="login" value="login">
                </form>
            </body>
        </html>
        <?php
    }
?>