<!DOCTYPE html>
<html lang="en">
<head>
    <title>Menangani Nilai Check Box</title>
</head>
<body>
    <form action="<?php $_SERVER['PHP_SELF'];?>" method="post">
        Hobi : <br>
        <input type="checkbox" name="hobby[]" value="Membaca"> Membaca <br>
        <input type="checkbox" name="hobby[]" value="Olahraga">Olahraga <br>
        <input type="checkbox" name="hobby[]" value="Menyanyi">Menyanyi <br>
        <br>
        <input type="submit" value="ok">
    </form>
    <br>
    <br>
    <?php
        if (isset($_POST['hobby'])) {
            foreach ($_POST['hobby'] as $key => $val) {
                echo $key . ' -> ' .$val . '<br />';
            }
        }
    ?>
</body>
</html>