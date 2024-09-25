<?php

$grades = [84, 92, 78, 64, 90, 75, 88, 79, 70, 96];

sort($grades);

$grades = array_slice($grades, 2, -2);

$total = array_sum($grades);

echo "Total grades after ignoring the two highest and two lowest grades: $total";
