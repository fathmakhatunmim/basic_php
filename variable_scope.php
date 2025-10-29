
<?php

// // PHP Variables Scope

// In PHP, variables can be declared anywhere in the script.

// The scope of a variable is the part of the script where the variable can be referenced/used.

// PHP has three different variable scopes:

// local
// global
// static

echo "welcome to scope and local global vars in php<br><br>";
$a = 98;
$b = 100;

function printValue(){
    // $a=98 local variable
    global  $a, $b;//golbal variable 

    echo "<br> the value of your variable a is  $a and $b <br>";
    


}
printValue();
echo var_dump($GLOBALS["a"]);
echo "<br>";
echo var_dump($GLOBALS["b"]);


?>
