<?php

$total = 0;

function addToTal($value)
{
    global $total;
    $total += $value;
    return $total;
}

// this is not a pure funciton because it has side effects and does not output based on the same input 

function addToTal2($value)
{
    $total = $value + $value;
    return $total;
}
