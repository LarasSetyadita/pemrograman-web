<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Fungsi dan Prosedur</title>
    </head>
    <body>
        <?php
            echo '<h1>Fungsi dan Prosedur</h3>';
            // contoh prosedur 
            echo '<h3>Contoh Prosedur</h5>';
            function doPrint() {
                echo time();
            }
            //memanggil prosedur
            doPrint();

            //contoh fungsi
            echo '<h3>Conoth fungsi</h3>';
            function ary($i) {
                for ($a = 1; $a < $i; $a++) {
                    echo $a;
                    echo ', ';
                }
                echo $i;
            }
            // pemanggilan fungsi
            ary(10);
        ?>
    </body>
</html>
