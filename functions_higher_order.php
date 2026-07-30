<?php


// take functions as arguements or returns a function 


function returnsFunction(string $message)
{
    return fn($name) =>   "$message  to $name";
}

$getGreeting = returnsFunction("Hello");

echo $getGreeting("Dave");
