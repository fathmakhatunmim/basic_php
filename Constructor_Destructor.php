<?php

class class1{

    //starts with two underscores (__)!
function __construct($b)
{
    //  echo "start";
    //  echo "<br>";

    $this -> a =$b;
}



function fun1(){
    // echo "hello";
    // echo "<br>";
    echo $this -> a ;
    echo "<br>";

}



function __destruct()
{
    echo "end";
    echo "<br>";
}



}


$obj1 = new class1(20);
$obj1 -> fun1();



?>