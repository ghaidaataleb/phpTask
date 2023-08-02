<?php
function calculateSum($firstInteger, $secondInteger) {
    $sum = $firstInteger + $secondInteger;
    if ($firstInteger === $secondInteger) {
        $sum *= 3;
        echo "($firstInteger + $secondInteger) * 3 = $sum";
    } else {
        echo "$firstInteger + $secondInteger = $sum";
    }
}

// Sample Input
$firstInteger = 2;
$secondInteger = 2;

// Calculate the sum and check for the condition
calculateSum($firstInteger, $secondInteger);
?>

