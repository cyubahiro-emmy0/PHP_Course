<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Student Grade Calculator</title>
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

<h2>Student Grade Calculator</h2>

<div class="form-container">
    <form method="POST">
        <label for="percentage">Enter Student Marks (Percentage):</label>
        <input type="number" id="percentage" name="percentage" min="0" max="100" step="0.01" required placeholder="e.g. 85.5">
        <button type="submit" name="submit">Display Grade</button>
    </form>

    <?php
    if (isset($_POST['submit'])) {
        $percentage = floatval($_POST['percentage']);

        // Basic validation
        if ($percentage < 0 || $percentage > 100) {
            echo '<div class="error">Error: Percentage must be between 0 and 100.</div>';
        } else {
            // Remove decimal part for switch (as per typical grade rules)
            $marks = (int)floor($percentage);

            // Determine grade using switch
            switch (true) {
                case ($marks >= 90 && $marks <= 100):
                    $grade = 'A';
                    break;
                case ($marks >= 80 && $marks <= 89):
                    $grade = 'B';
                    break;
                case ($marks >= 70 && $marks <= 79):
                    $grade = 'C';
                    break;
                case ($marks >= 60 && $marks <= 69):
                    $grade = 'D';
                    break;
                case ($marks >= 50 && $marks <= 59):
                    $grade = 'E';
                    break;
                case ($marks >= 40 && $marks <= 49):
                    $grade = 'F';
                    break;
                case ($marks >= 30 && $marks <= 39):
                    $grade = 'S';
                    break;
                default: // below 30
                    $grade = 'U';
                    break;
            }

            echo '<div class="result">';
            echo "Percentage: " . number_format($percentage, 1) . "%<br>";
            echo "Grade: <strong>$grade</strong>";
            echo '</div>';
        }
    }
    ?>
</div>

</body>
</html>