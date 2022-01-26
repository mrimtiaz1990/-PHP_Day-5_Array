<?php

$products = 
[
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ],
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ],
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ],
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ],
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ],
    [
        "Product" => "Alo",
        "Price" => "Tk. 15",
        "Stock" => "10 Kg",
        "Description" => "Lorem ipsum zum herunterladen Hier können.",
    ]
];

// Print Array => print_r

echo "<pre>";
print_r($products);
echo "</pre>";

echo "<br><br>";

// with for and foreach loop

echo "with for and foreach loop: <br>";
for ($i=0; $i <count($products) ; $i++) { 
    echo "<br>";
    foreach ($products[$i] as $key => $value) {
        echo "$key : $value <br>";
    }
}

echo "<br><br>";

// with foreach loop

echo "with foreach loop: <br>";
foreach ($products as $productList) {
    foreach ($productList as $key => $value) {
        echo "$key: $value <br>";
    }
    echo "<br>";
}

?>