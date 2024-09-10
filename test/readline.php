<?php
// Function to find the roots of a quadratic equation
function findRoots($a, $b, $c) {
    // Calculate the discriminant
    $discriminant = $b * $b - 4 * $a * $c;

    // Check if the discriminant is positive, zero, or negative
    if ($discriminant > 0) {
        // Two distinct real roots
        $root1 = (-$b + sqrt($discriminant)) / (2 * $a);
        $root2 = (-$b - sqrt($discriminant)) / (2 * $a);
        echo "Roots are real and different.\n";
        echo "Root 1: $root1\n";
        echo "Root 2: $root2\n";
    } elseif ($discriminant == 0) {
        // One real root
        $root = -$b / (2 * $a);
        echo "Roots are real and the same.\n";
        echo "Root: $root\n";
    } else {
        // Complex roots
        $realPart = -$b / (2 * $a);
        $imaginaryPart = sqrt(-$discriminant) / (2 * $a);
        echo "Roots are complex and different.\n";
        echo "Root 1: $realPart + {$imaginaryPart}i\n";
        echo "Root 2: $realPart - {$imaginaryPart}i\n";
    }
}

// Read coefficients from the user
$a = readline("Enter coefficient a: ");
$b = readline("Enter coefficient b: ");
$c = readline("Enter coefficient c: ");

// Validate input
if (is_numeric($a) && is_numeric($b) && is_numeric($c)) {
    // Convert input to float
    $a = (float)$a;
    $b = (float)$b;
    $c = (float)$c;

    // Ensure a is not zero
    if ($a != 0) {
        findRoots($a, $b, $c);
    } else {
        echo "Coefficient a cannot be zero.\n";
    }
} else {
    echo "Please enter valid numeric coefficients.\n";
}
?>
<?php
// Function to calculate the area of a triangle
function areaOfTriangle($base, $height) {
    return 0.5 * $base * $height;
}

// Function to calculate the area of a rectangle
function areaOfRectangle($length, $width) {
    return $length * $width;
}

// Function to calculate the area of a circle
function areaOfCircle($radius) {
    return pi() * pow($radius, 2);
}

// Function to calculate the area of a square
function areaOfSquare($side) {
    return pow($side, 2);
}

// Read input from the user and calculate areas
echo "Calculate Area of Shapes\n";

// Triangle
$base = readline("Enter the base of the triangle: ");
$height = readline("Enter the height of the triangle: ");
echo "Area of Triangle: " . areaOfTriangle($base, $height) . "\n";

// Rectangle
$length = readline("Enter the length of the rectangle: ");
$width = readline("Enter the width of the rectangle: ");
echo "Area of Rectangle: " . areaOfRectangle($length, $width) . "\n";

// Circle
$radius = readline("Enter the radius of the circle: ");
echo "Area of Circle: " . areaOfCircle($radius) . "\n";

// Square
$side = readline("Enter the side of the square: ");
echo "Area of Square: " . areaOfSquare($side) . "\n";
?>
