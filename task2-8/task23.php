<?php
function printPattern($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        // Print spaces
        for ($s = 1; $s <= ($rows - $i); $s++) {
            echo " ";
        }

        // Print letters
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }

        echo PHP_EOL;
    }

    for ($i = $rows - 1; $i >= 1; $i--) {
        // Print spaces
        for ($s = 1; $s <= ($rows - $i); $s++) {
            echo " ";
        }

        // Print letters
        for ($j = 1; $j <= $i; $j++) {
            echo chr(64 + $j) . " ";
        }

        echo PHP_EOL;
    }
}

// Number of rows for the pattern
$rows = 5;

// Print the pattern
printPattern($rows);
?>
