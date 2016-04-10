<?php

$names = ["Bob", "Jane", "Joe", "Peter"];

foreach ($names as $name) {
  print "Hello " . $name . "!<br />";
}

print "<br />";

// Can use key and value for associative arrays.
$cans = [
  "lentil"    => 10,
  "chicken"   => 5,
  "chowder"   => 3,
  "butternut" => 2
];

foreach ($cans as $soup => $number) {
  print $soup . ": " . $number . "<br />";
}

