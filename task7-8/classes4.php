<?php
class ArraySorter {
    public function sortArray($array) {
        sort($array);
        return $array;
    }
}

// Sample array
$sampleArray = array(11, -2, 4, 35, 0, 8, -9);

// Create an instance of the ArraySorter class
$sorter = new ArraySorter();

// Call the sortArray method and display the sorted array
$sortedArray = $sorter->sortArray($sampleArray);
print_r($sortedArray);
?>
