<?php

//if(Condição){Execução}

if (5 > 3){
    echo "Have a good day and good idea";

}
echo "<br>";
echo "#########################";
echo "<br>";

if (3 != 5){
    echo "Have a good day and good idea";

}
echo "<br>";
echo "#########################";
echo "<br>";

$t = 1;
if ($t != 5){
    echo "Have a good day and good idea"; 
}
echo "<br>";
echo "#########################";
echo "<br>";

$y = 14;
if ($y == 20){
    echo "Have a good day and good idea";
} else {
    echo "Not have a good day and good idea";
}
echo "<br>";
echo "#########################";
echo "<br>";

$z = date("H") - 3;

echo "$z";
echo "<br>";
if ($z < "13") {
    echo "Have a good day!";
} else {
    echo "have a good afternoon!";
}
echo "<br>";
echo "#########################";
echo "<br>";

$n = date("H");

echo ("$n");
echo "<br>";
$n = date("H") - 3;

echo("$n");
echo "<br>";

if($n < "8"){
    echo "Have a gooda morning!";
} elseif($n < "12"){
    echo "Have a good day!";
} else{
    echo "Have a good night!";
}

echo "<br>";
echo "#########################";
echo "<br>";
?>