<!DOCTYPE html>
<html>
<head>
    <title>Factorial Calculator</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            max-width: 500px;
            margin: 40px auto;
            padding: 20px;
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .form-container {
            background: #f9f9f9;
            padding: 20px;
            border: 1px solid #ddd;
            border-radius: 8px;
        }
        label {
            font-weight: bold;
            display: block;
            margin-bottom: 8px;
        }
        input[type="number"] {
            width: 100%;
            padding: 10px;
            margin-bottom: 15px;
            border: 1px solid #ccc;
            border-radius: 4px;
            box-sizing: border-box;
        }
        button {
            background: #4CAF50;
            color: white;
            padding: 12px 20px;
            border: none;
            border-radius: 4px;
            cursor: pointer;
            width: 100%;
            font-size: 16px;
        }
        button:hover {
            background: #45a049;
        }
        .result {
            margin-top: 25px;
            padding: 15px;
            background: #e7f3ff;
            border: 1px solid #b3d4fc;
            border-radius: 5px;
            text-align: center;
            font-size: 18px;
        }
        .error {
            color: red;
            text-align: center;
            margin-top: 10px;
        }
    </style>
</head>
<body>

<div class="form-container">
    <form method="post">
        <label>Enter a number:</label> <br>
        <input type="number" step="any"  name="number" class="form" min="0" required> <br> <br>
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
</div>

</body>
</html>
