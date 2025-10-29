<?php

// PHP supports the following data types:

// String
// Integer
// Float (floating point numbers - also called double)
// Boolean
// Array
// Object
// NULL
// Resource

echo "int type";
$a = 5;
echo $a . "<br>";
var_dump($a);
echo "<br>";


echo "string type<br>";
$b = "my name is mim";
var_dump($b);
echo "<br>";


echo "float type<br>";
$c = 1.35;
var_dump($c);
echo "<br>";


echo "Boolean type<br>";
$d = true;
var_dump($d);
echo "<br>";


echo "array type<br>";
$e = array("mim", "dim", "cim");
var_dump($e);
echo "<br>";


//object data type

echo " <br>object data type ";
class car
{
    public $model ="<br>". "MV2325" . "<br>";
    public $color = "red " . "<br>";
    public $price = 5000000;
    public $driVerName;

    public function driVerName(){
        return $this -> driVerName;

    }
}

$obj = new car;

echo $obj->model;

echo $obj->color;

echo $obj->price;

echo $obj->driVerName = "<br>Driver name : " ."mim"."<br>";

var_dump($obj);


echo "<br>";
//null data 
$x = "<br>Hello world!";
$x = null;
var_dump($x);