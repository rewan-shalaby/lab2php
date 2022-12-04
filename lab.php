<?php
// echo nl2br("hi\n");
// echo nl2br("rewan\r\n from everyone");

// echo strrev("Hello World!");

// echo strpbrk("Hello world!","l");

// echo substr("Hello world",10)."<br>";
// echo substr("Hello world",1)."<br>";
// echo substr("Hello world",3)."<br>";
// echo substr("Hello world",7)."<br>";
// echo substr("Hello world",-1)."<br>";
// echo substr("Hello world",-10)."<br>";
// echo substr("Hello world",-8)."<br>";
// echo substr("Hello world",-4)."<br>";

echo "<pre>";
print_r ($_SERVER);
echo "</pre>";

$a = array(12, 45, 10, 25);
echo "<pre>";
print_r ($a);
echo "</pre>";
echo "<br>";
echo "The sum of array=".array_sum($a)."<br>";
$avg=array_sum($a)/count($a);
echo "The average of array=".$avg."<br>";
$reversed = array_reverse($a);
echo "<pre>";
print_r ($reversed);
echo "</pre>";
echo "<br>";

$b=array("Sara"=>31,"John"=>41,"Walaa"=>39,"Ramy"=>40) ;
echo "<pre>";
asort($b);
print_r ($b);
echo "</pre>";
echo "<pre>";
ksort($b);
print_r ($b);
echo "</pre>";
echo "<pre>";
arsort($b);
print_r ($b);
echo "</pre>";
echo "<pre>";
krsort($b);
print_r ($b);
echo "</pre>";


?>