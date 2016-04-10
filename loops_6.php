<?php

$names = ["Bob", "Jane", "Joe", "Peter"];

foreach ($names as $name) {
  if ($name == "Joe") {
    continue;
  }
  print "Hello " . $name . "!<br />";
}

/*
 * The above code prints:
 * 
 * Hello Bob!
 * Hello Jane!
 * Hello Peter!
 */