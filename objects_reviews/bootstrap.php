<?php

include 'vendor/autoload.php';

use Bitwisdom\Reviews\Restaurant;
use Bitwisdom\Reviews\Accountant;
use Bitwisdom\Reviews\Plumber;
use Bitwisdom\Reviews\ScoreReview;
use Bitwisdom\Reviews\TextReview;

$businesses = [];
$businesses[] = new Restaurant("China King", "Chinese");
$businesses[] = new Restaurant("Burger Shack", "Diner");
$businesses[] = new Accountant("Jessica Jones", TRUE);
$businesses[] = new Accountant("Bob Roberts", FALSE);
$businesses[] = new Plumber("Ace Plumbing");
$businesses[] = new Plumber("Clog Busters");


$reviews = [];
$reviews[] = new ScoreReview(8, $businesses[0]);
$reviews[] = new ScoreReview(7, $businesses[0]);
$reviews[] = new TextReview("Delicious!", $businesses[0]);
$reviews[] = new ScoreReview(5, $businesses[1]);
$reviews[] = new ScoreReview(8, $businesses[1]);
$reviews[] = new ScoreReview(10, $businesses[1]);
$reviews[] = new TextReview("Very sharp. Jessica is great.", $businesses[2]);
$reviews[] = new ScoreReview(7, $businesses[2]);
$reviews[] = new ScoreReview(10, $businesses[2]);
$reviews[] = new ScoreReview(2, $businesses[3]);
$reviews[] = new TextReview("I got audited twice with Bob.", $businesses[3]);
$reviews[] = new ScoreReview(3, $businesses[3]);
$reviews[] = new ScoreReview(8, $businesses[3]);
$reviews[] = new ScoreReview(4, $businesses[3]);
$reviews[] = new ScoreReview(10, $businesses[4]);
$reviews[] = new ScoreReview(9, $businesses[4]);
$reviews[] = new ScoreReview(6, $businesses[5]);
$reviews[] = new ScoreReview(1, $businesses[5]);
$reviews[] = new TextReview("Superb job!", $businesses[5]);
$reviews[] = new TextReview("Not so great. Had to come back multiple times.", $businesses[5]);
$reviews[] = new ScoreReview(10, $businesses[5]);
$reviews[] = new ScoreReview(8, $businesses[5]);
$reviews[] = new ScoreReview(9, $businesses[5]);