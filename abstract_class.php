<?php

abstract class parentClass{

    public $name;
    abstract protected function calc($a , $b);
}

class childClass extends  parentClass{

   public function calc($c , $d)//abstruct jemon function declear korbo same to same funtion driveclass a bebohar korte hobe
   {
    echo $c + $d;
   }
}

$test = new childClass();
$test -> calc (20,30);
?>