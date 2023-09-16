<!DOCTYPE html>
<html lang="en">
    <head>
        <title> Pernyataan seleksi</title>
    </head>
    <body>
        <?php
            echo '<h1>Pernyataan Seleksi</h1>';
            $a = 10;
            $b = 5;

            echo '<h3>Pernyataan if, if-else dan if-elseif</h3>';
            if($a > $b) {
                echo 'a lebih besar daripada b';
            } elseif ($a < $b) {
                echo 'a kurang daripada b';
            } else {
                echo 'a sama dengan b';
            }

            echo '<h3>Pernyataan switch</h3>';
            switch ($b) {
                case 0:
                    echo '$i sama dengan 0';
                    break;
                case 1:
                    echo '$i sama dengan 1';
                    break;
                case 2:
                    echo '$i sama dengan 2';
                    break;
                case 3:
                    echo '$i sama dengan 3';
                    break;
                case 4:
                    echo '$i sama dengan 4';
                    break;
                case 5:
                    echo '$i sama dengan 5';
                    break;
                case 6:
                    echo '$i sama dengan 6';
                    break;
            }
        ?>
    </body>
</html>
