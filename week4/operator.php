<?php
$a = 10;
$b = 5;

$hasilTambah = $a + $b;
$hasilKurang = $a - $b;
$hasilKali = $a * $b;
$hasilBagi = $a / $b;
$sisaBagi = $a % $b;
$pangkat = $a ** $b;

$hasilSama = $a == $b;
$hasilTidakSama = $a != $b;
$hasilLebihKecil = $a < $b;
$hasilLebihBesar = $a > $b;
$hasilLebihKecilSama = $a <= $b;
$hasilLebihBesarSama = $a >= $b;

$hasilAnd = $a && $b;
$hasilOr = $a || $b;
$hasilNotaA = !$a;
$hasilNotaB = !$b;

$hasilSumation = $a += $b;
$hasilSubtraction = $a -= $b;
$hasilMultiplication = $a *= $b;
$hasilInivision = $a /= $b;
$hasilRemainderDivideBy = $a %= $b;

$hasilIdentik = $a === $b;
$hasilTidakIdentik = $a !== $b;

echo "Hasil tambah: {$hasilTambah} <br>";
echo "Hasil Kurang: {$hasilKurang} <br>";
echo "Hasil Kali: {$hasilKali} <br>";
echo "Hasil Bagi: {$hasilBagi} <br>";
echo "Sisa Bagi: {$sisaBagi} <br>";
echo "Pangkat: {$pangkat} <br>";

echo "<br>";

echo "Apakah $a sama dengan $b " . ($hasilSama ? 'true' : 'false') . "<br>";
echo "Apakah $a tidak sama dengan $b ? " . ($hasilTidakSama ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih kecil dari $b ? " . ($hasilLebihKecil ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih besar dari $b ? " . ($hasilLebihBesar ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih kecil atau sama dengan $b ? " . ($hasilLebihKecilSama ? 'true' : 'false') . "<br>";
echo "Apakah $a lebih besar atau sama dengan $b ? " . ($hasilLebihBesarSama ? 'true' : 'false') . "<br>";


echo "<br>";

echo "Hasil AND: " . ($hasilAnd ? 'true' : 'false') . "<br>";
echo "Hasil OR: " . ($hasilOr ? 'true' : 'false') . "<br>";
echo "Hasil NOT A: " . ($hasilNotaA ? 'true' : 'false') . "<br>";
echo "Hasil NOT B: " . ($hasilNotaB ? 'true' : 'false') . "<br>";

echo "<br>";

echo "Hasil Sumation: {$hasilSumation} <br>";
echo "Hasil Substraction: {$hasilSubtraction} <br>";
echo "Hasil Multiplication: {$hasilMultiplication} <br>";
echo "Hasil Inivision: {$hasilInivision} <br>";
echo "Hasil Remainder Divide By: {$hasilRemainderDivideBy} <br>";

echo "<br>";

echo "Hasil Identik: {$hasilIdentik} <br>";
echo "Hasil Tidak Identik: {$hasilTidakIdentik} <br>";
