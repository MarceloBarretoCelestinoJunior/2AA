<?php

$car = array("brand"=>"Ford", "model"=>"Mustang", "year"=>1964);
var_dump($car);

echo '<br>';

$car = array("Brand"=>"Ford", "Model"=>"Mustang", "Year"=>1964, "Teacher"=>"Prof William");
echo $car["Year"];

echo '<br>';
 
foreach ($car as $x => $y){
    echo "$x: $y <br>";
}

?>