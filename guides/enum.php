<?php
// Enums similar to C++  syntax  when using 
enum DaysOfWeek
{
    case FRIDAY;
    case SATURDAY;
    case SUNDAY;
}


$today = DaysOfWeek::FRIDAY;

if ($today === DaysOfWeek::SUNDAY) {
    echo "It's sunday ";
} else {
    echo "not sunday";
}
