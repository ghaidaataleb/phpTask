<?php
class DateDifferenceCalculator {
    private $startDate;
    private $endDate;

    public function __construct($startDate, $endDate) {
        $this->startDate = new DateTime($startDate);
        $this->endDate = new DateTime($endDate);
    }

    public function calculateDifference() {
        $interval = $this->startDate->diff($this->endDate);

        $years = $interval->y;
        $months = $interval->m;
        $days = $interval->d;

        return "Difference: $years years, $months months, $days days.";
    }
}

// Sample Dates
$startDate = '1981-11-03';
$endDate = '2013-09-04';

// Create an instance of DateDifferenceCalculator
$calculator = new DateDifferenceCalculator($startDate, $endDate);

// Calculate and display the difference
$difference = $calculator->calculateDifference();
echo $difference;
?>
