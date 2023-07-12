<?php

echo "write a program to read a number and print sum from 1 to that number<br> ";
$n = 7;
$add = 0;
for($i=1;$i<=$n;$i++){
    $add = $add + $i;
    if($n == $i){
        echo "=";
    }else{
        echo "$i +";
    }
    $add = $add + $i;

}
echo " = $add";
 //$i = 0;//initialize

 /*do{
    //code to be executed
    echo "$i.hello world <br>";
    $i++; //iteration
 }while($i > 10)

 echo "hello world <br> ";
*/
?>