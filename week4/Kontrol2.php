<?php

$price = 120_000;

echo "The original price is: " . $price . "<br>";

if ($price > 100_000) {
    $price -= ($price * 0.2);
}

echo "The new price is: " . $price;
