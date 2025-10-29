<?php

// In PHP, there are three types of arrays:

// Indexed arrays - Arrays with a numeric index
// Associative arrays - Arrays with named keys
// Multidimensional arrays - Arrays containing one or more arrays

echo "index array<br><br>";

$cars = array("Volvo", "BMW", "Toyota");
echo $cars[0];
var_dump($cars);
echo "<br><br>";




$foods = array("apple" , "orange" , "banana" , "coconut");
echo count($foods);
echo "<br>";

// $foods[0] = "pineapple";

// array_push($foods,"pineapple" ,"kiwi"."<br>");

// array_pop($foods);

// array_shift($foods);

$reversed_foods = array_reverse($foods);
foreach($reversed_foods as $food){
    echo $food . "<br>";
}


echo "<br>";


foreach($foods as $food){
    echo $food . "<br>";
}

echo "<br><br>";
echo "associative array<br>";

$favCol = array(
    'Shm' => 'red',
    'Vam' => 'green',
    'Sham' => 'blue'
);
 echo "<br>";
//  echo $favCol['Sham'];

  foreach($favCol as $key => $value){
    echo "<br> favorite color of $key is $value" ." <br>";
   
 }


echo "<br><br>";
echo "Multidimensional Arrays<br>";
{
    //create 2 dimentional array
    $multiDim = array(
        array(2,3,7,8),
        array(1,2,3,1),
        array(4,5,7,8)
    );

    // echo var_dump($multiDim);

    // echo $multiDim[1][0];
// for($i=0; $i < count($multiDim); $i++){
//     echo var_dump(($multiDim[$i]));
//     echo "<br>";
// }

for ($i= 0; $i < count($multiDim); $i++)//outer loop ja array potita ta row ar upor diye jabe

    {
    for ($j = 0 ; $j < count($multiDim[$i]); $j++)//inner loop ja row ar vitor jotota sokhaa acche ta diye jabe

        {
        echo $multiDim[$i][$j];// first a [0][0] then [0][1]
        echo " ";
    }
    echo "<br>";
}





}















?>