<?php


// create a singleton pattern

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
