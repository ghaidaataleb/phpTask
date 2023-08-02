<?php
function getSeason($temperature) {
    if ($temperature < 20) {
        return "winter";
    } else {
        return "summer";
    }
}

function checkSeason($temperature) {
    $season = getSeason($temperature);
    echo "It is $season time!";
}

// Sample Input
$temperature = 27;

// Check the season based on the temperature
checkSeason($temperature);
?>
