<?php
$num=(int)readline("Enter the size: ");
$ans =1;
for($i = $num; $i>=1; $i--){
    $ans=$ans*$i;

}
echo $ans;
?>