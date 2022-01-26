<?php


$age = array("Peter" => "86", "Ben" => "37", "Joe" => "43");

echo "<pre>";
print_r($age);
echo "</pre>";
echo "<br><br>";

// (Ascending Order), According to Key - ksort()

echo "(Ascending Order), According to Key - ksort(): <br>";

ksort($age);

foreach ($age as $x => $x_value) 
{
    echo "Key = " . $x . ", Value = " . $x_value;
    echo "<br>";
}

?>