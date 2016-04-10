<?php

$names = ["Bob", "Jane", "Joe", "Peter"];

foreach ($names as $name) {
  if ($name == "Joe") {
    break;
  }
  print "Hello " . $name . "!<br />";
}

/* The above prints:
 * 
 * Hello Bob!
 * Hello Jane!
 */
