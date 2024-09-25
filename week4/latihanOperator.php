<?php
$totalSeats = 45;
$occupiedSeats = 28;

$emptySeats = $totalSeats - $occupiedSeats;
$percentageEmpty = ($emptySeats / $totalSeats) * 100;


echo "Percentage of empty seats: " . $percentageEmpty . "%";
