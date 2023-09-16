<!DOCTYPE html>
<html lang="en">
    <head>
        <title>menggunakan variabel dalam program PHP</title>
    </head>
    <body>
        <?php
        // deklarasi dan inisialisasi
        echo '<h1>Variabel</h1>';
        $bil = 3;
        $str = "";
        $ble = null;

        echo $bil;
        echo ' adalah nilai dari bil';
        echo '<br>';

        //pemeriksaan variabel
        echo 'apakah tipe data dan nilai dari variabel bil? ';
        var_dump($bil);
        echo '<br>';
        echo ' apakah tipe data dan nilai dari variabel str? ';
        var_dump($str);
        echo '<br>';
        echo 'berapakah nilai dari variabel bil ? ';
        print_r($bil);
        echo '<br>';
        echo 'berapa nilai dari variabel ble? ';
        var_dump($ble);
        ?>


    </body>

</html>