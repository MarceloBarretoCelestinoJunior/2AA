<?php
$x = 2;
$colors = array("red","green","blue","yellow","$x" ,"1" ,"2");

foreach ($colors as $x){
    echo "$x <br>";
}

echo "<br>";
echo "######################";
echo "<br>";

$colors = array ("red","green","blue","yellow");

foreach ($colors as $x){
    if ($x == "blue") break;
    echo "$x <br>";
}

echo "<br>";
echo "######################";
echo "<br>";

foreach ($colors as $x){
    if ($x == "blue") break;
    echo "$x <br>";
}
?>