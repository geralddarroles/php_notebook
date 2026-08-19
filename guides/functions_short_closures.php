<?php

// arrow functions 
$numbers = [1, 2, 3, 4, 5];

$square = array_map(function ($number) {
    return $number * $number;
}, $numbers);

// Arrow functions can use global variables
$square_arrow = array_map(fn($n) => $n * $n, $numbers);

// Arrow function passed in instead of anonymous function 
$squareArrowPassed = fn($n) => $n * $n;
$square_arrow2 = array_map($squareArrowPassed, $numbers);


echo implode($square);
echo implode($square_arrow);
