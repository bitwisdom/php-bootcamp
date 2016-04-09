<?php

$names = ["bob", "jenny", "peter", "joe"];

// Remove item from the beginning of the array.
$first_name = array_shift($names);
print $first_name . "<br />";
var_dump($names);

// Add a new item at the beginning of an array.
array_unshift($names, "jessica");
var_dump($names);

// Remove item from the end of an array.
$last_name = array_pop($names);
print $last_name . "<br />";
var_dump($names);

// Add a new item to the end of an array. 
array_push($names, "robert");   // This is the same as $names[] = "robert";
var_dump($names);


$names = ["bob", "jenny", "peter", "joe"];
var_dump($names);
// Extract several items from an array. (leaving it intact)
$extracted = array_slice($names, 1, 2);
var_dump($extracted);
var_dump($names);

// Extract several items from an array (removing them from array)
$extracted = array_splice($names, 1, 2);
var_dump($extracted);
var_dump($names);

$names = ["bob", "jenny", "peter", "joe"];

// Extract several items from an array (and replace them in array)
$extracted = array_splice($names, 1, 2, array("harry", "holly"));
var_dump($extracted);
var_dump($names);


// Turning array to string for printing.
$names = ["bob", "jenny", "peter", "joe"];
$names_list = implode(", ", $names);
print $names_list . "<br />";

// Turning a string list into an array
$fruit_list = "apples, oranges, lemons, peaches";
$fruit = explode(", ", $fruit_list);
var_dump($fruit);
