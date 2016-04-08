<?php

function get_greeting($name) {
    return "Welcome " . $name . "!";
}

?>

<html>
    <head>
        <title>
            <?php print get_greeting("Bob"); ?>
        </title>
    </head>
    <body>
       <?php print get_greeting("Jane"); ?>
    </body>
</html>
