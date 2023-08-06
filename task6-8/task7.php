<?php
function removeDuplicates($array) {
    $uniqueArray = array_values(array_unique($array));
    return $uniqueArray;
}

$array1 = array(2, 4, 7, 4, 8, 4);
$filteredArray = removeDuplicates($array1);

print_r($filteredArray);
?>
