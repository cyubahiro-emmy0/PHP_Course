<!DOCTYPE html>
<html>
<head>
    <title>Chess Board</title>
    <style>
        table {
            border-collapse: collapse;
            width: 270px;
        }
        td {
            width: 30px;
            height: 30px;
            text-align: center;
        }
        .black { background-color: black; }
        .white { background-color: white; }
    </style>
</head>
<body>

<table border="1">

<?php
for ($row = 1; $row <= 8; $row++) {
    echo "<tr>";
    
    for ($col = 1; $col <= 8; $col++) {
        // If (row + col) is even → black, else white
        // You can also use ($row % 2 == $col % 2) for black
        if (($row + $col) % 2 == 0) {
            echo '<td class="black"></td>';
        } else {
            echo '<td class="white"></td>';
        }
    }
    
    echo "</tr>";
}
?>

</table>

</body>
</html>