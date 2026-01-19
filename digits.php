<html>
    <?php
     echo "All two-digit combinations:<br> <br>";

     $count = 0;
     for ($i = 0; $i <= 99;$i++){
        echo sprintf("%02d", $i);
        $count++;

        if ($count < 100){
            echo ", ";
        }

        if ($count % 20 === 0 && $count < 100){
            echo "<br>";
        }
     }

     echo "<br>";
    ?>
</html>