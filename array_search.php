<?php

$fruits = ["Mango", "Apple", "Dapple"];

echo "Ftuits <br>";
echo "<pre>";
print_r($fruits);
echo "</pre>";
echo "<br>";

// Array Search

echo "Array Search (Search (Apple) and result Possiton): <br>";
echo array_search("Apple", $fruits) . "<br>";

?>