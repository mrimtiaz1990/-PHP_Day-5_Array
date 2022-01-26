<?php

$employes = 
[
    "Imtiaz" => "01673734923", 
    "Karim" => "0188746832", 
    "Imtiaz1" => "01673734923", 
    "Karim1" => "0188746832", 
    "Imtiaz2" => "01673734923", 
    "Karim2" => "0188746832", 
    "Imtiaz3" => "01673734923", 
    "Karim3" => "0188746832"
];

// Print Array => print_r

echo "<pre>";
print_r($employes);
echo "</pre>";
echo "<br><br>";

// Print Array manually:

echo "Print [Imtiaz] Array manually: ";
echo $employes["Imtiaz"];
echo "<br>";
echo "Print [Karim3] Array manually: ";
echo $employes["Karim3"];
echo "<br><br><br>";


// Total Output Automated with foreach formula
echo "Total Output Automated with foreach formula: <br><br>";
foreach ($employes as $key => $value) // Find Array Key and Value.
{
    echo "Name : $key and Number : $value <br>"; // After 1st key it goes to 2nd key.
}

?>



