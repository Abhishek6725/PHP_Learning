<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Arithmetic Operations in PHP</title>
</head>
<body>
    <h2>Arithmetic Operations Form</h2>

    <?php
    // Check if form is submitted
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Retrieve form data
        $number1 = (float)$_POST['number1'];
        $number2 = (float)$_POST['number2'];
        $operation = $_POST['operation'];
        $result = '';

        // Perform the selected operation
        switch ($operation) {
            case "add":
                $result = $number1 + $number2;
                break;
            case "subtract":
                $result = $number1 - $number2;
                break;
            case "multiply":
                $result = $number1 * $number2;
                break;
            case "divide":
                if ($number2 != 0) {
                    $result = $number1 / $number2;
                } else {
                    $result = "Division by zero is not allowed!";
                }
                break;
            default:
                $result = "Invalid operation selected!";
        }

        // Display the result
        echo "<h3>Result: $result</h3>";
    }
    ?>

    <!-- Arithmetic operations form -->
    <form action="" method="POST">
        <label for="number1">First Number:</label><br>
        <input type="number" id="number1" name="number1" step="any" required><br><br>

        <label for="number2">Second Number:</label><br>
        <input type="number" id="number2" name="number2" step="any" required><br><br>

        <label for="operation">Select Operation:</label><br>
        <input type="radio" id="add" name="operation" value="add" required>
        <label for="add">Addition</label><br>
        
        <input type="radio" id="subtract" name="operation" value="subtract" required>
        <label for="subtract">Subtraction</label><br>
        
        <input type="radio" id="multiply" name="operation" value="multiply" required>
        <label for="multiply">Multiplication</label><br>
        
        <input type="radio" id="divide" name="operation" value="divide" required>
        <label for="divide">Division</label><br><br>

        <input type="submit" value="Calculate">
    </form>
</body>
</html>
