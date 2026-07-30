<?php

// arrow functions 

$numbers = [1, 2, 3, 4, 5];

$square = array_map(function ($number) {
    return $number * $number;
}, $numbers);


// Arrow functions can use global variables
$square_arrow = array_map(fn($n) => $n * $n, $numbers);


echo implode($square);
echo implode($square_arrow);
