<?php
function isArmstrong($number) {
    $originalNumber = $number;
    $sum = 0;
    
    while ($number > 0) {
        $digit = $number % 10;
        $sum += pow($digit, 3);
        $number = (int)($number / 10);
    }
    
    if ($sum === $originalNumber) {
        return true;
    } else {
        return false;
    }
}

$sampleInput = 407;

if (isArmstrong($sampleInput)) {
    echo "$sampleInput is Armstrong Number";
} else {
    echo "$sampleInput is not Armstrong Number";
}
?>
