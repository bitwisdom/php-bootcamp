<?php

include 'vendor/autoload.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Examples\TestExample;

$example = new Bitwisdom\Reviews\Examples\TestExample();

$restaurant_one = new Restaurant("China King");
$restaurant_two = new Restaurant("Burger Shack");

//var_dump($restaurant_one);
//var_dump($restaurant_two);
//var_dump($restaurant_one);

print "Restaurant One: " . $restaurant_one->getName() . "<br />";
print "Restaurant Two: " . $restaurant_two->getName() . "<br />";