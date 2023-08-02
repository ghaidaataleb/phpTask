<?php
function generatePattern($rows) {
    for ($i = 1; $i <= $rows; $i++) {
        for ($j = 1; $j <= $rows; $j++) {
            if ($i == $j) {
                echo "$i ";
            } else {
                echo "0 ";
            }
        }
        echo PHP_EOL;
    }
}

// Number of rows for the pattern
$rows = 5;

// Generate the pattern
generatePattern($rows);
?>
