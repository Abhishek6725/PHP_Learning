<?php
echo "<h2>Student Array Built-in Functions</h2>";

// Creating an array of students
$students = array(
    array("name" => "Alice", "age" => 20, "university" => "University A"),
    array("name" => "Bob", "age" => 22, "university" => "University B"),
    array("name" => "Charlie", "age" => 21, "university" => "University C")
);

// count() - Get the number of students
echo "Number of students: " . count($students) . "<br>";

// Adding a new student using array_push()
$new_student = array("name" => "David", "age" => 23, "university" => "University D");
array_push($students, $new_student);
echo "Array after adding a new student: ";
print_r($students);
echo "<br>";

// Removing the last student using array_pop()
$removed_student = array_pop($students);
echo "Removed student: ";
print_r($removed_student);
echo "<br>";
echo "Array after removing the last student: ";
print_r($students);
echo "<br>";

// Adding a student to the beginning using array_unshift()
$new_student = array("name" => "Eve", "age" => 24, "university" => "University E");
array_unshift($students, $new_student);
echo "Array after adding a student at the beginning: ";
print_r($students);
echo "<br>";

// Removing the first student using array_shift()
$removed_student = array_shift($students);
echo "Removed first student: ";
print_r($removed_student);
echo "<br>";
echo "Array after removing the first student: ";
print_r($students);
echo "<br>";

// Sorting students by age using usort()
usort($students, function($a, $b) {
    return $a['age'] - $b['age'];
});
echo "Array sorted by age: ";
print_r($students);
echo "<br>";

// Checking if a student from a specific university exists using array_column() and in_array()
$universities = array_column($students, 'university');
echo "Does the array contain a student from 'University B'? " . (in_array("University B", $universities) ? "Yes" : "No") . "<br>";
?>
