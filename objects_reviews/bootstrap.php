<?php

include 'vendor/autoload.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Review;

$restaurants = [];
$restaurants[] = new Restaurant("China King");
$restaurants[] = new Restaurant("Burger Shack");
$restaurants[] = new Restaurant("Chop House");
$restaurants[] = new Restaurant("Gratzi");
$restaurants[] = new Restaurant("Madras Masala");
$restaurants[] = new Restaurant("Corner Brewery");

$reviews = [];
$reviews[] = new Review(8, $restaurants[0]);
$reviews[] = new Review(7, $restaurants[0]);
$reviews[] = new Review(5, $restaurants[1]);
$reviews[] = new Review(8, $restaurants[1]);
$reviews[] = new Review(10, $restaurants[1]);
$reviews[] = new Review(7, $restaurants[2]);
$reviews[] = new Review(10, $restaurants[2]);
$reviews[] = new Review(2, $restaurants[3]);
$reviews[] = new Review(3, $restaurants[3]);
$reviews[] = new Review(8, $restaurants[3]);
$reviews[] = new Review(4, $restaurants[3]);
$reviews[] = new Review(10, $restaurants[4]);
$reviews[] = new Review(9, $restaurants[4]);
$reviews[] = new Review(6, $restaurants[5]);
$reviews[] = new Review(1, $restaurants[5]);
$reviews[] = new Review(10, $restaurants[5]);
$reviews[] = new Review(8, $restaurants[5]);
$reviews[] = new Review(9, $restaurants[5]);
