<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

// Comparison
$y = 1;
$x = ($y == 1);     // $x is TRUE
$x = ($y != 1);     // $x is FALSE
$x = ($y <> 2);     // $x is TRUE
$x = ($y < 2);      // $x is TRUE
$x = ($y > 2);      // $x is FALSE
$x = ($y <= 2);     // $x is TRUE
$x = ($y >= 1);     // $x is TRUE


$x = ($y == "1");   // $x is TRUE
$x = ($y == TRUE);  // $x is TRUE
$x = ($y === "1");  // $x is FALSE
$x = ($y === TRUE); // $x is FALSE
$x = ($y === 1);
$x = ($y !== "1");  // $x is TRUE

$x = ("" == FALSE);  // $x is TRUE
$x = ("" === FALSE); // $x is FALSE
