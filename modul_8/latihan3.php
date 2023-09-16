<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Tipe Data dan Casting</title>
    </head>
    <body>
        <?php

        echo '<h1>Tipe Data dan Casting</h1>';

        $bil = 3;
        $str = "";
        $cpr = "123abc";

        echo '<h3>Bagian ini membahas tentang tipe data</h3>';
        //menguji tipe suatu variabel
        echo 'is bil an integer? ';
        var_dump(is_int($bil));
        echo '<br>';
        echo 'is bil an double? ';
        var_dump(is_double($bil));
        echo '<br>';
        echo ' is str an string? ';
        var_dump(is_string($str));

        //casting
        echo '<h3>Bagian Ini Membahas Tentang Casting</h3>';
        echo 'mengubah nilai dari variabel bil.';
        $bil = (int) $cpr;
        echo '<br>';
        echo 'cek tipe data dan nilai variabel bil saat ini = ';
        var_dump($bil);
        echo '<br>';
        echo 'cek tipe data variabel bil = ';
        echo gettype($bil);
        echo '<br>';
        echo 'cek tipe data variabel str = ';
        echo gettype($str);

        ?>
    </body>
</html>