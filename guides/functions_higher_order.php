<?php


// take functions as arguements or returns a function 
// Same as any other language, functions can be passed as arguments to other functions or returned from other functions. 

function returnsFunction(string $message)
{
    return fn($name) =>   "$message  to $name";
}

$getGreeting = returnsFunction("Hello");

echo $getGreeting("Dave");
