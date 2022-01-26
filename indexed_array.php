<?php

$names = ["Imtiaz", "Karim", "Rahim", "Mujahid", "Imtia", "Karim", "Rahim", "Mujahid"];

echo "<pre>";
print_r($names);
echo "</pre>";
echo "<br><br>";

// Print Array manually:

echo "Print [2] Array manually: ";
echo $names[2];
echo "<br><br><br>";


// Print All array without count For Loop

echo "Print All array without count For Loop: <br>";
for ($i = 0; $i < count($names); $i++) {
    echo "$names[$i] <br>";
}
echo "<br><br>";

// Count Array:
echo "Count Array";
$countNames = count($names);
echo "Total Data/Value in Array = $countNames <br><br>";

// Print All array with For Loop

echo "Print All array with For Loop <br>";
for ($i = 0; $i < $countNames; $i++) {
    echo "$names[$i] <br>";
}

?>