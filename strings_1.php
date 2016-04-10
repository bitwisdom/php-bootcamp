<?php

$example = "The quick brown fox jumps over the lazy dog.";

print $example . "<br />";

// String length
print "Length: " . strlen($example) . " characters<br />";


// Sub string
print "First 10 chars: " . substr($example, 0, 10) . "<br />";
print "Second 10 chars: " . substr($example, 10, 10) . "<br />";
print "Last 10 chars: " . substr($example, -10) . "<br />";


// Does this string contain another string? Find first occurrence
$fox = strstr($example, "fox");
print "Contains Fox: " . $fox . "<br />";
// Note: returns the part of the string starting with this word to the end.

$giraffe = strstr($example, "giraffe");
print "Contains Giraffe: " . $giraffe . "<br />";
// Returns empty string (FALSE). Doesn't contain "giraffe".

// Does this string contain another string? Find position of first occurrence
$fox = strpos($example, "fox");
print "Contains Fox: " . $fox . "<br />";
// Note: returns character position of start of the word "fox"

$giraffe = strpos($example, "giraffe");
print "Contains Giraffe: " . $giraffe . "<br />";
// Returns empty string (FALSE). Doesn't contain "giraffe".


// Replace characters in a string.
$new_example = str_replace("fox", "buffalo", $example);
print $new_example . "<br />";

$new_example = str_replace("the", "a", $example);
print $new_example . "<br />";

// Case-insensitive replace
$new_example = str_ireplace("the", "a", $example);
print $new_example . "<br />";


// Lower case a string
$new_example = strtolower($example);
print $new_example . "<br />";

// Upper case a string
$new_example = strtoupper($example);
print $new_example . "<br />";


// Upper case all the first characters of words
$new_example = ucwords($example);
print $new_example . "<br />";

// Upper case just the first letter.
$lower_example = "the quick brown fox jumps over the lazy dog.";
$new_example = ucfirst($lower_example);
print $new_example . "<br />";