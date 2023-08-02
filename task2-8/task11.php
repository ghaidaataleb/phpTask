<?php
function calculateAverage($scores) {
    $totalSubjects = count($scores);
    $totalScore = array_sum($scores);
    $average = $totalScore / $totalSubjects;
    return $average;
}

function calculateGrade($average) {
    if ($average < 60) {
        return 'F';
    } elseif ($average < 70) {
        return 'D';
    } elseif ($average < 80) {
        return 'C';
    } elseif ($average < 90) {
        return 'B';
    } else {
        return 'A';
    }
}

// Sample Inputs (Scores in all subjects)
$scores = [60, 86, 95, 63, 55, 74, 79, 62, 50];

// Calculate the average
$averageScore = calculateAverage($scores);

// Calculate the grade based on the average
$grade = calculateGrade($averageScore);

// Output the grade
echo "The student's grade is: $grade";
?>
