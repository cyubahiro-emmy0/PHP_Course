<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
</head>
<body>

<h2>Simple Calculator Operations</h2>

<form method="post">
    First Number:
    <input type="number" name="num1" value="<?php echo $_POST['num1'] ?? ''; ?>" required><br><br>

    Second Number:
    <input type="number" name="num2" value="<?php echo $_POST['num2'] ?? ''; ?>" required><br><br>

    Result:
    <input type="text" name="result" 
           value="<?php echo $_POST['result'] ?? ''; ?>" readonly><br><br>

    <input type="submit" name="operator" value="+">
    <input type="submit" name="operator" value="-">
    <input type="submit" name="operator" value="*">
    <input type="submit" name="operator" value="/">
</form>

<?php
if (isset($_POST['operator'])) {
    $num1 = $_POST['num1'];
    $num2 = $_POST['num2'];
    $op = $_POST['operator'];
    $result = "";

    switch ($op) {
        case '+':
            $result = $num1 + $num2;
            break;

        case '-':
            $result = $num1 - $num2;
            break;

        case '*':
            $result = $num1 * $num2;
            break;

        case '/':
            if ($num2 != 0) {
                $result = $num1 / $num2;
            } else {
                $result = "Error";
            }
            break;
    }

    echo "<script>
            document.getElementsByName('result')[0].value = '$result';
          </script>";
}
?>

</body>
</html>
