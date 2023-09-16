<!DOCTYPE html>
<html lang="en">

<head>
    <title>Menangani Nilai Radio Button</title>
</head>

<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Jenis Kelamin :
        <input type="radio" name="jenis" value="Pria"> Pria
        <input type="radio" name="jenis" value="Wanita"> Wanita 
        <br />

        <input type="submit" value="OK">
    </form>

    <?php
        if (isset($_POST['jenis'])) {
            echo $_POST['jenis'];
        }
    ?>

</body>
</html>