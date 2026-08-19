<?php

// Only one way of doing export and import in PHP, using the require_once statement. 

$dbHost = "This is db host";

$data = [
    "string" => "hello",
    "integer" => 42,
    "float" => 3.14,
    "boolean" => true,
    "null" => null,
    "array" => ["PHP", "Guide"],
];

var_export($data);
