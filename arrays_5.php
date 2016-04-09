<?php

// What happens with associative arrays?
$soup_cans = [
  "lentil"    => 10,
  "chicken"   => 5,
  "chowder"   => 3,
  "butternut" => 2
];
var_dump($soup_cans);
sort($soup_cans);
var_dump($soup_cans);


// For sorting associative arrays, use:
$soup_cans = [
  "lentil"    => 10,
  "chicken"   => 5,
  "chowder"   => 3,
  "butternut" => 2
];
var_dump($soup_cans);
asort($soup_cans);
var_dump($soup_cans);
arsort($soup_cans);
var_dump($soup_cans);


// Sort associative arrays by key.
$soup_cans = [
  "lentil"    => 10,
  "chicken"   => 5,
  "chowder"   => 3,
  "butternut" => 2
];
var_dump($soup_cans);
ksort($soup_cans);
var_dump($soup_cans);
krsort($soup_cans);
var_dump($soup_cans);
