<?php
// Set timezone (India)
date_default_timezone_set("Asia/Kolkata");

// Get current date, day and time
$todayDate = date("d-m-Y");
$todayDay  = date("l");
$currentTime = date("h:i:s A");

echo "<h2>Today's Information</h2>";
echo "Date : <b>$todayDate</b><br>";
echo "Day  : <b>$todayDay</b><br>";
echo "Time : <b>$currentTime</b>";
?>
