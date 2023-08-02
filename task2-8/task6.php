<?php
function checkInRange($number) {
    return ($number >= 20 && $number <= 50);
}

// Sample Input
$number = 50;

// Check if the number is in the range [20-50] inclusive
if (checkInRange($number)) {
    echo "true";
} else {
    echo "false";
}
?>
