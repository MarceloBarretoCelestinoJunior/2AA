<?php

$car = array("Volvo" ,  "BMW" , "Toyota");

echo count($car);

echo '<br>';

$myArr = array("Volvo",  15, ["apples", "bananas"]);

echo count($myArr);

echo '<br>';

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

echo '<br>';

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
echo $car["year"];
 
?>