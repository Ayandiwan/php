<?php
$year = 2026; // Change year as needed

// Start from 1st January of the year
$date = strtotime("01-01-$year");

// End date of the year
$endDate = strtotime("31-12-$year");

echo "<h3>All Saturdays in Year $year</h3>";

while ($date <= $endDate) {
    // Check if day is Saturday (6 = Saturday)
    if (date("w", $date) == 6) {
        echo date("d-m-Y", $date) . "<br>";
    }
    // Move to next day
    $date = strtotime("+1 day", $date);
}
?>
