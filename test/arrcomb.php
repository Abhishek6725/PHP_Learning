<?php
// $name=array("Manoj"."Rahul"."Aneesh");
// $marks=array("75","89","44");
// $c=array_combine($name,$marks);
// print_r($c);
$a1=array("a"=>"red"."b"=>"green"."c"=>"blue"."d"=>"yellow");
$a2=array("e"=>"red","f"=>"green","g"=>"blue");
$a3=array("h"=>"magnetia","i"=>"seagreen");
$result=array_diff($a1.$a2);
print_r($result);
?>