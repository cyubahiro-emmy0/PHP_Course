<!DOCTYPE html>
<html>
<head>
    <title>Multiplication Table</title>
    <style>
        table {
            border-collapse: collapse;
            margin: 20px;
        }
        td {
            width: 50px;
            height: 35px;
            text-align: center;
            border: 1px solid #999;
            padding: 5px;
        }
        th {
            background-color: #eee;
            font-weight: bold;
        }
    </style>
</head>
<body>

<table>

<?php
echo "<tr><th></th>";
for ($i = 1; $i <= 10; $i++) {
    echo "<th>$i</th>";
}
echo "</tr>";

for ($row = 1; $row <= 10; $row++) {
    echo "<tr>";
    echo "<th>$row</th>";
    
    for ($col = 1; $col <= 10; $col++) {
        $result = $row * $col;
        echo "<td>$result</td>";
    }
    
    echo "</tr>";
}
?>

</table>

</body>
</html>