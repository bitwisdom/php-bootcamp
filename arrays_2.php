<?php

// Associative arrays map keys to values. They do not use index numbers. 

// How many cans of soup of each type do we have?
$soup_cans = ["lentil" => 10, "chicken" => 5, "chowder" => 3];

// It is easier to read if you write associative arrays like this: 
$soup_cans = [
  "lentil"  => 10,
  "chicken" => 5,
  "chowder" => 3,
];  

// Accessing associative arrays is by key.
print "Lentil: " . $soup_cans["lentil"] . "<br />";
print "Chicken: " . $soup_cans["chicken"] . "<br />";
print "Chowder: " . $soup_cans["chowder"] . "<br />";

// Adding items by key
$soup_cans["butternut"] = 2;
print "Butternut: " . $soup_cans["butternut"] . "<br />";

// Changing a value
$soup_cans["chicken"] = 10;
var_dump($soup_cans);