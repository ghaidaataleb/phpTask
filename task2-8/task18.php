<?php
function fibonacciSequence($n) {
    $fib = array();
    $fib[0] = 0;
    $fib[1] = 1;

    for ($i = 2; $i < $n; $i++) {
        $fib[$i] = $fib[$i - 1] + $fib[$i - 2];
    }

    // Print the Fibonacci sequence
    echo implode(", ", $fib);
}

// Number of terms in the Fibonacci sequence
$n = 10;

// Generate and print the Fibonacci sequence
fibonacciSequence($n);
?>
