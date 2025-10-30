<?php

class base {

    public static $name = "yahoo baba";//properties

    public static function show()//method
    {
        echo self:: $name;

    }

    public function __construct($n)
    {
      self :: $name = $n;   
    }
}

// echo base :: $name;
// base :: show();


$test = new base("wow");
$test -> show();





?>