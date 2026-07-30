<?php

// any function that returns a value

function generateRandomNumGoingDown(int $start): array
// traditional functions, the generator number run first before the for each.  
{
    $result = [];
    for ($i = $start; $i > 0; $i--) {
        echo "generating number ... \n";
        $result[] = random_int(1, 100);
    }
    return $result;
}


foreach (generateRandomNumGoingDown(5) as $number) {
    echo "$number \n";
}


function generateRandomNumGoingDown2(int $start): Generator
// when the yield is done, the generator function run first then is pass down the list 
{
    for ($i = $start; $i > 0; $i--) {
        echo "generating number ... \n";
        yield  random_int(1, 100);
    }
}


foreach (generateRandomNumGoingDown2(5) as $number) {
    echo "$number \n";
    echo "$number \n";
}
