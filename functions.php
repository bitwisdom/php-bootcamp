<?php

function greeting($name, $excitement_level = "medium") {
  if ($excitement_level == "high") {
    return "Welcome " . $name . "!";
  }
  elseif ($excitement_level == 'medium') {
    return "Welcome " . $name . ".";
  }
  else {
    return "Welcome " . $name . "...";
  }
}