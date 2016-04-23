<?php

include 'vendor/autoload.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Accountant;
use Bitwisdom\Reviews\Plumber;
use Bitwisdom\Reviews\Review;

$businesses = [];
$businesses[] = new Restaurant("China King");
$businesses[] = new Restaurant("Burger Shack");
$businesses[] = new Accountant("Jessica Jones");
$businesses[] = new Accountant("Bob Roberts");
$businesses[] = new Plumber("Ace Plumbing");
$businesses[] = new Plumber("Clog Busters");


$reviews = [];
$reviews[] = new Review(8, $businesses[0]);
$reviews[] = new Review(7, $businesses[0]);
$reviews[] = new Review(5, $businesses[1]);
$reviews[] = new Review(8, $businesses[1]);
$reviews[] = new Review(10, $businesses[1]);
$reviews[] = new Review(7, $businesses[2]);
$reviews[] = new Review(10, $businesses[2]);
$reviews[] = new Review(2, $businesses[3]);
$reviews[] = new Review(3, $businesses[3]);
$reviews[] = new Review(8, $businesses[3]);
$reviews[] = new Review(4, $businesses[3]);
$reviews[] = new Review(10, $businesses[4]);
$reviews[] = new Review(9, $businesses[4]);
$reviews[] = new Review(6, $businesses[5]);
$reviews[] = new Review(1, $businesses[5]);
$reviews[] = new Review(10, $businesses[5]);
$reviews[] = new Review(8, $businesses[5]);
$reviews[] = new Review(9, $businesses[5]);