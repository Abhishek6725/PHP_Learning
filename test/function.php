<?php
function abc()
{
    static $a=10;
    echo $a, "<br>";
    $a++;
}
abc();
{
    echo "<br>";
    abc();
    echo "<br>";
    abc();

}
?>