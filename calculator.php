<!DOCTYPE html>
<html>
<head>
    <title>Simple Calculator</title>
    <style>
        .form-input {
            width: 200px;
            padding: 10px;
            margin: 5px 0;
            border: 1px solid #3b4dd8;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 16px;
        }

        label{
            font-size:20px;
        }
        .form{
           width: 200px;
            padding: 10px;
            margin: 5px 0;
            background-color:green;
            border-radius: 4px;
            box-sizing: border-box; 
            font-size: 16px;
        }

    </style>
</head>
<body>

<h2>Simple Calculator Operations</h2>

<form method="post">
    <label for="num1">First Number:</label>
    <input type="number" name="num1" class = "form-input" value="<?php echo $_POST['num1'] ?? ''; ?>" required><br><br>

    <label for="num2">Second Number:</label>
    <input type="number" name="num2" class ="form-input"  value="<?php echo $_POST['num2'] ?? ''; ?>" required><br><br>

    <label for="result">Result:</label>
    <input type="text" name="result" class="form-input"
           value="<?php echo $_POST['result'] ?? ''; ?>" readonly><br><br>

    <input type="submit" name="operator" value="+" class="form">
    <input type="submit" name="operator" value="-" class="form">
    <input type="submit" name="operator" value="*" class="form">
    <input type="submit" name="operator" value="/" class="form">
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
