<?php

// $input = "Hello, my email is example@domain.com";

// $pattern = "/[a-z0-9_\.-]+@[a-z0-9_\.-]+\.[a-z]{2,5}/i";

// if (preg_match($pattern, $input, $matches)) {
//     echo "Match found: " . $matches[0];
// } else {
//     echo "No match found.";
// }


$string = "Hello everyone";


$pattern = "/php/i";

preg_match($pattern, $string, $matches,PREG_OFFSET_CAPTURE);
print_r($matches);

?>
