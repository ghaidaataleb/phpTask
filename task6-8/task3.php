<?php
function checkLowerCase($string) {
    if (strtolower($string) === $string) {
        return "Your String is Ok";
    } else {
        return "Your String contains uppercase characters";
    }
}

$sampleInput = "remove";
$output = checkLowerCase($sampleInput);
echo $output;
?>
