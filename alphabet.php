<!DOCTYPE html>
<html>
<head>
    <title>Alphabet H - Compact</title>
    <style>
        pre {
            font-family: monospace;
            font-size: 18px;
            line-height: 1;
        }
    </style>
</head>
<body>

<pre><?php

$height = 7;

for ($i = 0; $i < $height; $i++) {
    for ($j = 0; $j < 5; $j++) {
        if ($j == 0 || $j == 4 || $i == 3) {
            echo "*";
        } else {
            echo " ";
        }
    }
    echo "\n";
}

?></pre>

</body>
</html>