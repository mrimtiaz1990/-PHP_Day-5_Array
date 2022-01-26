<?php

// Descending Order - rsort()

echo "Descending Order Data/Value- rsort()-1: <br>";
$cars = array("Volvo", "BMW", "Toyota");

echo "<pre>";
print_r($cars);
echo "</pre>";
echo "<br><br>";

rsort($cars);

$clength = count($cars);
for ($x = 0; $x < $clength; $x++) {
    echo $cars[$x];
    echo "<br>";
}
echo "<br>";
echo "Descending Order Number- rsort()-2: <br>";
$numbers = array(4, 6, 2, 22, 11);

echo "<pre>";
print_r($numbers);
echo "</pre>";
echo "<br><br>";

rsort($numbers);

$arrlength = count($numbers);
for ($x = 0; $x < $arrlength; $x++) {
    echo $numbers[$x];
    echo "<br>";
}

?>