<?php


$age = array("Peter" => "86", "Ben" => "37", "Joe" => "43");

echo "<pre>";
print_r($age);
echo "</pre>";
echo "<br><br>";

// (Descending Order), According to Key - krsort()

echo "(Descending Order), According to Key - krsort(): <br>";
krsort($age);

foreach ($age as $x => $x_value) {
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}


?>