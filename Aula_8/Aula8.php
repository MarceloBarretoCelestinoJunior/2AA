<?php
echo "<br>";
echo "######################";
echo "<br>";

for ($x = 0; $x <= 10; $x++){
    echo "The number is: $x <br>";
}
echo "<br>";
echo "######################";
echo "<br>";

for ($x = 0; $x <= 100; $x++){
    if($x == 3) break;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "######################";
echo "<br>";

for ($x = 0; $x <= 10; $x++){
    if($x == 5) continue;
    echo "The number is: $x <br>";
}

echo "<br>";
echo "######################";
echo "<br>";

for ($x = 0; $x <= 10; $x+=2){
    echo "The number is: $x <br>";
}

?>