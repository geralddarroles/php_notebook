<?php 

echo "Rocket launch countdown: \n"; 

for ($i = 10; $i > 0; $i--) {
    echo $i . "..."; 
    if (1 == $i) {
        echo "Lift off!  \n"; 
    }
    sleep(1); 
}

// Do while



// For each

$basket = ["apple", "banana", "orange", "grape", "strawberry"];
$basket2 = ["apple" => 3, "banana" => 4];  

foreach ($basket2 as $item => $quantity){
    echo "$item: $quantity \n"; 
    $total += $quantity; 
}