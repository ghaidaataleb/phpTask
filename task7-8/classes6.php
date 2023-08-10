<?php
class StringToDateConverter {
    private $inputString;

    public function __construct($inputString) {
        $this->inputString = $inputString;
    }

    public function convertToDate() {
        $date = DateTime::createFromFormat('d-m-Y', $this->inputString);
        return $date->format('Y-m-d');
    }

    public function convertToDateTime() {
        $dateTime = DateTime::createFromFormat('d-m-Y H:i:s', $this->inputString . ' 00:00:00');
        return $dateTime->format('Y-m-d H:i:s');
    }
}

// Sample Date
$inputString = '12-08-2004';

// Create an instance of StringToDateConverter
$converter = new StringToDateConverter($inputString);

// Convert to Date and DateTime
$date = $converter->convertToDate();
$dateTime = $converter->convertToDateTime();

echo "Input String: $inputString<br>";
echo "Converted Date: $date<br>";
echo "Converted DateTime: $dateTime";
?>
