<!DOCTYPE html>
<html lang="en">
<head>
   <title>Menangani nilai Seleksi</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Pekerjaan :
        <select name="job">
            <option value="Mahasiswa">Mahasiswa</option>
            <option value="ABRI">ABRI</option>
            <option value="PNS">PNS</option>
            <option value="Swasta">Swasta</option>
        </select> <br>

        <input type="submit" value="ok">
    </form>

    <br>
    
    <?php
        if (isset($_POST['job'])) {
            echo $_POST['job'];
        }
    ?>
</body>
</html>