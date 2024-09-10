<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>User Input Example</title>
</head>
<body>
    <h2>Enter Your Details</h2>
    <form method="post" action="">
        <label for="name">Name:</label><br>
        <input type="text" id="name" name="name" required><br><br>
        
        <label for="age">Age:</label><br>
        <input type="number" id="age" name="age" required><br><br>
        
        <label for="a">Enter a value for A:</label><br>
        <input type="number" id="a" name="a" required><br><br>
        
        <label for="b">Enter a value for B:</label><br>
        <input type="number" id="b" name="b" required><br><br>
        
        <input type="submit" value="Submit">
    </form>

    <?php
    if ($_SERVER["REQUEST_METHOD"] == "POST") {
        // Get the form data
        $name = htmlspecialchars($_POST['name']);
        $age = htmlspecialchars($_POST['age']);
        $a = (int)$_POST['a'];  // Convert to integer
        $b = (int)$_POST['b'];  // Convert to integer
        
      
        echo "<h2>Your Input:</h2>";
        echo "Name: " . $name . "<br>";
        echo "Age: " . $age . "<br>";
        
 
        $product = $a * $b;
        echo "Product of A and B: " . $product . "<br>";
    }
    ?>
</body>
</html>

