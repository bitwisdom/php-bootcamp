<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$greeting = "Hello";
$name = "Bob";

?>
<html>
    <head>
        <title><?php print $greeting; ?> <?php print $name; ?>!</title>
    </head>
    <body>
        <?php
            $greeting = "Goodbye";
            $name = "Joe";
        ?>
        
        <?php print $greeting; ?> <?php print $name; ?>!
    </body>
</html>