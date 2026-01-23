<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator</h2>

<form method="post">
    First Number: <input type="text" name="num1" value="<?php if(isset($_POST['num1'])) echo $_POST['num1']; ?>"><br><br>
    Second Number: <input type="text" name="num2" value="<?php if(isset($_POST['num2'])) echo $_POST['num2']; ?>"><br><br>
    
    <input type="submit" name="add" value="+">
    <input type="submit" name="sub" value="-">
    <input type="submit" name="mul" value="*">
    <input type="submit" name="div" value="/">
</form>

<br><br>

<?php

if ($_SERVER["REQUEST_METHOD"] == "POST") {

    $n1 = $_POST["num1"];
    $n2 = $_POST["num2"];

    // Using switch with different submit button names
    if (isset($_POST["add"])) {
        $result = $n1 + $n2;
        echo "Result: " . $result;
    }
    
    else if (isset($_POST["sub"])) {
        $result = $n1 - $n2;
        echo "Result: " . $result;
    }
    
    else if (isset($_POST["mul"])) {
        $result = $n1 * $n2;
        echo "Result: " . $result;
    }
    
    else if (isset($_POST["div"])) {
        if ($n2 == 0) {
            echo "Cannot divide by zero!";
        } else {
            $result = $n1 / $n2;
            echo "Result: " . $result;
        }
    }

}

?>

</body>
</html>