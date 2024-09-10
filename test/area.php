<?php
// Function to calculate the area of a triangle
function areaOfTriangle($base, $height)
{
    return 0.5 * $base * $height;
}

// Function to calculate the area of a rectangle
function areaOfRectangle($length, $width)
{
    return $length * $width;
}

// Function to calculate the area of a circle
function areaOfCircle($radius)
{
    return pi() * pow($radius, 2);
}

// Function to calculate the area of a square
function areaOfSquare($side)
{
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
