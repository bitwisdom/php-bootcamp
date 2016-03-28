<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$x = (TRUE && TRUE);    // $x is TRUE
$x = (TRUE and FALSE);  // $x is FALSE
$x = (TRUE || FALSE);   // $x is TRUE
$x = (FALSE or FALSE);  // $x is FALSE
$x = (FALSE || TRUE);   // $x is TRUE
$x = (TRUE xor FALSE);  // $x is TRUE
$x = (TRUE xor TRUE);   // $x is FALSE
$x = !(TRUE);           // $x is FALSE
$x = !(TRUE && FALSE);  // $x is TRUE
$x = !(TRUE xor FALSE); // $x is FALSE


$y = 1;
$z = 3;
$x = (($y < 2) && ($z != 4));

$y = 1;