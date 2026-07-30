<?php 

declare(strict_types=1); // make this strict 

function greet($name , $timeOfDay = "day"){
    return "Hello, $name" . " " . $timeOfDay . "\n"; 
}

echo greet("Baboy"); 

function funcWithReturnValue(): string {
    return "returns a string " .  "\n" ; 
}

echo funcWithReturnValue(); 

function strictTypeFunc (int $a)  {
   echo $a;    
} 

// does not have a set number of arguements
function variadicFunctionArguements(...$numbers){ 
// this will pass as an array  
  return array_reduce($numbers, fn($carry, $item) => $carry + $item, 0);
}
$bigString =  implode(["string 1", "string2"]) . "\n";  
echo $bigString; 



