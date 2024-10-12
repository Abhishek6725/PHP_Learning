<?php
// Initialize variables
$sum = 0;
$count = 0;

// Ask the user to input numbers until they type 'done'
echo "Enter numbers to calculate the average. Type 'done' when you're finished:\n";

while (true) {
    // Get user input
    $input = readline("Enter a number (or type 'done'): ");
    
    // Check if the user wants to stop
    if (strtolower($input) === 'done') {
        break;
    }

    // Validate that the input is a valid number
    if (is_numeric($input)) {
        $sum += $input;
        $count++;
    } else {
        echo "Please enter a valid number.\n";
    }
}

// Calculate and display the average
if ($count > 0) {
    $average = $sum / $count;
    echo "The average of the numbers is: " . $average . "\n";
} else {
    echo "No valid numbers were entered.\n";
}
?>
