<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cans = 3;
$status = "";

if ($cans > 7) {
    $status = "Great!";
}
else {
    $status = "Oh no!";
}

// Can be rewritten
$status = ($cans > 7) ? "Great!" : "Oh no!";


print "We have $cans cans of soup. " . $status;

