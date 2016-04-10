<?php

$example = "The quick brown fox jumps over 15 dogs!";

print $example . "<br />";

if (preg_match('/fox/', $example)) {
  print "This story is about a fox. <br />";
}

if (preg_match('/^The/', $example)) {
  print "This story starts with The. <br />";
}

if (preg_match('/!$/', $example)) {
  print "This story ends with a bang. <br />";
}

if (preg_match('/\d/', $example)) {
  print "This story contains a number. <br />";
}

print "<br />";
$example = "The quick brown fox jumps over 15 dogs!";

print $example . "<br />";

if (preg_match('/\d/', $example, $matches)) {
  print "This story contains the number: " . $matches[0] . "<br />";
}

if (preg_match('/\d+/', $example, $matches)) {
  print "This story contains the number: " . $matches[0] . "<br />";
}

if (preg_match_all('/[o]/', $example, $matches)) {
  print "This story contains " . count($matches[0]) . " o characters.<br />";
}

if (preg_match_all('/[aeiou]/', $example, $matches)) {
  print "This story contains " . count($matches[0]) . " vowels.<br />";
}

if (preg_match_all('/[A-z]/', $example, $matches)) {
  print "This story contains " . count($matches[0]) . " letters.<br />";
}

if (preg_match_all('/[0-9]/', $example, $matches)) {
  print "This story contains " . count($matches[0]) . " numbers.<br />";
}


print "<br />";
$new_example = preg_replace('/[o]/', 'aw', $example);
print $new_example . "<br />";

$new_example = preg_replace('/\d/', '#', $example);
print $new_example . "<br />";
