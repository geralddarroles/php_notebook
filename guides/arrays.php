<?php

// two types of array, simple array, and assocative array, associative arrays are like js objects or hash maps 
// Arrays don't have their own methods, they are closer to C than javascript, but there are many built-in functions for arrays in PHP. 

// Index Array (Simple Array)
$colors = array("Red", "Green", "Blue");
echo $colors[0]; // Output: Red

// Associative Array
$person = array("name" => "John", "age" => 30, "city" => "New York");
echo $person["name"]; // Output: John

// Combined - Array of Associative Arrays 
$employees = array(
    array("name" => "John", "age" => 30, "department" => "IT"),
    array("name" => "Jane", "age" => 28, "department" => "HR"),
    array("name" => "Bob", "age" => 35, "department" => "Sales")
);
echo $employees[0]["name"]; // Output: John
echo $employees[1]["department"]; // Output: HR

// Common PHP Array Functions
echo "\n--- Array Functions ---\n";

// count() - Returns the number of elements in an array
echo "count(\$colors): " . count($colors) . "\n"; // Output: 3

// array_push() - Add one or more elements to the end of an array
array_push($colors, "Yellow");
echo "After push: " . implode(", ", $colors) . "\n";

// array_pop() - Remove the last element from an array
array_pop($colors);
echo "After pop: " . implode(", ", $colors) . "\n";

// array_shift() - Remove the first element from an array
array_shift($colors);
echo "After shift: " . implode(", ", $colors) . "\n";

// array_unshift() - Add one or more elements to the beginning of an array
array_unshift($colors, "Purple");
echo "After unshift: " . implode(", ", $colors) . "\n";

// in_array() - Check if a value exists in an array
echo "in_array('Green', \$colors): " . (in_array('Green', $colors) ? 'true' : 'false') . "\n";

// array_key_exists() - Check if a key exists in an array
echo "array_key_exists('name', \$person): " . (array_key_exists('name', $person) ? 'true' : 'false') . "\n";

// array_keys() - Get all keys from an array
echo "array_keys(\$person): " . implode(", ", array_keys($person)) . "\n";

// array_values() - Get all values from an array
echo "array_values(\$person): " . implode(", ", array_values($person)) . "\n";

// array_merge() - Merge two or more arrays
$merged = array_merge($colors, array("Orange", "Pink"));
echo "array_merge: " . implode(", ", $merged) . "\n";

// array_slice() - Extract a slice of the array
$slice = array_slice($colors, 1, 2);
echo "array_slice: " . implode(", ", $slice) . "\n";

// array_splice() - Remove and replace a portion of an array
$colors_copy = $colors;
$removed = array_splice($colors_copy, 1, 1, array("White"));
echo "array_splice: " . implode(", ", $colors_copy) . "\n";

// sort() - Sort an array in ascending order
$nums = array(5, 2, 8, 1);
sort($nums);
echo "sort(): " . implode(", ", $nums) . "\n";

// rsort() - Sort an array in descending order
$nums = array(5, 2, 8, 1);
rsort($nums);
echo "rsort(): " . implode(", ", $nums) . "\n";

// asort() - Sort an associative array in ascending order (by value)
$fruits = array("a" => "banana", "b" => "apple", "c" => "cherry");
asort($fruits);
echo "asort(): " . implode(", ", $fruits) . "\n";

// ksort() - Sort an array by key
$person_copy = $person;
ksort($person_copy);
echo "ksort(): " . implode(", ", $person_copy) . "\n";

// array_reverse() - Reverse the order of elements in an array
$reversed = array_reverse($colors);
echo "array_reverse(): " . implode(", ", $reversed) . "\n";

// array_search() - Search for a value and return the key
$key = array_search("Green", $colors);
echo "array_search('Green'): " . ($key !== false ? $key : 'not found') . "\n";

// array_unique() - Remove duplicate values from an array
$dupes = array("Red", "Green", "Red", "Blue");
$unique = array_unique($dupes);
echo "array_unique(): " . implode(", ", $unique) . "\n";

// array_map() - Apply a callback to every element in an array
$nums = array(1, 2, 3, 4);
$squared = array_map(function ($n) {
    return $n * $n;
}, $nums);
echo "array_map (squared): " . implode(", ", $squared) . "\n";

// array_filter() - Filter array elements using a callback
$nums = array(1, 2, 3, 4, 5);
$evens = array_filter($nums, function ($n) {
    return $n % 2 == 0;
});
echo "array_filter (evens): " . implode(", ", $evens) . "\n";

// array_reduce() - Iteratively reduce the array to a single value
$nums = array(1, 2, 3, 4);
$sum = array_reduce($nums, function ($carry, $item) {
    return $carry + $item;
}, 0);
echo "array_reduce (sum): " . $sum . "\n";

// array_chunk() - Split an array into chunks
$chunks = array_chunk($colors, 2);
echo "array_chunk (size 2): " . count($chunks) . " chunks\n";

// array_flip() - Exchange keys with their values
$flipped = array_flip($person);
echo "array_flip: " . implode(", ", $flipped) . "\n";

// implode() / join() - Join array elements with a string
echo "implode(): " . implode(" - ", $colors) . "\n";

// explode() - Split a string into an array
$str = "Red,Green,Blue";
$split = explode(",", $str);
echo "explode(): " . implode(" | ", $split) . "\n";

// array_sum() - Calculate the sum of values in an array
$nums = array(10, 20, 30);
echo "array_sum(): " . array_sum($nums) . "\n";

// array_product() - Calculate the product of values in an array
$nums = array(2, 3, 4);
echo "array_product(): " . array_product($nums) . "\n";

// empty() - Check if an array is empty
echo "empty(\$colors): " . (empty($colors) ? 'true' : 'false') . "\n";

// isset() - Check if a variable is set
echo "isset(\$person['name']): " . (isset($person['name']) ? 'true' : 'false') . "\n";

// array_diff() - Compute the difference of arrays
$array1 = array("a" => "Red", "b" => "Green", "c" => "Blue");
$array2 = array("d" => "Red", "e" => "Yellow");
$diff = array_diff($array1, $array2);
echo "array_diff(): " . implode(", ", $diff) . "\n";

// array_intersect() - Compute the intersection of arrays
$array3 = array("a" => "Red", "b" => "Green");
$array4 = array("c" => "Red", "d" => "Blue");
$intersect = array_intersect($array3, $array4);
echo "array_intersect(): " . implode(", ", $intersect) . "\n";

// array_merge() - Merge arrays (already shown above, but documented here for completeness)
$merged_arrays = array_merge(array(1, 2), array(3, 4));
echo "array_merge (multiple): " . implode(", ", $merged_arrays) . "\n";

// Unpacking with spread operator (...)
$array5 = [1, 2, 3];
$array6 = [4, 5, 6];
$unpacked = [...$array5, ...$array6];
echo "Spread operator unpacking: " . implode(", ", $unpacked) . "\n";

// Unpacking with keys preservation
$assoc1 = ["a" => 1, "b" => 2];
$assoc2 = ["c" => 3, "d" => 4];
$unpacked_assoc = [...$assoc1, ...$assoc2];
echo "Spread operator with keys: " . implode(", ", $unpacked_assoc) . "\n";
