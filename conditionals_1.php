<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$cans = 22;
$name = "Bob";

print "We have $cans cans of soup. <br />";

if ($name == "Bob" && $cans > 21) {
    print "We have at least three weeks of soup! Stop asking!";
}
elseif ($name == "Bob") {
    if ($cans > 2) {
        print "Stop asking about the soup!";
    }
    else {
        print "Bob....I'm sorry we're almost out of soup.";
    }
}
elseif ($cans >= 21) {
    print "That's enough for three weeks.";
}
elseif ($cans >= 14) {
    print "That's enough for two weeks.";
}
elseif ($cans >= 7) {
    print "That's enough for one week.";
}
else {
    print "That's not enough for this week. <br />";
    print "We'd better go get some more soup.";
}

