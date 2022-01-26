<?php

// To combine Two Array Data Combine =>  Array Combine // array_combine

echo "To combine Two Array Data Combine =>  Array Combine:  <br>";

$colors = ["red", "green", "blue", "black"];
echo "Colors: ";
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br>";
$possition = [1, 2, 3, 4];
echo "Possition: ";
echo "<pre>";
print_r($possition);
echo "</pre>";
echo "<br>";
$person = ["Imtiaz", "Emon", "Tarek", "Masum"];
echo "Persons: ";
echo "<pre>";
print_r($person);
echo "</pre>";
echo "<br>";

$combineOne = array_combine($colors, $possition);
$combineTwo = array_combine($person, $colors);

echo "To combine Colors and Possition: <br>";
echo "<pre>";
print_r($combineOne);
echo "</pre>";
echo "<br>";
echo "To combine Persons and Colors: <br>";
echo "<pre>";
print_r($combineTwo);
echo "</pre>";
echo "<br>";

?>
