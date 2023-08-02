<?php
function checkEligibilityToVote($age) {
    if ($age >= 18) {
        return "is eligible to vote";
    } else {
        return "is not eligible to vote";
    }
}

// Sample Input (Age of the person)
$age = 15;

// Check eligibility to vote and display the result
echo "The person $age years old " . checkEligibilityToVote($age);
?>
