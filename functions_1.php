<?php

function get_greeting() {
    return "Welcome Joe";
}

?>

<html>
    <head>
        <title>
            <?php 
            $greeting = get_greeting();
            print $greeting; ?>
        </title>
    </head>
    <body>
        <?php print get_greeting(); ?>
    </body>
</html>

