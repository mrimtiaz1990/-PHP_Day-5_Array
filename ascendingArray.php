<?php

// Ascending Order - sort()
echo "Ascending Order Data/Value - sort()-1: <br>";
$cars = array("Volvo", "BMW", "Toyota");

echo "<pre>";
print_r($cars);
echo "</pre>";
echo "<br><br>";

sort($cars);

$clength = count($cars);
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
echo "Ascending Order Number- sort()-2: <br>";
$numbers = array(4, 6, 2, 22, 11);

echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<br><br>";

sort($numbers);

$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

?>