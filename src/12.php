<?php
// Function to generate a random integer between 1 and 100
function getRandomNumber() {
    return mt_rand(1, 100);
}

// Function to check if a number is prime
function isPrime($n) {
    if ($n < 2) {
        return false;
    }
    for ($i = 2; $i <= sqrt($n); $i++) {
        if ($n % $i == 0) {
            return false;
        }
    }
    return true;
}

// Example usage of the functions
$number = getRandomNumber();
if (isPrime($number)) {
    echo "$number is a prime number.";
} else {
    echo "$number is not a prime number.";
}
?>
