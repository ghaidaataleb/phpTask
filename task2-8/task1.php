<?php
function isLeapYear($year) {
    if ($year % 4 !== 0) {
        return false;
    } elseif ($year % 100 !== 0) {
        return true;
    } elseif ($year % 400 !== 0) {
        return false;
    } else {
        return true;
    }
}

function checkLeapYear($year) {
    if (isLeapYear($year)) {
        echo "This year is a leap year";
    } else {
        echo "This year is not a leap year";
    }
}

// Sample Input
$year = 2013;

// Check if it's a leap year or not
checkLeapYear($year);
?>
