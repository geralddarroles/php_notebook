<?php

// anonymous function
$greet = function ($name) {
    return "Hello," .  $name;
};

$numbers = [1, 2, 3];
$mapped = array_map(function ($n) {
    // anonymous functions and closures have no access to variables defined outside.    
    return $n * 2;
}, $numbers);

// You can't  echo an array, you have to implode it. 
echo implode(', ', $mapped);

// to make outer variable available, you have to use the use keyword and pass the variables 

$message = "HELLO";

// To pass the data by reference, use & 
$greet2   = function ($name) use ($message) {
    $message = $message . "!";
    return "$message, $name \n";
};

echo $greet2("david");
