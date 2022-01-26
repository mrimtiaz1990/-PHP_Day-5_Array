<?php

// To find Random Data/Value from Array to use => array_rand

$colors = ["Red", "Green", "Blue", "Black"];
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><br>";

echo "To find Random Data/Value from Array to use => array_rand: <br><br>";
$randArray = array_rand($colors);

echo "$colors[$randArray]";
echo "<br><br>";

?>