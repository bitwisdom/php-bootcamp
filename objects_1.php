<?php


$soup = new stdClass();

$soup->name = "Butternut";
$soup->amount = 3;
$soup->rating = 10;
$soup->favorite = TRUE;
$soup->dates_eaten = ["2015/10/14", "2016/02/01", "2016/02/02"];

var_dump($soup);

print $soup->name . "<br />";
print "Last Eaten: " . 
        $soup->dates_eaten[count($soup->dates_eaten) - 1] . "<br />";
