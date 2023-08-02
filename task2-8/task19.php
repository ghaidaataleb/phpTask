<?php
function countCharacterOccurrences($text, $character) {
    $count = 0;
    for ($i = 0; $i < strlen($text); $i++) {
        if ($text[$i] === $character) {
            $count++;
        }
    }
    return $count;
}

// Sample Input
$text = "Orange Coding Academy";
$character = "c";

// Count the occurrences of the character "c"
$result = countCharacterOccurrences($text, $character);

// Output the result
echo "Occurrences of 'c' in the text: " . $result;
?>
