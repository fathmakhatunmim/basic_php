<?php

$user = ["name" => "anil", "age" => 30, "email" => "anil@abc.com"];
$userJson = json_encode($user);//array theke jeson a convort kore dau
echo $userJson ;
echo "<br>";


$data = '{ "name": "anil" , "age" : 30 , "email":"anil@abc.com"}';
// echo $data;
$dataArray = json_decode($data);
print_r($dataArray)




?>