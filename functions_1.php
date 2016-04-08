<?php

function print_greeting() {
    print "Welcome Joe";
}

?>

<html>
    <head>
        <title>
            <?php print_greeting(); ?> 
        </title>
    </head>
    <body>
        <?php print_greeting(); ?>
    </body>
</html>

