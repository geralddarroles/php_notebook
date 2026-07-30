<?php

// single qoute 
$singleqoute = ' no special characters';
// double qoute, 
$interpolatedString = "can do interpolation";


$thisString = "HELLO";

// herdoc -multiline string without interpulation
$nowdoc = <<<EOD
multiline doc 
this is a varialbe that can use interpolation
$thisString
EOD;

$heredoc = <<< "EOD"
multiline doc with interpolation  
$thisString    
\$thisString // escaping 
EOD;

echo $heredoc;

/*
substr
substr_compare
substr_count
strtoupper 
strtolower 
strpos 
replace  - does not change the regular variable 
*/

// append using .= 
$haytack = "the quick brown fox jumps over the lazy dog";

$swapp = str_replace("quick", "stupid", $haytack);
echo $swapp;

// string formatting c++ logs

$name = "gerald";
$age = "36";
printf("%s is %d years old.", $name, $age);


// use explode to split strings 
// use trim to remove spaces 
// use padded to add more strins on the two ends

// use mutlibite, get the base 64 data of a string
// var_dump(mb_strlen(weird string here)); 

// encoding for arrays
$url = "https://google.com";
var_dump(urlencode($url));
var_dump(urldecode($url));

base64_encode(""); // store data to text
base64_decode("");
