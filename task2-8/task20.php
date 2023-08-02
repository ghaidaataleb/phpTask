<?php
function fizzBuzz($n) {
    for ($i = 1; $i <= $n; $i++) {
        if ($i % 3 == 0 && $i % 5 == 0) {
            echo "FizzBuzz ";
        } elseif ($i % 3 == 0) {
            echo "Fizz ";
        } elseif ($i % 5 == 0) {
            echo "Buzz ";
        } else {
            echo $i . " ";
        }
    }
}

// Number of integers to print
$n = 50;

// Print the FizzBuzz sequence
fizzBuzz($n);
?>
