<?php

$sProducts = 
[
    [
        "Alo",
        "15",
        "10kg",
        "Lorem ipsum zum herunterladen Hier können verschieden",
    ],
    [
        "Potol",
        "30",
        "20kg",
        "Lorem ipsum zum herunterladen Hier können verschieden",
    ],
    [
        "Folkopy",
        "18",
        "15kg",
        "Lorem ipsum zum herunterladen Hier können verschieden",
    ],
    [
        "Badhakopy",
        "22",
        "25kg",
        "Lorem ipsum zum herunterladen Hier können verschieden",
    ],
    [
        "Shim",
        "28",
        "30kg",
        "Lorem ipsum zum herunterladen Hier können verschieden",
    ]
];

// Print Array => print_r

echo "<pre>";
print_r($sProducts);
echo "</pre>";
echo "<br><br>";

// Simple Multidimensional Array Manually

echo "Simple Multidimensional Array Manually: ";
echo "<br>";
echo $sProducts[0][0] . ": Price: " . $sProducts[0][1] . " and Stock: " . $sProducts[0][2];
echo "<br>";
echo $sProducts[1][0] . ": Price: " . $sProducts[1][1] . " and Stock: " . $sProducts[1][2];
echo "<br><br>";

// Simple Multidimensional Array with for and foreach loop
echo "Simple Multidimensional Array with for and foreach loop : <br>";
for ($i=0; $i <count($sProducts) ; $i++) 
{
    echo "<br>";
    foreach ($sProducts[$i] as $value) {
        echo "$value <br>";
    }
}
echo "<br><br>";

// Simple Multidimensional Array with foreach loop
echo "Simple Multidimensional Array with foreach loop : <br><br>";
foreach ($sProducts as $key) 
{
    foreach ($key as $value) {
        echo $value ."<br>";
    } echo"<br>";
}
?>