<?php

include 'vendor/autoload.php';

$example = new Bitwisdom\Reviews\Examples\TestExample();

$restaurant_one = new Bitwisdom\Reviews\Restaurant("China King");
$restaurant_two = new Bitwisdom\Reviews\Restaurant("Burger Shack");

//var_dump($restaurant_one);
//var_dump($restaurant_two);
//var_dump($restaurant_one);

print "Restaurant One: " . $restaurant_one->getName() . "<br />";
print "Restaurant Two: " . $restaurant_two->getName() . "<br />";