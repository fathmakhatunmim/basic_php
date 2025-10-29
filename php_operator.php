<?php
// Operators are used to perform operations on variables and values.

// PHP divides the operators in the following groups:

// Arithmetic operators
// Assignment operators
// Comparison operators
// Increment/Decrement operators
// Logical operators
// String operators
// Array operators
// Conditional assignment operators

echo "Arithmetic operator<br>";

$a = 10;
$b =11;
 echo ($a + $b);
 echo "<br>";
 echo ($a - $b);
 echo "<br>";
 echo ($a * $b);
 echo "<br>";
 echo ($a / $b);
 echo "<br>";




echo "Comparison Operators<br>";
 if($a == $b){

    echo "true";
 }
 else {
    echo "false";
 }


echo "Increment / Decrement Operators<br>";

// echo ++$a;
//  echo "<br>";//Increments $x by one, then returns $x
// echo $a++;
//  echo "<br>";//Returns $x, then increments $x by one
// echo --$a;
//  echo "<br>";//Decrements $x by one, then returns $x
echo $a--;
 echo "<br>";//Returns $x, then decrements $x by one	


echo "Logical  Operators<br>";

$x = 100;  
$y = 50;

if ($x == 100 and $y == 50) {
    echo "Hello world! <br>";
}
 

$x = 100;  
$y = 50;

if ($x == 100 && $y == 50) {
    echo "Hello world!";
}


?>