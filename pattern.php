<html>
    <head>
        <style>
            * {
                font-size: 50px;
            }
        </style>
    </head>
    <?php
     
     for($r = 1; $r <= 5; $r++){
        for($c = 1; $c <= $r; $c++){
            echo "*";
        }
        echo "<br/>";
     }
    ?>
</html>