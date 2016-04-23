<?php

include 'vendor/autoload.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Review;

$restaurant_one = new Restaurant("China King");
$restaurant_two = new Restaurant("Burger Shack");

$review_one = new Review(10, $restaurant_one);
$review_two = new Review(7, $restaurant_two);
$review_three = new Review(6, $restaurant_one);


var_dump($review_one);
var_dump($review_two);
var_dump($review_three);

//var_dump($restaurant_one);
//var_dump($restaurant_two);
//var_dump($restaurant_one);

print $review_one->getRestaurant()->getName() . ': ' .
        $review_one->getScore() . '<br />';

print $review_three->getRestaurant()->getName() . ': ' .
        $review_three->getScore() . '<br />';