<?php

/* 
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

$name = 'Bob';
$weight = 175.4;
$valid = TRUE;

?>
<html>
    <body>
        <?php print $name; ?>'s weight is <?php print $weight; ?> pounds.
        This is a <?php print $valid; ?> statement.
        
        
        <?php 
          $name = 'Joe';
          $weight = $weight + "25.5";
          $valid = FALSE;
        ?>
        
        <?php print $name; ?>'s weight is <?php print $weight; ?> pounds.
        This is a <?php print $valid; ?> statement.
    </body>
</html>