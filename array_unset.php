<?php

// To delete Spacic Data from Array Possition Use unset()

$colors = ["Red", "Green", "Blue", "Black"];
echo "<pre>";
print_r($colors);
echo "</pre>";
echo "<br><br>";

echo "To delete Spacic Data (Possiton[2]) from Array Possition Use unset(): ";

unset($colors[2]);
echo "<pre>";
print_r($colors);
echo "</pre>";

?>