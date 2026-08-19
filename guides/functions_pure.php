<?php

// Doesn't mutate anything, doesn't have any side effects, and always returns the same output for the same input. 

function addToTotal(int $total, int $value): int
{
    return $total + $value;
}

// Usage — caller manages the state, not the function:
$total = 0;
$total = addToTotal($total, 5);  // 5
$total = addToTotal($total, 3);  // 8