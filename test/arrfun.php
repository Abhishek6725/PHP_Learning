<?php
echo "<h2>Array Built-in Functions</h2>";

// Creating an array
$numbers = array(1, 2, 3, 4, 5);

// count() - Get the number of elements in an array
echo "Number of elements in the array: " . count($numbers) . "<br>";

// in_array() - Check if a value exists in an array
echo "Does the array contain the value 3? " . (in_array(3, $numbers) ? "Yes" : "No") . "<br>";

// array_push() - Add one or more elements to the end of an array
array_push($numbers, 6, 7);
echo "Array after adding elements: ";
print_r($numbers);
echo "<br>";

// array_pop() - Remove and return the last element of an array
echo "Last element removed: " . array_pop($numbers) . "<br>";
echo "Array after removing the last element: ";
print_r($numbers);
echo "<br>";

// array_unshift() - Add one or more elements to the beginning of an array
array_unshift($numbers, 0);
echo "Array after adding element at the beginning: ";
print_r($numbers);
echo "<br>";

// array_shift() - Remove and return the first element of an array
echo "First element removed: " . array_shift($numbers) . "<br>";
echo "Array after removing the first element: ";
print_r($numbers);
echo "<br>";

// sort() - Sort the array in ascending order
sort($numbers);
echo "Sorted array (ascending order): ";
print_r($numbers);
echo "<br>";

// rsort() - Sort the array in descending order
rsort($numbers);
echo "Sorted array (descending order): ";
print_r($numbers);
echo "<br>";
?>
