<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
</head>
<body>

<form method="post">
    <label>Enter a number:</label>
    <input type="number" step="any"  name="number" min="0" required>
    <button type="submit">Calculate</button>
</form>

<?php
if (isset($_POST['number'])) {
    $number = $_POST['number'];
    $factorial = 1;

    for ($i = 1; $i <= $number; $i++) {
        $factorial *= $i;
    }

    echo "<p>Factorial of $number is: <strong>$factorial</strong></p>";
}
?>

</body>
</html>
