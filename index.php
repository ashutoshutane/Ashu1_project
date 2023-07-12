<?php
echo " <br> values before swapping";
$num1 = 5;
$num2 = 6;
$num3 = $num1 + $num2;

echo "$num1";
echo "$num2";
echo "$num3";

echo "values after swapping";
$num1 = $num3 - $num1;
$num2 = $num3 - $num2;

echo "$num1";
echo "$num2";


//echo "<br>$num1 + $num2 = $sum";
//var_dump($num1);

//echo "hello world";
//echo 1*3;
?>