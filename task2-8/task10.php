<?php
function checkNumber($number) {
    if ($number > 0) {
        return "Positive";
    } elseif ($number < 0) {
        return "Negative";
    } else {
        return "Zero";
    }
}

// Sample Input (Number)
$number = -60;

// Check whether the number is positive, negative, or zero
$result = checkNumber($number);
echo $result;
?>
