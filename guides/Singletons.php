<?php


// Singleton - a design pattern that restricts the instantiation of a class to one object. This is useful when exactly one object is needed to coordinate actions across the system.
// Similar to static classes, but with the ability to implement interfaces and extend other classes. 

class Connection
{
    private function __construct() {}
    private static $instance = null;

    public static function singleton()
    {
        if (null === static::$instance) {
            return static::$instance = new Connection();
        }
    }
}

$connection = Connection::singleton();
