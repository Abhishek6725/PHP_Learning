<?php
$number = "";
$error = "";
$table = "";

if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["number"])) {
        $error = "Please enter a number.";
    } else {
        $number = intval(trim($_POST["number"]));
        $table = "<h3>Multiplication Table of $number</h3>";
        $table .= "<ul>";
        for ($i = 1; $i <= 10; $i++) {
            $table .= "<li>$number x $i = " . ($number * $i) . "</li>";
        }
        $table .= "</ul>";
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Multiplication Table</title>
</head>
<body>
    <h2>Enter a Number to Get Its Multiplication Table</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="number">Number:</label><br>
        <input type="text" name="number" value="<?php echo $number; ?>" placeholder="Enter a number"><br><br>
        <input type="submit" value="Generate Table"><br><br>
    </form>

    <?php
    if (!empty($error)) {
        echo "<p style='color:red;'>$error</p>";
    }

    if (!empty($table)) {
        echo $table;
    }
    ?>
</body>
</html>

