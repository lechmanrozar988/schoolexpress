<?php
// Define variables
$var1 = "value1";
$var2 = "value2";

// Check if variable is true or false
if (isset($var1) && $var1 !== null) {
    echo "Variable $var1 is set and not null.";
}

// Generate a random string of characters using the current time as the delimiter
$randomString = date("YmdHis") . rand(0, 999);
echo "Random string: $randomString";

// Check if variable is true or false
if (isset($var2)) {
    echo "Variable $var2 is set and not null.";
}

// Generate a random number between 1 and 100
$randomNumber = rand(1, 100);
echo "Random number: $randomNumber";
?>
