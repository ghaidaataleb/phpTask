<?php
function isPalindrome($string) {
    // Remove non-alphanumeric characters and convert to lowercase
    $cleanedString = preg_replace('/[^a-zA-Z0-9]/', '', strtolower($string));
    
    // Reverse the cleaned string
    $reversedString = strrev($cleanedString);
    
    // Compare the cleaned string with its reverse
    if ($cleanedString === $reversedString) {
        return "Yes, it is a palindrome";
    } else {
        return "No, it is not a palindrome";
    }
}

$sampleInput = "Eva, can I see bees in a cave?";

$output = isPalindrome($sampleInput);
echo $output;
?>
