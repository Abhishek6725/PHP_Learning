<?php

function binarySearch($arr, $target) {
    $low = 0;
    $high = count($arr) - 1;
    
    while ($low <= $high) {
        $mid = floor(($low + $high) / 2);
        
        if ($arr[$mid] == $target) {
            return $mid; 
        }
        
        if ($arr[$mid] < $target) {
            $low = $mid + 1;
        } else {
            $high = $mid - 1;
        }
    }
    return -1; 
}


$array = $target = "";
$result = $error = "";


if ($_SERVER["REQUEST_METHOD"] == "POST") {
    if (empty($_POST["array"]) || empty($_POST["target"])) {
        $error = "Both fields are required.";
    } else {
       
        $array = trim($_POST["array"]);
        $target = trim($_POST["target"]);
        
        
        $arr = explode(",", $array);
        $arr = array_map('trim', $arr); 
        $arr = array_map('intval', $arr); 
        sort($arr); 

        
        $target = intval($target);
        $index = binarySearch($arr, $target);

        if ($index == -1) {
            $result = "The target number $target was not found in the array.";
        } else {
            $result = "The target number $target was found at index $index in the sorted array.";
        }
    }
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Binary Search</title>
</head>
<body>
    <h2>Binary Search in PHP</h2>
    <form method="post" action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>">
        <label for="array">Enter comma-separated numbers:</
