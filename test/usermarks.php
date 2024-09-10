<?php

$marks = readline("Enter your marks: ");


$marks = (int)$marks;


if ($marks >= 90) {
    echo "Grade: A\n";
} elseif ($marks >= 80) {
    echo "Grade: B\n";
} elseif ($marks >= 70) {
    echo "Grade: C\n";
} elseif ($marks >= 60) {
    echo "Grade: D\n";
} else {
    echo "Grade: F\n";
}
?>
