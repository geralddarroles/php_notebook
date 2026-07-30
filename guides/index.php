<?php 

echo "hello \n"; 

$newVariable = "This is a variable"; 
 

echo $newVariable;  

// Concatenation 
echo "Hello, " . $newVariable . "!n";  

 var_dump($newVariable); 


 // Types can be coerced to a different type 
 // Float at the top
 // Integers
 // Sample loop with input


$secret = "magic"; 
$attempts = 0; 
$maxAttempts = 5; 

while ($attempts < $maxAttempts){
 // remove break to start working on this   
break; 
    echo "Guess the password:"; 
    $guess = trim(fgets(STDIN));
    $attempts++; 

    if ($guess == $secret) {
        echo "Correct! you've unlocked the treasure \n";  
        break; 
    } elseif ($attempts >= $maxAttempts) {
        echo "Reach all possible attempts, you lose";
        break; 
    } else {
        echo "Attempts remaining:" . $maxAttempts - $attempts; 
    }
}

// For loop for php 


