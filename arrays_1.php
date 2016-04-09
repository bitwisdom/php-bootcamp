<?php

// arrays can contain integers
$x = array(1, 2, 3, 4);          

// arrays can contain strings       
$x = array("bob", "jane", "joe");     

// arrays can contain a mix of variable types  
$x = array(1, "bob", TRUE, 5.2);        

// arrays can contain other arrays (multidimensional)
$x = array(array(1, 2, 3), array(3, 4));


// Arrays have a shorter syntax using square brackets

// arrays can contain integers
$x = [1, 2, 3, 4];              

// arrays can contain strings   
$x = ["bob", "jane", "joe"];      

// arrays can contain a mix of variable types
$x = [1, "bob", TRUE, 5.2];        

 // arrays can contain other arrays (multidimensional)
$x = [[1, 2, 3], [3, 4]];

// Accessing data in an array. Use index number(s)
$x = ["bob", "jane", "joe"];
print $x[0];       // Prints "bob"
print $x[2];       // Prints "joe"

$x = [["bob", "jane", "joe"], ["jenny", "peter"]];
print $x[0][2];    // Prints "joe"
print $x[1][0];    // Prints “jenny"



$x = ["bob", "jane", "joe"];  

// Adding items to an array
$x[3] = "jenny";   // $x is now ["bob", "jane", "joe", "jenny"];

// Changing items in an array
$x[2] = "peter";   // $x is now ["bob", "jane", "peter", "jenny"];

// Adding items to the end of an array
$x[] = "billy";    // $x is now ["bob", "jane", "peter", "jenny", "billy"];
$x[] = "sally";    // $x is now ["bob", "jane", "peter", "jenny", "billy", “sally"];
