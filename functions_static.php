<?php


$superhero = "Superman"; 


function revealIdentity($superhero) {
    global $superhero; // access the global i.e. the one on line 4 
    echo "$superhero real name is clark kent";   
}

function staticVariable(){
    static $visitorCount = 0;  // this value is preserved everywhere in the app. 
    // default value is not initialized after the first used 
    $visitorCount++;
    echo "Visitor #$visitorCount has arrived! \n"; 
}; 

staticVariable();
staticVariable();  
staticVariable();