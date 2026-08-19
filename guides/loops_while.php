<?php

while ($attempts < $maxAttempts) {
    // remove break to start working on this
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
