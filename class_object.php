<?php

 class class1{

    public $a=2;

    function fun1(){
        // echo "fun1";
        // echo $this -> a;
        return $this -> a;
    }

 function fun2(){
        echo "fun1";
    }


 }

    $obj = new class1();
    // $obj -> fun1();
    echo $obj -> a;


// class class1 {
//     public $a = 1;

//     function fun1(){
//         return $this->a++;
//     }
// }

// $obj1 = new class1();

// // $obj2 = new class1();

// $obj1->fun1();
// echo $obj1->a . "<br>";
// // echo $obj2->a;




















 ?>