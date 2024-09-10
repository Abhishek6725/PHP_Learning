
<?php
echo "hello","<br>";
eCHo "welcome to lpu","<br>";
Echo "welcome to php","<br>";
?>
<?="Hello", "<br>";
?>

<?php
$a=10;
echo $a, "<br>";
var_dump("hello");
echo "<br>";
var_dump(5);
echo "<br>";
var_dump(10.57);
echo "<br>";
var_dump(null);
echo "<br>";
 // $_name="abhishek";
// echo "$_name" , "<br>";
// $age="17";
// echo "$age", "<br>";
// $a=$b=4;
// echo "$a"*"$b","<br>";

// $x = "Hello world!";
// $y = 'Hello world!';
// var_dump($x);
// echo "<br>"; 
// var_dump($y); -->
?> 
<?php
eCho<<<END
This is a syntax to disaplay  the text by using and token.
END;
echo "<br>";
?>
<?php
$b=10;
function abc()
{
//  global $b;
static $b=11;

    echo " value of variable inside the function is : $b, <br>";
}
abc();
{
    echo " value of variable outside the function is : $b, <br>";

}
?>
    


