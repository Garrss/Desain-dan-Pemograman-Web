<?php
$points = 800;

$totalScore = "Player's total score is: $points";
$additionalReward = $points > 500 ? 'YES' : 'NO';

echo $totalScore . PHP_EOL;
echo "Do players get additional rewards? ($additionalReward)";
