<?php

// Removing items can be done by index, using the unset() function.
$names = ["bob", "jenny", "joe", "peter"];
unset($names[2]);

// Note: doing it this way does not change index numbers.
print $names[3] . "<br />";   // prints "peter"

// You can use array_splice() function to remove and reorder keys
$names2 = ["bob", "jenny", "joe", "peter"];
$removed = array_splice($names2, 2, 1);
print $names2[3] . "<br />";

// Remove items from associative arrays by key.
$soup_cans = [
  "lentil"    => 10,
  "chicken"   => 5,
  "chowder"   => 3,
  "butternut" => 2
];
unset($soup_cans["chicken"]);

print "hi";