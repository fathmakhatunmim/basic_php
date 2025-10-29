<?php

$user = ["name" => "anil", "age" => 30, "email" => "anil@abc.com"];
$userJson = json_encode($user);//object into json
echo $userJson ;
echo "<br>";


$data = '{ "name": "anil" , "age" : 30 , "email":"anil@abc.com"}';
// echo $data;
$dataArray = json_decode($data);//json into object
print_r($dataArray)




?>