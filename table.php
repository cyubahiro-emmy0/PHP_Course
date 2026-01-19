<html>
    <head>
        <style>
           table{
            border-collapse: collapse;
            font-family: Arial, sans-serif;
           }
        </style>
    </head>
<?php

echo '<table cellpadding="3px" cellspacing="0px" border="1" style="border-collapse: collapse;">';

for ($row = 1; $row <= 6; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 5; $col++) {
        $result = $row * $col;
        echo "<td>$row * $col = $result</td>";
    }
    
    echo "</tr>\n";
}

echo "</table>";
?>
</html>