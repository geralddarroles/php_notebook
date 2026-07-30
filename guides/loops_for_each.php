<?php

$basket = ["apple", "banana", "orange", "grape", "strawberry"];
$basket2 = ["apple" => 3, "banana" => 4];

foreach ($basket2 as $item => $quantity) {
    echo "$item: $quantity \n";
    $total += $quantity;
}
