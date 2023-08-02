<?php
function generatePattern($rows) {
    $num = ord('A');
    for ($i = 0; $i < $rows; $i++) {
        for ($j = 0; $j <= $i; $j++) {
            echo chr($num) . " ";
        }
        $num++;
        echo PHP_EOL;
    }
}

// Number of rows for the pattern
$rows = 5;

// Generate the pattern
generatePattern($rows);
?>
