<?php

$fruits = ["Mango", "Apple", "Dapple"];

echo "Ftuits <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";

$vegetable = ['Alu', 'Tomato'];

echo "<br><br> Vagitable <br>";
echo "<pre>";
print_r($vegetable);
echo "</pre>";
echo "<br><br>";

// Array Replace
echo "Array Replace Vagitable with Ftuits: <br>";

$replace = array_replace($fruits, $vegetable);

echo "<pre>";
print_r($replace);
echo "</pre>";

?>