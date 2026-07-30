<?php 
$abc = null; 
$db = $abc ?? "default"; 
$arraySample = []; 

var_dump(
    null == null, 
    null == false, 
    null == 0, 
    null == "",
    null == [], 
    $abc, 
    isset($abc) ,  
    is_null($abc), 
    $db, 
    empty([]) ,// isArray empty. 
); 


