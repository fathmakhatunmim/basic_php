<?php

// There are three access modifiers:

// public - the property or method can be accessed from everywhere. This is default
// protected - the property or method can be accessed within the class and by classes derived from that class
// private - the property or method can ONLY be accessed within the class


//public
class Employee{

    public $name = "Harry";

      public function showName(){
        echo "$this -> name";
     }

}
$harry = new Employee();
 echo $harry -> name;
 echo "<br>";



//private
class Employee1{

    private $name1 = "Harry";

      public function showName(){
        echo $this -> name1;
     }

}
$harry1 = new Employee1();
//  echo $harry -> name;--> this  will not work if harr is private

$harry1 -> showName();

echo "<br>";


//protected -->baire theke sorasori access korte korte parbo na baire theke drive class baniye acess korte parbo



class base{
    protected $name;

    public function __construct($n)
    {
        $this ->name = $n;
    }

    public function show(){
        echo "your name :".$this -> name . "<br>";
    }
}

$test = new base("yahoo baba");

$test -> show();

?>