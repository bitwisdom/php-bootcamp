<?php

$names = ["Bob", "Jane", "Joe", "Peter"];

for ($i = 0; $i < count($names); $i++) {
  print "Hello " . $names[$i] . "!<br />";
}

print "<br />";

// Same as this while loop.
$i = 0;
while ($i < count($names)) {
  print "Hello " . $names[$i] . "!<br />";
  $i++;
}