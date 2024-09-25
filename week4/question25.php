<?php
$students = [
    ['Alice', 85],
    ['Bob', 92],
    ['Charlie', 78],
    ['David', 64],
    ['Eva', 90],
];
echo " <h2> All students: </h2>";
foreach ($students as $student) {
    echo "Nama: {$student[0]}, Nilai: {$student[1]}<br>";
}
echo "------------------------- <br>";

$totalGrades = 0;
$numStudents = count($students);

foreach ($students as $student) {
    $totalGrades += $student[1];
}


$classAverage = $totalGrades / $numStudents;


echo "Class Average: $classAverage<br><br>";


echo " <h2> Students with grades above the class average:</h2>";
foreach ($students as $student) {
    if ($student[1] > $classAverage) {
        echo "Name: {$student[0]}, Grade: {$student[1]}<br>";
    }
}
