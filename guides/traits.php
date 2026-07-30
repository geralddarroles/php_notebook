<?php

// adding methods to classes without the need of inheriting from these classes

interface Logger
{
    public function log(string $message);
}

class User
{
    use Loggable;
    public function __construct(public string $name) {}

    public function save(): void
    {
        $this->log("User {$this->name} saved");
    }
}

trait Loggable
{
    public function log(string $message): void
    {
        echo "Logging: $message \n";
    }
}

$user = new User("loggable");
$user->log();
