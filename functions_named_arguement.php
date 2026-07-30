<?php

function greet(string $name, string $greeting = "Hello", bool $shout = false): string
{
        $message = "$greeting, $name";
        return $shout ? strtoupper($message) : $message;
}

// Consume the function
echo greet("Alice") . "\n";
echo greet("Bob", "Hi") . "\n";
echo greet("Charlie", "Hey", true) . "\n";
echo greet(name: "Diana", greeting: "Howdy", shout: true) . "\n";
