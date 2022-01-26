<?php

// Indexed  Array
$names = ["Imtiaz", "Karim", "Rahim", "Mujahid", "Imtia", "Karim", "Rahim", "Mujahid"];

// To show Array List as Programming View => print_r
echo "Indexed Array <br><br>";
echo "<pre>";
print_r($names);
echo "</pre>";
echo "<br><br><br>";

// Associative  Array
$employes = ["Imtiaz" => "01673734923", "Karim" => "0188746832", "Imtiaz1" => "01673734923", "Karim" => "0188746832", "Imtiaz" => "01673734923", "Karim" => "0188746832", "Imtiaz" => "01673734923", "Karim" => "0188746832"];

echo "Associative  Array <br><br>";
echo "<pre>";
print_r($employes);
echo "</pre>";
echo "<br><br><br>";


// Multidimensional Array
$products =
    [
        [
            "Product" => "Alo",
            "Price" => "Tk. 15",
            "Stock" => "10 Kg",
            "Description" => "Lorem ipsum zum herunterladen",
            "comments" =>
            [
                "user" => "abc-01",
                "comment" => "Nice One",
                "like" =>
                [
                    "Like" => true,
                    "Love" => false,
                ],
            ],
        ],
    ];

echo "Multidimensional Array <br><br>";
echo "<pre>";
print_r($products);
echo "</pre>";

?>