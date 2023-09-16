<!DOCTYPE html>
<html lang="en">
    <head>
        <title>Looping</title>
    </head>
    <body>
        <?php
        echo '<h1>Looping</h1>';
        // while looping
        echo '<h3>While Looping</h3>';
        $i = 0;
         while ($i < 10) {
            echo $i;
            echo ', ';
            $i++;
         }
         echo $i;

         //do while looping
         echo '<h3>do-while looping</h3>';
         $j = 0;
         do {
            echo $j;
            echo ', ';
            $j++;
         } while ($j < 10);
         echo $j;

         //for looping
         echo '<h3>for looping</h3>';
         for ($k = 0; $k < 10; $k++) {
            echo $k;
            echo ', ';
         }
         echo $k;

         //for each looping
         echo '<h3>foreach looping</h3>';
         $arr = array(0, 1, 2, 3, 4, 5, 6, 7, 8, 9);
         foreach ($arr as $value) {
            echo $value;
            echo', ';
         }
         echo '10';
        ?>
    </body>
</html>