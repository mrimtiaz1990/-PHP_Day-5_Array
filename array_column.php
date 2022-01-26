<?php

$stdList =
    [
        [
            "Name" => "Imtiaz",
            "result" => 3.90,
        ],
        [
            "Name" => "Anas",
            "result" => 3.89,
        ],
        [
            "Name" => "Mujahed",
            "result" => 3.88,
        ],
    ];
echo "<pre>";
print_r($stdList);
echo "</pre>";
echo "<br>";

//To find spacific data from Array => Use array column (array_column)

echo "To find spacific data from Array => Use array column: <br>";

$find_name = array_column($stdList, "Name");

echo "<pre>";
print_r($find_name);
echo "</pre>";
echo "<br>";

?>